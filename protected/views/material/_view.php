<?php
/* @var $this MaterialController */
/* @var $data Material */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nama')); ?>:</b>
	<?php echo CHtml::encode($data->nama); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_dok_eng')); ?>:</b>
	<?php echo CHtml::encode($data->id_dok_eng); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('status')); ?>:</b>
	<?php echo CHtml::encode($data->status); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('permintaan_penawaran')); ?>:</b>
	<?php echo CHtml::encode($data->permintaan_penawaran); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_pemenang')); ?>:</b>
	<?php echo CHtml::encode($data->id_pemenang); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_kontrak')); ?>:</b>
	<?php echo CHtml::encode($data->id_kontrak); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('id_kom')); ?>:</b>
	<?php echo CHtml::encode($data->id_kom); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_pis')); ?>:</b>
	<?php echo CHtml::encode($data->id_pis); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_inspection')); ?>:</b>
	<?php echo CHtml::encode($data->id_inspection); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('irn')); ?>:</b>
	<?php echo CHtml::encode($data->irn); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('jadwal_pengambillan')); ?>:</b>
	<?php echo CHtml::encode($data->jadwal_pengambillan); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('status_pengambilan')); ?>:</b>
	<?php echo CHtml::encode($data->status_pengambilan); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('hasil_inspeksi_barang')); ?>:</b>
	<?php echo CHtml::encode($data->hasil_inspeksi_barang); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('stok')); ?>:</b>
	<?php echo CHtml::encode($data->stok); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('create_date')); ?>:</b>
	<?php echo CHtml::encode($data->create_date); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('last_update')); ?>:</b>
	<?php echo CHtml::encode($data->last_update); ?>
	<br />

	*/ ?>

</div>