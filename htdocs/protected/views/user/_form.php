<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'user-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

    <div class="row">
        <?php echo $form->labelEx($model,'grade'); ?>
        <?php echo ZHtml::enumDropDownList($model,'grade', array()); ?>
        <?php echo $form->error($model,'grade'); ?>
    </div>
            
	<div class="row">
		<?php echo $form->labelEx($model,'email'); ?>
		<?php echo $form->textField($model,'email',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'email'); ?>
	</div>
	
	<div class="row">
		<?php echo $form->labelEx($model,'new_password'); ?>
		<?php echo $form->passwordField($model,'new_password',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'new_password'); ?>
	</div>
	
	<div class="row">
		<?php echo $form->labelEx($model,'new_password_repeat'); ?>
		<?php echo $form->passwordField($model,'new_password_repeat',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'new_password_repeat'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->