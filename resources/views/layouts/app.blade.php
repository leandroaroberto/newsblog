<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>CrossOver</title>
        {{Html::style('css/bootstrap.min.css')}}
        {{Html::style('css/bootstrap-theme.min.css')}}
    </head>
    <body>
    <div class="container">
          @yield('content')
    </div>
    {{ Html::script('js/jquery-3.2.1.min.js')}}
    {{ Html::script('js/bootstrap.min.js')}}
</body>
</html>
