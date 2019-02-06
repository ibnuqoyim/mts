

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
	'htmlOptions' => array('enctype' => 'multipart/form-data'),
)); ?>
	<div class="col-lg-6">
	

	<?php echo $form->errorSummary($model); ?>

	
	<div class="form-group">
		<?php echo $form->labelEx($model,'id_vendor'); ?>
		<?php echo $form->dropDownList($model,'id_vendor',
    CHtml::listData(User::model()->findAll('role = "Vendor"'),'id','nama')); ?>
		<?php echo $form->error($model,'id_vendor'); ?>
	</div>
	<br>
	<div class="form-group">
		<?php echo "Dokumen Pendamping (Opsional):"; ?>
		<?php echo $form->fileField($model,'file_dokpermintaan'); ?>
		<?php echo $form->error($model,'file_dokpermintaan'); ?>
	</div>
	<br>

	<div class="row buttons">
		<?php 
		echo CHtml::submitButton($model->isNewRecord ? 'Approve' : 'Save', array('class'=>'btn  btn-success left ')); 
		?>
		
	</div>
</div>
<?php $this->endWidget(); ?>

</div><!-- form -->