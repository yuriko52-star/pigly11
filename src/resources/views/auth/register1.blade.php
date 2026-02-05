<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="テキストテキストテキストテキストテキストテキストテキストテキストテキスト">
    <title>Pigly</title>
    <link rel="stylesheet" href="https://unpkg.com/ress/dist/ress.min.css" class="">
    <link rel="stylesheet" href="{{ asset('css/register1.css') }}" class="">

</head>
<body>
    <div class="wrapper">
        <h1 class="site-title">PiGLy</h1>
        <h2 class="title">新規会員登録</h2>
        <p class="sub-title">STEP1 アカウント情報の登録</p>
        <form action="{{ route('register.step1.store') }}" method="POST">
        @csrf
        <div class="inner">
        <label for="" class="tab">お名前</label>
        <input type="text" class="input" name="name" placeholder="名前を入力" value="">
        <p class="error">
            @error('name')
            {{ $message }}
            @enderror
        </p>
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
            <button type="submit" class="next-btn">次に進む</button>
        </div>
        </form>
        <a href="/login" class="link">ログインはこちら</a>
       
    </div>
</body>
</html>