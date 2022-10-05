<?php 
 $page = "Reservas"; 
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
                                <legend>Eventos</legend>

                                <!-- Select Basic -->
                                <div class="form-group">
                                <label class="col-md-4 control-label" for="horario">Horario</label>
                                <div class="col-md-4">
                                    <select id="horario" name="horario" class="form-control">
                                    <option value="1">8:00 - 8:59</option>
                                    <option value="2">9:00 - 9:59</option>
                                    <option value="3">10:00 - 10:59</option>
                                    <option value="4">11:00 - 11:59</option>
                                    <option value="5">12:00 - 12:59</option>
                                    <option value="6">13:00 - 13:59</option>
                                    <option value="7">14:00 - 14:59</option>
                                    <option value="8">15:00 - 15:59</option>
                                    <option value="9">16:00 - 15:59</option>
                                    <option value="10">17:00 - 17:59</option>
                                    <option value="11">18:00 - 18:59</option>
                                    </select>
                                </div>
                                </div>

                                <!-- Select Basic -->
                                <div class="form-group">
                                <label class="col-md-4 control-label" for="aula">Aula</label>
                                <div class="col-md-4">
                                    <select id="aula" name="aula" class="form-control">
                                    <option value="1">Aula 1</option>
                                    <option value="2">Aula 2</option>
                                    <option value="3">Aula 3</option>
                                    <option value="4">Aula 4</option>
                                    <option value="5">Aula 5</option>
                                    <option value="6">Aula 6</option>
                                    </select>
                                </div>
                                </div>

                                <!-- Text input-->
                                <div class="form-group">
                                <label class="col-md-4 control-label" for="docente">Docente</label>  
                                <div class="col-md-4">
                                <input id="docente" name="docente" type="text" placeholder="Docente" class="form-control input-md" required="">
                                <span class="help-block">Docente</span>  
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
