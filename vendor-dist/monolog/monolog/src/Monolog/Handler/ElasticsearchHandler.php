<?php

declare (strict_types=1);
/*
 * This file is part of the Monolog package.
 *
 * (c) Jordi Boggiano <j.boggiano@seld.be>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace NF_FU_VENDOR\Monolog\Handler;

use NF_FU_VENDOR\Elasticsearch\Client;
use NF_FU_VENDOR\Elasticsearch\Common\Exceptions\RuntimeException as ElasticsearchRuntimeException;
use InvalidArgumentException;
use NF_FU_VENDOR\Monolog\Formatter\ElasticsearchFormatter;
use NF_FU_VENDOR\Monolog\Formatter\FormatterInterface;
use NF_FU_VENDOR\Monolog\Logger;
use RuntimeException;
use Throwable;
/**
 * Elasticsearch handler
 *
 * @link https://www.elastic.co/guide/en/elasticsearch/client/php-api/current/index.html
 *
 * Simple usage example:
 *
 *    $client = \Elasticsearch\ClientBuilder::create()
 *        ->setHosts($hosts)
 *        ->build();
 *
 *    $options = array(
 *        'index' => 'elastic_index_name',
 *        'type'  => 'elastic_doc_type',
 *    );
 *    $handler = new ElasticsearchHandler($client, $options);
 *    $log = new Logger('application');
 *    $log->pushHandler($handler);
 *
 * @author Avtandil Kikabidze <akalongman@gmail.com>
 */
class ElasticsearchHandler extends \NF_FU_VENDOR\Monolog\Handler\AbstractProcessingHandler
{
    /**
     * @var Client
     */
    protected $client;
    /**
     * @var array Handler config options
     */
    protected $options = [];
    /**
     * @param Client     $client  Elasticsearch Client object
     * @param array      $options Handler configuration
     * @param string|int $level   The minimum logging level at which this handler will be triggered
     * @param bool       $bubble  Whether the messages that are handled can bubble up the stack or not
     */
    public function __construct(\NF_FU_VENDOR\Elasticsearch\Client $client, array $options = [], $level = \NF_FU_VENDOR\Monolog\Logger::DEBUG, bool $bubble = \true)
    {
        parent::__construct($level, $bubble);
        $this->client = $client;
        $this->options = \array_merge([
            'index' => 'monolog',
            // Elastic index name
            'type' => '_doc',
            // Elastic document type
            'ignore_error' => \false,
        ], $options);
    }
    /**
     * {@inheritDoc}
     */
    protected function write(array $record) : void
    {
        $this->bulkSend([$record['formatted']]);
    }
    /**
     * {@inheritdoc}
     */
    public function setFormatter(\NF_FU_VENDOR\Monolog\Formatter\FormatterInterface $formatter) : \NF_FU_VENDOR\Monolog\Handler\HandlerInterface
    {
        if ($formatter instanceof \NF_FU_VENDOR\Monolog\Formatter\ElasticsearchFormatter) {
            return parent::setFormatter($formatter);
        }
        throw new \InvalidArgumentException('ElasticsearchHandler is only compatible with ElasticsearchFormatter');
    }
    /**
     * Getter options
     *
     * @return array
     */
    public function getOptions() : array
    {
        return $this->options;
    }
    /**
     * {@inheritDoc}
     */
    protected function getDefaultFormatter() : \NF_FU_VENDOR\Monolog\Formatter\FormatterInterface
    {
        return new \NF_FU_VENDOR\Monolog\Formatter\ElasticsearchFormatter($this->options['index'], $this->options['type']);
    }
    /**
     * {@inheritdoc}
     */
    public function handleBatch(array $records) : void
    {
        $documents = $this->getFormatter()->formatBatch($records);
        $this->bulkSend($documents);
    }
    /**
     * Use Elasticsearch bulk API to send list of documents
     *
     * @param  array             $records
     * @throws \RuntimeException
     */
    protected function bulkSend(array $records) : void
    {
        try {
            $params = ['body' => []];
            foreach ($records as $record) {
                $params['body'][] = ['index' => ['_index' => $record['_index'], '_type' => $record['_type']]];
                unset($record['_index'], $record['_type']);
                $params['body'][] = $record;
            }
            $responses = $this->client->bulk($params);
            if ($responses['errors'] === \true) {
                throw new \NF_FU_VENDOR\Elasticsearch\Common\Exceptions\RuntimeException('Elasticsearch returned error for one of the records');
            }
        } catch (\Throwable $e) {
            if (!$this->options['ignore_error']) {
                throw new \RuntimeException('Error sending messages to Elasticsearch', 0, $e);
            }
        }
    }
}
