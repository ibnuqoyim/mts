<?php
/* @var $this UserController */
/* @var $model User */
/* @var $form CActiveForm */
?>
<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'user-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
    'htmlOptions' => array('enctype' => 'multipart/form-data'),
)); ?>
    <div class="col-lg-12">
        
        <?php echo $form->errorSummary($model); ?>
    </div>

    <div class="col-lg-6">
        
        <?php foreach ($respon as $res)
            { ?>
         <table class="table table-hover table-dark" style="width:100%">
              <tr>
                <td>Kode Material</td>
                <td><?php echo $res->materiala->kode ?></td>
              </tr>
              <tr>
                <td>Nama Material</td>
                <td><?php echo $res->materiala->nama ?></td>
              </tr>
              <tr>
                <td>Status</td>
                 <td><?php echo $res->materiala->statusa->namaStatus ?></td>
              </tr>
              <tr>
                <td>Alasan Penolakan</td>
               <td><?php echo $res->isi ?></td>
              </tr>
              <tr>
                <td>Dokumen Penolakan Client</td>
                <td><a href="/mts/dokumen/responclient/tolak-<?php echo $res->file_respon ?>"><?php echo $res->file_respon ?></a></td>
              </tr>
            </table> 
          <?php  }?>
          <br>
	 <div id="dok1" class="form-group">
            <?php echo "Upload Dokumen MTO : "; if($model->dokenga->file_mto != null){echo '<a href="/mts/dokumen/dokeng/MTO-'.$model->dokenga->file_mto.'">'.$model->dokenga->file_mto.'</a>';} ?>
      <?php echo $form->fileField($dokeng,'file_mto'); ?>
      <?php echo $form->error($dokeng,'file_mto'); ?>
    </div>
    <div class="form-group">
            <?php echo "Upload Dokumen Drawing : "; if($model->dokenga->file_dwg != null){echo '<a href="/mts/dokumen/dokeng/MTO-'.$model->dokenga->file_dwg.'">'.$model->dokenga->file_dwg.'</a>';}  ?>
            <?php echo $form->fileField($dokeng,'file_dwg'); ?>
            <?php echo $form->error($dokeng,'file_dwg'); ?>
    </div>
    <div class="form-group">
            <?php echo "Upload Dokumen Spesifikasi : " ; if($model->dokenga->file_spec != null){echo '<a href="/mts/dokumen/dokeng/MTO-'.$model->dokenga->file_spec.'">'.$model->dokenga->file_spec.'</a>';} ?>
            <?php echo $form->fileField($dokeng,'file_spec'); ?>
            <?php echo $form->error($dokeng,'file_spec'); ?>
    </div>
    <div class="form-group">
            <?php echo "Upload Dokumen Datasheet : " ; if($model->dokenga->file_datasheet != null){echo '<a href="/mts/dokumen/dokeng/MTO-'.$model->dokenga->file_datasheet.'">'.$model->dokenga->file_datasheet.'</a>';} ?>
            <?php echo $form->fileField($dokeng,'file_datasheet'); ?>
            <?php echo $form->error($dokeng,'file_datasheet'); ?>
    </div>
    </div>
    <div class="form-group col-lg-12">
            <?php echo CHtml::submitButton($dokeng->isNewRecord ? 'Ajukan' : 'Update', array('class'=>'btn btn-primary left ')); ?>
    </div>

<?php $this->endWidget(); ?>
