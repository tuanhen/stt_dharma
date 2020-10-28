@extends('layouts.adminLayout.admin_design')
@section('content')

<!DOCTYPE html>

<html lang="en">

    <head>

        <meta charset="utf-8">

        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <meta name="viewport" content="width=device-width, initial-scale=1">



        <title>My Charts</title>



        {!! Charts::styles() !!}



    </head>

    <body>
        
<div id="content">
  <div id="content-header">
    <div id="breadcrumb"> <a href="{{ url('/admin/dashboard') }}" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="#">Grafik</a></div>
    <h1>Grafik Kehadiran Rapat</h1>
        @if(Session::has('flash_message_error'))
            <div class="alert alert-error alert-block">
                <button type="button" class="close" data-dismiss="alert">x</button>
                <strong>{!! session('flash_message_error') !!}</strong>
            </div>
        @endif  
        @if(Session::has('flash_message_success'))
            <div class="alert alert-success alert-block">
                <button type="button" class="close" data-dismiss="alert">x</button>
                <strong>{!! session('flash_message_success') !!}</strong>
            </div>
        @endif 
  </div>
  <div class="container-fluid">
    <hr>
    <div class="row-fluid">
      <div class="span12">
        <div class="widget-box">
          <div class="widget-title"><span class="icon"><i class="icon-th"></i></span>
            <h5>Grafik</h5>
          </div>
          <div class="widget-content nopadding">

        <!-- Main Application (Can be VueJS or other JS framework) -->

        <div class="app">

            <center>

                {!! $chart->html() !!}

            </center>

        </div>
        </div>
        </div>
      </div>
    </div>
  </div>
</div>

        <!-- End Of Main Application -->

        {!! Charts::scripts() !!}

        {!! $chart->script() !!}

    </body>

</html>
@endsection