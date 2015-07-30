<?php

namespace stsivin\SocialLikes;

/**
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class AssetBundle extends \yii\web\AssetBundle
{
    public $sourcePath = '@bower/social-likes';
    public $baseUrl = '@web';
    public $css = [
        'social-likes_birman.css'
    ];
    public $js = [
        'social-likes.min.js'
    ];
    public $depends = [
    ];
}
