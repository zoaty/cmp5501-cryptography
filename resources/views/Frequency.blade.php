<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Frequency Calculator</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>

<body>

    <div class="container bg-light">
        <div class="d-flex justify-content-center">
            <form method="POST" action="{{route('calculate.frequency')}}">
                @csrf
                <table class="mt-5">
                    <tr>
                        <td>
                            <h class="me-3 fs-1">Input:</h>
                            <textarea class="align-middle" name="name1" rows="5" cols="40" placeholder="Enter your text here..."></textarea>
                        </td>
                    </tr>
                    <tr class="text-center">
                        <td> <input class="mt-3 ms-5" type="submit" name="submit" value="Submit"/> </td>
                    </tr>
                </table>
            </form>
        </div>

        <div>

        </div>
    </div>

</body>

</html>
