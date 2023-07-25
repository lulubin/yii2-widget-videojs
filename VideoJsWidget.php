<?php
namespace lulubin\videojs;

use yii\helpers\Html;
use yii\helpers\Json;
use yii\base\InvalidConfigException;

class VideoJsWidget extends \yii\base\Widget
{
    public $options = [];
    public $jsOptions = [];
    public $tags = [];
    
    public function init()
    {
        parent::init();
        $this->initOptions();
        $this->registerAssets();
    }

    protected function initOptions()
    {
        if (!isset($this->options['id'])) {
            $this->options['id'] = 'videojs-' . $this->getId();
        }
    }

    public function registerAssets()
    {
        $view = $this->getView();
        $obj = VideoJsAsset::register($view);
        echo "\n" . Html::beginTag('video', $this->options);
        if (!empty($this->tags) && is_array($this->tags)) {
            foreach ($this->tags as $tagName => $tags) {
                if (is_array($this->tags[$tagName])) {
                    foreach ($tags as $tagOptions) {
                        $tagContent = '';
                        if (isset($tagOptions['content'])) {
                            $tagContent = $tagOptions['content'];
                            unset($tagOptions['content']);
                        }
                        echo "\n" . Html::tag($tagName, $tagContent, $tagOptions);
                    }
                } else {
                    throw new InvalidConfigException("Invalid config for 'tags' property.");
                }
            }
        }
        echo "\n" .Html::endTag('video');
        if (!empty($this->jsOptions)) {
            $js = 'videojs("#' . $this->options['id'] . '").ready(' . Json::encode($this->jsOptions). ');';
            $view->registerJs($js);
        }
    }
}
