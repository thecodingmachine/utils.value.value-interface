<?php 
namespace Mouf\Utils\Value;

/**
 * This interface is implemented by any object that can represent integer values.
 * An object implementing this interface will return a single integer value when the "getValue" method is called.
 * 
 * @author David Négrier
 */
interface IntValueInterface extends NumberValueInterface {
	
	/**
	 * Returns the value represented by this object.
	 * 
	 * @return int
	 */
	public function getValue();
}