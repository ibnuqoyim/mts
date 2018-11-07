<?php
/* @var $this MaterialController */
/* @var $model Material */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'material-material-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// See class documentation of CActiveForm for details on this,
	// you need to use the performAjaxValidation()-method described there.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'nama'); ?>
		<?php echo $form->textField($model,'nama'); ?>
		<?php echo $form->error($model,'nama'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'id_dok_eng'); ?>
		<?php echo $form->textField($model,'id_dok_eng'); ?>
		<?php echo $form->error($model,'id_dok_eng'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'status'); ?>
		<?php echo $form->textField($model,'status'); ?>
		<?php echo $form->error($model,'status'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'permintaan_penawaran'); ?>
		<?php echo $form->textField($model,'permintaan_penawaran'); ?>
		<?php echo $form->error($model,'permintaan_penawaran'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'id_pemenang'); ?>
		<?php echo $form->textField($model,'id_pemenang'); ?>
		<?php echo $form->error($model,'id_pemenang'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'id_kontrak'); ?>
		<?php echo $form->textField($model,'id_kontrak'); ?>
		<?php echo $form->error($model,'id_kontrak'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'id_kom'); ?>
		<?php echo $form->textField($model,'id_kom'); ?>
		<?php echo $form->error($model,'id_kom'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'id_pis'); ?>
		<?php echo $form->textField($model,'id_pis'); ?>
		<?php echo $form->error($model,'id_pis'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'id_inspection'); ?>
		<?php echo $form->textField($model,'id_inspection'); ?>
		<?php echo $form->error($model,'id_inspection'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'irn'); ?>
		<?php echo $form->textField($model,'irn'); ?>
		<?php echo $form->error($model,'irn'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'jadwal_pengambillan'); ?>
		<?php echo $form->textField($model,'jadwal_pengambillan'); ?>
		<?php echo $form->error($model,'jadwal_pengambillan'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'status_pengambilan'); ?>
		<?php echo $form->textField($model,'status_pengambilan'); ?>
		<?php echo $form->error($model,'status_pengambilan'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'hasil_inspeksi_barang'); ?>
		<?php echo $form->textField($model,'hasil_inspeksi_barang'); ?>
		<?php echo $form->error($model,'hasil_inspeksi_barang'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'stok'); ?>
		<?php echo $form->textField($model,'stok'); ?>
		<?php echo $form->error($model,'stok'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'create_date'); ?>
		<?php echo $form->textField($model,'create_date'); ?>
		<?php echo $form->error($model,'create_date'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'last_update'); ?>
		<?php echo $form->textField($model,'last_update'); ?>
		<?php echo $form->error($model,'last_update'); ?>
	</div>


	<div class="row buttons">
		<?php echo CHtml::submitButton('Submit'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->