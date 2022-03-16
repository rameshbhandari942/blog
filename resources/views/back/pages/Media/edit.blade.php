@extends('back.layouts.main')
@section('content')
       
 <div id="page-wrapper">
            <div class="row">
                <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header"> Media modify Forms</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-primary">
                        
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
                                   
        <form enctype="multipart/form-data" method="post">

      @csrf  
      <div class="form-group">
        <label for="text">Title</label>
      <input type="text" class="form-control" name="title" value="{{$media->title}}" placeholder="Enter title name.."required>
                           </div>

                           <div class="form-group">
                           <img src="{{asset('public/images/'.$media->image)}}" height="80px" width="80px">    
                             <label>Image</label>
                                <input type="file" name="image">
                                </div>

                 <div class="form-group">
               <label for="media">Media Type</label>
               <select id="media" class="form-control" value="{{$media->type}}" name="type"  >
                <option>Service</option>
                <option>Slider</option>
            </select>
        </div>


      <div class="form-group">
    <label for="exampleFormControlTextarea1">Description</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="description" placeholder="Enter  des.." required>{{$media->description}}
    	</textarea>
  </div>

      <hr>
      <div class="text-center">
       <input class="btn btn-primary" type="submit" name="submit" value="update">
  
         </div>
         </form>
    </div>
      
   
            </div>

                   </div>

                         </div>
                      </div>
                  </div>
              </div>
        </div>
    </div>

    
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->
@endsection