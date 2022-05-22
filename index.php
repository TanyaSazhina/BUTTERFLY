<?php
require 'vendor/connect.php';
?>

<!DOCTYPE html>
<html>

<head>
    <title>Энциклопедия чешуекрылых</title>
    <link rel="stylesheet" type="text/css" href="style/style.css">
    <script type="text/javascript" src="style/mapdata.js"></script>
    <script type="text/javascript" src="style/worldmap.js"></script>


    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


</head>

<body>
    <!-- Первый экран -->
    <div class="glavnya">
        <header class="header">
            <div class="header__content">
                <div class="container">
                    <div class="header__content-inner">
                        <nav class="doucher">
                            <ul class="topmenu">
                                <li class="li-menu"><a href="index.php">Главная</a></li>

                                <li class="li-menu">Бабочки
                                    <ul class="submenu">
                                        <li>Морфология</li>
                                        <ol>
                                            <li><a href="structure.php">Строение</a></li>
                                            <li><a href="pigments.php">Пигменты и окраска</a></li>
                                        </ol>
                                        <li>Физиология</li>
                                        <ol>
                                            <li><a href="fly.php">Полёт, питание и терморегуляция</a></li>
                                            <li><a href="genetics.php">Генетика и размножение</a></li>
                                            <li><a href="lifecikle.php">Жизненный цикл</a></li>
                                        </ol>
                                        <li><a href="categories.php">Классификация
                                            </a></li>
                                    </ul>
                                </li>

                                <li class="li-menu">Взаимодействие
                                    <ul class="submenu">
                                        <li><a href="nature.php">С природой</a></li>
                                        <li><a href="people.php">С человеком</a></li>
                                        <li><a href="other.php">С другими организмами</a></li>
                                    </ul>
                                </li>

                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </header>

        <!-- видео -->
        <div class="screen__body">
            <video class="video" autoplay muted loop>
                <source src="video/Butterfly - 55973.webm" type="video/webm">
                <source src="video/Butterfly - 55973.mp4" type="video/mp4">
            </video>
        </div>
    </div>

    <!-- Блок описания -->
    <div class="container">
        <div class="header__content-inner">
            <div class="info3">
                <div class="down">
                    <p class="pDown"><a href="#newsscroll" class="n">Новости
                            <svg class="svgDown" width="51" height="78" viewBox="0 0 51 78" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <circle cx="25.5" cy="52.5" r="24.5" stroke="#b5a22e" stroke-width="2" />
                                <path d="M25.2929 55.7047C25.6834 56.0952 26.3166 56.0952 26.7071 55.7047L33.0711 49.3407C33.4616 48.9502 33.4616 48.317 33.0711 47.9265C32.6805 47.536 32.0474 47.536 31.6569 47.9265L26 53.5833L20.3431 47.9265C19.9526 47.536 19.3195 47.536 18.9289 47.9265C18.5384 48.317 18.5384 48.9502 18.9289 49.3407L25.2929 55.7047ZM25 0.997559L25 54.9976H27L27 0.997559L25 0.997559Z" fill="#b5a22e" />
                            </svg></a>
                    </p>
                </div><br><br><br><br>
                <div class="text"></div>
                <p>
                <h3 class="textG"><b>Чешуекрылые</b>, или бабочки — отряд насекомых с полным превращением,
                    наиболее характерная особенность представителей которого — наличие густого покрова хитиновых чешуек (уплощённых волосков)
                    на передних и задних крыльях.</h3>
                </p>
                <div class="statyc">
                    <div class="stG">
                        <center>
                            <div class="st">2251 рода</div>
                        </center>
                    </div>
                    <div class="stG">
                        <center>
                            <div class="st">9617 видов</div>
                        </center>
                    </div>
                    <div class="stG">
                        <center>
                            <div class="st">97 семейств</div>
                        </center>
                    </div>
                </div>
                <p>
                <h3 class="textG">Латинское название отряда, Lepidoptera, происходит от др.-греч. λεπίς, род. п. λεπίδος
                    («чешуя») и πτερόν («крыло»). Такое название отряда связано с тем, что крылья его представителей покрыты
                    чешуйками, представляющими собой видоизменённые щетинки.</h3>
                </p>
                <p>
                <h3 class="textG">Общеупотребительное русское название представителей этого отряда — «бабочка» — восходит к
                    праслав. *babъka (< *baba; «старуха, бабка») и представлениям об этих насекомых, как о душах умерших. И по сей день во многих сёлах и деревнях их называют «бабуля», «бабушка», «бабучка», «бабурка», «бабка».</h3>
                        </p>

            </div>
            <img src="img/babo.jpg" class="img2">
        </div>
    </div>
    </div>

  
    <div class="container">
        <div class="include">
            <center><div class="menu_include">
                    <a href="#newsscroll" class="a_li">Новости</a></li>
                    <a href="#filoginiy" class="a_li">Филогения и эволюция</a>
                    <a href="#location" class="a_li">Места обитания</a>
                    <a href="#fakts" class="a_li">Факты</a>
                    <a href="#redbook" class="a_li">Бабочки красной книги</a>
            </div></center>
            </div>
    </div>

