<?php
/* @var $this PengajuanController */
/* @var $model Pengajuan */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id'); ?>
		<?php echo $form->textField($model,'id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_material'); ?>
		<?php echo $form->textField($model,'id_material'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_pengaju'); ?>
		<?php echo $form->textField($model,'id_pengaju'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'jumlah'); ?>
		<?php echo $form->textField($model,'jumlah'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'disetujui'); ?>
		<?php echo $form->textField($model,'disetujui'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'pic_wh'); ?>
		<?php echo $form->textField($model,'pic_wh'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tgl_setujui'); ?>
		<?php echo $form->textField($model,'tgl_setujui'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'diterima'); ?>
		<?php echo $form->textField($model,'diterima'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_penerima'); ?>
		<?php echo $form->textField($model,'id_penerima'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tgl_diterima'); ?>
		<?php echo $form->textField($model,'tgl_diterima'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tgl_create'); ?>
		<?php echo $form->textField($model,'tgl_create'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->