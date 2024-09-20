<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>@yield('title','Todo Liste')</title>	
    <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">
</head>
<body>
    <header>
        <nav>
        <ul>
        <li><a href="{{ route('tasks.insdex') }}">tâche</a></li>
        <li><a href="{{ route('tasks.create') }}">Créer une tâche</a></li>
        <li><a href="{{ route('tasks.create') }}">Tâche en cours</a></li>
        <li><a href="{{ route('tasks.create') }}">Tâche terminées</a></li>
        </ul>
        <nav>
    </header>
    <main> 
        @yield('content')
    </main>
    
</body>
</html>