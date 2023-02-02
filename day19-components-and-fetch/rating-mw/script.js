const textRatingElement = document.querySelector('.rating__value')
const stars = document.querySelectorAll('.rating__star')

stars.forEach((star, index) => {
    star.addEventListener('click', (e) => {
        console.log('The stars NodeList:')
        console.log(stars)
        console.log('The clicked star element:')
        console.log(star)
        console.log('The index of the clicked star in the NodeList:')
        console.log(index)
        console.log('Rating expressed by text:')
        console.log(textRatingElement.textContent)
        console.log('-------------------------------------------------------------------------')
        textRatingElement.textContent = index + 1;

        stars.forEach((starInner, indexInner) => {
            starInner.classList.remove("rating__star--on");
            if (indexInner <= index) {
                starInner.classList.add("rating__star--on")
            }
        })
    })
})