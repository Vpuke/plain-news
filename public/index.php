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
    <link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300|Staatliches&display=swap" rel="stylesheet">
</head>
<body>
<!-- Navigation bar  -->
 <div class="navbar">
     <h2>PLAIN NEWS</h2> 
 </div>

<!-- Calling Sort by date function  -->
    <?php usort($articles, "sortFunction");?>

<!-- Calling foreach loop for articles     -->
    <?php foreach ($articles as $article) :?>

<!-- Main page container for articles         -->
    <div class="article">

<!-- Looping through phone images from array -->

            <?php $contentIMG = $article['contentIMG'] ; ?>
    
                <img src=<?php echo $contentIMG?> class="phone-images" >
    
<!-- Looping through article titles from array    -->
                 <h1><?php echo $article['title'] ?></h1>

<!-- Looping through article content from array -->
                 <p class="article-content"> <?php echo($article['content']); ?></p>
    

<!-- Container + Looping trough array to fetch authors, date and likes, added icons.  -->
        <div class="authorDateLike-container">

                <p><img src="https://cdn2.iconfinder.com/data/icons/education-2-45/48/71-512.png" class="pencil-img">  <?php echo $authors[$article['authorID']]['fullName'] ?></p>
    
                <p><img src="http://cdn.onlinewebfonts.com/svg/img_465817.png" class="calendar-img">  <?php echo $article['publishDate'] ?></p>

                <p><img src="https://upload.wikimedia.org/wikipedia/commons/8/86/A_perfect_SVG_heart.svg" class="likes-img">  <?php echo $article['likeCounter'] ?></p>
        </div>
    </div>
        
        <?php endforeach; ?>
        
</body>
</html>
