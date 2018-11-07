    <section class="container">
            <div class="col-md-4 col-md-offset-4">
			<div align="center" >
							<b>MATERIAL TRACKING SYSTEM</b>
						
						</div>
						<br><br>
                <div class="login-panel panel panel-default">
                    <div class="panel-heading">
                        <h3 align="center" class="panel-title">Form Login</h3>
                    </div>
                    <div class="panel-body">
                        <?php 
                            $form=$this->beginWidget('CActiveForm', array(
                                'id'=>'login-form',
                                'enableClientValidation'=>true,
                                'clientOptions'=>array(
                                        'validateOnSubmit'=>true,
                                ),
                            )); 
                        ?>
						
                            <fieldset>
                                <div class="form-group">
                                    <?php echo $form->textField($model,'username',array('class'=>'form-control','placeholder'=>'Username')) ?>
                                </div>
                                <div class="form-group">
                                    <?php echo $form->passwordField($model,'password',array('class'=>'form-control','placeholder'=>'Password')); ?>
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <?php echo $form->checkBox($model,'rememberMe'); ?>
                                        <?php echo $form->label($model,'rememberMe'); ?>
                                    </label>
                                </div>
                                <!-- Change this to a button or input when using this as a form -->
                                <?php echo CHtml::submitButton('Login',array('class'=>'btn btn-lg btn-primary btn-block')); ?>
                            </fieldset>
                        <?php $this->endWidget(); ?>
						
						<br>
						
                    </div>
                </div>
            </div>
    </section>

