<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <a href="/"> Home </a>
    <a href="/about"> about</a>
    <a href="/blog"> blog</a>
    <a href="/contact"> contact</a>

    <h1>Welcome to About Page</h1>
    <h3> Sang Bintang : {{ $nama }}</h3>

    <img src="{{ asset('images/sang_bintang.jpeg') }}" alt="SangBintang" width="600px">

    <script src="js/script.js"></script>

</body>
</html>