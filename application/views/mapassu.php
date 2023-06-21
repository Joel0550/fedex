<!DOCTYPE html>
<html lang="es" dir="ltr">

<head>
    <meta charset=utf-8>
    <title>MAPA SUCURSALES </title>
    <!-- IMPORTACION JQuery v 3.x LIBRERIA PROGRAMAR EN JS-->
    <script src="https://code.jquery.com/jquery-3.6.4.min.js" integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>
    <!-- Importar CDN -->
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <!-- IMPORTACION DE API KEY DE GOOGLE MAPS -->
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCoObNZz2rn6AMxGvMKq1GDTFvd7CzGwdY&libraries=places&callback=initMap">
    </script>
</head>

<body>
    <br>
    <h1 class="text-center">MAPA SUCURSALES</h1>
    <div class="col-md-4">
    <a href="<?php echo base_url('/index.php'); ?>" class="btn btn-primary">
        <i class="glyphicon"></i>
        Volver
    </a>
    <br>
    <br>
</div>
    <div class="row">
        <div class="cold-md-12">
            <div id="mapaLugares" style="height:500px; width:100%; border:2px solid black;"></div>
        </div>
        <script type="text/javascript">
            function initMap() {
                var centro =
                    new google.maps.LatLng(-0.9148497959798965, -78.62854471614966);
                var mapaLugaresTuristicos = new google.maps.Map(
                    document.getElementById("mapaLugares"), {
                        center: centro,
                        zoom: 3,
                        mapTypeId: google.maps.MapTypeId.HYBRID
                    }
                );
                <?php if ($mapassu) : ?>
                    <?php foreach ($mapassu as $lugarTemporal) : ?>
                        var coordenadaTemporal =
                            new google.maps.LatLng(<?php echo $lugarTemporal->latitud_suc; ?>, <?php echo $lugarTemporal->longitud_suc; ?>);
                        var marcador = new google.maps.Marker({
                            position: coordenadaTemporal,
                            title: "<?php echo $lugarTemporal->nom_suc; ?>",
                            icon: "<?php echo base_url(); ?>/assets/images/ubi.png",
                            map: mapaLugaresTuristicos
                        });
                    <?php endforeach;  ?>
                <?php endif; ?>
            } //Cierre de la funcion
        </script>
</body> 


</html>