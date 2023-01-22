@extends('header')

@section('web')
<div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="img/carrusel/carrusel1.jpeg" class="d-block w-100 tamañocarrusel" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>First slide label</h5>
        <p>Some representative placeholder content for the first slide.</p>
        <button type="button" class="btn btn-primary btn-lg">Large button</button>
      </div>
    </div>
    <div class="carousel-item">
      <img src="img/carrusel/carrusel2.png" class="d-block w-100 tamañocarrusel" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Second slide label</h5>
        <p>Some representative placeholder content for the second slide.</p>
        <button type="button" class="btn btn-primary btn-lg">Large button</button>
      </div>
    </div>
    <div class="carousel-item">
      <img src="img/carrusel/carrusel3.png" class="d-block w-100 tamañocarrusel" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Third slide label</h5>
        <p>Some representative placeholder content for the third slide.</p>
        <button type="button" class="btn btn-primary btn-lg">Large button</button>
      </div>
    </div>
    <div class="carousel-item">
      <img src="img/carrusel/carrusel4.png" class="d-block w-100 tamañocarrusel" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Third slide label</h5>
        <p>Some representative placeholder content for the third slide.</p>
        <button type="button" class="btn btn-primary btn-lg">Large button</button>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-target="#carouselExampleCaptions" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-target="#carouselExampleCaptions" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </button>
</div>
</header>



<main class="container">
<section class="row topmar">
<div class="col-sm-12 col-md-4 col-xl-4"> 
<img src="img/servicios/Servicio1.png" alt="">
<h2>Servicio 1</h2>
<p class="text">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Similique, aliquam error tempore tempora unde ullam molestiae at id fugit accusamus nihil reprehenderit odio nulla, incidunt quia, quaerat debitis repellat soluta!</p>
<div class="btn-group-toggle" data-toggle="buttons">
<label class="btn btn-secondary active">
<input type="checkbox" checked> Checked
</label>
</div>
</div> 

<div class="col-sm-12 col-md-4 col-xl-4"> 
<img src="img/servicios/Servicio2.png" alt="">
<h2>Servicios 2</h2>
<p class="text">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Repellat similique vitae quod quam sapiente voluptas illum dolorum? Iste, voluptate. Quod numquam adipisci voluptatem alias ab officiis ipsam architecto unde reiciendis.</p>
<div class="btn-group-toggle" data-toggle="buttons">
<label class="btn btn-secondary active">
<input type="checkbox" checked> Checked
</label>
</div>
  </div> 

  <div class="col-sm-12 col-md-4 col-xl-4"> 
<img src="img/servicios/Servicio3.png" alt="">
<h2>Servicios 3</h2>
<p class="text">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Accusantium atque, at ea eius veritatis odit alias, voluptatum sed voluptatem sint quod dolorum unde. Atque ex nihil hic quo asperiores laboriosam!</p>
<div class="btn-group-toggle" data-toggle="buttons">
  <label class="btn btn-secondary active">
    <input type="checkbox" checked> Checked
  </label>
</div>
      </div> 
</section>
<hr>
<section class="row">
<div class="col-md-6 col-xl-6 d-sm-none d-md-block">
<h2>Lorem ipsum, dolor sit amet consectetur adipisicing elit.</h2>
<p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Numquam, in. Tenetur quis voluptatem laborum ducimus delectus excepturi explicabo ex, eum perferendis praesentium repudiandae debitis deleniti dolores id quia suscipit rerum?</p>
</div>

<div class="col-md-6 col-xl-6 d-sm-none d-md-block">
<img class="imgtam" src="img/oficina/oficina1.jpg" alt="">
</div>
</section>
<hr>

<section class="row">
<div class="col-md-6 col-xl-6 d-sm-none d-md-block">
  <img class="imgtam" src="img/oficina/oficina2.jpg" alt="">
</div>

