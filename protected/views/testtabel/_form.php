<?php
/* @var $this TesttabelController */
/* @var $model Testtabel */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'testtabel-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'namatest'); ?>
		<?php echo $form->textField($model,'namatest',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'namatest'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tgl_test'); ?>
		<?php echo $form->dateField($model,'tgl_test'); ?>
		<?php echo $form->error($model,'tgl_test'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'password'); ?>
		<?php echo $form->passwordField($model,'password',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'password'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->