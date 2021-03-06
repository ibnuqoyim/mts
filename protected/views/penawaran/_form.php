<?php
/* @var $this PermintaanController */
/* @var $model Permintaan */
/* @var $form CActiveForm */
?>


<!--
	<div class="row">
		<?php //echo $form->labelEx($model,'id_user'); ?>
		<?php //echo $form->textField($model,'id_user',array('class'=>'form-control','type'=>'hidden',
//'value'=>),array('size'=>60,'maxlength'=>300)); ?>
		<?php //echo $form->error($model,'id_user'); ?>
	</div>
-->

	<?php foreach ($dok_per as $dp) { ?>
		
	
	<div class="col-lg-6">
			<?php echo "<br> <b> Dokumen Engineering : </b>" ?>
			<?php $this->widget('zii.widgets.CDetailView', array(
				'data'=>$modal,
				'attributes'=>array(
					array('name'=>'Kode',
                          'type'=>'raw',
                          'value'=>$modal->kode,
                          ),
					array('name'=>'Material',
                          'type'=>'raw',
                          'value'=>$modal->nama,
                          ),
					array('name'=>'Kategori',
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
					array('name'=>'Dokumen Permintaan Penawaran',
                          'type'=>'raw',
                          'value'=>'<a href="/mts/dokumen/permintaan/'.$dp->file_dokpermintaan.'">'.$dp->file_dokpermintaan.'</a>',
                          
                          ),
					
				),
			));  } ?>
	<div class="form">

<?php 
	if(count($list) == 0){
$form=$this->beginWidget('CActiveForm', array(
	'id'=>'permintaan-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
	'htmlOptions' => array('enctype' => 'multipart/form-data'),
)); ?>

	

	<?php echo $form->errorSummary($model); ?>
	<br>
	
	<div class="form-group">
            <?php echo "<h4><b>Silahkan Upload Dokumen Administrasi untuk tender : </b></h4> <br>" ?>
			<?php echo $form->fileField($model,'file_administrasi'); ?>
			<?php echo $form->error($model,'file_administrasi'); ?>
    </div>

    <div class="form-group">
            <?php echo "<h4><b>Silahkan Upload Dokumen Teknis untuk tender : </b></h4><br>" ?>
			<?php echo $form->fileField($model,'file_teknis'); ?>
			<?php echo $form->error($model,'file_teknis'); ?>
    </div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'deskripsi'); ?>
		<?php echo $form->textArea($model,'deskripsi',array('class'=>'form-control'),array('size'=>60,'maxlength'=>300)); ?>
		<?php echo $form->error($model,'deskripsi'); ?>
	</div>



	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Upload' : 'Save', array('class'=>'btn btn-success left ')); ?>
	</div>
</div>
<?php $this->endWidget(); } else{
	echo "<br> <b> Dokumen Penawaran : </b>";
	foreach ($list as $lista) {
	  ?>
<?php $this->widget('zii.widgets.CDetailView', array(
				'data'=>$list,
				'attributes'=>array(
					
					array('name'=>'Dokumen Administrasi',
                          'type'=>'raw',
                          'value'=>'<a href="/mts/dokumen/dokeng/MTO-'.$lista->file_administrasi.'">'.$lista->file_administrasi.'</a>',
                          
                          ),
					
					array('name'=>'Dokumen Teknis',
                          'type'=>'raw',
                          'value'=>'<a href="/mts/dokumen/dokeng/SPEC-'.$lista->file_teknis.'">'.$lista->file_teknis.'</a>',
                          
                          ),
					array('name'=>'',
								'type'=>'raw',
                                         'value'=>CHtml::link('<button class="btn btn-success "> Edit </button>', array('penawaran/updatec','idm'=>$lista->id)),
									),
					
					
				),
			));  }}?>
</div><!-- form -->