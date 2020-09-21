<?php
use yii\helpers\Html;
use yii\helpers\HtmlPurifier;
use yii\helpers\Url;
use yii\widgets\ActiveForm;
?>
<?/*=$model->name*/?>
<div class="news-item">

    <!--<h2><?/*= Html::encode($this->title) */?></h2>-->



    <?= '<h2>'.ucfirst($model->name).'</h2>' ?>

    <?= Html::a("<span>Просмотр новости</span>",
        Url::to(['news/view', 'name'=>$model->name]))?>
  <br/>

    <?
    if($model->image)
   echo Html::img('@web/images/'.$model->image.'.jpg',
       ['class'=>'index_image','alt' => $model->info,
           'title'=>$model->info, 'align'=>"left"]);
  else
    echo Html::img('@web/images/default.jpg',
           ['class'=>'index_image','alt' => $model->info,
               'title'=>$model->info, 'align'=>"left"]);
    ?>
    <?= HtmlPurifier::process($model->getShortText($model->description)) ?>

    <br/>
    <span>Дата публикации:  <?= Html::encode($model->create_date) ?></span>
    <br/>
</div>
<hr>