
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
                
                

                
                <button type="button" class='btn btn-lg btn-default btn-block' onclick='ab()'>Stok Material</button>
                <?php if(Yii::app()->user->role != "Proyek"){ ?>
                
                <button type="button" class='btn btn-lg btn-default btn-block' onclick='a()'>Materil on Progres</button>
                <?php } ?>
                <?php if(Yii::app()->user->role == "Engineering" || Yii::app()->user->role =="Admin" ){ echo CHtml::link('<span class="glyphicon glyphicon-plus-sign" aria-hidden="true"></span> Ajukan Material Baru', array('/material/create'),array('class'=>'btn btn-lg btn-default btn-block')); }?>
            </div>
            <div class="col-lg-9">
                
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
                                array(

            							'class'=>'IndexColumn',

        							),
                            	'nama',
								array('name'=>'client',
                                         'header'=>'Client',
                                         'value'=>'$data->clienta->nama',
                                         ),
								array('name'=>'pemenang',
                                         'header'=>'Pemenang',
                                         'value'=>'$data->pemenang != null ? $data->usera->nama : "Belum ada Pemenang"',
                                         ),
								
								'stok',
								'create_date',
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
                                    'template'=>'{log}    {edit}',
                                    'buttons'=>array
                                            (
                                                'edit' => array
                                                    (
                                                        'label'=>'<span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span>',
                                                        'imageUrl'=>false,
                                                        'url'=>'$this->grid->controller->createUrl("/material/detail",array("id"=>$data->id))',
                                                             ),

                                                         
                                                'log' => array
                                                    (
                                                        'label'=>'<span class="glyphicon glyphicon-time" aria-hidden="true"></span>',
                                                        'imageUrl'=>false,
                                                        'url'=>'$this->grid->controller->createUrl("/material/log",array("id"=>$data->id))',
                                                             ),

                                                          ),
                                                     ),
                        ),
                    )); ?>
            </div>

       
    </section>