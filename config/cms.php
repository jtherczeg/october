<?php

return array(

    /*
    |--------------------------------------------------------------------------
    | Specifies the default CMS theme.
    |--------------------------------------------------------------------------
    |
    | This parameter value can be overridden by the CMS back-end settings.
    |
    */

    'activeTheme' => 'demo',

    /*
    |--------------------------------------------------------------------------
    | Determines which modules to load
    |--------------------------------------------------------------------------
    |
    | Specify which modules should be registered when using the application.
    |
    */

    'loadModules' => ['System', 'Backend', 'Cms'],

    /*
    |--------------------------------------------------------------------------
    | Specific plugins to disable
    |--------------------------------------------------------------------------
    |
    | Specify plugin codes which will always be disabled in the application.
    |
    */

    'disablePlugins' => [],

    /*
    |--------------------------------------------------------------------------
    | Prevents application updates
    |--------------------------------------------------------------------------
    |
    | If using composer or git to download updates to the core files, set this
    | value to 'true' to prevent the update gateway from trying to download
    | these files again as part of the application update process. Plugins
    | and themes will still be downloaded.
    |
    */

    'disableCoreUpdates' => false,

    /*
    |--------------------------------------------------------------------------
    | Bleeding edge updates
    |--------------------------------------------------------------------------
    |
    | If you are developing with October, it is important to have the latest
    | code base, set this value to 'true' to tell the platform to download
    | and use the development copies of core files and plugins.
    |
    */

    'edgeUpdates' => false,

    /*
    |--------------------------------------------------------------------------
    | Back-end URI prefix
    |--------------------------------------------------------------------------
    |
    | Specifies the URI prefix used for accessing back-end pages.
    |
    */

    'backendUri' => 'backend',

    /*
    |--------------------------------------------------------------------------
    | Back-end Skin
    |--------------------------------------------------------------------------
    |
    | Specifies the back-end skin to use.
    |
    */

    'backendSkin' => 'Backend\Skins\Standard',

    /*
    |--------------------------------------------------------------------------
    | Time to live for parsed CMS objects.
    |--------------------------------------------------------------------------
    |
    | Specifies the number of minutes the CMS object cache lives. After the interval 
    | is expired item are re-cached. Note that items are re-cached automatically when 
    | the corresponding template file is modified.
    |
    */

    'parsedPageCacheTTL' => 10,

    /*
    |--------------------------------------------------------------------------
    | Determines if the routing caching is enabled.
    |--------------------------------------------------------------------------
    |
    | If the caching is enabled, the page URL map is saved in the cache. If a page
    | URL was changed on the disk, the old URL value could be still saved in the cache. 
    | To update the cache the back-end Clear Cache feature should be used. It is recommended
    | to disable the caching during the development, and enable it in the production mode.
    |
    */

    'enableRoutesCache' => false,

    /*
    |--------------------------------------------------------------------------
    | Time to live for the URL map.
    |--------------------------------------------------------------------------
    |
    | The URL map used in the CMS page routing process. By default
    | the map is updated every time when a page is saved in the back-end or when the
    | interval, in minutes, specified with the urlMapCacheTTL parameter expires.
    |
    */

    'urlCacheTtl' => 10,

    /*
    |--------------------------------------------------------------------------
    | Determines if the asset caching is enabled.
    |--------------------------------------------------------------------------
    |
    | If the caching is enabled, combined assets are cached. If a asset file
    | is changed on the disk, the old file contents could be still saved in the cache.
    | To update the cache the back-end Clear Cache feature should be used. It is recommended
    | to disable the caching during the development, and enable it in the production mode.
    |
    */

    'enableAssetCache' => false,

    /*
    |--------------------------------------------------------------------------
    | Determines if the asset minification is enabled.
    |--------------------------------------------------------------------------
    |
    | If the minification is enabled, combined assets are compressed (minified).
    | It is recommended to disable the minification during development, and
    | enable it in production mode. If set to null, assets are minified
    | when debug mode (app.debug) is disabled.
    |
    */

    'enableAssetMinify' => null,

    /*
    |--------------------------------------------------------------------------
    | Plugins directory
    |--------------------------------------------------------------------------
    |
    | Specifies the plugins directory relative to the application root directory.
    |
    */

    'pluginsDir' => '/plugins',

    /*
    |--------------------------------------------------------------------------
    | Themes directory
    |--------------------------------------------------------------------------
    |
    | Specifies the themes directory relative to the application root directory.
    |
    */

    'themesDir' => '/themes',

    /*
    |--------------------------------------------------------------------------
    | Uploads directory
    |--------------------------------------------------------------------------
    |
    | Specifies the uploads directory relative to the application root directory.
    |
    */

    'uploadsDir' => '/uploads',

    /*
    |--------------------------------------------------------------------------
    | Default permission mask
    |--------------------------------------------------------------------------
    |
    | Specifies a default file and folder permission for newly created objects.
    |
    */

    'defaultMask' => ['file' => null, 'folder' => null],

    /*
    |--------------------------------------------------------------------------
    | Convert Line Endings
    |--------------------------------------------------------------------------
    |
    | Determines if October should convert line endings from the windows style
    | \r\n to the unix style \n.
    |
    */

    'convertLineEndings' => false,

    /*
    |--------------------------------------------------------------------------
    | Linking policy
    |--------------------------------------------------------------------------
    |
    | Controls how URL links are generated throughout the application.
    |
    | detect   - detect hostname and use the current schema
    | secure   - detect hostname and force HTTPS schema
    | insecure - detect hostname and force HTTP schema
    | force    - force hostname and schema using app.url config value
    |
    */

    'linkPolicy' => 'detect',

);
