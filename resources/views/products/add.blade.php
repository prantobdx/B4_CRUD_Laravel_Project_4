<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('/') }}assets/css/bootstrap.css">


    <nav class="navbar navbar-expand-md navbar-dark bg-dark">
        <div class="container">
         <a href="" class="navbar-brand">Logo</a>
                <ul class="navbar-nav">
                    <li> <a href="" class="nav-link">Home</a></li>
                </ul>
        </div>
    </nav>

    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-8 mx-auto">
                    <div class="card card-body">
                        <div class="form-group row">
                            <label class="col-md-3">First Name</label>
                            <div class="col-md-9">
                                <input type="text" name="first_name" id="firstName" class="form-control" > 
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-3">Last Name</label>
                            <div class="col-md-9">
                                <input type="text" name="" id="lastName" class="form-control"> 
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-3">Full Name</label>
                            <div class="col-md-9">
                                <input type="text" name="" id="fullName" class="form-control"> 
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-3"></label>
                            <div class="col-md-9">
                                <input type="button" name="" id=""  class="btn btn-success" value="Submit" onclick="makeFullName()"> 
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="{{ asset('/') }}/assets/bootstrap.bundle.js"></script>


<script>
    function makeFullName()
    {
        var firstName = document.getElementById('firstName').value;
        var lastName = document.getElementById('lastName').value;
        var fullName = firstName+ ' ' + lastName;

        document.getElementById('fullName').value = fullName;

        document.getElementById('firstName').value ='';
        document.getElementById('lastName').value ='';
    }
</script>

     
</head>
<body>
    
</body>
</html>