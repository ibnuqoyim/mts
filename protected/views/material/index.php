
<?php
/* @var $this MaterialController */
/* @var $model Material */

$this->breadcrumbs=array(
	'Materials'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Material', 'url'=>array('index')),
	array('label'=>'Create Material', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#material-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>
<header>
		 <div class="info">
				 <div class="container">
						 <div class="col-lg-4 left">
								 <a class="page"><span class="glyphicon glyphicon-briefcase gold" aria-hidden="true"></span> Data Material</a>
						 </div>
						 <div class="col-lg-5 right alamat">



												 <p class="head"><?php echo CHtml::link(Yii::app()->user->nama .' (Originator)', array('/user/update','id'=>Yii::app()->user->id), array('class'=>'gold')); ?></p>

						 </div>
						 <div class="clear"></div>
				 </div>
		 </div>
 </header>
 <section class="container">
            <div class="col-lg-3">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Search</h3>
                    </div>
                    <div class="panel-body">
                        <?php $form=$this->beginWidget('CActiveForm', array(
                                'action'=>Yii::app()->createUrl($this->route),
                                'method'=>'get',
                        )); ?>
                            <div class="form-group">
                                <label>Nama</label>
                                <?php  echo $form->textField($model,'nama',array('class'=>'form-control'),array('size'=>60,'maxlength'=>75)); ?>
                            </div>
                            <div class="form-group">
                                <label>Role</label>
                               
                            </div>
                            <?php echo CHtml::submitButton('Search',array('class'=>'btn btn-lg btn-primary btn-block')); ?>
                        <?php $this->endWidget(); ?>
                    </div>
                </div> 
                
                <?php echo CHtml::link('<span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span> Stok Material', array('/material/create'),array('class'=>'btn btn-lg btn-default btn-block')); ?>

                <?php if(Yii::app()->user->role != "Proyek"){
                echo CHtml::link('<span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span> Materil on Progres', array('/material/create'),array('class'=>'btn btn-lg btn-default btn-block')); } ?>

                <?php if(Yii::app()->user->role == "Engineering" || Yii::app()->user->role =="Admin" ){ echo CHtml::link('<span class="glyphicon glyphicon-plus-sign" aria-hidden="true"></span> Ajukan Material Baru', array('/material/create'),array('class'=>'btn btn-lg btn-default btn-block')); }?>
            </div>
            <div id="test" class="col-lg-9">

                <?php $this->widget('zii.widgets.grid.CGridView', array(
                        'id'=>'user-grid',
                        'dataProvider'=>$model->search(),
                        //'filter'=>$model,
                        'pager'=>array(
                            'header'         => '',
                            'firstPageLabel' => '&lt;&lt;',
                            'prevPageLabel'  => 'Prev',
                            'nextPageLabel'  => 'Next',
                            'lastPageLabel'  => '&gt;&gt;',
                            'cssFile'=>Yii::app()->theme->baseUrl.'/assets/css/main.css',
                        ),
                        'template'=>'{items} {pager}',
                        'cssFile' => Yii::app()->theme->baseUrl.'/assets/css/main.css',
                        'columns'=>array(
                                'nama',
								'id_dok_eng',
                                array('name'=>'status',
                                         'header'=>'Status',
                                         'value'=>'$data->statusa->namaStatus',

                                         ),
								'status',
                                array(
                                        'class'=>'CButtonColumn',
                                ),
                        ),
                    )); ?>
            </div>
            <div id="test2" class="col-lg-9">
                <?php $this->renderPartial('_form', array('model'=>$model)); ?>
            </div>
            <p id="demo">JavaScript can change HTML content.</p>

<button type="button" onclick='a()'>Click Me!</button>
<button type="button" onclick='ab()'>Click Me!</button>

        </section>
<script type="text/javascript">
    function a(){
                document.getElementById('test').style.display='none'
                document.getElementById('test2').style.display='block'
            }
        function ab(){
                document.getElementById('test').style.display='block'
                document.getElementById('test2').style.display='none'
            }
        </script>
