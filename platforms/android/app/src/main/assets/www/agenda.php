<?php include 'header.php';  ?>

<link rel="stylesheet" type="text/css" href="css/agenda.css">

<h1>AGENDA TU CITA</h1>
<img class="imagen" width="90px" height="90px" src="img/icons/cuaderno.svg" />

<div class="form">
    <div class="bloq color2">
        <h2>Día</h2>
        <input type="date" name="dia"  />
    </div>
    <div class="bloq color3" >
        <h2>Hora</h2>
        <input type="time" name="hora" />
    </div>
    <div>
        <button class="btn" >Agendar</button>
    </div>
</div>

<?= include 'footer.php';  ?>