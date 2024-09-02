@extends('layouts.app')
@section('content')

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
    <style>
        .fade-in {
            opacity: 0;
            transition: opacity 4s;
        }

        .fade-in.loaded {
            opacity: 1;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="jumbotron text-center">
            <h1 id="welcome-text" class="display-1 fade-in mt-5">Benvenuto!</h1>
        </div>
    </div>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            document.getElementById("welcome-text").classList.add("loaded");
        });
    </script>
</body>

</html>


@endsection