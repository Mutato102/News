<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\helpers\Url;


/* @var $this yii\web\View */
/* @var $searchModel app\models\NewsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'News';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="news-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create News', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            'name',
            'info',
            [
                'label' => 'Картинка',
                'format' => 'raw',
                'value' => function($data){
                    return Html::img(Url::toRoute('@web/images/'.$data->image.'.jpg'),[
                        'alt'=>'yii2 - картинка в gridview',
                        'style' => 'width:95px;'
                    ]);
                },
            ],
            [
                'attribute'=>'id_city',
                'label'=> 'Город',
                'format'=>'text',
                'content'=>function($data){
                    return $data->getCityName();
                },
                // 'filter'=>
            ],
            'favorite',
            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
