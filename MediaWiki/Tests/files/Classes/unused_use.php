<?php
namespace FooBar;

use FooBar\Baz;
use Wikimedia\Database;
use Something\That\Is\Unused;
use Something\That\Is\Used;
use Something\Something;
use Something\OneTwo as ThreeFour;
use Something\InAVar;
use Something\InAVar2;
use Something\InAVar3;
use Something\InAVar4;
use Something\InAVar5;
use Something\InAVar6;
use Something\InAVar7;
use Something\InAVar8;
use Something\InAVar9;
use Something\InAThrows;
use Something\InAExpectedException;
use Something\InAParam;
use Something\Partial;

$a = new Baz();
$b = new Used();
$c = new ThreeFour();

class UnusedUseTest {
	/**
	 * @expectedException InAExpectedException
	 * @coversNothing
	 * @throws InAThrows
	 * @param InAParam $a A variable
	 * @return Database
	 */
	public function testDatabase( $a ) {
		return;
	}
}

class Foo {
	use SomeThing;
	use AnotherThing;

	/**
	 * @var InAVar
	 */
	private $thing;

	/**
	 * @var InAVar2|null
	 */
	private $thing2;

	/**
	 * @var null|InAVar3
	 */
	private $thing3;

	/**
	 * @var InAVar4[]
	 */
	private $thing4;

	/**
	 * @var (InAVar5|InAVar6)[]
	 */
	private $thing5;

	/**
	 * @var InAVar7<InAVar8,InAVar9>
	 */
	private $thing6;

	/**
	 * @var Partial\InAVar10
	 */
	private $thing7;
}
