<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <!-- bootstrap theme -->
    <link href="assets/css/bootstrap-theme.css" rel="stylesheet">
    <!--external css-->
    <!-- font icon -->
    <link href="assets/css/elegant-icons-style.css" rel="stylesheet"/>
    <link href="assets/css/font-awesome.min.css" rel="stylesheet"/>
    <!-- Custom styles -->
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/style-responsive.css" rel="stylesheet"/>
    <link href=" https://cdn.datatables.net/1.10.15/css/jquery.dataTables.min.css" rel="stylesheet"/>
   <link href="https://cdn.datatables.net/buttons/1.3.1/css/buttons.dataTables.min.css" rel="stylesheet"/>


    <style>
        div.form-group {
            margin-bottom: 10px !important;
            /*padding: 10px;*/
        }
        form{
            background: transparent;!important;
            background-color: #EEEEEE;
            box-sizing:;!important;
            margin-top: 0em;
            border: none;!important;
        }
        h5{
            background-color: #EEEEEE;
        }
        thead, td, tr {
            text-align: left;!important;
            padding: 8px;!important;
        }
        button.accordion {
            cursor: pointer;
            border: none;
            outline: none;
            width: 100%;
            text-align: left;
            background-color: #394a59;
            color: #fff;
            padding: 8px;
            margin: 4px 0;
            border-radius: 4px;
            transition: 0.3s;
        }

        button.accordion:hover {
            background-color:(255, 255, 255, 0, 3);
        }

        button.accordion.active {
            background-color: #fff;
            color: #000;
            border-radius: 4px 4px 0 0;
            margin: 4px 0 0;
        }

        div.panel1 {
            border-radius: 0 0 4px 4px;
            overflow: hidden;
            opacity: 0;
            max-height: 0;
            transition: max-height 0.3s ease-out;
            overflow: hidden;
            padding: 0 8px;
            margin: 0;
        }

        div.panel1.show {
            opacity: 1;
            max-height: 700px;
            padding: 8px;
            margin: 2px 0 4px;
        }
        .modal{
           position: center;!important;
            margin-right: 700px;
            length: 800px;!important;

        }
        div.modal-content{
            /*size: 500px;!important;*/
            width: 300px;!important;
        }
        element.style{
            padding-right: 16px;!important;
        }

    </style>

</head>
<body>
@include('includes.header')
@include('includes.sidebar')

<section id="main-content">
    <div class="wrapper">
        @yield('content')
    </div>


    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
<script>

    //knob
    $(".knob").knob();
</script>
    <script>
        var accordions = document.querySelectorAll("button.accordion");
        for (var i = 0; i < accordions.length; i++) {
            accordions[i].onclick = function () {
                this.classList.toggle("active");
                this.nextElementSibling.classList.toggle("show");
            }
        }
    </script>



<script src="assets/js/jquery.js"></script>
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="assets/js/bootstrap.min.js"></script>

<!-- nice scroll -->
<script src="assets/js/jquery.scrollTo.min.js"></script>
<script src="assets/js/jquery.nicescroll.js" type="text/javascript"></script>
<!-- jquery knob -->
<script src="assets/assets/jquery-knob/js/jquery.knob.js"></script>
<!--custome script for all page-->
<script src="assets/js/scripts.js"></script>
    <script src="https://cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.3.1/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.3.1/js/buttons.flash.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="https://cdn.rawgit.com/bpampuch/pdfmake/0.1.27/build/pdfmake.min.js"></script>
    <script src="https://cdn.rawgit.com/bpampuch/pdfmake/0.1.27/build/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.3.1/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.3.1/js/buttons.print.min.js"></script>



    <script>
    $(document).ready(function() {
        $('#report').DataTable( {
            dom: 'Bfrtip',
            buttons: [
                'pdf'
            ]
        } );
    } );

</script>


</section>

</body>
</html>