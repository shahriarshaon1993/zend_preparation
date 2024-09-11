## Lesson 2.8 - PHP - Encapsulation & Abstraction

### What is Encapsulation?

> Encapsulation simply bundle the data and methods that operate on that data within
> one unit like a class for example. It hides the internal representation or the state
> of the object which protects the integrity of that object encapsulation ensures that
> your object manages it own state and nothing can change that unless it's explicitly
> allowed.

> Data
> - Private / Protected Properties
> - Public Methods
> - Private / Protected Methods

> Getters and Setters might be used to introduce encapsulation to the class, but they can
> actually cause more harm than good by breaking the encapsulation principle. and because
> of this you might hear a lot about having getters and setters being the bad practice

> Getters and Setters don't always break the encapsulation.

> The Getters and Setters make sense in some cases you might have some additional logic
> that you perform before you set the property, or before you get the property like some
> validation or formatting for example and so on. also with setters you can do method chaining
> where you kind of build up your object by calling a bunch of methods which gives you this
> fluent interface, and you will see that as a common practice.

> In some cases it's also perfectly fine to have public properties, and you'll see them be used
> in popular frameworks so there are definitely some use case for them. one use case is data
> transfer object (DTOS).

### Reflection Api

> Reflection Api basically just adds the ability to introspect your classes.

```php
use App\Transaction;

$transaction = new Transaction(25);

$reflection = new ReflectionProperty(Transaction::class, 'amount');

$reflection->setAccessible(true);

$reflection->setValue($transaction, 125);
var_dump($reflection->getValue($transaction));
```

### What is Abstraction?

> There are different ways to interpret the term abstraction and some refer to abstraction
> as abstract classes and methods but the abstraction principle from the four principles
> of object-oriented programming refers to a different concept and is not the same as abstract
> classes and methods, yes you could implement abstraction using abstract classes and methods
> but it's not the same things abstraction is actually closer and goes hand in hand with
> encapsulation instead of abstract classes and methods.

> Abstraction simple means that internal implementation details of an object are hidden from 
> the user you could call a method on the object maybe provide some input and maybe get an output
> but you don't care how the method is actually implemented and how it works behind the scenes
> only you care about is that you just call it, and you expect some kind of output or some kind 
> of result.

> You are basically hiding the implementation details from the user.

> Difference between encapsulation and abstraction is that encapsulation hides the internal state
> or the information while the abstraction hides the actual implementation of it.