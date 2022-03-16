@extends('back.layouts.main')
@section('content')
       
 <div id="page-wrapper">
            <div class="row">
                <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Contact Forms</h1>
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
        <label for="text">Name</label>
      <input type="text" class="form-control" name="name" value="{{$contact->name}}" placeholder="Enter title name.."required>
                           </div>

                          
         <div class="form-group">
        <label for="text">Subject</label>
      <input type="text" class="form-control" name="subject" value="{{$contact->subject}}" placeholder="Enter subject name.."required>
                           </div>

         <div class="form-group">
      <label for="text">Email</label>
      <input type="text" class="form-control" name="email" id="email" value="{{$contact->email}}" placeholder="Enter email.."   required>
             </div>


      <div class="form-group">
    <label for="exampleFormControlTextarea1">Message</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="message"  placeholder="Enter  des..">{{$contact->message}}
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
  

    
        
    <!-- /#wrapper -->
@endsection