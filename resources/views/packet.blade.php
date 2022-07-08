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

        span.message {
            color: red;
            line-height: 25px;
        }

        .hide {
            display: inline;
            position: absolute;
            z-index: -1;
            top: -100%;
            left: -100%;
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
                                                    <h3 style="text-align:left;margin-bottom:15px;">Купить пакет для <span style="color:#0000FF">{{ $client->login }}</span></h3>
                                                    <fieldset style="width: 850px" ;="">
                                                        <form name="user_packets_form" action="{{ route('packet.index', $client->id) }}" method="POST">
                                                            @csrf
                                                            <center>
                                                                <table border="1" class="list">
                                                                    <tbody>
                                                                        <tr>
                                                                            <th>
                                                                                <input type="checkbox" class="checkAll" data-change="off">
                                                                            </th>
                                                                            <th width="84">
                                                                                Пакет
                                                                            </th>

                                                                            <th width="98">
                                                                                Цена/мес.
                                                                            </th>
                                                                        </tr>
                                                                        @foreach ($packets as $packet)
                                                                            <tr class="@if ($loop->odd) norm @else alt @endif ">
                                                                                <td style="text-align:center;">
                                                                                    <input data-price="{{ $packet->price }}" class="packets" type="checkbox" value="{{ $packet->id }}" name="packets[]">
                                                                                </td>
                                                                                <td align="center" width="4000">
                                                                                    <p width="100"><b> <span title="Выбери меня">{{ $packet->title }}</span>
                                                                                        </b></p>
                                                                                </td>
                                                                                <td align="center" width="70">
                                                                                    <b>
                                                                                        {{ $packet->price }}
                                                                                        $</b>
                                                                                </td>
                                                                            </tr>
                                                                        @endforeach
                                                                    </tbody>
                                                                </table>
                                                                <table border="0" class="list">
                                                                    <tbody>
                                                                        <tr>
                                                                            <td colspan="4">
                                                                                <strong>Начало:
                                                                                    <input disabled type="date" value="{{ Carbon\Carbon::now()->format('Y-m-d') }}">
                                                                                    <br><br>
                                                                                    <strong>Конец:&nbsp;&nbsp;
                                                                                        <input id="date2" type="date" name="data2" value="{{ Carbon\Carbon::now()->addMonth()->format('Y-m-d') }}">
                                                                                        или Период:
                                                                                        <a data-date={{ Carbon\Carbon::now()->addMonth()->format('Y-m-d') }} href="javascript:void(0);" onclick="addMonth(this)">1 мес</a>,
                                                                                        <a data-date={{ Carbon\Carbon::now()->addMonths(2)->format('Y-m-d') }} href="javascript:void(0);" onclick="addMonth(this)">2 мес</a>,
                                                                                        <a data-date={{ Carbon\Carbon::now()->addMonths(3)->format('Y-m-d') }} href="javascript:void(0);" onclick="addMonth(this)">3 мес</a>,
                                                                                        <a data-date={{ Carbon\Carbon::now()->addMonths(4)->format('Y-m-d') }} href="javascript:void(0);" onclick="addMonth(this)">4 мес</a>,
                                                                                        <a data-date={{ Carbon\Carbon::now()->addMonths(5)->format('Y-m-d') }} href="javascript:void(0);" onclick="addMonth(this)">5 мес</a>,
                                                                                        <a data-date={{ Carbon\Carbon::now()->addMonths(6)->format('Y-m-d') }} href="javascript:void(0);" onclick="addMonth(this)">6 мес</a>,
                                                                                        <a data-date={{ Carbon\Carbon::now()->addMonths(12)->format('Y-m-d') }} href="javascript:void(0);" onclick="addMonth(this)">12 мес</a>
                                                                                        <br><br>
                                                                                        <strong>Общая стоимость:</strong>
                                                                                        <strong>
                                                                                            <font color="#313a81" id="total_price">0.00</font> $
                                                                                        </strong>
                                                                                        <br><br>
                                                                                        <strong>Ваш Баланс: <font color="#313a81" id="balance">{{ $dealer->balance }}</font></strong>
                                                                                        $ |
                                                                                        <a href="{{ route('balance.index') }}">Пополнить</a>
                                                                                        <br>
                                                                                        <span id="message" class="message hide"></span>
                                                                                        <br>
                                                                                    </strong>
                                                                                </strong>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td colspan="4" border="0">
                                                                                <input data-status='' id="btn_for_buy" type="button" value="Купить выбраный Вами пакет(ы)" style="color: #0000FF; font-size: 14px; text-decoration: none; font-weight: bold">
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
    <script src="{{ asset('js/moment.js') }}"></script>
    <script>
        const packets = document.querySelectorAll('input.packets');
        const checkAll = document.querySelector('input.checkAll');
        const date2 = document.querySelector('#date2');
        const totalPrice = document.querySelector('#total_price');
        const balance = document.querySelector('#balance');
        const btnForBuy = document.querySelector('#btn_for_buy');
        const message = document.querySelector('#message');
        const d = new Date();
        checkAll.addEventListener('change', function() {
            const change = checkAll.dataset.change;
            if (change == 'off') {
                for (let i = 0; i < packets.length; i++) {
                    packets[i].checked = true;
                }
                checkAll.dataset.change = 'on'
            }
            if (change == 'on') {
                for (let i = 0; i < packets.length; i++) {
                    packets[i].checked = false;
                }
                checkAll.dataset.change = 'off'
            }
        });

        setInterval(function() {
            let generalPrice = 0;
            for (let i = 0; i < packets.length; i++) {
                if (packets[i].checked) {
                    generalPrice += parseFloat(packets[i].dataset.price);
                    generalPrice = parseFloat(generalPrice.toFixed(2));
                }
            }
            let priceForDay = parseFloat((generalPrice / 30));
            const startTime = (d.getTime() / 1000).toFixed();
            let endTime = new Date(date2.value).getTime();
            endTime = (endTime / 1000).toFixed();
            let different = parseInt(endTime) - parseInt(startTime);
            different = parseInt(parseInt(different / 3600) / 24);
            const pricePackets = (priceForDay * different).toFixed(2);
            totalPrice.textContent = pricePackets;
            if (parseFloat(pricePackets) == 0) {
                btnForBuy.dataset.status = 'packet';
            } else if (parseFloat(balance.textContent) < pricePackets) {
                btnForBuy.dataset.status = 'balance';
            } else {
                btnForBuy.dataset.status = '';
            }
        }, 500);
        const addMonth = function(event) {
            date2.value = event.dataset.date;
        }
        btnForBuy.addEventListener('click', function(event) {
            if (event.target.dataset.status == 'balance') {
                message.textContent = 'НЕДОСТАТОЧНО СРЕДСТВ';
                message.classList.remove('hide');
                setTimeout(removeMessage, 2000);
            } else if (event.target.dataset.status == 'packet') {
                message.textContent = 'НЕ ВЫБРАН ПАКЕТ(Ы)';
                message.classList.remove('hide');
                setTimeout(removeMessage, 2000);
            } else {
                event.target.setAttribute('type', 'submit');
                event.target.click();
            }
        });
        const removeMessage = function() {
            message.classList.add('hide');
            message.textContent = '';
        }
    </script>
</body>

</html>
