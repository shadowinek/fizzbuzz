# FizzBuzz

Write a program that prints the numbers from 1 to 100. But for multiples of three print Fizz instead of the number and for the multiples of five print Buzz. For numbers which are multiples of both three and five print FizzBuzz.

### Technology
You can write plain-php code or use a framework for this challenge.

Please use PHP 7.1+, strict typing and object oriented programming.

Also provide some Unit-Tests to verify the sample output.

### Summary
This coding challenge shouldn't take more than 2 hours. Please provide us a github/bitbucket link when you're done.

### Sample-Output
```
1
2
Fizz
4
Buzz
Fizz
7
8
Fizz
Buzz
11
Fizz
13
14
FizzBuzz
16
17
Fizz
19
Buzz
... etc up to 100
```

## Setup

1. Clone repository

```
git clone git@github.com:shadowinek/fizzbuzz.git
cd fizzbuzz
```

2. Install the app dependencies

```
composer install
```

3. How to run
```
php fizzbuzz.php [amount]
```

4. How to run tests
```
./vendor/bin/phpunit tests  
```

## Dev Diary
01/06 11:55
- Started with the implementation. I am trying to do the TDD approach, so I will write some basic tests first 

01/06 12:02
- Basic implementation done
- Todo: add tests to cover the requested scenario of input value of 100

01/06 12:28
- Made the naming more consistent
- Moved print to the "controller", so the class is used only for data processing and not decorating the output
- Added some more tests
- Final changes
- What is missing: Advanced input checks, right now I assume you use only the correct input
