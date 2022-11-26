<?php 
$page = "Aulas"; 
$pageForm = "'aulas'"; 
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
                    <!-- Formulario de Ingreso de Información -->
                    <div class="row">
                        <div class="col-lg-2 col-1">
                        </div>
                        <div class="col-lg-8 col-10">
                            <!-- general form elements -->
                            <div class="card card-primary ">
                                <div class="card-header " >
                                    <h3 class="card-title">Captura de <?php  echo $page; ?></h3>
                                </div>
                                <!-- /.card-header -->
                                <!-- form start -->
                                <form class="form-horizontal " id="Formulario">
                                <div class="row">
                                    <div class="col-md-12">
                                        <br>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <!-- Text input numero-->
                                        <div class="form-group">
                                            <label class="control-label col-md-10" for="numero">numero</label>  
                                            <div class="col-md-10">
                                                <input id="numero" name="numero" required type="text" placeholder="numero" class="form-control input-md" >
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <!-- Text input-->
                                        <div class="form-group">
                                            <label class="control-label col-md-5" for="bloque">Bloque</label>  
                                            <div class="col-md-10">
                                                <input id="bloque" name="bloque" required type="text" placeholder="bloque" class="form-control input-md">  
                                            </div>
                                        </div>   
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                            <!-- Text input-->
                                        <div class="form-group">
                                            <label class="col-md-10 control-label" for="correo">Correo</label>  
                                            <div class="col-md-10">
                                                <input id="correo" name="correo" required type="email"  placeholder="Correo" class="form-control input-md" required="" type="email">
                                            </div>
                                        </div>
                                        </div>
                                    <div class="col-md-6">
                                        <!-- Text input-->
                                        <div class="form-group">
                                            <label class="col-md-10 control-label" for="telefono">Teléfono</label>  
                                            <div class="col-md-10">
                                                <input id="telefono" required name="telefono" type="text" placeholder="Teléfono" class="form-control input-md" required="">
                                            </div>
                                        </div> 
                                    </div>
                                </div>
                                <div class="row">
                                <div class="col-md-6">
                                        <!-- Button (Double) -->
                                        <div class="form-group">
                                            <label class="col-md-10 control-label" for="guardar"></label>
                                            <div class="col-md-8">
                                                <button id="guardar" type="button"  OnClick="saveForm(<?php  echo $pageForm; ?>)"  name="guardar" class="btn btn-primary">Guardar</button>
                                                <button id="limpiar" name="limpiar" class="btn btn-info" type="reset">Limpiar</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
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
                                    <table id="tabla" class="table table-head-fixed text-nowrap">
                                        <thead>
                                        <tr>
                                            <th>id</th>
                                            <th>Numero</th>
                                            <th>Bloque</th>
                                            <th>Descripción</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                            
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
            <!-- Scripts  pra el Docente-->
            <script>
               // let  ruta;
                //page = 'aulas';
               // ruta = obtenerRuta(page);
               // $(document).ready(function(){
               // listTabla(page);     
               // }); 

            </script>
