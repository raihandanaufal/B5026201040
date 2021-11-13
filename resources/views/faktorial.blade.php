
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <title>Document</title>

    <style>
body{
    background-image: url("https://i2.wp.com/himamasta.ub.ac.id/wp-content/uploads/2017/12/Savin-NY-Website-Background-Web.jpg");
   background-size:cover;
   background-position: center;
   justify-content: center;
   align-items: center;
   display: flex;
   min-height: 100vh;
}
.main{
	display: inline-flex;
	box-shadow: 0 2px 10px 10px rgba(0,0,0,0.2)
}
label {
    display: inline-block;
    width: 250px;
    height: 5   0px;
        }
textarea {
        vertical-align: top;
         }


input::-webkit-outer-spin-button,
      input::-webkit-inner-spin-button {
        -webkit-appearance: none;
        margin: 0;
      }

    </style>
</head>
<body>
    <div class="container mt-3 mb-3 shadow-lg">

                <form name="RegistrationForm" action="jawaban" onsubmit="return inputForm()" method="POST">
                @csrf
                        <div class="row mt-3">
                            <div class="col-sm-4">
                                <p>Input Number</p>
                            </div>
                            <div class="col-sm-1">
                                <p> : </p>
                            </div>
                            <div class="col-sm-7">
                                <input type="number" name="number" id="number" class="form-control form-control-sm">
                            </div>
                        </div>
                        <br>
                        <div class="button text-center mb-3">
                            <button class="btn-primary submit mx-3" type="submit">Find</button>
                        </div>
                 </form>
     </div>
</body>
</html>
