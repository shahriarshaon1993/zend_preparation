## Lesson 2.14 - PHP Traits - How They Work & Drawbacks

> PHP is a single inheritance language and does not support multiple inheritance.
> Traits are mainly used to reduce code duplication and increase code reuse.

> Think of traits as copy and past, it simply takes the code that's written in
> the traits and pasts it in the class that uses the traits at compile time.

> Precedence: the method overriding you are able to redefine the method that is
> defined in the trait if the class that uses the trait defines the same method
> then when that method is called the method defined directly in the class takes
> precedence, and it will be used instead of the method from the trait.

> Conflict Resolution: The similar problem that exist in the multiple inheritance
> exists with the traits as well and that happens when the two methods are conflicting
> because of the same name for example let's say that cappuccino trait also had a method
> to make latte.

```php
use CappuccinoTrait {
    CappuccinoTrait::makeLatte insteadof LatteTrait;
}

use LatteTrait {
    LatteTrait::makeLatte as makeOriginalLatte;
}

use CappuccinoTrait {
    CappuccinoTrait::makeCappuccino as public;
}
```

> Keep that in mind if you define properties in the traits you are not allowed
> to redefine the same property on the underline classes unless it's fully
> compatible.

### Abstract method in traits

### Static method and Static properties in traits

> Thing to note is that the magic class constant when used in a trait will resolve
> to the class value where trait is used.