<header>
            <div class="info">
                <div class="container">
                    <div class="col-lg-4 left">
                        <a class="page"><span class="glyphicon glyphicon-user gold" aria-hidden="true"></span> Reject Progres</a>
                    </div>
                    <div class="col-lg-5 right alamat">

                                <?php $pengguna = User::Model()->findByPk(Yii::app()->user->id); ?>
                                                 <p class="head"><?php echo CHtml::link(Yii::app()->user->nama.'-'.$pengguna->alamat .' ('.Yii::app()->user->role.')', array('/user/update','id'=>Yii::app()->user->id), array('class'=>'gold')); ?></p>


                    </div>
                    <div class="clear"></div>
                </div>
            </div>
        </header>
<section class="container">
            <div class="col-lg-12 data">
<h1>Reject </h1>
</div>
<?php $this->renderPartial('_formr', array('model'=>$model)); ?></section>
