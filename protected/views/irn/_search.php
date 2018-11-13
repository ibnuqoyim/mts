<?php
/* @var $this IrnController */
/* @var $model Irn */
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
		<?php echo $form->label($model,'irn'); ?>
		<?php echo $form->textField($model,'irn',array('size'=>60,'maxlength'=>100)); ?>
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