<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> Acesso ao Sistema </title>

    <style>
        html,
        body 
        {
            height: 100%
        }

     </style>
    <link href="path/to/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-migrate-3.3.2.js"></script>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
</head>
<body>
   
    <div class="container h-100">
        <div class="row h-50 justify-content-center align-items-center">
            <h1 classe= "align-items-center">
                Sistema LDXPS
            </h1>
            <a href="{{route('home')}}" type="button" class="btn btn-success btn-lg btn-block">
                Acesso
            </a>     
        </div>
        <div class="col-4">
            <div class="row">
                <p>Prova para o Processo Seletivo Landix- 2021</p>
                <p>Desenvolvido por Mateus Chacon</p>
                <p>Links de Perfil: </p>
                <a href="https://linkedin.com/in/mateuschacon"  type="button" class="btn btn-primary btn-sm">      
                    <span data-feather="linkedin"></span> Linkedin
                </a>
                <a href="https://github.com/ChaconLima" type="button" class="btn btn-dark btn-sm">
                    <span data-feather="github"></span>Github 
                </a>
            </div>
        </div>
    </div>
    
   
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    <script src="{{url(mix('LDXPS/js/feather.js'))}}"></script>
    <script src="{{url(mix('LDXPS/js/page.js'))}}"></script>
</body>
</html>