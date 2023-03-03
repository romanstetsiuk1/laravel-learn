<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        <nav>
            <ul>
                <li><a href="{{route('main.index')}}">Main</a></li>
                <li><a href="{{route('post.index')}}">Post</a></li>
            </ul>
        </nav>
    </div>

    <div>
    @yeild('content')
    </div>
</body>
</html>