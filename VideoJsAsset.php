<?php
namespace lulubin\videojs;

class VideoJsAsset extends \yii\web\AssetBundle
{
    public $sourcePath = '@bower/video.js/dist';
    public $css = ['video-js.min.css'];
    public $js = ['video.min.js'];
    public $depends = ['yii\web\JqueryAsset'];
}
