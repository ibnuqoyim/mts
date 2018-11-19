

<?php
/* @var $this PermintaanController */
/* @var $model Permintaan */
/* @var $form CActiveForm */
?>

<div class="form">
	<?php foreach($pengiriman as $per){ ?>
		<b><?php echo "Material "; ?>:</b>
		<?php echo CHtml::encode($per->materiala->nama); ?>
		<br />
		<b><?php echo "Tanggal Kirim "; ?>:</b>
		<?php echo CHtml::encode($per->tanggal_pengiriman); ?>
		<br />
		<b><?php echo "Warehouse tujuan"; ?>:</b>
		<?php echo CHtml::encode($per->tujuan); ?>
		<br />
		<b><?php echo "PIC "; ?>:</b>
		<?php echo CHtml::encode($per->pic); ?>
		<br />
		<b><?php echo "Tanggal Kirim "; ?>:</b>
		<?php echo CHtml::encode($per->kontak); ?>
		<br />

	<?php } ?>
<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'permintaan-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
	'htmlOptions' => array('enctype' => 'multipart/form-data'),
)); ?>

	<div class="col-lg-6">
	<p style="font-size: 16px">Input detail pengiriman untuk <?php echo "".$modal->nama; ?> : </p>


	<?php echo $form->errorSummary($modal); ?>

	<div class="form-group">
		<?php echo $form->labelEx($modal,'status'); ?>
		<?php echo $form->textField($modal,'status',array('class'=>'form-control','readonly'=>true,'value'=>13),array('size'=>60,'maxlength'=>300)); ?>
		<?php echo $form->error($modal,'status'); ?>
	</div>


	<div class="form-group buttons">
		<?php echo CHtml::submitButton($modal->isNewRecord ? 'Create' : 'Konfirm', array('class'=>'btn  btn-success left ')); ?>
	</div>
</div>
<?php $this->endWidget(); ?>

</div><!-- form -->