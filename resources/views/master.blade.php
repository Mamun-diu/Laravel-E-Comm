<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>E-Commerce Project</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <style>
        .custom-login{
            min-height: 450px;
            padding-top : 100px;
        }
        .custom-product{
            min-height : 430px;
        }
        .slider-img{
            height : 400px !important;
            width : 100% !important;
        }
        .carousel-caption{

            border-radius: 64px;
        }
        .trending-img{
            width: 100%;
        }
        .trending-wrapper{
            overflow: hidden;
        }
        .custom-card-group{
            float : left;
            width : 18%;
            margin-right : 2.5%;

        }
        .custom-card-group:last-child{
            margin-right : 0;
        }
        .custom-card{

        }
        .custom-card-body{
            padding: 0;
        }
        .details-img{
            height : 200px;
        }
        .search-box{
            width : 500px;
        }
        a{
            text-decoration : none;
        }
    </style>
</head>
<body>
    {{ View::make('header') }}
    @yield('content')
    {{ View::make('footer') }}

    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    <script>
        $(document).ready(function(){
            $("button").click(function(){

            })
        })
    </script>
</body>
</html>
