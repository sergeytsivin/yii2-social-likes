<?php

use stsivin\SocialLikes\AssetBundle;

AssetBundle::register($this);
?>
<div class="social-likes">
    <div class="facebook" title="Поделиться ссылкой на Фейсбуке"  data-url="<?php echo $url; ?>" data-title="<?php echo $title; ?>">Facebook</div>
    <div class="twitter" title="Поделиться ссылкой в Твиттере"  data-url="<?php echo $url; ?>" data-title="<?php echo $title; ?>">Twitter</div>
    <div class="vkontakte" title="Поделиться ссылкой во Вконтакте"  data-url="<?php echo $url; ?>" data-title="<?php echo $title; ?>">Вконтакте</div>
    <div class="plusone" title="Поделиться ссылкой в Гугл-плюсе"  data-url="<?php echo $url; ?>" data-title="<?php echo $title; ?>">Google+</div>
</div>
