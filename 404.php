<?php
// Set header status code 404
header("HTTP/1.0 404 Not Found");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Tidak Ditemukan - 404</title>
    <!-- Tailwind CSS via CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Font Awesome untuk ikon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        .spline-embed {
            width: 100vw;
            height: 100vh;
            min-height: 400px;
            max-height: 100vh;
            border-radius: 0;
            overflow: hidden;
            margin: 0;
            position: fixed;
            top: 120px;
            left: 0;
            z-index: 0;
        }
        .content-404 {
            position: relative;
            z-index: 1;
        }
        body, html {
            height: 100%;
            margin: 0;
            padding: 0;
        }
        body {
            background: transparent;
        }
    </style>
</head>
<body style="background : black;">
    <div class="content-404" style="position:relative;z-index:2;min-height:100vh;display:flex;flex-direction:column;align-items:center;justify-content:flex-start;">
        <h1 style="color:white;font-size:3rem;font-weight:bold;text-shadow:0 2px 8px #000;letter-spacing:2px;margin-bottom:1.5rem;margin-top:2.5rem;">404 NOT FONDING</h1>
        <a href="/MIS_JANNAH/pages/home.php" class="bg-[#2e9149] hover:bg-white text-white font-bold py-3 px-8 rounded-full text-lg shadow-lg transition mb-8" style="text-shadow:0 2px 8px #000;">Back to Home</a>
    </div>
    <div class="spline-embed">
        <script type="module" src="https://unpkg.com/@splinetool/viewer@1.10.27/build/spline-viewer.js"></script>
        <spline-viewer url="https://prod.spline.design/BIitXqYY34cWpXMt/scene.splinecode" style="width:100vw;height:100vh;display:block;"></spline-viewer>
    </div>
</body>
</html>
