   <div style="position: absolute; width: 900px; height: 47px; z-index: 3; left: 85px; top: -40px" id="layer3">
       <ul id="nav">
           <li><a href="javascript:void(0);"><b>Ваш баланс</b></a>
               <ul>
                   <li><a href="{{ route('balance.index') }}">Пополнить счет</a></li>
                   <li><a href="{{ route('balance.history') }}">История баланса</a></li>
               </ul>
           </li>
           <li><a href="javascript:void(0);"><b>Клиентам</b></a>
               <ul>
                   <li><a href="{{ route('main.index') }}">Главная</a></li>
                   <li><a href="{{ route('profile.index') }}">Ваш профиль</a></li>
                   {{-- <li><a href="{{ route('server.index') }}">Выбор сервера</a></li> --}}
                   {{-- <li><a href="{{ route('packet.index') }}">Купить пакет</a></li> --}}
                   <li><a href="{{ route('tuner.index') }}">Получить настройки</a></li>
                   <li><a href="{{ route('port.index') }}">Таблица портов</a></li>
               </ul>
           </li>

           <li><a href="{{ route('dealer.index') }}"><b>Диллерам</b></a>
           </li>
           <li><a href="{{ route('news.index') }}"><b>Новости</b></a></li>
           <li><a href="{{ route('feedback.index') }}"><b>Тех подержка</b></a></li>
           <li><a href="{{ route('help.index') }}"><b>Помощь</b></a></li>
           <li><a href="{{ route('rules.index') }}"><b>Правила</b></a></li>
           <li><a href="{{ route('login.logout') }}"><b>Выход</b></a></li>
       </ul>
   </div>
