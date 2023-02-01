/**
 * one object of this class will represent
 * one message being shown on the screen
 */
class Message {

    constructor(text, type = 'success', is_minimized = false) {
        // here we define properties of this object
        this.text = text; // whatever text is on the message element
        this.type = type; // one of success|error|warning
        this.is_minimized = is_minimized; // is it currently minimized?

        this.element = null; // the element that contains the message
    }

    /**
     * displays this message on the page
     */
    display() {
        const container = document.querySelector('.messages');

        // create a message element
        const message_element = this.createMessageElement();

        // create the element that contains the message text
        const text_element = this.createTextElement();

        // create the minimize button
        const minimize_button = this.createMinimizeButton();

        // create the close button
        const close_button = this.createCloseButton();

        // append contents of the message to the message
        message_element.appendChild(text_element);
        message_element.appendChild(minimize_button);
        message_element.appendChild(close_button);

        // append the message to the message container
        container.appendChild(message_element);
    }

    createMessageElement() {
        this.element = document.createElement('div');
        this.element.classList.add('message');
        this.element.classList.add('message--' + this.type);

        return this.element;
    }

    createTextElement() {
        const text_element = document.createElement('div');
        text_element.classList.add('message__text')
        text_element.innerHTML = this.text;

        return text_element;
    }

    createMinimizeButton() {
        const button = document.createElement('button');
        button.classList.add('message__minimize');
        button.innerHTML = '&lt;';

        button.addEventListener('click', ev => {
            ev.preventDefault();

            if (this.is_minimized) {
                this.expand();
            } else {
                this.minimize();
            }
        })

        return button;
    }

    createCloseButton() {
        const button = document.createElement('button');
        button.classList.add('message__close');
        button.innerHTML = '&times;';

        return button;
    }

    /**
     * removes itself from the page
     */
    remove() {

    }

    /**
     * minimizes itself
     */
    minimize() {
        this.is_minimized = true;
        this.element.classList.add('message--minimized');
        this.element.querySelector('.message__minimize').innerHTML = '&gt;';
    }

    /**
     * expands itself (opposite of minimizing)
     */
    expand() {
        this.is_minimized = false;
        this.element.classList.remove('message--minimized');
        this.element.querySelector('.message__minimize').innerHTML = '&lt;';
    }
}
