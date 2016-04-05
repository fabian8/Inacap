<h1><u>Ciudades</u></h1>
<a href="Ciudad/nuevo">Nueva Ciudad</a>
<br>
 <?php
foreach ($ciudad as $ci){ 
    echo $ci->ciudad_id . "<br>";
    echo $ci->nombre;    
  }
  