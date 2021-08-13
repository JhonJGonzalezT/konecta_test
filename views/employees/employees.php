<?php
    include ('libs/header.php')
?>
<div class="container p-4">
    <h1>Konecta Test</h1>
    <h2><?php echo $data['title']?></h2>
    <div class="row">
        <div class="col-md-12">
            <div class="mb-2 mt-2">
                <a class='btn btn-outline-primary' href="index.php?controller=request&action=index" >Ver solicitudes</a>
            </div>
            <div class="mb-2 mt-2">
                <a class='btn btn-outline-primary' href="index.php?controller=employee&action=view_create" >Agregar empleado</a>
            </div>
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th>id</th>
                    <th>Nombre</th>
                    <th>Salario</th>
                    <th>Fecha de Ingreso</th>
                    <th>Editar</th>
                    <th>Eliminar</th>
                    <th>Solicitud</th>
                </tr>
                </thead>
                <tbody>
                <?php
                foreach ($data['employees'] as $employee){
                    echo '<tr>';
                    echo '<td>'.$employee['id'].'</td>';
                    echo '<td>'.$employee['name'].'</td>';
                    echo '<td>'.$employee['salary'].'</td>';
                    echo '<td>'.$employee['date_entry'].'</td>';
                    echo "<td>
                                <a
                                    class='btn btn-secondary'
                                    href='index.php?controller=employee&action=view_update&id=".$employee['id']."'
                                >
                                    Modificar
                                </a>
                          </td>";
                    echo "<td><a href='index.php?controller=employee&action=destroy&id=".$employee['id']."'>Eliminar</a></td>";
                    echo "<td><a href='index.php?controller=request&action=view_create&id=".$employee['id']."'>crear</a></td>";
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
