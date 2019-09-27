<?php include 'header.php';  ?>

<link rel="stylesheet" type="text/css" href="css/registro.css">

<div class="container">
    <h3 class="text-center" >Registro</h3>

<img class="imagen" width="90px" height="90px" src="img/icons/registro.svg" />
</div>

<div class="form align" >
    <div class="bloq color2">
        <h4>General</h4> 
    </div>
    
    <div class="text-center" >
    
    <label>Nombre <input class="form-control" type="text" name="nombre"  /></label><br/><br/>
    <label>Apellido Paterno <input class="form-control" type="text" name="apellidoP"  /></label><br/><br/>
    <label>Apellido Materno <input class="form-control" type="text" name="apellidoM"  /></label><br/><br/>
    <label>Contraseña <input class="form-control" type="password" name="password"  /></label><br/><br/>
    <label>Confirme Contraseña <input  class="form-control" type="password" name="passwordC"  /></label><br/><br/>
    <label>Sucursal <select class="form-control" >
        <option>Morelia</option>
        <option>Guerrero</option>
        </select></label><br/><br/>
        
    <label>Correo Electronico <input class="form-control" type="email" name="correo"  /></label><br/><br/>

    <div class="bloq color3">
    <h4>Contacto</h4>
    </div>
        
    <label>Pais <input class="form-control" type="text" name="pais"  /></label><br/><br/>   
    <label>Estado <input class="form-control" type="text" name="estado"  /></label><br/><br/>   
    <label>Municipio <input class="form-control" type="text" name="municipio"  /></label><br/><br/>   
    <label>Calle <input class="form-control" type="text" name="calle"  /></label><br/><br/>   
    <label>Colonia <input class="form-control" type="text" name="colonia"  /></label><br/><br/>   
    <label>Codigo Postal <input class="form-control" type="text" name="codigo"  /></label><br/><br/>   
    <label>Telefono <input class="form-control" type="text" name="codigo"  /></label><br/><br/>   
    
     <div class="bloq color4">
        <h4>Identificación</h4> 
    </div>
        
        <label>CURP<input class="form-control" type="text"  /></label><br/><br/>
        <label>RFC<input class="form-control" type="text"  /></label><br/><br/>
        <label>Nacimiento<input class="form-control" type="date"  /></label><br/><br/>
        
    <div class="custom-control custom-radio custom-control-inline" >
      <input type="radio" id="customRadioInline1" name="radios" class="custom-control-input"  >
        
      <label class="custom-control-label" for="customRadioInline1">Masculino</label>
    </div>
    <div class="custom-control custom-radio custom-control-inline">
      <input type="radio" id="customRadioInline2" name="radios" class="custom-control-input">
      <label class="custom-control-label" for="customRadioInline2">Femenino</label>
    </div>

        
   <div>
        <button class="btn" >Guardar</button>
    </div>

</div>

    

    
<?php include 'footer.php';  ?>