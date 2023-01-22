
@extends('header')

@section('index')

<main class="container">
    <section class="row">
      <section class="col-sm-4">
        <h2>Acerca de mi</h2>
        <h4>Perfil</h4>
        <img src="img/imagenesex/usuario.png" alt="" class="perfil">
        <p>
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate modi at possimus ducimus soluta iure voluptatibus eos aspernatur, porro minus ex fugit facere architecto, atque animi maxime. Odio, quidem reiciendis!
        </p>
  
        <h3>Enlaces</h3>
        <p>Enlaces de interes</p>
  
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link active" href="#">Likedin</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">GitHub</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Neo</a>
          </li>
          <li class="nav-item">
            <a class="nav-link disabled">Ayuda</a>
          </li>
        </ul>
      </section>
  
        <section class="col-sm-8">
          <h2>Proyectos realizados</h2>
          <h4>Sistema integral tributario</h4>
          <img src="img/imagenesex/SEAFI.jfif" alt="" class="ingproyectos">
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid libero fugit corporis temporibus deleniti sunt voluptates similique dolores accusantium necessitatibus quisquam totam provident qui dolorum voluptatem expedita, quidem inventore beatae.
          Fugiat vero dignissimos at pariatur eius consequatur id nam necessitatibus quaerat quasi. Corporis animi corrupti repellendus laudantium totam, dolores omnis fugit ut! Dolorem obcaecati voluptates voluptas, quisquam hic illum eum?</p>
         <br>
         <h2>Proyectos realizados</h2>
         <h4>Sistema integral tributario</h4>
         <img src="img/imagenesex/JAVA.jpg" alt="" class="ingproyectos" id="ingjava">
         <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
         <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid libero fugit corporis temporibus deleniti sunt voluptates similique dolores accusantium necessitatibus quisquam totam provident qui dolorum voluptatem expedita, quidem inventore beatae.
         Fugiat vero dignissimos at pariatur eius consequatur id nam necessitatibus quaerat quasi. Corporis animi corrupti repellendus laudantium totam, dolores omnis fugit ut! Dolorem obcaecati voluptates voluptas, quisquam hic illum eum?</p>
        </section>
  
      
    </section>
  </main>

@endsection