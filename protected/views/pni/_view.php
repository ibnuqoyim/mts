<?php
/* @var $this PniController */
/* @var $data Pni */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_material), array('view', 'id'=>$data->id_material)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('file')); ?>:</b>
	<?php echo CHtml::encode($data->file); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('desk')); ?>:</b>
	<?php echo CHtml::encode($data->desk); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tgl_create')); ?>:</b>
	<?php echo CHtml::encode($data->tgl_create); ?>
	<br />


</div>