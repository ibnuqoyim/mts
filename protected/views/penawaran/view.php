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
					foreach($penawaran as $pen){
						echo "<br>";
						$this->widget('zii.widgets.CDetailView', array(
						'data'=>$pen,
						'attributes'=>array(
							array('name'=>'Vendor',
                                         'value'=>$pen->usera->nama,

                                         ),
							
							array('name'=>'Dokumen Penawaran',
								'type'=>'raw',
                                         'value'=>'<a href="/mts/dokumen/penawaran/'.$pen->file.'">'.$pen->file.'</a>',
									),
							'deskripsi',
							array('name'=>'Tanggal Submit',
                                         'value'=>$pen->tgl_create,

                                         ),
							array('name'=>'',
								'type'=>'raw',
                                         'value'=>CHtml::link('<button class="btn btn-success "> Pilih sebagai Pemenang </button>', array('material/win','idp'=>$pen->id_user,'idm'=>$pen->id_material)),
									),
						),
					));
					}
						 ?>
						</div>
			
            </div>
            <div class="col-lg-12 left">
            <?php echo '<br>'.CHtml::link(' <button class="btn btn-lg btn-warning ">Tutup Tender</button>', array('/penawaran/close',array('id'=>1))); ?>
            </div>
        </section>

