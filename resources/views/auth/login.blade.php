<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <title>Ecommerce Login</title>
    <style>
        body {
            font-family: Arial;
            background: #f6f7fb
        }

        .box {
            max-width: 420px;
            margin: 70px auto;
            background: #fff;
            padding: 24px;
            border-radius: 10px;
            box-shadow: 0 2px 12px rgba(0, 0, 0, .08)
        }

        input {
            width: 100%;
            padding: 10px;
            margin: 8px 0;
            border: 1px solid #ddd;
            border-radius: 8px
        }

        button {
            width: 100%;
            padding: 10px;
            border: 0;
            border-radius: 8px;
            background: #2563eb;
            color: #fff;
            font-weight: 700
        }

        .err {
            color: #b91c1c;
            font-size: 13px
        }
    </style>
</head>

<body>
    <div class="box">
        <h2>Ecommerce App</h2>
        <p>Login will also auto-login Foodpanda.</p>

        @if($errors->any())
        <div class="err">{{ $errors->first() }}</div>
        @endif

        <form method="post" action="{{ route('login.do') }}">
            @csrf
            <input type="email" name="email" placeholder="Email" value="{{ old('email') }}" required>
            <input type="password" name="password" placeholder="Password" required>
            <button type="submit">Login</button>
        </form>
    </div>
</body>

</html>