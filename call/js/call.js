const circle = document.querySelector('.circle');
const sliderContainer = document.querySelector('.slider-container');
let isDragging = false;
let startPosition = 0;
let currentTranslate = 0;

circle.addEventListener('mousedown', startDrag);
circle.addEventListener('touchstart', startDrag);

function startDrag(e) {
    isDragging = true;
    startPosition = e.type.includes('touch') ? e.touches[0].clientX : e.clientX;

    document.addEventListener('mousemove', drag);
    document.addEventListener('touchmove', drag);
    document.addEventListener('mouseup', endDrag);
    document.addEventListener('touchend', endDrag);
}

function drag(e) {
    if (!isDragging) return;

    const currentPosition = e.type.includes('touch') ? e.touches[0].clientX : e.clientX;
    currentTranslate = Math.min(sliderContainer.offsetWidth - circle.offsetWidth, Math.max(0, currentPosition - startPosition));
    circle.style.left = `${currentTranslate}px`;
}

function endDrag() {
    isDragging = false;
    if (currentTranslate > sliderContainer.offsetWidth / 2) {
        circle.style.left = `${sliderContainer.offsetWidth - circle.offsetWidth}px`;
        // This is the condition where the call button is successfully dragged to the right (for answering)
        transitionToCallScreen();
    } else {
        circle.style.left = '0px'; // Return to the original position
    }

    document.removeEventListener('mousemove', drag);
    document.removeEventListener('touchmove', drag);
    document.removeEventListener('mouseup', endDrag);
    document.removeEventListener('touchend', endDrag);
}

function transitionToCallScreen() {
    // Replace the current content with the new interface
    document.body.innerHTML = `
        <header>
            <div class="navbar">
                <button class="back-btn">
                    <i class="fa-solid fa-circle-left"></i>
                </button>
                <span class="title">SchoolAI</span>
                <button class="action-btn">
                    <i class="fa-solid fa-camera-rotate"></i>
                </button>
            </div>
        </header>

        <main>
            <div class="profile-container">
                <img src="../img/call.png" alt="Profile Picture" class="profile-pic">
                <h2 class="profile-name">Trần Văn Giàu</h2>
                <p class="profile-status">00:00</p>
            </div>
        </main>

        <footer>
            <div class="button-container">
                <div class="button-wrap">
                    <div class="button">
                        <i class="fas fa-video"></i> <!-- Video Icon -->
                    </div>
                    <span>Video</span>
                </div>

                <div class="button-wrap">
                    <div class="button">
                        <i class="fas fa-volume-up"></i> <!-- Speaker Icon -->
                    </div>
                    <span>Loa</span>
                </div>

                <div class="button-wrap">
                    <div class="button">
                        <i class="fas fa-microphone-slash"></i> <!-- Mute Icon -->
                    </div>
                    <span>Tắt tiếng</span>
                </div>

                <div class="button-wrap">
                    <div class="button end">
                        <i class="fas fa-phone-slash"></i> <!-- End Call Icon -->
                    </div>
                    <span>Kết thúc</span>
                </div>
            </div>
        </footer>
    `;
}