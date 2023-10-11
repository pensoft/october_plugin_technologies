<?php namespace Pensoft\Technologies;

use Backend;
use System\Classes\PluginBase;

/**
 * Technologies Plugin Information File
 */
class Plugin extends PluginBase
{
    /**
     * Returns information about this plugin.
     *
     * @return array
     */
    public function pluginDetails()
    {
        return [
            'name'        => 'Technologies',
            'description' => 'Technologies module',
            'author'      => 'Pensoft',
            'icon'        => 'icon-cogs'
        ];
    }

    /**
     * Register method, called when the plugin is first registered.
     *
     * @return void
     */
    public function register()
    {

    }

    /**
     * Boot method, called right before the request route.
     *
     * @return void
     */
    public function boot()
    {

    }

    /**
     * Registers any front-end components implemented in this plugin.
     *
     * @return array
     */
    public function registerComponents()
    {
        return [
            'Pensoft\Technologies\Components\Technologies' => 'Technologies',
            'Pensoft\Technologies\Components\Technology' => 'Technology'
        ];
    }

    /**
     * Registers any back-end permissions used by this plugin.
     *
     * @return array
     */
    public function registerPermissions()
    {
        return []; // Remove this line to activate

        return [
            'pensoft.technologies.some_permission' => [
                'tab' => 'Technologies',
                'label' => 'Some permission'
            ],
        ];
    }

    /**
     * Registers back-end navigation items for this plugin.
     *
     * @return array
     */
    public function registerNavigation()
    {
        return [
            'blogrecords' => [
                'label'       => 'Technologies',
                'url'         => Backend::url('pensoft/technologies/technology'),
                'icon'        => 'icon-cogs',
                'permissions' => ['acme.blogrecords.*'],
                'order'       => 500,
            ],
        ];
    }
    
}
