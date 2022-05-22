<?php 
    require 'vendor/connect.php';
    $id = $_GET['id'];
    $sql = 'SELECT * FROM `news` WHERE id=?';
    $stmt = $link->prepare($sql); // создали команду
    $stmt->bind_param("i", $id); // привязали переменную $id к запросу
    $stmt->execute(); // выполнили запрос
    $result = $stmt->get_result(); // получили результат
    $row = $result->fetch_assoc(); // выбрали первую строку результата



    $id = $_GET['id'] ?? $_GET['id'] ?? 0;
    $cat_arr = mysqli_query($link, "SELECT * FROM `news` WHERE `id` =" . $id);
    $member = mysqli_fetch_assoc($cat_arr);
    $next_id = $member['id'] + 1;
    $prev_id = $member['id'] - 1;
    $next = mysqli_query($link, "SELECT * FROM `news` WHERE `id` =" . $next_id);
        if ($next) {
            $next = 1;
        } else {
            $next = 0;
        };
        $prev = mysqli_query($link, "SELECT * FROM `news` WHERE `id` =" . $prev_id);
        if ($prev) {
            $prev = 1;
        } else {
            $prev = 0;
        };
        ?>

<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="style/style.css">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title><?=$row['title']?></title>
</head>
<body>
    
<!-- меню -->
<?php include('_header.php'); ?>


    <div class="container">
        <div class="include">
            <center><h1><?=$row['title']?></h1></center>
        </div>
    </div>

    <div class="container">
        <div class="include">
            <div class="informathion-block">
                <div class="header__content-inner">
                    <div class="info3">  
                        <p><h4><?= $row['date'] ?></h4></p>
                        <br />
                        <p class="padding"><h3 class="textG"><?= $row['description'] ?></h3></p>
                    </div>
                    <img src="img/news/big/<?= $row['big_img'] ?>" class="img2">
                </div>
            </div>
        </div>
    </div>
    

    <br><br><br><br>
    <div class="container">
        <div class="header__content-inner">
            <div class="info3"> 
            <?php if ($prev) { ?>
                        <p class="left"> 
                            <a href="news-item.php?id=<?= $prev_id ?>">
                                <svg width="78" height="53" viewBox="0 0 78 53" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <circle cx="26.1615" cy="26.8206" r="24.5" transform="rotate(91.5063 26.1615 26.8206)" stroke="#b5a22e" stroke-width="2"/>
                                <path d="M24.7865 26.2926C24.396 26.6832 24.396 27.3163 24.7865 27.7069L31.1505 34.0708C31.541 34.4613 32.1742 34.4613 32.5647 34.0708C32.9552 33.6803 32.9552 33.0471 32.5647 32.6566L26.9078 26.9998L32.5647 21.3429C32.9552 20.9524 32.9552 20.3192 32.5647 19.9287C32.1742 19.5382 31.541 19.5382 31.1505 19.9287L24.7865 26.2926ZM77.9558 25.9998L25.4936 25.9998V27.9998L77.9558 27.9998V25.9998Z" fill="#b5a22e"/>
                                </svg>
                               
                            </a>
                        </p>
             
            </div> 
            <?php } if ($next) { ?>
                        <p class="right">
                            <a href="news-item.php?id=<?= $next_id ?>">
                                <svg width="78" height="53" viewBox="0 0 78 53" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <circle r="24.5" transform="matrix(0.0262865 0.999654 0.999654 -0.0262865 51.1615 26.8206)" stroke="#b5a22e" stroke-width="2"/>
                                <path d="M53.1693 27.7069C53.5598 27.3163 53.5598 26.6832 53.1693 26.2926L46.8054 19.9287C46.4148 19.5382 45.7817 19.5382 45.3911 19.9287C45.0006 20.3192 45.0006 20.9524 45.3911 21.3429L51.048 26.9998L45.3911 32.6566C45.0006 33.0471 45.0006 33.6803 45.3911 34.0708C45.7817 34.4613 46.4148 34.4613 46.8054 34.0708L53.1693 27.7069ZM0 27.9998L52.4622 27.9998V25.9998L0 25.9998L0 27.9998Z" fill="#b5a22e"/>
                                </svg>
                            </a>
                        </p>
                <?php } ?>
        </div>
    </div>
    </div>
<!-- блок подписаться -->
<?php include('_massage.php'); ?>


    <!-- подвал -->
    <?php include('_footer.php'); ?>
</body>
</html>