<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="{{ URL::asset('css/app.css') }}">
        <link rel="stylesheet" href="{{ URL::asset('css/admin.css') }}">
        <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.datatables.net/rowreorder/1.2.5/css/rowReorder.dataTables.min.css">
        <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.dataTables.min.css">
        <title>Chain gang</title>
    </head>
<body>

    <div class="fixed-sidebar d-none d-sm-block">
        <div class="sidebar-content">
            <div class="menu-actions d-flex justify-content-end p-3">
                <a href="#" id="close-menu"><i class="fas fa-times"></i></a>
                <a href="#" id="open-menu"><i class="fas fa-arrow-right"></i></a>
            </div>
            <ul class="list-unstyled mt-3" id="menu-buttons">
                <a href="{{ url('/admin/') }}"><li class="menu-item px-3 py-2"><i class="fas fa-chart-line menu-icon"></i> <span class="menu-link">Dashboard</span></li></a>
                <a href="{{ url('/admin/orders/') }}"><li class="menu-item px-3 py-2"><i class="fas fa-inbox menu-icon"></i> <span class="menu-link">Orders</span></li></a>
                <a href="{{ url('/admin/producten/') }}"><li class="menu-item px-3 py-2"><i class="fas fa-bicycle menu-icon"></i> <span class="menu-link">Producten</span></li></a>
                <a href="{{ url('/admin/klanten/') }}"><li class="menu-item px-3 py-2"><i class="fas fa-users menu-icon"></i> <span class="menu-link">Klanten</span></li></a>
                <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><li class="menu-item px-3 py-2"><i class="fas fa-sign-out-alt menu-icon"></i> <span class="menu-link">Uitloggen</span></li></a>
            </ul>
        </div>
    </div>


    <div class="container-fluid m-0 admin-page">
        <div class="row no-gutters">
            <div class="col-12 p-3 d-flex d-sm-none" id="mobile-menu">
                <a href="{{ url('/admin/') }}" class="mr-3"><i class="fas fa-chart-line menu-icon"></i></a>
                <a href="{{ url('/admin/orders/') }}" class="mr-3"><i class="fas fa-inbox menu-icon"></i></a>
                <a href="{{ url('/admin/producten/') }}" class="mr-3"><i class="fas fa-bicycle menu-icon"></i></a>
                <a href="{{ url('/admin/klanten/') }}" class="mr-3"><i class="fas fa-users menu-icon"></i></a>
                <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="mr-3"><i class="fas fa-sign-out-alt menu-icon"></i></a>
            </div>
            <div class="col-12 px-5 py-3" id="content">
                @yield('content')
            </div>
        </div>
        @include('includes.footer_admin')
    </div>

    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        @csrf
    </form>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
    <script src="//cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>


    <script>
        $(document).ready( function () {
            //DataTable
            $('#data-table').DataTable({
                rowReorder: {
                    selector: 'td:nth-child(2)'
                },
                responsive: true
            });

            //Grafiek
            var ctx = document.getElementById('canvas').getContext('2d');
            var chart = new Chart(ctx, {
                // The type of chart we want to create
                type: 'line',

                // The data for our dataset
                data: {
                    labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July'],
                    datasets: [{
                        label: 'Omzet',
                        backgroundColor: 'rgb(26, 91, 119)',
                        borderColor: 'rgb(26, 91, 119)',
                        data: [12000, 17000, 35000, 8000, 12000, 26000, 9000]
                    }]
                },

                // Configuration options go here
                options: {}
            });
        } );


        $("#close-menu").on('click', function(){
            $( ".menu-link" ).fadeOut( "fast", function() {
                $(".fixed-sidebar").animate({'width' : '50px'});
                $(".admin-page").animate({'padding-left' : '50px'});
                $("#open-menu").show();
                $("#close-menu").hide();
            });
        })

        $("#open-menu").on('click', function(){
            $(".admin-page").animate({'padding-left' : '200px'});
            $(".fixed-sidebar").animate({'width' : '200px'}, function(){
                $("#close-menu").show();
                $("#open-menu").hide();
                $( ".menu-link" ).fadeIn("fast");
            });
        })
    </script>


</body>
</html>
