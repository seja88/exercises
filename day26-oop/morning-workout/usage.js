const player_1_container = document.querySelector('#player_1');

const audio_player_1 = new AudioPlayer(player_1_container);
const audio_player_2 = new AudioPlayer(player_2_container, 'let-it-be.mp3');

document.querySelector('.play-button').addEventListener('click', () => {

    audio_player_1.play();

})


document.querySelector('.stop-button').addEventListener('click', () => {

    audio_player_1.stop();

})


// on clicking a name of a song (in some kind of HTML list)
audio_player_1.playTrack('imagine.mp3');


audio_player_1.nextSong();
audio_player_1.previousSong();


audio_player_1.volumeUp();
audio_player_1.volumeDown();
audio_player_1.setVolume(7);