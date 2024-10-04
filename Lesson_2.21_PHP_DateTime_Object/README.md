## Lesson 2.21 - PHP - DateTime Object

```php
$dateTime = new DateTime('tomorrow');
$dateTime = new DateTime('next friday');
$dateTime = new DateTime('tomorrow noon');
$dateTime = new DateTime('10/10/2024 7:00');
```

```php
$dateTime = new DateTime('04/10/2024 3:30PM');

echo $dateTime->format('m/d/y g:i A') . PHP_EOL;

$dateTime->setTimezone(new DateTimeZone('Asia/Dhaka'));

echo $dateTime->format('m/d/y g:i A') . PHP_EOL;
```

```php
$dateTime = new DateTime('04/10/2024 3:30PM');

echo $dateTime->getTimezone()->getName() . PHP_EOL;
echo $dateTime->format('m/d/y g:i A') . PHP_EOL;

$dateTime->setTimezone(new DateTimeZone('Asia/Dhaka'));
$dateTime->setDate(2024, 10, 04)->setTime(2, 15);

echo $dateTime->getTimezone()->getName() . PHP_EOL;
echo $dateTime->format('m/d/y g:i A') . PHP_EOL;
```

```php
$date = '15/05/2024 3:30PM';

$dateTime = \DateTime::createFromFormat('d/m/Y g:iA', $date);

var_dump($dateTime);
```

```php
$date = '15/05/2024';

$dateTime = \DateTime::createFromFormat('d/m/Y', $date)->setTime(0, 0);
```

```php
$dateTime1 = new DateTime('10/4/2024 9:15 AM');
$dateTime2 = new DateTime('10/4/2024 9:14 AM');

var_dump($dateTime1 < $dateTime2);
var_dump($dateTime1 > $dateTime2);
var_dump($dateTime1 == $dateTime2);
var_dump($dateTime1 <=> $dateTime2);
```

```php
$dateTime1 = new DateTime('10/4/2024 9:15 AM');
$dateTime2 = new DateTime('09/15/2023 3:15 AM');

var_dump($dateTime1->diff($dateTime2));
```

```php
$dateTime1 = new DateTime('05/25/2024 9:15 AM');
$dateTime2 = new DateTime('03/15/2023 3:25 AM');

echo $dateTime2->diff($dateTime1)->format('%Y Years, %m months, %d days, %H, %i, %s') . PHP_EOL;
```

```php
$dateTime = new DateTime('05/25/2024 9:15 AM');
$interval = new DateInterval('P3MP2D');

$dateTime->add($interval);

echo $dateTime->format('m/d/Y g:iA') . PHP_EOL;

$dateTime->sub($interval);

echo $dateTime->format('m/d/Y g:iA') . PHP_EOL;
```

```php
$form = new DateTime();
//$to = (new DateTime())->add(new DateInterval('P1M'));
$to = (clone $form)->add(new DateInterval('P1M'));

echo $form->format('m/d/Y') . ' - ' . $to->format('m/d/Y') . PHP_EOL;
```

```php
$form = new DateTimeImmutable();
$to = $form->add(new DateInterval('P1M'));

var_dump($form === $to);

echo $form->format('m/d/Y') . ' - ' . $to->format('m/d/Y') . PHP_EOL;
```

```php
$period = new DatePeriod(
    new DateTime('10/04/2024'),
    new DateInterval('P3D'),
    (new DateTime('10/31/2024'))->modify('+1 day')
);

foreach ($period as $date) {
    echo $date->format('m/d/Y') . PHP_EOL;
}
```