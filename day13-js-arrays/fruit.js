
const fruits = ['apple', 'pear', 'banana', 'orange', 'mango'];

fruits.push('strawberry');

// find the <ul></ul> element and put it in a constant
const fruit_list = document.querySelector('.fruit-list');

console.log(fruit_list);

for (let i = 0; i < fruits.length; i++) {

    if (fruits[i] === 'pear') {
        // we don't want to print pear
        continue;
    }

    // add the string 'ABC' to fruit_list.innerHTML
    fruit_list.innerHTML += '<li>' + fruits[i] + '</li>';

    console.log( fruits[i] + ' is very tasty');

    if (fruits[i] === 'orange') {
        console.log('I\'m alergic to oranges!');
        break;
    }
}

// empty the list of fruits
fruit_list.innerHTML = '';

fruits.forEach((value, index) => {
    fruit_list.innerHTML += '<li>' + index + ': ' + value + '</li>';
})

// empty the list of fruits
fruit_list.innerHTML = '';

const sentences = fruits.map((value, index) => {

    return 'The fruit that we call ' + value + ' is super healthy.';

})

console.log(sentences);

const li_elements = fruits.map((fruit, i) => {

    return '<li>' + fruit + '</li>';

})

console.log(li_elements);

const html = li_elements.join('');

console.log(html);


const fruit_html =
fruits
.filter(fruit => {
    if (fruit === 'banana' || fruit === 'orange') {
        return false;
    } else {
        return true;
    }
})
.map(fruit => {
    return '<li>' + fruit + '</li>';
})
.join('');

console.log(fruit_html);

document.querySelector('ul').innerHTML = fruits
    .filter(fruit => {
        if (fruit === 'banana' || fruit === 'orange') {
            return false;
        } else {
            return true;
        }
    })
    .map(fruit => {
        return '<li>' + fruit + '</li>';
    })
    .join('');


const lis = document.querySelectorAll('li');