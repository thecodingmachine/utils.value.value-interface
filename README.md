What is this package
====================

This package contains an interface used by many objects to declare they represent a unique value.

If your objects represent a single value, they should implement *ValueInterface*.
An object implementing this interface will return a single value when the "val()" method is called.
The value can be anything (if you want the value to be a string, a bool, an array or something else,
use one of the subinterfaces provided, like StringValueInterface for instance).

This is a very simple and very powerful system.

```php
namespace Mouf\Utils\Value;

interface ValueInterface {
	/**
	 * Returns the value represented by this object.
	 * 
	 * @return mixed
	 */
	public function val();
}
```

Here are a few samples:

- a class that represents one GET or POST parameter
- a class that represents the result of a complex operation
- a class that represents a user bean
- a class that represents whether the current user has some right
- ...

This package does not only contains the *ValueInterface* interface. It also contains a number of more specialized 
interfaces that extend *ValueInterface* and that represent specific values (like a string or a bool).

Here is a list of all interfaces available in this package:

- ValueInterface
	- ScalarValueInterface
		- StringValueInterface
		- BoolValueInterface
		- NumberValueInterface
			- IntValueInterface
	- ObjectValueInterface
	- ArrayValueInterface
		- MapValueInterface

Mouf package
------------

This package is part of Mouf (http://mouf-php.com), an effort to ensure good developing practices by providing a graphical dependency injection framework.
