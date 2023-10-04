# Lesson 1.8 - String Data Type - Heredoc & Nowdoc Syntax

## <a href="https://www.php.net/manual/en/language.types.string.php" target="_blank">Strings</a>

> > A string is a series of characters, where a character is the same as a byte. This means that PHP only supports a 256-character set, and hence does not offer native Unicode support

## Single quoted

> > The simplest way to specify a string is to enclose it in single quotes (the character ').

```
<?php
echo 'this is a simple string';

echo 'You can also have embedded newlines in
strings this way as it is
okay to do';

// Outputs: Arnold once said: "I'll be back"
echo 'Arnold once said: "I\'ll be back"';

// Outputs: You deleted C:\*.*?
echo 'You deleted C:\\*.*?';

// Outputs: You deleted C:\*.*?
echo 'You deleted C:\*.*?';

// Outputs: This will not expand: \n a newline
echo 'This will not expand: \n a newline';

// Outputs: Variables do not $expand $either
echo 'Variables do not $expand $either';
?>
```

## Double quoted

```
\n	linefeed (LF or 0x0A (10) in ASCII)
\r	carriage return (CR or 0x0D (13) in ASCII)
\t	horizontal tab (HT or 0x09 (9) in ASCII)
\v	vertical tab (VT or 0x0B (11) in ASCII)
\e	escape (ESC or 0x1B (27) in ASCII)
\f	form feed (FF or 0x0C (12) in ASCII)
\\	backslash
\$	dollar sign
\"	double-quote
```

## Heredoc

> > A third way to delimit strings is the heredoc syntax: <<<. After this operator, an identifier is provided, then a newline. The string itself follows, and then the same identifier again to close the quotation.

> > Strings may be concatenated using the '.' (dot) operator. Note that the '+' (addition) operator will not work for this. See String operators for more information.

## <a href="https://www.php.net/manual/en/language.operators.string.php" target="_blank">String Operators</a>

> > There are two string operators. The first is the concatenation operator ('.'), which returns the concatenation of its right and left arguments. The second is the concatenating assignment operator ('.='), which appends the argument on the right side to the argument on the left side.

```
$a = "Hello ";
$b = $a . "World!"; // now $b contains "Hello World!"

$a = "Hello ";
$a .= "World!";     // now $a contains "Hello World!"
```

```
"{$str1}{$str2}{$str3}"; // one concat = fast
 $str1. $str2. $str3;   // two concats = slow
```

> > null is always converted to an empty string.

### So the "highest code performance" style rules are:

```
1. Always use double-quoted strings for concatenation.
2. Put your variables in "This is a {$variable} notation", because it's the fastest method which still allows complex expansions like "This {$var['foo']} is {$obj->awesome()}!". You cannot do that with the "${var}" style.
3. Feel free to use single-quoted strings for TOTALLY literal strings such as array keys/values, variable values, etc, since they are a TINY bit faster when you want literal non-parsed strings. But I had to do 1 billion iterations to find a 1.55% measurable difference. So the only real reason I'd consider using single-quoted strings for my literals is for code cleanliness, to make it super clear that the string is literal.
4. If you think another method such as sprintf() or 'this'.$var.'style' is more readable, and you don't care about maximizing performance, then feel free to use whatever concatenation method you prefer!
```

## <a href="https://www.php.net/manual/en/ref.strings.php" target="_blank">Useful functions</a>

### <a href="https://www.php.net/manual/en/function.substr.php" target="_blank">1. substr()</a>

```
substr(string $string, int $offset, ?int $length = null): string
```

### <a href="https://www.php.net/manual/en/function.strstr.php" target="_blank">2. str_replace()</a>

```
str_replace(
    array|string $search,
    array|string $replace,
    string|array $subject,
    string|array $subject,
    int &$count = null
): string|array
```

### <a href="https://www.php.net/manual/en/function.str-replace.php" target="_blank">3. strstr()</a>

```
strstr(string $haystack, string $needle, bool $before_needle = false): string|false
```

### <a href="https://www.php.net/manual/en/function.strlen.php" target="_blank">4. strlen()</a>

```
strlen(string $string): int
```

### <a href="https://www.php.net/manual/en/function.strtolower.php" target="_blank">5. strtolower()</a>

```
strtolower(string $string): string

Returns string with all ASCII alphabetic characters converted to lowercase.
```

### <a href="https://www.php.net/manual/en/function.strtoupper.php" target="_blank">6. strtoupper()</a>

```
strtoupper(string $string): string

Returns string with all ASCII alphabetic characters converted to uppercase.
```

### <a href="https://www.php.net/manual/en/function.str-word-count.php" target="_blank">7. str_word_count()</a>

```
str_word_count(string $string, int $format = 0, ?string $characters = null): array|int
```

### <a href="https://www.php.net/manual/en/function.strrev.php" target="_blank">8. strrev()</a>

```
strrev(string $string): string

Returns string, reversed.
```

### <a href="https://www.php.net/manual/en/function.strpos.php" target="_blank">9. strpos()</a>

```
strpos(string $haystack, string $needle, int $offset = 0): int|false

strpos — Find the position of the first occurrence of a substring in a string
```

### <a href="https://www.php.net/manual/en/function.ucwords.php" target="_blank">9. ucwords()</a>

```
ucwords(string $string, string $separators = " \t\r\n\f\v"): string

ucwords — Uppercase the first character of each word in a string
```

### <a href="https://www.php.net/manual/en/function.ucfirst.php" target="_blank">9. ucfirst()</a>

```
ucfirst(string $string): string

ucfirst — Make a string's first character uppercase
```

### <a href="https://www.php.net/manual/en/function.lcfirst.php" target="_blank">9. lcfirst()</a>

```
lcfirst(string $string): string

lcfirst — Make a string's first character lowercase
```

### <a href="https://www.php.net/manual/en/function.wordwrap.php" target="_blank">9. wordwrap()</a>

```
wordwrap( string $string, int $width = 75, string $break = "\n", bool  $cut_long_words = false ): string

wordwrap — Wraps a string to a given number of characters
```
