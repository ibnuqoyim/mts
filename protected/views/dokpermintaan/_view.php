<?php
/* @var $this DokpermintaanController */
/* @var $data Dokpermintaan */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('file_dokpermintaan')); ?>:</b>
	<?php echo CHtml::encode($data->file_dokpermintaan); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_material')); ?>:</b>
	<?php echo CHtml::encode($data->id_material); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_vendor')); ?>:</b>
	<?php echo CHtml::encode($data->id_vendor); ?>
	<br />


</div>