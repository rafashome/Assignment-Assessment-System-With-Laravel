
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>LogIn Portal</title>

    <link rel="stylesheet" href="{{asset('teachers/css/style.css')}}">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">

</head>
<body class="student-portal">

<section class="login-block">
    <div class="container">
        <h2 class="text-center heading">Teacher's Portal</h2>
        <div class="row">
            <div class= "col-md-4 login-sec">
                <h2 class="text-center">Login Now</h2>

                        <p class="text-center" style="color:red; font-size:20px;">
                        <?php
                         use Illuminate\Support\Facades\Session;

                         $msg =  Session::get('alert');

                         if(isset($msg)){
                            echo $msg;
                            Session::put('alert','');
                         }

                         ?>
                     </p>

                     <p class="text-center" style="color:red; font-size:20px;">
                        <?php
                        

                         $log =  Session::get('log');

                         if(isset($log)){
                            echo $log;
                            Session::put('log','');
                         }
                         
                         ?>
                     </p>


                <form class="login-form" method="POST" action="{{url('/dashboard')}}">
                    @csrf
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="User Email" name="email">
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" name="password" placeholder="Password">
                    </div>


                    <div class="form-check">
                        <div class="row">
                            <div class="submit"><button type="submit" class="btn btn-login float-right">Submit</button></div>
                            <div><p style="color: #f7f7f7; font-weight: 400; margin:10px 20px;">Forgot Password? <span><a href="">Click Here</a></span></p></div>


                        </div>
                    </div>
                    <div>
                        <p style="color: #f7f7f7; font-weight: 400; margin-top:25px;">Didn't Register? <a href="{{URL::to('/signup')}}"> Sign Up Here</a></p>
                    </div>

                </form>
            </div>
        </div>
    </div>



</section>


<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

</body>
</html>