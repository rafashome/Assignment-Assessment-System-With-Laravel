
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>LogIn Portal</title>

    <!-- css files -->

    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link rel="stylesheet" href="{{asset('students/css/style.css')}}">

</head>
<body class="student-portal">

<section class="login-block">
    <div class="container">
        <h2 class="text-center heading">Student's Portal</h2>
        <div class="row">
            <div class= "col-md-4 login-sec">
                <h2 class="text-center">Login Now</h2>

                <form class="login-form">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="User Email">
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" placeholder="Password">
                    </div>


                    <div class="form-check">
                        <div class="row">
                            <div class="submit"><button type="submit" class="btn btn-login float-right">Submit</button></div>
                            <div><p style="color: #f7f7f7; font-weight: 400; margin:10px 20px;">Forgot Password? <span><a href="">Click Here</a></span></p></div>


                        </div>
                    </div>
                    <div>
                        <p style="color: #f7f7f7; font-weight: 400; margin-top:25px;">Didn't Register? <a href="http://www.javacompiler.com"> Sign Up Here</a></p>
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