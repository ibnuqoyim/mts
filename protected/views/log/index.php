        <header>
            <div class="info">
                <div class="container">
                    <div class="col-lg-4 left">
                        <a class="page"><span class="glyphicon glyphicon-user gold" aria-hidden="true"></span> Pengelolaan Log Activity</a>
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
            <div class="col-lg-3">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Advance Search</h3>
                    </div>
                    <div class="panel-body">
                        <?php $form=$this->beginWidget('CActiveForm', array(
                                'action'=>Yii::app()->createUrl($this->route),
                                'method'=>'get',
                        )); ?>
                            <div class="form-group">
                                <label>Kegiatan</label>
                                <?php echo $form->textField($model,'kegiatan',array('class'=>'form-control'),array('size'=>60,'maxlength'=>75)); ?>
                            </div>
                            
                            <?php echo CHtml::submitButton('Search',array('class'=>'btn btn-lg btn-primary btn-block')); ?>
                        <?php $this->endWidget(); ?>
                    </div>
                </div> 
                
                <?php echo CHtml::link('<span class="glyphicon glyphicon-plus-sign" aria-hidden="true"></span> Tambah Pengguna Baru', array('/user/create'),array('class'=>'btn btn-lg btn-default btn-block')); ?>
            </div>
            <div class="col-lg-9">
                <?php $this->widget('zii.widgets.grid.CGridView', array(
                        'id'=>'user-grid',
                        'dataProvider'=>$model->search(),
                        //'filter'=>$model,
                        'pager'=>array(
                            'header'         => '',
                            'firstPageLabel' => '&lt;&lt;',
                            'prevPageLabel'  => '&lt',
                            'nextPageLabel'  => '&gt',
                            'lastPageLabel'  => '&gt;&gt;',
                            'cssFile'=>Yii::app()->theme->baseUrl.'/assets/css/main.css',
                        ),
                        'template'=>'{items} {pager}',
                        'cssFile' => Yii::app()->theme->baseUrl.'/assets/css/main.css',
                        'columns'=>array(
                                'tgl',
                                array('name'=>'id_user',
                                         'header'=>'Pengguna',
                                         'value'=>'$data->usera->nama',

                                         ),
                                'kegiatan',
                                
                                array(
                                        'class'=>'CButtonColumn',
                                ),
                        ),
                    )); ?>
            </div>
        </section>
