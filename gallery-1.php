<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>The Mills Gallery</title>
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
            width: 20%;
            max-width: 100%;
            margin-bottom: 10px;
            box-sizing: border-box; /* Add this line */
        }

        .item img {
            width: 100%;
            height: auto;
            display: block;
        }
    </style>
</head>
<body>
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
