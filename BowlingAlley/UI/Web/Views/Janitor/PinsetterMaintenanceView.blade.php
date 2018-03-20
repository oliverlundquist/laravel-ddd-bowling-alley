<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Pinsetter Maintenance View</title>
</head>
<body>
    <div>
        <h1>Next maintenance date is: {{ $maintenance_date }}</h1>
    </div>
</body>
</html>
