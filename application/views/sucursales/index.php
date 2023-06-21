<div class="container">
    <div class="row">
        <div class="col-md-12 text-center">
            <img src="<?php echo base_url(); ?>/assets/images/13.png" alt="" style="width: 200px; height: 200px;">
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-md-12 text-center">
            <br>
            <h1 style="color:red;"><b>LISTADO DE SUCURSALES</b></h1>
        </div>
    </div>
</div>
<div class="col-md-4">
    <a href="<?php echo site_url('sucursales/nuevo'); ?>" class="btn btn-primary">
        <i class="glyphicon glyphicon-plus"></i>
        Agregar sucursal
    </a>
</div>
<br>
<br>
<br>
<?php if ($sucursales) : ?>
    <table class="table table=striped table-bordered table-hover">
        <thead>
            <tr>
                <th>CODIGO</th>
                <th>NOMBRE DE LA SUCURSAL</th>
                <th>DIRECCION</th>
                <th>CIUDAD</th>
                <th>PAIS</th>
                <th>LATITUD</th>
                <th>LONGITUD</th>
                <th>ACCIONES</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($sucursales
                as $filaTemporal) : ?>
                <tr>
                    <td>
                        <?php echo
                        $filaTemporal->cod_suc; ?>
                    </td>
                    <td>
                        <?php echo
                        $filaTemporal->nom_suc; ?>
                    </td>
                    <td>
                        <?php echo
                        $filaTemporal->dir_suc; ?>
                    </td>
                    <td>
                        <?php echo
                        $filaTemporal->ciu_suc; ?>
                    </td>
                    <td>
                        <?php echo
                        $filaTemporal->pais_suc; ?>
                    </td>
                    <td>
                        <?php echo
                        $filaTemporal->latitud_suc; ?>
                    </td>
                    <td>
                        <?php echo
                        $filaTemporal->longitud_suc; ?>
                    </td>
                    <td class="text-center">
                        <a href="#" title="Editar Sucursal">
                            <i class="mdi mdi-pencil"></i>
                        </a>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <a href="<?php echo site_url(); ?>/sucursales/eliminar/<?php echo $filaTemporal->cod_suc; ?>" title="Eliminar Sucursal" onclick="return confirm('¿Estas seguro?');" style="color:red;">
                            <i class="bi bi-trash"></i>
                        </a>
                    </td>

                </tr>
            <?php endforeach; ?>
        </tbody>

    </table>
<?php else : ?>
    <h1> Dont have Sucursales<h1>
        <?php endif; ?>