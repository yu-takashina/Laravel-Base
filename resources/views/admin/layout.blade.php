<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <meta name="format-detection" content="telephone=no">
  <title></title>
</head>

<body>

  @auth('admin')
    <header>
      <nav>
        <ul>
          <li><a href="{{ route('admin.logout') }}">ログアウト</a></li>
      </nav>
    </header>
  @endauth

  <main>
    @yield('content')
  </main>

  <footer>
  </footer>
</body>
</html>
