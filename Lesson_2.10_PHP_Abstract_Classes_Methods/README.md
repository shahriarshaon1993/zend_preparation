## Lesson 2.10 - PHP Abstract Classes & Methods

> The Abstract Classes cannot instantiate for example you can only extend. Which means you
> cannot create object directly from the abstract classes.

### Rules in an Abstract Class:

> - You cannot create an object from an abstract class directly. Abstract classes are meant to be extended.
> - Any class inheriting an abstract class must implement all its abstract methods.
> - Abstract classes can include methods with full implementations that can be used or overridden by subclasses.
> - Abstract methods cannot have a method body (implementation) in the abstract class itself. They must be defined only with their signature.
> - Abstract methods can have any visibility (public, protected, or private), but the visibility must be followed when implemented in the subclass.
> - Abstract classes can declare properties, which can be accessed and used by subclasses.
> - An abstract class can define a constructor that subclasses can call using parent::__construct().
> - Subclasses can override methods defined in the abstract class if needed.
> - A subclass of an abstract class can also be abstract. This allows you to postpone the implementation of some methods to further subclasses.