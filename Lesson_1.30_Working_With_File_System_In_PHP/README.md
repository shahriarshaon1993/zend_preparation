## Lesson 1.30 - Working With File System In PHP

```php
mkdir('foo') // make a directory
rmdir('foo') // remove a directory

mkdir('foo/bar', recursive: true);
rmdir('foo/bar');
rmdir('foo');

// File | Directory Check
if (file_exists('foo.txt')) {
    echo filesize('foo.txt');
    
    file_put_contents('foo.txt', 'Hello World!');
    
    clearstatcache();
    echo filesize('foo.txt');
} else {
    echo 'File not found';
}
```

```php
// Opening the file
if (! file_exists('foo.txt')) {
    echo 'File not found';
    
    return;
}

$file = fopen('foo.txt', 'r');

while (($line = fgets($file)) !== false) {
    echo $line . '</br>'
}

fclose($file);
```

```php
//$content = file_get_contents('foo.txt', offset: 3, length: 2);
$content = file_get_contents('foo.txt');

echo $content;
```

```php
file_put_contents('bar.txt', 'hello');
file_put_contents('bar.txt', 'hello world', FILE_APPEND);

unlink('bar.txt'); // delete file

copy('foo.txt', 'bar.txt'); // copy file
rename('foo.txt', 'bar.txt'); // rename file
```