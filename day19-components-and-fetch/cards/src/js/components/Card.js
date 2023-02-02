export class Card {
    constructor (properties) {
        this.element = document.createElement('div')

        this.rank = properties.rank
        this.suit = properties.suit
        this.faceDown = false;

        this.handleClick = properties.handleClick
        this.index = properties.index

        this.refreshElement()
    }

    refreshElement = () => {
        console.log("refreshing element")

        this.element.classList.add("card", this.suit)

        if (this.faceDown) {
            this.element.classList.add("face-down")
        } else {
            this.element.classList.remove("face-down")
        }

        this.element.innerHTML = `
            <h2 class="rank">${this.rank}</h2>
        `;

        this.element.addEventListener('click', () => {
            this.handleClick(this.index)
        })
    }

    flipSelf = () => {
        this.faceDown = !this.faceDown
        this.refreshElement()
    }

    // increaseRank = () => {
    //     this.rank++
    //     console.log(this.rank)
    //     this.refreshElement()
    // }
}

"{rating_subject: 'The Batman', rating_value: 5}"