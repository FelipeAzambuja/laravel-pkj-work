<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    {{pkj()}}
    <link rel="stylesheet" href="https://cdn.materialdesignicons.com/2.5.94/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css">
     <link rel="stylesheet" href="https://unpkg.com/buefy/dist/buefy.min.css">
     <link rel="stylesheet" href="https://jenil.github.io/bulmaswatch/yeti/bulmaswatch.min.css">

    <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
    <script src="https://unpkg.com/buefy/dist/buefy.min.js"></script>
</head>
<body>
    @include('vue')
    @yield('content','$content')
</body>
</html>
