<style>
  .d-flex svg{
      margin-right: 15px;
      color:rgb(255, 255, 255)       
  }
 
  .d-flex svg:hover{
        /* color:rgba(94,108,94) */
        color: rgb(143,172,91)
        
    }

    .container-fluid img{
        margin-right: 15px;
        margin-left: 15px;
    }

    .d-flex a{
      color: white;
    }
    .d-flex a:hover{
      color: rgb(143,172,91)
    }
    

</style>

<header>
    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
        <div class="container-fluid">
            {{-- <a class="navbar-brand" href="#">LOGO DE TIENDA</a> --}}
            <img src="zoro.png" width="40" alt="Huawei-v4">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
    <ul class="navbar-nav me-auto mb-2 mb-md-0">
      <li class="nav-item">
        <a class="nav-link " aria-current="page" href="/inicio">INICIO</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/catalogo">CATALOGO</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/ubicacion">TIENDAS FISICAS</a>
      </li>
    </ul>
    <form class="d-flex" style="margin-bottom: 0px">
        {{-- ICONO PAGOS --}}
      <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="currentColor" class="bi bi-piggy-bank-fill" viewBox="0 0 16 16" type="submit">
        <a href="/ventas" style="text-decoration: none">
        <path d="M7.964 1.527c-2.977 0-5.571 1.704-6.32 4.125h-.55A1 1 0 0 0 .11 6.824l.254 1.46a1.5 1.5 0 0 0 1.478 1.243h.263c.3.513.688.978 1.145 1.382l-.729 2.477a.5.5 0 0 0 .48.641h2a.5.5 0 0 0 .471-.332l.482-1.351c.635.173 1.31.267 2.011.267.707 0 1.388-.095 2.028-.272l.543 1.372a.5.5 0 0 0 .465.316h2a.5.5 0 0 0 .478-.645l-.761-2.506C13.81 9.895 14.5 8.559 14.5 7.069c0-.145-.007-.29-.02-.431.261-.11.508-.266.705-.444.315.306.815.306.815-.417 0 .223-.5.223-.461-.026a.95.95 0 0 0 .09-.255.7.7 0 0 0-.202-.645.58.58 0 0 0-.707-.098.735.735 0 0 0-.375.562c-.024.243.082.48.32.654a2.112 2.112 0 0 1-.259.153c-.534-2.664-3.284-4.595-6.442-4.595Zm7.173 3.876a.565.565 0 0 1-.098.21.704.704 0 0 1-.044-.025c-.146-.09-.157-.175-.152-.223a.236.236 0 0 1 .117-.173c.049-.027.08-.021.113.012a.202.202 0 0 1 .064.199Zm-8.999-.65a.5.5 0 1 1-.276-.96A7.613 7.613 0 0 1 7.964 3.5c.763 0 1.497.11 2.18.315a.5.5 0 1 1-.287.958A6.602 6.602 0 0 0 7.964 4.5c-.64 0-1.255.09-1.826.254ZM5 6.25a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Z"/>
        </svg>
        {{-- ICONO SESION --}}
      <svg xmlns="#" width="30" height="30" fill="currentColor" class="bi bi-person-square" viewBox="0 0 16 16" type="submit">
        <a href="/login" style="text-decoration: none">
        <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
        <path d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2zm12 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1v-1c0-1-1-4-6-4s-6 3-6 4v1a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h12z"/>
      </svg>
    </form>
  </div>
</div>
</nav>
</header>