<?php
/* @var $this HasilinspeksiWHController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Hasilinspeksi Whs',
);

$this->menu=array(
	array('label'=>'Create HasilinspeksiWH', 'url'=>array('create')),
	array('label'=>'Manage HasilinspeksiWH', 'url'=>array('admin')),
);
?>

<h1>Hasilinspeksi Whs</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
