@extends('layouts.layout')

@section('content')

@extends('menubar')

<div class="box2">
    <div class="box2.5">
        <h1>投稿編集</h1>
        <br>
        <a href="{{route('posting')}}"><P>フォームへ戻る</P></a>
    </div>
    <div class="box2.5">
        <h5 class="page-header">タイトル</h5>
        <div class="box3.5.1">
            <h4>Webアプリケーション開発の授業について</h4>
        </div>
        <br>
        <h5>本文</h5>
        <div class="box3.5">
            <h4>
                今日の授業のCookieについて質問です。<br>
                Cookieを消すときに””を入れる意味が分かりません。<br>
                分かる人、教えてください！<br>
                よろしくお願いします！<br>
                確か、授業で先生がっていたような…<br>
                記憶が曖昧です 笑
            </h4>
        </div>
        <br>
        <h5>添付ファイル設定</h5>
        <div class="box3.5.2">
            <h4>添付ファイル（１）　Cookie.jpg</h4>
            <h4>添付ファイル（２）　Cookie2.jpg</h4>
            <h4>添付ファイル（３）<span style="color: #EEEEEE">　ファイルが選択されていません</span></h4>
            <h4>添付ファイル（４）<span style="color: #EEEEEE">　ファイルが選択されていません</span></h4>
            <h4>添付ファイル（５）<span style="color: #EEEEEE">　ファイルが選択されていません</span></h4>

        </div>
        <div class="box2.5">
            <a href="{{route('home')}}">
                <button class="button btn btn-secondary">投稿する</button>
            </a>
            <br><br>
        </div>
    </div>
</div>


@endsection
