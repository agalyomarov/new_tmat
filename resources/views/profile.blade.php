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
        .cen {
            text-align: left;
        }

        .error {
            color: red;
            font-size: 14px;
            text-align: left;
            margin-bottom: 10px;
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
                                                    @foreach ($errors->getMessages() as $error)
                                                        <div class="error">
                                                            {{ $error[0] }}
                                                        </div>
                                                    @endforeach
                                                    <form action="{{ route('profile.update') }}" method="post">
                                                        @csrf
                                                        @method('PUT')
                                                        <input type="hidden" name="id" value="{{ $dealer->id }}">
                                                        <h2>Ваш профиль</h2>
                                                        <table>
                                                            <tbody>
                                                                <tr>
                                                                    <td><strong>Логин</strong></td>
                                                                    <td>
                                                                        <input type="text" class="input_200" name="login" value="{{ $dealer->login }}">

                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td><strong>Пароль</strong></td>
                                                                    <td>
                                                                        <input type="text" class="input_200" name="password" value="{{ $dealer->password }}">
                                                                        </b>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td><strong>Скидка:</strong></td>
                                                                    <td>
                                                                        {{ $dealer->discount }}%
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td><strong>Эл. почта</strong></td>
                                                                    <td>
                                                                        <input type="text" class="input_200" name="email" value="{{ $dealer->email }}">
                                                                    </td>
                                                                </tr>
                                                                <tr>

                                                                <tr>
                                                                    <td colspan="2">
                                                                        <input class="btn" type="submit" name="save" value="Сохранить">
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </form>
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
