<?php

/**
 * PasswordCrypto handles password cryptography stuff
 */

class PasswordCrypto
{
	/**
	 * Needed to work as a component
	 */
	public function init() {}
	/**
	 * Given a password, a hashed password and an optional salt (in case you're using salted md5),
	 * attempts to match the password. If md5 is being used, will return a crypt()
	 * @param $password string The plaintext password provided by the user
	 * @param $hash string The already hashed password
	 * @param $salt string MD5 salt if you're using one
	 * @return string|bool false if it does not match, true if it matches, a crypt() replacement for the password if it's not already crypt()ed
	 */
	public function matches($password, $hash, $salt='')
	{
		if ($this->isCrypt($hash)) {
			return $this->hashCrypt($password,$this->getSalt($hash)) === $hash;
		}
		if (md5($salt . $password) === $hash)
			return $this->hashCrypt($password);
		return false;
	}

	/**
	 * Gets the salt for a given crypt string
	 */
	protected function getSalt($hash)
	{
		$pieces = explode("$",$hash);
		return $pieces[3];
	}

	/**
	 * Hashes a password using CRYPT_SHA256
	 * @param $value string The value to crypt()
	 * @param $salt string An optional precomputed salt of 16 base64 chars
	 * @return string
	 */
	protected function hashCrypt($value,$salt=null)
	{
		if (!defined('CRYPT_SHA256'))
			return false;

		if (is_null($salt))
			$salt = $this->generateBase64Salt(16);
		# Ten thousand rounds should be enough. Default is 5k
		return crypt($value,'$5$rounds=10000$' . $salt . "$");
	}

	/**
	 * Determines whether the hash was produced by PasswordCrypto
	 * @param $hash string
	 * @return bool
	 */
	protected function isCrypt($hash)
	{
		return (substr($hash,0,3)==='$5$');
	}

	/**
	 * Generates a salt of $count base64 characters
	 * @param $count character count required
	 * @return string
	 */
	protected function generateBase64Salt($count)
	{
		// Approximate fold factor is 1.37. Get loads extra just in case
		return substr(base64_encode($this->getRandomData($count)),0,$count);
	}

	/**
	 * Generates random data for salt creation
	 * @param $count byte count required
	 * @return string
	 */
	protected function getRandomData($count)
	{
		// This is (probably) good cryptographically secure randomness. Even the non-cryptosecure stuff isn't bad.
		$data = $this->_generate_openssl($count);
		// This makes for a decidedly poor offering, but at least it isn't MT.
		$data .= $this->_generate_urandom($count - strlen($data));
		// Fall back to MT if we really must
		$data .= $this->_generate_mt($count - strlen($data));
		// In case we're over
		return substr($data,0,$count);
	}

	/**
	 * Gets random data from openssl if available
	 * @param $count int byte count required
	 * @return string Actually all 8 bits are used. But sshhhh
	 */
    protected function _generate_openssl($count)
	{
		if (!function_exists('openssl_random_pseudo_bytes'))
			return '';
		// Don't bother checking crypto_strong, this is about the best chance we have even without it being so...
		return (openssl_random_pseudo_bytes($count));
	}

	/**
	 * Gets random data from /dev/urandom if available
	 * @param $count int byte count required
	 * @return string Actually all 8 bits are used. But sshhhh
	 */
	protected function _generate_urandom($count)
	{
		if ($count < 1)
			return '';
		if (is_readable('/dev/urandom') && ($fh = @fopen('/dev/urandom', 'rb')) !== FALSE) {
			$data .= fread($fh, $count);
			fclose($fh);
			return $data;
		}
		return '';
	}
	/**
	 * Generates random bytes through the Mersenne Twister
	 * @param $count int byte count required
	 * @return string Actually all 8 bits are used. But sshhhh
	 */
	protected function _generate_mt($count)
	{
		$data = '';
		while (strlen($data) < $count)
			$data .= decbin((int)mt_rand(0,255));
		return $data;
	}
}
