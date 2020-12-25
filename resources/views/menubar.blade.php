<div class="box1">
    <a href={{route('mypage')}}>
        <img class="img-thumbnail rounded-circle" src="/assets/img/7.png">
    </a>
    <span class="badge badge-dark">生徒</span >
    <h1 class="text-center">鈴木　太郎</h1>
    <div class="img_box text-center">
        <img class="star" src="/assets/img/17.jpg">
        <h2 class="text_box text-center">2</h2>
    </div>
    <br><br><br>
    <div class="list-group menu" >
        <a href="{{route('home')}}">
            <button type="button" class="list-group-item list-group-item-action">ホーム</button>
        </a>
        <a href="{{route('news')}}">
        <button type="button" class="list-group-item list-group-item-action">お知らせ</button>
        </a>
        <a href="{{route('talk')}}">
            <button type="button" class="list-group-item list-group-item-action">トーク</button>
        </a>
        <a href="{{route('posting')}}">
            <button type="button" class="list-group-item list-group-item-action">投稿する</button>
        </a>
    </div>
</div>
