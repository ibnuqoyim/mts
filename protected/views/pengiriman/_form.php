<?php
/* @var $this PengirimanController */
/* @var $model Pengiriman */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'pengiriman-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'id_material'); ?>
		<?php echo $form->textField($model,'id_material'); ?>
		<?php echo $form->error($model,'id_material'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tanggal_pengiriman'); ?>
		<?php echo $form->textField($model,'tanggal_pengiriman'); ?>
		<?php echo $form->error($model,'tanggal_pengiriman'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tujuan'); ?>
		<?php echo $form->textField($model,'tujuan',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'tujuan'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'status'); ?>
		<?php echo $form->textField($model,'status',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'status'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'pic'); ?>
		<?php echo $form->textField($model,'pic',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'pic'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'kontak'); ?>
		<?php echo $form->textField($model,'kontak'); ?>
		<?php echo $form->error($model,'kontak'); ?>
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