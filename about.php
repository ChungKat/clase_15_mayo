<?php include('cabeza.php');?>
<section>
<?php
$datos = array_map('str_getcsv', file('portafolio-academico.csv'));
// pero debo hacer un pequeño ajuste, para eliminar del arreglo el encabezado del imdb-movies.csv
array_walk($datos, function(&$a) use ($datos) {$a = array_combine($datos[0], $a);});
array_shift($datos);
?>
<h2>Sobre el proyecto</h2>
<p>Dentro de estos ultimos 10 años Santiago han aparecido una serie de artistas que se dedican al muralismo y el street art. Destacados en sus áreas estos artistas han sido capaces de llevar su arte por todo el mundo y llevar consigo nuestro imaginario chileno y plasmarlo en los diferentes países. No sorprende su manejo del color y la composición a gran escala, ya que los artistas que se tomarán en la investigación son también diseñadores gráficos. A partir de una serie de entrevistas a los artistas Inti, Payo y Estoy, develaremos cuál es el rol o la influencia del Diseño dentro de sus trabajos y su visión del arte callejero en Chile.</p>
<h4>Motivación</h4>
<p>Mi área de interés dentro del Diseño es la Ilustración y de como la imagen es capaz de transmitir distintas emociones y mensajes a través de la composición y el uso de colores. En este caso, el movimiento de arte urbano contemporáneo toma estos elementos básicos y los utiliza para, a través de la imagen pictórica, intervenir el espacio con mensajes directamente relacionados con la vida urbana.</p>

</section>
<?php include('pie.php');?>
