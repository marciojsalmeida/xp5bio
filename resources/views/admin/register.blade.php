<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Página de Cadastro - XP5bio</title>
    <link rel="stylesheet" href="{{url('assets/css/admin.login.css')}}">

</head>
<body>
    
    <div class="loginArea">
        <h1>Cadastro</h1>

        @if($error)
           
            <div class="error">{{ $error }}</div>

        @endif


        <form method="POST">
            @csrf
            <input type="email" name="email" id="email" placeholder="Digite seu e-mail" required />
            <input type="password" name="password" id="password" placeholder="Digite sua senha" required />
            <input type="submit" value="Cadastrar">

            Já tem cadastro ? <a href="{{url('/admin/login')}}">Faça login</a>

        </form>
    </div>
    
</body>
</html>