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
	//'htmlOptions' => array('enctype' => 'multipart/form-data'),
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
               <td><?php echo $modal->usera->perusahaan ?></td>
              </tr>
              <tr>
                <td>Dokumen kontrak</td>
                <td><a href="/mts/dokumen/kontrak/<?php echo $modal->kontrak->file_kontrak ?>"><?php echo $modal->kontrak->file_kontrak ?></a></td>
              </tr>
            </table> 

		<div class="form-group">
            <?php echo $form->labelEx($model,'progres'); ?>
            <?php echo $form->dropDownList(
                    $model,'progres',
                    array(
                            '25' => '25%',
                            '50' => '50%',
                            '75' => '75%',
                            '100' => '100%',
                            
                        ),
                    array('prompt'=>'Pilih progres','class'=>'form-control'),array('size'=>60,'maxlength'=>100)); ?>
            <?php echo $form->error($model,'progres'); ?>
        </div>





	<div class="form-group buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save', array('class'=>'btn btn-info left ')); ?>
	</div></div>

<?php $this->endWidget(); ?>

</div><!-- form -->