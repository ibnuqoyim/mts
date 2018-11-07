<?php
/* @var $this ClientResponController */
/* @var $model ClientRespon */
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
		<?php echo $form->label($model,'client_id'); ?>
		<?php echo $form->textField($model,'client_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'material_id'); ?>
		<?php echo $form->textField($model,'material_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'isi'); ?>
		<?php echo $form->textField($model,'isi',array('size'=>60,'maxlength'=>250)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'file_respon'); ?>
		<?php echo $form->textField($model,'file_respon',array('size'=>60,'maxlength'=>110)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->