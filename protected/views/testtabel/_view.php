<?php
/* @var $this TesttabelController */
/* @var $data Testtabel */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('namatest')); ?>:</b>
	<?php echo CHtml::encode($data->namatest); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tgl_test')); ?>:</b>
	<?php echo CHtml::encode($data->tgl_test); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('password')); ?>:</b>
	<?php echo CHtml::encode($data->password); ?>
	<br />


</div>