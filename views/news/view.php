<?php
use yii\helpers\Html;
use yii\helpers\HtmlPurifier;
?>
<?/*=$model->name*/?>
<div>
    <?= '<h2>'.ucfirst($model->name).'</h2>' ?>
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
    <?= HtmlPurifier::process($model->description) ?>

</div>
<hr>
