<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
 ?>

 <?php
    if(Yii::$app->session->hasFlash('success'))
    {
      echo "<div class='alert alert-success'>".Yii::$app->session->getFlash('success')."</div>";
    }else {
      echo "<div class='alert alert-error'>".Yii::$app->session->getFlash('error')."</div>";
    }
  ?>
 <?php
    $form=ActiveForm::begin();
  ?>

<?= $form->field($model,'name'); ?>
<?= $form->field($model,'email'); ?>
<?= html::submitButton('Submit',['class'=>'btn btn-success']); ?>
<?php
   $form=ActiveForm::end();
 ?>
