<?php

/**
 * Generated by PHPUnit_SkeletonGenerator on 2015-02-16 at 20:05:00.
 */
class SyllableTest extends PHPUnit_Framework_TestCase {

	/**
	 * @var Syllable
	 */
	protected $object;

	/**
	 * Sets up the fixture, for example, opens a network connection.
	 * This method is called before a test is executed.
	 */
	protected function setUp() {
		$this->object = new Syllable;
		$this->object->setCacheDir(realpath('../cache'));
		$this->object->setLanguageDir(realpath('../languages'));
	}

	/**
	 * Tears down the fixture, for example, closes a network connection.
	 * This method is called after a test is executed.
	 */
	protected function tearDown() {
		
	}

	/**
	 * @covers Syllable::setLanguage
	 * @todo   Implement testSetLanguage().
	 */
	public function testSetLanguage() {
		$this->object->setHyphen('-');
		
		$this->object->setLanguage('en-us');
		$this->assertEquals('Su-per-cal-ifrag-ilis-tic-ex-pi-ali-do-cious', $this->object->hyphenateText('Supercalifragilisticexpialidocious'));
				
		$this->object->setLanguage('nl');
		$this->assertEquals('Su-per-ca-lifra-gi-lis-ti-c-ex-pi-a-li-do-cious', $this->object->hyphenateText('Supercalifragilisticexpialidocious'));
		
		$this->object->setLanguage('fr');
		$this->assertEquals('Super-califragilis-ticex-pialidocious', $this->object->hyphenateText('Supercalifragilisticexpialidocious'));
	}

	/**
	 * @covers Syllable::setHyphen
	 * @todo   Implement testSetHyphen().
	 */
	public function testSetHyphen() {
		$this->object->setLanguage('en-us');
		
		$this->object->setHyphen('-');
		$this->assertEquals('Su-per-cal-ifrag-ilis-tic-ex-pi-ali-do-cious', $this->object->hyphenateText('Supercalifragilisticexpialidocious'));
		
		$this->object->setHyphen('/');
		$this->assertEquals('Su/per/cal/ifrag/ilis/tic/ex/pi/ali/do/cious', $this->object->hyphenateText('Supercalifragilisticexpialidocious'));
	}

	/**
	 * @covers Syllable::getHyphen
	 * @todo   Implement testGetHyphen().
	 */
	public function testGetHyphen() {		
		$this->object->setHyphen('-');		
		$this->assertEquals(new Syllable_Hyphen_Text('-'), $this->object->getHyphen());
		$this->assertNotEquals(new Syllable_Hyphen_Text('+'), $this->object->getHyphen());
		
		$this->object->setHyphen('/');		
		$this->assertEquals(new Syllable_Hyphen_Text('/'), $this->object->getHyphen());
		$this->assertNotEquals(new Syllable_Hyphen_Text('-'), $this->object->getHyphen());
	}

	/**
	 * @covers Syllable::setCache
	 * @todo   Implement testSetCache().
	 */
	public function testSetCache() {
		// Remove the following lines when you implement this test.
		$this->markTestIncomplete(
				'This test has not been implemented yet.'
		);
	}

	/**
	 * @covers Syllable::getCache
	 * @todo   Implement testGetCache().
	 */
	public function testGetCache() {
		// Remove the following lines when you implement this test.
		$this->markTestIncomplete(
				'This test has not been implemented yet.'
		);
	}

	/**
	 * @covers Syllable::setSource
	 * @todo   Implement testSetSource().
	 */
	public function testSetSource() {
		// Remove the following lines when you implement this test.
		$this->markTestIncomplete(
				'This test has not been implemented yet.'
		);
	}

	/**
	 * @covers Syllable::getSource
	 * @todo   Implement testGetSource().
	 */
	public function testGetSource() {
		// Remove the following lines when you implement this test.
		$this->markTestIncomplete(
				'This test has not been implemented yet.'
		);
	}

	/**
	 * @covers Syllable::splitWord
	 * @todo   Implement testSplitWord().
	 */
	public function testSplitWord() {
		$this->object->setHyphen('-');
		$this->object->setLanguage('en-us');
		
		$this->assertEquals(array(';Re', 'dun', 'dan', 't, punc', 'tu', 'a', 'tion...'), $this->object->splitWord(';Redundant, punctuation...'));
		$this->assertEquals(array('In', 'ex', 'plic', 'a', 'ble'), $this->object->splitWord('Inexplicable'));
	}

	/**
	 * @covers Syllable::splitText
	 * @todo   Implement testSplitText().
	 */
	public function testSplitText() {
		$this->object->setHyphen('-');
		$this->object->setLanguage('en-us');
		
		$this->assertEquals(array(';Re', 'dun', 'dant, punc', 'tu', 'a', 'tion...'), $this->object->splitText(';Redundant, punctuation...'));
		$this->assertEquals(array('In', 'ex', 'plic', 'a', 'ble'), $this->object->splitText('Inexplicable'));
	}

	/**
	 * @covers Syllable::hyphenateWord
	 * @todo   Implement testHyphenateWord().
	 */
	public function testHyphenateWord() {
		$this->object->setHyphen('-');
		$this->object->setLanguage('en-us');
		
		$this->assertEquals(';Re-dun-dan-t, punc-tu-a-tion...', $this->object->hyphenateWord(';Redundant, punctuation...'));
		$this->assertEquals('In-ex-plic-a-ble', $this->object->hyphenateWord('Inexplicable'));
	}

	/**
	 * @covers Syllable::hyphenateText
	 * @todo   Implement testHyphenateText().
	 */
	public function testHyphenateText() {
		$this->object->setHyphen('-');
		$this->object->setLanguage('en-us');
		
		$this->assertEquals(';Re-dun-dant, punc-tu-a-tion...', $this->object->hyphenateText(';Redundant, punctuation...'));
		$this->assertEquals('In-ex-plic-a-ble', $this->object->hyphenateText('Inexplicable'));
		
		// note that HTML attributes are hyphenated too!
		$this->assertEquals('Ridicu-lously <b attr="un-split-table">com-pli-cated</b> meta-text', $this->object->hyphenateText('Ridiculously <b attr="unsplittable">complicated</b> metatext'));
	}

	/**
	 * @covers Syllable::hyphenateHtml
	 */
	public function testHyphenateHtml() {
		$this->object->setHyphen('-');
		$this->object->setLanguage('en-us');
		
		$this->assertEquals('<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN" "http://www.w3.org/TR/REC-html40/loose.dtd">'
						."\n".'<html><body><p>Ridicu-lously <b attr="unsplittable">com-pli-cated</b> meta-text</p></body></html>'
						."\n", $this->object->hyphenateHtml('Ridiculously <b attr="unsplittable">complicated</b> metatext'));
	}
	
	/**
	 * @covers Syllable::splitText
	 */
	public function testCaseInsensitivity() {
		$this->object->setHyphen('-');
		$this->object->setLanguage('en-us');
		
		$this->assertEquals(array('IN', 'EX', 'PLIC', 'A', 'BLE'), $this->object->splitText('INEXPLICABLE'));
		$this->assertEquals(array('in', 'ex', 'plic', 'a', 'ble'), $this->object->splitText('inexplicable'));
	}

}
