<!DOCTYPE html>
<html>
<head>
    <title>Graficas</title>
    <link rel="stylesheet" type="text/css" href="librerias/bootstrap/css/bootstrap.css">
    <script src="librerias/jquery-3.5.1.min.js"></script>
    <script src="librerias/plotly-latest.min.js"></script>
    <link rel="icon" href="data:;base64,iVBORw0KGgo=">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="panel panel-primary">
                    <div class="panel panel-heading">Graficas de registros de usuarios</div>
                </div>
                <div class=" panel panel-body">
                    <div class="row">
                        <div class="col-sm-6">
                            <div id="cargaLineal"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>

<script type="text/javascript">
    $(document).ready(function(){
        $('#cargaLineal').load('lineal.php');
    });
</script>