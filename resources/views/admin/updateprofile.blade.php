@include('admin.header');

<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">

         <div class="header text-center" style="padding:25px; margin-bottom: 20px;">

           <h2>Update Teacher</h2>
       </div>

       <form action="{{url('/update',$teacher->id)}}" method="POST" enctype = "multipart/form-data">
          {{-- {{method_field('PUT')}} --}}
          {{csrf_field()}}
{{-- 
          @if(session('response'))
          <div class=" alert alert-success" style="margin-bottom:10px;"> {{session('response')}} 
            <a href="{{URL::to('/student')}}"> You Can Login Now</a>
        </div>

        @endif --}}

        <div class="form-row">
         <div class="form-group col-md-6">
            <label >Full Name</label>
            <input type="text" name="fullname" value="{{$teacher->fullname}}" class="form-control" placeholder="Full Name">
        </div>

        <div class="form-group col-md-6">
            <label >Email</label>
            <input type="email" name="email" class="form-control" value="{{$teacher->email}}" placeholder="Email">
        </div>

    </div>

    <div class="form-row">
     <div class="form-group col-md-6">
    <label for="inputEmail4">Address</label>
    <input type="text" name="address" value="{{$teacher->address}}" class="form-control" id="inputEmail4" placeholder="address">
</div>
  <div class="form-group col-md-6">
    <label >Phone Number</label>
    <input type="integer" class="form-control" value="{{$teacher->phone_number}}" name="phone_number" placeholder="Phone Number">
</div>
</div>



<div class="text-center">
  <button type="submit" name="update" class=" btn btn-primary text-left" style="margin-top: 25px; padding: 7px 14px;">Update</button>
</div>

</form>
</div>
</div>
</div>
</div>


@include('admin.footer');