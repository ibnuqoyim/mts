        <header>
            <div class="info">
                <div class="container">
                    <div class="col-lg-4 left">
                        <a class="page"><span class="glyphicon glyphicon-file gold" aria-hidden="true"></span> Penawaran Material <?php echo $modal->nama; ?></a>
                    </div>
                    <div class="col-lg-5 right alamat">
                        <?php
                            if(Yii::app()->user->kodeAsrama != NULL){
                        ?>
                                <p class="head"><?php echo CHtml::link(Yii::app()->user->nama .' ('.Yii::app()->user->role.' '.Yii::app()->user->asrama.')', array('/user/update','id'=>Yii::app()->user->id), array('class'=>'gold')); ?></p>
                        <?php
                            }  else {
                        ?>
                                <p class="head"><?php echo CHtml::link(Yii::app()->user->nama .' ('.Yii::app()->user->role.')', array('/user/update','id'=>Yii::app()->user->id), array('class'=>'gold')); ?></p>
                        <?php        
                            }
                        ?>
                    </div>
                    <div class="clear"></div>
                </div>
            </div> 
        </header>



        <section class="container">
            <div class="col-lg-12 left">
            	
            		<div class="col-lg-6 left">
					<?php 
                    $a = 1;
					foreach($penawaran as $pen){
						echo "<br>";
						$this->widget('zii.widgets.CDetailView', array(
						'data'=>$pen,
						'attributes'=>array(
                            array('name'=>'Peserta ke',
                                         'value'=>$a++,

                                         ),
							array('name'=>'Vendor',
                                         'value'=>$pen->usera->nama,

                                         ),
							
							array('name'=>'Dokumen Administrasi',
								'type'=>'raw',
                                         'value'=>'<a href="/mts/dokumen/penawaran/ADM-'.$pen->file_administrasi.'">'.$pen->file_administrasi.'</a>',
                                         'visible' =>(Yii::app()->user->role == "Admin" || Yii::app()->user->role == "Pengadaan"),
									),
                            array('name'=>'Dokumen Teknis',
                                'type'=>'raw',
                                         'value'=>'<a href="/mts/dokumen/penawaran/TEKNIS-'.$pen->file_teknis.'">'.$pen->file_teknis.'</a>',
                                    ),
							'deskripsi',
							array('name'=>'Tanggal Submit',
                                         'value'=>$pen->tgl_create,

                                         ),
                             array('name'=>'Dokumen Review Engineering',
                                'type'=>'raw',
                                         'value'=>'<a href="/mts/dokumen/penawaran/RE-'.$pen->file_review_eng.'">'.$pen->file_review_eng.'</a>',
                                    ),
                            
                            array('name'=>'Review Engineering',
                                         'value'=>$pen->review_engineering,

                                         ),
							array('name'=>'',
								'type'=>'raw',
                                         'value'=>CHtml::link('<button class="btn btn-success "> Pilih sebagai Pemenang </button>', array('material/win','idp'=>$pen->id_user,'idm'=>$pen->id_material)),
                                         'visible' =>$modal->status_tender == 2,
									),
                            array('name'=>'Review',
                                'type'=>'raw',
                                         'value'=>$pen->file_review_eng != NULL ? 'Sudah di review '.CHtml::link('<button class="btn btn-success "> Edit</button>', array('penawaran/review_eng','id'=>$pen->id)) : CHtml::link('<button class="btn btn-success "> Upload review Engineering </button>', array('penawaran/review_eng','id'=>$pen->id)),
                                         'visible' =>$modal->status_tender == 1 && (Yii::app()->user->role == "Admin" || Yii::app()->user->role == "Engineering"),
                                    ),
						),
					));
					}
						 ?>
						</div>
			
            </div>
            <?php if($modal->status_tender == 1 && (Yii::app()->user->role == "Admin" || Yii::app()->user->role == "Pengadaan")){ ?>
            <div class="col-lg-12 left">
            <?php echo '<br>'.CHtml::link(' <button class="btn btn-lg btn-danger ">Tutup Tender</button>', array('/material/closetender','idm'=>$modal->id)); ?>
            </div>
            <?php } ?>
        </section>

