
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



												 <p class="head"><?php echo CHtml::link(Yii::app()->user->nama .'('.Yii::app()->user->role.')', array('/user/update','id'=>Yii::app()->user->id), array('class'=>'gold')); ?></p>

						 </div>
						 <div class="clear"></div>
				 </div>
		 </div>
 </header>
 <section class="container">
            <?php 
         function selisih($c, $id){
                $model = Material::Model()->findbyPk($id);

                $b = date("Y-m-d");
          switch ($c) {
              case '1' :
                  $a = $model->dokenga->plan_approve;
                  break;
            case '3' :
                  $a = $model->dokenga->plan_approve;
                  break;
              case '2':
                  $a = $model->plan_tender;
                  break;
            case '4':
                  $a =$model->tender->deadline_tutup;
                  break;
            case '5':
                  $a =$model->tender->deadline_tutup;
                  break;
            case '6':
                  $a =$model->plan_kontrak;
                  break;
            case '7' :
                  $a =$model->plan_kontrak;
                  break;
             case '8':
                  $a =$model->plan_kom;
                  break;
            case '8.5' :
                  $a = $model->pni->plan_produksi;
                  break;
            case '9' :
                  $a =$model->pni->plan_inspeksi;
                  break;
            case  '10' :
                  $a =$model->pni->plan_inspeksi;
                  break;
            case  '11':
                  $a =$model->pni->plan_inspeksi;
                  break;
            case '12':
                  $a =$model->plan_pengiriman;
                  break;
            case '13':
                  $a =$model->plan_penerimaan;
                  break;
            case '14' :
                  $a =$model->plan_finish;
                  break;
            default :
                  $a = date("Y-m-d");
                  break;
              
          }
          $ad = new Datetime($a);
          $bd = new Datetime($b);

          $interval = $bd->diff($ad);
          $x = $interval->format('%R%a');
          $x = intval($x);
          echo $x.' hari';
        } ?>

            <div class="col-lg-3">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Search</h3>
                    </div>
                    <div class="panel-body">
                        
                        <?php  //$this->widget('ext.ecountdown.ECountDown', array('seconds' => 4));
                        $form=$this->beginWidget('CActiveForm', array(
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
                 

                 <?php   /*
              $kategori=new Material; // initilize it in controller
              $form=$this->beginWidget('CActiveForm', array(
              'id'=>'dependent-form',
              'enableClientValidation'=>true,
              'htmlOptions' => array('enctype' => 'multipart/form-data','autocomplete'=>'off'),
              'clientOptions'=>array(
              'validateOnSubmit'=>true,
              )
              )); 
            
                                            
            echo $form->dropDownList($kategori,'kategori', 
            CHtml::listData(Kategori::model()->findAll(), 'id', 'nama'),
            array(
            'prompt'=>'Select Kategori',
            'ajax' => array(
            'type'=>'POST', 
            'url'=>Yii::app()->createUrl('material/test'), //  get states list
            'update'=>'#test', // add the state dropdown id
            'data'=>array('kategori'=>'js:this.value'),
            ))); $this->endWidget(); */
            ?>
            <div id="test">
                <?php $data1 = $model->proyek()?>
            </div>
            <?php  ?>


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
                                         'header'=>'Keterangan',
                                         'value'=>'$data->statusa->keterangan',

                                         ),
                                array('name'=>'status',
                                         'header'=>'Deadline',
                                         'value'=>'selisih($data->status, $data->id)',

                                         ),
                                array(
                                    'class'=>'CButtonColumn',
                                    'header'=>'Action',
                                    'template'=>'{edit} {submit} {view}',
                                    'buttons'=>array
                                            (
                                                'edit' => array
                                                    (
                                                        'label'=>'<i class="glyphicon glyphicon-pencil"></i>',
                                                        'imageUrl'=>false,
                                                        'visible' =>'$data->status == 3 || $data->status == 0.5 ',
                                                        'url'=>'$this->grid->controller->createUrl("/material/update",array("id"=>$data->id))',
                                                        'options' => array(
                                                                'rel' => 'tooltip',
                                                                'data-toggle' => 'tooltip', 
                                                                'title'       => 'Update Material Detail', ),     ),
                                                'submit' => array
                                                    (
                                                        'label'=>'<i class="glyphicon glyphicon-send" style="color:green"></i>',
                                                        'imageUrl'=>false,
                                                        'visible' =>'$data->status == 3 || $data->status == 0.5 ',
                                                        'url'=>'$this->grid->controller->createUrl("/material/submit",array("id"=>$data->id))',
                                                        'options' => array(
                                                                'rel' => 'tooltip',
                                                                'data-toggle' => 'tooltip', 
                                                                'title'       => 'Submit Pengajuan Material', ),     ),
                                                'view' => array
                                                    (
                                                        'label'=>'<i class="glyphicon glyphicon-eye-open"></i>',
                                                        'imageUrl'=>false,
                                                        'visible' =>'$data->status == 5',
                                                        'url'=>'$this->grid->controller->createUrl("/penawaran/view",array("idm"=>$data->id))',
                                                        'options' => array(
                                                                'rel' => 'tooltip',
                                                                'data-toggle' => 'tooltip', 
                                                                'title'       => 'Review Penawaran', ),),

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
                                         'header'=>'Keterangan',
                                         'value'=>'$data->statusa->keterangan',

                                         ),
                                array('name'=>'status',
                                         'header'=>'Deadline',
                                         'value'=>'selisih($data->status, $data->id)',

                                         ),
                                //'stok',
                                array(
                                        'class'=>'CButtonColumn',
                                        'header'=>'Action',
                                    'template'=>'{view}',
                                    'buttons'=>array
                                            (
                                                'view' => array
                                                    (
                                                        'label'=>'<i class="glyphicon glyphicon-eye-open"></i>',
                                                        'imageUrl'=>true,
                                                        'visible' =>'$data->status == 1',
                                                        'options' => array(
                                                                'rel' => 'tooltip',
                                                                'data-toggle' => 'tooltip', 
                                                                'title'       => 'View Material Detail', ),
                                                        
                                                        'url'=>'$this->grid->controller->createUrl("/dokEng/view",array("id"=>$data->id))',
                                                             ),
                                                'ok' => array
                                                        (
                                                        'label'=>'<span class="glyphicon glyphicon-ok" style="color:green" aria-hidden="true"></span>',
                                                        'imageUrl'=>false,
                                                        'visible' => '$data->status == 1 ',
                                                        'url'=>'$this->grid->controller->createUrl("/clientRespon/create",array("idm"=>$data->id))',
                                                        ),
                                                'no' => array
                                                          (
                                                        'label'=>'<span class="glyphicon glyphicon-remove" style="color:red" aria-hidden="true"></span>',
                                                        'imageUrl'=>false,
                                                        'visible' => '$data->status == 1 ',
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
                                         'header'=>'Keterangan',
                                         'value'=>'$data->statusa->keterangan',

                                         ),
                                array('name'=>'status',
                                         'header'=>'Deadline',
                                         'value'=>'selisih($data->status, $data->id)',

                                         ),
                                array(
                                        'class'=>'CButtonColumn',
                                        'header'=>'Action',
                                        'template'=>'{edit} {update} {view} {kontrak}',
                                        'buttons'=>array
                                            (
                                                'edit' => array
                                                    (
                                                        'label'=>'<i class="glyphicon glyphicon-pencil"></i>',
                                                        'imageUrl'=>false,
                                                        'visible' =>'$data->status == 2',
                                                        'url'=>'$this->grid->controller->createUrl("/permintaan/create",array("idm"=>$data->id))',
                                                        'options' => array(
                                                                'rel' => 'tooltip',
                                                                'data-toggle' => 'tooltip', 
                                                                'title'       => 'Buka Tender', ),
                                                             ),
                                                'update' => array
                                                    (
                                                        'label'=>'<i class="glyphicon glyphicon-pencil"></i>',
                                                        'imageUrl'=>false,
                                                        'visible' =>'$data->status == 5',
                                                        'url'=>'$this->grid->controller->createUrl("/permintaan/update",array("idm"=>$data->id))',
                                                        'options' => array(
                                                                'rel' => 'tooltip',
                                                                'data-toggle' => 'tooltip', 
                                                                'title'       => 'Edit Tender', ),
                                                             ),
                                                'view' => array
                                                    (
                                                        'label'=>'<i class="glyphicon glyphicon-eye-open"></i>',
                                                        'imageUrl'=>false,
                                                        'visible' =>'$data->status == 5',
                                                        'url'=>'$this->grid->controller->createUrl("/penawaran/view",array("idm"=>$data->id))',
                                                        'options' => array(
                                                                'rel' => 'tooltip',
                                                                'data-toggle' => 'tooltip', 
                                                                'title'       => 'View Tender Detail', ),
                                                             ),
                                                'kontrak' => array
                                                    (
                                                        'label'=>'<i class="glyphicon glyphicon-file"></i>',
                                                        'imageUrl'=>false,
                                                        'visible' =>'$data->status == 6',
                                                        'url'=>'$this->grid->controller->createUrl("/kontrak/create",array("idm"=>$data->id))',
                                                        'options' => array(
                                                                'rel' => 'tooltip',
                                                                'data-toggle' => 'tooltip', 
                                                                'title'       => 'Buat Dokumen Kontrak', ),
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
                <?php 
                function dor($id, $a,$b,$c)
                    {
                       if($a == Yii::app()->user->id && $b == 6)
                        {
                            echo "Selamat Anda Menang !!!";
                        }
                        elseif($a != Yii::app()->user->id && $a != NULL && $b == 6)
                            {
                                echo "Maaf anda belum beruntung !!!";
                            }
                        elseif ($b == 5 && $c == 1) {
                            echo "Tender dibuka !!";
                        }
                        elseif ($b == 5 && $c == 2) {
                            echo "Tender telah ditutup" ;# code...
                        }
                        elseif ($b == 8.5) {
                            $material = Material::Model()->findbyPk($id);
                            echo 'Progres Produksi Material '.$material->pni->progres.'%';
                        }
                        else
                        {
                            $stat = Status::Model()->findbyPk($b);
                            echo $stat->keterangan;
                        }

                    }
                    //($data->pemenang == Yii::app()->user->id && $data->pemenang != null && $data->status == 6) ? "Selamat anda menang": ($data->pemenang != Yii::app()->user->id && $data->pemenang != null && $data->status == 6) ? "Maaf anda belum beruntung" : ($data->status == 5 && $data->status_tender == 1) ? "Tender dibuka" :($data->status == 5 && $data->status_tender == 2) ? "Tender ditutup":($data->status == 8.5) ? "Progres Produksi Material ".$data->progres."%" : $data->statusa->keterangan
                    $this->widget('zii.widgets.grid.CGridView', array(
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
                                         'header'=>'Keterangan',
                                         'value'=>'dor($data->id, $data->pemenang,$data->status,$data->status_tender)',

                                         ),
                                array('name'=>'status',
                                         'header'=>'Deadline',
                                         'value'=>'selisih($data->status, $data->id)',

                                         ),
                                array(
                                        'class'=>'CButtonColumn',
                                        'header'=>'Action',
                                        'template'=>'{edit} {kom} {progres} {repair}',
                                        'buttons'=>array
                                            (
                                                'edit' => array
                                                    (
                                                        'label'=>'<i class="glyphicon glyphicon-pencil" ></i>',
                                                        'imageUrl'=>false,
                                                        'visible' =>'$data->status == 5 && $data->status_tender == 1',
                                                        'url'=>'$this->grid->controller->createUrl("/penawaran/create",array("idm"=>$data->id))',
                                                        'options' => array(
                                                                'rel' => 'tooltip',
                                                                'data-toggle' => 'tooltip', 
                                                                'title'       => 'Ajukan Penawaran', ),
                                                             ),
                                                'kom' => array
                                                    (
                                                        'label'=>'<i class="glyphicon glyphicon-eye-open" ></i>',
                                                        'imageUrl'=>false,
                                                        'visible' =>'$data->status == 7.5',
                                                        'url'=>'$this->grid->controller->createUrl("/kom/approve",array("idm"=>$data->id))',
                                                        'options' => array(
                                                                'rel' => 'tooltip',
                                                                'data-toggle' => 'tooltip', 
                                                                'title'       => 'Konfirmasi Undangan', ),
                                                             ),
                                                    'progres' => array
                                                    (
                                                        'label'=>'<i class="glyphicon glyphicon-dashboard" ></i>',
                                                        'imageUrl'=>false,
                                                        'visible' =>'$data->status == 8.5',
                                                        'url'=>'$this->grid->controller->createUrl("/pni/progres",array("idm"=>$data->id))',
                                                        'options' => array(
                                                                'rel' => 'tooltip',
                                                                'data-toggle' => 'tooltip', 
                                                                'title'       => 'Add Progres', ),
                                                             ),

                                                          
                                            'repair' => array
                                                    (
                                                        'label'=>'<i class="glyphicon glyphicon-wrench" ></i>',
                                                        'type'=>'raw',
                                                        'imageUrl'=>false,
                                                        'visible' =>'$data->status == 10',
                                                        'url'=>'$this->grid->controller->createUrl("/hasilrepair/create",array("idm"=>$data->id))',
                                                        'options' => array(
                                                                'rel' => 'tooltip',
                                                                'data-toggle' => 'tooltip', 
                                                                'title'       => 'Repair Punch List', ),
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
                                         'header'=>'Keterangan',
                                         'value'=>'($data->status == 8.5 ) ? "Progres Produksi Material ".$data->pni->progres."%" : $data->statusa->keterangan',

                                         ),
                                array('name'=>'status',
                                         'header'=>'Deadline',
                                         'value'=>'selisih($data->status, $data->id)',

                                         ),
                                array(
                                        'class'=>'CButtonColumn',
                                        'header'=>'Action',
                                        'template'=>'{kom}{pni}',
                                        'buttons'=>array
                                            (
                                                'kom' => array
                                                    (
                                                        'label'=>'<i class="glyphicon glyphicon-pencil"></i>',
                                                        'imageUrl'=>false,
                                                        'visible' =>'$data->status == 7',
                                                        'url'=>'$this->grid->controller->createUrl("/kom/create",array("idm"=>$data->id))',
                                                        'options' => array(
                                                                'rel' => 'tooltip',
                                                                'data-toggle' => 'tooltip', 
                                                                'title'       => 'Buat Undangan Kick of Meeting', ),
                                                             ),

                                                'pni' => array
                                                    (
                                                        'label'=>'<i class="glyphicon glyphicon-pencil"></i>',
                                                        'imageUrl'=>false,
                                                        'visible' =>'$data->status == 8',
                                                        'url'=>'$this->grid->controller->createUrl("/pni/create",array("idm"=>$data->id))',
                                                        'options' => array(
                                                                'rel' => 'tooltip',
                                                                'data-toggle' => 'tooltip', 
                                                                'title'       => 'Upload Production and Inspection Plan', ),
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
                                         'header'=>'Keterangan',
                                         'value'=>'$data->statusa->keterangan',

                                         ),
                                array('name'=>'status',
                                         'header'=>'Deadline',
                                         'value'=>'selisih($data->status, $data->id)',

                                         ),
                                array(
                                        'class'=>'CButtonColumn',
                                        'header'=>'Action',
                                        'template'=>'{kom}{pni}',
                                        'buttons'=>array
                                            (
                                                'kom' => array
                                                    (
                                                        'label'=>'<i class="glyphicon glyphicon-pencil"></i>',
                                                        'imageUrl'=>false,
                                                        'visible' =>'$data->status == 9',
                                                        'url'=>'$this->grid->controller->createUrl("/pni/hasil",array("idm"=>$data->id))',
                                                        'options' => array(
                                                                'rel' => 'tooltip',
                                                                'data-toggle' => 'tooltip', 
                                                                'title'       => 'Upload hasil Inspeksi', ),
                                                             ),

                                                'pni' => array
                                                    (
                                                        'label'=>'<i class="glyphicon glyphicon-eye-open"></i>',
                                                        'imageUrl'=>false,
                                                        'visible' =>'$data->status == 11',
                                                        'url'=>'$this->grid->controller->createUrl("/irn/create",array("idm"=>$data->id))',
                                                        'options' => array(
                                                                'rel' => 'tooltip',
                                                                'data-toggle' => 'tooltip', 
                                                                'title'       => 'Release IRN', ),
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
                                         'header'=>'Keterangan',
                                         'value'=>'$data->statusa->keterangan',

                                         ),
                                array('name'=>'status',
                                         'header'=>'Deadline',
                                         'value'=>'selisih($data->status, $data->id)',

                                         ),
                                array(
                                        'class'=>'CButtonColumn',
                                         'header'=>'Action',
                                        'template'=>'{send}',
                                        'buttons'=>array
                                            (
                                                'send' => array
                                                    (
                                                        'label'=>'<i class="glyphicon glyphicon-plane"></i>',
                                                        'imageUrl'=>false,
                                                        'visible' =>'$data->status == 12',
                                                        'url'=>'$this->grid->controller->createUrl("/pengiriman/create",array("idm"=>$data->id))',
                                                        'options' => array(
                                                                'rel' => 'tooltip',
                                                                'data-toggle' => 'tooltip', 
                                                                'title'       => 'Buat Rencana Pengiriman', ),
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
                <?php 
                function cekpengajuan($idm){
                $pengajuan = Pengajuan::Model()->findAll('id_material ='.$idm);
                return count($pengajuan);}
                $this->widget('zii.widgets.grid.CGridView', array(
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
                                         'header'=>'Keterangan',
                                         'value'=>'$data->statusa->keterangan',

                                         ),
                                array('name'=>'status',
                                         'header'=>'Deadline',
                                         'value'=>'selisih($data->status, $data->id)',

                                         ),
                                array(
                                        'class'=>'CButtonColumn',
                                        'header'=>'Action',
                                        'template'=>'{view}{inspeksi}{pengajuan}',
                                        'buttons'=>array
                                            (
                                                'view' => array
                                                    (
                                                        'label'=>'<i class="glyphicon glyphicon-eye-open"></i>',
                                                        'imageUrl'=>false,
                                                        'visible' =>'$data->status == 12',
                                                        'url'=>'$this->grid->controller->createUrl("/pengiriman/view",array("idm"=>$data->id))',
                                                        'options' => array(
                                                                'rel' => 'tooltip',
                                                                'data-toggle' => 'tooltip', 
                                                                'title'       => 'Konfirmasi Pengiriman', ),
                                                             ),

                                                
                                                'inspeksi' => array
                                                    (
                                                        'label'=>'<i class="glyphicon glyphicon-check" ></i>',
                                                        'imageUrl'=>false,
                                                        'visible' =>'$data->status == 13',
                                                        'url'=>'$this->grid->controller->createUrl("/hasilinspeksiWH/create",array("idm"=>$data->id))',
                                                        'options' => array(
                                                                'rel' => 'tooltip',
                                                                'data-toggle' => 'tooltip', 
                                                                'title'       => 'Upload Hasil Inspeksi', ),
                                                             ),
                                                'pengajuan' => array
                                                    (
                                                        'label'=>'<i class="glyphicon glyphicon-pencil" ></i>',
                                                        'imageUrl'=>false,
                                                        'visible' =>'$data->status == 15 && cekpengajuan($data->id) > 0',
                                                        'url'=>'$this->grid->controller->createUrl("/pengajuan/view",array("idm"=>$data->id))',
                                                        'options' => array(
                                                                'rel' => 'tooltip',
                                                                'data-toggle' => 'tooltip', 
                                                                'title'       => 'Lihat Pengajuan Material', ),
                                                             ),

                                                          ),
                                ),
                        ),
                    )); ?>
            </div>
            <?php } ?>
            <?php if(Yii::app()->user->role == "Proyek" || Yii::app()->user->role =="Admin" ){ ?>
           <div id="Proyek" class="col-lg-12">
            <br>
                <b align="center">Dashboard Proyek</b>
                <?php $this->widget('zii.widgets.grid.CGridView', array(
                        'id'=>'proyek-grid',
                        'dataProvider'=>$data1,
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
                                
                                array('name'=>'kategori',
                                         'header'=>'Kategori',
                                         'value'=>'$data->kategoria->nama',

                                         ), 
                                'stok',
                               array(
                                        'class'=>'CButtonColumn',
                                        'header'=>'Action',
                                        'template'=>'{pengajuan}  {view}',
                                        'buttons'=>array
                                            (
                                                'pengajuan' => array
                                                    (
                                                        'label'=>'<i class="glyphicon glyphicon-pencil"></i>',
                                                        'imageUrl'=>false,
                                                        'visible' =>'$data->status == 15 && $data->stok > 0',
                                                        'url'=>'$this->grid->controller->createUrl("/pengajuan/create",array("idm"=>$data->id))',
                                                        'options' => array(
                                                                'rel' => 'tooltip',
                                                                'data-toggle' => 'tooltip', 
                                                                'title'       => 'Pengajuan Material', ),
                                                             ),
                                                'view' => array
                                                    (
                                                        'label'=>'<i class="glyphicon glyphicon-eye-open" ></i>',
                                                        'imageUrl'=>false,
                                                        'visible' =>'$data->status == 15',
                                                        'url'=>'$this->grid->controller->createUrl("/pengajuan/view",array("idm"=>$data->id))',
                                                        'options' => array(
                                                                'rel' => 'tooltip',
                                                                'data-toggle' => 'tooltip', 
                                                                'title'       => 'Cek Status Pengajuan', ),
                                                             ),

                                                          ),
                                ),
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
