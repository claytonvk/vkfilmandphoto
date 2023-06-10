<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Gallery from Folder Demo</title>
    <style type="text/css">
        body {
            margin: 0;
            padding: 0;
        }

        #gallery {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            align-items: flex-start;
        }

        .item {
            width: 24.47%;
            max-width: 100%;
            margin-bottom: 10px;
            box-sizing: border-box; /* Add this line */
        }

        .item img {
            width: 100%;
            height: auto;
            display: block;
        }

        .content {
          display: flex;
          flex-direction: column;
          align-items: center;
        }
    </style>
    <link rel="stylesheet" href="style.css">
</head>
<body>
  <div class="header">
    <div class="overlay">
      <div class="dropdown-menu">
        <button class="dropdown-toggle"><img src="./image/menu.png" alt="Logo" width="50px" height="auto"></button>
        <ul class="dropdown-content"> 
          <li><a href="./investment.html">investment</a></li>
          <li><a href="./blog.html">blog</a></li>
          <li><a href="./about.html">about</a></li>
          <li><a href="./contact.html">contact</a></li>
        </ul>
      </div>
      <div class="left-links links">
        <ul>
          <li><a href="./investment.html">investment</a></li>
          <li><a href="./blog.html">blog</a></li>
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
  <div class= "content">
    <div class="title">
      the mills family
    </div>
    <div id="gallery">
        <?php
        $dirname = "image/mills/";
        $images = scandir($dirname);
        shuffle($images);
        $ignore = array(".", "..");
        foreach ($images as $curimg) {
            if (!in_array($curimg, $ignore)) {
                echo "<div class='item'><a href='" . $dirname . $curimg . "'><img src='" . $dirname . $curimg . "' alt='' /></a></div>\n";
            }
        }
        ?>
    </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/masonry/4.2.2/masonry.pkgd.min.js"></script>
    <script>
        var gallery = document.getElementById('gallery');
        var masonry = new Masonry(gallery, {
            itemSelector: '.item',
            columnWidth: '.item',
            gutter: 10,
            percentPosition: true
        });
    </script>
</body>
</html>