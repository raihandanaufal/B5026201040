
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas</title>
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" />
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"></script>
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
     <style>

    .blueBoxDiv {
    background-color: blue;
    height: 100px;
    width: 120px;
    font-size: 15px;
    cursor: pointer;
}
    .redBoxDiv {
    background-color: red;
    height: 120px;
    width: 130px;
    font-size: 20px;
    cursor: pointer;
}
    .orangeBoxDiv {
    background-color: orange;
    height: 80px;
    width: 90px;
    font-size: 15px;
    cursor: pointer;
}
    .purpleBoxDiv {
    background-color: purple;
    height: 250px;
    width: 230px;
    font-size: 30px;
    cursor: pointer;
}
body{
	background-image: url(image/ppp.jfif);
	background-size: cover;
    background-repeat: no-repeat;
}
     </style>

</head>
<body>
 <center><p><h1>CSS Checker</h1></p></center>
 <center><p><h3>You can check the CSS Style Here</h3></p></center>
<div class="row"><br><br><br></div>

    <div class="row">

          <div class="col-md-3">
            <div class="multipleBoxDiv">
            <div class="blueBoxDiv">
                <center><p class="text-white"><b>Click Here</b></p></center>
            </div>
          </div>
          </div>
          <div class="col-md-3">
            <div class="multipleBoxDiv">
            <div class="redBoxDiv">
                <center><p class="text-white"><b>Click Here</b></p></center>
            </div>
          </div>
          </div>
          <div class="col-md-3">
            <div class="multipleBoxDiv">
            <div class="orangeBoxDiv">
                <center><p class="text-white"><b>Click Here</b></p></center>
            </div>
          </div>
          </div>
          <div class="col-md-3">
            <div class="multipleBoxDiv">
            <div class="purpleBoxDiv">
                <center><p class="text-white"><b>Click Here</b></p></center>
            </div>
          </div>
          </div>
        </div>



    <script>
        $(".multipleBoxDiv > div").click(function (e) {
    var propertyValue = $(this).css(["width", "height", "background-color", "font-size"]);
    var textInfo = "The div has following CSS Styles:<br/>";
    $.each(propertyValue, function (index, value) {
        textInfo += index + ": " + value + "<br/>";
    });

    alert(textInfo);
});

    </script>
</body>
</html>
