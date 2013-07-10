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
	 * If this an array (or recursive array) containing ValueInterface objects, apply to the objects the val() method.
	 * Otherwise, returns the value passed in parameter.
	 * 
	 * @param mixed $value
	 * @return mixed
	 */
	public static function val($value) {
		if ($value instanceof ValueInterface) {
			return $value->val();
		} elseif (is_array($value)) {
			return array_map(function($item) { return ValueUtils::val($item); }, $value);
		} else {
			return $value;
		}
	}
}