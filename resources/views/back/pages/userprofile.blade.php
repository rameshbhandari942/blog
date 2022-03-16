@extends('back.layouts.main')
@section('content')


<div id="page-wrapper">
    <div class="row">
        <div class="row">
            <div class="col-lg-12">
                <h3 class="page-header">Profile</h3>
            </div>
            <!-- /.col-lg-12 -->


            <!-- /.panel-heading -->
            <div class="panel-body">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>

                            <tr>


                            </tr>
                        </thead>
                        <tbody>
                      <form action="{{route('userProfile')}}" method="post">
                                @csrf
                                <tr>
                                    <th>Name</th>
                                    <td>{{$userProfile->firstname}} {{$userProfile->lastname}}</td>
                                </tr>
                                <tr>
                                    <th>Address</th>
                                    <td>{{$userProfile->address}}</td>
                                </tr>
                                <tr>
                                    <th>Date</th>
                                    <td>{{$userProfile->dob}}</td>
                                </tr>
                                <tr>
                                    <th>Contact</th>
                                    <td>{{$userProfile->contact}}</td>
                                </tr>
                                <tr>
                                    <th>Email</th>
                                    <td>{{$userProfile->email}}</td>
                                </tr>



                            </form>
                </div>
            </div>

        </div>

    </div>

</div>
                          
@if(Session()->has('success'))
       <script>
        alert(`{{ Session()->get('success')}}`)
       </script>
        @endif

@endsection