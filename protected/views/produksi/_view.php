<?php
/* @var $this ProduksiController */
/* @var $data Produksi */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_material')); ?>:</b>
	<?php echo CHtml::encode($data->id_material); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('progres')); ?>:</b>
	<?php echo CHtml::encode($data->progres); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('keterangan')); ?>:</b>
	<?php echo CHtml::encode($data->keterangan); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tgl_create')); ?>:</b>
	<?php echo CHtml::encode($data->tgl_create); ?>
	<br />


</div>