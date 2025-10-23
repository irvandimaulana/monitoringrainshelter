<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Monitoring Rain Shelter</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    .card-img-top {
      width: 100%;
      height: 200px; /* You can adjust this height as needed */
      object-fit: cover;
      cursor: pointer;
    }
  </style>
</head>
<body>
<!-- Awal Galery -->
<section id="galery">
  <div class="container">
    <div class="text-center mb-3">
      <div class="col">
        <h2>Monitoring Rain Shelter Tanaman Bawang Merah</h2>
      </div>
    </div>
    <div class="row justify-content-center">
      <div class="col-md-4 mb-3">
        <div class="card">
          <img src="foto/5.jpg" class="card-img-top" alt="2" data-bs-toggle="modal" data-bs-target="#imageModal" onclick="showImage('foto/5.jpg', 'CV Pembuat')">
          <div class="card-body">
            <p class="card-text">CV Pembuat</p>
          </div> 
        </div>
      </div>
      <div class="col-md-4 mb-3">
        <div class="card">
          <img src="foto/1.jpeg" class="card-img-top" alt="3" data-bs-toggle="modal" data-bs-target="#imageModal" onclick="showImage('foto/1.jpeg', 'Prototype Rain Shelter')">
          <div class="card-body">
            <p class="card-text">Prototype Rain Shelter</p>
          </div>
        </div>
      </div>
      <div class="col-md-4 mb-3">
        <div class="card">
          <img src="foto/3.jpeg" class="card-img-top" alt="5" data-bs-toggle="modal" data-bs-target="#imageModal" onclick="showImage('foto/2.jpeg', 'Prototype Rain Shelter')">
          <div class="card-body">
            <p class="card-text">Prototype Rain Shelter</p>
          </div>
        </div>
      </div>
      <div class="col-md-4 mb-3">
        <div class="card">
          <img src="foto/2.jpeg" class="card-img-top" alt="9" data-bs-toggle="modal" data-bs-target="#imageModal" onclick="showImage('foto/3.jpeg', 'Observasi')">
          <div class="card-body">
            <p class="card-text">Observasi</p>
          </div> 
        </div>
      </div>
      <div class="col-md-4 mb-3">
        <div class="card">
          <img src="foto/4.png" class="card-img-top" alt="8" data-bs-toggle="modal" data-bs-target="#imageModal" onclick="showImage('foto/4.png', 'Uji Coba Prototype & Sistem Monitoring')">
          <div class="card-body">
            <p class="card-text">Uji Coba Prototype & Sistem Monitoring</p>
          </div>
        </div>
      </div>  
    </div>
  </div>
  
</section>
<!-- Akhir Galery -->

<!-- Modal -->
<div class="modal fade" id="imageModal" tabindex="-1" aria-labelledby="imageModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="imageModalLabel"></h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <img id="modalImage" src="" alt="" class="img-fluid">
      </div>
    </div>
  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script>
  function showImage(src, title) {
    document.getElementById('modalImage').src = src;
    document.getElementById('imageModalLabel').textContent = title;
  }
</script>
</body>
</html>
