
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Online Compiler</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

    <!-- css files -->
    <link href="css/style.css" type="text/css" rel="stylesheet" media="all">
    <!-- //css files -->


    <link rel="stylesheet" href="{{asset('home/css/style.css')}}">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('home/css/font-awesome.css')}}"> <!-- Font-Awesome-Icons-CSS -->
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">

</head>
<!-- body starts -->
<body>
<!-- section -->
<section class="register">
    <div class="register-full">
        <div class="register-left">
            <div class="register">
                <div class="logo">
                    <a href="#"><span class="fa fa-laptop" aria-hidden="true"></span></a>
                </div>
                <h1>Welcome To Online Compiler</h1>
                <p>Donec ipsum lorem, sodales a sagittis ut, tristique purus. Aenean in est pretium lectus euismod facilisis.
                    Aliquam dapibus rhoncus ex quis fringilla. Proin interdum eros mauris,hendrerit suscipit lectus cursus et.</p>
                <div class="content3">
                    <ul>
                        <li><a class="" href="http://www.javacompiler.com/teacher" style="color:#222; font-weight: 700; font-family: tahoma; font-size: 16px;">Login As Teacher </a></li>
                        <li><a class="read" href="http://www.javacompiler.com/student" style="color:#222; font-weight: 700; font-family: tahoma; font-size: 16px;">Login As Student</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="register-right">
            <div class="register-in">
                <h2><span class="fas fa-pencil-alt"></span> Join As Student</h2>
                <div class="register-form">
                    <form action="{{url('/register')}}" method="POST" enctype = "multipart/form-data">
                        {{csrf_field()}}
                        <div class="fields-grid">

                            @if(session('response'))
                                <div class=" alert alert-success" style="margin-bottom:10px;"> {{session('response')}} 
                            <a href="{{URL::to('/student')}}"> You Can Login Now</a>
                                </div>

                            @endif



                            <div class="styled-input agile-styled-input-top">
                                <input type="text" name="fullname" required="" >
                                <label>Enter Full Name</label>
                                <span></span>
                            </div>

                            <div class="styled-input">
                                <input type="email" name="email" required="">
                                <label>Enter Email</label>
                                <span></span>
                            </div>

                            <div class="styled-input agile-styled-input-top">
                                <select id="category2" required="" name="gender" style="width:90%;">
                                    <option selected disabled>Gender</option>
                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>
                                </select>
                                <span></span>
                            </div>
                            <div class="styled-input">
                                <input type="text" name="institution" required="">
                                <label>Institution Name</label>
                                <span></span>
                            </div>

                             <div class="styled-input">
                                <input type="text" name="phone_number" required="">
                                <label>Phone Number</label>
                                <span></span>
                            </div>

                             <div class="styled-input">
                                <input type="text" name="address" required="">
                                <label>Address</label>
                                <span></span>
                            </div>

                            <div class="form-group col-md-6">
                                <label >Upload Photo</label>
                                <input type="file" name="image" class="form-control" id="inputEmail4" >
                            </div>


                            <div class="styled-input">
                                <input type="password" name="password" required="">
                                <label>Enter Password</label>
                                <span></span>
                            </div>

                            <div class="clear"> </div>
                        </div>
                        <input type="submit"  name="submit" value="Register">


                    </form>
                </div>
            </div>
            <div class="clear"> </div>
        </div>
        <div class="clear"> </div>
    </div>
    <!-- copyright -->
    <p class="agile-copyright"> Developed By Compiler Team! </p>
    <!-- //copyright -->
</section>
<!-- //section -->


<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</body>
<!-- //body ends -->
</html>