@extends('back.layouts.main')
@section('content')


         <div id="page-wrapper">
            <div class="row">
                <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header"> edit profile Forms</h1>
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
                                   
    <form action="{{route('updateProfile')}}" method="post">
      @csrf    

      <div class="form-group">
        <label for="text">Name</label>
      <input type="text" class="form-control" name="firstname" value="{{$editProfile->firstname}} " placeholder="Enter name.."required>
    </div>

    
    <div class="form-group">
      <label for="text">Lastname</label>
      <input type="text" class="form-control" name="lastname" id="Lastname" value="{{$editProfile->lastname}}" placeholder="Enter lastname.."   required>
             </div>
  
      <div class="form-group">
      <label for="text">Address</label>
      <input type="text" class="form-control" name="address" id="address" value="{{$editProfile->address}}" placeholder="Enter address"   required>
             </div>

        <div class="form-group">
      <label for="text">Date of Birth</label>
      <input type="text" class="form-control"  name="dob" id="date" value="{{$editProfile->dob}}" placeholder="Enter date of birth"  required>
             </div>

        <div class="form-group">
      <label for="text">contact us</label>
      <input type="text" class="form-control" name="contact" id="contact" value="{{$editProfile->contact}}" placeholder="Enter contact no.."   required>
             </div>


        <div class="form-group">
      <label for="text">Email</label>
      <input type="text" class="form-control" name="email" id="email" value="{{$editProfile->email}}" placeholder="Enter email.."   required>
             </div>

             <hr>
      <div class="text-center">
       <input class="btn btn-primary" type="submit" name="submit" value="update">
      </form>
    </div>
      
   
            </div>
       
                

                   </div>

                         </div>
                      </div>
                  </div>
              </div>
        </div>
     
@endsection