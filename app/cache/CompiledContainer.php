<?php
/**
 * This class has been auto-generated by PHP-DI.
 */
class CompiledContainer extends DI\CompiledContainer{
    const METHOD_MAPPING = array (
  'icons' => 'get1',
  'base_path' => 'get2',
  'app_path' => 'get3',
  'asset_path' => 'get4',
  'cache_path' => 'get5',
  'config_path' => 'get6',
  'source_path' => 'get7',
  'translations_path' => 'get8',
  'views_path' => 'get9',
  'app_files' => 'get10',
  'middlewares' => 'get11',
  'sort_methods' => 'get12',
  'view_functions' => 'get13',
  'App\\HiddenFiles' => 'get14',
  'Symfony\\Component\\Finder\\Finder' => 'get15',
  'Symfony\\Contracts\\Cache\\CacheInterface' => 'get16',
  'Symfony\\Contracts\\Translation\\TranslatorInterface' => 'get17',
  'Slim\\Views\\Twig' => 'get18',
  'Whoops\\RunInterface' => 'get19',
  'cache_driver' => 'get20',
  'cache_lifetime' => 'get21',
  'cache_lottery' => 'get22',
  'view_cache' => 'get23',
  'memcached_host' => 'get24',
  'memcached_port' => 'get25',
  'memcached_config' => 'get26',
  'redis_host' => 'get27',
  'redis_port' => 'get28',
  'redis_config' => 'get29',
  'http_cache' => 'get30',
  'debug' => 'get31',
  'language' => 'get32',
  'site_title' => 'get33',
  'meta_description' => 'get34',
  'home_text' => 'get35',
  'display_readmes' => 'get36',
  'readmes_first' => 'get37',
  'zip_downloads' => 'get38',
  'google_analytics_id' => 'get39',
  'matomo_analytics_url' => 'get40',
  'matomo_analytics_site_id' => 'get41',
  'sort_order' => 'get42',
  'reverse_sort' => 'get43',
  'hidden_files_list' => 'get44',
  'hidden_files' => 'get45',
  'hide_app_files' => 'get46',
  'hide_dot_files' => 'get47',
  'hide_vcs_files' => 'get48',
  'date_format' => 'get49',
  'timezone' => 'get50',
  'max_hash_size' => 'get51',
);

