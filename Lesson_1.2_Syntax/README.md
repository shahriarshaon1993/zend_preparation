# Lesson 1.2 - Syntax

### If you don't use the semicolon at the end of the statement PHP throw  

```
Parse error: syntax error, unexpected end of file, expecting "," or ";" in D:\SHAON\tools\laragon\www\zend_preparation\Lesson_1.2_Syntax\index.php on line 3
```

## PHP echo and print Statements

>> 'echo' and 'print' are more or less the same. They are both used to output data to the screen. The differences are small: 'echo has no return value' while 'print has a return value of 1' so it can be used in expressions. echo can take multiple parameters (although such usage is rare) while print can take one argument. echo is marginally faster than print.

## The PHP echo Statement

```
<?php
    $txt1 = "Learn PHP";
    $txt2 = "W3Schools.com";
    $x = 5;
    $y = 4;

    echo "<h2>" . $txt1 . "</h2>";
    echo "Study PHP at " . $txt2 . "<br>";
    echo $x + $y;
?>
```

## The PHP print Statement

>> The following example shows how to output text with the print command (notice that the text can contain HTML markup):

```
<?php
    print "<h2>PHP is Fun!</h2>";
    print "Hello world!<br>";
    print "I'm about to learn PHP!";
?>
```

>> The following example shows how to output text and variables with the print statement:

```
<?php
    $txt1 = "Learn PHP";
    $txt2 = "W3Schools.com";
    $x = 5;
    $y = 4;

    print "<h2>" . $txt1 . "</h2>";
    print "Study PHP at " . $txt2 . "<br>";
    print $x + $y;
?>
```