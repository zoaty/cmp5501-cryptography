<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Result</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>
<body>

    <div class="container bg-light">
        <div class="text-center mt-5 fs-3">
            <?php
            for($i = 0; $i < count($freq); $i++)
            {
                if($str[$i] != ' ' && $str[$i] != '0')
                {
                    echo($str[$i] . " - " . $freq[$i] . " = " . round($freq[$i]/strlen($str),3));
                    echo("<br>");
                }
            }
            echo("Total word count : " . $words);
            echo("<br>");
            echo("Total line  count : " . $lines+1);
            ?>
        </div>

        <div class="text-center mt-3 pb-3">
            <a class="btn btn-lg btn-secondary fs-1" href="{{route('back')}}">Back</a>
        </div>
    </div>

</body>
</html>
