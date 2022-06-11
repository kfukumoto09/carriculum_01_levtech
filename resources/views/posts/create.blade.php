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
            <form action="/posts" method="post" class="row">
                <div class="col-sm-8 col-sm-offset-2">
                    <p> Fill the following information and click "Save".</p>

                    <div class="form-group">
                        <label for="title_post"> Title<span class="label label-danger">Requred</span></label>
                        <input type="text" id="title_post" name="title_post" class="form-control" required>
                    </div>
                    
                    <div class="form-group">
                        <label for="body_post"> Body</label>
                        <textarea name="body_post" id="body_post" rows="10" class="form-control"></textarea>
                    </div>
                    <button type="submit" class="btn btn-default"> Save</button>
                </div><!-- col-sm-8 -->
            </form>
        </div>

        <hr>

    <div class="container">
        <footer>
            <p>&copy; H2O space</p>
        </footer>
    </div><!-- container2 -->
</body>
</html>