<?php 
require_once  $_SERVER['DOCUMENT_ROOT']."/reserva-horario-aula/libs/app.php";
$page = "aulas"; 
$pageForm = "'$page'"; 
$campos = [ "Numero",
            "Bloque",
            "Descripción"];
?>

            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0"><?php  echo strtoupper($page);  ?></h1>
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
                                    <h3 class="card-title">Captura de <?php  echo ucwords($page); ?></h3>
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
                                        <?php 
                                            $campo = $campos[0];
                                            $campo_ = formatCode($campo) ;
                                        ?>
                                        <!-- Text input <?php echo $campo  ?>-->
                                        <div class="form-group">
                                            <label class="control-label col-md-10" for="<?php echo $campo_  ?>">
                                                <?php echo $campo  ?>
                                            </label>  
                                            <div class="col-md-10">
                                                <input  id="<?php echo $campo_  ?>" 
                                                        name="<?php echo $campo_  ?>" 
                                                        placeholder="<?php echo $campo  ?>" 
                                                        type="number" 
                                                        class="form-control input-md" 
                                                        min="1" 
                                                        max="999"
                                                        required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <?php 
                                            $campo = $campos[1];
                                            $campo_ = formatCode($campo) ;
                                        ?>
                                        <!-- Text input <?php echo $campo  ?>-->
                                        <div class="form-group">
                                            <label class="control-label col-md-10" for="<?php echo $campo_  ?>">
                                                <?php echo $campo  ?>
                                            </label>  
                                            <div class="col-md-10">
                                                <select   id="<?php echo $campo_  ?>" 
                                                        name="<?php echo $campo_  ?>" 
                                                        placeholder="<?php echo $campo  ?>" 
                                                        type="text" 
                                                        class="form-control input-md select2" required>
                                                    <option value="A">A</option>
                                                    <option value="B">B</option>
                                                    <option value="C">C</option>
                                                    <option value="D">D</option>
                                                    <option value="E">E</option>
                                                    <option value="F">F</option>
                                                    <option value="G">G</option>
                                                    <option value="H">H</option>
                                                    <option value="I">I</option>
                                                    <option value="J">J</option>
                                                    <option value="k">k</option>
                                                    <option value="L">L</option>
                                                    <option value="M">M</option>
                                                    <option value="N">N</option>
                                                    <option value="O">O</option>
                                                    <option value="P">P</option>
                                                    <option value="Q">Q</option>
                                                    <option value="R">R</option>
                                                    <option value="S">S</option>
                                                    <option value="T">T</option>
                                                    <option value="U">U</option>
                                                    <option value="V">V</option>
                                                    <option value="W">W</option>
                                                    <option value="X">X</option>
                                                    <option value="Y">Y</option>
                                                    <option value="Z">Z</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <?php 
                                            $campo = $campos[2];
                                            $campo_ = formatCode($campo) ;
                                        ?>
                                        <!-- Text input <?php echo $campo  ?>-->
                                        <div class="form-group">
                                            <label class="control-label col-md-10" for="<?php echo $campo_  ?>">
                                                <?php echo $campo  ?>
                                            </label>  
                                            <div class="col-md-10">
                                                <input  id="<?php echo $campo_  ?>" 
                                                        name="<?php echo $campo_  ?>" 
                                                        placeholder="<?php echo $campo  ?>" 
                                                        type="text" 
                                                        class="form-control input-md" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        
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
                                            <th>Id</th>
                                            <?php  
                                                foreach($campos as $campo){
                                                    echo "<th>".$campo."</th>";
                                                }
                                            ?>
                                            <th>Acciones</th>
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
            <!-- Scripts de pagina-->
            <script>
                $('.select2').select2();
            </script>
