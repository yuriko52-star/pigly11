<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="テキストテキストテキストテキストテキストテキストテキストテキストテキスト">
    <title>Pigly</title>
    <link rel="stylesheet" href="https://unpkg.com/ress/dist/ress.min.css" class="">
    <link rel="stylesheet" href="{{ asset('css/login.css') }}" class="">

</head>
<body>
    <div class="wrapper">
        <h1 class="site-title">PiGLy</h1>
        <h2 class="title">ログイン</h2>
        <form action="/login" method="POST">
            @csrf
        <div class="inner">
        
        <label for="" class="tab">メールアドレス</label>
        <input type="text" class="input" name="email" placeholder="メールアドレスを入力" value="">
        <p class="error">
            @error('email')
            {{ $message }}
            @enderror
        </p>
        <label for="" class="tab">パスワード</label>
        <input type="password" class="input" name="password" placeholder="パスワードを入力" value="">
        <p class="error">
            @error('password')
            {{ $message }}
            @enderror
        </p>
        </div>
        <div class="btn">
            <button class="login-btn">ログイン</button>
        </div>
        </form>
        <a href="/register/step1" class="link">アカウント作成はこちら</a>
        
    </div>
</body>
</html>