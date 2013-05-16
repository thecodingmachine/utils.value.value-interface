<?php 
namespace Mouf\Utils\Value;

/**
 * This interface is implemented by any object that can represent boolean values.
 * An object implementing this interface will return a single bool value when the "getValue" method is called.
 * 
 * @author David Négrier
 */
interface BoolValueInterface extends ScalarValueInterface {
	
	/**
	 * Returns the value represented by this object.
	 * 
	 * @return boolean
	 */
	public function getValue();
}