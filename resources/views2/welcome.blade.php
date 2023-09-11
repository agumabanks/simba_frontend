<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
        <link rel="stylesheet" href='https://amk.sanaa.co/dist/css/app.css' />

    </head>
{{-- <html lang="en"> --}}
{{-- <head>
    <title>User Management</title>
</head> --}}
<body>
    <h1>User Management</h1>

    <!-- Form for Registering a User -->
    <form action="{{ url('/register') }}" method="post">
        @csrf
        <input type="text" name="username" placeholder="Username">
        <input type="password" name="password" placeholder="Password">
        <input type="email" name="email" placeholder="Email">
        <button type="submit">Register</button>
    </form>

    <!-- Form for Fetching a User -->
    <form action="{{ url('/getuser') }}" method="get">
        <input type="text" name="user_id" placeholder="User ID">
        <button type="submit">Get User</button>
    </form>

    <!-- Display all Users -->
    <h2>All Users</h2>
    <table>
        <tr>
            <th>User ID</th>
            <th>Username</th>
            <th>Email</th>
            <th>Created At</th>
        </tr>
        @foreach ($users as $user)
        <tr>
            <td>{{ $user->user_id }}</td>
            <td>{{ $user->username }}</td>
            <td>{{ $user->email }}</td>
            <td>{{ $user->created_at }}</td>
        </tr>
        @endforeach
    </table>
</body>
{{-- </html> --}}

</html>
