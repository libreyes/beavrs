<?php

/**
 * The test class for PasswordCrypto
 */
class PasswordCryptoTest extends CTestCase
{
	protected function setUp()
	{
		$this->tpc = new TestablePasswordCrypto();
	}

	/**
	 * @dataProvider matchesProvider
	 */
	public function testMatches($v)
	{
		# Plain md5
		$ret = $this->tpc->matches($v,md5($v));
		$this->assertFalse($this->tpc->matches($v,md5((string)mt_rand())));
		$this->assertTrue($this->tpc->tIsCrypt($ret));

		# Salty md5
		$salt = $this->tpc->tGenerateBase64Salt(12);
		$ret = $this->tpc->matches($v,md5($salt . $v), $salt);
		$this->assertFalse($this->tpc->matches($v,md5($salt . (string)mt_rand()),$salt));
		$this->assertTrue($this->tpc->tIsCrypt($ret));

		# Crypt()y
		$t1 = $this->tpc->tHashCrypt($v);
		$t2 = $this->tpc->tHashCrypt($v,"AABBCCDDEEFFGGHH");
		foreach (array($t1,$t2) as $t) {
			$this->assertTrue($this->tpc->matches($v, $t));
			$this->assertFalse($this->tpc->matches("foo", $t));
		}
	}
	public function matchesProvider()
	{
		return array(
			array("abc"),
			array("def"),
			array("ghi"),
			array("jkl"),
		);
	}	

	public function testHashCrypt()
	{
		$t1 = $this->tpc->tHashCrypt("ABCDEFGH");
		$this->assertStringStartsWith('$5$rounds=10000$', $t1);
		$t2 = $this->tpc->tHashCrypt("ABCDEFGH","AABBCCDDEEFFGGHH");
		$this->assertNotEquals($t1, $t2);
		$t3 = $this->tpc->tHashCrypt("ABCDEFGH","AABBCCDDEEFFGGHH");
		$this->assertEquals($t2, $t3);
	}
	/**
	 * @dataProvider isCryptProvider
	 */
	public function testIsCrypt($hash,$expected)
	{
		$this->assertEquals($this->tpc->tIsCrypt($hash),$expected);
	}
	public function isCryptProvider()
	{
		return array(
			array('$5$...',true),
			array('$5$abd', true),
			array('$', false),
			array('$6$', false),
			array('$2y$', false),
		);
	}
	public function testGenerateBase64Salt()
	{
		$t1 = $this->tpc->tGenerateBase64Salt(16);
		$t2 = $this->tpc->tGenerateBase64Salt(33);
		$t3 = $this->tpc->tGenerateBase64Salt(257);
		$this->assertRegexp('/^[a-zA-Z0-9+\/=]+$/', $t1);
		$this->assertRegexp('/^[a-zA-Z0-9+\/=]+$/', $t2);
		$this->assertRegexp('/^[a-zA-Z0-9+\/=]+$/', $t3);
		$this->assertEquals(16,  strlen($t1));
		$this->assertEquals(33,  strlen($t2));
		$this->assertEquals(257, strlen($t3));
	}
	public function testGetRandomData()
	{
		$this->assertEquals(strlen($this->tpc->tGetRandomData(33)),33);
		$this->assertEquals(strlen($this->tpc->tGetRandomData(257)),257);
	}
}
/**
 * A subclass of PasswordCrypto that unprivatises some methods
 */
class TestablePasswordCrypto extends PasswordCrypto
{
	/**
	 * Proxy method for hashCrypt()
	 * @param $value string plaintext to encrypt
	 * @param $salt string salt value. Generated if absent
	 * @return string
	 */
	public function tHashCrypt($value,$salt=null)
	{
		return $this->hashCrypt($value,$salt);
	}

	/**
	 * Proxy method for isCrypt()
	 * @param $value string hash to be checked for production by PasswordCrypto
	 * @return bool
	 */
	public function tIsCrypt($value)
	{
		return $this->isCrypt($value);
	}

	/**
	 * Proxy method for generateBase64Salt()
	 * @param $count int base64 character count required
	 * @return string
	 */
	public function tGenerateBase64Salt($count)
	{
		return $this->generateBase64Salt($count);
	}

	/**
	 * Proxy method for getRandomData
	 * @param $count int byte count required
	 * @return string
	 */
	public function tGetRandomData($count)
	{
		return $this->getRandomData($count);
	}
}