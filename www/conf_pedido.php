<?php include 'header.php';  ?>

<div class="container" >
   
    <div>
        <h3 class="text-center" >Confirma tus Datos</h3>
    </div>
    
<form style="margin: 50px">
      <div class="form-group">
        <label >Nombre(s)</label>
        <input type="text" class="form-control" id="exampleInputEmail1"  placeholder="Ingresa tu nombre">
      </div>
      <div class="form-group">
        <label >Apellido Paterno</label>
        <input type="text" class="form-control" id="" placeholder="Ingresa tu apellido">
      </div>
    <div class="form-group">
        <label >Apellido Materno</label>
        <input type="text" class="form-control" id="" placeholder="Ingresa tu apellido">
      </div>
    <small class="text-muted text-center">Como desea ser contactado</small>
    
    <div class="text-center">
    <div class="custom-control custom-radio custom-control-inline" style="margin: none">
      <input type="radio" id="customRadioInline1" name="radios" class="custom-control-input" data-toggle="collapse" data-target="#telefono" >
        
      <label class="custom-control-label" for="customRadioInline1">Telefono</label>
    </div>
    <div class="custom-control custom-radio custom-control-inline">
      <input type="radio" id="customRadioInline2" name="radios" class="custom-control-input" data-toggle="collapse" data-target="#correo" >
      <label class="custom-control-label" for="customRadioInline2">Correo</label>
    </div>
    
    <div class="custom-control custom-radio custom-control-inline">
      <input type="radio" id="customRadioInline3" name="radios" class="custom-control-input" data-toggle="collapse" data-target=".multi-collapse" aria-controls="telefono correo" >
      <label class="custom-control-label" for="customRadioInline3">Ambos</label>
    </div>
    </div>
    
  <div class="collapse multi-collapse" id="telefono">
    <div class="bg-white p-4">
      <div class="form-group">
        <label >Telefono</label>
        <input type="text" class="form-control" id="tel_conf"  placeholder="Ingresa tu telefono">
      </div>
    </div>
  </div>
    <div class="collapse multi-collapse" id="correo">
    <div class="bg-white p-4">
      <div class="form-group">
        <label >Correo</label>
        <input type="email" class="form-control" id="tel_conf"  placeholder="Ingresa tu correo">
      </div>
    </div>
  </div>
    <div class="text-center">
    <button type="button" class="btn text-white btn-sm btn-block" style="background-color:#09BDE6; margin-top:20px" >Enviar</button>
    </div>

    </form>
</div>


<?php include 'footer.php';  ?>