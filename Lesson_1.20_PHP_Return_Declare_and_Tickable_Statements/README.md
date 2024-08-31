## Lesson 1.20 - How To Include Files In PHP - Include and Require

```php
include 'file.php';
require 'file.php';
```

> The differance between include and require is that include will result in a
> warning while require will result in a error stop the script execution

> include_once & require_once these two are the same as the include and require
> the differance between being that these two will only include the file if it hasn't
> been included already. That file is being only include one time this can be useful.