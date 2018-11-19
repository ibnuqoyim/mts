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
<!--
	<div class="row">
		<?php //echo $form->labelEx($model,'id_user'); ?>
		<?php //echo $form->textField($model,'id_user',array('class'=>'form-control','type'=>'hidden',
//'value'=>),array('size'=>60,'maxlength'=>300)); ?>
		<?php //echo $form->error($model,'id_user'); ?>
	</div>
-->
	<div class="col-lg-6">
	<?php foreach($permintaan as $per){ ?>
	<b><?php echo "Material "; ?>:</b>
	<?php echo CHtml::encode($per->materiala->nama); ?>
	<br />

	<b><?php echo "Status "; ?>:</b>
	<?php echo CHtml::encode($per->materiala->statusa->namaStatus); ?>
	<br />

	<b><?php echo 'Dokumen Penawaran : <a href="/mts/dokumen/permintaan/'.$per->file.'">download</a>'; ?></b>
	<br />
	<?php } ?>
	
	<br>
	
	<div class="form-group">
            <?php echo "Silahkan Upload Dokumen Penawaran : <br>" ?>
			<?php echo $form->fileField($model,'file'); ?>
			<?php echo $form->error($model,'file'); ?>
    </div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'deskripsi'); ?>
		<?php echo $form->textArea($model,'deskripsi',array('class'=>'form-control'),array('size'=>60,'maxlength'=>300)); ?>
		<?php echo $form->error($model,'deskripsi'); ?>
	</div>



	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Upload' : 'Save', array('class'=>'btn btn-success left ')); ?>
	</div>
</div>
<?php $this->endWidget(); ?>

</div><!-- form -->