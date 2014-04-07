<?php

//in your view where you want to include JavaScripts
$cs = Yii::app()->getClientScript();
    
// Use javascript to give username field focus 
$cs->registerScript(
                    'loginInit',
                    'function init(){var el =  document.getElementById("SignUpForm_username");
                    el.focus();}',
                    CClientScript::POS_END
                    );
                    
$this->pageTitle=Yii::app()->name . ' - Contact Us';
$this->breadcrumbs=array(
	'Contact',
);
?>

<h1>Register</h1>

<?php if(Yii::app()->user->hasFlash('signUp')): ?>

<div class="flash-success">
	<?php echo Yii::app()->user->getFlash('signUp'); ?>
</div>

<?php else: ?>

<p>
The Dataset collection system is totally anonymous, so that individual results are known only to the user. To ensure anonymity, we are not collecting any personal information about you, with the exception of an optional email address. News about the dataset will be emailed to all BEAVRS members.
</p>

<p>Registration is open to all BEAVRS members.</p>

<p>Enter a username and password, the codeword derived from the BEAVRS website, and the verification code shown. The codeword ensures that only BEAVRS members are able to sign up.
</p>

<p>
IMPORTANT:Please ensure you keep both your username and password in a safe place.
</p>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'signUp-form',
	'enableClientValidation'=>true,
	'clientOptions'=>array(
		'validateOnSubmit'=>true,
	),
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'username'); ?>
		<?php echo $form->textField($model,'username'); ?>
		<?php echo $form->error($model,'username'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'password'); ?>
		<?php echo $form->passwordField($model,'password'); ?>
		<?php echo $form->error($model,'password'); ?>
	</div>
	
	<div class="row">
		<?php echo $form->labelEx($model,'codeword'); ?>
		<?php echo $form->textField($model,'codeword'); ?>
		<?php echo $form->error($model,'codeword'); ?>
	</div>

    <div class="row">
        <?php echo $form->labelEx($model,'grade'); ?>
		<?php echo $form->dropDownList($model, 'grade', array('Consultant' => 'Consultant', 'Fellow' => 'Fellow','SpR' => 'SpR','Other' => 'Other')); ?>
        <?php echo $form->error($model,'grade'); ?>
    </div>
    	
	<div class="row">
		<?php echo $form->labelEx($model,'email'); ?>
		<?php echo $form->textField($model,'email'); ?>
		<?php echo $form->error($model,'email'); ?>
	</div>
	
	<?php if(CCaptcha::checkRequirements()): ?>
	<div class="row">
		<?php echo $form->labelEx($model,'verifyCode'); ?>
		<div>
		<?php $this->widget('CCaptcha'); ?>
		<?php echo $form->textField($model,'verifyCode'); ?>
		</div>
		<div class="hint">Please enter the letters as they are shown in the image above.
		<br/>Letters are not case-sensitive.</div>
		<?php echo $form->error($model,'verifyCode'); ?>
	</div>
	<?php endif; ?>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Submit'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->

<?php endif; ?>