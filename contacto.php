<?php include("encabezado.php"); ?>


<div id="contenido">




<div class="seccion">



<div class="contenido contacto_main">

<p>Atención en: México DF, estado México, Pachuca, Toluca, Puebla, Cancún</p>
<div class="limpiar"></div>

<form class="form_antro" action="enviar.php" method="post">

<p>
<label for="nombre">Nombre</label>
<input type="text" name="nombre" id="nombre" required />
</p>

<p>
<label for="telefono">Teléfono</label>
<input type="text" name="telefono" required />
</p>

<p>
<label for="celular">Teléfono con Lada o Celular</label>
<input type="text" name="celular" required />
</p>

<p>
<label for="email">e-mail</label>
<input type="text" name="email" required />
</p>

<p>
<label for="tipo">Tipo de evento</label>
    <select name="tipo" required>
        <option value="">  </option>
        <option value="Cumpleaños"> Cumpleaños </option>
        <option value="Fiesta Sorpresa"> Fiesta Sorpresa </option>
        <option value="Despedida"> Despedida </option>
        <option value="Ocacional"> Ocacional </option>
        <option value="Graduacion"> Graduacion </option>
        <option value="XV Años"> XV Años </option>
        <option value="BODA"> BODA </option>
        <option value="Expos"> Expos </option>
        <option value="Intermediarios"> Intermediarios </option>
    </select>
</p>

<p>
<label for="dia">Día de tu evento</label>
<input type="text" name="dia" required />
</p>

<p>
<label for="cantidad">Cantidad de invitados</label>
<select name="cantidad" required>
    <option value="">  </option>
    <option value="10"> 10 </option>
    <option value="15"> 15 </option>
    <option value="20"> 20 </option>
    <option value="30"> 30 </option>
    <option value="50"> 50 </option>
    <option value="70"> 70 </option>
    <option value="80"> 80 </option>
    <option value="100"> 100 </option>
    <option value="120"> 120 </option>
    <option value="150"> 150 </option>
    <option value="200"> 200 </option>
    <option value="250"> 250 </option>
    <option value="300"> 300 </option>
</select>
</p>

<p>
<label for="mensaje">Mensaje</label>
<textarea name="mensaje" id="mensaje" required></textarea>
</p>

<p>
<label for="como">¿Como se enteró de nosotros?</label>
<select name="como" required>
    <option value="">  </option>
    <option value="Recomendado"> Recomendado </option>
    <option value="Cliente VIP"> Cliente VIP </option>
    <option value="Socios"> Socios </option>
    <option value="FaceBook"> FaceBook </option>
    <option value="Google"> Google </option>
    <option value="Yahoo"> Yahoo </option>
    <option value="Mercado Libre"> Mercado Libre </option>
    <option value="Segunda Mano"> Segunda Mano </option>
    <option value="Comercial Radio"> Comercial Radio </option>
    <option value="Comercial TV"> Comercial TV </option>
    <option value="Periodico "> Periodico </option>
    <option value="Cupon"> Cupon </option>
</select>
</p>


<p>
<label></label>
<input class="submit" type="submit" value="Enviar"/>
</p>

</form>


</div><!-- Cierra Div Contenido -->



</div><!-- fin .seccion -->


<?php include("pie.php"); ?>