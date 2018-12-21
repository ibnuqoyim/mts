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
	'enableAjaxValidation'=>true,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>



	<div class="form-group">
		<b><p>Jumlah yang akan diajukan * :</p></b>
		<b>*</b><sub> maksimal <?php echo $modal->stok ?> </sub> <br>
		<?php echo '<br>'.$form->textField($model,'jumlah', array('class'=>'form-control')); ?>
		<?php echo $form->error($model,'jumlah'); ?>
	</div>


	<div class="form-group buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->