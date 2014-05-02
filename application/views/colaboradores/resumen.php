<?php foreach($colaboradores as $colaborador) {  ?>
    <h3><?php echo $colaborador->persona->apellido ?>, <?php echo $colaborador->persona->nombre ?></h3>
    <?php if ($colaborador->fichas->find_all()->count() > 0) { ?>
        <table>
            <tr>
                <th>Ficha Nro.</th>
                <th>ID Socio</th>
                <th>Apellido y Nombre</th>
                <th></th>
            </tr>
        <?php foreach($colaborador->fichas->find_all() as $ficha) { ?>
            
            <?php if (isset($ficha->socio->id)) { ?>
            <tr>
                <td><?php echo $ficha->numero_ficha ?></td>
                <td><?php echo $ficha->socio->id ?></td>
                <td><?php echo $ficha->socio->persona->apellido ?>, <?php echo $ficha->socio->persona->nombre ?></td>
                <td></td>
            </tr>
            <?php } ?>

        <?php } ?>
        </table>
    <?php } else { ?>
        <p>No tiene fichas asignadas</p>
    <?php } ?>
<?php } ?>