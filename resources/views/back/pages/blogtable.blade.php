@extends('back.layouts.main')
@section('content')
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Blogs</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Create 
                            <a href="{{route('blog.create')}}">
                                <div class="text-right">
                           <button type="button" class="btn btn-primary " text-right><i class="fa fa-user-plus" aria-hidden="true"></i>
                           Create Blogs</button>
                       </a>
                            </div>
   
                        </div>
                     

                        <!-- /.panel-heading -->
                       <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead >
                                        <tr>
                              <th>S.N</th>
                               <th>title</th>
                               <th>image</th>
                               <th>description</th>
                               <th>created by</th>
                               <th>status</th>
                               <th>Action</th>
                                  </tr>
                                    </thead>
                                    <tbody>

      @foreach($blogs as $blog)              
                 <tr class="odd gradeX">
           <td>{{$loop->iteration}}</td>
               <td>{{$blog->title}}</td>

               <td><img src="{{asset('public/images/'.$blog->image)}}" height="80px" width="80px"></td>
              <td>{{$blog->description}}</td>
              <td>{{$blog->user->firstname}} {{$blog->user->lastname}}</td>
             <td>
  

@if($blog->status==0)

    <a onclick="return confirm('Are you sure you want to enable this item?');" href=""> 
    Disable</a>

  
   @else
  
      <a onclick="return confirm('Are you sure you want to disable this item?');" href="">
        Enable</a>

</td>
@endif




                   <td>
              <span>
   <a href="{{route('blog-edit',$blog->id)}}">
      <button type="button" class="btn btn-primary btn-rounded btn-sm my-0"><i class="fa fa-edit fa-fw"></i>
                  Edit
                </button>

      <a onclick="return confirm('Are you sure you want to delete this item?');" href="{{route('blog.destroy',$blog->id)}}">
        <button type="button" class="btn btn-danger btn-rounded btn-sm my-0"> <i class=" fas fa-trash"></i>
                  Delete
                </button>
            </a>
@if($blog->status==0)
    
    <a onclick="return confirm('Are you sure you want to enable this item?');" href="{{route('blog.status',[$blog->id,1])}}"> <button type="button" class="btn btn-warning btn-rounded btn-sm my-0"><i class="fal fa-arrow-up"></i>
    Enable</a>
  @else 
    
      <a onclick="return confirm('Are you sure you want to disable this item?');" href="{{route('blog.status',[$blog->id,0])}}"> <button type="button" class="btn btn-p-3 mb-2 bg-info text-white btn-rounded btn-sm my-0"><i class="fal fa-arrow-down"></i>
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
@endsection