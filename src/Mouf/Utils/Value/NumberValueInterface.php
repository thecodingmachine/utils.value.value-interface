<?php 
namespace Mouf\Utils\Value;

/**
 * This interface is implemented by any object that can represent numeric values.
 * An object implementing this interface will return a single numeric value when the "val()" method is called.
 * 
 * @author David Négrier
 */
interface NumberValueInterface extends ScalarValueInterface {
	
	/**
	 * Returns the value represented by this object.
	 * 
	 * @return number
	 */
	public function val();
}