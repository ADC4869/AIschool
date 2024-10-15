<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/schedule.css">
    <title>Lịch Họp Phụ Huynh</title>
</head>
<body>
    <header>
        <div class="container">
            <header class="header">
                <a href="#" class="back-button">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-left" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M11.354 1.646a.5.5 0 0 1 0 .708L5.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0"/>
                    </svg>
                </a>
                <h3>Lịch Họp Phụ Huynh</h3>
            </header>
        </div>
    </header>
    
    <main>
        <div class="container">
            <div class="tabs">
                <button class="tab-button active" data-tab="day">Day</button>
                <button class="tab-button" data-tab="week">Week</button>
                <button class="tab-button" data-tab="month">Month</button>
            </div>

            <div class="tab-content active" id="day-content">
                <div class="empty-state">
                    <img src="empty-icon.png" alt="Empty Icon" class="empty-icon">
                    <p>Chưa có lịch trong ngày này</p>
                </div>
            </div>

            <div class="tab-content" id="week-content">
                <p>Nội dung của tab Week.</p>
            </div>

            <div class="tab-content" id="month-content">
                <p>Nội dung của tab Month.</p>
            </div>
        </div>
    </main>
</body>
<script src="js/schedule.js"></script>
</html>