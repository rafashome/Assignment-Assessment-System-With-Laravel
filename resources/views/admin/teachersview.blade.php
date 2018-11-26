@include('admin.header');

<div class="content" style="margin-top:10%; margin-left: 15%;">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">

        <div class="text-left" >
          <img src="{{Storage::url($teachers->image)}}" style="height:300px; width: 300px;" class="img-fluid img-thumbnail" alt="...">
        </div>
        <div class="text-left" style="margin-top:5%;" >
         <p>Fullname   :  {{$teachers->fullname}}</p>
         <p>Email      :  {{$teachers->email}} </p>
         <p>Gender     :  {{$teachers->gender}}</p>
         <p>Phone      :  {{$teachers->phone_number}}</p>
         <p>Address    :  {{$teachers->address}}</p>
       </div>





     </div>
   </div>
 </div>
</div>



@include('admin.footer');
