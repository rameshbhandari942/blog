@extends('back.layouts.main')
@section('content')
<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">User</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Create
                    <a href="{{route('user.create')}}">
                        <div class="text-right">
                            <button type="button" class="btn btn-primary " text-right><i class="fa fa-user-plus" aria-hidden="true"></i>
                                Create User</button>
                    </a>
                </div>

            </div>

            <!-- /.panel-heading -->
            <div class="panel-body">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr>
                                <th>S.N</th>
                                <th>firstname</th>
                                 <th>lastname</th>
                                <th>address</th>
                                <th>dob</th>
                                <th>contact</th>
                                <th>email</th>
                                <th>status</th>
                                <th>action</th>
                            </tr>
                        </thead>
                        <tbody>

                            @foreach($users as $user)
                            <tr class="odd gradeX">
                                <td>{{$loop->iteration}}</td>
                                <td>{{$user->firstname}} </td>
                                <td>{{$user->lastname}}</td>
                                <td>{{$user->address}}</td>
                                <td>{{$user->dob}}</td>
                                <td>{{$user->contact}}</td>
                                <td>{{$user->email}}</td>

                                <td>


                                    @if($user->status==0)

                                    <a onclick="return confirm('Are you sure you want to enable this item?');" href="">
                                        Disable</a>


                                    @else

                                    <a onclick="return confirm('Are you sure you want to disable this item?');" href="">
                                        Enable</a>

                                </td>
                                @endif

                                <td>
                                    <span>
                                        <a href="{{route('user-edit',$user->id)}}">
                                            <button type="button" class="btn btn-primary btn-rounded btn-sm my-0"><i class="fa fa-edit fa-fw"></i>
                                                Edit
                                            </button>

                                            <a onclick="return confirm('Are you sure you want to delete this item?');" href="{{route('user.destroy',$user->id)}}">
                                                <button type="button" class="btn btn-danger btn-rounded btn-sm my-0"> <i class="fas fa-trash "></i>
                                                    Delete
                                                </button>
                                            </a>

                                            <a href="{{route('user.view',$user->id)}}">
                                                <button type="button" class="btn btn-success btn-rounded btn-sm my-0"><i class="fas fa-eye"></i>
                                                    View
                                                </button>
                                            </a>


                                            @if($user->status==0)

                                            <a onclick="return confirm('Are you sure you want to enable this item?');" href="{{route('user.status',[$user->id,1])}}">
                                             <button type="button" class="btn btn-warning btn-rounded btn-sm my-0"><i class="fal fa-arrow-up"></i>
                                                    Enable</a>
                                            @else

                                            <a onclick="return confirm('Are you sure you want to disable this item?');" href="{{route('user.status',[$user->id,0])}}">
                                             <button type="button" class="btn btn-p-3 mb-2 bg-info text-white btn-rounded btn-sm my-0"><i class="fal fa-arrow-down"></i>
                                                    Disable</a>
                                            @endif

                                    </span>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>

                </div>
                <!-- /.table-responsive -->
                @if(Session()->has('success'))
                <script>
                    alert(`{{ Session()->get('success')}}`)
                </script>
                @endif
            </div>
            <!-- /.panel-body -->
        </div>
        <!-- /.panel -->
    </div>
    <!-- /.col-lg-6 -->
</div>
<!-- /.row -->
</div>
<!-- /#page-wrapper -->

</div>
<!-- /#wrapper -->

<!-- Core Scripts - Include with every page -->

@endsection