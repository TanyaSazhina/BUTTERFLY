<?php 
    require 'vendor/connect.php';
    $number = $_GET['number'] * 20;
    $cat = mysqli_query($link, "SELECT * FROM `categories` ORDER BY `id` DESC ");
?>
<!DOCTYPE html>
<html>
<head>
    <title>Классификация</title>
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

<!-- Блок Взаимодействие -->
    <div class="container">
        <div class="include">
            <center><h1>Классификация</h1></center>
            <div class="header__content-inner">
                    <div class="info3">
            <p class="padding"><h3 class="textG">Классификация отряда разработана не окончательно и ранг многих таксонов (даже выше уровня семейства) является порой дискуссионным. В мировой фауне, по разным оценкам, насчитывается от 124 до 200 семейств чешуекрылых, в фауне России — 91.</h3></p>

            <p class="padding"><h3 class="textG">Современные систематики выделяют в отряде чешуекрылых четыре подотряда:
                <ul>
                    <li><p>первичные зубатые моли (Zeugloptera) — в настоящее время представлен одним надсемейством Micropterigoidea, в котором имеется единственное семейство Micropterigidae (около 150 видов);</p></li>
                    <li><p>бесхоботковые (Aglossata) — в настоящее время представлен одним надсемейством Agathiphagoidea с единственным семейством Agathiphagidae (2 вида);</p></li>
                    <li><p>гетеробатмии (Heterobathmiina) — в настоящее время представлен одним надсемейством Heterobathmioidea, в которое включено единственное семейство Heterobathmiidae (3 вида);</p></li>
                    <li><p>хоботковые (Glossata) — самый многочисленный подотряд (более 150 тыс. видов).</p></li>
                </ul>
              
            </h3></p>
            </div>
            <div class="info3">
          
            <p class="padding"><h3 class="textG">Последнюю группу часто называют ночными, что не совсем корректно, так как многие из них ведут дневной образ жизни. Булавоусые бабочки отличаются от разноусых по ряду характерных признаков: форма усиков, механизм крепления крыльев к груди, окраска, форма тела и время наибольшей активности. </h3></p>
            <p class="padding"><h3 class="textG">Для дневных характерны булавовидные усики. Высшие разноусые бабочки, большинство из которых активно в тёмное время суток, имеют нитевидные или перистые усики. Механизм крепления передних и задних крыльев к груди различен — булавоусые бабочки способны складывать крылья «за спиной», в то время как разноусые бабочки оставляют крылья раскрытыми плашмя или складывают их «домиком». </h3></p>
            <p class="padding"><h3 class="textG">Однако существуют и исключения. Известны булавоусые бабочки, находящиеся в покое с распростёртыми крыльями, обладающие толстым брюшком и активные в тёмное время суток и, наоборот, разноусые с яркой окраской, тонкими булавовидными усиками, стройным брюшком, и активные в светлое время суток.</h3></p></div>
            </div>
        </div>
    </div>



<div class="container">
        <div class="include">
            <center><h1><a></a>Семейства бабочек</h1></center>
            <br>
            <div id="categories"> <?php 
         
            $categoriess = mysqli_query($link, "SELECT * FROM `categories`");
            $page = mysqli_num_rows($categoriess)/20;
                $categories = mysqli_query($link, "SELECT * FROM `categories` ORDER BY `id` ASC LIMIT $number, 20");
                while($cat = mysqli_fetch_assoc($categories)){?>
                   <div class="card"><a href="categories-item.php?id=<?=$cat['id']?>" class="categ_a">
                        <img src="img/categories/<?= $cat['img'] ?>" class="categ_img">
                        <h3 class="categ_text"><?= $cat['title'] ?></h3>
                    </a></div>
                <?php
                }
            ?>
        </div>
            <?php if($number>1){?>
            <div class="allNews"><p class="left"><a href="categories.php?number=<?= (($number / 20) - 1) ?>" id="aN">
                                <svg width="78" height="53" viewBox="0 0 78 53" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <circle cx="26.1615" cy="26.8206" r="24.5" transform="rotate(91.5063 26.1615 26.8206)" stroke="#b5a22e" stroke-width="2"/>
                                <path d="M24.7865 26.2926C24.396 26.6832 24.396 27.3163 24.7865 27.7069L31.1505 34.0708C31.541 34.4613 32.1742 34.4613 32.5647 34.0708C32.9552 33.6803 32.9552 33.0471 32.5647 32.6566L26.9078 26.9998L32.5647 21.3429C32.9552 20.9524 32.9552 20.3192 32.5647 19.9287C32.1742 19.5382 31.541 19.5382 31.1505 19.9287L24.7865 26.2926ZM77.9558 25.9998L25.4936 25.9998V27.9998L77.9558 27.9998V25.9998Z" fill="#b5a22e"/>
                                </svg>
            </a></p></div>
            <?php }?>
            <?php if($page >= $number+1){?>
            <div class="allNews"><p class="right"><a href="categories.php?number=<?= (($number / 20) + 1) ?>" id="aN">
                                <svg width="78" height="53" viewBox="0 0 78 53" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <circle r="24.5" transform="matrix(0.0262865 0.999654 0.999654 -0.0262865 51.1615 26.8206)" stroke="#b5a22e" stroke-width="2"/>
                                <path d="M53.1693 27.7069C53.5598 27.3163 53.5598 26.6832 53.1693 26.2926L46.8054 19.9287C46.4148 19.5382 45.7817 19.5382 45.3911 19.9287C45.0006 20.3192 45.0006 20.9524 45.3911 21.3429L51.048 26.9998L45.3911 32.6566C45.0006 33.0471 45.0006 33.6803 45.3911 34.0708C45.7817 34.4613 46.4148 34.4613 46.8054 34.0708L53.1693 27.7069ZM0 27.9998L52.4622 27.9998V25.9998L0 25.9998L0 27.9998Z" fill="#b5a22e"/>
                                 </svg>
            </a></p></div>
            <?php }?>
        </div>
    </div>
    




<!-- блок подписаться -->
<?php include('_massage.php'); ?>


    <!-- подвал -->
    <?php include('_footer.php'); ?>
    
</body>
</html>