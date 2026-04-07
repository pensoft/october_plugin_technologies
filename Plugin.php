<?php namespace Pensoft\Technologies;

use Backend;
use System\Classes\PluginBase;
use Pensoft\Technologies\Components\Technologies;
use Pensoft\Technologies\Components\Technology;

/**
 * Technologies Plugin Information File
 */
class Plugin extends PluginBase
{
    /**
     * Returns information about this plugin.
     */
    public function pluginDetails(): array
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
     */
    public function register(): void
    {

    }

    /**
     * Boot method, called right before the request route.
     */
    public function boot(): void
    {

    }

    /**
     * Registers any front-end components implemented in this plugin.
     */
    public function registerComponents(): array
    {
        return [
            Technologies::class => 'Technologies',
            Technology::class => 'Technology'
        ];
    }

    /**
     * Registers any back-end permissions used by this plugin.
     */
    public function registerPermissions(): array
    {
        return [
            'pensoft.technologies.access' => [
                'tab' => 'Technologies',
                'label' => 'Manage technologies'
            ],
        ];
    }

    /**
     * Registers back-end navigation items for this plugin.
     */
    public function registerNavigation(): array
    {
        return [
            'technologies' => [
                'label'       => 'Technologies',
                'url'         => Backend::url('pensoft/technologies/technology'),
                'icon'        => 'icon-cogs',
                'permissions' => ['pensoft.technologies.*'],
                'order'       => 500,
            ],
        ];
    }

}
