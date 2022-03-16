@extends('back.layouts.main')
@section('content')
       
 <div id="page-wrapper">
            <div class="row">
                <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header"> profile modify Forms</h1>
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
                                   
        <form  enctype="multipart/form-data" method="post">

      @csrf  
      <div class="form-group">
        <label for="text">Name</label>
      <input type="text" class="form-control" name="name" value="{{$profile->name}}" placeholder="Enter title name.."required>
                           </div>

                           <div class="form-group">
      <label for="text">Address</label>
      <input type="text" class="form-control" name="address" id="address" value="{{$profile->address}}" placeholder="Enter address"   required>
             </div>

             <div class="form-group">
      <label for="text">Pan_Vat no</label>
      <input type="text" class="form-control" name="pan_vat_no" id="number" value="{{$profile->pan_vat_no}}" placeholder="Enter Pan_Vat no."   required>
             </div>

             <div class="form-group">
      <label for="text">contact us</label>
      <input type="text" class="form-control" name="contact" id="contact" value="{{$profile->contact}}" placeholder="Enter contact no.."   required>
             </div>

             <div class="form-group">
      <label for="text">Email</label>
      <input type="email" class="form-control" name="email" id="email" value="{{$profile->email}}" placeholder="Enter email.."   required>
             </div>


             <div class="form-group">
    <label for="exampleFormControlTextarea1">Description</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="description" placeholder="Enter  des.." required>{{$profile->description}}
    	</textarea>
  </div>

                           <div class="form-group">
                             <label>Image</label>
                             <img src="{{asset('public/images/'.$profile->image)}}" height="80px" width="80px">    
                                <input type="file" name="image">
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