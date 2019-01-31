<?php
/* @var $this KomController */
/* @var $model Kom */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'pni-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
	'htmlOptions' => array('enctype' => 'multipart/form-data'),
)); ?>

	

	<?php echo $form->errorSummary($model); ?>

	<div class="col-lg-6 left">
		
         <table class="table table-hover table-dark" style="width:100%">
              <tr>
                <td>Kode Material</td>
                <td><?php echo $modal->kode ?></td>
              </tr>
              <tr>
                <td>Nama Material</td>
                <td><?php echo $modal->nama ?></td>
              </tr>
              
              <tr>
                <td>Vendor</td>
               <td><?php echo $modal->usera->nama ?></td>
              </tr>
              <tr>
                <td>Dokumen kontrak</td>
                <td><a href="/mts/dokumen/kontrak/<?php echo $modal->kontrak->file_kontrak ?>"><?php echo $modal->kontrak->file_kontrak ?></a></td>
              </tr>
            </table> 
          

			<div class="form-group">
            <p style="font-size: 16px">Silahkan upload dokumen perencanaan Production and Inspection : </p>
			<?php echo $form->fileField($model,'file'); ?>
			<?php echo $form->error($model,'file'); ?>
    </div>
	<div class="form-group">
		<?php echo $form->labelEx($model,'plan_produksi'); ?>
		<?php echo $form->dateField($model,'plan_produksi',array('class'=>'form-control')); ?>
		<?php echo $form->error($model,'plan_produksi'); ?>
	</div>



	<div class="form-group">
		<?php echo $form->labelEx($model,'desk'); ?>
		<?php echo $form->textArea($model,'desk',array('class'=>'form-control'),array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'desk'); ?>
	</div>

	<div class="form-group buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save', array('class'=>'btn btn-info left ')); ?>
	</div></div>

<?php $this->endWidget(); ?>

</div><!-- form -->