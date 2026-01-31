<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="テキストテキストテキストテキストテキストテキストテキストテキストテキスト">
    <title>Pigly</title>
    <link rel="stylesheet" href="https://unpkg.com/ress/dist/ress.min.css" class="">
    <link rel="stylesheet" href="{{ asset('css/admin.css') }}" class="">
</head>
<body>
    <header id="header">
        <div class="flex-item">
            <h1 class="site-title">PiGLy</h1>
            <nav>
                <ul>
                    <li>
                        <form action="" class="">
                            <button class="setting">目標体重設定</button>
                        </form>
                    </li>
                    <li>
                        <form action="" class="">
                            <button class="logout">ログアウト</button>
                        </form>
                    </li>
                </ul>
            </nav>
        </div>
    </header>
    <main>
       <div class="top-content wrapper">
        <div class="flex-item">
            <div class="target">
                <label for="" class="tab">目標体重</label>
                <h2>45.0<small>kg</small></h2>

            </div>
            <div class="to-target">
                <label for="" class="tab">目標まで</label>
                <h2>45.0<small>kg</small></h2>

            </div>
            <div class="latest">
                <label for="" class="tab">最新体重</label>
                <h2>45.0<small>kg</small></h2>

            </div>
        </div>

       </div> 
       <div class="under-content wrapper">
            <div class="items">
                <select name="" id="" class="select">
                    <option value="" class="">2025/01/01</option>
                </select>
                <span>~</span>
                <select name="" id="" class="select">
                    <option value="" class="">2025/01/31</option></select>
                <button class="search-btn">検索</button>
                <button class="add-btn">データ追加</button>
            </div>
            <table>
                <colgroup>
                    <col style="width:400px;">
                    <col style="width:200px;">
                    <col style="width:300px;">
                    <col style="width:100px;">
                    <col style="width:100px;">
                </colgroup>
                <thead>
                    <tr>
                        <th>日付</th>
                        <th>体重</th>
                        <th>食事摂取カロリー</th>
                        <th>運動時間</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>2026/01/31</td>
                        <td>46.5kkg</td>
                        <td>1200cal</td>
                        <td>00.15</td>
                        <td>pen</td>
                    </tr>
                </tbody>

            </table>
            <p class="pagination">ページネーション</p>
           

            </div>
       </div>
    </main>

</body>
</html>