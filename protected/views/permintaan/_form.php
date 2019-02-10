<?php
/* @var $this PermintaanController */
/* @var $model Permintaan */
/* @var $form CActiveForm */
?>


	

	<div class="col-lg-6">
			<?php echo "<br> <b> Dokumen Engineering : </b>" ?>
			<?php $this->widget('zii.widgets.CDetailView', array(
				'data'=>$modal,
				'attributes'=>array(
					array('name'=>'Kode Material',
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
					
				),
			)); ?>
			<br>
			<table class="table" style="width:100% ; border: 2px solid black;">
              <tr>
                <td>No</td>
                <td>Vendor</td>
                <td>Dokumen Permintaan</td>
              </tr>
              <?php $o = 1 ?>
	<?php foreach ($respon as $res)
            { ?>
         
              <tr>
                <td><?php echo $o++ ?></td>
                <td><?php echo $res->usera->nama ?></td>
                <td><?php echo '<a href="/mts/dokumen/permintaan/'.$res->file_dokpermintaan.'">'.$res->file_dokpermintaan.'</a>' ?></td>
              </tr>
              
          <?php  } 
          if(count($respon) == 0){
          	?>
          	<tr>
                <td colspan="3" style="text-align: center; size: 8px">Nothing to show</td>
                
              </tr>
          	<?php
          }?>
           </table>
           <?php echo '<br>'.CHtml::link('<button class="btn btn-success "><i class="glyphicon glyphicon-plus-sign"></i> Permintaan</button>', array('/dokpermintaan/create','idm'=>$modal->id)); ?>

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
	

	<div class="form-group">
		<?php echo $form->labelEx($model,'deskripsi'); ?>
		<?php echo $form->textArea($model,'deskripsi',array('class'=>'form-control'),array('size'=>60,'maxlength'=>300)); ?>
		<?php echo $form->error($model,'deskripsi'); ?>
	</div>



	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Save' : 'Save',array('class'=>'btn btn-success left ')); ?>
		<?php $this->endWidget(); ?>
	
	</div>

</div>

 <?php echo '<br>'.CHtml::link('<button class="btn btn-success "><i class="glyphicon glyphicon-plus-sign"></i> Save</button>', array('/permintaan/simpan')); ?>

</div><!-- form -->
