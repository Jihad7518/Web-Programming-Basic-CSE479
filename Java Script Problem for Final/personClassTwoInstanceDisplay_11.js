class Person {
    constructor(name, age, country) {
        this.name = name;
        this.age = age;
        this.country = country;
    }

    displayDetails() {
        console.log(`Name: ${this.name}`);
        console.log(`Age: ${this.age}`);
        console.log(`Country: ${this.country}`);
    }
}

// Create instances of Person class
const person1 = new Person("Alice", 25, "USA");
const person2 = new Person("Bob", 30, "Canada");

// Display details for each instance
console.log("Person 1 details:");
person1.displayDetails();
console.log("\nPerson 2 details:");
person2.displayDetails();
