<!DOCTYPE html>
<html lang="ja">
    
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width">
    
    <title>@yield('title')</title>
    
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    
    <h1>@yield('title')</h1>
    @section('menubar')
    
    <h2 class="menutitle">* Menu</h2>
    <ul>
        <li>@show</li>
    </ul>
    
    <hr size="1">
    
    <div class="content">
        @yield('content')
    </div>
    
    <hr size="1">
    
    <div class="footer">
        @yield('footer')
    </div>

</body>

</html>