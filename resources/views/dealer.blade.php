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
</head>

<body cz-shortcut-listen="true">
    @include('includes.navbar')

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
                                                                <td style="width:5px;height:37px;"><img src="{{ asset('images/_lef_1.gif') }}" width="5px" height="37px" alt="" border="0"></td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="cen">
                                                    <script src="{{ asset('js/vvod.js') }}" type="text/javascript"></script>
                                                    <script type="text/JavaScript" language="JavaScript" src="{{ asset('js//checkall.js') }}"></script>
                                                    <form action="http://ihtier.net/dealer.php?" method="post">
                                                        <center>
                                                            <b>
                                                                <font color="blue">На этой странице Вы можете самостоятельно добавить своих клиентов,<br> стать нашим дилером и получить скидку:<br>10% от 50 клиентов<br>20% от 100 клиентов<br>30% от 150 клиентов<br>40% от 200 клиентов<br>50% от 300
                                                                    клиентов</font>
                                                            </b>
                                                        </center>
                                                        <center>
                                                            <h3>Новый пользователь</h3>
                                                            <table>
                                                                <tbody>
                                                                    <tr>
                                                                        <td><strong>Логин</strong></td>
                                                                        <td>
                                                                            <input type="text" class="input_200" maxlength="15" name="login" onkeyup="return proverka_logina(this);" value="">
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td><strong>Пароль</strong></td>
                                                                        <td>
                                                                            <input type="text" class="input_200" maxlength="15" name="password_new">
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td><strong>Пароль (повторно)</strong></td>
                                                                        <td>
                                                                            <input type="text" class="input_200" maxlength="15" name="password_confirm">
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td><strong>Эл. почта<font color="red"> *</font> </strong></td>
                                                                        <td>
                                                                            <input type="text" class="input_200" maxlength="30" name="email" value="">
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td><strong>Вход запрещен<font color="red"> **</font></strong></td>
                                                                        <td>
                                                                            <input type="checkbox" name="disabled" value="1">
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td><strong>Номер сервера</strong></td>
                                                                        <td>
                                                                            <select name="server_n">
                                                                                <option value="1">1. Франция - ns1.ihtier.net</option>
                                                                                <option value="2">2. Франция - сервер доступен дилерам </option>
                                                                                <option value="3">3. Франция - сервер доступен дилерам </option>
                                                                                <option value="4">4. Tajikistan - сервер доступен дилерам </option>
                                                                                <option value="5">5. Франция - ns5.ihtier.net </option>
                                                                                <option value="6">6. Франсия - сервер доступен дилерам </option>
                                                                                <option value="7">7. Украина - ns7.ihtier.net </option>
                                                                                <option value="8">8. Turkmen - сервер доступен дилерам </option>
                                                                                <option value="9">9. Turkmen - сервер доступен дилерам </option>
                                                                                <option value="10">10. Россия - сервер доступен дилерам </option>
                                                                                <option value="11">11. Россия - сервер доступен дилерам </option>
                                                                                <option value="12">12. Россия - сервер доступен дилерам </option>
                                                                                <option value="13">13. Tajikistan - сервер доступен дилерам </option>
                                                                                <option value="14">14. Россия - сервер доступен дилерам </option>
                                                                                <option value="15">15. Росcия - сервер доступен дилерам </option>
                                                                                <option value="16">16. Tajikistan - сервер доступен дилерам </option>
                                                                                <option value="17">17. Франция - ns17.ihtier.net </option>
                                                                                <option value="18">18. Франция - сервер доступен дилерам </option>
                                                                                <option value="19">19. Франция - сервер доступен дилерам </option>
                                                                                <option value="20">20. Франция - сервер доступен дилерам </option>
                                                                                <option value="21">21. Россия - сервер доступен дилерам </option>
                                                                                <option value="22">22. Германия - сервер доступен дилерам </option>
                                                                                <option value="23">23. Россия - сервер доступен дилерам </option>
                                                                                <option value="24">24. Tajikistan - сервер доступен дилерам </option>
                                                                                <option value="25">25. Tajikistan - сервер доступен дилерам </option>
                                                                                <option value="26">26. Россия - сервер доступен дилерам </option>
                                                                                <option value="27">27. Tajikistan - сервер доступен дилерам </option>
                                                                                <option value="28" selected="">28. Россия - сервер доступен дилерам </option>
                                                                                <option value="29">29. Россия - сервер доступен дилерам </option>
                                                                                <option value="30">30. Россия - сервер доступен дилерам </option>
                                                                                <option value="31">31. Россия - сервер доступен дилерам </option>
                                                                                <option value="32">32. Turkmen - сервер доступен дилерам </option>
                                                                                <option value="33">33. Turkmen - сервер доступен дилерам </option>
                                                                                <option value="34">34. Turkmen - сервер доступен дилерам </option>
                                                                                <option value="35">35. Turkmen - сервер доступен дилерам </option>
                                                                                <option value="36">36. Turkmen - сервер доступен дилерам </option>
                                                                            </select>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td><strong>Описание юзера </strong></td>
                                                                        <td>
                                                                            <textarea name="notice" maxlength="58" style="width:242px; height:35px;"></textarea>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td><strong>
                                                                            </strong></td>
                                                                        <td colspan="2">
                                                                            <input class="btn" type="submit" name="save" value="Сохранить">
                                                                        </td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                            <left>
                                                                <font color="red"><b>* </b></font><b>
                                                                    <font color="blue">Для получения уведомлений на почту диллера(или клиента), об окончании подписки за 1 сутки.</font>
                                                                </b><br>
                                                                <font color="red"><b>** </b></font><b>
                                                                    <font color="blue">Доступ клиента к сайту биллинга будет ограничен, все его купленные пакеты будут активными.</font>
                                                                </b>
                                                            </left>
                                                            <input type="hidden" name="page" value="">
                                                            <br>
                                                            <hr><br><strong>Общее кол-во пользователей:</strong><b>
                                                                <font color="red">706</font>
                                                            </b>
                                                            <script type="text/JavaScript" language="JavaScript" src="{{ asset('/checkall.js') }}"></script>
                                                            <form method="GET">
                                                                <input type="hidden" name="order_asc" value="">
                                                                <input type="hidden" name="order_by" value="">
                                                                <input type="hidden" name="page" value=""> Элементов на странице:
                                                                <select name="items_pp">
                                                                    <option selected="1">10</option>
                                                                    <option>15</option>
                                                                    <option>20</option>
                                                                    <option>50</option>
                                                                    <option>100</option>
                                                                    <option>200</option>
                                                                    <option>500</option>
                                                                    <option>5000</option>
                                                                </select>
                                                                <input type="submit" name="filter_submit" value="OK">
                                                            </form>
                                                            <form name="users_renew" action="http://ihtier.net/dealer.php" method="POST">
                                                                <input type="hidden" name="do" value="renew">
                                                                <input type="hidden" name="server_n" value="1">
                                                                <input type="hidden" name="satServer_name" value="">
                                                                <input type="hidden" name="satServer_type" value="">
                                                                <table class="list">
                                                                    <tbody>
                                                                        <tr>
                                                                            <th>
                                                                                <input name="checkAll" type="checkbox" onchange="checkAllBoxes(this, &#39;users_renew&#39;);">
                                                                            </th>
                                                                            <th width="773">
                                                                                <p align="center"> <a href="http://ihtier.net/dealer.php?order_by=login&amp;">
                                                                                        Логин
                                                                                    </a>
                                                                                </p>
                                                                            </th>
                                                                            <th width="773">
                                                                                <p align="center"> <a href="http://ihtier.net/dealer.php?order_by=password&amp;">
                                                                                        Пароль
                                                                                    </a>
                                                                                </p>
                                                                            </th>
                                                                            <th width="773">
                                                                                <p align="center"> <a href="http://ihtier.net/dealer.php?order_by=server_n&amp;">
                                                                                        № Сервера
                                                                                    </a>
                                                                                </p>
                                                                            </th>
                                                                            <th width="773">
                                                                                <p align="center"> <a href="http://ihtier.net/dealer.php?order_by=packet_group&amp;">
                                                                                        Пакет
                                                                                    </a>
                                                                                </p>
                                                                            </th>
                                                                            <th width="773">
                                                                                <p align="center"> <a href="http://ihtier.net/dealer.php?order_by=time_till&amp;">
                                                                                        действует до
                                                                                    </a>
                                                                                </p>
                                                                            </th>
                                                                            <th width="773">
                                                                                <p align="center"> <a href="http://ihtier.net/dealer.php?order_by=time_left&amp;">
                                                                                        осталось
                                                                                    </a>
                                                                                </p>
                                                                            </th>
                                                                            <th width="773">
                                                                                <p align="center"> <a href="http://ihtier.net/dealer.php?order_by=notice&amp;">
                                                                                        Описание юзера
                                                                                    </a>
                                                                                </p>
                                                                            </th>
                                                                            <th>&nbsp;</th>
                                                                            <th>&nbsp;</th>
                                                                            <th>&nbsp;</th>
                                                                        </tr>
                                                                        <tr class="norm">
                                                                            <td>
                                                                                <input type="checkbox" name="users[]" value="ww146">
                                                                            </td>
                                                                            <td width="773">
                                                                                <p align="center"> ww146
                                                                                </p>
                                                                            </td>
                                                                            <td width="773">
                                                                                <p align="center"> 1234
                                                                                </p>
                                                                            </td>
                                                                            <td width="773">
                                                                                <p align="center"> 9
                                                                                </p>
                                                                            </td>
                                                                            <td width="773">
                                                                                <p align="center"> <span style="white-space: nowrap;"></span>
                                                                                </p>
                                                                            </td>
                                                                            <td width="773">
                                                                                <p align="center"> <span style="white-space: nowrap;"></span>
                                                                                </p>
                                                                            </td>
                                                                            <td width="773">
                                                                                <p align="center"> <span style="white-space: nowrap;"></span>
                                                                                </p>
                                                                            </td>
                                                                            <td width="773">
                                                                                <p align="center"> 64163535
                                                                                </p>
                                                                            </td>
                                                                            <td width="103">
                                                                                <p align="center">
                                                                                    <a href="http://ihtier.net/dealer.php?edit=ww146">
                                                                                        <span title="Редактировать"><img src="{{ asset('images/edit.png') }}" border="0"></span></a>
                                                                                    <a>
                                                                                    </a>
                                                                                </p>
                                                                            </td>
                                                                            <td width="103">
                                                                                <p align="center">
                                                                                    <a href="http://ihtier.net/packets.php?selected_user=ww146">
                                                                                        <span title="Купить"><img src="{{ asset('images/buy.png') }}" border="0"></span></a>
                                                                                    <a>
                                                                                    </a>
                                                                                </p>
                                                                            </td>
                                                                            <td width="103">
                                                                                <p align="center">
                                                                                    <a href="http://ihtier.net/dmypackets.php?selected_user=ww146" onclick="return confirm(&#39;msg__stop_confirm&#39;)">
                                                                                        <span title="Остановить"><img src="{{ asset('/stop.png') }}" border="0"></span></a>
                                                                                    <a>
                                                                                    </a>
                                                                                </p>
                                                                            </td>
                                                                        </tr>
                                                                        <tr class="alt">
                                                                            <td>
                                                                                <input type="checkbox" name="users[]" value="ww145">
                                                                            </td>
                                                                            <td width="773">
                                                                                <p align="center"> ww145
                                                                                </p>
                                                                            </td>
                                                                            <td width="773">
                                                                                <p align="center"> 12345
                                                                                </p>
                                                                            </td>
                                                                            <td width="773">
                                                                                <p align="center"> 9
                                                                                </p>
                                                                            </td>
                                                                            <td width="773">
                                                                                <p align="center"> <span style="white-space: nowrap;"></span>
                                                                                </p>
                                                                            </td>
                                                                            <td width="773">
                                                                                <p align="center"> <span style="white-space: nowrap;"></span>
                                                                                </p>
                                                                            </td>
                                                                            <td width="773">
                                                                                <p align="center"> <span style="white-space: nowrap;"></span>
                                                                                </p>
                                                                            </td>
                                                                            <td width="773">
                                                                                <p align="center"> 77488
                                                                                </p>
                                                                            </td>
                                                                            <td width="103">
                                                                                <p align="center">
                                                                                    <a href="http://ihtier.net/dealer.php?edit=ww145">
                                                                                        <span title="Редактировать"><img src="{{ asset('images/edit.png') }}" border="0"></span></a>
                                                                                    <a>
                                                                                    </a>
                                                                                </p>
                                                                            </td>
                                                                            <td width="103">
                                                                                <p align="center">
                                                                                    <a href="http://ihtier.net/packets.php?selected_user=ww145">
                                                                                        <span title="Купить"><img src="{{ asset('images/buy.png') }}" border="0"></span></a>
                                                                                    <a>
                                                                                    </a>
                                                                                </p>
                                                                            </td>
                                                                            <td width="103">
                                                                                <p align="center">
                                                                                    <a href="http://ihtier.net/dmypackets.php?selected_user=ww145" onclick="return confirm(&#39;msg__stop_confirm&#39;)">
                                                                                        <span title="Остановить"><img src="{{ asset('images/stop.png') }}" border="0"></span></a>
                                                                                    <a>
                                                                                    </a>
                                                                                </p>
                                                                            </td>
                                                                        </tr>
                                                                        <tr class="norm">
                                                                            <td>
                                                                                <input type="checkbox" name="users[]" value="ww144">
                                                                            </td>
                                                                            <td width="773">
                                                                                <p align="center"> ww144
                                                                                </p>
                                                                            </td>
                                                                            <td width="773">
                                                                                <p align="center"> 1234
                                                                                </p>
                                                                            </td>
                                                                            <td width="773">
                                                                                <p align="center"> 9
                                                                                </p>
                                                                            </td>
                                                                            <td width="773">
                                                                                <p align="center"> <span style="white-space: nowrap;"></span>
                                                                                </p>
                                                                            </td>
                                                                            <td width="773">
                                                                                <p align="center"> <span style="white-space: nowrap;"></span>
                                                                                </p>
                                                                            </td>
                                                                            <td width="773">
                                                                                <p align="center"> <span style="white-space: nowrap;"></span>
                                                                                </p>
                                                                            </td>
                                                                            <td width="773">
                                                                                <p align="center">
                                                                                </p>
                                                                            </td>
                                                                            <td width="103">
                                                                                <p align="center">
                                                                                    <a href="http://ihtier.net/dealer.php?edit=ww144">
                                                                                        <span title="Редактировать"><img src="{{ asset('images/edit.png') }}" border="0"></span></a>
                                                                                    <a>
                                                                                    </a>
                                                                                </p>
                                                                            </td>
                                                                            <td width="103">
                                                                                <p align="center">
                                                                                    <a href="http://ihtier.net/packets.php?selected_user=ww144">
                                                                                        <span title="Купить"><img src="{{ asset('images/buy.png') }}" border="0"></span></a>
                                                                                    <a>
                                                                                    </a>
                                                                                </p>
                                                                            </td>
                                                                            <td width="103">
                                                                                <p align="center">
                                                                                    <a href="http://ihtier.net/dmypackets.php?selected_user=ww144" onclick="return confirm(&#39;msg__stop_confirm&#39;)">
                                                                                        <span title="Остановить"><img src="{{ asset('images/stop.png') }}" border="0"></span></a>
                                                                                    <a>
                                                                                    </a>
                                                                                </p>
                                                                            </td>
                                                                        </tr>
                                                                        <tr class="alt">
                                                                            <td>
                                                                                <input type="checkbox" name="users[]" value="ww143">
                                                                            </td>
                                                                            <td width="773">
                                                                                <p align="center"> ww143
                                                                                </p>
                                                                            </td>
                                                                            <td width="773">
                                                                                <p align="center"> 12345
                                                                                </p>
                                                                            </td>
                                                                            <td width="773">
                                                                                <p align="center"> 9
                                                                                </p>
                                                                            </td>
                                                                            <td width="773">
                                                                                <p align="center"> <span style="white-space: nowrap;"></span>
                                                                                </p>
                                                                            </td>
                                                                            <td width="773">
                                                                                <p align="center"> <span style="white-space: nowrap;"></span>
                                                                                </p>
                                                                            </td>
                                                                            <td width="773">
                                                                                <p align="center"> <span style="white-space: nowrap;"></span>
                                                                                </p>
                                                                            </td>
                                                                            <td width="773">
                                                                                <p align="center"> 64386515
                                                                                </p>
                                                                            </td>
                                                                            <td width="103">
                                                                                <p align="center">
                                                                                    <a href="http://ihtier.net/dealer.php?edit=ww143">
                                                                                        <span title="Редактировать"><img src="{{ asset('images/edit.png') }}" border="0"></span></a>
                                                                                    <a>
                                                                                    </a>
                                                                                </p>
                                                                            </td>
                                                                            <td width="103">
                                                                                <p align="center">
                                                                                    <a href="http://ihtier.net/packets.php?selected_user=ww143">
                                                                                        <span title="Купить"><img src="{{ asset('images/buy.png') }}" border="0"></span></a>
                                                                                    <a>
                                                                                    </a>
                                                                                </p>
                                                                            </td>
                                                                            <td width="103">
                                                                                <p align="center">
                                                                                    <a href="http://ihtier.net/dmypackets.php?selected_user=ww143" onclick="return confirm(&#39;msg__stop_confirm&#39;)">
                                                                                        <span title="Остановить"><img src="{{ asset('images/stop.png') }}" border="0"></span></a>
                                                                                    <a>
                                                                                    </a>
                                                                                </p>
                                                                            </td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                                <div class="handlerFeld"><a class="PagesHandlerLink" href="http://ihtier.net/dealer.php?page=1">&lt;&lt;</a> <a class="PagesHandlerLink" href="http://ihtier.net/dealer.php?page=1">Назад</a>
                                                                    <font face="Symbol">·</font> <a class="PagesHandlerLink" href="http://ihtier.net/dealer.php?page=1">1</a>
                                                                    <font face="\&quot;Symbol\&quot;">·</font> <a class="PagesHandlerLink" href="http://ihtier.net/dealer.php?page=2">2</a>
                                                                    <font face="\&quot;Symbol\&quot;">·</font> <a class="PagesHandlerLink" href="http://ihtier.net/dealer.php?page=3">3</a>
                                                                    <font face="\&quot;Symbol\&quot;">·</font> <a class="PagesHandlerLink" href="http://ihtier.net/dealer.php?page=4">4</a>
                                                                    <font face="Symbol">·</font> [5/71]
                                                                    <font face="Symbol">·</font> <a class="PagesHandlerLink" href="http://ihtier.net/dealer.php?page=6">6</a>
                                                                    <font face="\&quot;Symbol\&quot;">·</font> <a class="PagesHandlerLink" href="http://ihtier.net/dealer.php?page=7">7</a>
                                                                    <font face="\&quot;Symbol\&quot;">·</font> <a class="PagesHandlerLink" href="http://ihtier.net/dealer.php?page=8">8</a>
                                                                    <font face="\&quot;Symbol\&quot;">·</font> <a class="PagesHandlerLink" href="http://ihtier.net/dealer.php?page=9">9</a>
                                                                    <font face="\&quot;Symbol\&quot;">·</font> <a class="PagesHandlerLink" href="http://ihtier.net/dealer.php?page=10">10</a>
                                                                    <font face="Symbol">·</font> <a class="PagesHandlerLink" href="http://ihtier.net/dealer.php?page=6">Дальше</a> <a class="PagesHandlerLink" href="http://ihtier.net/dealer.php?page=71">&gt;&gt;</a>
                                                                </div>
                                                                <br>
                                                                <b>
                                                                    <font color="blue"></font>
                                                                </b>
                                                                <p><b>
                                                                        <font color="blue">Всем выбранным клиентам сменить
                                                                            сервер на:
                                                                            <select name="server_n">
                                                                                <option value="1">1. Франция - ns1.ihtier.net</option>
                                                                                <option value="2">2. Франция - сервер доступен дилерам </option>
                                                                                <option value="3">3. Франция - сервер доступен дилерам </option>
                                                                                <option value="4">4. Tajikistan - сервер доступен дилерам </option>
                                                                                <option value="5">5. Франция - ns5.ihtier.net </option>
                                                                                <option value="6">6. Франсия - сервер доступен дилерам </option>
                                                                                <option value="7">7. Украина - ns7.ihtier.net </option>
                                                                                <option value="8">8. Turkmen - сервер доступен дилерам </option>
                                                                                <option value="9">9. Turkmen - сервер доступен дилерам </option>
                                                                                <option value="10">10. Россия - сервер доступен дилерам </option>
                                                                                <option value="11">11. Россия - сервер доступен дилерам </option>
                                                                                <option value="12">12. Россия - сервер доступен дилерам </option>
                                                                                <option value="13">13. Tajikistan - сервер доступен дилерам </option>
                                                                                <option value="14">14. Россия - сервер доступен дилерам </option>
                                                                                <option value="15">15. Росcия - сервер доступен дилерам </option>
                                                                                <option value="16">16. Tajikistan - сервер доступен дилерам </option>
                                                                                <option value="17">17. Франция - ns17.ihtier.net </option>
                                                                                <option value="18">18. Франция - сервер доступен дилерам </option>
                                                                                <option value="19">19. Франция - сервер доступен дилерам </option>
                                                                                <option value="20">20. Франция - сервер доступен дилерам </option>
                                                                                <option value="21">21. Россия - сервер доступен дилерам </option>
                                                                                <option value="22">22. Германия - сервер доступен дилерам </option>
                                                                                <option value="23">23. Россия - сервер доступен дилерам </option>
                                                                                <option value="24">24. Tajikistan - сервер доступен дилерам </option>
                                                                                <option value="25">25. Tajikistan - сервер доступен дилерам </option>
                                                                                <option value="26">26. Россия - сервер доступен дилерам </option>
                                                                                <option value="27">27. Tajikistan - сервер доступен дилерам </option>
                                                                                <option value="28" selected="">28. Россия - сервер доступен дилерам </option>
                                                                                <option value="29">29. Россия - сервер доступен дилерам </option>
                                                                                <option value="30">30. Россия - сервер доступен дилерам </option>
                                                                                <option value="31">31. Россия - сервер доступен дилерам </option>
                                                                                <option value="32">32. Turkmen - сервер доступен дилерам </option>
                                                                                <option value="33">33. Turkmen - сервер доступен дилерам </option>
                                                                                <option value="34">34. Turkmen - сервер доступен дилерам </option>
                                                                                <option value="35">35. Turkmen - сервер доступен дилерам </option>
                                                                                <option value="36">36. Turkmen - сервер доступен дилерам </option>
                                                                            </select>
                                                                            <input type="button" value="Сменить"
                                                                                onclick="document.forms[&#39;users_renew&#39;].server_n.value = this.previousSibling.previousSibling.value; document.forms[&#39;users_renew&#39;].do.value = &#39;change_server&#39;; document.forms[&#39;users_renew&#39;].submit();">
                                                                        </font>
                                                                    </b></p>
                                                            </form>
                                                        </center>
                                                    </form>
                                                    <p></p>
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
                                        <!--content-->
                                    </table>
                                    <!--space 27-->
                                    <!--/in main-->
                                </td>
                                <!--raz>>>-->
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
    <div style="display: none;"></div>
</body>

</html>
