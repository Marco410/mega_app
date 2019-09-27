<?php include 'header.php';  ?>

<div class="card" >
    <div class="card-header text-center" >
    <h4 >Tratamiento</h4>
    <p>Elige tu estilo de vida</p>
        <a href="#collapseOne" ><i class="fas fa-chevron-down"></i></a>
        
    </div>
    <img class="img-fluid bg" src="img/images/hap.jpg" />
    
    <div class="card-body" style="background-color:#424242" >
        <h6 class="text-center text-lg text-white " >"Su salud en buenas manos"</h6>  
    </div>
</div>


<div class="accordion " id="accordionExample">
  <div class="">
    <div class="card-header " id="headingOne" style="background-color:#09BDE6">
      <h5 class="mb-0">
        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
          <h5 class="text-white">Prevención</h5>
        </button>
      </h5>
    </div>

    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
      <div class="card-body">
          <h5>Háblanos y aprenderás
              a no enfermarte.</h5>
        Lorem ipsum dolor sit amet, consectetur
        adipiscing elit. Aenean in lacinia leo.
        Vivamus vel erat augue. Sed euismod
        ornare magna a dictum. Sed imperdi
      </div>
    </div>
  </div>
  <div class="">
    <div class="card-header" id="headingTwo" style="background-color:#08A8CC">
      <h5 class="mb-0">
        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
         <h5 class="text-white">Desintoxicación</h5>
        </button>
      </h5>
    </div>
    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
      <div class="card-body">
       Lorem ipsum dolor sit amet, consectetur
        adipiscing elit. Aenean in lacinia leo.
        Vivamus vel erat augue. Sed euismod
        ornare magna a dictum. Sed imperdi
      </div>
    </div>
  </div>
  <div class="border-0">
    <div class="card-header" id="headingThree" style="background-color:#067E99">
      <h5 class="mb-0">
        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
          <h5 class="text-white">Reprogramación Inmunológica</h5>
        </button>
      </h5>
    </div>
    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
      <div class="card-body">
        Lorem ipsum dolor sit amet, consectetur
        adipiscing elit. Aenean in lacinia leo.
        Vivamus vel erat augue. Sed euismod
        ornare magna a dictum. Sed imperdi
      </div>
    </div>
  </div>
    <div class="border-0">
    <div class="card-header" id="headingFour"
         style="background-color:#033540">
      <h5 class="mb-0">
        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
          <h5 class="text-white">Rehabilitación</h5>
        </button>
      </h5>
    </div>
    <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
      <div class="card-body">
        Lorem ipsum dolor sit amet, consectetur
        adipiscing elit. Aenean in lacinia leo.
        Vivamus vel erat augue. Sed euismod
        ornare magna a dictum. Sed imperdi
      </div>
    </div>
  </div>
</div>
<script>$('.collapse').collapse()</script>

<script type="text/javascript" src="js/tratamiento.js"></script>

<?php include 'footer.php';  ?>