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
			<?php echo "<br> <b> Dokumen Engineering : </b>" ?>
			<?php $this->widget('zii.widgets.CDetailView', array(
				'data'=>$modal,
				'attributes'=>array(
					array('name'=>'Material',
                          'type'=>'raw',
                          'value'=>$modal->nama,
                          ),
					array('name'=>'Material Take Off',
                          'type'=>'raw',
                          'value'=>$modal->kategoria->nama,
                          ),
					array('name'=>'Material Take Off',
                          'type'=>'raw',
                          'value'=>'<a href="/mts/dokumen/dokeng/MTO-'.$modal->dokenga->file_mto.'">'.$modal->dokenga->file_mto.'</a>',
                          'visible' =>$modal->dokenga->file_mto != null,
                          ),
					array('name'=>'Drawing',
                          'type'=>'raw',
                          'value'=>'<a href="/mts/dokumen/dokeng/DWG-'.$modal->dokenga->file_dwg.'">'.$modal->dokenga->file_dwg.'</a>',
                          'visible' =>$modal->dokenga->file_dwg != null,
                          ),
					array('name'=>'Spesifikasi',
                          'type'=>'raw',
                          'value'=>'<a href="/mts/dokumen/dokeng/SPEC-'.$modal->dokenga->file_spec.'">'.$modal->dokenga->file_spec.'</a>',
                          'visible' =>$modal->dokenga->file_spec != null,
                          ),
					array('name'=>'Datasheet',
                          'type'=>'raw',
                          'value'=>'<a href="/mts/dokumen/dokeng/DS-'.$modal->dokenga->file_datasheet.'">'.$modal->dokenga->file_datasheet.'</a>',
                          'visible' =>$modal->dokenga->file_datasheet != null,
                          ),
					
				),
			)); ?>
	<div class="form-group">
            <?php echo "<br> <b> Silahkan Upload Dokumen Permintaan Penawaran : </b>" ?>
			<?php echo $form->fileField($model,'file'); ?>
			<?php echo $form->error($model,'file'); ?>
    </div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'deskripsi'); ?>
		<?php echo $form->textArea($model,'deskripsi',array('class'=>'form-control'),array('size'=>60,'maxlength'=>300)); ?>
		<?php echo $form->error($model,'deskripsi'); ?>
	</div>



	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Upload' : 'Save',array('class'=>'btn btn-success left ')); ?>
		<?php $this->endWidget(); ?>
	
	</div>

</div>
<div class="col-lg-6">
	<?php echo '&nbsp &nbsp'.CHtml::link(' <button class="btn  btn-warning ">Back</button>', array('/material/index')); ?>
</div>
</div><!-- form -->