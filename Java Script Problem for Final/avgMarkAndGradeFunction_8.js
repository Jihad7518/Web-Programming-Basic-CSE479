const students = [
    { name: "David", marks: 80 },
    { name: "Vinoth", marks: 77 },
    { name: "Divya", marks: 88 },
    { name: "Ishita", marks: 95 },
    { name: "Thomas", marks: 68 }
];

// Calculate the total marks and average
let totalMarks = 0;
for (const student of students) {
    totalMarks += student.marks;
}
const averageMarks = totalMarks / students.length;

// Determine the corresponding grade based on average marks
let grade;
if (averageMarks < 60) {
    grade = "F";
} else if (averageMarks < 70) {
    grade = "D";
} else if (averageMarks < 80) {
    grade = "C";
} else if (averageMarks < 90) {
    grade = "B";
} else {
    grade = "A";
}

console.log(`Average marks: ${averageMarks}`);
console.log(`Grade: ${grade}`);
