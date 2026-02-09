<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="テキストテキストテキストテキストテキストテキストテキストテキストテキスト">
    <title>Pigly</title>
    <link rel="stylesheet" href="https://unpkg.com/ress/dist/ress.min.css" class="">
    <link rel="stylesheet" href="{{ asset('css/register2.css') }}" class="">

</head>
<body>
    <div class="wrapper">
        <h1 class="site-title">PiGLy</h1>
        <h2 class="title">新規会員登録</h2>
        <p class="sub-title">STEP2 体重データの入力</p>
        <form action="{{ route('register.step2.store') }}" method="POST">
            @csrf
        <div class="inner">
            <label for="" class="tab">現在の体重</label>
            <input type="text" class="input" name="weight" placeholder="現在の体重を入力" value=""><span>kg</span>
            <p class="error">
                @error('weight')
                {{ $message}}
                @enderror
            </p>
            <label for="" class="tab">目標の体重</label>
            <input type="text" class="input" name="target_weight" placeholder="目標の体重を入力" value="">kg
            <p class="error">
                @error('target_weight')
                {{ $message}}
                @enderror
            </p>
        
        </div>
        <div class="btn">
            <button class="create-btn">アカウント作成</button>
        </div>
        </form>
        
    </div>
</body>
</html>