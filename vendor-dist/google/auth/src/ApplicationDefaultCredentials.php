<?php

/*
 * Copyright 2015 Google Inc.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *     http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */
namespace NF_FU_VENDOR\Google\Auth;

use DomainException;
use NF_FU_VENDOR\Google\Auth\Credentials\AppIdentityCredentials;
use NF_FU_VENDOR\Google\Auth\Credentials\GCECredentials;
use NF_FU_VENDOR\Google\Auth\HttpHandler\HttpClientCache;
use NF_FU_VENDOR\Google\Auth\HttpHandler\HttpHandlerFactory;
use NF_FU_VENDOR\Google\Auth\Middleware\AuthTokenMiddleware;
use NF_FU_VENDOR\Google\Auth\Subscriber\AuthTokenSubscriber;
use NF_FU_VENDOR\GuzzleHttp\Client;
use NF_FU_VENDOR\Psr\Cache\CacheItemPoolInterface;
/**
 * ApplicationDefaultCredentials obtains the default credentials for
 * authorizing a request to a Google service.
 *
 * Application Default Credentials are described here:
 * https://developers.google.com/accounts/docs/application-default-credentials
 *
 * This class implements the search for the application default credentials as
 * described in the link.
 *
 * It provides three factory methods:
 * - #get returns the computed credentials object
 * - #getSubscriber returns an AuthTokenSubscriber built from the credentials object
 * - #getMiddleware returns an AuthTokenMiddleware built from the credentials object
 *
 * This allows it to be used as follows with GuzzleHttp\Client:
 *
 *   use Google\Auth\ApplicationDefaultCredentials;
 *   use GuzzleHttp\Client;
 *   use GuzzleHttp\HandlerStack;
 *
 *   $middleware = ApplicationDefaultCredentials::getMiddleware(
 *       'https://www.googleapis.com/auth/taskqueue'
 *   );
 *   $stack = HandlerStack::create();
 *   $stack->push($middleware);
 *
 *   $client = new Client([
 *       'handler' => $stack,
 *       'base_uri' => 'https://www.googleapis.com/taskqueue/v1beta2/projects/',
 *       'auth' => 'google_auth' // authorize all requests
 *   ]);
 *
 *   $res = $client->get('myproject/taskqueues/myqueue');
 */
class ApplicationDefaultCredentials
{
    /**
     * Obtains an AuthTokenSubscriber that uses the default FetchAuthTokenInterface
     * implementation to use in this environment.
     *
     * If supplied, $scope is used to in creating the credentials instance if
     * this does not fallback to the compute engine defaults.
     *
     * @param string|array scope the scope of the access request, expressed
     *   either as an Array or as a space-delimited String.
     * @param callable $httpHandler callback which delivers psr7 request
     * @param array $cacheConfig configuration for the cache when it's present
     * @param CacheItemPoolInterface $cache an implementation of CacheItemPoolInterface
     *
     * @return AuthTokenSubscriber
     *
     * @throws DomainException if no implementation can be obtained.
     */
    public static function getSubscriber($scope = null, callable $httpHandler = null, array $cacheConfig = null, \NF_FU_VENDOR\Psr\Cache\CacheItemPoolInterface $cache = null)
    {
        $creds = self::getCredentials($scope, $httpHandler, $cacheConfig, $cache);
        return new \NF_FU_VENDOR\Google\Auth\Subscriber\AuthTokenSubscriber($creds, $httpHandler);
    }
    /**
     * Obtains an AuthTokenMiddleware that uses the default FetchAuthTokenInterface
     * implementation to use in this environment.
     *
     * If supplied, $scope is used to in creating the credentials instance if
     * this does not fallback to the compute engine defaults.
     *
     * @param string|array scope the scope of the access request, expressed
     *   either as an Array or as a space-delimited String.
     * @param callable $httpHandler callback which delivers psr7 request
     * @param array $cacheConfig configuration for the cache when it's present
     * @param CacheItemPoolInterface $cache
     *
     * @return AuthTokenMiddleware
     *
     * @throws DomainException if no implementation can be obtained.
     */
    public static function getMiddleware($scope = null, callable $httpHandler = null, array $cacheConfig = null, \NF_FU_VENDOR\Psr\Cache\CacheItemPoolInterface $cache = null)
    {
        $creds = self::getCredentials($scope, $httpHandler, $cacheConfig, $cache);
        return new \NF_FU_VENDOR\Google\Auth\Middleware\AuthTokenMiddleware($creds, $httpHandler);
    }
    /**
     * Obtains the default FetchAuthTokenInterface implementation to use
     * in this environment.
     *
     * If supplied, $scope is used to in creating the credentials instance if
     * this does not fallback to the Compute Engine defaults.
     *
     * @param string|array scope the scope of the access request, expressed
     *   either as an Array or as a space-delimited String.
     * @param callable $httpHandler callback which delivers psr7 request
     * @param array $cacheConfig configuration for the cache when it's present
     * @param CacheItemPoolInterface $cache
     *
     * @return CredentialsLoader
     *
     * @throws DomainException if no implementation can be obtained.
     */
    public static function getCredentials($scope = null, callable $httpHandler = null, array $cacheConfig = null, \NF_FU_VENDOR\Psr\Cache\CacheItemPoolInterface $cache = null)
    {
        $creds = null;
        $jsonKey = \NF_FU_VENDOR\Google\Auth\CredentialsLoader::fromEnv() ?: \NF_FU_VENDOR\Google\Auth\CredentialsLoader::fromWellKnownFile();
        if (!$httpHandler) {
            if (!($client = \NF_FU_VENDOR\Google\Auth\HttpHandler\HttpClientCache::getHttpClient())) {
                $client = new \NF_FU_VENDOR\GuzzleHttp\Client();
                \NF_FU_VENDOR\Google\Auth\HttpHandler\HttpClientCache::setHttpClient($client);
            }
            $httpHandler = \NF_FU_VENDOR\Google\Auth\HttpHandler\HttpHandlerFactory::build($client);
        }
        if (!\is_null($jsonKey)) {
            $creds = \NF_FU_VENDOR\Google\Auth\CredentialsLoader::makeCredentials($scope, $jsonKey);
        } elseif (\NF_FU_VENDOR\Google\Auth\Credentials\AppIdentityCredentials::onAppEngine() && !\NF_FU_VENDOR\Google\Auth\Credentials\GCECredentials::onAppEngineFlexible()) {
            $creds = new \NF_FU_VENDOR\Google\Auth\Credentials\AppIdentityCredentials($scope);
        } elseif (\NF_FU_VENDOR\Google\Auth\Credentials\GCECredentials::onGce($httpHandler)) {
            $creds = new \NF_FU_VENDOR\Google\Auth\Credentials\GCECredentials(null, $scope);
        }
        if (\is_null($creds)) {
            throw new \DomainException(self::notFound());
        }
        if (!\is_null($cache)) {
            $creds = new \NF_FU_VENDOR\Google\Auth\FetchAuthTokenCache($creds, $cacheConfig, $cache);
        }
        return $creds;
    }
    private static function notFound()
    {
        $msg = 'Could not load the default credentials. Browse to ';
        $msg .= 'https://developers.google.com';
        $msg .= '/accounts/docs/application-default-credentials';
        $msg .= ' for more information';
        return $msg;
    }
}
