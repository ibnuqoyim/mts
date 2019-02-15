        <header>
            <div class="info">
                <div class="container">
                    <div class="col-lg-4 left">
                        <a class="page"><span class="glyphicon glyphicon-check blue" aria-hidden="true"></span> Approve Dokumen Engineering</a>
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
            <p>Berikan Komentar atas persetujuan anda : </p>
            <?php $a = "Komentar";
            $this->renderPartial('_form', array('model'=>$model,'a'=>$a)); ?>
        </section>
