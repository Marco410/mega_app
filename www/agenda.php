<?php include 'header.php';  ?>

<link rel="stylesheet" type="text/css" href="css/agenda.css">

<h3 class="h3 text-center" >AGENDA TU CITA</h3>
<img class="imagen" width="90px" height="90px" src="img/icons/cuaderno.svg" />

<div class="form">
    
    <label>Día <input  class="form-control" type="date" name="dia"  /></label><br/><br/>
    <label>Hora <input type="time" name="hora" class="form-control"  /></label><br/><br/>
    
    <label>Sucursal <select class="form-control" >
        <option>Morelia</option>
        <option>Oaxaca</option>
        </select></label><br/><br/>
    <label>Usuario <input class="form-control" type="text" name="usuario"  /></label><br/><br/>
 
  
    <div>
        <button class="btn" >Agendar</button>
    </div>
</div>

<?php include 'footer.php';  ?>