<?php
require __DIR__.'/data.php';
require __DIR__.'/functions.php';
?>

<!-- Added/require functions and data to index.php -->

<!DOCTYPE html>

<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Phone news | Plain news</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300|Staatliches&display=swap" rel="stylesheet">
</head>
<body>

    <div class="navbar">
         <h2>PLAIN NEWS</h2> 
    </div>


    <?php usort($articles, "sortFunction");?>

    <?php foreach ($articles as $article) :?>

    <div class="article">

            <?php $contentIMG = $article['contentIMG'] ; ?>
    
                <img src=<?php echo $contentIMG?> class="phoneImages" alt="images of phones" >
    
                 <h1><?php echo $article['title'] ?></h1>

                 <p class="articleContent"> <?php echo($article['content']); ?></p>
    
        <div class="authorDateLikeContainer">

                <p><img src="https://cdn2.iconfinder.com/data/icons/education-2-45/48/71-512.png" class="pencilImage" alt="pencil icon">  <?php echo $authors[$article['authorID']]['fullName'] ?></p>
    
                <p><img src="http://cdn.onlinewebfonts.com/svg/img_465817.png" class="calendarImage" alt="calendar image">  <?php echo $article['publishDate'] ?></p>

                <p><img src="https://upload.wikimedia.org/wikipedia/commons/8/86/A_perfect_SVG_heart.svg" class="likesImage" alt="like image">  <?php echo $article['likeCounter'] ?></p>
        </div>

    </div>
        
    <?php endforeach; ?>
        
</body>
</html>
