// declare an empty array
const students = [];

// add a new element at position (index) 0
students[0] = 'Patrik';

students[1] = 'Maan';

students[4] = 'Alexandra';

// add a new element at the END
students.push('Alena');

// add a new element at the BEGINNING
students.unshift('Honza');

// add a new element in the middle
// at position 3
// delete 0 elements at position 3
students.splice(3, 0, 'Rachel');

// add a new element in the middle
// at position 4
// delete 2 elements at position 4
students.splice(4, 2, 'Lukas');


let foo = 'abc';

foo = 'def';

console.log(foo);

// read (and console.log) the value of the 5th element
// of array students
console.log( students[4] );

students[4] = 'Luke';

// on index 1, remove 1 element (and return it)
const removed = students.splice(1, 1);

// remove an element from the END of the array
// (and return it)
const last = students.pop();

// remove an element from the BEGINNING of the array
// (and return it)
const first = students.shift();

console.log(students);
console.log(removed);
console.log(last);
console.log(first);

//      37          37
const my_object = ['abc'];

// constant error:
// students = ['abc'];

console.log('The length of the students array is ' + students.length);

if (students.length > 5) {
    console.log('Too many students!!');
}

console.log('Last element of the array is ', students[ students.length - 1 ])