<div class="col-md-6 col-xl-6 d-sm-none d-md-block">
  <h2>Lorem ipsum, dolor sit amet consectetur adipisicing elit.</h2>
  <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Numquam, in. Tenetur quis voluptatem laborum ducimus delectus excepturi explicabo ex, eum perferendis praesentium repudiandae debitis deleniti dolores id quia suscipit rerum?</p>
</div>
</section>
<hr>
<section class="row">
<div class="col-md-6 col-xl-6 d-sm-none d-md-block">
<h2>Lorem ipsum, dolor sit amet consectetur adipisicing elit.</h2>
<p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Numquam, in. Tenetur quis voluptatem laborum ducimus delectus excepturi explicabo ex, eum perferendis praesentium repudiandae debitis deleniti dolores id quia suscipit rerum?</p>
</div>

<div class="col-md-6 col-xl-6 d-sm-none d-md-block">
<img class="imgtam" src="img/oficina/oficina3.jpg" alt="">
</div>
</section>
<hr>
<section class="row">
  <div class="col-md-6 col-xl-6 d-sm-none d-md-block">
      <img class="imgtam" src="img/oficina/oficina4.jpg" alt="">
  </div>

  <div class="col-md-6 col-xl-6 d-sm-none d-md-block">
      <h2>Lorem ipsum, dolor sit amet consectetur adipisicing elit.</h2>
      <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Numquam, in. Tenetur quis voluptatem laborum ducimus delectus excepturi explicabo ex, eum perferendis praesentium repudiandae debitis deleniti dolores id quia suscipit rerum?</p>
  </div>
  </section>

  <section class="row">
      <div class="col-sm-12 d-none d-sm-block d-md-none">
      <h2>Lorem ipsum, dolor sit amet consectetur adipisicing elit.</h2>
      <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Numquam, in. Tenetur quis voluptatem laborum ducimus delectus excepturi explicabo ex, eum perferendis praesentium repudiandae debitis deleniti dolores id quia suscipit rerum?</p>
      </div>

      <div class="col-sm-12 d-none d-sm-block d-md-none">
      <img class="imgtam1" src="img/oficina/oficina1.jpg" alt="">
      </div>
      </section>
      <hr>


  <section class="row">
      <div class="col-sm-12 d-none d-sm-block d-md-none">
          <h2>Lorem ipsum, dolor sit amet consectetur adipisicing elit.</h2>
          <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Numquam, in. Tenetur quis voluptatem laborum ducimus delectus excepturi explicabo ex, eum perferendis praesentium repudiandae debitis deleniti dolores id quia suscipit rerum?</p>
      </div>

      <div class="col-sm-12 d-none d-sm-block d-md-none">
          <img class="imgtam1" src="img/oficina/oficina2.jpg" alt="">
      </div>
      </section>
  <hr>
  <section class="row">
      <div class="col-sm-12 d-none d-sm-block d-md-none">
      <h2>Lorem ipsum, dolor sit amet consectetur adipisicing elit.</h2>
      <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Numquam, in. Tenetur quis voluptatem laborum ducimus delectus excepturi explicabo ex, eum perferendis praesentium repudiandae debitis deleniti dolores id quia suscipit rerum?</p>
      </div>

      <div class="col-sm-12 d-none d-sm-block d-md-none">
      <img class="imgtam1" src="img/oficina/oficina3.jpg" alt="">
      </div>
      </section>
      <hr>
      <section class="row">
          <div class="col-sm-12 d-none d-sm-block d-md-none">
              <h2>Lorem ipsum, dolor sit amet consectetur adipisicing elit.</h2>
              <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Numquam, in. Tenetur quis voluptatem laborum ducimus delectus excepturi explicabo ex, eum perferendis praesentium repudiandae debitis deleniti dolores id quia suscipit rerum?</p>
          </div>
  
          <div class="col-sm-12 d-none d-sm-block d-md-none">
              <img class="imgtam1" src="img/oficina/oficina4.jpg" alt="">
          </div>
          </section>

</main>
@endsection