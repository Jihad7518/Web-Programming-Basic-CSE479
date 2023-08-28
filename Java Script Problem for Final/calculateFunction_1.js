function calculate(num1, num2, operator) {
    switch (operator) {
        case '+':
            return num1 + num2;
        case '-':
            return num1 - num2;
        case '*':
            return num1 * num2;
        case '/':
            if (num2 !== 0) {
                return num1 / num2;
            } else {
                return "Cannot divide by zero.";
            }
        default:
            return "Invalid operator.";
    }
}

// Examples
console.log(calculate(5, 3, '+')); // Output: 8
console.log(calculate(10, 4, '-')); // Output: 6
console.log(calculate(6, 2, '*')); // Output: 12
console.log(calculate(15, 3, '/')); // Output: 5
console.log(calculate(8, 2, '%')); // Output: Invalid operator.
