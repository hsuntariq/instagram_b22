<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-initial-scale=1.0">
    <title>Welcome Notification Slider</title>
    <style>
    body {
        font-family: 'Arial', sans-serif;
        background-color: #f0f2f5;
        margin: 0;
        padding: 0;
        display: flex;
        justify-content: center;
        align-items: center;
        min-height: 100vh;
    }

    .notification-slider {
        position: fixed;
        top: -100px;
        /* Start off-screen */
        left: 50%;
        transform: translateX(-50%);
        background: linear-gradient(135deg, #6e8efb, #a777e3);
        color: white;
        padding: 15px 30px;
        border-radius: 10px;
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
        display: flex;
        align-items: center;
        gap: 10px;
        font-size: 16px;
        font-weight: 500;
        z-index: 100000;
        max-width: 400px;
        width: 90%;
        opacity: 0;
        transition: all 0.5s ease-in-out;
    }

    .notification-slider.show {
        top: 20px;
        opacity: 1;
    }

    .notification-slider.hide {
        top: -100px;
        opacity: 0;
    }

    .notification-icon {
        font-size: 24px;
        animation: bounce 0.5s ease-in-out 2;
    }

    .close-btn {
        background: none;
        border: none;
        color: white;
        font-size: 18px;
        cursor: pointer;
        margin-left: auto;
        transition: transform 0.2s;
    }

    .close-btn:hover {
        transform: scale(1.2);
    }

    @keyframes bounce {

        0%,
        100% {
            transform: translateY(0);
        }

        50% {
            transform: translateY(-5px);
        }
    }
    </style>
</head>

<body>
    <div class="notification-slider" id="welcomeNotification">
        <span class="notification-icon">🎉</span>
        <span id="welcomeMessage">
            <?php 
               echo $_SESSION['welcome']
            ?>
        </span>
        <button class="close-btn" onclick="hideNotification()">×</button>
    </div>

    <script>
    // Show notification on page load
    window.onload = () => {
        const notification = document.getElementById("welcomeNotification");
        notification.classList.add("show");

        // Auto-hide after 5 seconds
        setTimeout(() => {
            hideNotification();
        }, 5000);
    };

    // Function to hide notification
    function hideNotification() {
        const notification = document.getElementById("welcomeNotification");
        notification.classList.remove("show");
        notification.classList.add("hide");

        // Remove from DOM after animation
        setTimeout(() => {
            notification.style.display = "none";
        }, 500);
    }
    </script>
</body>

</html>