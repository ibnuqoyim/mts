<?php
/* @var $this MaterialController */
/* @var $model Material */
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
		<?php echo $form->label($model,'nama'); ?>
		<?php echo $form->textField($model,'nama',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_dok_eng'); ?>
		<?php echo $form->textField($model,'id_dok_eng'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'status'); ?>
		<?php echo $form->textField($model,'status'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'permintaan_penawaran'); ?>
		<?php echo $form->textField($model,'permintaan_penawaran',array('size'=>60,'maxlength'=>250)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_pemenang'); ?>
		<?php echo $form->textField($model,'id_pemenang'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_kontrak'); ?>
		<?php echo $form->textField($model,'id_kontrak'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_kom'); ?>
		<?php echo $form->textField($model,'id_kom'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_pis'); ?>
		<?php echo $form->textField($model,'id_pis'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_inspection'); ?>
		<?php echo $form->textField($model,'id_inspection'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'irn'); ?>
		<?php echo $form->textField($model,'irn'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'jadwal_pengambillan'); ?>
		<?php echo $form->textField($model,'jadwal_pengambillan'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'status_pengambilan'); ?>
		<?php echo $form->textField($model,'status_pengambilan',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'hasil_inspeksi_barang'); ?>
		<?php echo $form->textField($model,'hasil_inspeksi_barang',array('size'=>60,'maxlength'=>500)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'stok'); ?>
		<?php echo $form->textField($model,'stok'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'create_date'); ?>
		<?php echo $form->textField($model,'create_date'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'last_update'); ?>
		<?php echo $form->textField($model,'last_update'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->