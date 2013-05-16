<?php 
namespace Mouf\Utils\Value;

/**
 * This interface is implemented by any object that can represent values.
 * An object implementing this interface will return a single value when the "val()" method is called.
 * The value can be anything (if you want the value to be a string, a bool, an array or something else,
 * use one of the subinterfaces provided, like StringValueInterface for instance).
 * This is a very simple and very broad system.
 * 
 * @author David Négrier
 */
interface ValueInterface {
	
	/**
	 * Returns the value represented by this object.
	 * 
	 * @return mixed
	 */
	public function val();
}