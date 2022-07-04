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
        .norm,
        .alt {
            height: 35px;
        }

        .norm input[type="checkbox"],
        .alt input[type="checkbox"] {
            margin-top: 5px;
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
                                                    <h3>
                                                        <fieldset style="width: 850px" ;="">
                                                            <form name="user_packets_form" action="#" method="POST">
                                                                @csrf
                                                                <input type="hidden" id="discount" value="50">
                                                                <input type="hidden" name="selected_user" value="">
                                                                <center>
                                                                    <table border="1" class="list">
                                                                        <tbody>
                                                                            <tr>
                                                                                <th>
                                                                                    <input name="checkAll" type="checkbox">
                                                                                </th>
                                                                                <th width="84">
                                                                                    Пакет
                                                                                </th>

                                                                                <th width="98">
                                                                                    Цена/мес.
                                                                                </th>
                                                                            </tr>
                                                                            <tr class="norm">
                                                                                <td style="text-align:center;">
                                                                                    <input type="checkbox" value="Big Bang 52E">
                                                                                </td>
                                                                                <td align="center" width="4000">
                                                                                    <p width="100"><b> <span title="Выбери меня">Big Bang 52E</span>
                                                                                        </b></p>
                                                                                </td>
                                                                                <td align="center" width="70">
                                                                                    <b>0.20
                                                                                        $</b>
                                                                                </td>
                                                                            </tr>
                                                                            <tr class="alt">
                                                                                <td style="text-align:center;">
                                                                                    <input type="checkbox" value="Big Bang 52E - Telekarta 85E">
                                                                                </td>
                                                                                <td align="center" width="4000">
                                                                                    <p width="100"><b> <span title="Выбери меня">Big Bang 52E - Telekarta 85E</span>
                                                                                        </b></p>
                                                                                </td>
                                                                                <td align="center" width="70">
                                                                                    <b>0.30
                                                                                        $</b>
                                                                                </td>
                                                                            </tr>
                                                                            <tr class="norm">
                                                                                <td style="text-align:center;">
                                                                                    <input type="checkbox" value="Evropa_all">
                                                                                </td>
                                                                                <td align="center" width="4000">
                                                                                    <p width="100"><b> <span title="Выбери меня">Evropa_all</span>
                                                                                        </b></p>
                                                                                </td>
                                                                                <td align="center" width="70">
                                                                                    <b>0.50
                                                                                        $</b>
                                                                                </td>
                                                                            </tr>
                                                                            <tr class="alt">
                                                                                <td style="text-align:center;">
                                                                                    <input type="checkbox" value="NTV Plus 36E - Telekarta 85 HD">
                                                                                </td>
                                                                                <td align="center" width="4000">
                                                                                    <p width="100"><b> <span title="Выбери меня">NTV Plus 36E - Telekarta 85 HD</span>
                                                                                        </b></p>
                                                                                </td>
                                                                                <td align="center" width="70">
                                                                                    <b>0.40
                                                                                        $</b>
                                                                                </td>
                                                                            </tr>
                                                                            <tr class="norm">
                                                                                <td style="text-align:center;">
                                                                                    <input type="checkbox" value="NTV Plus_36 - Tricolor_36 - Klubnika_13 HD">
                                                                                </td>
                                                                                <td align="center" width="4000">
                                                                                    <p width="100"><b> <span title="Выбери меня">NTV Plus_36 - Tricolor_36 - Klubnika_13 HD</span>
                                                                                        </b></p>
                                                                                </td>
                                                                                <td align="center" width="70">
                                                                                    <b>0.40
                                                                                        $</b>
                                                                                </td>

                                                                            </tr>
                                                                            <tr class="alt">
                                                                                <td style="text-align:center;">
                                                                                    <input type="checkbox" value="NTV Plus_36 - Tricolor_36 HD">
                                                                                </td>
                                                                                <td align="center" width="4000">
                                                                                    <p width="100"><b> <span title="Выбери меня">NTV Plus_36 - Tricolor_36 HD</span>
                                                                                        </b></p>
                                                                                </td>
                                                                                <td align="center" width="70">
                                                                                    <b>0.30
                                                                                        $</b>
                                                                                </td>

                                                                            </tr>
                                                                            <tr class="norm">
                                                                                <td style="text-align:center;">
                                                                                    <input type="checkbox" value="NTV Plus_56 - Tricolor_56 HD">
                                                                                </td>
                                                                                <td align="center" width="4000">
                                                                                    <p width="100"><b> <span title="Выбери меня">NTV Plus_56 - Tricolor_56 HD</span>
                                                                                        </b></p>
                                                                                </td>
                                                                                <td align="center" width="70">
                                                                                    <b>0.30
                                                                                        $</b>
                                                                                </td>

                                                                            </tr>
                                                                            <tr class="alt">
                                                                                <td style="text-align:center;">
                                                                                    <input type="checkbox" value="Setanta Sports 31E HD">
                                                                                </td>
                                                                                <td align="center" width="4000">
                                                                                    <p width="100"><b> <span title="Выбери меня">Setanta Sports 31E HD</span>
                                                                                        </b></p>
                                                                                </td>
                                                                                <td align="center" width="70">
                                                                                    <b>0.30
                                                                                        $</b>
                                                                                </td>

                                                                            </tr>
                                                                            <tr class="norm">
                                                                                <td style="text-align:center;">
                                                                                    <input type="checkbox" value="Sky Germany 19E HD">
                                                                                </td>
                                                                                <td align="center" width="4000">
                                                                                    <p width="100"><b> <span title="Выбери меня">Sky Germany 19E HD</span>
                                                                                        </b></p>
                                                                                </td>
                                                                                <td align="center" width="70">
                                                                                    <b>0.30
                                                                                        $</b>
                                                                                </td>

                                                                            </tr>
                                                                            <tr class="alt">
                                                                                <td style="text-align:center;">
                                                                                    <input type="checkbox" value="Telekarta TV Full HD">
                                                                                </td>
                                                                                <td align="center" width="4000">
                                                                                    <p width="100"><b> <span title="Выбери меня">Telekarta TV Full HD</span>
                                                                                        </b></p>
                                                                                </td>
                                                                                <td align="center" width="70">
                                                                                    <b>0.20
                                                                                        $</b>
                                                                                </td>

                                                                            </tr>
                                                                            <tr class="norm">
                                                                                <td style="text-align:center;">
                                                                                    <input type="checkbox" value="Telekarta TV HD  -  Klubnika_13 HD">
                                                                                </td>
                                                                                <td align="center" width="4000">
                                                                                    <p width="100"><b> <span title="Выбери меня">Telekarta TV HD - Klubnika_13 HD</span>
                                                                                        </b></p>
                                                                                </td>
                                                                                <td align="center" width="70">
                                                                                    <b>0.30
                                                                                        $</b>
                                                                                </td>

                                                                            </tr>
                                                                            <tr class="alt">
                                                                                <td style="text-align:center;">
                                                                                    <input type="checkbox" value="UPC Direct 1w - Sky19 - Sky28 HD">
                                                                                </td>
                                                                                <td align="center" width="4000">
                                                                                    <p width="100"><b> <span title="Выбери меня">UPC Direct 1w - Sky19 - Sky28 HD</span>
                                                                                        </b></p>
                                                                                </td>
                                                                                <td align="center" width="70">
                                                                                    <b>0.40
                                                                                        $</b>
                                                                                </td>

                                                                            </tr>
                                                                            <tr class="norm">
                                                                                <td style="text-align:center;">
                                                                                    <input type="checkbox" value="Vip_all">
                                                                                </td>
                                                                                <td align="center" width="4000">
                                                                                    <p width="100"><b> <span title="Выбери меня">Vip_all</span>
                                                                                        </b></p>
                                                                                </td>
                                                                                <td align="center" width="70">
                                                                                    <b>0.60
                                                                                        $</b>
                                                                                </td>

                                                                            </tr>
                                                                            <tr class="alt">
                                                                                <td style="text-align:center;">
                                                                                    <input type="checkbox" value="Vip_Восток">
                                                                                </td>
                                                                                <td align="center" width="4000">
                                                                                    <p width="100"><b> <span title="Выбери меня">Vip_Восток</span>
                                                                                        </b></p>
                                                                                </td>
                                                                                <td align="center" width="70">
                                                                                    <b>0.50
                                                                                        $</b>
                                                                                </td>

                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                    <table border="0" class="list">
                                                                        <tbody>
                                                                            <tr>
                                                                                <td colspan="4">
                                                                                    <strong>Начало:
                                                                                        <input type="date" name="data1" value="2022-07-03">
                                                                                        <br><br>
                                                                                        <strong>Конец:&nbsp;&nbsp;
                                                                                            <input type="date" name="data2" value="2022-08-03">
                                                                                            или Период:
                                                                                            <a href="javascript:void(0);">1 мес</a>,
                                                                                            <a href="javascript:void(0);">2 мес</a>,
                                                                                            <a href="javascript:void(0);">3 мес</a>,
                                                                                            <a href="javascript:void(0);">4 мес</a>,
                                                                                            <a href="javascript:void(0);">5 мес</a>,
                                                                                            <a href="javascript:void(0);">6 мес</a>,
                                                                                            <a href="javascript:void(0);">12 мес</a>
                                                                                            <br><br>
                                                                                            <strong>Общая стоимость:</strong>
                                                                                            <strong>
                                                                                                <font color="#313a81" id="total_price">0</font> $
                                                                                            </strong>
                                                                                            <br><br>
                                                                                            <strong>Ваш Баланс: <font color="#313a81">{{ $dealer->balance }}</font>
                                                                                            </strong>$ | <a href="{{ route('balance.index') }}">Пополнить</a>
                                                                                            <input type="hidden" name="day_count" id="day_count" value="30">
                                                                                            <br><br></strong></strong>
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td colspan="4" border="0">
                                                                                    <input name="user_login" type="hidden" value="">
                                                                                    <input disabled name="submit" type="submit" value="Купить выбраный Вами пакет(ы)" style="color: #0000FF; font-size: 14px; text-decoration: none; font-weight: bold">
                                                                                    <blink>
                                                                                        <left>
                                                                                            <font color="blue"><b><span lang="ru">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Активация
                                                                                                        пакетов 5 минут!</span></b></font>
                                                                                        </left>
                                                                                    </blink>
                                                                                </td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </center>
                                                            </form>
                                                        </fieldset>
                                                    </h3>
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
    <div style="display: none;"></div>
</body>

</html>
