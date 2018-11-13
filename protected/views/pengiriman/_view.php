<?php
/* @var $this PengirimanController */
/* @var $data Pengiriman */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_material')); ?>:</b>
	<?php echo CHtml::encode($data->id_material); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tanggal_pengiriman')); ?>:</b>
	<?php echo CHtml::encode($data->tanggal_pengiriman); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tujuan')); ?>:</b>
	<?php echo CHtml::encode($data->tujuan); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('status')); ?>:</b>
	<?php echo CHtml::encode($data->status); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pic')); ?>:</b>
	<?php echo CHtml::encode($data->pic); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('kontak')); ?>:</b>
	<?php echo CHtml::encode($data->kontak); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('tgl_create')); ?>:</b>
	<?php echo CHtml::encode($data->tgl_create); ?>
	<br />

	*/ ?>

</div>