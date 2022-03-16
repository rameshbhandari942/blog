@extends('back.layouts.main')
@section('content')



    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Change password</h3>
                    </div>
                    <div class="panel-body">
        <form action="{{route('user.checkPassword')}}" role="form" method="post">
        @csrf
                            <fieldset>
                         <div class="form-group">
                 <input class="form-control" placeholder="old password.." name="oldpassword" type="password" autofocus>
                                </div>

                     <div class="form-group">
                <input class="form-control" placeholder="new password.." name="newpassword" type="password" value="">
                                </div>

                <div class="form-group">
                <input class="form-control" placeholder="confirm password.." name="confirmpassword" type="password" value="">
                                </div>
                                
                            
     <!-- Change this to a button or input when using this as a form -->
           <button type="change" name="change"class="btn btn-lg btn-primary btn-block">
           Change</button>
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
   


@endsection
   


