<?php
    include ('libs/header.php')
?>
<div class="container p-4">
    <h1>Konecta Test</h1>
    <h2><?php echo $data['title']?></h2>
    <div class="row">
        <div class="col-md-12">
            <div class="mb-2 mt-2">
                <a class='btn btn-outline-primary' href="index.php?controller=request&action=view_create" >Agregar</a>
            </div>
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th>Código</th>
                    <th>Descripción</th>
                    <th>Resumen</th>
                    <th hidden>ID Empleado</th>
                    <th>Nombre</th>
                    <th>Editar</th>
                    <th>Eliminar</th>
                </tr>
                </thead>
                <tbody>
                <?php
                foreach ($data['requests'] as $request){
                    echo '<tr>';
                    echo '<td>'.$request['code'].'</td>';
                    echo '<td>'.$request['description'].'</td>';
                    echo '<td>'.$request['summary'].'</td>';
                    echo '<td hidden>'.$request['employees_id'].'</tdhidden>';
                    echo '<td>'.$request['name'].'</td>';
                    echo "<td>
                                <a
                                    class='btn btn-secondary'
                                    href='index.php?controller=request&action=view_update&id=".$request['id']."'
                                >
                                    Modificar
                                </a>
                          </td>";
                    echo "<td><a href='index.php?controller=request&action=destroy&id=".$request['id']."'>Eliminar</a></td>";
                    echo '</tr>';
                }
                ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<?php
    include ('libs/footer.php')
?>
