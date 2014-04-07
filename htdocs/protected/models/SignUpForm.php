<?php

/**
 * SignUpForm class.
 * SignUpForm is the data structure for keeping
 * signUp form data. It is used by the 'signUp' action of 'SiteController'.
 */
class SignUpForm extends CFormModel
{
	public $username;
	public $password;
	public $codeword;
	public $email;
	public $grade;
	public $verifyCode;

	/**
	 * Declares the validation rules.
	 */
	public function rules()
	{
		return array(
			// username and passcode are required
			array('username, password, codeword', 'required'),
			
			// Codeword must be correct
			array('codeword', 'checkCodeword'),

/* 			array('codeword', 'compare', 'compareValue'=>'beavrs', 'operator'=>'==', 'allowEmpty'=>false , 'message'=>'The codeword is incorrect' ), */

			// verifyCode needs to be entered correctly
			array('verifyCode', 'captcha', 'allowEmpty'=>!CCaptcha::checkRequirements()),
			array('email, grade', 'safe'),
		);
	}

	/**
	 * Declares customized attribute labels.
	 * If not declared here, an attribute would have a label that is
	 * the same as its name with the first letter in upper case.
	 */
	public function attributeLabels()
	{
		return array(
			'email' => 'Email (optional)',
			'verifyCode'=>'Verification Code',
		);
	}
	
	public function save()
	{
		return true;
	}
	
	
	/**
	* Custom validator for codewords
	*
	* @param string the name of the attribute to be validated
	* @param array options specified in the validation rule
	*/
	public function checkCodeword($attribute,$params)
	{
		$codewordArray = array("beavrs", "christoph");

	    if (!in_array($this->codeword, $codewordArray))
	    {
	         $this->addError($attribute, 'The codeword is incorrect');
	    }
	 }

}