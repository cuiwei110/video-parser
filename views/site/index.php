<?php

/* @var $this yii\web\View */

use yii\helpers\Url;

$this->title = 'My Yii Application';
?>
<div class="site-index">

    <div class="jumbotron">
        <h1>Congratulations!</h1>
    </div>

    <div class="body-content">
        <div class="row">

            <?php foreach ($videos as $video) : ?>
                <div class="col-lg-4">
                    <p><a class="btn btn-default" href="<?= Url::to(['/videos/view', 'id' => $video->id]) ?>">
                            <img width="300px" src="<?= $video->image ?>" alt=""></a></p>
                    <h2>
                        <a class="link"
                           href="<?= Url::to(['/videos/view', 'id' => $video->id]) ?>"><?= $video->title ?></a>
                    </h2>
                    <p><?= $video->description ?></p>

                </div>
            <?php endforeach; ?>

        </div>
    </div>
