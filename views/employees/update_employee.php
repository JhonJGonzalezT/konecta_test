<?php
    include ('libs/header.php')
?>
<div class="container p-4">
    <h1>Konecta Test</h1>
    <h2><?php echo $data['title'];?></h2>
    <div class="row">
        <div class="col-md-5">
            <div class="card card-body mb-3">
                <form id="update_employee" name="update_employee" method="post" action="index.php?controller=employee&action=update">
                    <input type="hidden" id = "id" name = "id" value="<?php echo $data['id'];?>">
                    <div class="form-group mb-2">
                        <input class="form-control" type="text" id = "name" name = "name" placeholder="Nombre completo" value="<?php echo $data['employee']['name'];?>" required/>
                    </div>
                    <div class="form-group mb-2">
                        <input class="form-control" type="number" id = "salary" name = "salary" placeholder="Salario" value="<?php echo $data['employee']['salary'];?>" required/>
                    </div>
                    <div class="form-group mb-2">
                        <input class="form-control" type="date" id = "date_entry" name = "date_entry" placeholder="Fecha de ingreso" value="<?php echo $data['employee']['date_entry'];?>" required/>
                    </div>
                    <input type="submit" class="btn btn-success btn-block" name="save_product" value = "<?php echo $data['title']?>"/>
                </form>
            </div>
        </div>
    </div>
</div>
<?php
    include ('libs/footer.php')
?>