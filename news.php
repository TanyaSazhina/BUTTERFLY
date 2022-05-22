<?php 
    require 'vendor/connect.php';
    $news = mysqli_query($link, "SELECT * FROM `news` ORDER BY `date` DESC ");
?>

<!DOCTYPE html>
<html>
<head>
	<title>Взаимодействие с другими организмами</title>
	<link rel="stylesheet" type="text/css" href="style/style.css">
    <script type="text/javascript" src="style/mapdata.js"></script>
    <script type="text/javascript" src="style/worldmap.js"></script>
    <script src="style/style.css"></script>


    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    

</head>
<body>

<!-- меню -->
<?php include('_header.php'); ?>

<!-- блок новости -->
<div class="container">
        <div class="include">
            <center><h1><a name="newsscroll"></a>Новости</h1></center>
            <?php foreach ($news as $news_item) {?>
                    
                    <hr noshade>
                    <div class="news">
                        <div class="header__content-inner">
                            <img src="img/news/<?= $news_item['img'] ?>" class="img_news">
                            <div class="info4">
                                <p><h4><?= $news_item['date'] ?></h4></p>
                                <br />
                                <p><h3 class="textG"><?= $news_item['short_description'] ?></h3></p>
                                <br />
                                <p><a href="news-item.php?id=<?=$news_item['id']?>" class="reading">ЧИТАТЬ</a></p>
                            </div>
                        </div>
                    </div>
                <?php
                }
            ?>

            <hr noshade>
        </div>
    </div>



<!-- блок подписаться -->
<?php include('_massage.php'); ?>


    <!-- подвал -->
    <?php include('_footer.php'); ?>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</body>
</html>