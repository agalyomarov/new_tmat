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
                    <!--in main-->


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
                                                    <center><b>Это главная страница вашего баланса, здесь Вы можете его пополнить.<br> Средства на баланс зачисляются в течение 15 минут.</b></center><br>
                                                    <hr>

                                                    <center>
                                                        <b>

                                                            <center><strong>Ваш баланс: <font color="blue">2.993</font></strong></center>
                                                            <fieldset>
                                                                {{-- <legend><b>Webmnoney</b></legend> --}}
                                                                <center>
                                                                    <a href="https://mini.webmoney.ru/SendWebMoney.aspx?Purse=Z695386261536&amp;Amount=2.00&amp;Description=login:teletop&amp;TransferType=Normal">
                                                                        <img src="{{ asset('images/webmoney.png') }}">
                                                                    </a>
                                                                </center>
                                                                <h2>
                                                                    <center style="margin-top:20px">
                                                                        <strong>Пополнить с помощью <font color="red"><b>Webmoney</b></font></strong>
                                                                    </center>
                                                                </h2> <br>
                                                                <h3>
                                                                    <br>
                                                                    <center>
                                                                        1. Примечание к платежу:&nbsp;
                                                                        <input style="text-align: center;font-weight: bold;font-size: 12px;margin: 2px;width: 20%;" value="op:romankotelnikov" onclick="this.select();" readonly="" type="text">
                                                                        <br>
                                                                        <center>
                                                                            2. Отправьте средства на:&nbsp;
                                                                            <input style="text-align: center;font-weight: bold;font-size: 12px;margin: 2px;width: 20%;" value="Z695386261536" onclick="this.select();" readonly="" type="text">
                                                                            <br>
                                                                            3. Зачисления денег 15 минут! Если после 15 минут не паполнится то обращайтесь к админу<br>
                                                                        </center><br>
                                                                        <br><br>
                                                                    </center>
                                                                </h3>
                                                    </center>
                                                    </center>
                                                    </fieldset>

                                                    <fieldset>
                                                        {{-- <legend><b>Яндекс деньги и Карты VISA | MasterCard</b></legend> --}}
                                                        <center>
                                                            <img src="{{ asset('images/visa2.jpg') }}" alt="Webmoney" border="0">
                                                        </center>
                                                        <center>
                                                            <center>
                                                                <h2> <strong>Пополнить с помощью <font color="red"><b>Яндекс деньги и Карты VISA | MasterCard</b></font></strong></h2> <br>
                                                                <h3>
                                                                    Комиссия при оплате с карт 2% при оплате с яндекс кошельков 0.5%<br>
                                                                </h3>
                                                                <h3 style="margin-top:10px;color:mediumseagreen">
                                                                    Яндекс 4100117595225705
                                                                </h3>
                                                            </center>

                                                            <center style="margin-top:20px">
                                                                1. Примечание к платежу:&nbsp;
                                                                <input style="text-align: center;font-weight: bold;font-size: 12px;margin: 2px;width: 20%;" value="op:romankotelnikov" onclick="this.select();" readonly="" type="text">
                                                                <br>
                                                                <center>
                                                                    2. Отправьте средства на:&nbsp;
                                                                    <input style="text-align: center;font-weight: bold;font-size: 12px;margin: 2px;width: 20%;" value="4100117595225705" onclick="this.select();" readonly="" type="text">
                                                                    <br>
                                                                    3. Зачисления денег 15 минут! Если после 15 минут не паполнится то обращайтесь к админу<br>
                                                                </center><br>
                                                                <br><br>
                                                            </center>
                                                        </center>
                                                    </fieldset>


                                                    <b>
                                                        <font color="green"><b>Курс валюты</b></font>
                                                    </b><br>
                                                    <b>
                                                        <font color="black"><b>90 RUB = 1 USD</b></font>
                                                    </b><br>
                                                    <b>
                                                        <font color="black"><b>1 USD = 1 WMZ</b></font>
                                                    </b><br>
                                                    </b>
                                                    </center>
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
