<!DOCTYPE html>
<html lang="en">
	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<title> Metrobasicmaths Post Question </title>

        {{--  @include('partials.success')  --}}

		<!-- Bootstrap CSS -->

        
		<!--  CSS -->
        
                {{--  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Open+Sans|Candal|Alegreya+Sans">
                <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
                <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
                <link rel="stylesheet" type="text/css" href="css/imagehover.min.css">
                <link rel="stylesheet" type="text/css" href="css/style.css">  --}}
            <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Open+Sans|Candal|Alegreya+Sans">
            {{--  <link href="{{ asset('css/font-awesome.css') }}" rel="stylesheet">  --}}
            <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
            <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet"> 
            <link rel="stylesheet" type="text/css" href="assest/css/bootstrap.min.css">            
            <link rel="stylesheet" type="text/css" href="css/imagehover.min.css"> 
            <link href="{{ asset('css/style.css') }}" rel="stylesheet">
            <link href="{{ asset('css/lake.css') }}" rel="stylesheet">


            

            @yield('style')
            
    </head>
	<body>


    @yield('content')

                  
                    



    <!-- JavaScript -->
    <script src="js/jquery.min.js"></script>
    <script src="js/jquery.easing.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/custom.js"></script>
    <script type="text/javascript" src="admin/assets/ckeditor/ckeditor.js"></script>
    {{--  <script src="contactform/contactform.js"></script>  --}}

	</body>
</html>