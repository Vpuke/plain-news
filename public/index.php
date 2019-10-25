<?php
require __DIR__.'/data.php';
require __DIR__.'/functions.php';
?>

<!-- Added functions and data to index.php -->

<!DOCTYPE html>

<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Phone news | Plain news</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
</head>
<body>
    
<div class="article">

    <?php usort($articles, "sortFunction");?>

        <?php foreach ($articles as $article) :?>

            <?php $contentIMG = $article['contentIMG'] ; ?>
    
                <img src=<?php echo $contentIMG?> class="phone-images" >
    
                 <h1><?php echo $article['title'] ?></h1>

                  <?php echo $article['content']; ?>
    
                  <h3><?php echo $authors[$article['authorID']]['fullName'] ?></h3>
    
                <p> <?php echo $article['publishDate'] ?></p>

             <p><?php echo $article['likeCounter'] ?></p>
    
         <?php endforeach; ?>
</div>
    
</body>
</html>