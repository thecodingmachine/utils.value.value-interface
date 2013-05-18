<?php 
namespace Mouf\Utils\Value;

/**
 * This is a utility class containing useful static functions to use with ValueInterface
 * 
 * @author David Négrier
 */
class ValueUtils {
	
	/**
	 * Takes the value in parameter.
	 * If this is a ValueInterface object, returns the val().
	 * Otherwise, returns the value passed in parameter.
	 * 
	 * @param mixed $value
	 */
	public static function val($value) {
		if ($value instanceof ValueInterface) {
			return $value->val();
		} else {
			return $value;
		}
	}
}