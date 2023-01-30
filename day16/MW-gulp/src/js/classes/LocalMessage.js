import Message from './Message';

class LocalMessage extends Message {
  constructor(name, text) {
    super(name, text);

    this.side = 'local';
  }
}

export default LocalMessage;
