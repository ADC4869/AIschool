// Tắt/mở tiếng
document.addEventListener('DOMContentLoaded', () => {
    const muteButton = document.getElementById('muteButton');
    const icon = document.getElementById('icon');
    const statusText = document.getElementById('statusText');
    
    let isMuted = false;
    let mediaStream = null; // Đây là MediaStream của bạn

    muteButton.addEventListener('click', () => {
        isMuted = !isMuted;
        
        if (isMuted) {
            icon.classList.remove('fa-microphone');
            icon.classList.add('fa-microphone-slash');
            statusText.textContent = 'Mở tiếng';
            
            if (mediaStream) {
                mediaStream.getAudioTracks().forEach(track => track.enabled = false);
            }
        } else {
            icon.classList.remove('fa-microphone-slash');
            icon.classList.add('fa-microphone');
            statusText.textContent = 'Tắt tiếng';
            
            if (mediaStream) {
                mediaStream.getAudioTracks().forEach(track => track.enabled = true);
            }
        }
    });

    // Ví dụ về cách bạn có thể lấy mediaStream và gán vào biến mediaStream
    // navigator.mediaDevices.getUserMedia({ audio: true }).then(stream => {
    //     mediaStream = stream;
    // }).catch(error => {
    //     console.error('Không thể lấy mediaStream:', error);
    // });
});

// Loa
document.getElementById('volume-toggle').addEventListener('click', function() {
    const icon = document.getElementById('volume-icon');
    const audioElements = document.querySelectorAll('audio'); // Assuming you have audio elements

    if (icon.classList.contains('fa-volume-up')) {
        // Thay đổi icon và tắt âm thanh
        icon.classList.remove('fa-volume-up');
        icon.classList.add('fa-volume-mute');
        audioElements.forEach(audio => audio.muted = true);
    } else {
        // Đổi lại icon và bật âm thanh
        icon.classList.remove('fa-volume-mute');
        icon.classList.add('fa-volume-up');
        audioElements.forEach(audio => audio.muted = false);
    }
});

// Video
document.addEventListener('DOMContentLoaded', () => {
    const videoButton = document.getElementById('videoButton');
    const videoIcon = document.getElementById('videoIcon');
    const videoElement = document.getElementById('videoElement');

    let isVideoOn = false;
    let localStream;

    async function startVideoCall() {
        try {
            localStream = await navigator.mediaDevices.getUserMedia({ video: true });
            videoElement.srcObject = localStream;
            videoElement.style.display = 'block';
        } catch (error) {
            console.error('Error accessing webcam: ', error);
        }
    }

    function stopVideoCall() {
        if (localStream) {
            localStream.getTracks().forEach(track => track.stop());
            videoElement.style.display = 'none';
        }
    }

    videoButton.addEventListener('click', () => {
        if (isVideoOn) {
            // Tắt video
            stopVideoCall();
            videoIcon.classList.remove('fa-video');
            videoIcon.classList.add('fa-video-slash');
        } else {
            // Bật video
            startVideoCall();
            videoIcon.classList.remove('fa-video-slash');
            videoIcon.classList.add('fa-video');
        }

        isVideoOn = !isVideoOn;
    });
});

// Camera
const video = document.getElementById('video');
const actionBtn = document.querySelector('.action-btn');

let currentStream;
let isFrontCamera = true;

// Khởi động camera với chế độ camera trước hoặc sau
async function startCamera() {
    const constraints = {
        video: {
            facingMode: isFrontCamera ? 'user' : 'environment'
        }
    };

    if (currentStream) {
        currentStream.getTracks().forEach(track => track.stop());
    }

    try {
        currentStream = await navigator.mediaDevices.getUserMedia(constraints);
        video.srcObject = currentStream;
    } catch (error) {
        console.error('Không thể truy cập camera:', error);
    }
}

// Chuyển đổi giữa camera trước và sau
function toggleCamera() {
    isFrontCamera = !isFrontCamera;
    startCamera();
}

actionBtn.addEventListener('click', toggleCamera);

// Khởi động camera khi trang được tải
startCamera();