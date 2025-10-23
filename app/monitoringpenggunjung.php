<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Monitoring Rain Shelter</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  
    <script type="text/javascript" src="jquery/jquery.min.js"> 
      </script>
      <script type="text/javascript">
         $(document).ready(function()
      {
         setInterval(function() {
            $("#tanah").load("bacatanah.php");
            $("#status").load("statustanah.php");
            $("#cuaca").load("cuaca.php");
            $("#sungkup").load("sungkup.php");
         }, 1000 );
      });
      </script>
   </head>
  <body>
    <div class = "container" style="text-align : center; margin-top: 10px;"> 
    <img src="foto/poltek.png" alt="Poltek Logo" width="200" height="200">
        <h2 style="font-size: 35px;">Monitoring Sistem Kontrol Rain Shelter <p> Tanaman Bawang Merah Desa Klampok</h2>
        <h1 style="font-size: 25px;">-Moh Irvandi Maulana (21040054)-</h1>
      <br>
            <div class="container text-center">
            <div class="row row-cols-1 row-cols-md-2 g-6">
            <div class="col">
                <div class="card">
                    <div class="card-header" style="background-color: red; color: white;">
                        <h3>Nilai Kelembaban Tanah</h3>
                    </div>
                    <div class="card-body" id="tanah"></div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <div class="card-header" style="background-color: blue; color: white;">
                        <h3>Status Tanah</h3>
                    </div>
                    <div class="card-body" id="status"></div>
                </div>
            </div>
        </div>
        <!-- Jarak antara dua baris -->
        <div style="margin-top: 20px;"></div>
        <div class="row row-cols-1 row-cols-md-2 g-6">
            <div class="col">
                <div class="card">
                    <div class="card-header" style="background-color: yellow; color: black;">
                        <h3>Status Cuaca</h3>
                    </div>
                    <div class="card-body" id="cuaca"></div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <div class="card-header" style="background-color: orange; color: white;">
                        <h3>Rain shelter</h3>
                    </div>
                    <div class="card-body" id="sungkup">
                        <!-- Another Card Body Content -->
                    </div>
                </div>
            </div>
        </div>
    </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>