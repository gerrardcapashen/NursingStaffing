<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Lista de usuarios - Nursing Staffing</title>
    </head>
    <body>
        <h1>{{ $title }}</h1>


		<ul>
			@forelse ($users as $user)
				<li>{{ $user }}</li>
            @empty
                <li>No hay usuarios registrados.</li>
			@endforelse
		</ul>
    </body>
</html>