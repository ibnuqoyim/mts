<?php
/* @var $this PengajuanController */
/* @var $model Pengajuan */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'pengajuan-form',
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
		<?php echo $form->labelEx($model,'id_pengaju'); ?>
		<?php echo $form->textField($model,'id_pengaju'); ?>
		<?php echo $form->error($model,'id_pengaju'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'jumlah'); ?>
		<?php echo $form->textField($model,'jumlah'); ?>
		<?php echo $form->error($model,'jumlah'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'disetujui'); ?>
		<?php echo $form->textField($model,'disetujui'); ?>
		<?php echo $form->error($model,'disetujui'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'pic_wh'); ?>
		<?php echo $form->textField($model,'pic_wh'); ?>
		<?php echo $form->error($model,'pic_wh'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tgl_setujui'); ?>
		<?php echo $form->textField($model,'tgl_setujui'); ?>
		<?php echo $form->error($model,'tgl_setujui'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'diterima'); ?>
		<?php echo $form->textField($model,'diterima'); ?>
		<?php echo $form->error($model,'diterima'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'id_penerima'); ?>
		<?php echo $form->textField($model,'id_penerima'); ?>
		<?php echo $form->error($model,'id_penerima'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tgl_diterima'); ?>
		<?php echo $form->textField($model,'tgl_diterima'); ?>
		<?php echo $form->error($model,'tgl_diterima'); ?>
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