<?php
/* @var $this ClientResponController */
/* @var $model ClientRespon */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'client-respon-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'material_id'); ?>
		<?php echo $form->textField($model,'material_id'); ?>
		<?php echo $form->error($model,'material_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'isi'); ?>
		<?php echo $form->textField($model,'isi',array('size'=>60,'maxlength'=>250)); ?>
		<?php echo $form->error($model,'isi'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'file_respon'); ?>
		<?php echo $form->textField($model,'file_respon',array('size'=>60,'maxlength'=>110)); ?>
		<?php echo $form->error($model,'file_respon'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tgl_create'); ?>
		<?php echo $form->textField($model,'tgl_create'); ?>
		<?php echo $form->error($model,'tgl_create'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->