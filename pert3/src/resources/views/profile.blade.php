@extends('layouts.main')

@section('content')
    <!-- <div><h1><center>INI HALAMAN PROFILE</center></h1></div> -->
    <center><div class="card mb-5" style="width: 18rem;">
      <img src="data:image/jpeg;base64,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" class="card-img-top" alt="Avatar">
      <div class="card-body">
        <h5 class="card-title">Lim Jong Su</h5>
        <p class="card-text">Halo, saya Lim dari jurusan Sistem Informasi dengan NIM 20210803050 dan ini adalah tugas projek saya, YATTA!.</p>
      </div>
    </div></center>

  <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
    <ol class="carousel-indicators">
      <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"></li>
      <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"></li>
      <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active img-fluid">
        <img src="https://blog-edutore-partner.s3.ap-southeast-1.amazonaws.com/wp-content/uploads/2020/06/24080542/kampus-UEU.jpg" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5>Kampus Kebun Jeruk</h5>
          <!-- <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus repellat et fugit nobis dolorem explicabo, incidunt molestias possimus officiis illo inventore itaque delectus temporibus sunt facere amet voluptatibus. Corporis, mollitia?</p> -->
        </div>
      </div>
      <div class="carousel-item">
        <img src="https://mediacdn.quipper.com/media/W1siZiIsIjIwMjIvMDMvMjIvMTAvMTEvNDEvYjMwZDdiODAtNmQxZC00MmQyLTg0YzctMzdhZWI5YmMxNjc1LyJdLFsicCIsInRodW1iIiwiMTIwMHhcdTAwM2UiLHt9XSxbInAiLCJjb252ZXJ0IiwiLWNvbG9yc3BhY2Ugc1JHQiAtc3RyaXAiLHsiZm9ybWF0IjoianBnIn1dXQ.jpg?sha=988805f369e3c9a2" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5>Kampus Citra Raya</h5>
          <!-- <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Unde velit, vel qui necessitatibus dolorum beatae iusto quasi culpa maiores quis error explicabo pariatur, expedita cum, quos iste. Minima, corrupti ullam!</p> -->
        </div>
      </div>
      <div class="carousel-item">
        <img src="https://mediacdn.quipper.com/media/W1siZiIsIjIwMjIvMDMvMjIvMTAvMDcvNTUvMmFhOTcyZTUtYTY2ZS00OTdiLWFkNTAtOGFkYTE2Y2RlZjA0LyJdLFsicCIsInRodW1iIiwiMTIwMHhcdTAwM2UiLHt9XSxbInAiLCJjb252ZXJ0IiwiLWNvbG9yc3BhY2Ugc1JHQiAtc3RyaXAiLHsiZm9ybWF0IjoianBnIn1dXQ.jpg?sha=7e9c7416563061ca" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5>Kampus Harapan Indah Bekasi</h5>
          <!-- <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Reiciendis et consequatur exercitationem laudantium dolor iste corrupti cupiditate iusto nisi blanditiis expedita, in perspiciatis tenetur architecto aperiam omnis culpa ipsum velit?</p> -->
        </div>
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </a>
  </div>
@endsection