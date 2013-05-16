<?php 
namespace Mouf\Utils\Value;

/**
 * This interface is implemented by any object that can represent string values.
 * An object implementing this interface will return a single string value when the "val()" method is called.
 * 
 * @author David Négrier
 */
interface StringValueInterface extends ScalarValueInterface {
	
	/**
	 * Returns the value represented by this object.
	 * 
	 * @return string
	 */
	public function val();
}