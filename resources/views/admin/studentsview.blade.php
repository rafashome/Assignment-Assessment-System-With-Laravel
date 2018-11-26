@include('admin.header');

<div class="content" style="margin-top:5%; margin-left: 15%;">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">

        <div class="text-left" >
          <img src="{{Storage::url($students->image)}}" style="height:300px; width: 300px;" class="img-fluid img-thumbnail" alt="...">
        </div>
        <div class="text-left" style="margin-top:5%;" >
         <p>Fullname   :  {{$students->fullname}}</p>
         <p>Email      :  {{$students->email}} </p>
         <p>Gender     :  {{$students->gender}}</p>
         <p>Institution     :  {{$students->institution}}</p>
         <p>Phone      :  {{$students->phone_number}}</p>
         <p>Address    :  {{$students->address}}</p>
       </div>





     </div>
   </div>
 </div>
</div>



@include('admin.footer');
