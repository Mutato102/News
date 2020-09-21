<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\News */
/* @var $form yii\widgets\ActiveForm */
/* @var $cats app\models\News */
?>

<div class="news-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'info')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'description')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'image')->fileInput() ?>

    <?= $form->field($model, 'favorite')->textInput() ?>


    <?= $form->field($model, 'id_city')->
    dropDownList(\yii\helpers\ArrayHelper::map(app\models\City::find()->all(), 'id', 'name'))?>

<?/*= $form->field($model, 'id_city')->
    dropDownList(\yii\helpers\ArrayHelper::map($cats, 'id', 'name'))*/?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
