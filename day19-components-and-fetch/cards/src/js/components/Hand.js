import { Card } from "./Card";

export class Hand {
    constructor() {
        this.element = document.createElement('div')

        this.cardsData = [
            {rank: 2, suit: "heart", handleClick: this.dropCard },
            {rank: 2, suit: "spade", handleClick: this.dropCard },
            {rank: 2, suit: "club", handleClick: this.dropCard },
            {rank: 2, suit: "diamond", handleClick: this.dropCard },
        ]

        this.refreshElement()
    }

    refreshElement = () => {
        console.log("refreshing hand")
        this.element.innerHTML = `
            <h3>My hand</h3>
        `;

        this.element.classList.add('cards-container')

        this.cardsData.forEach((cardData, index) => {
            cardData.index = index
            const card1 = new Card(cardData)
            this.element.appendChild(card1.element)
        })

        this.element.querySelector('button').addEventListener('click', this.dropFirst)
    }

    // dropFirst = () => {
    //     // this.cardsData.shift()
    //     this.cardsData.splice(0, 1)
    //     this.refreshElement()
    // }

    dropCard = (index) => {
        console.log("dropping card");
        this.cardsData.splice(index, 1)
        this.refreshElement()
    }
}