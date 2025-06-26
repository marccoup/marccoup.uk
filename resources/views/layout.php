<?php
$title ??= 'No Title';
$content ??= '';
?><!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="color-scheme" content="light dark">
    <link rel="stylesheet" href="/assets/css/style.css" type="text/css">
    <title><?= $title ?></title>
</head>
<body>
    <header class="board-panel">
        <div class="site-title split-flap">MARC COUPLAND</div>
        <div class="site-subtitle">PERSONAL RAILWAY OF THOUGHTS</div>
        <div class="display-time" id="clock">--:--:--</div>
        <nav>
            <a href="/" class="matrix-text">DEPARTURES</a>
        </nav>
    </header>
    <main>
        <?= $content ?>
    </main>
    <footer class="board-panel">
        <p>PLATFORM &copy; <?= date('Y') ?> - MARC COUPLAND</p>
    </footer>
    
    <script>
        // Add railway board clock functionality
        function updateClock() {
            const now = new Date();
            const hours = String(now.getHours()).padStart(2, '0');
            const minutes = String(now.getMinutes()).padStart(2, '0');
            const seconds = String(now.getSeconds()).padStart(2, '0');
            document.getElementById('clock').textContent = `${hours}:${minutes}:${seconds}`;
        }
        
        // Update the clock every second
        setInterval(updateClock, 1000);
        updateClock(); // Initial call
        
        // Add split-flap animation to elements when they appear in view
        document.addEventListener('DOMContentLoaded', function() {
            // Apply random flicker effect to elements
            const elements = document.querySelectorAll('h1, h2, h3, .site-title, .article-list li');
            elements.forEach(el => {
                el.classList.add('flicker');
                // Add slight delay for staggered effect
                setTimeout(() => {
                    el.classList.add('split-flap');
                }, Math.random() * 1000);
            });
        });
    </script>
</body>
</html>