<!-- блок новости -->
<div class="container"><a name="newsscroll"></a>
        <div class="include">
            <center><h1>Новости</h1></center>
            <?php 
                $news = mysqli_query($link, "SELECT * FROM `news` ORDER BY `date` DESC LIMIT 2");
                foreach ($news as $news_item){?>
                  
                  <hr noshade>
                    <div class="news">
                        <div class="header__content-inner">
                            <img src="img/news/<?= $news_item['img'] ?>" class="img_news">
                            <div class="info4">
                                <p><h4><?= $news_item['date'] ?></h4></p>
                         
                                <p><h3 class="textG"><?= $news_item['short_description'] ?></h3></p>
                         
                                <p><a href="news-item.php?id=<?=$news_item['id']?>" class="reading">ЧИТАТЬ</a></p>
                            </div>
                        </div>
                    </div>
                <?php
                }
            ?>

            <hr noshade>
            <div class="allNews"><p class="right"><a href="news.php" id="aN">Все новости</a></p></div>
        </div>
    </div>


<!-- Блок филогения -->
    <div class="container"><a name="filoginiy"></a>
        <div class="include">
 
            <center><h1>Филогения и эволюция</h1></center>
            <div class="header__content-inner">
                <div class="info3">
                    <p><h3 class="textG">Древнейшие ископаемые остатки чешуекрылые найдены в отложениях раннего 
                        юрского периода их возраст составляет около 190 млн лет. Наибольшее развитие 
                        группы совпадает с расцветом цветковых растений в меловой период, когда происходит развитие и становление 
                        чешуекрылых.</h3></p>
                        <p><h3 class="textG">Чешуекрылые в меловом периоде образовали ряд форм. У данных чешуекрылых произошло удлинение ротовых органов, с образованием длинного хоботка, способного всасывать жидкую пищу, что позволило активно питаться нектаром. Продолжительность жизни крылатой стадии увеличивалась, происходило усовершенствование крыльев и полёта, увеличение абсолютных размером. Чешуекрылые также приобрели разнообразную яркую окраску тела и крыльев, на которых стали возникать сложные рисунки.</h3></p>
                        <p><h3 class="textG">Возникновение такой яркой окраски отражает их тесные взаимосвязи с цветковыми растениями.</h3></p>
                        <p><h3 class="textG">Остатки ископаемых бабочек из палеогена представлены находками преимущественно внутри янтаря.</h3></p>
                        <p><h3 class="textG">Самым древним видом ныне живущих булавоусых чешуекрылых является Baronia brevicornis — реликтовый вид, эндемик Мексики. Он характеризуется общими чертами с ископаемым таксоном Praepapilio и считается самым примитивным сохранившихся видом группы Papilionidae.</h3></p>
                </div>
                <img src="img/baboch.jpg" class="img2">
            </div>
        </div>
    </div>

