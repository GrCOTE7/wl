<?php namespace Grcote7\Tutos;

use System\Classes\PluginBase;

class Plugin extends PluginBase
{

	public function pluginDetails() {
		return [
            'name'        => 'Grcote7 Tutos',
            'description' => 'Some tuto (Objects, etc....)',
            'author'      => 'GC7',
            'icon'        => 'icon-leaf'
        ];
	}

    public function registerComponents() {
    	 return [
            '\Grcote7\Tutos\Components\Objects' => 'objects'
        ];
    
    }

    public function registerSettings() {
    }

    public function boot() {
    
    }

}
