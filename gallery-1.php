<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="style.css">
    <style>
        html,
        body {
            margin: 0;
            padding: 0;
        }

        .gallery {
            margin: 0 auto;
            width: 100%;
            max-width: 1200px; /* Adjust the maximum width as per your preference */
        }

        .gallery-item {
            width: calc(20% - 10px); /* Adjust the width and margin as per your preference */
            margin: 5px; /* Adjust the width and margin as per your preference */
            box-sizing: border-box;
            float: left;
        }

        .gallery-item img {
            display: block;
            max-width: 100%;
            height: auto;
        }
    </style>
</head>
<body>
<div class="header">
    <div class="overlay">
      <div class="dropdown-menu">
        <button class="dropdown-toggle"><img src="./image/menu.png" alt="Logo" width="50px" height="auto"></button>
        <ul class="dropdown-content"> 
          <li><a href="./investment.html">investment</a></li>
          <li><a href="./blog.html">gallery</a></li>
          <li><a href="./about.html">about</a></li>
          <li><a href="./contact.html">contact</a></li>
        </ul>
      </div>
      <div class="left-links links">
        <ul>
          <li><a href="./investment.html">investment</a></li>
          <li><a href="./blog.html">gallery</a></li>
        </ul>
      </div>
      <div class="logo">
        <a href="./index.html"><img src="./image/logo.png" alt="Logo" width="100px" height="auto"></a>
      </div>
      <div class="right-links links">
        <ul>
          <li><a href="./about.html">about</a></li>
          <li><a href="./contact.html">contact</a></li>
        </ul>
      </div>
    </div>
  </div>
  <div class="title">
    The Mills Family
  </div>
  <div class="date"> June 4, 2023 </div>
    <div class="gallery">
        <?php
        header("Cache-Control: no-cache, no-store, must-revalidate");
        header("Pragma: no-cache");
        header("Expires: 0");
        
        $imageDir = 'image/mills'; // Path to the image directory
        $allowedExtensions = ['jpg', 'jpeg', 'png', 'gif', 'webp']; // Allowed image extensions

        // Get all image files from the directory
        $images = glob($imageDir . '/*.{'.implode(',', $allowedExtensions).'}', GLOB_BRACE);

        foreach ($images as $image) {
            echo '<div class="gallery-item">';
            echo '<img class="lazyload" src="' . $image . '" alt="Image">';
            echo '</div>';
        }
        ?>
    </div>

    <script src="./cdnjs/masonry.pkgd.min.js"></script>
    <script src="./cdnjs/lazysizes.min.js"></script>
    <script src="./app.js"></script>
    <script>
        window.addEventListener('load', function() {
            const gallery = document.querySelector('.gallery');
            const masonry = new Masonry(gallery, {
                itemSelector: '.gallery-item',
                columnWidth: '.gallery-item',
                gutter: 10, // Adjust the gutter as per your preference
                fitWidth: true
            });
        });
    </script>
</body>
</html>



