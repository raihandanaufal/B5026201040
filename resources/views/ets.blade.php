
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
   background-image: url(image/bg\ web.jpg);
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

                <form name="RegistrationForm" action="https://www.w3schools.com/" onsubmit="return inputForm()">
                        <br>Raihanda Naufal Ashava
                        <br>Raihan
                        <br>5026201040
                        <br>
                        <center><h1>Form Input Data Barang</h1></center>
                        <br>

                        <div class="row mt-3">
                            <div class="col-sm-4">
                                <p>Nama Barang</p>
                            </div>
                            <div class="col-sm-1">
                                <p> : </p>
                            </div>
                            <div class="col-sm-7">
                                <input type="text" name="namabarang" id="namabarang" class="form-control form-control-sm" >
                            </div>
                        </div>

                        <div class="row mt-3">
                            <div class="col-sm-4">
                                <p>Harga</p>
                            </div>
                            <div class="col-sm-1">
                                <p> : </p>
                            </div>
                            <div class="col-sm-7">
                                <input type="number" name="harga" id="harga" class="form-control form-control-sm">
                            </div>
                        </div>

                        <div class="row mt-3">
                            <div class="col-sm-4">
                                <p>Jenis Barang</p>
                            </div>
                            <div class="col-sm-1">
                                <p> : </p>
                            </div>
                            <div class="col-sm-7">
                                <select name="jenis" id="jenis" class="form-control form-control-sm">
                                    <option value="">(Pilih jenis barang)</option>
                                    <option value="1">Makanan</option>
                                    <option value="2">Minuman</option>
                                    <option value="3">Non Mamin</option>
                                </select>
                            </div>
                        </div>

                        <div class="row mt-3">
                            <div class="col-sm-4">
                                <p>Kode Barcode</p>
                            </div>
                            <div class="col-sm-1">
                                <p> : </p>
                            </div>
                            <div class="col-sm-7">
                                <input type="number" name="kodebarang" id="kodebarang" class="form-control form-control-sm">
                            </div>
                        </div>

                        <br>

                        <div class="button text-center mb-3">
                            <button class="btn-primary submit mx-3" type="submit">Kirim</button>
                            <button class="btn-success mx-3" type="reset" >Reset</button>
                        </div>



                    </form>
        </div>

        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" ></script>
         <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" ></script>
         <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js%22%3E"></script>

         <script>

           function inputForm(){

                var Nama = $("#namabarang").val();
                if(Nama.length < 10) {
                    alert("Nama Barang minimal 10 karakter");
                    return false;
                }
                if(Nama == ""){
                    alert("Nama Barang harus diisi!");
                    return false;
                }

                var Harga = $("#harga").val();
                var pattern = /^[0-9]+$/;
                if(!Harga.match(pattern)) {
                    alert("Harga harus diisi dengan angka saja");
                    return false;
                }
                if(Harga == ""){
                    alert("Harga harus diisi!");
                    return false;
                }
                if(Harga<=5000){
                    alert("Harga barang minimal 5000");
                    return false;
                }

                var Jenisbarang = $('select option:selected').val();
                if(Jenisbarang == 0) {
                    alert("Jenis Barang harus diisi!");
                    return false;
                }

                var Kode = $("#kodebarang").val();
                if(!Kode.match(pattern)){
                    alert("Kode Barang harus diisi dengan angka saja");
                    return false;
                }
                if(Kode == ""){
                    alert("Kode Barcode harus diisi!");
                    return false;
                }
                if(Kode.length < 10){
                    alert("Kode Barcode  minimal 10 karakter")
                }

            };


         </script>


</body>
</html>
