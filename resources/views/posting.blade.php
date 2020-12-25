@extends('layouts.layout')

@section('content')

@extends('menubar')

<div class="box2">
    <div class="box2.5">
        <h1>投稿編集</h1>
        <p>以下のフォームに必要事項を入力してください。</p>
        <br>
        <p>※入力から30分を経過すると接続が切れ、内容が消滅しますので途中で保存（登録）をお願いします。</p>
        <br>
        <a href="{{route('home')}}"><P>トップページへ戻る</P></a>
    </div>
    <div class="box2.5">
        <label for="title" class="h4">タイトル <span class="badge badge-danger">必須</span></label>
        <br>
        <input type="text" name="subject" maxlength="20" size="45" value="Webアプリケーション開発の授業について" style="font-size: 15px"/>
    </div>
    <div class="box2.5">
        <label for="title" class="h4">本文 <span class="badge badge-danger">必須</span></label>
        <br>
        <textarea name="honnbunn" rows="20" cols="150" style="font-size: 15px">
        今日の授業のCookieについて質問です。
        Cookieを消すときに””を入れる意味が分かりません。
        分かる人、教えてください！
        よろしくお願いします！
        確か、授業で先生が言っていたような…
        記憶が曖昧です 笑
        </textarea>
    </div>
    <div class="box2.5">
        <label for="title" class="h4">添付ファイル設定</label>
        <br>
        <br>
        <div>
            <p class="aaa">添付ファイル（１）</p>
                <p>ファイルが登録されました</p>
                <p><button class="btn btn-light">ファイルを選択</button>　Cookie.jpg</p>
        </div>
        <br>
        <div>
            <label class="aaa">添付ファイル（１）</label>
            <p>ファイルが登録されました</p>
            <p><button class="btn btn-light">ファイルを選択</button>　Cookie2.jpg</p>
        </div>
        <br>
        <div>
            <label class="aaa">添付ファイル（２）</label>
            <p>ファイルが登録されていません</p>
            <p><button class="btn btn-light">ファイルを選択</button>　選択されていません</p>
        </div>
        <br>
        <div>
            <label class="aaa">添付ファイル（３）</label>
            <p>ファイルが登録されていません</p>
            <p><button class="btn btn-light">ファイルを選択</button>　選択されていません</p>
        </div>
        <br>
        <div>
            <label class="aaa">添付ファイル（４）</label>
            <p>ファイルが登録されていません</p>
            <p><button class="btn btn-light">ファイルを選択</button>　選択されていません</p>
        </div>
        <br>
        <div>
            <label class="aaa">添付ファイル（５）</label>
            <p>ファイルが登録されていません</p>
            <p><button class="btn btn-light">ファイルを選択</button>　選択されていません</p>
        </div>
    </div>
    <div class="box2.5">
        <a href="{{route('check')}}">
            <button class="button btn btn-secondary">入力内容を確認する</button>
        </a>
        <br><br>
    </div>
</div>



@endsection
