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
					function statuspengajuan($idx)
					{
						if($idx == 0){
							return "Menunggu Approval";
						}elseif($idx == 1){
							return "Sudah disetujui";
						}elseif($idx == 2){
							return "Ditolak";
						}elseif($idx == 3){
							return "Sudah diterima proyek";
						}
					}
                    $a = 1;
					foreach($pengajuan as $pen){
						echo "<br>";
						$this->widget('zii.widgets.CDetailView', array(
						'data'=>$pen,
						'attributes'=>array(
                            
                            
                            array('name'=>'Nama Material',
                                         'value'=>$pen->materiala->nama,

                                         ),
                            array('name'=>'Yang Mengajukan',
                                         'value'=>$pen->pengaju->nama,

                                         ),
                            array('name'=>'Jumlah diajukan',
                                         'value'=>$pen->jumlah,

                                         ),
                             array('name'=>'Status',
                                         'value'=>statuspengajuan($pen->disetujui),

                                         ),
							array('name'=>'',
								'type'=>'raw',
                                         'value'=>CHtml::link('<button class="btn btn-success "> Setujui </button>', array('pengajuan/approve','id'=>$pen->id,'idm'=>$pen->id_material))."  ".CHtml::link('<button class="btn btn-danger "> Tolak </button>', array('pengajuan/reject','id'=>$pen->id,'idm'=>$pen->id_material)),
                                         'visible'=>$pen->disetujui == 0 && (Yii::app()->user->role == "Warehouse" || Yii::app()->user->role == "Admin") ,
                                         
									),
							array('name'=>'',
								'type'=>'raw',
                                         'value'=>CHtml::link('<button class="btn btn-success "> Konfirmasi penerimaan Material </button>', array('pengajuan/konfirmasi','id'=>$pen->id,'idm'=>$pen->id_material)),
                                         'visible'=>$pen->disetujui == 1 && (Yii::app()->user->role == "Proyek" || Yii::app()->user->role == "Admin") ,
                                         
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

