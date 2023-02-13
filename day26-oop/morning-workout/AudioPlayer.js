class AudioPlayer {

    constructor(container, track = null) {

        this.container = container;
        this.track = null;
        this.volume = 5;
        this.is_favorite_track = false;
        this.playlist = null;
        this.playlist_position = null;
        this.shuffle = false;
        this.repeat = false;
        this.time_elapsed = 0;
        this.play_state = 'stopped'; // stopped|playing
    }

    /**
     * INTERFACE METHODS
     * (meant to be used from the "outside")
     */

    /**
     * start the playback
     */
    play() {

    }

    /**
     * stop the playback and seek to beginning of track
     */
    stop() {

    }

    /**
     * stop the playback
     */
    pause() {

    }

    /**
     * plays a specific audio file
     */
    playTrack(audioTrack) {
        this.track = new AudioTrack()

        this.preloadTrackData();
    }

    /**
     * plays the next track in the playlist
     */
    nextSong() {
        const song = this.getNextSong();

        this.playTrack(song);
    }

    /**
     * plays the previous track in the playlist
     */
    previousSong() {

    }

    volumeUp() {

    }

    volumeDown() {

    }

    setVolume(volume) {

    }

    setFavorite() {
        this.is_favorite_track = true;
    }

    toggleShuffle() {
        this.shuffle = !this.shuffle;
    }

    toggleRepeat() {
        this.repeat = !this.repeat;
    }

    /**
     * INTERNAL METHODS
     * (meant to provide internal functionality)
     */

    /**
     * preloads part of a track for smooth playback
     */
    preloadTrack(track, time_to_preload) {

    }

    /**
     * loads information into this.track
     */
    preloadTrackData() {

    }

    /**
     * finds which is the next song in the playlist if any
     */
    getNextSong() {
        // some logic
    }
}