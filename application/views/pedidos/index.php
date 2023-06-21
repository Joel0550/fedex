<div class="container">
    <div class="row">
        <div class="col-md-12 text-center">
            <img src="<?php echo base_url(); ?>/assets/images/12.png" alt="" style="width: 200px; height: 200px;">
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-md-12 text-center">
            <br>
            <h1 style="color:red;"><b>LISTADO DE PEDIDOS</b></h1>
        </div>
    </div>
</div>
<div class="col-md-4">
    <a href="<?php echo site_url('pedidos/nuevo'); ?>" class="btn btn-primary">
        <i class="glyphicon glyphicon-plus"></i>
        Agregar Pedido
    </a>
</div>
<br>
<br>
<br>
<?php if ($pedidos) : ?>
    <table class="table table=striped table-bordered table-hover">
        <thead>
            <tr>
                <th>CODIGO</th>
                <th>FECHA DE INGRESO</th>
                <th>TOTAL A PAGAR</th>
                <th>LATITUD</th>
                <th>LONGITUD</th>
                <th>ACCIONES</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($pedidos
                as $filaTemporal) : ?>
                <tr>
                    <td>
                        <?php echo
                        $filaTemporal->cod_ped; ?>
                    </td>
                    <td>
                        <?php echo
                        $filaTemporal->fecha_ped; ?>
                    </td>
                    <td>
                        <?php echo
                        $filaTemporal->total_ped; ?>
                    </td>
                    <td>
                        <?php echo
                        $filaTemporal->latitud_ped; ?>
                    </td>
                    <td>
                        <?php echo
                        $filaTemporal->longitud_ped; ?>
                    </td>
                    <td class="text-center">
                        <a href="#" title="Editar Pedido">
                            <i class="glyphicon glyphicon-pencil"></i>
                        </a>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <a href="<?php echo site_url(); ?>/pedidos/eliminar/<?php echo $filaTemporal->cod_ped; ?>" title="Eliminar Pedido" onclick="return confirm('¿Estas seguro?');" style="color:red;">
                            <i class="glyphicon glyphicon-trash"></i>
                        </a>
                    </td>

                </tr>
            <?php endforeach; ?>
        </tbody>

    </table>
<?php else : ?>
    <h1> Dont have Pedidos<h1>
        <?php endif; ?>