@extends('back.layouts.main')
@section('auth-content')

<!-- Core CSS - Include with every page -->
    <link href="{{asset('back/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('back/font-awesome/css/font-awesome.css')}}" rel="stylesheet">

    <!-- SB Admin CSS - Include with every page -->
    <link href="{{asset('back/css/sb-admin.css')}}" rel="stylesheet">

    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Reset Password</h3>
                    </div>
                    <div class="panel-body">
            <form action="{{route('user.confirmPassword')}}" role="form" method="post">
            @csrf
                            <fieldset>
                                <div class="form-group">
                 <input class="form-control" placeholder="password" name="password" type="password" autofocus>
                                </div>

                    <div class="form-group">
                 <input class="form-control" placeholder="conform password.." name="confirmpassword" type="password" value="">
                                </div>
                                
                                <!-- Change this to a button or input when using this as a form -->
         <button type="Password" name="reset"class="btn btn-lg btn-success btn-block">Reset Password</button></a>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

 @if(Session()->has('message'))
       <script>
        alert(`{{ Session()->get('message')}}`)
       </script>
        @endif
  <!-- Core Scripts - Include with every page -->
 <script src="{{asset('back/js/jquery-1.10.2.js')}}"></script>
    <script src="{{asset('back/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('back/js/plugins/metisMenu/jquery.metisMenu.js')}}"></script>
       <!-- SB Admin Scripts - Include with every page -->
    <script src="{{asset('back/js/sb-admin.js')}}"></script>

@endsection


