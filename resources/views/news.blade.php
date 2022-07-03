<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="Cache-Control" content="no-cache">
    <link rel="stylesheet" href="{{ asset('css/style2.css') }}">
    <title>Качественный кардшаринг сервер, регистрация : Авторизация</title>
    <link rel="stylesheet" href="{{ asset('css/style1.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style_new.css') }}">
    <link rel="stylesheet" href="{{ asset('css/engine.css') }}">
    <link rel="stylesheet" href="{{ asset('css/desing.css') }}">
    <link href="{{ asset('css/layout.css') }}" rel="stylesheet">
    <link href="{{ asset('css/menu.css') }}" rel="stylesheet">
    <style>
        div.text {
            text-align: left;
        }
    </style>
</head>

<body oncopy="return false;" cz-shortcut-listen="true">
    <table border="0" cellspacing="0" cellpadding="0" style="width:100%;">
        <tbody>
            <tr>
                <td style="width:330px;" class="log">
                </td>
                <td style="width:30px;"></td>
            </tr>
        </tbody>
    </table>
    <div style="position: absolute; width: 900px; height: 47px; z-index: 3; left: 85px; top: -40px" id="layer3">
        <ul id="nav">
            <li><a href="http://ihtier.net/index.php?#"><b>Ваш баланс</b></a>
                <ul>
                    <li><a href="http://ihtier.net/balance.php">Пополнить счет</a></li>
                    <li><a href="http://ihtier.net/balance_history.php">История баланса</a></li>
                </ul>
            </li>
            <li><a href="http://ihtier.net/index.php?#"><b>Клиентам</b></a>
                <ul>
                    <li><a href="http://ihtier.net/index.php?mode=idx">Главная</a></li>
                    <li><a href="http://ihtier.net/profile.php">Ваш профиль</a></li>
                    <li><a href="http://ihtier.net/server_load.php">Выбор сервера</a></li>
                    <li><a href="http://ihtier.net/packets.php">Купить пакет</a></li>
                    <li><a href="http://ihtier.net/mypackets.php">Остановить пакет</a></li>
                    <li><a href="http://ihtier.net/index.php?mode=tuner_setup">Получить настройки</a></li>
                    <li><a href="http://ihtier.net/ports.php">Таблица портов</a></li>
                </ul>
            </li>
            <li><a href="http://ihtier.net/dealer.php"><b>Диллерам</b></a>
            </li>
            <li><a href="http://ihtier.net/news.php"><b>Новости</b></a></li>
            <li><a href="http://ihtier.net/tex_poderjka.php"><b>Тех подержка</b></a></li>
            <li><a href="http://ihtier.net/help.php"><b>Помощь</b></a></li>
            <li><a href="http://ihtier.net/rules.php"><b>Правила</b></a></li>
            <li><a href="http://ihtier.net/logout.php"><b>Выход</b></a></li>
        </ul>
        <script src="./Качественный кардшаринг сервер, регистрация _ Авторизация_files/script.js"></script>
    </div>
    <table style="width:100%;" border="0" cellpadding="0" cellspacing="0">
        <tbody>
            <tr>
                <td style="width:100px;" valign="top">
                    <!--left-->
                    <!--block left-->
                    <table border="0" cellspacing="0" cellpadding="0" style="width:100%;">
                        <tbody>
                            <tr>
                                <td height="1px">
                                    <table border="0" cellspacing="0" cellpadding="0" style="width:50%;">
                                        <tbody>
                                            <tr>
                                                <td style="width:5px;height:5px;"></td>
                                                <td style="border-bottom:7px color:white;height:1px;font-size:1px;"></td>
                                                <td style="width:5px;height:5px;"></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <!--/block left-->
                    <center></center>
                    <table border="0" cellspacing="0" cellpadding="0" style="width:50%;">
                        <tbody>
                            <tr>
                                <td height="5px">
                                    <table border="0" cellspacing="0" cellpadding="0" style="width:100%;">
                                        <tbody>
                                            <tr>
                                                <td style="border-bottom:1px color:white;height:5px;font-size:4px;"></td>
                                                <td style="width:5px;height:5px;"></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </td>
                <td style="width:10px;">&nbsp;</td>
                <td valign="top">
                    <table border="0" cellspacing="0" cellpadding="0" style="width:100%;" id="main">
                        <tbody>
                            <tr>
                                <td valign="top">
                                    <table border="0" cellspacing="0" cellpadding="0" style="width:100%;height:30px;">
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <div class="block_w bnavi_w">
                                                        <div class="dtop">
                                                            <div class="dbtm">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td height="37px">
                                                    <table border="0" cellspacing="0" cellpadding="0" style="width:100%;">
                                                        <tbody>
                                                            <tr>
                                                                <td style="width:5px;height:37px;">
                                                                    <img src="{{ asset('images/_lef_1.gif') }}" width="5px" height="37px" alt="" border="0">
                                                                </td>
                                                                <td class="lef-tit2">

                                                                </td>
                                                                <td style="width:5px;height:37px;">
                                                                    <img src="{{ asset('images/_lef_1.gif') }}" width="5px" height="37px" alt="" border="0">
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="cen">
                                                    <h3>Новости сервера</h3>
                                                    <div class="announcement">
                                                        <div class="header">
                                                            <div class="date">
                                                                <b>13.06.2022</b>
                                                            </div>
                                                            <div class="clear">
                                                            </div>
                                                        </div>
                                                        <div class="text">
                                                            lorem
                                                        </div>
                                                    </div>
                                                    <div class="announcement">
                                                        <div class="header">
                                                            <div class="date">
                                                                <b>13.06.2022</b>
                                                            </div>
                                                            <div class="clear">
                                                            </div>
                                                        </div>
                                                        <div class="text">
                                                            <font color="blue">
                                                                <strong>
                                                                    <font size="2"> На сайте запущено новый пакет Big Bang TV 52E - (exclusive) работает все каналы там стабильно и без проблем, работает на все сервера! для таго чтобы работало все каналы нужно с начала удалить эти каналы если у
                                                                        вас
                                                                        ранее было сканировано, потом сканировать заного эти частоты который внизу указано: <br><br>
                                                                        Спутник Monacosat 52E <br>
                                                                        1. 10845 H 30000 <br>
                                                                        2. 10887 H 30000 <br>
                                                                        3. 12226 V 28000 <br>
                                                                        4. 12341 V 28000 <br>
                                                                        5. 12380 V 28000 <br>
                                                                    </font>
                                                                </strong>
                                                            </font>
                                                        </div>
                                                    </div>
                                                    <div class="announcement">
                                                        <div class="header">
                                                            <div class="date">
                                                                <b>12.06.2022</b>
                                                            </div>
                                                            <div class="clear">
                                                            </div>
                                                        </div>
                                                        <div class="text">
                                                            <font color="blue"><strong>
                                                                    <font size="2"> Внимание! Телекарта 85 меняет спутник с 85 на 80 градус, подписки телекарта85 автоматически будет работать на 80 градус, работает все каналы через наши сервера! менять ничего не нужно в настройки шары, только
                                                                        антену
                                                                        перенастройте на 80 градус всё, вот ниже частоты который работает: <br><br>
                                                                        Спутник Express AM2 <br>
                                                                        1. 10981 V 44950 <br>
                                                                        2. 11044 V 45000 <br>
                                                                        3. 11106 V 45000 <br>
                                                                        4. 11106 H 45000 <br>
                                                                        5. 11169 V 35008 <br>
                                                                        6. 11481 H 44999 <br>
                                                                        7. 11544 V 44999 <br>
                                                                        8. 11544 H 44999 <br>
                                                                        9. 11606 V 44998 <br>
                                                                        10. 11606 H 45000<br>
                                                                        11. 11659 V 30001<br>
                                                                    </font>
                                                                </strong></font>
                                                        </div>
                                                    </div>
                                                    <div class="announcement">
                                                        <div class="header">
                                                            <div class="date">
                                                                <b>27.04.2022</b>
                                                            </div>
                                                            <div class="clear">
                                                            </div>
                                                        </div>
                                                        <div class="text">
                                                            <font color="blue"><strong>
                                                                    <font size="2"> На сайте добавлено новые сервера для Туркмении, те у каго есть свой личный домен могут привязать на своем домене один ip и использовать все эти сервера тоже. <br><br>
                                                                        сервер 9 - cr9.jasmit.ru<br>
                                                                        порт newcamd <br>
                                                                        260 - нтв56 <br>
                                                                        204 - клубника 13 <br>
                                                                        208 - полсат 13 <br>
                                                                        209 - ns+ 13 <br>
                                                                        210 - ns+ 13 <br>
                                                                        220 - bigbang52 | telekarta85 <br>
                                                                        порт cccam - 222<br><br>
                                                                        сервер 32 - cr32.jasmit.ru<br>
                                                                        порт newcamd <br>
                                                                        460 - нтв56 <br>
                                                                        404 - клубника 13 <br>
                                                                        408 - полсат 13 <br>
                                                                        409 - ns+ 13 <br>
                                                                        410 - ns+ 13 <br>
                                                                        420 - bigbang52 | Telekarta85 <br>
                                                                        порт cccam - 444<br><br>
                                                                        сервер 33 - cr33.jasmit.ru<br>
                                                                        порт newcamd <br>
                                                                        660 - нтв56 <br>
                                                                        604 - клубника 13 <br>
                                                                        608 - полсат 13 <br>
                                                                        609 - ns+ 13 <br>
                                                                        610 - ns+ 13 <br>
                                                                        620 - bigbang52 | Telekarta85 <br>
                                                                        порт cccam - 666<br><br>
                                                                        сервер 34 - cr34.jasmit.ru<br>
                                                                        порт newcamd <br>
                                                                        860 - нтв56 <br>
                                                                        804 - клубника 13 <br>
                                                                        808 - полсат 13 <br>
                                                                        809 - ns+ 13 <br>
                                                                        810 - ns+ 13 <br>
                                                                        820 - bigbang52 | Telekarta85 <br>
                                                                        порт cccam - 888<br><br>
                                                                        сервер 35 - cr35.jasmit.ru<br>
                                                                        порт newcamd <br>
                                                                        960 - нтв56 <br>
                                                                        904 - клубника 13 <br>
                                                                        908 - полсат 13 <br>
                                                                        909 - ns+ 13 <br>
                                                                        910 - ns+ 13 <br>
                                                                        920 - bigbang52 | Telekarta85 <br>
                                                                        порт cccam - 999<br><br>
                                                                        сервер 36 - cr36.jasmit.ru<br>
                                                                        порт newcamd <br>
                                                                        550 - нтв56 <br>
                                                                        504 - клубника 13 <br>
                                                                        508 - полсат 13 <br>
                                                                        509 - ns+ 13 <br>
                                                                        510 - ns+ 13 <br>
                                                                        520 - bigbang52 | Telekarta85 <br>
                                                                        порт cccam - 555<br><br>
                                                                        вот данные сервера который работает в Туркмении !!!
                                                                        смотрите нагрузки сервера в разделе выбор сервера, клиентов добавьте на сервер с меньшей % нагрузки!</font>
                                                                </strong></font>
                                                        </div>
                                                    </div>
                                                    <div class="announcement">
                                                        <div class="header">
                                                            <div class="date">
                                                                <b>06.03.2022</b>
                                                            </div>
                                                            <div class="clear">
                                                            </div>
                                                        </div>
                                                        <div class="text">
                                                            <font color="black"><strong>
                                                                    <font size="2"> Внимание те у каго перестало работать в Украине прошу прописать в тюнер ip в место домена и заработает все </font>
                                                                </strong></font>
                                                        </div>
                                                    </div>
                                                    <div class="announcement">
                                                        <div class="header">
                                                            <div class="date">
                                                                <b>06.03.2022</b>
                                                            </div>
                                                            <div class="clear">
                                                            </div>
                                                        </div>
                                                        <div class="text">
                                                            <font color="blue"><strong>
                                                                    <font size="2"> Срочное новость из за Санкции те у каго карты VISA и MASTERCARD с 10.03.2022 будет не работать система оплаты, за ранее паполните свой баланс! Те кто не может паполнить через карт переведите деньги через
                                                                        вебмани
                                                                        кошелёк! </font>
                                                                </strong></font>
                                                        </div>
                                                    </div>
                                                    <div class="announcement">
                                                        <div class="header">
                                                            <div class="date">
                                                                <b>03.03.2022</b>
                                                            </div>
                                                            <div class="clear">
                                                            </div>
                                                        </div>
                                                        <div class="text">
                                                            <font color="black"><strong>
                                                                    <font size="2"> Внимание мы перешли в дата центр Франции OVH сервера теперь все сервера защищены от ддос атак! изменилось ip адреса на сервера 1 2 3 5 6 7 17 18 19 20 те у каго прописано наш домен ничего нужно менять в тюнер
                                                                        (
                                                                        ресивер ) теперь все сервера вновь работает в Украине спс за понимание.</font>
                                                                </strong></font>
                                                        </div>
                                                    </div>
                                                    <div class="announcement">
                                                        <div class="header">
                                                            <div class="date">
                                                                <b>20.02.2022</b>
                                                            </div>
                                                            <div class="clear">
                                                            </div>
                                                        </div>
                                                        <div class="text">
                                                            <font color="green"><strong>
                                                                    <font size="2"> Уважаемые пользователи!
                                                                        10.02.2022 Провайдер НТВ+ со спутников 36 и 56 градуса внес изменения в раскодировку каналов в результате у многих тюнеров пропал возможность просмотра без обновления программного обеспечения.
                                                                        На серверах сделаны все изменения и просмотр восстановлен. Работает и на newcamd и на cccam протоколах. Пользователям ресиверов с установленными эмуляторами Oscam и Wicard для возобновления просмотра необходимо в своем ресивере
                                                                        обновить настройки просмотра с биллинга (обновить конфиги). Достаточно на новых версиях эмуляторов добавить в настройки конфигов в reader НТВ запись:
                                                                        для wicardd: force_crypted_cw = 1
                                                                        для oscam: disablecrccws = 1 либо dontcorrectcwchecksum = 1
                                                                        --------------------------------------------------------------------------- Генератор конфигурации wicradd находится в разделе настройка тюнера на сайте. Там же разные сборки викард, оскам.
                                                                        ---------------------------------------------------------------------------
                                                                        происходит отключение проверки контрольной суммы ключа. Skip CWs checksum test.
                                                                        примеры конфигов в разделе настройки тюнера на сайте.
                                                                        Но, если ваш ресивер имеет встроенный EMU и настройки все вносятся с пульта, то на таких ресиверах просмотр перестал быть возможен. Исключение будет только в случае, если разработчик ресивера выпустит новое ПО с исправлениями
                                                                        или у вас ресивер, на который уже есть такое ПО(работает и на старых satinterral и u2c). К таким ресиверам можно отнести Openbox S3, S3 Mini, S3 Mini II, S3 CI, S3 CI II. Скачать последние версии прошивок можно на форуме
                                                                        поддержки вашего ресивера. Вопросы по выбору новых ресиверов просим вас не задавать. Рекомендовано любой тюнер с поддержкой wicardd эмулятора.
                                                                        Список нелинуксовых тюнеров открывающих нтв: mmstar,starsat,hdbox,ibox 3030,sat-integral 1218-1258,1329,tiger 4150,u2c b6 (1.6.3.5 прошивка 2019г),uclan denys, ustym 4k,SkyPrime M5б,GI HD Slim
                                                                        все с процессором GX6605S
                                                                        openbox sx1,openbox s3 hd (mini/micro),openbox s2 hd (mini/micro)
                                                                        ------------------------------------------------------------------
                                                                        Openbox AS4K CI Pro+ Оскам ymod emu добавляем dontcorrectcwchecksum = 1
                                                                    </font>
                                                                </strong></font>
                                                        </div>
                                                    </div>
                                                    <div class="announcement">
                                                        <div class="header">
                                                            <div class="date">
                                                                <b>27.01.2021</b>
                                                            </div>
                                                            <div class="clear">
                                                            </div>
                                                        </div>
                                                        <div class="text">
                                                            <font color="blue"><strong>
                                                                    <font size="2"> На сайте запущена новый сервер 25 для Таджикистана тоже работает без блокировки! просьба новых клиентов добавьте на нем!<br><br>
                                                                        сервер 25 - cr25.mir-3d.net<br>
                                                                        порт newcamd - 550,504,508,510,513,520<br>
                                                                        порт cccam - 555<br><br>
                                                                    </font>
                                                                </strong></font>
                                                        </div>
                                                    </div>
                                                    <div class="announcement">
                                                        <div class="header">
                                                            <div class="date">
                                                                <b>30.08.2020</b>
                                                            </div>
                                                            <div class="clear">
                                                            </div>
                                                        </div>
                                                        <div class="text">
                                                            <font color="blue"><strong>
                                                                    <font size="2"> На сайте запущена новый сервер 24 для Таджикистана просьба часть клиентов с 16 сервера переведите на 24 сервер чтобы снизить нагрузку на 16 сервере!<br><br>
                                                                        сервер 24 - cr24.mir-3d.net<br>
                                                                        порт newcamd - 960,904,908,910,913,920<br>
                                                                        порт cccam - 999<br><br>
                                                                    </font>
                                                                </strong></font>
                                                        </div>
                                                    </div>
                                                    <div class="announcement">
                                                        <div class="header">
                                                            <div class="date">
                                                                <b>19.08.2019</b>
                                                            </div>
                                                            <div class="clear">
                                                            </div>
                                                        </div>
                                                        <div class="text">
                                                            <font color="blue"><strong>
                                                                    <font size="2"> Добавлено 9 - новых серверов 22 23 24 25 26 27 28 29 30 работает на всех странах, клиентов переведите на эти сервера выбирайте сервер с меньше нагрузки %.</font>
                                                                </strong></font>
                                                        </div>
                                                    </div>
                                                    <div class="announcement">
                                                        <div class="header">
                                                            <div class="date">
                                                                <b>13.08.2019</b>
                                                            </div>
                                                            <div class="clear">
                                                            </div>
                                                        </div>
                                                        <div class="text">
                                                            <font color="green"><strong>
                                                                    <font size="2"> Уважамые клиенты! По многочисленным просьбам клиентов запущено в тестивом режиме пакет Setanta Sports 31E работает на вип и вип восток и отдельно, всем приятного просмотра.</font>
                                                                </strong></font>
                                                        </div>
                                                    </div>
                                                    <div class="announcement">
                                                        <div class="header">
                                                            <div class="date">
                                                                <b>09.06.2019</b>
                                                            </div>
                                                            <div class="clear">
                                                            </div>
                                                        </div>
                                                        <div class="text">
                                                            <font color="green"><strong>
                                                                    <font size="2"> Уважамые клиенты! Внимание! мы перешли сегодня на новый сервер больше не кто не может заблокировать! сервера который работает в таджикистане 24 часа!<br><br>
                                                                        сервер 4 - cr4.mir-3d.net<br>
                                                                        порт newcamd - 460,404,408,410,420<br>
                                                                        порт cccam - 444<br><br>
                                                                        сервер 13 - cr13.mir-3d.net<br>
                                                                        порт newcamd - 660,604,608,610,620<br>
                                                                        порт cccam - 666<br><br>
                                                                        сервер 16 - tj16.mir-3d.net<br>
                                                                        порт newcamd - 560,704,708,710,720<br>
                                                                        порт сссам - 777<br><br>
                                                                        вот данные сервера сервера который работает в таджикистане без блокировки!!!
                                                                        смотрите нагрузки сервера в разделе выбор сервера, клиентов добавьте на сервер с меньшей % нагрузки!</font>
                                                                </strong></font>
                                                        </div>
                                                    </div>
                                                    <div class="announcement">
                                                        <div class="header">
                                                            <div class="date">
                                                                <b>29.04.2019</b>
                                                            </div>
                                                            <div class="clear">
                                                            </div>
                                                        </div>
                                                        <div class="text">
                                                            <font color="blue"><strong>
                                                                    <font size="2"> Уважамые клиенты! В пакете Телекарта 85Е появилось канал CTC kids частота 11760 H 28800 и ано у нас работает! всем приятного просмотра. </font>
                                                                </strong></font>
                                                        </div>
                                                    </div>
                                                    <div class="announcement">
                                                        <div class="header">
                                                            <div class="date">
                                                                <b>27.04.2019</b>
                                                            </div>
                                                            <div class="clear">
                                                            </div>
                                                        </div>
                                                        <div class="text">
                                                            <font color="green"><strong>
                                                                    <font size="2"> Уважамые клиенты! В связи с отключением с 19 апреля кодировки Conax на картах Xtra tv, пакет Xtra tv - каналы Футбол 1 - 2 больше работать не будет, приносим свои извинения за неудобства! у каго есть подписка
                                                                        на
                                                                        пакет Xtra tv остановите этот пакет и остаток дней вернётся на ваш баланс, и потом купите другой пакет который вам нужен. </font>
                                                                </strong></font>
                                                        </div>
                                                    </div>
                                                    <div class="announcement">
                                                        <div class="header">
                                                            <div class="date">
                                                                <b>23.04.2019</b>
                                                            </div>
                                                            <div class="clear">
                                                            </div>
                                                        </div>
                                                        <div class="text">
                                                            <font color="green"><strong>
                                                                    <font size="2"> Уважамые клиенты! Добавлены новые пакеты Sky Germany 19E - Sky Uk 28E всем приятного просмотра. </font>
                                                                </strong></font>
                                                        </div>
                                                    </div>
                                                    <div class="announcement">
                                                        <div class="header">
                                                            <div class="date">
                                                                <b>08.02.2019</b>
                                                            </div>
                                                            <div class="clear">
                                                            </div>
                                                        </div>
                                                        <div class="text">
                                                            <font color="blue"><strong>
                                                                    <font size="2"> Внимание! На сайте добавлено новая функция, Вход запрещено! Когда добавите клиентов разделе диллерам поставьте галочку на Вход запрещен потом клиент не сможет зайти на сайт! те кто уже добавили клиентов,
                                                                        просьба
                                                                        зайти в разделе диллерам и редактировать каждого клиента и поставьте галочку на ВХОД ЗАПРЕЩЁН И ПОТОМ СОХРАНИТЬ! это для вашей же безопасности!!! </font>
                                                                </strong></font>
                                                        </div>
                                                    </div>
                                                    <div class="announcement">
                                                        <div class="header">
                                                            <div class="date">
                                                                <b>01.02.2019</b>
                                                            </div>
                                                            <div class="clear">
                                                            </div>
                                                        </div>
                                                        <div class="text">
                                                            <font color="green"><strong>
                                                                    <font size="2"> Внимательно читайте что написано это важно!!! На сайте были добавлены изменение! Теперь не кто больше не сможет использовать 1 логина на 2 или более тюнеров! Те у каго перестало работать каналы или каждый 2
                                                                        минуты
                                                                        перестаёт работать вы в бане!!! мои соболезнование, вы были мошеником! Теперь те у каго перестало работать или каждый 2 минуты перестаёт работать смените пароль и пропишите данные на ОДНОМ тюнере и все заработает!!! И ИЩЕ НЕ
                                                                        ПИШИТЕ АДМИНУ ЧТО ВЫ ЭТО НЕ ДАЛАЛИ, ЭТО МОЖЕТ СДЕЛАТЬ ВЫ САМИ ЛИБО ВАШ КЛИЕНТ! ОПРАВДАНИЕ БЕЗ ПОЛЕЗНЫ! Система автоматически блокирует 2 тюнера!!! СОБЛЮДАЙТЕ ПРАВИЛА САЙТА 1 ЛОГИН 1 ТЮНЕР!!! Если соблюдайте правила сайта, то
                                                                        сервера будут работать очень стабильно!<font></font>
                                                                    </font>
                                                                </strong>
                                                                <font size="2">
                                                                </font>
                                                            </font>
                                                        </div>
                                                        <font color="green">
                                                            <font size="2">
                                                            </font>
                                                        </font>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="height: 5px;">
                                                    <table style="width: 100%; height: 5px;" border="0" cellpadding="0" cellspacing="0">
                                                        <tbody>
                                                            <tr>
                                                                <td></td>
                                                            </tr>
                                                            <tr>
                                                                <td style="width: 5px;"></td>
                                                                <td style="border-bottom: 1px color:white;">
                                                                    <div style="width: 1px; height: 1px;" align="center">
                                                                        <spacer type="block" height="1" width="1"></spacer>
                                                                    </div>
                                                                </td>
                                                                <td style="width: 5px;"></td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </td>
                                <td style="width:1px;">&nbsp;</td>
                                <td style="width:200px;" valign="top">
                                    <center></center>
                                    <table border="0" cellspacing="0" cellpadding="0" style="width:100%;" id="right">
                                        <tbody>
                                            <tr>
                                                <td>
                                                    &nbsp;
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="height:5px;">
                                                    <table border="0" cellspacing="0" cellpadding="0" style="width:100%;height:5px;">
                                                        <tbody>
                                                            <tr>
                                                                <td style="width:5px;"></td>
                                                                <td style="width:5px;"></td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </td>
            </tr>
            <tr>
            </tr>
        </tbody>
    </table>
</body>

</html>
