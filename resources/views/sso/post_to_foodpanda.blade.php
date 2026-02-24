<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <title>SSO Redirect</title>
</head>

<body>
    <p>Redirecting to Foodpanda...</p>

    <form id="ssoForm" method="post" action="{{ $foodpandaUrl }}">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <input type="hidden" name="food_token" value="{{ $foodToken }}">
    </form>

    <script>
        document.getElementById('ssoForm').submit();
    </script>
</body>

</html>