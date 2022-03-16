@extends('back.layouts.main')
@section('content')
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Media</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Create 
                            <a href="{{route('media.create')}}">
                                <div class="text-right">
                           <button type="button" class="btn btn-primary " text-right><i class="fa fa-user-plus" aria-hidden="true"></i>
                           Create media</button>
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
                               <th>Type</th>
                               <th>description</th>
                               <th>Action</th>
                                  </tr>
                                    </thead>
                                    <tbody>

      @foreach($medias as $media)              
                 <tr class="odd gradeX">
           <td>{{$loop->iteration}}</td>
               <td>{{$media->title}}</td>

               <td><img src="{{asset('public/images/'.$media->image)}}" height="80px" width="80px"></td>
               <td>{{$media->type}}</td>
              <td>{{$media->description}}</td>
            




                   <td>
              <span>
   <a href="{{route('media-edit',$media->id)}}">
      <button type="button" class="btn btn-primary btn-rounded btn-sm my-0"><i class="fa fa-edit fa-fw"></i>
                  Edit
                </button>

      <a onclick="return confirm('Are you sure you want to delete this item?');" href="{{route('media.destroy',$media->id)}}">
        <button type="button" class="btn btn-danger btn-rounded btn-sm my-0"> <i class=" fas fa-trash"></i>
                  Delete
                </button>
            </a>

    

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
        
@endsection