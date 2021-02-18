<?php include('db_connection.php') ?>
<?php include('include/head.php')?>
   <div class="container p-4">
        <div class="row">
            <div class="col-md-4">
                <!-- targetas  -->
                <div class="card card-body">
                    <!-- formulario -->
                    <form action="save_data.php" method = 'POST'>
                        <div class="form-group">
                            <textarea type="text" name = "descripcion" class = "form-control" 
                            placeholder="Ingreso Descripcion" autofocus></textarea>
                        </div><br>
                        
                        <div class="form-group">
                        <input type="text" name = "precui" class = "form-control" 
                            placeholder="Ingreso precio"><br>
                        </div>
                        <input type="submit" class = "btn btn-success btn-block" value="Registrar departamento"
                        name="register_lease">
                    </form>
                </div>
            </div>

            <div class="col-md-8">
            
            </div>
        </div>
   </div>
    
<?php include('include/footer.php')?>