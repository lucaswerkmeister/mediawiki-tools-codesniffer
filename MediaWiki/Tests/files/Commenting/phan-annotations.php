<?php

class PhanTests {
	/**
	 * @var MyClass
	 * @phan-var MySpecificClass
	 */
	private $foo;

	/**
	 * @template T
	 * @phan-template T
	 * @param AuthenticationRequest[] $reqs
	 * @phan-param T[] $reqs
	 * @param string $class Class name
	 * @phan-param class-string<T> $class
	 * @param bool $allowSubclasses
	 * @return AuthenticationRequest|null
	 * @phan-return T|null
	 */
	public static function getSomething( array $reqs, $class, $allowSubclasses = false ) {
	}
}
