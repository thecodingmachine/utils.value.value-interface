<?php 
namespace Mouf\Utils\Value;

/**
 * This interface is implemented by any object that can represent an map (an associative array) as a value.
 * An object implementing this interface will return a map when the "getValue" method is called.
 * 
 * @author David Négrier
 */
interface MapValueInterface extends ArrayValueInterface {
	
	/**
	 * Returns the value represented by this object.
	 * 
	 * @return array
	 */
	public function getValue();
}