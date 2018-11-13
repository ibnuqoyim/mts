<?php
/* @var $this HasilPniController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Hasil Pnis',
);

$this->menu=array(
	array('label'=>'Create HasilPni', 'url'=>array('create')),
	array('label'=>'Manage HasilPni', 'url'=>array('admin')),
);
?>

<h1>Hasil Pnis</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
