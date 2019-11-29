<?php

namespace NF_FU_VENDOR;

// autoload_real.php @generated by Composer
class ComposerAutoloaderInite2cf1719c8eecfb9c5da833295566ddb
{
    private static $loader;
    public static function loadClassLoader($class)
    {
        if ('NF_FU_VENDOR\\Composer\\Autoload\\ClassLoader' === $class) {
            require __DIR__ . '/ClassLoader.php';
        }
    }
    public static function getLoader()
    {
        if (null !== self::$loader) {
            return self::$loader;
        }
        \spl_autoload_register(array('NF_FU_VENDOR\\ComposerAutoloaderInite2cf1719c8eecfb9c5da833295566ddb', 'loadClassLoader'), \true, \true);
        self::$loader = $loader = new \NF_FU_VENDOR\Composer\Autoload\ClassLoader();
        \spl_autoload_unregister(array('ComposerAutoloaderInite2cf1719c8eecfb9c5da833295566ddb', 'loadClassLoader'));
        $useStaticLoader = \PHP_VERSION_ID >= 50600 && !\defined('HHVM_VERSION') && (!\function_exists('zend_loader_file_encoded') || !\zend_loader_file_encoded());
        $useStaticLoader = false; if ($useStaticLoader) {
            require_once __DIR__ . '/autoload_static.php';
            \call_user_func(\NF_FU_VENDOR\Composer\Autoload\ComposerStaticInite2cf1719c8eecfb9c5da833295566ddb::getInitializer($loader));
        } else {
            $map = (require __DIR__ . '/autoload_namespaces.php');
            foreach ($map as $namespace => $path) {
                $loader->set($namespace, $path);
            }
            $map = (require __DIR__ . '/autoload_psr4.php');
            foreach ($map as $namespace => $path) {
                $loader->setPsr4($namespace, $path);
            }
            $classMap = (require __DIR__ . '/autoload_classmap.php');
            if ($classMap) {
                $loader->addClassMap($classMap);
            }
        }
        $loader->register(\true);
        $useStaticLoader = false; if ($useStaticLoader) {
            $includeFiles = \NF_FU_VENDOR\Composer\Autoload\ComposerStaticInite2cf1719c8eecfb9c5da833295566ddb::$files;
        } else {
            $includeFiles = (require __DIR__ . '/autoload_files.php');
        }
        foreach ($includeFiles as $fileIdentifier => $file) {
            \NF_FU_VENDOR\composerRequiree2cf1719c8eecfb9c5da833295566ddb($fileIdentifier, $file);
        }
        return $loader;
    }
}
function composerRequiree2cf1719c8eecfb9c5da833295566ddb($fileIdentifier, $file)
{
    if (empty($GLOBALS['__composer_autoload_files'][$fileIdentifier])) {
        require $file;
        $GLOBALS['__composer_autoload_files'][$fileIdentifier] = \true;
    }
}
