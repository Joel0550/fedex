
<div class="container">
    <div class="row">
        <div class="col-md-12 text-center">
            <br>
            <br>
            <h1 style="color:red;"><b>NUEVO CLIENTE</b></h1>
            <br>
            <br>
        </div>
    </div>
</div>

<div class="container">
    <form class="" action="<?php echo site_url(); ?>/clientes/guardar" method="post">
        <div class="row">
            <div class="col-md-4 text-center">
                <label for="">CODIGO CLIENTE:</label>
                <br>
                <input type="text" placeholder="Ingrese un codigo para el cliente" class="form-control" name="cod_cli" value="">
            </div>
            <div class="col-md-4 text-center">
                <label for="">NOMBRE:</label>
                <br>
                <input type="text" placeholder="Ingrese sus nombres" class="form-control" name="nom_cli" value="">
            </div>
            <div class="col-md-4 text-center">
                <label for="">APELLIDO:</label>
                <br>
                <input type="text" placeholder="Ingrese sus apellidos" class="form-control" name="ape_cli" value="">
            </div>
            <div class="col-md-4 text-center">
                <label for="">CORREO:</label>
                <br>
                <input type="text" placeholder="Ingrese su correo" class="form-control" name="correo_cli" value="">
            </div>
            <div class="col-md-4 text-center">
                <label for="">TELEFONO:</label>
                <br>
                <input type="text" placeholder="Ingrese sus numero de telefono" class="form-control" name="tel_cli" value="">
            </div>
            <div class="col-md-4 text-center">
                <label for="">DIRECCION:</label>
                <br>
                <input type="text" placeholder="Ingrese su direccion" class="form-control" name="dir_cli" value="">
            </div>
            <div class="col-md-4 text-center">
                <label for="">CIUDAD:</label>
                <br>
                <input type="text" placeholder="Ingrese su cuidad" class="form-control" name="ciu_cli" value="">
            </div>
            <div class="col-md-4 text-center">
                <label for="">PAIS:</label>
                <br>
                <input type="text" placeholder="Ingrese su pais" class="form-control" name="pais_cli" value="">
            </div>
            <div class="col-md-4 text-center">
                <label for="">LATITUD:</label>
                <br>
                <input type="text" placeholder="Seleccione la ubicacion en el mapa" class="form-control" name="latitud_cli" id="latitud" value="">
            </div>
            <div class="col-md-4 text-center">
                <label for="">LONGITUD:</label>
                <br>
                <input type="text" placeholder="Seleccione la ubicacion en el mapa" class="form-control" name="longitud_cli" id="longitud" value="">
            </div>
                <div class="col-md-12">
                    <br>
                    <div id="mapaUbicacion" 
                    style="height: 400px; width:100%;
                    border:2px solid black;"></div>
                    <br>
                </div>
            <script type="text/javascript">
                function initMap(){
                    var centro=
                    new google.maps.LatLng(-2.1741112410914147, 
                        -78.914874103013575);
                        var mapa1=new google.maps.Map(
                            document.getElementById('mapaUbicacion'),
                        {
                            center: centro,
                            zoom: 7,
                            mapTypeId:google.maps.MapTypeId.ROADMAP
                        }
                    );

                    var marcador=new google.maps.Marker({
                        position:centro,
                        map:mapa1,
                        title:"Seleccione la dirreccion",
                        icon:"",
                        draggable:true
                    });
                    google.maps.event.addListener(marcador,
                    'dragend', function(){
                        /*alert("Se termino el Drag");*/
                        document.getElementById('latitud').value=
                        this.getPosition().lat();
                        document.getElementById('longitud').value=
                        this.getPosition().lng();
                    });
                }//cierre de la funcion initMap

            </script>
        </div>
        <br>
        <div class="col-md-12 text-center">
            <button type="submit" name="button" class="btn btn-primary">
                GUARDAR
            </button>
            &nbsp;
            <a href="<?php echo site_url(); ?>/clientes/index" class="btn btn-danger">CANCELAR</a>
        </div>
        <br>

    </form>
</div>
<br>
<br>