<?php

use yii\helpers\Html;
use yii\grid\GridView;
use Bakkaya1997\kullanici\models\Department;

/* @var $this yii\web\View */
/* @var $searchModel vendor\modules\kullanici\models\CompanyuserSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Companyusers';
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="container">
<div class="companyuser-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Companyuser', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

 
  <p>Information such as the name, surname, salary and department of our employees are listed below.</p>
 
  <?php
  $items = $dataProvider->getModels();
  
  foreach($items as $item): ?>
  <div class="media">
    <div class="media-left">
     <img class="group list-group-image"  src="<?=$item->picture?>" alt="" style="width:200px; height:200px"/>
    </div>
    <div class="media-body">
      <h4 class="media-heading", style="color:red">Employee information</h4>
      <p><?="Firstname and Lastname: ",  $item->firstname," ", $item->lastname?></p>
      
      <p>Salary :  <?= $item->salary ?> </p>
      <p>Started at: <?=$item->started_at ?> </p>
      <br><br>
      <div class="btn-group">
      <?php
    
      echo Html::a('Update', ['update', 'id' => $item->id], ['class' => 'btn btn-success btn-block', 'style' => 'width:300px']);
      echo Html::a('View', ['view', 'id' => $item->id], ['class' => 'btn btn-primary', 'style' => 'width:300px']);
      echo Html::a('Delete', ['delete', 'id' => $item->id], [
                 'class' => 'btn btn-danger' , 'style' => 'width:300px',
                      'data' => [
                      'confirm' => 'Are you sure?',
                      'method' => 'post',
           ],
       ]);
      ?>
      </div>
    </div>
  </div>
  <hr style="width:100%;height:2px;border-width:0;color:gray;background-color:gray">
  <?php endforeach;?>
  <hr>
 </div>

</div>

