<?php namespace Hambern\Html5media;

use System\Classes\PluginBase;

/**
 * Html5media Plugin Information File
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
            'name'        => 'hambern.html5media::lang.plugin.name',
            'description' => 'hambern.html5media::lang.plugin.description',
            'author'      => 'Hambern',
            'icon'        => 'icon-play-circle-o'
        ];
    }

    /**
     * Registers any front-end components implemented in this plugin.
     *
     * @return array
     */
    public function registerComponents()
    {
        return [
            'Hambern\Html5media\Components\Media' => 'Media',
        ];
    }
}