    protected function get1()
    {
        return [
            '7z' => 'fas fa-file-archive',
            'aac' => 'fas fa-music',
            'accdb' => 'fas fa-database',
            'ai' => 'fas fa-image',
            'aif' => 'fas fa-music',
            'apk' => 'fab fa-android',
            'app' => 'fas fa-window',
            'avi' => 'fas fa-video',
            'bak' => 'fas fa-save',
            'bat' => 'fas fa-terminal',
            'bmp' => 'fas fa-image',
            'box' => 'fas fa-archive',
            'bz' => 'fas fa-file-archive',
            'c' => 'fas fa-code',
            'cfg' => 'fas fa-file-alt',
            'class' => 'fas fa-code',
            'cmd' => 'fas fa-terminal',
            'com' => 'fas fa-window',
            'cpp' => 'fas fa-code',
            'css' => 'fab fab fa-css3',
            'csv' => 'fas fa-file-csv',
            'db' => 'fas fa-database',
            'dbf' => 'fas fa-database',
            'deb' => 'fas fa-archive',
            'doc' => 'fas fa-file-word',
            'docx' => 'fas fa-file-word',
            'drw' => 'fas fa-image',
            'email' => 'fas fa-envelope',
            'eot' => 'fas fa-font-case',
            'eps' => 'fas fa-image',
            'erb' => 'fas fa-code',
            'exe' => 'fab fa-windows',
            'flac' => 'fas fa-music',
            'flv' => 'fas fa-video',
            'gam' => 'fas fa-gamepad',
            'gif' => 'fas fa-image',
            'gz' => 'fas fa-file-archive',
            'htm' => 'fab fa-html5',
            'html' => 'fab fa-html5',
            'ico' => 'fas fa-image',
            'ini' => 'fas fa-file-alt',
            'iso' => 'fas fa-compact-disc',
            'jar' => 'fas fa-window',
            'java' => 'fab fa-java',
            'jpeg' => 'fas fa-image',
            'jpg' => 'fas fa-image',
            'js' => 'fab fa-js',
            'json' => 'fas fa-file-alt',
            'lock' => 'fas fa-lock',
            'log' => 'fas fa-file-alt',
            'mail' => 'fas fa-envelope',
            'md' => 'fab fa-markdown',
            'mdb' => 'fas fa-database',
            'mid' => 'fas fa-music',
            'midi' => 'fas fa-music',
            'mkv' => 'fas fa-video',
            'mov' => 'fas fa-video',
            'mp3' => 'fas fa-music',
            'mp4' => 'fas fa-video',
            'mpa' => 'fas fa-music',
            'mpg' => 'fas fa-video',
            'msg' => 'fas fa-envelope',
            'msi' => 'fas fa-window',
            'nes' => 'fas fa-gamepad',
            'odt' => 'fas fa-file-alt',
            'ogg' => 'fas fa-music',
            'ogv' => 'fas fa-video',
            'otf' => 'fas fa-font-case',
            'pdb' => 'fas fa-database',
            'pdf' => 'fas fa-file-pdf',
            'php' => 'fab fa-php',
            'phtml' => 'fab fa-html5',
            'pl' => 'fas fa-code',
            'png' => 'fas fa-image',
            'ppt' => 'fas fa-file-powerpoint',
            'pptx' => 'fas fa-file-powerpoint',
            'ps' => 'fas fa-image',
            'psd' => 'fas fa-image',
            'py' => 'fab fa-python',
            'rar' => 'fas fa-file-archive',
            'rb' => 'fas fa-code',
            'rom' => 'fas fa-gamepad',
            'rpm' => 'fas fa-archive',
            'rtf' => 'fas fa-file-alt',
            'sav' => 'fas fa-save',
            'sh' => 'fas fa-terminal',
            'sql' => 'fas fa-database',
            'svg' => 'fas fa-image',
            'swf' => 'fas fa-video',
            'tar' => 'fas fa-file-archive',
            'tga' => 'fas fa-image',
            'tif' => 'fas fa-image',
            'tiff' => 'fas fa-image',
            'ttf' => 'fas fa-font-case',
            'twig' => 'fab fa-php',
            'txt' => 'fas fa-file-alt',
            'vb' => 'fas fa-window',
            'wav' => 'fas fa-music',
            'webm' => 'fas fa-video',
            'wma' => 'fas fa-music',
            'wmv' => 'fas fa-video',
            'woff' => 'fas fa-font-case',
            'xhtml' => 'fas fa-code',
            'xls' => 'fas fa-file-excel',
            'xlsx' => 'fas fa-file-excel',
            'xml' => 'fas fa-code',
            'xz' => 'fas fa-file-archive',
            'yaml' => 'fas fa-file-alt',
            'zip' => 'fas fa-file-archive',
        ];
    }

    protected function get2()
    {
        return '/var/www/html';
    }

    protected function get3()
    {
        return '/var/www/html/app';
    }

    protected function get4()
    {
        return \DI\Definition\StringDefinition::resolveExpression('asset_path', '{app_path}/assets', $this->delegateContainer);
    }

    protected function get5()
    {
        return \DI\Definition\StringDefinition::resolveExpression('cache_path', '{app_path}/cache', $this->delegateContainer);
    }

    protected function get6()
    {
        return \DI\Definition\StringDefinition::resolveExpression('config_path', '{app_path}/config', $this->delegateContainer);
    }

    protected function get7()
    {
        return \DI\Definition\StringDefinition::resolveExpression('source_path', '{app_path}/src', $this->delegateContainer);
    }

    protected function get8()
    {
        return \DI\Definition\StringDefinition::resolveExpression('translations_path', '{app_path}/translations', $this->delegateContainer);
    }

    protected function get9()
    {
        return \DI\Definition\StringDefinition::resolveExpression('views_path', '{app_path}/views', $this->delegateContainer);
    }

    protected function get10()
    {
        return [
            0 => 'app',
            1 => 'index.php',
            2 => '.env',
            3 => '.env.example',
            4 => '.hidden',
        ];
    }

    protected function get11()
    {
        return $this->resolveFactory(static function (): array {
        return [
            \App\Middlewares\WhoopsMiddleware::class,
            \App\Middlewares\PruneCacheMiddleware::class,
            \App\Middlewares\CacheControlMiddleware::class,
            \App\Middlewares\RegisterGlobalsMiddleware::class,
        ];
    }, 'middlewares');
    }

    protected function get12()
    {
        return [
            'accessed' => 'App\\SortMethods\\Accessed',
            'changed' => 'App\\SortMethods\\Changed',
            'modified' => 'App\\SortMethods\\Modified',
            'name' => 'App\\SortMethods\\Name',
            'natural' => 'App\\SortMethods\\Natural',
            'type' => 'App\\SortMethods\\Type',
        ];
    }

