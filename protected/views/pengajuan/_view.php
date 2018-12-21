<?php
/* @var $this PengajuanController */
/* @var $data Pengajuan */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_material')); ?>:</b>
	<?php echo CHtml::encode($data->id_material); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_pengaju')); ?>:</b>
	<?php echo CHtml::encode($data->id_pengaju); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('jumlah')); ?>:</b>
	<?php echo CHtml::encode($data->jumlah); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('disetujui')); ?>:</b>
	<?php echo CHtml::encode($data->disetujui); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pic_wh')); ?>:</b>
	<?php echo CHtml::encode($data->pic_wh); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tgl_setujui')); ?>:</b>
	<?php echo CHtml::encode($data->tgl_setujui); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('diterima')); ?>:</b>
	<?php echo CHtml::encode($data->diterima); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_penerima')); ?>:</b>
	<?php echo CHtml::encode($data->id_penerima); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tgl_diterima')); ?>:</b>
	<?php echo CHtml::encode($data->tgl_diterima); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tgl_create')); ?>:</b>
	<?php echo CHtml::encode($data->tgl_create); ?>
	<br />

	*/ ?>

</div>