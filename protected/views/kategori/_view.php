<?php
/* @var $this KategoriController */
/* @var $data Kategori */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nama')); ?>:</b>
	<?php echo CHtml::encode($data->nama); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('singkatan')); ?>:</b>
	<?php echo CHtml::encode($data->singkatan); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('desk')); ?>:</b>
	<?php echo CHtml::encode($data->desk); ?>
	<br />


</div>