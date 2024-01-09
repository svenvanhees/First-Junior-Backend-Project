<!--Simple page with users to test some things with laravel -->
<!DOCTYPE html>
    <html>
        <head>
        </head>
        <body>
            <h1>Users (page to test out some basic laravel)</h1>
            @foreach ($users as $user)
                <li>{{$user->name}}</li>
            @endforeach
        </body>
    </html>
