        <header>
            <div class="info">
                <div class="container">
                    <div class="col-lg-4 left">
                        <a class="page"><span class="glyphicon glyphicon-user gold" aria-hidden="true"></span> Create User</a>
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
            <?php $form=$this->beginWidget('CActiveForm', array(
    'id'=>'user-form',
    // Please note: When you enable ajax validation, make sure the corresponding
    // controller action is handling ajax validation correctly.
    // There is a call to performAjaxValidation() commented in generated controller code.
    // See class documentation of CActiveForm for details on this.
    'enableAjaxValidation'=>false,
)); ?>
    <div class="col-lg-12">
        <p class="note">Fields with <span class="required">*</span> are requireds.</p>
        <?php echo $form->errorSummary($model); ?>
    </div>

    <div class="col-lg-6">
        <div class="form-group">
            <?php echo $form->labelEx($model,'nama'); ?>
            <?php echo $form->textField($model,'nama',array('class'=>'form-control','readonly'=>true),array('size'=>60,'maxlength'=>100)); ?>
            <?php echo $form->error($model,'nama'); ?>
        </div>

    <div class="form-group">
            <?php echo $form->labelEx($model,'id_dok_eng'); ?>
            <?php echo $form->textField($model,'id_dok_eng',array('class'=>'form-control','readonly'=>true)); ?>
            <?php echo $form->error($model,'id_dok_eng'); ?>
    </div>
    <div class="form-group">
            <?php echo "Upload Dokumen Permintaan Penawaran"; ?>
            <?php echo $form->textField($model,'permintaan_penawaran',array('class'=>'form-control','readonly'=>true)); ?>
            <?php echo $form->error($model,'permintaan_penawaran'); ?>
    </div>
    </div>
    <div class="form-group col-lg-12">
            <?php echo CHtml::submitButton($model->isNewRecord ? 'Ajukan' : 'Save', array('class'=>'btn btn-lg btn-primary left ')); ?>
    </div>

<?php $this->endWidget(); ?>
        </section><?php
/* @var $this UserController */
/* @var $model User */
/* @var $form CActiveForm */
?>
