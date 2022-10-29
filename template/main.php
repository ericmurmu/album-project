<?php include("header.html"); ?>
<!-- album bar code -->
    <div class="nav_album_bar">
        <?php include("navbarheader.html"); ?>
    </div>
<!-- Desciption -->
    <div class="main">
        <?php include("album_ex.html"); ?>
    </div>
    <div class="thumbnail">
        <?php 
        $album_thumbnail = "album.php";
        include($album_thumbnail); 
        ?>
    </div>
    
   
<?php include("footer.html"); ?>
