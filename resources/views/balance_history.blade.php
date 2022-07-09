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
                                                                <td style="width:5px;height:37px;"><img src="./Качественный кардшаринг сервер, регистрация _ Авторизация_files/_lef_1.gif" width="5px" height="37px" alt="" border="0"></td>
                                                                <td class="lef-tit2"></td>
                                                                <td style="width:5px;height:37px;"><img src="./Качественный кардшаринг сервер, регистрация _ Авторизация_files/_lef_1.gif" width="5px" height="37px" alt="" border="0"></td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="cen">
                                                    <h3>История баланса</h3><br>
                                                    <form method="GET">
                                                        Элементов на странице:
                                                        <select name="q">
                                                            <option selected>10</option>
                                                            <option>15</option>
                                                            <option>20</option>
                                                            <option>50</option>
                                                            <option>100</option>
                                                            <option>200</option>
                                                            <option>500</option>
                                                            <option>5000</option>
                                                        </select>
                                                        <input type="submit" value="OK">
                                                    </form>
                                                    <p>&nbsp;</p>
                                                    <table class="list" width="100%" style="border-collapse: collapse" border="1" bordercolor="#C0C0C0">
                                                        <tbody>
                                                            <tr>
                                                                <th width="773">
                                                                    <p align="center"> <a href="http://ihtier.net/balance_history.php?order_by=time&amp;page=&amp;items_pp=20&amp;filter_submit=OK&amp;">
                                                                            Время
                                                                        </a>
                                                                    </p>
                                                                </th>
                                                                <th width="773">
                                                                    <p align="center"> <a href="http://ihtier.net/balance_history.php?order_by=amount&amp;page=&amp;items_pp=20&amp;filter_submit=OK&amp;">
                                                                            Сумма
                                                                        </a>
                                                                    </p>
                                                                </th>
                                                                <th width="773">
                                                                    <p align="center"> <a href="http://ihtier.net/balance_history.php?order_by=reason&amp;page=&amp;items_pp=20&amp;filter_submit=OK&amp;">
                                                                            Действие
                                                                        </a>
                                                                    </p>
                                                                </th>
                                                                <th width="773">
                                                                    <p align="center"> <a href="http://ihtier.net/balance_history.php?order_by=reason_login&amp;page=&amp;items_pp=20&amp;filter_submit=OK&amp;">
                                                                            Пользователь
                                                                        </a>
                                                                    </p>
                                                                </th>
                                                            </tr>
                                                            @foreach ($histories as $history)
                                                                <tr class="{{ $loop->odd ? 'norm' : 'alt' }}">
                                                                    <td width="773">
                                                                        <p align="center"> {{ $history->date }}</p>
                                                                    </td>
                                                                    <td width="773">
                                                                        <p align="center">{{ $history->price }}</p>
                                                                    </td>
                                                                    <td width="773">
                                                                        <p align="center">{{ $history->action }}</p>
                                                                    </td>
                                                                    <td width="773">
                                                                        <p align="center">{{ $history->client }}</p>
                                                                    </td>
                                                                </tr>
                                                            @endforeach
                                                        </tbody>
                                                    </table>
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
