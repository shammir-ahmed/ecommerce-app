<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <title>Ecommerce Dashboard</title>
</head>

<body style="font-family:Arial">
    <h2>Ecommerce Dashboard</h2>
    <p>You are logged in.</p>
    @if(session('error')) <p style="color:#b91c1c">{{ session('error') }}</p> @endif

    <form method="post" action="{{ route('logout') }}">
        @csrf
        <button type="submit">Logout</button>
    </form>
</body>

</html>