<?php
/* @var $this PermintaanController */
/* @var $model Permintaan */
/* @var $form CActiveForm */
?>

<div class="form">

<?php 
	
$form=$this->beginWidget('CActiveForm', array(
	'id'=>'permintaan-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
	'htmlOptions' => array('enctype' => 'multipart/form-data'),
)); ?>

	

	<?php echo $form->errorSummary($model); ?>
<div class="col-lg-6">


    <div class="form-group">
            <?php echo "<h4><b>Silahkan Upload Dokumen review : </b></h4><br>" ?>
			<?php echo $form->fileField($model,'file_review_eng'); ?>
			<?php echo $form->error($model,'file_review_eng'); ?>
    </div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'review_engineering'); ?>
		<?php echo $form->textArea($model,'review_engineering',array('class'=>'form-control'),array('size'=>60,'maxlength'=>300)); ?>
		<?php echo $form->error($model,'review_engineering'); ?>
	</div>



	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Upload' : 'Save', array('class'=>'btn btn-success left ')); ?>
	</div>
</div>
<?php $this->endWidget(); ?>

</div><!-- form -->