<!-- Блок места обитания -->
    <div class="container"><a name="location"></a>
        <div class="include">

            <center><h1>Места обитания</h1></center>
            <center><div id="map"></div></center>
            <div class="informathion">
                <div class="header__content-inner">
                <div class="info3"> 
                    <p><h3 class="textG">Чешуекрылые широко распространены по всему земному шару. Их распространение совпадает с распространением наземной флоры, преимущественно цветковых растений. Только крайние полярные области, отдельные пустыни и океанические острова, а также высокогорья с вечными снегами не заселены бабочками. Наиболее многочисленны и разнообразны бабочки в тропиках.  </h3></p>
                </div>
                <div class="info3"> 
                        <p><h3 class="textG">В умеренных широтах их видовой состав не так велик. Для общей характеристики расположения ареалов животных, в том числе и чешуекрылых обычно сушу Земли принято разделять на семь биогеографических царств или регионов. На территории шести из них распространены чешуекрылые.</h3></p>
                </div>
                </div>
            </div>
           
            <div class="informathion">
                <div class="header__content-inner">
                    <div class="info3">
                        <p><h3 class="textG"><b>Палеарктическая область</b> — самая обширная из них — протянулась по Северному полушарию, охватив полностью Европу (4500 видов, 400 - дневные), большую часть Азии (с Китаем и Японией, но без южной и юго-восточной части континента), а также Северную Африку. Климат этой области в средней части умеренный, на севере — арктический, а на юге — субтропический. Так как климат здесь меняется по сезонам, бабочки летают в определённые периоды времени (весной, летом или осенью). К настоящему времени описано более 22000 видов бабочек из Палеарктики, причём дневных свыше 1600 видов. </h3></p>
                    </div>
                    <img src="img/1.jpg" class="img2">
                </div>
            </div>
            <div class="informathion">
                <div class="header__content-inner">
                    <div class="info3">
                        <p><h3 class="textG"><b>Неарктическая область</b> простирается от севера Канады и Аляски до субтропиков Флориды и Калифорнии. Климат большей части Неарктики — умеренный. Фауна региона относительно близка к Палеарктике. О бабочках тех видов, которые обитают в обеих этих областях, говорят, что у них голарктическое распространение. В Неарктической области встречаются около 14000 видов бабочек, из них 700 — дневные.</h3></p>
                    </div>
                    
                </div>
            </div>

            <div class="informathion">
                <div class="header__content-inner">
                    <div class="info3">
                        <p><h3 class="textG"><b>Неотропическая область</b> охватывает Мексику, Центральную и Южную Америку. Тут представлены самые разнообразные природные и климатические условия. Наиболее богаты видами удивительных и прекрасных бабочек бескрайние тропические леса бассейна Амазонки. В неотропиках описано около 45 000 видов бабочек. Однако некоторые энтомологи полагают, что здесь обитает более половины видов чешуекрылых планеты.</h3></p>
                    </div>
                    <img src="img/2.jpg" class="img2">
                </div>
            </div>

            <div class="informathion">
                <div class="header__content-inner">
                    <div class="info3">
                          <p><h3 class="textG"><b>Восточную (Индо-Малайскую) область</b> составляют Южная и Юго-Восточная Азия, включая Тайвань, острова Зондские и Филиппинского архипелага. Джунгли занимают здесь около 240 млн гектаров, уступая по площади лишь влажным лесам Южной Америки. В Индо-Малайской области обитают около 4000 видов дневных бабочек и десятки тысяч ночных. Только на Филиппинах известно около 800 видов дневных бабочек.</h3></p>
                    </div>
    
                </div>
            </div>

            <div class="informathion">
                <div class="header__content-inner">
                    <div class="info3">
                        <p><h3 class="textG"><b>Афротропическая (Эфиопская) область</b> — это вся Африка южнее Сахары. В неё включают и остров Мадагаскар, хотя три четверти обитающих на нём бабочек нигде больше не встречаются. По разным данным, Эфиопская область — родина 2500—3000 видов дневных бабочек и нескольких десятков тысяч ночных. На востоке Африки преобладают равнинные, саванные бабочки, приспособившиеся к чередованию сухого и влажного сезонов. В их окраске, как и в окружающем пейзаже, обычны неброские оттенки жёлтого, бурого и красного цветов.</h3></p>
                    </div>
                    <img src="img/3.jpg" class="img2">
                </div>
            </div>

            <div class="informathion">
                <div class="header__content-inner">
                    <div class="info3">
                        <p><h3 class="textG"><b>Австралийская область</b> включает Австралию, Новую Гвинею, Новую Зеландию, Тасманию и бесчисленные прилегающие острова. Бабочки становятся всё разнообразнее и прекраснее по мере приближения к экватору. Только в Новой Гвинее уже описано около 800 видов дневных бабочек, а в Австралии около 400 видов.Интересно, что на отметке 1800—2000 м над уровнем моря в Индо-Малайской, Эфиопской и Неотропической зоогеографических областях встречаются бабочки, обычные для областей умеренного климата Палеарктики и Неарктики, где они обитают на значительно меньших высотах.</h3></p>
                    </div>
                    
                </div>
            </div>


        </div>
    </div>

