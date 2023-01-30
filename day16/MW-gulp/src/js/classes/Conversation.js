class Conversation {
  constructor(element) {
    this.element = element;
  }

  addMessage (message) {
    this.element.innerHTML += `
      <div class="message message--${message.side}">
        <div class="message__text">
          ${message.text}
        </div>
      </div>
    `;
  }
}

export default Conversation;
