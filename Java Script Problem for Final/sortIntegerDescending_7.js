const num1 = 4;
const num2 = 0;
const num3 = -1;

const sortedArray = [num1, num2, num3].sort((a, b) => b - a); // Change a - b to b - a
const result = sortedArray.join(', ');

alert(`Sorted result: ${result}`);
