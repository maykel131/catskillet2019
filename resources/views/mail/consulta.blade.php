<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('catskillet/css/bootstrap.min.css')}}"  type="text/css">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Consulta Agendamento</h1>
    <table class="table table-bordered table-hover"> 
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>Email</th>
                    <th>Telefone</th>
                    <th>Especialidade</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{$nome}}</td>
                    <td>{{$email}}</td>
                    <td>{{$telefone}}</td>
                    <td>{{$especialidade}}</td>
                </tr>
            </tbody>
    </table>

<script src="{{asset('catskillet/js/jquery-1.10.2.js')}}"></script> 
<script src="{{asset('catskillet/js/bootstrap.min.js')}}"></script> 
</body>
</html>