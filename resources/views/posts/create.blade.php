<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width">

    <title>posting page</title>

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
                    <h1> Posting</h1>
                </div>
                <div class="col-sm-6 align-right">
                    <a href="/posts">Return</a>
                </div>
            </div>
        </header>
    </div><!-- container1 -->

        <hr>

        <div class="container">
            <form action="/posts" method="POST" class="row">
                @csrf
                <div class="col-sm-8 col-sm-offset-2">
                    <p> Fill the following information and click "Save".</p>

                    <div class="form-group">
                        <label for="title_post"> Title <span class="label label-danger">Requred</span></label>
                        <input type="text" id="title_post" name="post[title]" class="form-control" required>
                    </div>
                    
                    <div class="form-group">
                        <label for="body_post"> Body <span class="label label-danger">Requred</span></label>
                        <textarea name="post[body]" id="body_post" rows="10" class="form-control" required></textarea>
                    </div>
                    {{-- <input type="submit" value="Save"/> --}}
                    <button type="submit" class="btn btn-default"> Save </button>
                </div><!-- col-sm-8 -->
            </form>
        </div>

</body>
</html>