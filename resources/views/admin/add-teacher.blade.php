@include('admin.header');

<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">

         <div class="header text-center" style="padding:25px; margin-bottom: 20px;">

           <h2>Add Teacher</h2>
       </div>

       <form action="{{url('store')}}" method="POST" enctype = "multipart/form-data">
          {{csrf_field()}}
          @if(session('response'))
          <div class=" alert alert-success" style="margin-bottom:10px;"> {{session('response')}} 
            <a href="{{URL::to('/student')}}"> You Can Login Now</a>
        </div>

        @endif

        <div class="form-row">
         <div class="form-group col-md-6">
            <label >Full Name</label>
            <input type="text" name="fullname" class="form-control" placeholder="Full Name">
        </div>

        <div class="form-group col-md-6">
            <label >Email</label>
            <input type="email" name="email" class="form-control" placeholder="Email">
        </div>

    </div>

    <div class="form-row">
      <div class="form-group col-md-6">
        <label >Gender</label>
        <select name="gender" class="form-control">
          <option selected>Choose</option>
          <option>Male</option>
          <option>Female</option>
      </select>
  </div>
  <div class="form-group col-md-6">
    <label >Phone Number</label>
    <input type="integer" class="form-control" name="phone_number" placeholder="Phone Number">
</div>
</div>

<div class="form-row">
  <div class="form-group col-md-6">
    <label for="inputEmail4">Address</label>
    <input type="text" name="address" class="form-control" id="inputEmail4" placeholder="address">
</div>
<div class="form-group col-md-6">
    <label >Upload Photo</label>
    <input type="file" name="image" class="form-control" id="inputEmail4" >
</div>
</div>


<div class="form-row">

  <div class="form-group col-md-6">
    <label for="inputPassword4">Password</label>
    <input type="password" class="form-control" name="password" id="inputPassword4" placeholder="Password">
</div> 

<div class="form-group col-md-6">
    <label for="inputPassword4">Confirm Password</label>
    <input type="password" class="form-control" name="c_password" id="inputPassword4" placeholder="Password">
</div> 
</div>




<div class="text-center">
  <button type="submit" name="submit" class=" btn btn-primary text-left" style="margin-top: 25px; padding: 7px 14px;">Submit</button>
</div>

</form>
</div>
</div>
</div>
</div>


@include('admin.footer');