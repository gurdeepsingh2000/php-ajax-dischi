<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <title>Document</title>
</head>
<body>
   
<?php 
    
    require_once __DIR__ . "/../db/database.php";
    
?>
<header>
    <div class="container-logo">
        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/7/74/Spotify_App_Logo.svg/2048px-Spotify_App_Logo.svg.png" alt="spotify-logo">
    </div>
</header>

<main>
    <section class = 'disks-container'>
            <?php 
                foreach ($disks as $diskInfo){
            ?>
      
            <div class="card-disk">
                <div class="card-inner">
                    <img src= "<?php echo "{$diskInfo['poster']}"?>">
                     <div class='inner-txt'><?php echo "{$diskInfo['title']}"?></div>
                    <div class='inner-subtxt'><?php echo "{$diskInfo['author']}"?></div>
                    <div class='inner-subtxt'><?php echo "{$diskInfo['year']}"?></div>
                </div>
                    
            </div>
        <?php }; ?>

</section>



</main>


</body>
</html>