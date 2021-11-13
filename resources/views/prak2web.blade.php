
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
    <title>Praktikum2</title>

<style>
body{
	background-image: url(image/white-concrete-wall_53876-92803.jpg);
    background-size:cover;
    background-position: center;
	background-size: cover;
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
        width: 150px;
        }
</style>
</head>
<body>
    <div class="main">
		<div class="signin">
			<h1><center>Welcome!</center></h1>
			<p><center>Registration Form</center></p>
            <form>
                <div class="container">
                    <div class="row"></div>
                    <form action="/acttion_page.php" class="was-validated"></form>

                    <div class="form-group">
                        <div class="form-group mt-3 mb-3" >
                            <label for="userid">User ID: </label>
                            <input type="text" id="userid" name="userid" required="">
                        </div>

                    <div class="form-group mt-3 mb-3" >
                            <label for="password">Password: </label>
                            <input type="text" id="password" name="password" required="">
                        </div>
                    </div>

                    <div class="form-group mt-3 mb-3" >
                        <label for="name">Name: </label>
                        <input type="text" id="name" name="name" required="">
                    </div>

                    <div class="form-group mt-3 mb-3" >
                        <label for="address">Address: </label>
                        <input type="text" id="address" name="address" required="">
                    </div>

                    <div class="form-group">
                        <label for="sel1">Country:</label>
                        <select class="form-control" id="sel1" >
                          <option>Indonesia</option>
                          <option>Singapore</option>
                          <option>Malaysia</option>
                          <option>Zimbabwe</option>
                        </select>

                    <div class="form-group mt-3 mb-3" >
                            <label for="zipcode">ZIP Code: </label>
                            <input type="text" id="zipcode" name="zipcode" required="">
                     </div>

                     <div class="form-group mt-3 mb-3" >
                        <label for="Email">Email: </label>
                        <input type="text" id="email" name="email" required="">
                     </div>

                     <div class="form-group mt-3 mb-3" >
                        <label for="sex">Sex: </label>
                        <label class="radio-inline">
                            <input type="radio" name="optradio" checked>Male
                        </label>
                        <label class="radio-inline">
                            <input type="radio" name="optradio">Female
                        </label>
                    </div>

                    <div class="form-group mt-3 mb-3" >
                        <label for="langauge">Language: </label>
                        <label class="checkbox-inline">
                            <input type="checkbox" value="" required="">English
                        </label>
                        <label class="checkbox-inline">
                            <input type="checkbox" value="" required="">Non English
                        </label>
                    </div>

                    <label for="About" class="form-label">About :</label>
                     <textarea rows="5" cols="80" id="About"> </textarea>



                   <center> <input type="submit">
            </form>
    	</div>
	</div>
</body>
</html>
