<?php

/* @var $this yii\web\View */

$this->title = 'My Images';
?>
<div class="site-index">

    <div class="jumbotron">
        <h1>Congratulations!</h1>

        <p class="lead">You have successfully created your Yii-powered application.</p>

        <p><a class="btn btn-lg btn-success" href="http://www.yiiframework.com">Get started with Yii</a></p>
    </div>

    <div class="body-content">

        <?php foreach ($users as $user) : ?>
        <a href="<?php echo \yii\helpers\Url::to(['/user/profile/view' , 'nickname'=>$user->getNickname()]); ?>">
            <?php echo $user->username ?>
        </a>

        <hr>
        <?php endforeach; ?>
    </div>
</div>
