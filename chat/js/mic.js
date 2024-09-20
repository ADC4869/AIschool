const microphoneButton = document.getElementById('microphone-btn');

let mediaRecorder;
let audioChunks = [];

microphoneButton.addEventListener('click', function () {
    // Check if recording is already in progress
    if (!mediaRecorder || mediaRecorder.state === 'inactive') {
        // Request microphone access
        navigator.mediaDevices.getUserMedia({ audio: true })
            .then(stream => {
                // Create a MediaRecorder instance
                mediaRecorder = new MediaRecorder(stream);
                mediaRecorder.start();

                microphoneButton.innerText = ""; // Indicate recording

                // Collect audio data chunks
                mediaRecorder.ondataavailable = event => {
                    audioChunks.push(event.data);
                };

                // When the recording stops
                mediaRecorder.onstop = () => {
                    // Create a new Blob from the collected audio chunks
                    const audioBlob = new Blob(audioChunks, { type: 'audio/mpeg' });
                    audioChunks = []; // Clear the chunks array for the next recording

                    // Create a URL for the audio file
                    const audioUrl = URL.createObjectURL(audioBlob);

                    // Add the audio message to the chat
                    const chatContainer = document.querySelector('.chat-container');
                    const chatBubble = document.createElement('div');
                    chatBubble.classList.add('chat-bubble', 'user');

                    const audioElement = document.createElement('audio');
                    audioElement.controls = true;
                    audioElement.src = audioUrl;

                    const message = document.createElement('div');
                    message.classList.add('message');
                    message.appendChild(audioElement);

                    chatBubble.appendChild(message);
                    chatContainer.appendChild(chatBubble);

                    microphoneButton.innerText = ""; // Reset button text
                };
            })
            .catch(error => {
                console.error('Microphone access error:', error);
                alert('Unable to access the microphone. Please allow microphone access.');
            });
    } else if (mediaRecorder.state === 'recording') {
        // Stop the recording if it's in progress
        mediaRecorder.stop();
    }
});