<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use dosamigos\datepicker\DatePicker;
use yii\helpers\ArrayHelper;
use vendor\modules\kullanici\models\Department;

/* @var $this yii\web\View */
/* @var $model vendor\modules\kullanici\models\Companyuser */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="companyuser-form">

    
<?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>

<?= $form->field($model, 'firstname')->textInput(['maxlength' => true]) ?>

<?= $form->field($model, 'lastname')->textInput(['maxlength' => true]) ?>

<?= $form->field($model, 'department_id')->dropDownList(ArrayHelper::map(Department::find()->all(), 'id', 'name'),['prompt'=>'Select Department']); ?>

<?= $form->field($model, 'started_at')->widget(
DatePicker::className(), [
    // inline too, not bad
    'inline' => false, 
    // modify template for custom rendering
    
    'clientOptions' => [
        'autoclose' => true,
        'format' => 'yyyy-mm-dd'
    ]
]);?>

<?= $form->field($model, 'salary')->textInput() ?>

<?= $form->field($model, 'picture')->fileInput() ?>

<div class="form-group">
    <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
</div>

<?php ActiveForm::end(); ?>

</div>
<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use dosamigos\datepicker\DatePicker;
use yii\helpers\ArrayHelper;
use Bakkaya1997\kullanici\models\Department;

/* @var $this yii\web\View */
/* @var $model vendor\modules\kullanici\models\Companyuser */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="companyuser-form">

    
<?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>

<?= $form->field($model, 'firstname')->textInput(['maxlength' => true]) ?>

<?= $form->field($model, 'lastname')->textInput(['maxlength' => true]) ?>

<?= $form->field($model, 'department_id')->dropDownList(ArrayHelper::map(Department::find()->all(), 'id', 'name'),['prompt'=>'Select Department']); ?>

<?= $form->field($model, 'started_at')->widget(
DatePicker::className(), [
    // inline too, not bad
    'inline' => false, 
    // modify template for custom rendering
    
    'clientOptions' => [
        'autoclose' => true,
        'format' => 'yyyy-mm-dd'
    ]
]);?>

<?= $form->field($model, 'salary')->textInput() ?>

<?= $form->field($model, 'picture')->fileInput() ?>

<div class="form-group">
    <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
</div>

<?php ActiveForm::end(); ?>

</div>

