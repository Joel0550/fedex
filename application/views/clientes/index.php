<div class="container">
    <div class="row">
        <div class="col-md-12 text-center">
            <img src="<?php echo base_url(); ?>/assets/images/11.png" alt="" style="width: 200px; height: 200px;">
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-md-12 text-center">
            <br>
            <h1 style="color:red;"><b>LISTADO DE CLIENTES</b></h1>
        </div>
    </div>
</div>
<div class="col-md-4">
    <a href="<?php echo site_url('clientes/nuevo'); ?>" class="btn btn-primary">
        <i class="glyphicon glyphicon-plus"></i>
        Agregar Cliente
    </a>
</div>
<br>
<br>
<br>
<?php if ($clientes) : ?>
    <table class="table table=striped table-bordered table-hover">
        <thead>
            <tr>
                <th>CODIGO DE CLIENTE</th>
                <th>NOMBRE</th>
                <th>APELLIDO</th>
                <th>CORREO</th>
                <th>TELEFONO</th>
                <th>DIRECCION</th>
                <th>CIUDAD</th>
                <th>PAIS</th>
                <th>LATITUD</th>
                <th>LONGITUD</th>
                <th>ACCIONES</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($clientes
                as $filaTemporal) : ?>
                <tr>
                    <td>
                        <?php echo
                        $filaTemporal->cod_cli; ?>
                    </td>
                    <td>
                        <?php echo
                        $filaTemporal->nom_cli; ?>
                    </td>
                    <td>
                        <?php echo
                        $filaTemporal->ape_cli; ?>
                    </td>
                    <td>
                        <?php echo
                        $filaTemporal->correo_cli; ?>
                    </td>
                    <td>
                        <?php echo
                        $filaTemporal->tel_cli; ?>
                    </td>
                    <td>
                        <?php echo
                        $filaTemporal->dir_cli; ?>
                    </td>
                    <td>
                        <?php echo
                        $filaTemporal->ciu_cli; ?>
                    </td>
                    <td>
                        <?php echo
                        $filaTemporal->pais_cli; ?>
                    </td>
                    <td>
                        <?php echo
                        $filaTemporal->latitud_cli; ?>
                    </td>
                    <td>
                        <?php echo
                        $filaTemporal->longitud_cli; ?>
                    </td>
                    <td class="text-center">
                        <a href="#" title="Editar Cliente">
                            <i class="glyphicon glyphicon-pencil"></i>
                        </a>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <a href="<?php echo site_url(); ?>/clientes/eliminar/<?php echo $filaTemporal->cod_cli; ?>" title="Eliminar Cliente" onclick="return confirm('¿Estas seguro?');" style="color:red;">
                            <i class="glyphicon glyphicon-trash"></i>
                        </a>
                    </td>

                </tr>
            <?php endforeach; ?>
        </tbody>

    </table>
<?php else : ?>
    <h1> Dont have Clientes<h1>
        <?php endif; ?>