    protected function get13()
    {
        return [
            0 => 'App\\ViewFunctions\\Asset',
            1 => 'App\\ViewFunctions\\Breadcrumbs',
            2 => 'App\\ViewFunctions\\Config',
            3 => 'App\\ViewFunctions\\FileUrl',
            4 => 'App\\ViewFunctions\\Icon',
            5 => 'App\\ViewFunctions\\Markdown',
            6 => 'App\\ViewFunctions\\ModifiedTime',
            7 => 'App\\ViewFunctions\\ParentUrl',
            8 => 'App\\ViewFunctions\\SizeForHumans',
            9 => 'App\\ViewFunctions\\Translate',
            10 => 'App\\ViewFunctions\\Url',
            11 => 'App\\ViewFunctions\\ZipUrl',
        ];
    }

    protected function get14()
    {
        return $this->resolveFactory([
            0 => 'App\\HiddenFiles',
            1 => 'fromConfig',
        ], 'App\\HiddenFiles');
    }

    protected function get15()
    {
        return $this->resolveFactory('App\\Factories\\FinderFactory', 'Symfony\\Component\\Finder\\Finder');
    }

    protected function get16()
    {
        return $this->resolveFactory('App\\Factories\\CacheFactory', 'Symfony\\Contracts\\Cache\\CacheInterface');
    }

    protected function get17()
    {
        return $this->resolveFactory('App\\Factories\\TranslationFactory', 'Symfony\\Contracts\\Translation\\TranslatorInterface');
    }

    protected function get18()
    {
        return $this->resolveFactory('App\\Factories\\TwigFactory', 'Slim\\Views\\Twig');
    }

    protected function get19()
    {
        $object = new Whoops\Run(NULL);
        return $object;
    }

    protected function get20()
    {
                $value = $_ENV['CACHE_DRIVER'] ?? $_SERVER['CACHE_DRIVER'] ?? getenv('CACHE_DRIVER');
        if (false !== $value) return $value;
        if (!true) {
            throw new \DI\Definition\Exception\InvalidDefinition("The environment variable 'CACHE_DRIVER' has not been defined");
        }
        return 'file';
    }

    protected function get21()
    {
                $value = $_ENV['CACHE_LIFETIME'] ?? $_SERVER['CACHE_LIFETIME'] ?? getenv('CACHE_LIFETIME');
        if (false !== $value) return $value;
        if (!true) {
            throw new \DI\Definition\Exception\InvalidDefinition("The environment variable 'CACHE_LIFETIME' has not been defined");
        }
        return 3600;
    }

    protected function get22()
    {
                $value = $_ENV['CACHE_LOTTERY'] ?? $_SERVER['CACHE_LOTTERY'] ?? getenv('CACHE_LOTTERY');
        if (false !== $value) return $value;
        if (!true) {
            throw new \DI\Definition\Exception\InvalidDefinition("The environment variable 'CACHE_LOTTERY' has not been defined");
        }
        return 2;
    }

    protected function get23()
    {
                $value = $_ENV['VIEW_CACHE'] ?? $_SERVER['VIEW_CACHE'] ?? getenv('VIEW_CACHE');
        if (false !== $value) return $value;
        if (!true) {
            throw new \DI\Definition\Exception\InvalidDefinition("The environment variable 'VIEW_CACHE' has not been defined");
        }
        return 'app/cache/views';
    }

    protected function get24()
    {
                $value = $_ENV['MEMCACHED_HOST'] ?? $_SERVER['MEMCACHED_HOST'] ?? getenv('MEMCACHED_HOST');
        if (false !== $value) return $value;
        if (!true) {
            throw new \DI\Definition\Exception\InvalidDefinition("The environment variable 'MEMCACHED_HOST' has not been defined");
        }
        return 'localhost';
    }

    protected function get25()
    {
                $value = $_ENV['MEMCACHED_PORT'] ?? $_SERVER['MEMCACHED_PORT'] ?? getenv('MEMCACHED_PORT');
        if (false !== $value) return $value;
        if (!true) {
            throw new \DI\Definition\Exception\InvalidDefinition("The environment variable 'MEMCACHED_PORT' has not been defined");
        }
        return 11211;
    }

    protected function get26()
    {
        return static function (\Memcached $memcached, \App\Config $config): void {
        $memcached->addServer(
            $config->get('memcached_host'),
            $config->get('memcached_port')
        );
    };
    }

    protected function get27()
    {
                $value = $_ENV['REDIS_HOST'] ?? $_SERVER['REDIS_HOST'] ?? getenv('REDIS_HOST');
        if (false !== $value) return $value;
        if (!true) {
            throw new \DI\Definition\Exception\InvalidDefinition("The environment variable 'REDIS_HOST' has not been defined");
        }
        return 'localhost';
    }

