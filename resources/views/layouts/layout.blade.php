<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    {{--<meta name="csrf-token" content="{!! csrf_token() !!}" />--}}
    <link rel="icon" href="../../../../favicon.ico">

    <title>{{ $title }}</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <!-- Custom styles for this template -->
    <link href="css/jumbotron.css" rel="stylesheet">
    <link rel="stylesheet" href="css/main.css">
    <link href="css/sticky-footer.css" rel="stylesheet">




</head>

<body>

@section('navbar')
    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
        <a class="navbar-brand" href="#">PHP test project </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarsExampleDefault">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item  ">
                    <a class="nav-link" href="{{ route('home') }}">Home </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('list') }}">List of of employees </a>
                </li>
            </ul>

        </div>
    </nav>
@show

<main class="main" >

    <!-- Main jumbotron for a primary marketing message or call to action -->
    @yield('header')

    @yield('content')


</main>


<footer class="footer">
    <div class="container">
        <span class="text-muted">PHP test - 2018 </span>
    </div>
</footer>

<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
<script src="../../assets/js/vendor/popper.min.js"></script>
<script src="../../dist/js/bootstrap.min.js"></script>


<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<script>

    function ajaxSearch() {
        $.ajax({
            url: '/search',
            type: "GET",
            dataType : "json",
            data: {
                name: $("#name").val(),
            },
            success: function(result){

                $( "#list" ).empty();//удаляем строки в таблице

                  // вывод результата поиска
                    var rowHtml = "<tr>";

                    rowHtml += "<th scope='row'>",
                    rowHtml += "",
                    rowHtml += "</th>",

                    rowHtml += "<td>",
                    rowHtml +="<div class='avatar'>",
                    rowHtml +="<img  src=\"storage/img/" + result.employee.photo+ "\" alt=\"Аватар\" class=\"avatar__pic\">",
                    rowHtml +="</div>",
                    rowHtml += "</td>",

                    rowHtml += "<td>",
                    rowHtml += result.employee.name,
                    rowHtml += "</td>",

                    rowHtml += "<td>",
                    rowHtml += result.employee.sociability,
                    rowHtml += "</td>",

                    rowHtml += "<td>",
                    rowHtml += result.employee.engineering,
                    rowHtml += "</td>",

                    rowHtml += "<td>",
                    rowHtml += result.employee.timemanagment,
                    rowHtml += "</td>",

                    rowHtml += "<td>",
                    rowHtml += result.employee.languages,
                    rowHtml += "</td>",

                    rowHtml += "<td>",
                    rowHtml += result.projects.length,
                    rowHtml += "</td>",

                    rowHtml += "</tr>",


                    $( "#list" ).append(rowHtml)

            },
            error: function(){alert('No result');}
        });
    }

</script>

</body>
</html>