import { Card } from "./components/Card";

import { Hand } from "./components/Hand";

const hand = new Hand

// const card = new Card({rank: 2, suit: "diamond"});

// console.log(card.element)
document.querySelector("#target").appendChild(hand.element)