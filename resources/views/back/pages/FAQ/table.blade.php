@extends('back.layouts.main')
@section('content')
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">FAQ</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Create 
                            <a href="{{route('faq.create')}}">
                                <div class="text-right">
                           <button type="button" class="btn btn-primary " text-right><i class="fa fa-user-plus" aria-hidden="true"></i>
                           Create FAQ</button>
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
                               <th>description</th>
                               <th>status</th>
                                 <th>Action</th>
                                  </tr>
                                    </thead>
                                    <tbody>

      @foreach($faqs as $faq)              
                 <tr class="odd gradeX">
           <td>{{$loop->iteration}}</td>
               <td>{{$faq->title}}</td>
             <td>{{$faq->description}}</td>
             <td>
  

  @if($faq->status==0)

    <a onclick="return confirm('Are you sure you want to enable this item?');" href=""> 
        Disable</a>

@else
    <a onclick="return confirm('Are you sure you want to disable this item?');" href="">
        Enable</a>
     </td>
    @endif




                 <td>
              <span>
              	<a href="{{route('faq-edit',$faq->id)}}">
      <button type="button" class="btn btn-primary btn-rounded btn-sm my-0"><i class="fa fa-edit fa-fw"></i>
                  Edit
                </button>

      <a onclick="return confirm('Are you sure you want to delete this item?');" href="{{route('faq.destroy',$faq->id)}}">
        <button type="button" class="btn btn-danger btn-rounded btn-sm my-0"> <i class=" fas fa-trash"></i>
                  Delete
                </button>
            </a>
   
     
@if($faq->status==0)
    
    <a onclick="return confirm('Are you sure you want to enable this item?');" href="{{route('faq.status',[$faq->id,1])}}">
     <button type="button" class="btn btn-info btn-rounded btn-sm my-0"><i class="fal fa-arrow-up"></i>
    Enable</a>
  @else 
    
      <a onclick="return confirm('Are you sure you want to disable this item?');" href="{{route('faq.status',[$faq->id,0])}}">
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
@endsection