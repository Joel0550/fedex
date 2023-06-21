
<div class="container">
    <div class="row">
        <div class="col-md-12 text-center">
            <br>
            <br>
            <h1 style="color:red;"><b>NUEVA SUCURSAL</b></h1>
            <br>
            <br>
        </div>
    </div>
</div>

<div class="container">
    <form class="" action="<?php echo site_url(); ?>/sucursales/guardar" method="post">
        <div class="row">
            <div class="col-md-4 text-center">
                <label for="">CODIGO SUCURSAL:</label>
                <br>
                <input type="text" placeholder="Ingrese un codigo para la sucursal" class="form-control" name="cod_suc" value="">
            </div>
            <div class="col-md-4 text-center">
                <label for="">NOMBRE DE LA SUCURSAL:</label>
                <br>
                <input type="text" placeholder="Ingrese el nombre de la sucursal" class="form-control" name="nom_suc" value="">
            </div>
            <div class="col-md-4 text-center">
                <label for="">DIRECCION:</label>
                <br>
                <input type="text" placeholder="Ingrese su direccion" class="form-control" name="dir_suc" value="">
            </div>
            <div class="col-md-4 text-center">
                <label for="">CIUDAD:</label>
                <br>
                <input type="text" placeholder="Ingrese su ciudad" class="form-control" name="ciu_suc" value="">
            </div>
            <div class="col-md-4 text-center">
                <label for="">PAIS:</label>
                <br>
                <input type="text" placeholder="Ingrese su pais" class="form-control" name="pais_suc" value="">
            </div>
            <div class="col-md-4 text-center">
                <label for="">LATITUD:</label>
                <br>
                <input type="text" placeholder="Seleccione la ubicacion en el mapa" class="form-control" name="latitud_suc" id="latitud" value="">
            </div>
            <div class="col-md-4 text-center">
                <label for="">LONGITUD:</label>
                <br>
                <input type="text" placeholder="Seleccione la ubicacion en el mapa" class="form-control" name="longitud_suc" id="longitud" value="">
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
            <a href="<?php echo site_url(); ?>/sucursales/index" class="btn btn-danger">CANCELAR</a>
        </div>
        <br>

    </form>
</div>
<br>
<br>