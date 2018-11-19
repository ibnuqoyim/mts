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
		<?php echo $a." : "; ?>
		<?php echo $form->textArea($model,'isi',array('class'=>'form-control'),array('size'=>60,'maxlength'=>250)); ?>
		<?php echo $form->error($model,'isi'); ?>
	</div>
	<br>
	<div class="form-group">
		<?php echo "Dokumen Pendamping (Opsional):"; ?>
		<?php echo $form->fileField($model,'file_respon'); ?>
		<?php echo $form->error($model,'file_respon'); ?>
	</div>
	<br>

	<div class="row buttons">
		<?php if($a=="Alasan"){
			echo CHtml::submitButton($model->isNewRecord ? 'Reject' : 'Save', array('class'=>'btn btn-danger left '));
		}
		else{
		echo CHtml::submitButton($model->isNewRecord ? 'Approve' : 'Save', array('class'=>'btn  btn-success left ')); 
		} ?>
		<?php echo CHtml::link(' <button class="btn  btn-warning ">Back</button>', array('/material/index')); ?>
	</div>
</div>
<?php $this->endWidget(); ?>

</div><!-- form -->