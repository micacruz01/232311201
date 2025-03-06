// Function to print FizzBuzz sequence
function printFizzBuzz() {
    echo "FizzBuzz Sequence:\n";
    for ($i = 1; $i <= 100; $i++) {
        if ($i % 3 == 0 && $i % 5 == 0) {
            echo "FizzBuzz\n";
        } elseif ($i % 3 == 0) {
            echo "Fizz\n";
        } elseif ($i % 5 == 0) {
            echo "Buzz\n";
        } else {
            echo "$i\n";
        }
    }
}

// Call the function to print FizzBuzz
printFizzBuzz();

// Function to generate and print even Fibonacci numbers
function printEvenFibonacci() {
    echo "\nEven Fibonacci Numbers:\n";
    $a = 0;
    $b = 1;
    for ($i = 0; $i < 10; $i++) {
        if ($a % 2 == 0 && $a != 0) {
            echo "$a\n";
        }
        
        // Generate the next Fibonacci number
        list($a, $b) = array($b, $a + $b);
    }
}

// Call the function to print even Fibonacci numbers
printEvenFibonacci();
