<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
   {{--  <link href="{{ asset('css/app.css') }}" rel="stylesheet"> --}}
    <link href="{{ asset('assets/css/styles.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/js/apexcharts/styles.css') }}" rel="stylesheet">
    <link href="{{asset('assets/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('datatable/css/dataTables.bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/datatable/css/dataTables.bootstrap4.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/sweetalert2/sweetalert2.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/toastr/toastr.min.css')}}" rel="stylesheet">

    <!-- Scripts -->
    <script src="{{asset('assets/js/fontawesome/all.js')}}" crossorigin="anonymous"></script>
</head>
<body>
    @include('layouts.inc.admin-navbar')

    <div id="layoutSidenav">
        @include('layouts.inc.admin-sidebar')
        <div id="layoutSidenav_content">
            <main>
                @yield('content')
            </main>
            @include('layouts.inc.admin-footer')

        </div>
    </div>


    <script src="{{asset('assets/js/bootstrap.bundle.min.js')}}" crossorigin="anonymous"></script>
    <script src="{{ asset('assets/js/scripts.js')}}"></script>
    <script src="{{ asset('assets/jquery/jquery.slim.min.js')}}"></script>
    <script src="{{ asset('assets/js/apexcharts/apexcharts.cdn.js')}}"></script>
    <script src="{{ asset('assets/js/apexcharts/scripts.js')}}"></script>
    <script src="{{asset('assets/js/data/posts.js')}}"></script>
    <script src="{{asset('assets/jquery/jquery-3.6.1.min.js')}}"></script>
    <script src="{{asset('assets/bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('assets/datatable/css/dataTables.bootstrap.min.css')}}"></script>
    <script src="{{asset('assets/datatable/js/dataTables.bootstrap4.min.js')}}"></script>
    <script src="{{asset('assets/sweetalert2/sweetalert2.min.js')}}"></script>
    <script src="{{asset('assets/toastr/toastr.min.js')}}"></script>
    
    <script>
        toastr.options.preventDuplicates = true;
        $.ajaxSetup({
            headers:{
                'CSRF-TOKEN' : $('meta[name="csrf-token"]').attr('content')
            }
        });

        $(function(){
            $('#add-post-form').on('submit', function(e){
                e.preventDefault();
                var form = this;
                $.ajax({
                    url:$(form).attr('action'),
                    method:$(form).attr('method'),
                    data:new FormData(form),
                    processData:false,
                    dataType:'json',
                    contentType:false,
                    beforeSend:function(){
                        $(form).find('span.error-text').text('')
                    },
                    success:function(data){
                        if(data.code == 0){
                            $.each(data.error, function(prefix, val){
                                $(form).find('span.'+prefix+'_error').text(val[0]);
                            });
                        }else{
                            $(form)[0].reset();
                            alert(data.msg);
                        }
                    }
                });
            });
        });
    </script>
</body>
</html>
