        <header>
            <div class="info">
                <div class="container">
                    <div class="col-lg-4 left">
                        <a class="page"><span class="glyphicon glyphicon-calendar gold" aria-hidden="true"></span> Jadwal Kick of Meeting</a>
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
            <div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'permintaan-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
	'htmlOptions' => array('enctype' => 'multipart/form-data'),
)); ?>

	

	<?php echo $form->errorSummary($modal); ?>


	<div class="col-lg-6 left">
		Jadwal Kick Of Meeting untuk Pengadaan Material <?php echo $modal->nama?>
		<?php foreach ($model as $res)
            { ?>
         <table class="table table-hover table-dark" style="width:100%">
              <tr>
                <td>Tanggal</td>
                 <td><?php echo $res->tanggal ?></td>
              </tr>
              <tr>
                <td>Tempat</td>
               <td><?php echo $res->tempat ?></td>
              </tr>
              <tr>
                <td>Dokumen Penawaran</td>
                <td><?php echo $res->keterangan ?></td>
              </tr>
            </table> 
          <?php  }?>


        <?php echo $form->hiddenField($modal,'status',array('class'=>'form-control','value'=>8)); ?>

	<div class="row buttons">
		<?php echo CHtml::submitButton($modal->isNewRecord ? 'Create' :'Konfirm', array('class'=>'btn btn-success left ')); ?>
	</div>
</div>
<?php $this->endWidget(); ?>

</div>
        </section>