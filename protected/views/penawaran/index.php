<?php
/* @var $this PenawaranController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Penawarans',
);

$this->menu=array(
	array('label'=>'Create Penawaran', 'url'=>array('create')),
	array('label'=>'Manage Penawaran', 'url'=>array('admin')),
);
?>

<h1>Penawarans</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
