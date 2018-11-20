<?php
/* @var $this KomController */
/* @var $model Kom */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'kom-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	

	<?php echo $form->errorSummary($model); ?>

	<div class="col-lg-6 left">
		<?php foreach ($kontrak as $res)
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
                <td>Dokumen kontrak</td>
                <td><a href="/mts/dokumen/kontrak/<?php echo $res->file ?>"><?php echo $res->file ?></a></td>
              </tr>
            </table> 
          <?php  }?>

		<b style="font-size: 16px"> Silahkan masukan rencana Kick of Meeting : </b>
	<div class="form-group">
		<?php echo $form->labelEx($model,'tanggal'); ?>
		<?php echo $form->dateField($model,'tanggal',array('class'=>'form-control')); ?>
		<?php echo $form->error($model,'tanggal'); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'tempat'); ?>
		<?php echo $form->textField($model,'tempat',array('class'=>'form-control'),array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'tempat'); ?>
	</div>


	<div class="form-group">
		<?php echo $form->labelEx($model,'keterangan'); ?>
		<?php echo $form->textArea($model,'keterangan',array('class'=>'form-control'),array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'keterangan'); ?>
	</div>

	<div class="form-group buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save', array('class'=>'btn btn-info left ')); ?>
	</div></div>

<?php $this->endWidget(); ?>

</div><!-- form -->