<?php
/* @var $this PermintaanController */
/* @var $model Permintaan */
/* @var $form CActiveForm */
?>

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

	

	<?php echo $form->errorSummary($model); ?>

	<div class="col-lg-6">
		<?php foreach ($pni as $res)
            { ?>
         <table class="table table-hover table-dark" style="width:100%">
              <tr>
                <td>Nama Material</td>
                <td><?php echo $res->materiala->nama ?></td>
              </tr>
              <tr>
                <td>Klien</td>
                 <td><?php echo $res->materiala->clienta->nama ?></td>
              </tr>
              <tr>
                <td>Vendor</td>
               <td><?php echo $res->materiala->usera->nama ?></td>
              </tr>
              <tr>
                <td>Rencana Production & Inspection</td>
                <td><a href="/mts/dokumen/pni/<?php echo $res->file ?>"><?php echo $res->file ?></a></td>
              </tr>
            </table> 
          <?php  }?>
          <br>
	<p style="font-size: 16px">Silahkan Upload Berita Acara Inspeksi : </p>

	<div class="form-group">
            <?php echo " " ?>
			<?php echo $form->fileField($model,'file'); ?>
			<?php echo $form->error($model,'file'); ?>
    </div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'desk'); ?>
		<?php echo $form->textArea($model,'desk',array('class'=>'form-control'),array('size'=>60,'maxlength'=>300)); ?>
		<?php echo $form->error($model,'desk'); ?>
	</div>
	<div class="form-group">
            <?php echo $form->labelEx($model,'status'); ?>
            <?php echo $form->dropDownList(
                    $model,'status',
                    array(
                            'Lulus' => 'Lulus',
                            'Repair' => 'Repair',
                            
                        ),
                    array('prompt'=>'Pilih status','class'=>'form-control'),array('size'=>60,'maxlength'=>100)); ?>
            <?php echo $form->error($model,'status'); ?>
        </div>


	<div class="form-group buttons">
		<?php echo '<br>'.CHtml::submitButton($model->isNewRecord ? 'Upload' : 'Save', array('class'=>'btn  btn-info left ')); ?>
	</div>
</div>
<?php $this->endWidget(); ?>

</div><!-- form -->