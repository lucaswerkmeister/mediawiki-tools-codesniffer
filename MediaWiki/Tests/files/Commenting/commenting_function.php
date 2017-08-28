<?php

class TestFailedExamples {

	public function __construct( $a ) {
		$this->a = $a;
	}

	public function testNoDoc( $testVar ) {
		return $testVar;
	}

	/**
	 * @param int $testVar This should start uppercase and end stop.
	 *
	 */
	public function testNeedReturn( $testVar ) {
		return $testVar;
	}

	/**
	 * @param int $testVar 	This is test.
	 * @param int $_ 		For test.
	 * @return int $testVar This is test.
	 */
	public function testSingleSpaces( $testVar, $_ ) {
		return $testVar;
	}

	/**
	 * @param boolean $aBool A bool
	 *   With a long comment
	 * @param integer $anInt An int
	 * @return boolean And some text
	 */
	public function testLongTypes( $aBool, $anInt ) {
		return $aBool;
	}

	/**
	 * @return integer More text
	 */
	public function testIntReturn() {
		return 0;
	}

	/**
	 * There's a return in the body of the function,
	 * and a closure, so a return tag is needed.
	 */
	public function testComplexClosureReturn() {
		$a = function () {
			return '';
		};

		return $a();
	}

	/**
	 * @param boolean $aBool
	 * @param integer $anInt
	 * @return boolean
	 */
	public function testLongTypesNoComment( $aBool, $anInt ) {
		return $aBool;
	}

	/**
	 * @param boolean[] $bools A bool array
	 * @param integer[] $ints A int array
	 * @return boolean[] A bool array
	 */
	public function testLongArrayTypes( $bools, $ints ) {
		return $bools;
	}

	/**
	 * @param boolean $aBool A bool
	 * @param integer|string|boolean $mixed A mixed var
	 * @return boolean|integer|string A return value
	 */
	public function testLongTypesMixed( $aBool, $mixed ) {
		return $aBool ? $mixed : 1;
	}

	/**
	 * @param  bool    $aBool    A bool
	 * @param    int    $anInt    An int
	 * @return    bool    And some text
	 */
	public function testTypesSpacing( $aBool, $anInt ) {
		return $aBool;
	}

	/**
	 * @param bool $aBool: A bool
	 * @param int $anInt: An int
	 * @return bool: And some text
	 */
	public function testVariablePunctation( $aBool, $anInt ) {
		return $aBool;
	}
}

class TestPassedExamples {
	/**
	 * Without return.
	 * @param int $a for test.
	 */
	public function __construct( $a ) {
		$this->test( $a );
	}

	/**
	 * A blank return does not require a return tag
	 */
	public function emptyReturn() {
		if ( $fooBar ) {
			return;
		}

		baz();
	}

	/**
	 * Single Test function.
	 *
	 * @param int &$testVar For test.
	 * @return int $testVar For test.
	 */
	public function test( &$testVar ) {
		return $testVar;
	}

	private function noDocs( $foo, $baz ) {
		// This function has no documentation because
		// it is private
		echo $foo;
	}

	/**
	 * @inheritDoc
	 */
	public function inherit( $stuff, $more, $blah ) {
		$blah = $more . $stuff . $blah;
	}

	public function __toString() {
		return 'no documentation because obvious';
	}

	/**
	 * @param bool $aBool A bool
	 * @param int $anInt An int
	 * @return bool
	 */
	public function testShortTypes( $aBool, $anInt ) {
		return $aBool;
	}

	/**
	 * There's a return in the body of the function,
	 * but no return tag is needed.
	 */
	public function testClosureReturn() {
		$a = function () {
			return '';
		};
	}
}

class TestSimpleConstructor {
	public function __construct() {
		$this->info = 'no documentation because obvious';
	}
}
