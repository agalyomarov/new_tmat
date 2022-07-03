<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="Cache-Control" content="no-cache">
    <link rel="stylesheet" href="{{ asset('css/style2.css') }}">
    <title> Качественный кардшаринг сервер, регистрация: Авторизация </title>
    <link rel="stylesheet" href="{{ asset('css/style1.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style_new.css') }}">
    <link rel="stylesheet" href="{{ asset('css/engine.css') }}">
    <link rel="stylesheet" href="{{ asset('css/desing.css') }}">
    <link href="{{ asset('css/layout.css') }}" rel="stylesheet">
    <link href="{{ asset('css/menu.css') }}" rel="stylesheet">
    <style>
        .cen {
            text-align: left;
        }
    </style>
</head>

<body cz-shortcut-listen="true">
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
            <li><a href="http://ihtier.net/help.php#"><b>Ваш баланс</b></a>
                <ul>
                    <li><a href="http://ihtier.net/balance.php">Пополнить счет</a></li>
                    <li><a href="http://ihtier.net/balance_history.php">История баланса</a></li>
                </ul>
            </li>
            <li><a href="http://ihtier.net/help.php#"><b>Клиентам</b></a>
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
        <script src="{{ asset('/scrimagesipt.js') }}"></script>
    </div>
    <table style="width:100%;" border="0" cellpadding="0" cellspacing="0">
        <tbody>
            <tr>
                <td style="width:100px;" valign="top">
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
                                    <center></center>
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
                                                                <td style="width:5px;height:37px;"><img src="{{ asset('images/_lef_1.gif') }}" width="5px" height="37px" alt="" border="0"></td>
                                                                <td class="lef-tit2"></td>
                                                                <td style="width:5px;height:37px;"><img src="{{ asset('/_lefimages_1.gif') }}" width="5px" height="37px" alt="" border="0"></td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="cen">
                                                    <center>
                                                        <h3>Как настроить шаринг</h3>
                                                    </center><br><br>
                                                    <p><b>
                                                            <font color="blue">1) Для того, чтобы купить выбранный пакет, необходимо пополнить свой баланс. Пополнить можно на любую сумму от 0.01$<br> Помните, чем больше сумма пополнения, тем больше бонусов.</font>
                                                        </b></p><b>
                                                        <font color="blue">
                                                            <br><br>
                                                            <center><img src="{{ asset('images/1.jpg') }}"></center>
                                                            <p><br><br>
                                                                2) Теперь надо перейти к выбору пакета.</p>
                                                            <br><br>
                                                            <center><img src="{{ asset('images/2.jpg') }}"></center>
                                                            <p><br><br>
                                                                3) Надо выбрать необходимый пакет и период его просмотра. После выбора нажать на кнопку "Купить выбранный Вами пакет(ы)"</p>
                                                            <br><br>
                                                            <center><img src="{{ asset('images/3.jpg') }}"></center>
                                                            <p><br><br>
                                                                4) Все вы приобрели подписку. Время активации подписки на сервере до 15 минут. Теперь только осталось настроить тюнер. Переходите на страницу "Получить настройки".</p>
                                                            <br><br>
                                                            <center><img src="{{ asset('images/4.jpg') }}"></center>
                                                            <p><br><br>
                                                                5) Выбирайте Ваш пакет и протокол и нажимайте на кнопку генерировать. Полученные настройки вставляйте в тюнер.</p>
                                                            <br><br>
                                                            <center><img src="{{ asset('images/5.jpg') }}"></center>
                                                        </font>
                                                    </b>
                                                    <p>
                                                    </p>
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
                                <!--raz>>>-->
                                <td style="width:1px;">&nbsp;</td>
                                <td style="width:200px;" valign="top">

                                    <center></center>
                                    <table border="0" cellspacing="0" cellpadding="0" style="width:100%;" id="right">
                                        <tbody>
                                            <tr>
                                                <td>
                                                    &nbsp; </td>
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
    <div style="display: none;"></div>
</body>

</html>
