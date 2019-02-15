        <header>
            <div class="info">
                <div class="container">
                    <div class="col-lg-4 left">
                        <a class="page"><span class="glyphicon glyphicon-user gold" aria-hidden="true"></span> View Dokumen Engineering  <?php echo $model->material->nama ?></a>
                    </div>
                    <div class="col-lg-5 right alamat">
                        <?php
                            if(Yii::app()->user->kodeAsrama != NULL){
                        ?>
                                <p class="head"><?php echo CHtml::link(Yii::app()->user->nama .' ('.Yii::app()->user->role.' '.Yii::app()->user->asrama.')', array('/user/update','id'=>Yii::app()->user->id), array('class'=>'gold')); ?></p>
                        <?php
                            }  else {
                        ?>
                                <?php $pengguna = User::Model()->findByPk(Yii::app()->user->id); ?>
                         <p class="head"><?php echo CHtml::link(Yii::app()->user->nama.'-'.$pengguna->alamat .' ('.Yii::app()->user->role.')', array('/user/update','id'=>Yii::app()->user->id), array('class'=>'gold')); ?></p>
                        <?php        
                            }
                        ?>
                    </div>
                    <div class="clear"></div>
                </div>
            </div> 
        </header>
         <section class="container">


            <div class="col-lg-12">

			
			 <div class="col-lg-6">
			<?php $this->widget('zii.widgets.CDetailView', array(
				'data'=>$model,
				'attributes'=>array(
					array('name'=>'Material',
                          'type'=>'raw',
                          'value'=>$model->material->nama,
                          
                          ),
					array('name'=>'Material Take Off',
                          'type'=>'raw',
                          'value'=>'<a href="/mts/dokumen/dokeng/MTO-'.$model->file_mto.'">'.$model->file_mto.'</a>',
                          'visible' =>$model->file_mto != null,
                          ),
					array('name'=>'Drawing',
                          'type'=>'raw',
                          'value'=>'<a href="/mts/dokumen/dokeng/DWG-'.$model->file_dwg.'">'.$model->file_dwg.'</a>',
                          'visible' =>$model->file_dwg != null,
                          ),
					array('name'=>'Spesifikasi',
                          'type'=>'raw',
                          'value'=>'<a href="/mts/dokumen/dokeng/SPEC-'.$model->file_spec.'">'.$model->file_spec.'</a>',
                          'visible' =>$model->file_spec != null,
                          ),
					array('name'=>'Datasheet',
                          'type'=>'raw',
                          'value'=>'<a href="/mts/dokumen/dokeng/DS-'.$model->file_datasheet.'">'.$model->file_datasheet.'</a>',
                          'visible' =>$model->file_datasheet != null,
                          ),
					
				),
			)); ?>
		</div>
	</div>
	<br> <br> <br> <br>  
	<?php echo '<br>'.CHtml::link('<button class="btn btn-lg btn-success ">Approve</button>', array('/clientRespon/create','idm'=>$model->id_material)); ?>
	<?php echo '  '.CHtml::link(' <button class="btn btn-lg btn-warning ">Reject</button>', array('/clientRespon/creater','idm'=>$model->id_material)); ?>
	</section>
