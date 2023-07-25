## 1.Install
composer require --prefer-dist lulubin/yii2-widget-videojs "dev-master"

## 2.Usage
```php
<?php
    echo \lulubin\videojs\VideoJsWidget::widget([
        'options' => [
            'class' => 'video-js vjs-default-skin vjs-big-play-centered',
            'controls' => true,
            'preload' => 'auto',
            'width' => '420',
            'height' => '315',
            'data' => [
                'setup' => [
                    'autoplay' => true,
                    'techOrder' =>['flash', 'html5']
                ],
            ],
        ],
        'tags' => [
            'source' => [
                ['src' => 'rtmp://cp67126.edgefcs.net/ondemand/&mp4:mediapm/ovp/content/test/video/spacealonehd_sounas_640_300.mp4', 
                'type' => 'rtmp/mp4']
            ]
        ]
    ]);
?>

```

```php
<?php
    echo \lulubin\videojs\VideoJsWidget::widget([
        'options' => [
            'class' => 'video-js vjs-default-skin vjs-big-play-centered',
            'poster' => "http://www.videojs.com/img/poster.jpg",
            'controls' => true,
            'preload' => 'auto',
            'width' => '970',
            'height' => '400',
        ],
        'tags' => [
            'source' => [
                ['src' => 'http://vjs.zencdn.net/v/oceans.mp4', 'type' => 'video/mp4'],
                ['src' => 'http://vjs.zencdn.net/v/oceans.webm', 'type' => 'video/webm']
            ],
            'track' => [
                ['kind' => 'captions', 'src' => 'http://vjs.zencdn.net/vtt/captions.vtt', 'srclang' => 'en', 'label' => 'English']
            ]
        ]
    ]);
?>
```
