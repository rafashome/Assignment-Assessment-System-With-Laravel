@include('admin.header');

  <div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          
         <div class="header text-center" style="padding:25px; margin-bottom: 20px;">
           
           <h2>Teacher's List</h2>
         </div>

         <table class="table">
          <thead class="thead-light">
            <tr>
              
              <th scope="col">Fullname</th>
              <th scope="col">Email</th>
              <th scope="col">Gender</th>
              <th scope="col">Phone Number</th>
              <th scope="col">Address</th>
              <th scope="col">Image</th>
              <th scope="col">Action</th>
            </tr>
          </thead>
          <tbody>
            @foreach($teachers as $row)
            <tr>
              
              <td>{{$row->fullname}}</td>
              <td>{{$row->email}}</td>
              <td>{{$row->gender}}</td>
              <td>{{$row->phone_number}}</td>
              <td>{{$row->address}}</td>
              <td> <img class="img-thumbnail" style="height:50px; width:50px" src="{{Storage::url($row->image)}}" alt=""> </td>
              <td>

                <a href="{{'/teachers_view/'.$row->id}}"><button type="button" class="btn btn-primary">View</button></a>

                <a data-href="{{url('/teacher_delete/'.$row->id)}}" data-toggle="modal" data-target="#delete"><button  type="button" class="btn btn-danger ">Delete</button></a>
                
               <a href="{{url('/edit',$row->id)}}"> <button type="button" class="btn btn-success">Edit</button> </a>
              </td>

            </tr>
            @endforeach
            
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>



</div>
</div>
<!-- Modal -->

<div class="modal fade" id="delete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="myModalLabel" style="text-align: center;">Delete Confirmation</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p class="text-center">Are You Sure You Want To Delete?</p>
        <input type="hidden" name="delete_id" id="del_id" value="" >
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
        <a class="btn btn-danger btn-ok">Delete</a>
      </div>
    </div>
  </div>
</div>



</body>

<!--   Core JS Files   -->
<script src="{{asset('author/assets/js/jquery.3.2.1.min.js')}}" type="text/javascript"></script>
<script src="{{asset('author/assets/js/bootstrap.min.js')}}" type="text/javascript"></script>
<script  src="{{asset('author/assets/js/bootbox.min.js')}}"></script>

<script>  
 $('#delete').on('show.bs.modal', function(e) {
  $(this).find('.btn-ok').attr('href', $(e.relatedTarget).data('href'));
});
</script>

<!--  Charts Plugin -->


<!--  Notifications Plugin    -->
<script  src="{{asset('author/assets/js/bootstrap-notify.js')}}"></script>



<!--  Google Maps Plugin    -->
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>

<!-- Light Bootstrap Table Core javascript and methods for Demo purpose -->
<script src="{{asset('author/assets/js/light-bootstrap-dashboard.js?v=1.4.0')}}"></script>

<!-- Light Bootstrap Table DEMO methods, don't include it in your project! -->
<script src="{{asset('author/assets/js/demo.js')}}"></script>




</html>
