@extends('back.layouts.main')
@section('content')


         <div id="page-wrapper">
            <div class="row">
                <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header"> User Modify Forms</h1>
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
        <label for="text">Name</label>
      <input type="text" class="form-control" name="firstname" value="{{$user->firstname}}" placeholder="Enter name.."required>
    </div>

     <div class="form-group">
      <label for="text">Lastname</label>
      <input type="text" class="form-control" name="lastname" id="Lastname" value="{{$user->lastname}}" placeholder="Enter lastname.."   required>
             </div>
  
      <div class="form-group">
      <label for="text">Address</label>
      <input type="text" class="form-control" name="address" id="address" value="{{$user->address}}" placeholder="Enter address"   required>
             </div>

        <div class="form-group">
      <label for="text">Date of Birth</label>
      <input type="text" class="form-control"  name="dob" id="date" value="{{$user->dob}}" placeholder="Enter date of birth"  required>
             </div>

        <div class="form-group">
      <label for="text">contact us</label>
      <input type="text" class="form-control" name="contact" id="contact" value="{{$user->contact}}" placeholder="Enter contact no.."   required>
             </div>

              
                <div class="form-group">
               <label for="country">Country</label>
               <select id="country" class="form-control" name="country" value="{{$user->country}}"  >
                <option value="nepal">Nepal</option>
                <option value="india">India</option>
                <option value="usa">USA</option>
            </select>
        </div>

        <div class="form-group">
      <label for="text">Email</label>
      <input type="text" class="form-control" name="email" id="email" value="{{$user->email}}" placeholder="Enter email.."   required>
             </div>

             <div class="form-group">
      <label for="text">Password</label>
      <input type="password" class="form-control" name="password" id="password" value="{{$user->password}}" placeholder="Enter password.."  required >
             </div>

     <div class="form-group">
      <label for="text"> Conform Password</label>
      <input type="password" class="form-control" name="password" id="password" value="{{$user->password}}" placeholder="Enter password.."  required >
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