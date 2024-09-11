## Lesson 2.9 - PHP - Inheritance Explained - Is Inheritance Good?

### Inheritance

> Inheritance allows you to have a class that is derived from another class which
> also is referred to as parent child classes where the parent is the base class
> that you derive from the child class will inherit the public and protected methods
> constants and properties which then can be overridden in addition to inheriting these
> in the child class you could of course also have additional properties constants and
> methods.

> If we set the `private $size = 2` property to private, and we run the code we see that now it's
> toasting only two slices even though child class specified `public $size = 4` here.

> That because you can not overwrite private properties because private properties belong and
> exist only parent class. you can only access and overwrite public and protected properties,
> methods, and constants.

> Another role is that you cannot decrease the visibility of properties. so you set parent class
> `$size` to public you can not set child class property `$size` to private or protected.

> On the other hand if parent class `$size` set to protected you could overwrite it either
> with protected or public the same exact rules apply to methods and static properties and 
> methods and constants as well

### Final Class

> You can not extend from this class also final methods cannot be overwritten.

> Note: PHP does not support multiple inheritance.

### Composition

```php
// This is called Composition.

class FancyOven
{
    public function __construct(private ToasterPro $toaster)
    {
    }

    public function fry()
    {
        // code here...
    }

    public function toast(): void
    {
        $this->toaster->toast();
    }

    public function toastBagel(): void
    {
        $this->toaster->toastBagel();
    }
}
```