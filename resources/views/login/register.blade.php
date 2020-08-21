<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link rel="stylesheet" href="{{asset('style/style.css')}}">
<!------ Include the above in your HEAD tag ---------->

<!Doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Registration Form</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
<div class="container">
    <!---heading---->
    <header class="heading"> Registration-Form</header>
    <hr></hr>
    <!---Form starting---->
    <form method="post" action="{{route('logins.storeRegister')}}">
        @csrf
        <div class="row ">
            <!--- For Name---->
            <div class="col-sm-12">
                <div class="row">
                    <div class="col-xs-4">
                        <label class="firstname">Full Name :</label></div>
                    <div class="col-xs-8">
                        <input type="text" name="username" id="username" placeholder="Enter your First Name"
                               class="form-control ">
                    </div>
                </div>
            </div>

        <!-----For email---->
            <div class="col-sm-12">
                <div class="row">
                    <div class="col-xs-4">
                        <label class="mail">Email :</label></div>
                    <div class="col-xs-8">
                        <input type="email" name="email" id="email" placeholder="Enter your email" class="form-control">
                    </div>
                </div>
            </div>

            <div class="col-sm-12">
                <div class="row">
                    <div class="col-xs-4">
                        <label class="mail">Admin :</label></div>
                    <div class="col-xs-8">
                        <input type="number" name="admin" id="admin" placeholder="Enter your admin" class="form-control">
                    </div>
                </div>
            </div>
        <!-----For Password and confirm password---->
            <div class="col-sm-12">
                <div class="row">
                    <div class="col-xs-4">
                        <label class="pass">Password :</label></div>
                    <div class="col-xs-8">
                        <input type="password" name="password" id="password" placeholder="Enter your Password"
                               class="form-control">
                    </div>
                </div>
            </div>

            <div class="col-sm-12">
                <div class="row">
                    <br>
                    <div class="col-xs-4">
                        <label class="pass">Password Confirm:</label></div>
                    <div class="col-xs-8">
                        <input type="password" name="passwordConfirm" id="passwordConfirm"
                               placeholder="Enter your Password" class="form-control">
                    </div>
                </div>
            </div>

        <!-----------For Phone number-------->
            <div class="col-sm-12">
                <div class="row">
                    <br>

                </div>
                <div class="col-sm-12">
                    <button type="submit" class="btn btn-warning">Submit</button>
                </div>
            </div>
        </div>
    </form>

</div>

</body>
</html>

