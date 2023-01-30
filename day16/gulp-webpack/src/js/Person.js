class Person {
  constructor(name, age) {
    this.name = name;
    this.age = age;
  }

  getFullName() {
    return `My name is ${this.name}`;
  }
}

export default Person;
