<?php namespace Hambern\Html5media\Components;

use Cms\Classes\ComponentBase;

class Media extends ComponentBase
{

    public function onRun() {
        $this->addJs('http://api.html5media.info/1.1.8/html5media.min.js');
    }

    public function componentDetails()
    {
        return [
            'name'        => 'hambern.html5media::lang.components.media.name',
            'description' => 'hambern.html5media::lang.components.media.description'
        ];
    }

    public function defineProperties()
    {
        return [
            'mediaType' => [
                'title'             => 'hambern.html5media::lang.labels.mediaType',
                'description'       => 'hambern.html5media::lang.descriptions.mediaType',
                'default'           => 'video',
                'type'              => 'dropdown',
                'options'           => ['video' => 'video', 'audio' => 'audio'],
            ],
            'preload' => [
                'title'             => 'hambern.html5media::lang.labels.preload',
                'description'       => 'hambern.html5media::lang.descriptions.preload',
                'default'           => false,
                'type'              => 'checkbox',
            ],
            'controls' => [
                'title'             => 'hambern.html5media::lang.labels.controls',
                'description'       => 'hambern.html5media::lang.descriptions.controls',
                'default'           => true,
                'type'              => 'checkbox',
            ],
            'autoplay' => [
                'title'             => 'hambern.html5media::lang.labels.autoplay',
                'description'       => 'hambern.html5media::lang.descriptions.autoplay',
                'default'           => false,
                'type'              => 'checkbox',
            ],
            'loop' => [
                'title'             => 'hambern.html5media::lang.labels.loop',
                'description'       => 'hambern.html5media::lang.descriptions.loop',
                'default'           => false,
                'type'              => 'checkbox',
            ],
            'hidden' => [
                'title'             => 'hambern.html5media::lang.labels.hidden',
                'description'       => 'hambern.html5media::lang.descriptions.hidden',
                'default'           => false,
                'type'              => 'checkbox',
            ],
            'source' => [
                'title'             => 'hambern.html5media::lang.labels.source',
                'description'       => 'hambern.html5media::lang.descriptions.source',
                'type'              => 'string',
                'default'           => 'http://kretiochpleti.se/files/upload/1/beat675.mp3',
            ],
            'poster' => [
                'title'             => 'hambern.html5media::lang.labels.poster',
                'description'       => 'hambern.html5media::lang.descriptions.poster',
                'type'              => 'string',
                'default'           => 'https://placeholdit.imgix.net/~text?txtsize=107&txt=1280×720&w=1280&h=720',
            ],
            'class' => [
                'title'             => 'hambern.html5media::lang.labels.class',
                'description'       => 'hambern.html5media::lang.descriptions.class',
                'type'              => 'string',
                'default'           => '',
                'group'             => 'hambern.html5media::lang.labels.attributes',
            ],
            'style' => [
                'title'             => 'hambern.html5media::lang.labels.style',
                'description'       => 'hambern.html5media::lang.descriptions.style',
                'type'              => 'string',
                'default'           => '',
                'group'             => 'hambern.html5media::lang.labels.attributes',
            ],
            'width' => [
                'title'             => 'hambern.html5media::lang.labels.width',
                'description'       => 'hambern.html5media::lang.descriptions.width',
                'type'              => 'string',
                'default'           => '',
                'group'             => 'hambern.html5media::lang.labels.attributes',
            ],
            'height' => [
                'title'             => 'hambern.html5media::lang.labels.height',
                'description'       => 'hambern.html5media::lang.descriptions.height',
                'type'              => 'string',
                'default'           => '',
                'group'             => 'hambern.html5media::lang.labels.attributes',
            ],
        ];
    }
}