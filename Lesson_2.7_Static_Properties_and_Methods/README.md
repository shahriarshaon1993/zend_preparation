## Lesson 2.7 - Static Properties & Methods In Object-Oriented PHP

### Static Properties

> You can access static properties and methods the same way you could access
> constants using the scope regulation operator.

### Use cases

> The use of static methods and properties is generally considered a bad practice
> but there are some use cases where the use of static can come in handy one use
> case for static properties is to have some sort of counter as I did in this example.
> or to cache values, so it can often be used to implement a technique called memoization
> which can speed up expensive operations by caching the results for access. you might also
> come across a code that makes a use of static properties to implement a singleton pattern.

> The main reason why the use of static properties and methods is discouraged is that
> they represent what's called a global state which means that can modify the data or call
> the static function from anywhere in the code which can make things harder to maintain
> and harder to test. they are some very small niche use cases where the use of status
> could make sense but a lot of times statics are misuse and dependency injection should
> be use instead also some might argue that the use of statics is faster than creating
> instances of objects which can be true, but it's a micro-optimization that in most cases
> would not matter.