    protected function get28()
    {
                $value = $_ENV['REDIS_PORT'] ?? $_SERVER['REDIS_PORT'] ?? getenv('REDIS_PORT');
        if (false !== $value) return $value;
        if (!true) {
            throw new \DI\Definition\Exception\InvalidDefinition("The environment variable 'REDIS_PORT' has not been defined");
        }
        return 6379;
    }

    protected function get29()
    {
        return static function (\Redis $redis, \App\Config $config): void {
        $redis->pconnect(
            $config->get('redis_host'),
            $config->get('redis_port')
        );
    };
    }

    protected function get30()
    {
        return [
            'application/json' => 300,
            'application/zip' => 300,
        ];
    }

    protected function get31()
    {
                $value = $_ENV['APP_DEBUG'] ?? $_SERVER['APP_DEBUG'] ?? getenv('APP_DEBUG');
        if (false !== $value) return $value;
        if (!true) {
            throw new \DI\Definition\Exception\InvalidDefinition("The environment variable 'APP_DEBUG' has not been defined");
        }
        return false;
    }

    protected function get32()
    {
                $value = $_ENV['APP_LANGUAGE'] ?? $_SERVER['APP_LANGUAGE'] ?? getenv('APP_LANGUAGE');
        if (false !== $value) return $value;
        if (!true) {
            throw new \DI\Definition\Exception\InvalidDefinition("The environment variable 'APP_LANGUAGE' has not been defined");
        }
        return 'en';
    }

    protected function get33()
    {
                $value = $_ENV['SITE_TITLE'] ?? $_SERVER['SITE_TITLE'] ?? getenv('SITE_TITLE');
        if (false !== $value) return $value;
        if (!true) {
            throw new \DI\Definition\Exception\InvalidDefinition("The environment variable 'SITE_TITLE' has not been defined");
        }
        return 'Directory Lister';
    }

    protected function get34()
    {
                $value = $_ENV['META_DESCRIPTION'] ?? $_SERVER['META_DESCRIPTION'] ?? getenv('META_DESCRIPTION');
        if (false !== $value) return $value;
        if (!true) {
            throw new \DI\Definition\Exception\InvalidDefinition("The environment variable 'META_DESCRIPTION' has not been defined");
        }
        return 'Yet another directory listing, powered by Directory Lister.';
    }

    protected function get35()
    {
                $value = $_ENV['HOME_TEXT'] ?? $_SERVER['HOME_TEXT'] ?? getenv('HOME_TEXT');
        if (false !== $value) return $value;
        if (!true) {
            throw new \DI\Definition\Exception\InvalidDefinition("The environment variable 'HOME_TEXT' has not been defined");
        }
        return NULL;
    }

    protected function get36()
    {
                $value = $_ENV['DISPLAY_READMES'] ?? $_SERVER['DISPLAY_READMES'] ?? getenv('DISPLAY_READMES');
        if (false !== $value) return $value;
        if (!true) {
            throw new \DI\Definition\Exception\InvalidDefinition("The environment variable 'DISPLAY_READMES' has not been defined");
        }
        return true;
    }

    protected function get37()
    {
                $value = $_ENV['READMES_FIRST'] ?? $_SERVER['READMES_FIRST'] ?? getenv('READMES_FIRST');
        if (false !== $value) return $value;
        if (!true) {
            throw new \DI\Definition\Exception\InvalidDefinition("The environment variable 'READMES_FIRST' has not been defined");
        }
        return false;
    }

    protected function get38()
    {
                $value = $_ENV['ZIP_DOWNLOADS'] ?? $_SERVER['ZIP_DOWNLOADS'] ?? getenv('ZIP_DOWNLOADS');
        if (false !== $value) return $value;
        if (!true) {
            throw new \DI\Definition\Exception\InvalidDefinition("The environment variable 'ZIP_DOWNLOADS' has not been defined");
        }
        return true;
    }

    protected function get39()
    {
                $value = $_ENV['GOOGLE_ANALYTICS_ID'] ?? $_SERVER['GOOGLE_ANALYTICS_ID'] ?? getenv('GOOGLE_ANALYTICS_ID');
        if (false !== $value) return $value;
        if (!true) {
            throw new \DI\Definition\Exception\InvalidDefinition("The environment variable 'GOOGLE_ANALYTICS_ID' has not been defined");
        }
        return false;
    }

