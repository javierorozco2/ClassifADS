<?php
    require_once "php/conexion.php";

    $conexion = conexion();

    $sql = "SELECT iduser, tipouser FROM gensuario";
    $result = msqli_query($conexion, $sql);

    $valoresX = array();
    $valoresY = array();

    while($ver=mysqli_fetch_row($result)){
    	$valoresY[] = $ver[1];
    	$valoresX[] = $ver[0];
    }

    $datosY = json_encode($valoresY);
    $datosX = json_encode($valoresX);
?>

<div id="graficaLineal"></div>

<script type="text/javascript">
	function crearCadenaLineal(json){
		var parsed = JSON.parse(json);
		var arr=[];
		for(var x in parsed){
			arr.push(parsed[x]);
		}
		return arr;
	}
</script>

<script type="text/javascript">

	datosX = crearCadenaLineal('<?php echo $datosX ?>');
	datosY = crearCadenaLineal('<?php echo $datosY ?>');

	var trace1 = {
		x: datosX;
		y: datosY;
		type: 'scatter'
	};

	var data = [trace1];

	Plotly.newPlot('graficaLineal', data);

</script>