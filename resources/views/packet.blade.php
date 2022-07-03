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
                                                    <h3> КУПИТЬ ПАКЕТ</h3>
                                                    <h3>
                                                        <fieldset style="width: 850px" ;="">
                                                            <legend>
                                                                <font color="red"><b>Кому хотите приобрести подписку?</b></font>
                                                            </legend>
                                                            <form method="GET">
                                                                <strong>Выберите пользователя:</strong>
                                                                <select name="selected_user">
                                                                    <option>61310917</option>
                                                                    <option>613109177</option>
                                                                    <option>64614081</option>
                                                                    <option>646140812</option>
                                                                    <option>a76576</option>
                                                                    <option>aa001</option>
                                                                    <option>aa0123</option>
                                                                    <option>aa0211</option>
                                                                    <option>aa099</option>
                                                                    <option>aa100</option>
                                                                    <option>aa101</option>
                                                                    <option>aa102</option>
                                                                    <option>aa103</option>
                                                                    <option>aaa020</option>
                                                                    <option>aaa021</option>
                                                                    <option>aaa022</option>
                                                                    <option>aaa023</option>
                                                                </select>
                                                                <strong>Необходимо подтверждение выбора:</strong>
                                                                <input type="submit" value="Подтвердить">
                                                            </form>
                                                        </fieldset>
                                                    </h3>
                                                    <h3>
                                                        <fieldset style="width: 850px" ;="">
                                                            <form name="user_packets_form" action="http://ihtier.net/packets.php" method="POST">
                                                                <input type="hidden" id="discount" value="50">
                                                                <input type="hidden" name="selected_user" value="romankotelnikov">
                                                                <center>
                                                                    <table border="1" class="list">
                                                                        <tbody>
                                                                            <tr>
                                                                                <th>
                                                                                    <input name="checkAll" type="checkbox">
                                                                                </th>
                                                                                <th>
                                                                                    Логотип
                                                                                </th>
                                                                                <th width="84">
                                                                                    Пакет
                                                                                </th>

                                                                                <th width="98">
                                                                                    Цена/мес.
                                                                                </th>
                                                                                <th>
                                                                                    Описание
                                                                                </th>
                                                                            </tr>
                                                                            <tr class="norm">
                                                                                <td style="text-align:center;">
                                                                                    <input type="checkbox" value="Big Bang 52E">
                                                                                </td>
                                                                                <td>
                                                                                    <img width="100px" height="30px" src="{{ asset('images/alemtv52.jpg') }}">
                                                                                </td>
                                                                                <td align="center" width="4000">
                                                                                    <p width="100"><b> <span title="Выбери меня">Big Bang 52E</span>
                                                                                        </b></p>
                                                                                </td>
                                                                                <td align="center" width="70">
                                                                                    <b>0.20
                                                                                        $</b>
                                                                                </td>
                                                                                <td>
                                                                                    <a href="{{ route('packet.view', 'big_bang_52e') }}"><b> Подробнее... </b></a>
                                                                                </td>
                                                                            </tr>
                                                                            <tr class="alt">
                                                                                <td style="text-align:center;">
                                                                                    <input type="checkbox" value="Big Bang 52E - Telekarta 85E">
                                                                                </td>
                                                                                <td>
                                                                                    <img width="100px" height="30px" src="{{ asset('images/alemtv52.jpg') }}">
                                                                                </td>
                                                                                <td align="center" width="4000">
                                                                                    <p width="100"><b> <span title="Выбери меня">Big Bang 52E - Telekarta 85E</span>
                                                                                        </b></p>
                                                                                </td>
                                                                                <td align="center" width="70">
                                                                                    <b>0.30
                                                                                        $</b>
                                                                                </td>
                                                                                <td>
                                                                                    <a href="{{ route('packet.view', 'big_bang_52e_telecarta_85e') }}"><b> Подробнее... </b></a>
                                                                                </td>
                                                                            </tr>
                                                                            <tr class="norm">
                                                                                <td style="text-align:center;">
                                                                                    <input type="checkbox" value="Evropa_all">
                                                                                </td>
                                                                                <td>
                                                                                    <img width="100px" height="30px" src="{{ asset('images/europa.jpg') }}">
                                                                                </td>
                                                                                <td align="center" width="4000">
                                                                                    <p width="100"><b> <span title="Выбери меня">Evropa_all</span>
                                                                                        </b></p>
                                                                                </td>
                                                                                <td align="center" width="70">
                                                                                    <b>0.50
                                                                                        $</b>
                                                                                </td>
                                                                                <td>
                                                                                    <a href="{{ route('packet.view', 'europa_all') }}"><b> Подробнее... </b></a>
                                                                                </td>
                                                                            </tr>
                                                                            <tr class="alt">
                                                                                <td style="text-align:center;">
                                                                                    <input type="checkbox" value="NTV Plus 36E - Telekarta 85 HD">
                                                                                </td>
                                                                                <td>
                                                                                    <img width="100px" height="30px" src="{{ asset('images/vip56.jpg') }}">
                                                                                </td>
                                                                                <td align="center" width="4000">
                                                                                    <p width="100"><b> <span title="Выбери меня">NTV Plus 36E - Telekarta 85 HD</span>
                                                                                        </b></p>
                                                                                </td>
                                                                                <td align="center" width="70">
                                                                                    <b>0.40
                                                                                        $</b>
                                                                                </td>
                                                                                <td>
                                                                                    <a href="{{ route('packet.view', 'ntv_plus_36e_telecarta_85hd') }}"><b> Подробнее... </b></a>
                                                                                </td>
                                                                            </tr>
                                                                            <tr class="norm">
                                                                                <td style="text-align:center;">
                                                                                    <input type="checkbox" value="NTV Plus_36 - Tricolor_36 - Klubnika_13 HD">
                                                                                </td>
                                                                                <td>
                                                                                    <img width="100px" height="30px" src="{{ asset('images/vip56.jpg') }}">
                                                                                </td>
                                                                                <td align="center" width="4000">
                                                                                    <p width="100"><b> <span title="Выбери меня">NTV Plus_36 - Tricolor_36 - Klubnika_13 HD</span>
                                                                                        </b></p>
                                                                                </td>
                                                                                <td align="center" width="70">
                                                                                    <b>0.40
                                                                                        $</b>
                                                                                </td>
                                                                                <td>
                                                                                    <a href="{{ route('packet.view', 'ntv_plus_36_tricolor_36_klubnika_13hd') }}"><b> Подробнее... </b></a>
                                                                                </td>
                                                                            </tr>
                                                                            <tr class="alt">
                                                                                <td style="text-align:center;">
                                                                                    <input type="checkbox" value="NTV Plus_36 - Tricolor_36 HD">
                                                                                </td>
                                                                                <td>
                                                                                    <img width="100px" height="30px" src="{{ asset('images/vip56.jpg') }}">
                                                                                </td>
                                                                                <td align="center" width="4000">
                                                                                    <p width="100"><b> <span title="Выбери меня">NTV Plus_36 - Tricolor_36 HD</span>
                                                                                        </b></p>
                                                                                </td>
                                                                                <td align="center" width="70">
                                                                                    <b>0.30
                                                                                        $</b>
                                                                                </td>
                                                                                <td>
                                                                                    <a href="http://ihtier.net/packet_group_info.php?packet_group=NTV+Plus_36+-+Tricolor_36+HD"><b> Подробнее... </b></a>
                                                                                </td>
                                                                            </tr>
                                                                            <tr class="norm">
                                                                                <td style="text-align:center;">
                                                                                    <input type="checkbox" value="NTV Plus_56 - Tricolor_56 HD">
                                                                                </td>
                                                                                <td>
                                                                                    <img width="100px" height="30px" src="{{ asset('images/vostoktrik.jpg') }}">
                                                                                </td>
                                                                                <td align="center" width="4000">
                                                                                    <p width="100"><b> <span title="Выбери меня">NTV Plus_56 - Tricolor_56 HD</span>
                                                                                        </b></p>
                                                                                </td>
                                                                                <td align="center" width="70">
                                                                                    <b>0.30
                                                                                        $</b>
                                                                                </td>
                                                                                <td>
                                                                                    <a href="http://ihtier.net/packet_group_info.php?packet_group=NTV+Plus_56+-+Tricolor_56+HD"><b> Подробнее... </b></a>
                                                                                </td>
                                                                            </tr>
                                                                            <tr class="alt">
                                                                                <td style="text-align:center;">
                                                                                    <input type="checkbox" value="Setanta Sports 31E HD">
                                                                                </td>
                                                                                <td>
                                                                                    <img width="100px" height="30px" src="{{ asset('images/setanta.jpg') }}">
                                                                                </td>
                                                                                <td align="center" width="4000">
                                                                                    <p width="100"><b> <span title="Выбери меня">Setanta Sports 31E HD</span>
                                                                                        </b></p>
                                                                                </td>
                                                                                <td align="center" width="70">
                                                                                    <b>0.30
                                                                                        $</b>
                                                                                </td>
                                                                                <td>
                                                                                    <a href="http://ihtier.net/packet_group_info.php?packet_group=Setanta+Sports+31E+HD"><b> Подробнее... </b></a>
                                                                                </td>
                                                                            </tr>
                                                                            <script type="text/javascript" language="JavaScript">
                                                                                packet_group_prices["Sky Germany 19E HD"] = 0.01000;
                                                                            </script>
                                                                            <tr class="norm">
                                                                                <td style="text-align:center;">
                                                                                    <input type="checkbox" value="Sky Germany 19E HD">
                                                                                </td>
                                                                                <td>
                                                                                    <img width="100px" height="30px" src="{{ asset('images/skyit.png') }}">
                                                                                </td>
                                                                                <td align="center" width="4000">
                                                                                    <p width="100"><b> <span title="Выбери меня">Sky Germany 19E HD</span>
                                                                                        </b></p>
                                                                                </td>
                                                                                <td align="center" width="70">
                                                                                    <b>0.30
                                                                                        $</b>
                                                                                </td>
                                                                                <td>
                                                                                    <a href="http://ihtier.net/packet_group_info.php?packet_group=Sky+Germany+19E+HD"><b> Подробнее... </b></a>
                                                                                </td>
                                                                            </tr>
                                                                            <script type="text/javascript" language="JavaScript">
                                                                                packet_group_prices["Telekarta TV Full HD"] = 0.00660;
                                                                            </script>
                                                                            <tr class="alt">
                                                                                <td style="text-align:center;">
                                                                                    <input type="checkbox" value="Telekarta TV Full HD">
                                                                                </td>
                                                                                <td>
                                                                                    <img width="100px" height="30px" src="{{ asset('images/telekarta.jpg') }}">
                                                                                </td>
                                                                                <td align="center" width="4000">
                                                                                    <p width="100"><b> <span title="Выбери меня">Telekarta TV Full HD</span>
                                                                                        </b></p>
                                                                                </td>
                                                                                <td align="center" width="70">
                                                                                    <b>0.20
                                                                                        $</b>
                                                                                </td>
                                                                                <td>
                                                                                    <a href="http://ihtier.net/packet_group_info.php?packet_group=Telekarta+TV+Full+HD"><b> Подробнее... </b></a>
                                                                                </td>
                                                                            </tr>
                                                                            <script type="text/javascript" language="JavaScript">
                                                                                packet_group_prices["Telekarta TV HD  -  Klubnika_13 HD"] = 0.01000;
                                                                            </script>
                                                                            <tr class="norm">
                                                                                <td style="text-align:center;">
                                                                                    <input type="checkbox" value="Telekarta TV HD  -  Klubnika_13 HD">
                                                                                </td>
                                                                                <td>
                                                                                    <img width="100px" height="30px" src="{{ asset('images/telekarta.jpg') }}">
                                                                                </td>
                                                                                <td align="center" width="4000">
                                                                                    <p width="100"><b> <span title="Выбери меня">Telekarta TV HD - Klubnika_13 HD</span>
                                                                                        </b></p>
                                                                                </td>
                                                                                <td align="center" width="70">
                                                                                    <b>0.30
                                                                                        $</b>
                                                                                </td>
                                                                                <td>
                                                                                    <a href="http://ihtier.net/packet_group_info.php?packet_group=Telekarta+TV+HD++-++Klubnika_13+HD"><b> Подробнее... </b></a>
                                                                                </td>
                                                                            </tr>
                                                                            <tr class="alt">
                                                                                <td style="text-align:center;">
                                                                                    <input type="checkbox" value="UPC Direct 1w - Sky19 - Sky28 HD">
                                                                                </td>
                                                                                <td>
                                                                                    <img width="100px" height="30px" src="{{ asset('images/vip19.jpg') }}">
                                                                                </td>
                                                                                <td align="center" width="4000">
                                                                                    <p width="100"><b> <span title="Выбери меня">UPC Direct 1w - Sky19 - Sky28 HD</span>
                                                                                        </b></p>
                                                                                </td>
                                                                                <td align="center" width="70">
                                                                                    <b>0.40
                                                                                        $</b>
                                                                                </td>
                                                                                <td>
                                                                                    <a href="http://ihtier.net/packet_group_info.php?packet_group=UPC+Direct+1w+-+Sky19+-+Sky28+HD"><b> Подробнее... </b></a>
                                                                                </td>
                                                                            </tr>
                                                                            <script type="text/javascript" language="JavaScript">
                                                                                packet_group_prices["Vip_all"] = 0.02000;
                                                                            </script>
                                                                            <tr class="norm">
                                                                                <td style="text-align:center;">
                                                                                    <input type="checkbox" value="Vip_all">
                                                                                </td>
                                                                                <td>
                                                                                    <img width="100px" height="30px" src="{{ asset('images/vip2.jpg') }}">
                                                                                </td>
                                                                                <td align="center" width="4000">
                                                                                    <p width="100"><b> <span title="Выбери меня">Vip_all</span>
                                                                                        </b></p>
                                                                                </td>
                                                                                <td align="center" width="70">
                                                                                    <b>0.60
                                                                                        $</b>
                                                                                </td>
                                                                                <td>
                                                                                    <a href="http://ihtier.net/packet_group_info.php?packet_group=Vip_all"><b> Подробнее... </b></a>
                                                                                </td>
                                                                            </tr>
                                                                            <tr class="alt">
                                                                                <td style="text-align:center;">
                                                                                    <input type="checkbox" value="Vip_Восток">
                                                                                </td>
                                                                                <td>
                                                                                    <img width="100px" height="30px" src="{{ asset('images/vip_vostok.jpg') }}">
                                                                                </td>
                                                                                <td align="center" width="4000">
                                                                                    <p width="100"><b> <span title="Выбери меня">Vip_Восток</span>
                                                                                        </b></p>
                                                                                </td>
                                                                                <td align="center" width="70">
                                                                                    <b>0.50
                                                                                        $</b>
                                                                                </td>
                                                                                <td>
                                                                                    <a href="http://ihtier.net/packet_group_info.php?packet_group=Vip_%D0%92%D0%BE%D1%81%D1%82%D0%BE%D0%BA"><b> Подробнее... </b></a>
                                                                                </td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>

                                                                    <script src="./Качественный кардшаринг сервер, регистрация _ Авторизация_files/calendar_ru.js"></script>
                                                                    <table id="fc" style="position:absolute;border-collapse:collapse;background:#FFFFFF;border:1px solid #3fb6fa;display:none;-moz-user-select:none;-khtml-user-select:none;user-select:none;" cellpadding="2">
                                                                        <tbody>
                                                                            <tr style="font:bold 13px Arial" onselectstart="return false">
                                                                                <td style="cursor:pointer;font-size:15px" onclick="upmonth(-1)">«</td>
                                                                                <td colspan="5" id="mns" align="center">Июль&nbsp;<span style="cursor:pointer" onclick="upmonth(-12)">&lt;</span>2022<span style="cursor:pointer" onclick="upmonth(12)">&gt;</span></td>
                                                                                <td align="right" style="cursor:pointer;font-size:15px" onclick="upmonth(1)">»</td>
                                                                            </tr>
                                                                            <tr style="background:#7cd2f9;font:12px Arial;color:#FFFFFF">
                                                                                <td align="center">П</td>
                                                                                <td align="center">В</td>
                                                                                <td align="center">С</td>
                                                                                <td align="center">Ч</td>
                                                                                <td align="center">П</td>
                                                                                <td align="center">С</td>
                                                                                <td align="center">В</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td id="v1"
                                                                                    style="width: 18px; height: 18px; background: rgb(255, 255, 255); font: 10px Arial; color: rgb(51, 51, 51); text-align: center; text-decoration: none; border: 1px solid rgb(142, 194, 253); cursor: default;">&nbsp;
                                                                                </td>
                                                                                <td id="v2"
                                                                                    style="width: 18px; height: 18px; background: rgb(255, 255, 255); font: 10px Arial; color: rgb(51, 51, 51); text-align: center; text-decoration: none; border: 1px solid rgb(142, 194, 253); cursor: default;">&nbsp;
                                                                                </td>
                                                                                <td id="v3"
                                                                                    style="width: 18px; height: 18px; background: rgb(255, 255, 255); font: 10px Arial; color: rgb(51, 51, 51); text-align: center; text-decoration: none; border: 1px solid rgb(142, 194, 253); cursor: default;">&nbsp;
                                                                                </td>
                                                                                <td id="v4"
                                                                                    style="width: 18px; height: 18px; background: rgb(255, 255, 255); font: 10px Arial; color: rgb(51, 51, 51); text-align: center; text-decoration: none; border: 1px solid rgb(142, 194, 253); cursor: default;">&nbsp;
                                                                                </td>
                                                                                <td id="v5"
                                                                                    style="width: 18px; height: 18px; background: rgb(255, 255, 255); font: 10px Arial; color: rgb(51, 51, 51); text-align: center; text-decoration: none; border: 1px solid rgb(142, 194, 253); cursor: pointer;">1</td>
                                                                                <td id="v6"
                                                                                    style="width: 18px; height: 18px; background: rgb(255, 255, 255); font: 10px Arial; color: rgb(51, 51, 51); text-align: center; text-decoration: none; border: 1px solid rgb(142, 194, 253); cursor: pointer;">2</td>
                                                                                <td id="v7"
                                                                                    style="width: 18px; height: 18px; background: rgb(255, 255, 255); font: 10px Arial; color: rgb(228, 14, 14); text-align: center; text-decoration: none; border: 1px solid rgb(142, 194, 253); cursor: pointer;">3</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td id="v8"
                                                                                    style="width: 18px; height: 18px; background: rgb(255, 255, 255); font: 10px Arial; color: rgb(51, 51, 51); text-align: center; text-decoration: none; border: 1px solid rgb(142, 194, 253); cursor: pointer;">4</td>
                                                                                <td id="v9"
                                                                                    style="width: 18px; height: 18px; background: rgb(255, 255, 255); font: 10px Arial; color: rgb(51, 51, 51); text-align: center; text-decoration: none; border: 1px solid rgb(142, 194, 253); cursor: pointer;">5</td>
                                                                                <td id="v10"
                                                                                    style="width: 18px; height: 18px; background: rgb(255, 255, 255); font: 10px Arial; color: rgb(51, 51, 51); text-align: center; text-decoration: none; border: 1px solid rgb(142, 194, 253); cursor: pointer;">6</td>
                                                                                <td id="v11"
                                                                                    style="width: 18px; height: 18px; background: rgb(255, 255, 255); font: 10px Arial; color: rgb(51, 51, 51); text-align: center; text-decoration: none; border: 1px solid rgb(142, 194, 253); cursor: pointer;">7</td>
                                                                                <td id="v12"
                                                                                    style="width: 18px; height: 18px; background: rgb(255, 255, 255); font: 10px Arial; color: rgb(51, 51, 51); text-align: center; text-decoration: none; border: 1px solid rgb(142, 194, 253); cursor: pointer;">8</td>
                                                                                <td id="v13"
                                                                                    style="width: 18px; height: 18px; background: rgb(255, 255, 255); font: 10px Arial; color: rgb(51, 51, 51); text-align: center; text-decoration: none; border: 1px solid rgb(142, 194, 253); cursor: pointer;">9</td>
                                                                                <td id="v14"
                                                                                    style="width: 18px; height: 18px; background: rgb(255, 255, 255); font: 10px Arial; color: rgb(51, 51, 51); text-align: center; text-decoration: none; border: 1px solid rgb(142, 194, 253); cursor: pointer;">10</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td id="v15"
                                                                                    style="width: 18px; height: 18px; background: rgb(255, 255, 255); font: 10px Arial; color: rgb(51, 51, 51); text-align: center; text-decoration: none; border: 1px solid rgb(142, 194, 253); cursor: pointer;">11</td>
                                                                                <td id="v16"
                                                                                    style="width: 18px; height: 18px; background: rgb(255, 255, 255); font: 10px Arial; color: rgb(51, 51, 51); text-align: center; text-decoration: none; border: 1px solid rgb(142, 194, 253); cursor: pointer;">12</td>
                                                                                <td id="v17"
                                                                                    style="width: 18px; height: 18px; background: rgb(255, 255, 255); font: 10px Arial; color: rgb(51, 51, 51); text-align: center; text-decoration: none; border: 1px solid rgb(142, 194, 253); cursor: pointer;">13</td>
                                                                                <td id="v18"
                                                                                    style="width: 18px; height: 18px; background: rgb(255, 255, 255); font: 10px Arial; color: rgb(51, 51, 51); text-align: center; text-decoration: none; border: 1px solid rgb(142, 194, 253); cursor: pointer;">14</td>
                                                                                <td id="v19"
                                                                                    style="width: 18px; height: 18px; background: rgb(255, 255, 255); font: 10px Arial; color: rgb(51, 51, 51); text-align: center; text-decoration: none; border: 1px solid rgb(142, 194, 253); cursor: pointer;">15</td>
                                                                                <td id="v20"
                                                                                    style="width: 18px; height: 18px; background: rgb(255, 255, 255); font: 10px Arial; color: rgb(51, 51, 51); text-align: center; text-decoration: none; border: 1px solid rgb(142, 194, 253); cursor: pointer;">16</td>
                                                                                <td id="v21"
                                                                                    style="width: 18px; height: 18px; background: rgb(255, 255, 255); font: 10px Arial; color: rgb(51, 51, 51); text-align: center; text-decoration: none; border: 1px solid rgb(142, 194, 253); cursor: pointer;">17</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td id="v22"
                                                                                    style="width: 18px; height: 18px; background: rgb(255, 255, 255); font: 10px Arial; color: rgb(51, 51, 51); text-align: center; text-decoration: none; border: 1px solid rgb(142, 194, 253); cursor: pointer;">18</td>
                                                                                <td id="v23"
                                                                                    style="width: 18px; height: 18px; background: rgb(255, 255, 255); font: 10px Arial; color: rgb(51, 51, 51); text-align: center; text-decoration: none; border: 1px solid rgb(142, 194, 253); cursor: pointer;">19</td>
                                                                                <td id="v24"
                                                                                    style="width: 18px; height: 18px; background: rgb(255, 255, 255); font: 10px Arial; color: rgb(51, 51, 51); text-align: center; text-decoration: none; border: 1px solid rgb(142, 194, 253); cursor: pointer;">20</td>
                                                                                <td id="v25"
                                                                                    style="width: 18px; height: 18px; background: rgb(255, 255, 255); font: 10px Arial; color: rgb(51, 51, 51); text-align: center; text-decoration: none; border: 1px solid rgb(142, 194, 253); cursor: pointer;">21</td>
                                                                                <td id="v26"
                                                                                    style="width: 18px; height: 18px; background: rgb(255, 255, 255); font: 10px Arial; color: rgb(51, 51, 51); text-align: center; text-decoration: none; border: 1px solid rgb(142, 194, 253); cursor: pointer;">22</td>
                                                                                <td id="v27"
                                                                                    style="width: 18px; height: 18px; background: rgb(255, 255, 255); font: 10px Arial; color: rgb(51, 51, 51); text-align: center; text-decoration: none; border: 1px solid rgb(142, 194, 253); cursor: pointer;">23</td>
                                                                                <td id="v28"
                                                                                    style="width: 18px; height: 18px; background: rgb(255, 255, 255); font: 10px Arial; color: rgb(51, 51, 51); text-align: center; text-decoration: none; border: 1px solid rgb(142, 194, 253); cursor: pointer;">24</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td id="v29"
                                                                                    style="width: 18px; height: 18px; background: rgb(255, 255, 255); font: 10px Arial; color: rgb(51, 51, 51); text-align: center; text-decoration: none; border: 1px solid rgb(142, 194, 253); cursor: pointer;">25</td>
                                                                                <td id="v30"
                                                                                    style="width: 18px; height: 18px; background: rgb(255, 255, 255); font: 10px Arial; color: rgb(51, 51, 51); text-align: center; text-decoration: none; border: 1px solid rgb(142, 194, 253); cursor: pointer;">26</td>
                                                                                <td id="v31"
                                                                                    style="width: 18px; height: 18px; background: rgb(255, 255, 255); font: 10px Arial; color: rgb(51, 51, 51); text-align: center; text-decoration: none; border: 1px solid rgb(142, 194, 253); cursor: pointer;">27</td>
                                                                                <td id="v32"
                                                                                    style="width: 18px; height: 18px; background: rgb(255, 255, 255); font: 10px Arial; color: rgb(51, 51, 51); text-align: center; text-decoration: none; border: 1px solid rgb(142, 194, 253); cursor: pointer;">28</td>
                                                                                <td id="v33"
                                                                                    style="width: 18px; height: 18px; background: rgb(255, 255, 255); font: 10px Arial; color: rgb(51, 51, 51); text-align: center; text-decoration: none; border: 1px solid rgb(142, 194, 253); cursor: pointer;">29</td>
                                                                                <td id="v34"
                                                                                    style="width: 18px; height: 18px; background: rgb(255, 255, 255); font: 10px Arial; color: rgb(51, 51, 51); text-align: center; text-decoration: none; border: 1px solid rgb(142, 194, 253); cursor: pointer;">30</td>
                                                                                <td id="v35"
                                                                                    style="width: 18px; height: 18px; background: rgb(255, 255, 255); font: 10px Arial; color: rgb(51, 51, 51); text-align: center; text-decoration: none; border: 1px solid rgb(142, 194, 253); cursor: pointer;">31</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td id="v36"
                                                                                    style="width: 18px; height: 18px; background: rgb(255, 255, 255); font: 10px Arial; color: rgb(51, 51, 51); text-align: center; text-decoration: none; border: 1px solid rgb(142, 194, 253); cursor: default;">&nbsp;
                                                                                </td>
                                                                                <td id="v37"
                                                                                    style="width: 18px; height: 18px; background: rgb(255, 255, 255); font: 10px Arial; color: rgb(51, 51, 51); text-align: center; text-decoration: none; border: 1px solid rgb(142, 194, 253); cursor: default;">&nbsp;
                                                                                </td>
                                                                                <td id="v38"
                                                                                    style="width: 18px; height: 18px; background: rgb(255, 255, 255); font: 10px Arial; color: rgb(51, 51, 51); text-align: center; text-decoration: none; border: 1px solid rgb(142, 194, 253); cursor: default;">&nbsp;
                                                                                </td>
                                                                                <td id="v39"
                                                                                    style="width: 18px; height: 18px; background: rgb(255, 255, 255); font: 10px Arial; color: rgb(51, 51, 51); text-align: center; text-decoration: none; border: 1px solid rgb(142, 194, 253); cursor: default;">&nbsp;
                                                                                </td>
                                                                                <td id="v40"
                                                                                    style="width: 18px; height: 18px; background: rgb(255, 255, 255); font: 10px Arial; color: rgb(51, 51, 51); text-align: center; text-decoration: none; border: 1px solid rgb(142, 194, 253); cursor: default;">&nbsp;
                                                                                </td>
                                                                                <td id="v41"
                                                                                    style="width: 18px; height: 18px; background: rgb(255, 255, 255); font: 10px Arial; color: rgb(51, 51, 51); text-align: center; text-decoration: none; border: 1px solid rgb(142, 194, 253); cursor: default;">&nbsp;
                                                                                </td>
                                                                                <td id="v42"
                                                                                    style="width: 18px; height: 18px; background: rgb(255, 255, 255); font: 10px Arial; color: rgb(51, 51, 51); text-align: center; text-decoration: none; border: 1px solid rgb(142, 194, 253); cursor: default;">&nbsp;
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td colspan="7" align="center" style="cursor:pointer;font:13px Arial;background:#c4e6f9" onclick="today()">Сегодня: 03-07-2022</td>
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
                                                                                            <a href="javascript:void(0);" onclick="sedate(1)">1 мес</a>,
                                                                                            <a href="javascript:void(0);" onclick="sedate(2)">2 мес</a>,
                                                                                            <a href="javascript:void(0);" onclick="sedate(3)">3 мес</a>,
                                                                                            <a href="javascript:void(0);" onclick="sedate(4)">4 мес</a>,
                                                                                            <a href="javascript:void(0);" onclick="sedate(5)">5 мес</a>,
                                                                                            <a href="javascript:void(0);" onclick="sedate(6)">6 мес</a>,
                                                                                            <a href="javascript:void(0);" onclick="sedate(12)">12 мес</a>
                                                                                            <br><br>
                                                                                            <strong>Общая стоимость:</strong>
                                                                                            <strong>
                                                                                                <font color="#313a81" id="total_price">0</font> $
                                                                                            </strong>
                                                                                            <br><br>
                                                                                            <strong>Ваш Баланс: <font color="#313a81">2.993</font>
                                                                                            </strong>$ | <a href="http://ihtier.net/balance.php">Пополнить</a>
                                                                                            <input type="hidden" name="day_count" id="day_count" value="30">
                                                                                            <br><br></strong></strong>
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td colspan="4" border="0">
                                                                                    <input name="user_login" type="hidden" value="">
                                                                                    <input name="submit" type="submit" value="Купить выбраный Вами пакет(ы)" style="color: #0000FF; font-size: 12pt; text-decoration: underline; font-weight: bold">
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
