<?php

namespace stsivin\SocialLikes;

use yii\base\Widget;

class SocialWidget extends Widget
{
    /**
     * @var string $url to share
     */
    public $url;

    /**
     * @var string $title to share
     */
    public $title;

    public function init()
    {
        parent::init();
    }

    public function run()
    {
        return $this->render( 'social-likes', [ 'url' => $this->url, 'title' => $this->title ] );
    }

}