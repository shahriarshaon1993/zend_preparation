## Lesson 1.25 - How To Work With Dates & Time Zones

#### Date & Time

```php
$currentTime = time();

echo $currentTime; // Current time
echo $currentTime + 5 * 24 * 60 * 60; // After 5 days
echo $currentTime - 60 * 60 * 24; // yesterday

// Date format

echo date('m/d/y g:ia'); // Current time
echo date('m/d/y g:ia', $currentTime + 5 * 24 * 60 * 60); // After 5 days
echo date('m/d/y g:ia', $currentTime - 60 * 60 * 24); // yesterday

// Set timezone
echo date_default_timezone_get(); // Get default timezone
date_default_timezone_set('UTC'); // Set timezone

echo date('m/d/y g:ia'); // Current time
echo date('m/d/y g:ia', $currentTime + 5 * 24 * 60 * 60); // After 5 days
echo date('m/d/y g:ia', $currentTime - 60 * 60 * 24); // yesterday

echo date_default_timezone_get(); // Get timezone
```

> Use a function called mktime() to get the unix timestamp.

```php
echo date('m/d/y g:ia', mktime(0, 0, 0, 4, 10, null));
```

```php
echo strtotime('2024-01-18 07:00:00');

echo date('m/d/y g:ia', strtotime('tomorrow'));
echo date('m/d/y g:ia', strtotime('first day of february'));
echo date('m/d/y g:ia', strtotime('last day of february'));
echo date('m/d/y g:ia', strtotime('last day of february 2020'));
echo date('m/d/y g:ia', strtotime('second friday of january'));
```

```php
$date = date('m/d/y g:ia', strtotime('tomorrow'));

date_parse($date); // this will return an array containing details about the data.
```