<?php 
 $page = "Docentes"; 
?>
   
            <!-- Content Header (Page header) -->
            <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0"><?php  echo $page; ?></h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active"><?php  echo $page; ?> </li>
                    </ol>
                </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    <!-- Formulario de Ingreso de Informacion -->
                    <div class="row">
                        <div class="col-lg-2 col-1">
                        </div>
                        <div class="col-lg-8 col-10">
                            <!-- general form elements -->
                            <div class="card card-primary">
                                <div class="card-header">
                                <h3 class="card-title">Captura de <?php  echo $page; ?></h3>
                                </div>
                                <!-- /.card-header -->
                                <!-- form start -->
                                <form class="form-horizontal">
                                <fieldset>

                                <!-- Form Name -->
                                <legend><?php  echo $page; ?></legend>

                                <!-- Text input-->
                                <div class="form-group">
                                <label class="col-md-4 control-label" for="nombre">Nombre</label>  
                                <div class="col-md-4">
                                <input id="nombre" name="nombre" type="text" placeholder="Nombre" class="form-control input-md" required="">
                                <span class="help-block">nombre</span>  
                                </div>
                                </div>

                                <!-- Text input-->
                                <div class="form-group">
                                <label class="col-md-4 control-label" for="apellido">Apellido</label>  
                                <div class="col-md-4">
                                <input id="apellido" name="apellido" type="text" placeholder="Apellido" class="form-control input-md" required="">
                                <span class="help-block">apellido</span>  
                                </div>
                                </div>

                                <!-- Text input-->
                                <div class="form-group">
                                <label class="col-md-4 control-label" for="correo">Correo</label>  
                                <div class="col-md-4">
                                <input id="correo" name="correo" type="text" placeholder="Correo" class="form-control input-md" required="">
                                <span class="help-block">correo</span>  
                                </div>
                                </div>

                                <!-- Text input-->
                                <div class="form-group">
                                <label class="col-md-4 control-label" for="telefono">Teléfono</label>  
                                <div class="col-md-4">
                                <input id="telefono" name="telefono" type="text" placeholder="Teléfono" class="form-control input-md" required="">
                                <span class="help-block">Teléfono</span>  
                                </div>
                                </div>

                                <!-- Button (Double) -->
                                <div class="form-group">
                                <label class="col-md-4 control-label" for="guardar"></label>
                                <div class="col-md-8">
                                    <button id="guardar" name="guardar" class="btn btn-primary">Guardar</button>
                                    <button id="limpiar" name="limpiar" class="btn btn-info">Limpiar</button>
                                </div>
                                </div>

                                </fieldset>
                                </form>
                            </div>
                            <!-- /.card -->
                        </div>
                        <div class="col-lg-2 col-1">
                        </div>
                    </div>
                    <!-- Tabla de registros -->
                    <div class="row">
                        <div class="col-lg-2 col-1">
                        </div>
                        <div class="col-lg-8 col-10">
                            <div class="row">
                                <div class="col-12">
                                <div class="card">
                                    <div class="card-header">
                                    <h3 class="card-title">Registros</h3>
                    
                                    <div class="card-tools">
                                        <div class="input-group input-group-sm" style="width: 150px;">
                                        <input type="text" name="table_search" class="form-control float-right" placeholder="Search">
                    
                                        <div class="input-group-append">
                                            <button type="submit" class="btn btn-default">
                                            <i class="fas fa-search"></i>
                                            </button>
                                        </div>
                                        </div>
                                    </div>
                                    </div>
                                    <!-- /.card-header -->
                                    <div class="card-body table-responsive p-0" style="height: 300px;">
                                    <table class="table table-head-fixed text-nowrap">
                                        <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Tipo Gastos</th>
                                            <th>Fecha</th>
                                            <th>Valor</th>
                                            <th>Descripcion</th>
                                            <th>Estado</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td>183</td>
                                            <td>John Doe</td>
                                            <td>11-7-2014</td>
                                            <td>$50.000,00</td>
                                            <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
                                            <td><span class="tag tag-success">Approved</span></td>
                                        </tr>
                                        <tr>
                                            <td>219</td>
                                            <td>Alexander Pierce</td>
                                            <td>11-7-2014</td>
                                            <td>$50.000,00</td>
                                            <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
                                            <td><span class="tag tag-warning">Pending</span></td>
                                        </tr>
                                        <tr>
                                            <td>657</td>
                                            <td>Bob Doe</td>
                                            <td>11-7-2014</td>
                                            <td>$50.000,00</td>
                                            <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
                                            <td><span class="tag tag-primary">Approved</span></td>
                                        </tr>
                                        <tr>
                                            <td>175</td>
                                            <td>Mike Doe</td>
                                            <td>11-7-2014</td>
                                            <td>$50.000,00</td>
                                            <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
                                            <td><span class="tag tag-danger">Denied</span></td>
                                        </tr>
                                        <tr>
                                            <td>134</td>
                                            <td>Jim Doe</td>
                                            <td>11-7-2014</td>
                                            <td>$50.000,00</td>
                                            <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
                                            <td><span class="tag tag-success">Approved</span></td>
                                        </tr>
                                        <tr>
                                            <td>494</td>
                                            <td>Victoria Doe</td>
                                            <td>11-7-2014</td>
                                            <td>$50.000,00</td>
                                            <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
                                            <td><span class="tag tag-warning">Pending</span></td>
                                        </tr>
                                        <tr>
                                            <td>832</td>
                                            <td>Michael Doe</td>
                                            <td>11-7-2014</td>
                                            <td>$50.000,00</td>
                                            <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
                                            <td><span class="tag tag-primary">Approved</span></td>
                                        </tr>
                                        <tr>
                                            <td>982</td>
                                            <td>Rocky Doe</td>
                                            <td>11-7-2014</td>
                                            <td>$50.000,00</td>
                                            <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
                                            <td><span class="tag tag-danger">Denied</span></td>
                                        </tr>
                                        </tbody>
                                    </table>
                                    </div>
                                    <!-- /.card-body -->
                                </div>
                                <!-- /.card -->
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 col-1">
                        </div>
                    </div>     
               
                </div><!-- /.container-fluid -->
            </section>
            <!-- /.content Main content-->
