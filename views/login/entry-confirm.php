<?php
use yii\helpers\Html;
?>

<p>You have entered the following information:</p>

<ul>
    <li><?= $form->field($model, 'name')->label('Your Name') ?></li>
    <li><?= $form->field($model, 'password')->label('Your Password') ?></li>
</ul>