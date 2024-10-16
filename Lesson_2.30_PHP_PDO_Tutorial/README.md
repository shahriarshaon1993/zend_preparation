## Lesson 2.30 → PHP PDO Tutorial Part 1 - Prepared Statements → SQL Injection

```text
PDO::FETCH_OBJ:
    In PHP, PDO::FETCH_OBJ is a fetch style constant used with the PDO extension to 
    specify how result sets from database queries should be fetched. Here’s an 
    explanation of PDO::FETCH_OBJ:
    
    1. Instead of returning an associative array (PDO::FETCH_ASSOC) or a numerically indexed
       array (PDO::FETCH_NUM), PDO::FETCH_OBJ returns an object instance for each fetched row.
       
    2. Each property of the object corresponds to a column in the result set.
```

```php
$pdo = new PDO("mysql:host=db;dbname=my_db", "root", "root");
$stmt = $pdo->query("SELECT id, name FROM users");
$users = $stmt->fetchAll(PDO::FETCH_OBJ);

foreach ($users as $user) {
    echo $user->id . ": " . $user->name . "<br>";
}
```

```text
PDO::FETCH_ASSOC:
    PDO::FETCH_ASSOC is another fetch style constant used with PHP's PDO extension for fetching
     data from a database. Here’s a detailed explanation of PDO::FETCH_ASSOC:
     
     1. The result is an associative array where each key represents a column name and its value 
        is the corresponding column value from the query result.
        
     2. This is often used when you want to access column values directly by their names without 
        having to remember the column's index.
```

```php
$pdo = new PDO("mysql:host=db;dbname=my_db", "root", "root");
$stmt = $pdo->query("SELECT id, name FROM users");
$users = $stmt->fetchAll(PDO::FETCH_ASSOC);

foreach ($users as $user) {
    echo $user['id'] . ": " . $user['name'] . "<br>";
}
```

### Prepared Statement:

```text
    If you wanted to run the same query within a loop you would note be very efficient
that's where the 'prepared statements' can help. prepared statements is not a PDO or php
thing it's a feature that comes with database management system.

It has the following two major advantages:
 
    One is that you prepare query once and then
executed multiple times with either the same or different parameters this solve the problem
of running the query method within the loop for example.

    Second advantage is that it can help protect against sql injections. sql injection simply
put is when a malicious sql statements are injected into the query that can happen through user
input like query string or post date for example and so on. 
```

### SQL Injection:

```text
NOTE: It is very important to not inject the user provided input directly into the queries.
```

```php
// Wrong
$query = 'SELECT * FROM users WHERE email = "'. $email .'"';

// Right way
$query = 'INSERT INTO users (name, email, password, active, created_at, updated_at)
             VALUES (:name, :email, :password, :active, :created_at, :updated_at)';

$stmt = $db->prepare($query);

$stmt->bindValue(':name', $name);
$stmt->bindValue(':email', $email);
$stmt->bindValue(':password', $password);
$stmt->bindParam(':active', $active, PDO::PARAM_BOOL);
$stmt->bindValue(':created_at', $createdAt);
$stmt->bindValue(':updated_at', $updatedAt);

$stmt->execute();
```

> bindValue() and bindParam()

### Emulated Preparer:

> PDO MySql driver uses Emulated Preparer by default, but it can be disabled by using
> attribute emulated preparer options.

```php
 $db = new PDO('mysql:host=db;dbname=my_db;', 'root', 'root', [
        PDO::ATTR_EMULATE_PREPARES => false
    ]);
```