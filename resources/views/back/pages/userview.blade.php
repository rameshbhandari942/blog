@extends('back.layouts.main')
@section('content')


         <div id="page-wrapper">
            <div class="row">
                <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">USer View pages</h1>
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
                                   
    <form action="" method="post">
      @csrf    
     <div class="form-group">
        <label for="text">Name:</label>
          {{$user->firstname}}
    </div>

     <div class="form-group">
      <label for="text">Lastname:</label>
          {{$user->lastname}}
             </div>
  
      <div class="form-group">
      <label for="text">Address:</label>
         {{$user->address}}
             </div>

        <div class="form-group">
      <label for="text">Date of Birth:</label>
         {{$user->dob}}
             </div>

        <div class="form-group">
      <label for="text">contact us:</label>
         {{$user->contact}}
             </div>

              
                <div class="form-group">
               <label for="country">Country:</label>
               {{$user->country}}
        </div>

        <div class="form-group">
         <label for="text">Email:</label> 	
          {{$user->email}}
             </div>

             <div class="form-group">
         <label for="text">Status:</label> 	
          {{$user->status}}
             </div>



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