    protected function get40()
    {
                $value = $_ENV['MATOMO_ANALYTICS_URL'] ?? $_SERVER['MATOMO_ANALYTICS_URL'] ?? getenv('MATOMO_ANALYTICS_URL');
        if (false !== $value) return $value;
        if (!true) {
            throw new \DI\Definition\Exception\InvalidDefinition("The environment variable 'MATOMO_ANALYTICS_URL' has not been defined");
        }
        return false;
    }

    protected function get41()
    {
                $value = $_ENV['MATOMO_ANALYTICS_SITE_ID'] ?? $_SERVER['MATOMO_ANALYTICS_SITE_ID'] ?? getenv('MATOMO_ANALYTICS_SITE_ID');
        if (false !== $value) return $value;
        if (!true) {
            throw new \DI\Definition\Exception\InvalidDefinition("The environment variable 'MATOMO_ANALYTICS_SITE_ID' has not been defined");
        }
        return false;
    }

    protected function get42()
    {
                $value = $_ENV['SORT_ORDER'] ?? $_SERVER['SORT_ORDER'] ?? getenv('SORT_ORDER');
        if (false !== $value) return $value;
        if (!true) {
            throw new \DI\Definition\Exception\InvalidDefinition("The environment variable 'SORT_ORDER' has not been defined");
        }
        return 'type';
    }

    protected function get43()
    {
                $value = $_ENV['REVERSE_SORT'] ?? $_SERVER['REVERSE_SORT'] ?? getenv('REVERSE_SORT');
        if (false !== $value) return $value;
        if (!true) {
            throw new \DI\Definition\Exception\InvalidDefinition("The environment variable 'REVERSE_SORT' has not been defined");
        }
        return false;
    }

    protected function get44()
    {
                $value = $_ENV['HIDDEN_FILES_LIST'] ?? $_SERVER['HIDDEN_FILES_LIST'] ?? getenv('HIDDEN_FILES_LIST');
        if (false !== $value) return $value;
        if (!true) {
            throw new \DI\Definition\Exception\InvalidDefinition("The environment variable 'HIDDEN_FILES_LIST' has not been defined");
        }
        return '.hidden';
    }

    protected function get45()
    {
        return [
        ];
    }

    protected function get46()
    {
                $value = $_ENV['HIDE_APP_FILES'] ?? $_SERVER['HIDE_APP_FILES'] ?? getenv('HIDE_APP_FILES');
        if (false !== $value) return $value;
        if (!true) {
            throw new \DI\Definition\Exception\InvalidDefinition("The environment variable 'HIDE_APP_FILES' has not been defined");
        }
        return true;
    }

    protected function get47()
    {
                $value = $_ENV['HIDE_DOT_FILES'] ?? $_SERVER['HIDE_DOT_FILES'] ?? getenv('HIDE_DOT_FILES');
        if (false !== $value) return $value;
        if (!true) {
            throw new \DI\Definition\Exception\InvalidDefinition("The environment variable 'HIDE_DOT_FILES' has not been defined");
        }
        return true;
    }

    protected function get48()
    {
                $value = $_ENV['HIDE_VSC_FILES'] ?? $_SERVER['HIDE_VSC_FILES'] ?? getenv('HIDE_VSC_FILES');
        if (false !== $value) return $value;
        if (!true) {
            throw new \DI\Definition\Exception\InvalidDefinition("The environment variable 'HIDE_VSC_FILES' has not been defined");
        }
        return true;
    }

    protected function get49()
    {
                $value = $_ENV['DATE_FORMAT'] ?? $_SERVER['DATE_FORMAT'] ?? getenv('DATE_FORMAT');
        if (false !== $value) return $value;
        if (!true) {
            throw new \DI\Definition\Exception\InvalidDefinition("The environment variable 'DATE_FORMAT' has not been defined");
        }
        return 'Y-m-d H:i:s';
    }

    protected function get50()
    {
                $value = $_ENV['TIMEZONE'] ?? $_SERVER['TIMEZONE'] ?? getenv('TIMEZONE');
        if (false !== $value) return $value;
        if (!true) {
            throw new \DI\Definition\Exception\InvalidDefinition("The environment variable 'TIMEZONE' has not been defined");
        }
        return 'UTC';
    }

    protected function get51()
    {
                $value = $_ENV['MAX_HASH_SIZE'] ?? $_SERVER['MAX_HASH_SIZE'] ?? getenv('MAX_HASH_SIZE');
        if (false !== $value) return $value;
        if (!true) {
            throw new \DI\Definition\Exception\InvalidDefinition("The environment variable 'MAX_HASH_SIZE' has not been defined");
        }
        return 1000000000;
    }

}
