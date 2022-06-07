<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width">

<title>Page 1</title>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <div class="container">
        <header>
            <div class="row">
                <div class="col-sm-6">
                    <h1>Website Name</h1>
                </div>
                <!--
                <div class="col-sm-6 align-right">
                    <a href="/">HOME へ戻る</a>
                </div>
                -->
            </div>
        </header>
    </div><!-- container1 -->

    <hr>

    
    <div class="conainer">
        
        <!-- $sorted = $posts->sortBy("updated_at"); -->
        
        @foreach ($posts as $post)
            <div class="container-md">
                <div class="title">
                    <h2 class="title">{{ $post->title }}</h2o>
                </div>
                <div class="text">
                    <p class="body">{{ $post->body }}</p>
                </div>
            </div>
            
            <hr>
            
        @endforeach
    </div>
    
    {{-- test --}}
    
    {{ $posts->links() }}
    
    
    <!--
    <div class="container">
        <footer>
            <p>&copy; H2O space</p>
        </footer>
    </div> --> <!-- container2 -->

</body>
</html>