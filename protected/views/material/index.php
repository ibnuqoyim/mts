
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
CHtml::ajaxLink('View Popup', 'material/index', 
    array('update' => '#simple-div'), 
    array('id' => 'simple-link-'.uniqid())
);


?>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<?php if(Yii::app()->user->hasFlash('success')):?>
<div class="flash-notice">
    <script type="text/javascript">alert("<?php echo Yii::app()->user->getFlash('success')?>")</script>

</div>
<?php endif?>
<div id="simple-div"></div>
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
                           
                            <?php echo CHtml::submitButton('Search',array('class'=>'btn btn-lg btn-primary btn-block')); ?>
                        <?php $this->endWidget(); ?>
                    </div>
                </div> 

                <?php if(Yii::app()->user->role == "Engineering" || Yii::app()->user->role =="Admin" ){ echo CHtml::link('<span class="glyphicon glyphicon-plus-sign" aria-hidden="true"></span> Ajukan Material Baru', array('/material/create'),array('class'=>'btn btn-lg btn-default btn-block')); }?>
            </div>
            <div class="col-lg-9">
            <?php if(Yii::app()->user->role == "Engineering" || Yii::app()->user->role =="Admin" ){ ?>
            <div id="Engineering" style = "display: block;" class="col-lg-12">
                <b>Dashboard Engineering</b>
                <?php $this->widget('zii.widgets.grid.CGridView', array(
                        'id'=>'user-grid',
                        'dataProvider'=>$model->engineering(),
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
                        'emptyText' => 'Ops, no Material to show!',
                        'cssFile' => Yii::app()->theme->baseUrl.'/assets/css/main.css',
                        'columns'=>array(
                                array(
                                'header' => 'No',
                                'class'=>'IndexColumn',
                                ),
                                'nama',
                                array('name'=>'status',
                                         'header'=>'Status',
                                         'value'=>'$data->statusa->namaStatus',

                                         ),
                                array('name'=>'status',
                                         'header'=>'Status',
                                         'value'=>'$data->statusa->keterangan',

                                         ),
                                array(
                                    'class'=>'CButtonColumn',
                                    'header'=>'Action',
                                    'template'=>'{edit}',
                                    'buttons'=>array
                                            (
                                                'edit' => array
                                                    (
                                                        'label'=>'<span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>',
                                                        'imageUrl'=>false,
                                                        'visible' =>'$data->status == 3',
                                                        'url'=>'$this->grid->controller->createUrl("/material/update",array("id"=>$data->id))',
                                                             ),

                                                          ),
                                                     ),
                        ),
                    )); ?>
            </div>
            <?php } ?>
            <?php if(Yii::app()->user->role == "Client" || Yii::app()->user->role =="Admin" ){ ?>
            <div id="Client" class="col-lg-12">
                <br>
                <b>Dashboard Client</b>
                <?php $this->widget('zii.widgets.grid.CGridView', array(
                        'id'=>'user-grid',
                        'dataProvider'=>$model->client(),
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
                        'emptyText' => 'Ops, no Material to show!',
                        'cssFile' => Yii::app()->theme->baseUrl.'/assets/css/main.css',
                        'columns'=>array(
                                array(
                                'header' => 'No',
                                'class'=>'IndexColumn',
                                ),
                                'nama',
                                array('name'=>'status',
                                         'header'=>'Status',
                                         'value'=>'$data->statusa->namaStatus',

                                         ),
                                array('name'=>'status',
                                         'header'=>'Status',
                                         'value'=>'$data->statusa->keterangan',

                                         ),
                                //'stok',
                                array(
                                        'class'=>'CButtonColumn',
                                        'header'=>'Action',
                                    'template'=>'{edit}{ok}{no}',
                                    'buttons'=>array
                                            (
                                                'edit' => array
                                                    (
                                                        'label'=>'<span class="glyphicon glyphicon-download" aria-hidden="true"></span>',
                                                        'imageUrl'=>true,
                                                        'visible' =>'$data->status == 1 && $data->dokeng != null',
                                                        'url'=>'"/mts/dokumen/dokeng/".$data->dokeng',
                                                             ),
                                                'ok' => array
                                                        (
                                                        'label'=>'<span class="glyphicon glyphicon-ok" style="color:green" aria-hidden="true"></span>',
                                                        'imageUrl'=>false,
                                                        'visible' => '$data->status == 1 && $data->dokeng != null',
                                                        'url'=>'$this->grid->controller->createUrl("/clientRespon/create",array("idm"=>$data->id))',
                                                        ),
                                                'no' => array
                                                          (
                                                        'label'=>'<span class="glyphicon glyphicon-remove" style="color:red" aria-hidden="true"></span>',
                                                        'imageUrl'=>false,
                                                        'visible' => '$data->status == 1 && $data->dokeng != null',
                                                        'url'=>'$this->grid->controller->createUrl("/clientRespon/creater",array("idm"=>$data->id))',
                                                          ),

                                                          ),

                                ),
                        ),
                    )); ?>
            </div>
           <?php } ?>
            <?php if(Yii::app()->user->role == "Pengadaan" || Yii::app()->user->role =="Admin" ){ ?>
           <div id="Pengadaan" class="col-lg-12">
            <br>
                <b>Dashboard Pengadaan</b>
                <?php $this->widget('zii.widgets.grid.CGridView', array(
                        'id'=>'user-grid',
                        'dataProvider'=>$model->pengadaan(),
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
                        'emptyText' => 'Ops, no Material to show!',
                        'cssFile' => Yii::app()->theme->baseUrl.'/assets/css/main.css',
                        'columns'=>array(
                                array(
                                'header' => 'No',
                                'class'=>'IndexColumn',
                                ),
                                'nama',
                                array('name'=>'status',
                                         'header'=>'Status',
                                         'value'=>'$data->statusa->namaStatus',

                                         ),
                                array('name'=>'status',
                                         'header'=>'Status',
                                         'value'=>'$data->statusa->keterangan',

                                         ),
                                array(
                                        'class'=>'CButtonColumn',
                                        'header'=>'Action',
                                        'template'=>'{edit} {view} {kontrak}',
                                        'buttons'=>array
                                            (
                                                'edit' => array
                                                    (
                                                        'label'=>'<span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>',
                                                        'imageUrl'=>false,
                                                        'visible' =>'$data->status == 2',
                                                        'url'=>'$this->grid->controller->createUrl("/permintaan/create",array("idm"=>$data->id))',
                                                             ),
                                                'view' => array
                                                    (
                                                        'label'=>'<span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span>',
                                                        'imageUrl'=>false,
                                                        'visible' =>'$data->status == 5',
                                                        'url'=>'$this->grid->controller->createUrl("/penawaran/view",array("idm"=>$data->id))',
                                                             ),
                                                'kontrak' => array
                                                    (
                                                        'label'=>'<span class="glyphicon glyphicon-file" aria-hidden="true"></span>',
                                                        'imageUrl'=>false,
                                                        'visible' =>'$data->status == 6',
                                                        'url'=>'$this->grid->controller->createUrl("/kontrak/create",array("idm"=>$data->id))',
                                                             ),

                                                          ),
                                ),
                        ),
                    )); ?>
            </div>
            <?php } ?>
            <?php if(Yii::app()->user->role == "Vendor" || Yii::app()->user->role =="Admin" ){ ?>
            <div id="Vendor" style = "display: block" class="col-lg-12">
                <br>
                <b align="center">Dashboard Vendor</b>
                <?php $this->widget('zii.widgets.grid.CGridView', array(
                        'id'=>'user-grid',
                        'dataProvider'=>$model->vendor(Yii::app()->user->id),
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
                        'emptyText' => 'Ops, no Material to show!',
                        'columns'=>array(
                                array(
                                'header' => 'No',
                                'class'=>'IndexColumn',
                                ),
                                'nama',

                                array('name'=>'status',
                                         'header'=>'Status',
                                         'value'=>'$data->statusa->namaStatus',

                                         ),
                                array('name'=>'status',
                                         'header'=>'Status',
                                         'value'=>'($data->pemenang == Yii::app()->user->id && $data->pemenang != null && $data->status == 6) ? "Selamat anda menang": (($data->pemenang != Yii::app()->user->id && $data->pemenang != null && $data->status == 6) ? "Maaf anda belum beruntung": $data->statusa->keterangan)',

                                         ),
                                array(
                                        'class'=>'CButtonColumn',
                                        'header'=>'Action',
                                        'template'=>'{edit} {kom} {repair}',
                                        'buttons'=>array
                                            (
                                                'edit' => array
                                                    (
                                                        'label'=>'<span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>',
                                                        'imageUrl'=>false,
                                                        'visible' =>'$data->status == 5',
                                                        'url'=>'$this->grid->controller->createUrl("/penawaran/create",array("idm"=>$data->id))',
                                                             ),
                                                'kom' => array
                                                    (
                                                        'label'=>'<span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span>',
                                                        'imageUrl'=>false,
                                                        'visible' =>'$data->status == 7.5',
                                                        'url'=>'$this->grid->controller->createUrl("/kom/approve",array("idm"=>$data->id))',
                                                             ),

                                                          
                                            'repair' => array
                                                    (
                                                        'label'=>'<span class="glyphicon glyphicon-wrench" aria-hidden="true"></span>',
                                                        'type'=>'raw',
                                                        'imageUrl'=>false,
                                                        'visible' =>'$data->status == 10',
                                                        'url'=>'$this->grid->controller->createUrl("/hasilrepair/create",array("idm"=>$data->id))',
                                                             ),

                                                          ),
                                ),
                        ),
                    )); ?>
            </div>
            <?php } ?>
            <?php if(Yii::app()->user->role == "Expedeting" || Yii::app()->user->role =="Admin" ){ ?>
            <div id="Expedeting" class="col-lg-12">
                <br>
                <b align="center">Dashboard Expedeting</b>
                <?php $this->widget('zii.widgets.grid.CGridView', array(
                        'id'=>'user-grid',
                        'dataProvider'=>$model->expedeting(),
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
                        'emptyText' => 'Ops, no Material to show!',
                        'columns'=>array(
                                array(
                                'header' => 'No',
                                'class'=>'IndexColumn',
                                ),
                                'nama',
                                array('name'=>'status',
                                         'header'=>'Status',
                                         'value'=>'$data->statusa->namaStatus',

                                         ),
                                array('name'=>'status',
                                         'header'=>'Status',
                                         'value'=>'$data->statusa->keterangan',

                                         ),
                                array(
                                        'class'=>'CButtonColumn',
                                        'header'=>'Action',
                                        'template'=>'{kom}{pni}',
                                        'buttons'=>array
                                            (
                                                'kom' => array
                                                    (
                                                        'label'=>'<span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>',
                                                        'imageUrl'=>false,
                                                        'visible' =>'$data->status == 7',
                                                        'url'=>'$this->grid->controller->createUrl("/kom/create",array("idm"=>$data->id))',
                                                             ),

                                                'pni' => array
                                                    (
                                                        'label'=>'<span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>',
                                                        'imageUrl'=>false,
                                                        'visible' =>'$data->status == 8',
                                                        'url'=>'$this->grid->controller->createUrl("/pni/create",array("idm"=>$data->id))',
                                                             ),

                                                          ),
                                ),
                        ),
                    )); ?>
            </div>
           <?php } ?>
            <?php if(Yii::app()->user->role == "QC" || Yii::app()->user->role =="Admin" ){ ?>
           <div id="QC" class="col-lg-12">
            <br>
                <b align="center">Dashboard QC</b>
                <?php $this->widget('zii.widgets.grid.CGridView', array(
                        'id'=>'user-grid',
                        'dataProvider'=>$model->qc(),
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
                        'emptyText' => 'Ops, no Material to show!',
                        'columns'=>array(
                                array(
                                'header' => 'No',
                                'class'=>'IndexColumn',
                                ),
                                'nama',
                                array('name'=>'status',
                                         'header'=>'Status',
                                         'value'=>'$data->statusa->namaStatus',

                                         ),
                                array('name'=>'status',
                                         'header'=>'Status',
                                         'value'=>'$data->statusa->keterangan',

                                         ),
                                array(
                                        'class'=>'CButtonColumn',
                                        'header'=>'Action',
                                        'template'=>'{kom}{pni}',
                                        'buttons'=>array
                                            (
                                                'kom' => array
                                                    (
                                                        'label'=>'<span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>',
                                                        'imageUrl'=>false,
                                                        'visible' =>'$data->status == 9',
                                                        'url'=>'$this->grid->controller->createUrl("/hasilPni/create",array("idm"=>$data->id))',
                                                             ),

                                                'pni' => array
                                                    (
                                                        'label'=>'<span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span>',
                                                        'imageUrl'=>false,
                                                        'visible' =>'$data->status == 11',
                                                        'url'=>'$this->grid->controller->createUrl("/irn/create",array("idm"=>$data->id))',
                                                             ),

                                                          ),
                                ),
                        ),
                    )); ?>
            </div>
            <?php } ?>
            <?php if(Yii::app()->user->role == "Traffic" || Yii::app()->user->role =="Admin" ){ ?>
            <div id="Traffic" class="col-lg-12">
                <br>
                <b align="center">Dashboard Traffic</b>
                <?php $this->widget('zii.widgets.grid.CGridView', array(
                        'id'=>'user-grid',
                        'dataProvider'=>$model->traffic(),
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
                        'emptyText' => 'Ops, no Material to show!',
                        'columns'=>array(
                                array(
                                'header' => 'No',
                                'class'=>'IndexColumn',
                                ),
                                'nama',
                                array('name'=>'status',
                                         'header'=>'Status',
                                         'value'=>'$data->statusa->namaStatus',

                                         ),
                                array('name'=>'status',
                                         'header'=>'Status',
                                         'value'=>'$data->statusa->keterangan',

                                         ),
                                array(
                                        'class'=>'CButtonColumn',
                                         'header'=>'Action',
                                        'template'=>'{send}{received}',
                                        'buttons'=>array
                                            (
                                                'send' => array
                                                    (
                                                        'label'=>'<span class="glyphicon glyphicon-plane" aria-hidden="true"></span>',
                                                        'imageUrl'=>false,
                                                        'visible' =>'$data->status == 12',
                                                        'url'=>'$this->grid->controller->createUrl("/pengiriman/create",array("idm"=>$data->id))',
                                                             ),

                                                'received' => array
                                                    (
                                                        'label'=>'<span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span>',
                                                        'imageUrl'=>false,
                                                        'visible' =>'$data->status == 10',
                                                        'url'=>'$this->grid->controller->createUrl("/irn/create",array("idm"=>$data->id))',
                                                             ),

                                                          ),
                                ),
                        ),
                    )); ?>
            </div>
           <?php } ?>
            <?php if(Yii::app()->user->role == "Warehouse" || Yii::app()->user->role =="Admin" ){ ?>
           <div id="Warehouse" class="col-lg-12">
            <br>
                <b align="center">Dashboard Warehouse</b>
                <?php $this->widget('zii.widgets.grid.CGridView', array(
                        'id'=>'user-grid',
                        'dataProvider'=>$model->warehouse(),
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
                        'emptyText' => 'Ops, no Material to show!',
                        'columns'=>array(
                                array(
                                'header' => 'No',
                                'class'=>'IndexColumn',
                                ),
                                'nama',
                                array('name'=>'status',
                                         'header'=>'Status',
                                         'value'=>'$data->statusa->namaStatus',

                                         ),
                                array('name'=>'status',
                                         'header'=>'Status',
                                         'value'=>'$data->statusa->keterangan',

                                         ),
                                array(
                                        'class'=>'CButtonColumn',
                                        'header'=>'Action',
                                        'template'=>'{view}{received}{inspeksi}',
                                        'buttons'=>array
                                            (
                                                'view' => array
                                                    (
                                                        'label'=>'<span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span>',
                                                        'imageUrl'=>false,
                                                        'visible' =>'$data->status == 12',
                                                        'url'=>'$this->grid->controller->createUrl("/pengiriman/view",array("idm"=>$data->id))',
                                                             ),

                                                'received' => array
                                                    (
                                                        'label'=>'<span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span>',
                                                        'imageUrl'=>false,
                                                        'visible' =>'$data->status == 10',
                                                        'url'=>'$this->grid->controller->createUrl("/irn/create",array("idm"=>$data->id))',
                                                             ),
                                                'inspeksi' => array
                                                    (
                                                        'label'=>'<span class="glyphicon glyphicon-check" aria-hidden="true"></span>',
                                                        'imageUrl'=>false,
                                                        'visible' =>'$data->status == 13',
                                                        'url'=>'$this->grid->controller->createUrl("/hasilinspeksiWH/create",array("idm"=>$data->id))',
                                                             ),

                                                          ),
                                ),
                        ),
                    )); ?>
            </div>
            <?php } ?>
            <?php if(Yii::app()->user->role == "proyek" || Yii::app()->user->role =="Admin" ){ ?>
           <div id="Proyek" class="col-lg-12">
            <br>
                <b align="center">Dashboard Proyek</b>
                <?php $this->widget('zii.widgets.grid.CGridView', array(
                        'id'=>'user-grid',
                        'dataProvider'=>$model->proyek(),
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
                                array(
                                'header' => 'No',
                                'class'=>'IndexColumn',
                                ),
                                'nama',
                                array('name'=>'status',
                                         'header'=>'Status',
                                         'value'=>'$data->statusa->namaStatus',

                                         ),
                                /*
                                array('name'=>'client',
                                         'header'=>'Client',
                                         'value'=>'$data->clienta->nama',

                                         ), */
                                'stok',
                               // array(
                                        //'class'=>'CButtonColumn',
                               // ),
                        ),
                        'emptyText' => 'Ops, no Material to show!',

    
                    )); ?>
            </div>
        </div>
            <?php } ?>
        </section>
<script type="text/javascript">
    function ab(){
                document.getElementById('progres').style.display='none'
                document.getElementById('complete').style.display='block'
            }
        function a(){
                document.getElementById('progres').style.display='block'
                document.getElementById('complete').style.display='none'
            }
        </script>
