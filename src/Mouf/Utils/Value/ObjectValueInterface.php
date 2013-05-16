<?php 
namespace Mouf\Utils\Value;

/**
 * This interface is implemented by any object that can represent another object as a value.
 * An object implementing this interface will return a single object when the "val()" method is called.
 * 
 * @author David Négrier
 */
interface ObjectValueInterface extends ValueInterface {
	
	/**
	 * Returns the value represented by this object.
	 * 
	 * @return object
	 */
	public function val();
}