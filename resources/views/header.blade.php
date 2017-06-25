<!doctype html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">        
    </head>

    <title>Project ovim@x</title>

    <link rel="icon" type="image/png" href="{{ asset( 'favicon.png' ) }}" /> 

    <!-- Bootstrap CSS -->
    <link href="{{ asset( 'assets/plugins/bootstrap/css/bootstrap.min.css' ) }}" rel="stylesheet">
    <!-- Font Awesome V4 -->
    <link href="{{ asset( 'assets/plugins/font-awesome/css/font-awesome.min.css' ) }}" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="{{ asset( 'assets/css/style.css' ) }}" rel="stylesheet">
    <link href="{{ asset( 'assets/css/shortcuts.css' ) }}" rel="stylesheet">

	@yield('StyleSheet')
