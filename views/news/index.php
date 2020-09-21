<?php
use yii\widgets\ListView;
use yii\bootstrap\ActiveForm;
/* @var $this yii\web\View */
/* @var $searchModel app\models\NewsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'News';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="news-index">
    <?php  echo $this->render('_search', ['model' => $searchModel]);?>
<?= ListView::widget([
        'dataProvider'=>$dataProvider,
        'itemView'=>'_list',

]);?>
</div>
