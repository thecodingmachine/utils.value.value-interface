<?php 
namespace Mouf\Utils\Value;

/**
 * This interface is implemented by any object that can represent an array as a value.
 * An object implementing this interface will return an array when the "val()" method is called.
 * 
 * @author David Négrier
 */
interface ArrayValueInterface extends ValueInterface {
	
	/**
	 * Returns the value represented by this object.
	 * 
	 * @return array
	 */
	public function val();
}