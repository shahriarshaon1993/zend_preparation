# What is an Algorithm?

>> In computer programming terms, an algorithm is a set of well-defined instructions to solve a particular problem. It takes a set of input(s) and produces the desired output.

>> An algorithm to add two numbers:
```
1. Take two number inputs
2. Add numbers using the + operator
3. Display the result
```

## Qualities of a Good Algorithm

```
1. Input and output should be defined precisely.
2. Each step in the algorithm should be clear and unambiguous.
3. Algorithms should be most effective among many different ways to solve a problem.
4. An algorithm shouldn't include computer code. Instead, the algorithm should be written in such a way that it can be used in different programming languages.
```

### Algorithm 1: Add two numbers entered by the user

```
Step 1: Start
Step 2: Declare variables num1, num2 and sum. 
Step 3: Read values num1 and num2. 
Step 4: Add num1 and num2 and assign the result to sum.
        sum←num1+num2 
Step 5: Display sum 
Step 6: Stop
``` 

```
function sum(int $number1, int $number2): int
{
    $sum = $number1 + $number2;

    return $sum;
}

echo sum(8, 4);
```

### Algorithm 2: Find the largest number among three numbers

```
Step 1: Start
Step 2: Declare variables a,b and c.
Step 3: Read variables a,b and c.
Step 4: If a > b
           If a > c
              Display a is the largest number.
           Else
              Display c is the largest number.
        Else
           If b > c
              Display b is the largest number.
           Else
              Display c is the greatest number.  
Step 5: Stop
```

```
function findLargestNumber(int $a, int $b, int $c): int
{
    if ($a > $b) {
        if ($a > $c) {
            return $a;
        } else {
            return $c;
        }
    } else {
        if ($b > $c) {
            return $b;
        } else {
            return $c;
        }
    }
}

echo findLargestNumber(10, 2, 30);
```

### Algorithm 4: Find the factorial of a number

```
Step 1: Start
Step 2: Declare variables n, factorial and i.
Step 3: Initialize variables
          factorial ← 1
          i ← 1
Step 4: Read value of n
Step 5: Repeat the steps until i = n
     5.1: factorial ← factorial*i
     5.2: i ← i+1
Step 6: Display factorial
Step 7: Stop


n! = n * (n - 1)
```

```
function factorial(int $number): int
{
    if ($number < 0) {
        throw new \Exception('Factorial is not defined for negative numbers');
    } elseif ($number === 0 || $number === 1) {
        return 1;
    }

    return $number * factorial($number - 1);
}

echo factorial(4);
```

### Algorithm 5: Check whether a number is prime or not

```
Step 1: Start
Step 2: Declare variables n, i, flag.
Step 3: Initialize variables
        flag ← 1
        i ← 2  
Step 4: Read n from the user.
Step 5: Repeat the steps until i=(n/2)
     5.1 If remainder of n÷i equals 0
            flag ← 0
            Go to step 6
     5.2 i ← i+1
Step 6: If flag = 0
           Display n is not prime
        else
           Display n is prime
Step 7: Stop 
```

```
function isPrime(int $number): bool
{
    if ($number <= 1) {
        return false;
    }

    $sqrt = sqrt($number);
    for ($i = 2; $i <= $sqrt; $i++) {
        if ($number % $i == 0) {
            return false;
        }
    }

    return true;
}

// Example
$number = 17;
if (isPrime($number)) {
    echo "{$number} is a prime number.";
} else {
    echo "{$number} is not a prime number.";
}
```

### Algorithm 6: Find the Fibonacci series till the term less than 1000

```
Step 1: Start 
Step 2: Declare variables first_term,second_term and temp. 
Step 3: Initialize variables first_term ← 0 second_term ← 1 
Step 4: Display first_term and second_term 
Step 5: Repeat the steps until second_term ≤ 1000 
     5.1: temp ← second_term 
     5.2: second_term ← second_term + first_term 
     5.3: first_term ← temp 
     5.4: Display second_term 
Step 6: Stop
```

```
function fibonacciSeries(int $number): void
{
    $a = 0;
    $b = 1;

    echo "Fibonacci Series till the term less than {$number}:\n";

    while ($a < $number) {
        echo $a . " ";
        $temp = $a + $b;
        $a = $b;
        $b = $temp;
    }
}

fibonacciSeries(1000);
```