<!-- блок факты -->
    <div class="container"><a name="fakts"></a>
        <div class="include">
            <center><h1>Факты</h1></center>
            <ul class="fakts">
            <div class="informathion">
                <div class="header__content-inner">
                <div class="info3">  <li class="fakt">Ночная бабочка Тизания Агриппина считается самой крупной бабочкой в мире. Размах ее крыльев достигает более 31 см</li></div>
                <div class="info3"> 
                    <li class="fakt">Самая маленькая в размерах бабочка под названием ацетозия имеет размах крыльев не больше 2 миллиметров</li>
                </div>
                </div>
            </div>
            <div class="informathion">
                <div class="header__content-inner">
                <div class="info3"> 
                    <li class="fakt">Бабочек можно увидеть на всех континентах, за исключением Антарктиды</li>
                </div>
                <div class="info3"> 
                    <li class="fakt">У бабочек нет сердца, зато строение их глаз позволяет им видеть и различать три ключевых цвета – красный, зеленый и желтый</li>
                </div>
                </div>
            </div>  
            </ul>
        </div>
    </div>

    <div class="container swiper-container"><a name="redbook"></a>
        <div class="include">
            <center>
                <h1>Бабочки красной книги</h1>
            </center>
            <div class="swiper">
                <div class="wrapperClass swiper-wrapper">
                    <div class="slideClass swiper-slide">
                        <img src="img/bf1.jpg" class="img_slider">
                        <div class="ad_slider_text">
                            Сёкия исключительная
                        </div>
                    </div>
                    <div class="slideClass swiper-slide">
                        <img src="img/bf2.jpg" class="img_slider">
                        <div class="ad_slider_text">
                        Зефир Тихоокеанский
                        </div>
                    </div>
                    <div class="slideClass swiper-slide">
                        <img src="img/bf3.jpg" class="img_slider">
                        <div class="ad_slider_text">
                        Эребия Киндерманна
                        </div>
                    </div>
                    <div class="slideClass swiper-slide">
                        <img src="img/bf4.jpg" class="img_slider">
                        <div class="ad_slider_text">
                        Голубянка Аргали
                        </div>
                    </div>
                    <div class="slideClass swiper-slide">
                        <img src="img/bf5.jpg" class="img_slider">
                        <div class="ad_slider_text">
                        Мраморная Бабочка
                        </div>
                    </div>
                    <div class="slideClass swiper-slide">
                        <img src="img/bf6.jpg" class="img_slider">
                        <div class="ad_slider_text">
                        Шаус Махаон
                        </div>
                    </div>
                    <div class="slideClass swiper-slide">
                        <img src="img/bf7.jpg" class="img_slider">
                        <div class="ad_slider_text">
                        Кайзер-и-Хинд
                        </div>
                    </div>
                    <div class="slideClass swiper-slide">
                        <img src="img/bf8.jpg" class="img_slider">
                        <div class="ad_slider_text">
                        Зебра длиннокрылая
                        </div>
                    </div>
                    <div class="slideClass swiper-slide">
                        <img src="img/bf9.jpg" class="img_slider">
                        <div class="ad_slider_text">
                        Аполлон обыкновенный
                        </div>
                    </div>
                </div>
                <div class="swiper-button-next">
                    <svg width="51" height="78" viewBox="0 0 51 78" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <circle cx="25.5" cy="52.5" r="24.5" stroke="#b5a22e" stroke-width="2"></circle>
                        <path d="M25.2929 55.7047C25.6834 56.0952 26.3166 56.0952 26.7071 55.7047L33.0711 49.3407C33.4616 48.9502 33.4616 48.317 33.0711 47.9265C32.6805 47.536 32.0474 47.536 31.6569 47.9265L26 53.5833L20.3431 47.9265C19.9526 47.536 19.3195 47.536 18.9289 47.9265C18.5384 48.317 18.5384 48.9502 18.9289 49.3407L25.2929 55.7047ZM25 0.997559L25 54.9976H27L27 0.997559L25 0.997559Z" fill="#b5a22e"></path>
                    </svg>
                </div>
                <div class="swiper-button-prev">
                    <svg width="51" height="78" viewBox="0 0 51 78" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <circle cx="25.5" cy="52.5" r="24.5" stroke="#b5a22e" stroke-width="2"></circle>
                        <path d="M25.2929 55.7047C25.6834 56.0952 26.3166 56.0952 26.7071 55.7047L33.0711 49.3407C33.4616 48.9502 33.4616 48.317 33.0711 47.9265C32.6805 47.536 32.0474 47.536 31.6569 47.9265L26 53.5833L20.3431 47.9265C19.9526 47.536 19.3195 47.536 18.9289 47.9265C18.5384 48.317 18.5384 48.9502 18.9289 49.3407L25.2929 55.7047ZM25 0.997559L25 54.9976H27L27 0.997559L25 0.997559Z" fill="#b5a22e"></path>
                    </svg>
                </div>
            </div>
        </div>
    </div>

    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script>
        var swiper = new Swiper(".swiper", {
            slidesPerView: 5,
            spaceBetween: 40,
            //loop: true,
            allowTouchMove: false,
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
        });
    </script>

    <!-- блок подписаться -->
    <?php include('_massage.php'); ?>


    <!-- подвал -->
    <?php include('_footer.php'); ?>

</body>
</html>