@extends('layouts.app')

@section('content')
    @if (Auth::check())
        <div>
            行ったことのある都道府県をクリックして、<br>
            登録しよう！<br>
            目指せ全国制覇！
        </div>
        {!! Form::open(['route' => 'registerPrefectures.store']) !!}
          {{Form::hidden('clickedTodofuken')}}
          {{Form::submit('登　録', ['class' => 'btn btn-primary'])}}
        {!! Form::close() !!}
        <div id="clickaresjmap">
            <ul class="clickaresjmap dropdown">
                <li class="area hokkaido-area">
                  <ul class="dropdown-menu">
                    <li class="todofuken hokkaido {{(in_array(1, $prefectures))?' bgGreen':''}}"><a href="#hokkaido"><span class="todofukenname" id="hokkaido">北海道</span></a></li>
                  </ul>
                </li>
                <li class="area touhoku-area">
                  <ul class="dropdown-menu">
                    <li class="todofuken aomori {{(in_array(2, $prefectures))?' bgGreen':''}}"><a href="#aomori"><span class="todofukenname">青森</span></a></li>
                    <li class="todofuken iwate {{(in_array(3, $prefectures))?' bgGreen':''}}"><a href="#iwate"><span class="todofukenname">岩手</span></a></li>
                    <li class="todofuken akita {{(in_array(5, $prefectures))?' bgGreen':''}}"><a href="#akita"><span class="todofukenname">秋田</span></a></li>
                    <li class="todofuken miyagi {{(in_array(4, $prefectures))?' bgGreen':''}}"><a href="#miyagi"><span class="todofukenname">宮城</span></a></li>
                    <li class="todofuken yamagata {{(in_array(6, $prefectures))?' bgGreen':''}}"><a href="#yamagata"><span class="todofukenname">山形</span></a></li>
                    <li class="todofuken fukushima {{(in_array(7, $prefectures))?' bgGreen':''}}"><a href="#fukushima"><span class="todofukenname">福島</span></a></li>
                  </ul>
                </li>
                <li class="area kanto-area">
                  <ul class="dropdown-menu">
                    <li class="todofuken ibaraki {{(in_array(8, $prefectures))?' bgGreen':''}}"><a href="#ibaraki"><span class="todofukenname">茨城</span></a></li>
                    <li class="todofuken tochigi {{(in_array(9, $prefectures))?' bgGreen':''}}"><a href="#tochigi"><span class="todofukenname">栃木</span></a></li>
                    <li class="todofuken gunma {{(in_array(10, $prefectures))?' bgGreen':''}}"><a href="#gunma"><span class="todofukenname">群馬</span></a></li>
                    <li class="todofuken chiba {{(in_array(12, $prefectures))?' bgGreen':''}}"><a href="#chiba"><span class="todofukenname">千葉</span></a></li>
                    <li class="todofuken saitama {{(in_array(11, $prefectures))?' bgGreen':''}}"><a href="#saitama"><span class="todofukenname">埼玉</span></a></li>
                    <li class="todofuken tokyo {{(in_array(13, $prefectures))?' bgGreen':''}}"><a href="#tokyo"><span class="todofukenname">東京</span></a></li>
                    <li class="todofuken kanagawa {{(in_array(14, $prefectures))?' bgGreen':''}}"><a href="#kanagawa"><span class="todofukenname">神奈川</span></a></li>
                  </ul>
                </li>
                <li class="area koshin-etsu-area">
                  <ul class="dropdown-menu">
                    <li class="todofuken nigata {{(in_array(15, $prefectures))?' bgGreen':''}}"><a href="#nigata"><span class="todofukenname">新潟</span></a></li>
                    <li class="todofuken nagano {{(in_array(20, $prefectures))?' bgGreen':''}}"><a href="#nagano"><span class="todofukenname">長野</span></a></li>
                    <li class="todofuken yamanashi {{(in_array(19, $prefectures))?' bgGreen':''}}"><a href="#yamanashi"><span class="todofukenname">山梨</span></a></li>
                  </ul>
                </li>
                <li class="area hokuriku-area">
                  <ul class="dropdown-menu">
                    <li class="todofuken toyama {{(in_array(16, $prefectures))?' bgGreen':''}}"><a href="#toyama"><span class="todofukenname">富山</span></a></li>
                    <li class="todofuken ishikawa {{(in_array(17, $prefectures))?' bgGreen':''}}"><a href="#ishikawa"><span class="todofukenname">石川</span></a></li>
                    <li class="todofuken fukui {{(in_array(18, $prefectures))?' bgGreen':''}}"><a href="#fukui"><span class="todofukenname">福井</span></a></li>
                  </ul>
                </li>
                <li class="area toukai-area">
                  <ul class="dropdown-menu">
                    <li class="todofuken shizuoka {{(in_array(22, $prefectures))?' bgGreen':''}}"><a href="#sizuoka"><span class="todofukenname">静岡</span></a></li>
                    <li class="todofuken aichi {{(in_array(23, $prefectures))?' bgGreen':''}}"><a href="#aichi"><span class="todofukenname">愛知</span></a></li>
                    <li class="todofuken gifu {{(in_array(21, $prefectures))?' bgGreen':''}}"><a href="#gifu"><span class="todofukenname">岐阜</span></a></li>
                    <li class="todofuken mie {{(in_array(24, $prefectures))?' bgGreen':''}}"><a href="#mie"><span class="todofukenname">三重</span></a></li>
                  </ul>
                </li>
                <li class="area kansai-area">
                  <ul class="dropdown-menu">
                    <li class="todofuken shiga {{(in_array(25, $prefectures))?' bgGreen':''}}"><a href="#shiga"><span class="todofukenname">滋賀</span></a></li>
                    <li class="todofuken kyoto {{(in_array(26, $prefectures))?' bgGreen':''}}"><a href="#kyoto"><span class="todofukenname">京都</span></a></li>
                    <li class="todofuken nara {{(in_array(29, $prefectures))?' bgGreen':''}}"><a href="#nara"><span class="todofukenname">奈良</span></a></li>
                    <li class="todofuken oosaka {{(in_array(27, $prefectures))?' bgGreen':''}}"><a href="#oosaka"><span class="todofukenname">大阪</span></a></li>
                    <li class="todofuken wakayama {{(in_array(30, $prefectures))?' bgGreen':''}}"><a href="#wakayama"><span class="todofukenname">和歌山</span></a></li>
                    <li class="todofuken hyogo {{(in_array(28, $prefectures))?' bgGreen':''}}"><a href="#hyogo"><span class="todofukenname">兵庫</span></a></li>
                  </ul>
                </li>
                <li class="area chugoku-area">
                  <ul class="dropdown-menu">
                    <li class="todofuken tottori {{(in_array(31, $prefectures))?' bgGreen':''}}"><a href="#tottori"><span class="todofukenname">鳥取</span></a></li>
                    <li class="todofuken shimane {{(in_array(32, $prefectures))?' bgGreen':''}}"><a href="#shimane"><span class="todofukenname">島根</span></a></li>
                    <li class="todofuken okayama {{(in_array(33, $prefectures))?' bgGreen':''}}"><a href="#okayama"><span class="todofukenname">岡山</span></a></li>
                    <li class="todofuken hiroshima {{(in_array(34, $prefectures))?' bgGreen':''}}"><a href="#hiroshima"><span class="todofukenname">広島</span></a></li>
                    <li class="todofuken yamaguchi {{(in_array(35, $prefectures))?' bgGreen':''}}"><a href="#yamaguchi"><span class="todofukenname">山口</span></a></li>
                  </ul>
                </li>
                <li class="area shikoku-area">
                  <ul class="dropdown-menu">
                    <li class="todofuken kagawa {{(in_array(37, $prefectures))?' bgGreen':''}}"><a href="#kagawa"><span class="todofukenname">香川</span></a></li>
                    <li class="todofuken tokushima {{(in_array(36, $prefectures))?' bgGreen':''}}"><a href="#tokushima"><span class="todofukenname">徳島</span></a></li>
                    <li class="todofuken kouchi {{(in_array(39, $prefectures))?' bgGreen':''}}"><a href="#kouchi"><span class="todofukenname">高知</span></a></li>
                    <li class="todofuken ehime {{(in_array(38, $prefectures))?' bgGreen':''}}"><a href="#ehime"><span class="todofukenname">愛媛</span></a></li>
                  </ul>
                </li>
                <li class="area kyu-syu-area">
                  <ul class="dropdown-menu">
                    <li class="todofuken fukuoka {{(in_array(40, $prefectures))?' bgGreen':''}}"><a href="#fukuoka"><span class="todofukenname">福岡</span></a></li>
                    <li class="todofuken ooita {{(in_array(44, $prefectures))?' bgGreen':''}}"><a href="#ooita"><span class="todofukenname">大分</span></a></li>
                    <li class="todofuken miyazaki {{(in_array(45, $prefectures))?' bgGreen':''}}"><a href="#miyazaki"><span class="todofukenname">宮崎</span></a></li>
                    <li class="todofuken kumamoto {{(in_array(43, $prefectures))?' bgGreen':''}}"><a href="#kumamoto"><span class="todofukenname">熊本</span></a></li>
                    <li class="todofuken saga {{(in_array(41, $prefectures))?' bgGreen':''}}"><a href="#saga"><span class="todofukenname">佐賀</span></a></li>
                    <li class="todofuken nagasaki {{(in_array(42, $prefectures))?' bgGreen':''}}"><a href="#nagasaki"><span class="todofukenname">長崎</span></a></li>
                    <li class="todofuken kagoshima {{(in_array(46, $prefectures))?' bgGreen':''}}"><a href="#kagoshima"><span class="todofukenname">鹿児島</span></a></li>
                  </ul>
                </li>
                <li class="area okinawa-area">
                  <ul class="dropdown-menu">
                    <li class="todofuken okinawa {{(in_array(47, $prefectures))?' bgGreen':''}}"><a href="#okinawa"><span class="todofukenname">沖縄</span></a></li>
                  </ul>
                </li>
            </ul>
        </div>
    @else
        <div class="center jumbotron">
            <div class="text-center">
                <h1>日本地図！</h1>
                {!! link_to_route('signup.get', '新規登録', [], ['class' => 'btn btn-lg btn-primary']) !!}
                {!! link_to_route('login', 'ログイン', [], ['class' => 'btn btn-lg btn-primary']) !!}
            </div>
        </div>
    @endif
@endsection