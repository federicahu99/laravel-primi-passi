<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <header>

        <ul>

            @foreach($links as $link)
            <li>
                <a href="{{ $link['url'] }}">{{ $link['name'] }}</a>
            </li>
            @endforeach
            
        </ul>

    </header>
    
</body>
</html>