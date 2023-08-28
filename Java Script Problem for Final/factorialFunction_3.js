
function factorial(n) {
    if (n === 0 || n === 1) {
        return 1; // 0! and 1! are both defined as 1
    } else {
        return n * factorial(n - 1); // Recursive call
    }
}

// Examples
console.log(factorial(5)); // Output: 120
console.log(factorial(0)); // Output: 1
console.log(factorial(8)); // Output: 40320
