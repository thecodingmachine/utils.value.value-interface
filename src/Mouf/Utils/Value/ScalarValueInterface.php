<?php 
namespace Mouf\Utils\Value;

/**
 * This interface is implemented by any object that can represent scalar values.
 * An object implementing this interface will return a single scalar value when the "getValue" method is called.
 * The value is scalar (i.e. a string, a bool or a number).
 * You can use a subclass like StringValueInterface if you require a string.
 * 
 * @author David Négrier
 */
interface ScalarValueInterface extends ValueInterface {
	
	/**
	 * Returns the value represented by this object.
	 * 
	 * @return mixed
	 */
	public function getValue();
}