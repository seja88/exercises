import Message from './Message';

class RemoteMessage extends Message {
  constructor(name, text) {
    super(name, text);

    this.side = 'remote';
  }
}

export default RemoteMessage;
