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
        .error {
            color: red;
            margin-bottom: 5px;
            text-align: left;
            /* background-color: blue; */
            width: 400px;
        }
    </style>
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
                                                    <center>
                                                        <b>
                                                            <font color="blue">На этой странице Вы можете самостоятельно добавить своих клиентов,<br> стать нашим дилером и получить скидку:<br>10% от 50 клиентов<br>20% от 100 клиентов<br>30% от 150 клиентов<br>40% от 200 клиентов<br>50% от 300
                                                                клиентов</font>
                                                        </b>
                                                    </center>
                                                    <center>
                                                        <form action="@if (isset($client)) {{ route('client.update', $client->id) }}  @else {{ route('client.store') }} @endif" method="post">
                                                            @if (isset($client))
                                                                @method('PUT')
                                                            @endif
                                                            @csrf
                                                            @if (isset($client))
                                                                <h3 style="margin-bottom:5px;">Редактировать пользователья</h3>
                                                            @else
                                                                <h3 style="margin-bottom:5px;">Новый пользователь</h3>
                                                            @endif
                                                            @foreach ($errors->getMessages() as $error)
                                                                <div class="error">
                                                                    {{ $error[0] }}
                                                                </div>
                                                            @endforeach
                                                            <table>
                                                                <tbody>
                                                                    <tr>
                                                                        <td><strong>Логин</strong></td>
                                                                        <td>
                                                                            <input type="text" class="input_200" maxlength="15" name="login" value=@if (isset($client)) {{ $client->login }} @endif>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td><strong>Пароль</strong></td>
                                                                        <td>
                                                                            <input type="text" class="input_200" maxlength="15" name="password" value=@if (isset($client)) {{ $client->password }} @endif>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td><strong>Номер сервера</strong></td>
                                                                        <td>
                                                                            <select id="server_tag_1" name="server" value=@if (isset($client)) {{ $client->server }} @endif>
                                                                                @include('includes.servers')
                                                                            </select>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td><strong>Описание юзера </strong></td>
                                                                        <td>
                                                                            <textarea name="description" maxlength="58" style="width:242px; height:35px;color:black">
@if (isset($client))
{{ $client->description }}
@endif
</textarea>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td><strong>
                                                                            </strong></td>
                                                                        <td colspan="2">
                                                                            <input style="margin-bottom: 10px;" class="btn" type="submit" value="@if (isset($client)) Изменить@else Сохранить @endif">
                                                                        </td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </form>
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
                                                            <font color="red">{{ $countClients }}</font>
                                                        </b>
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
                                                                            <input name="checkAll" type="checkbox">
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
                                                                            <p align="center"> <a href="http://ihtier.net/dealer.php?order_by=notice&amp;">
                                                                                    Описание юзера
                                                                                </a>
                                                                            </p>
                                                                        </th>
                                                                        <th>&nbsp;</th>
                                                                        <th>&nbsp;</th>
                                                                        <th>&nbsp;</th>
                                                                    </tr>
                                                                    @foreach ($clients as $client)
                                                                        @if (count($client->packets) > 0)
                                                                        @endif
                                                                        <tr class="@if ($loop->odd) norm @else alt @endif">
                                                                            <td style="text-align:center">
                                                                                <input type="checkbox" name="users[]" value="ww146">
                                                                            </td>
                                                                            <td width="773">
                                                                                <p align="center">{{ $client->login }}</p>
                                                                            </td>
                                                                            <td width="773">
                                                                                <p align="center">{{ $client->password }}</p>
                                                                            </td>
                                                                            <td width="773">
                                                                                <p align="center">{{ $client->server }}</p>
                                                                            </td>

                                                                            <td width="773">
                                                                                <p align="center">
                                                                                    <span style="white-space: nowrap;">
                                                                                        {{ $client->packet_title }}
                                                                                    </span>
                                                                                </p>
                                                                            </td>
                                                                            <td width="773">
                                                                                <p align="center">
                                                                                    <span style="white-space: nowrap;">
                                                                                        {{ $client->packet_end_date }}

                                                                                    </span>
                                                                                </p>
                                                                            </td>
                                                                            <td width="773">
                                                                                <p align="center">{{ $client->description }}</p>
                                                                            </td>
                                                                            <td width="103">
                                                                                <p align="center">
                                                                                    <a href="{{ route('client.edit', $client->id) }}">
                                                                                        <span title="Редактировать"><img src="{{ asset('images/edit.png') }}" border="0"></span></a>
                                                                                    <a>
                                                                                    </a>
                                                                                </p>
                                                                            </td>
                                                                            <td width="103">
                                                                                <p align="center">
                                                                                    <a href="{{ route('packet.index', $client->id) }}">
                                                                                        <span title="Купить"><img src="{{ asset('images/buy.png') }}" border="0"></span></a>
                                                                                    <a>
                                                                                    </a>
                                                                                </p>
                                                                            </td>
                                                                            <td width="103">
                                                                                <p align="center">
                                                                                    <a href="http://ihtier.net/dmypackets.php?selected_user=ww146" onclick="return confirm(&#39;msg__stop_confirm&#39;)">
                                                                                        <span title="Остановить"><img src="{{ asset('images/stop.png') }}" border="0"></span></a>
                                                                                    <a>
                                                                                    </a>
                                                                                </p>
                                                                            </td>
                                                                        </tr>
                                                                    @endforeach
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
                                                                        <select name="server" value="">
                                                                            @include('includes.servers')
                                                                        </select>
                                                                        <input type="button" value="Сменить">
                                                                    </font>
                                                                </b></p>
                                                        </form>
                                                    </center>
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
    <script>
        const serverTag1 = document.getElementById('server_tag_1');
        const serverTag1Value = serverTag1.getAttribute('value');
        if (serverTag1.querySelector(`option[value="${serverTag1Value}"]`)) {
            serverTag1.querySelector(`option[value="${serverTag1Value}"]`).setAttribute('selected', true);
        }
    </script>
</body>

</html>
