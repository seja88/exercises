// function | call - return value

// 1. function
function myFunction() {

}

// 2. return value
const myFunction = anotherFunction();

// 3. function
const myFunction = a => 1

// 4. return value
myFunction();

const foo = () => {

    // returns a function
    return (a, b) => {
        return a + b;
    }
}

// 5. return value === function
const whatIsIt = foo()

whatIsIt();

// 6. function
foo

// 6. function
const whatIsThat = foo;

whatIsThat()

// -------------

const bar = (a, b) => {
    return a * b;
}

const qux = (c, func) => {
    return c + func(c, c);
}

// how much?
const result = qux(3, bar); // 12

// how much
const result2 = qux(3, (x, y) => x / y); // 4

// -----------

(3)

// result3 === 7
const result3 = ((a, b) => {
    return a + b;
})(3, 4)
