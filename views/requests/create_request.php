<?php
    include ('libs/header.php')
?>
    <div class="container p-4">
        <h1>Konecta Test</h1>
        <h2><?php echo $data['title'];?></h2>
        <div class="row">
            <div class="col-md-5">
                <div class="mb-2 mt-2">
                    <a class='btn btn-outline-primary' href="index.php?controller=request&action=index" >Atras</a>
                </div>
                <div class="card card-body mb-3">
                    <form id="create_requests" name="create_requests" method="post" action="index.php?controller=request&action=store">
                        <div class="form-group mb-2">
                            <input class="form-control" type="text" id = "code" name = "code" placeholder="Código" required>
                        </div>
                        <div class="form-group mb-2">
                            <input class="form-control" type="text" id = "description" name = "description" placeholder="Descripción" required>
                        </div>
                        <div class="form-group mb-2">
                            <input class="form-control" type="text" id = "summary" name = "summary" placeholder="Resumen" required>
                        </div>
                        <div class="form-group mb-2">
                            <input class="form-control" type="number" id = "employees_id" name = "employees_id" placeholder="ID Empleado" Value =<?php echo $_GET['id'];?> hidden required>
                        </div>
                        <input type="submit" class="btn btn-success btn-block" name="save_product" value = "<?php echo $data['title']?>">
                    </form>
                </div>
            </div>
        </div>
    </div>
<?php
    include ('libs/footer.php')
?>