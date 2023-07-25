<?php
include_once "conexion.php";
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proyecto</title>
</head>
<body>
<div style=" background: hsla(0, 0%, 60%, 0.497);   " class="container mt-4 border p-2">
<!-- ========== Start header ========== -->
    <header>
        <div class="row justify-content-center align-items-center g-2 mt-2">
            <h1 class="text-center fw-bold">Concesionario</h1>
        </div>
    </header>
<!-- ========== End header ========== -->
<!-- ========== Start manu ========== -->
    <menu>
        <div class="row justify-content-center align-items-center g-2">
            <div class="col">
                <div class="row g-2 m-3">
                <!-- ========== Start modal buscar ========== -->
                <!-- Button trigger modal -->
                    <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#Buscar">
                    Buscar
                    </button>

                    <!-- Modal -->
                    <div class="modal fade" id="Buscar" tabindex="-1" aria-labelledby="Buscar" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="Buscar">Buscar por ID</h5>
                                <button type="number" class="btn-close" data-bs-dismiss="modal" aria-label="Close" required></button>
                            </div>
                            <!-- ========== Start formulario ========== -->
                            <form action="" method="post">
                                <div class="modal-body">
                                    <h5 class="modal-title mb-2" id="Buscar">Busca en toda la base de datos</h5>
                                    <input class="form-control" type="number" name="buscar" required>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cerrar</button>
                                    <button type="submit" class="btn btn-success" data-bs-dismiss="modal">Buscar</button>
                                </div>
                            </form>
                            <!-- ========== End formulario ========== -->
                        </div>
                    </div>
                    </div>
                <!-- ========== End modal ========== -->
                </div>
            </div>
            <div class="col">
                <!-- ========== Start modal crear ========== -->
                <!-- Button trigger modal -->
                <div class="row g-2 m-3">
                    <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#Crear">
                    Crear
                    </button>

                    <!-- Modal -->
                    <div class="modal fade" id="Crear" tabindex="-1" aria-labelledby="Crear" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="Crear">Crear Vehiculo O Datos</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                            <!-- ========== Start form ========== -->
                                <form action="" method="post">
                                    <div class="modal-body">
                                        <select class="form-select" name="crear">
                                            <option value="Vehiculo y Documentos">Vehiculo y Documentos</option>
                                            <option value="Vehiculo">Vehiculo</option>
                                            <option value="Documentos">Documentos</option>
                                        </select>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cerrar</button>
                                        <button type="submit" class="btn btn-success">Crear</button>
                                    </div>
                                </form>
                        <!-- ========== End form ========== -->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ========== End modal crear ========== -->
            </div>
            <div class="col">
                <!-- ========== Start modal editar ========== -->
                <div class="row g-2 m-3">
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#Editar">
                    Editar
                    </button>

                    <!-- Modal -->
                    <div class="modal fade" id="Editar" tabindex="-1" aria-labelledby="Editar" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="Editar">Editar datos</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <form action="" method="post">
                                    <div class="modal-body">
                                        <h4>Para editar los datos o documentos pofavor introduce la ID</h4>
                                        <input class="form-control" type="number" name="editar" required>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cerrar</button>
                                        <button type="submit" class="btn btn-success">Editar</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ========== End modal editar ========== -->
            </div>
            <div class="col">
                <!-- Button trigger modal -->
                <div class="row g-2 m-3">
                    <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#Eliminar">
                    Eliminar
                    </button>

                    <!-- Modal -->
                    <div class="modal fade" id="Eliminar" tabindex="-1" aria-labelledby="Eliminar" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="Eliminar">Eliminar</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <form action="" method="post">
                                    <div class="modal-body">
                                        <h4>Se eliminara de forma permanente, si desea continuar digita el numero de ID y Eliminar datos</h4>
                                        <input class="form-control" type="number" name="eliminar" required>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cerrar</button>
                                        <button type="submit" class="btn btn-success">Eliminar datos</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
<!-- ========== Start backend ========== --> 
        <?php
            //<!-- ========== Start backend eliminar ========== -->
            if(isset($_POST['eliminar_vehiculo_documento'])){
                //crea variables
                $id_vinculacion = $_POST['id_vincualacion'];
                $id_vehiculo = $_POST['id_vehiculo'];
                $id_documento = $_POST['id_documento'];
                $consulta17 = "DELETE FROM vehiculos_documentos WHERE Id = '$id_vinculacion'";
                $execute17 = mysqli_query($conn, $consulta17);

                if($execute17 = true){
                    $consulta18 = "DELETE FROM vehiculos WHERE Id = '$id_vehiculo'";
                    $execute18 = mysqli_query($conn, $consulta18);
                    if($execute18 = true){
                        $consulta19 = "DELETE FROM documentos WHERE Id = '$id_documento'";
                        $execute19 = mysqli_query($conn, $consulta19);

                        ?>
                            <div class="alert alert-success text-center" role="alert">
                                <strong>Se ha Eliminado el vehiculo y los documentos</strong>
                                <p>Se ha eliminado permanentemente el vehiculo y los documentos a la base de datos</p>
                            </div>
                        <?php
                    }else{
                        ?>
                        <div class="alert alert-danger text-center" role="alert">
                            <strong>No se Encuentra el ID</strong>
                            <p>Porfavor corrige el ID o intenta mas tarde</p>
                        </div>
                    <?php
                    }
                }else{
                    ?>
                        <div class="alert alert-danger text-center" role="alert">
                            <strong>No se Encuentra el ID</strong>
                            <p>Porfavor corrige el ID o intenta mas tarde</p>
                        </div>
                    <?php
                }
            }
            //<!-- ========== End backend eliminar ========== -->
            if(isset($_POST["registrarvd"])){
                //creamos variables
                $tipo_documento = $_POST["tipo_documento_seleccionado"];
                $descripcion = $_POST["descripcion_documento"];
                $placa = $_POST["placa"];
                $marca = $_POST["marca"];
                $modelo = $_POST["modelo"];
                $color = $_POST["color"];
                $Nchasis = $_POST["Nchasis"];
                $Nmotor = $_POST["Nmotor"];
                $capacidad = $_POST["capacidad"];
                $Nmatricula = $_POST["Nmatricula"];
                $fecha_expedicion = $_POST["expedicion"];
                $fecha_vencimiento = $_POST["vencimiento"];
                $compania = $_POST["compania"];
                //creamos codigo sql
                $consulta5 = "INSERT INTO vehiculos (Placa, Marca, Modelo, Color, NroChasis, NroMotor, Capacidad, NroMatricula) VALUES ('$placa', '$marca', '$modelo', '$color', '$Nchasis', '$Nmotor', '$capacidad', '$Nmatricula')";
                $execute5 = mysqli_query($conn, $consulta5);

                if($execute5 = true){
                    $idvehiculo = mysqli_insert_id($conn);
                    $consulta6 = "INSERT INTO documentos (Descripcion, Documentos) VALUES ('$descripcion', '$tipo_documento')";
                    $execute6 = mysqli_query($conn, $consulta6);

                    if ($execute6 = true){
                        $iddocuemnto = mysqli_insert_id($conn);
                        $idvehiculo;
                        $consulta7 = "INSERT INTO vehiculos_documentos (Id_vehiculo, Id_documento, Fecha_expedicion, Fecha_vencimiento, Compañia) VALUES ('$idvehiculo', '$iddocuemnto', '$fecha_expedicion', '$fecha_vencimiento', '$compania')";
                        $execute7 = mysqli_query($conn, $consulta7);
                        if($execute7 = true){
                            ?>
                                <div class="alert alert-success text-center" role="alert">
                                    <strong>Se ha agregado el vehiculo y los documentos</strong>
                                    <p>Se ha agregado el vehiculo y los documentos a la base de datos</p>
                                </div>
                            <?php
                        }
                    }
                }
            }
            //<!-- ========== Start Buscar ========== -->
            if(isset($_POST["buscar"])){
                //<!-- ========== Start ingresar ID ========== -->
                if(empty($_POST["buscar"])){
                    ?>
                    <div class="alert alert-danger text-center" role="alert">
                        <strong>No se selecciono ID</strong>
                        <p>Porfavor digita un ID para buscar en la base de datos</p>
                    </div>
                    <?php
                }else{
                    $id = $_POST["buscar"];
                    //<!-- ========== Start buscar por vehiculo ========== -->
                    $consulta1 = "SELECT * FROM vehiculos WHERE id = '$id'";
                    $execute1 = mysqli_query($conn, $consulta1);
                    //<!-- ========== Start resultado ========== -->
                    if (mysqli_num_rows($execute1) < 1){
                    ?>
                        <div class="alert alert-danger text-center" role="alert">
                            <strong>No se Encuentra el ID del vehiculo</strong>
                            <p>Porfavor corrige el ID o intenta mas tarde</p>
                        </div>
                    <?php
                    }else{
                        //<!-- ========== Start agregamos los datos a variables ========== -->
                        $row=$execute1->fetch_array(MYSQLI_ASSOC);
                        $placa = $row["Placa"];
                        $marca = $row["Marca"];
                        $modelo = $row["Modelo"];
                        $color = $row["Color"];
                        $Nro_Chasis = $row["NroChasis"];
                        $Nro_Motor = $row["NroMotor"];
                        $capacidad = $row["Capacidad"];
                        $Nro_Matricula = $row["NroMatricula"];
                        //<!-- ========== End agregamos los datos a variables ========== -->
                    
                    //<!-- ========== End resultado ========== -->
                    ?>
                    <!-- ========== Start visualizar datos ========== -->
                        <div class="row border p-2 mb-4">
                            <div class="row text-center mb-2">
                                <h2>Numero de ID del vehiculo: <?php echo $id?></h2>
                            </div>
                            <div class="col-md-6">
                                <!-- ========== Start placas ========== -->
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" id="placas" placeholder="Placa del vehiculo" value="<?php echo $placa?>" disabled>
                                    <label for="placas">Placa del vehiculo</label>
                                </div>
                                <!-- ========== End placas ========== -->
                                <!-- ========== Start marca ========== -->
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" id="marca" placeholder="Marca del vehiculo" value="<?php echo $marca?>" disabled>
                                    <label for="marcas">Marca del vehiculo</label>
                                </div>
                                <!-- ========== End marca ========== -->
                                <!-- ========== Start modelo ========== -->
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" id="modelo" placeholder="Modelo del vehiculo" value="<?php echo $modelo?>" disabled>
                                    <label for="modelo">Modelo del vehiculo</label>
                                </div>
                                <!-- ========== End modelo ========== -->
                                <!-- ========== Start color ========== -->
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" id="color" placeholder="Color del vehiculo" value="<?php echo $color?>" disabled>
                                    <label for="color">Color del vehiculo</label>
                                </div>
                                <!-- ========== End color ========== -->
                            </div>
                            <div class="col-md-6">
                                <!-- ========== Start N chasis ========== -->
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" id="Nchasis" placeholder="Numero del chasis del vehiculo" value="<?php echo $Nro_Chasis?>" disabled>
                                    <label for="Nchasis">Numero del chasis del vehiculo</label>
                                </div>
                                <!-- ========== End N chasis ========== -->
                                <!-- ========== Start N motor ========== -->
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" id="Nmotor" placeholder="Numero del motor del vehiculo" value="<?php echo $Nro_Motor?>" disabled>
                                    <label for="Nmotor">Numero del motor del vehiculo</label>
                                </div>
                                <!-- ========== End N motor ========== -->
                                <!-- ========== Start capacidad ========== -->
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" id="capacidad" placeholder="Capacidad del vehiculo" value="<?php echo $capacidad?>" disabled>
                                    <label for="capacidad">capacidad del vehiculo</label>
                                </div>
                                <!-- ========== End capacidad ========== -->
                                <!-- ========== Start N matricula ========== -->
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" id="matricula" placeholder="Matricula del vehiculo" value="<?php echo $Nro_Matricula?>" disabled>
                                    <label for="matricula">Matricula del vehiculo</label>
                                </div>
                                <!-- ========== End N matricula ========== -->
                            </div>
                        </div>
                    <?php
                    }
                    //<!-- ========== End visualizar datos ========== -->
                    //<!-- ========== End buscar por vehiculo ========== -->
                    //<!-- ========== Start buscar por documento ========== -->
                    $consulta2 = "SELECT * FROM documentos WHERE Id = $id";
                    $execute2 = mysqli_query($conn, $consulta2);
                    if (mysqli_num_rows($execute2) < 1){
                        ?>
                            <div class="alert alert-danger text-center" role="alert">
                                <strong>No se Encuentra el ID del Documento</strong>
                                <p>Porfavor corrige el ID o intenta mas tarde</p>
                            </div>
                        <?php
                        }else{
                            $row2=$execute2->fetch_array(MYSQLI_ASSOC);
                            $descripcion = $row2["Descripcion"];
                            $documento = $row2["Documentos"];
                            ?>
                                <div class="row border p-2">
                                    <div class="row text-center mb-2">
                                        <h2>Numero de ID del documento: <?php echo $id?></h2>
                                    </div>
                                    <!-- ========== Start tipo documento ========== -->
                                    <div class="form-floating mb-3">
                                        <input type="text" class="form-control" id="documento" placeholder="Tipo de documento" value="<?php echo $documento?>" disabled>
                                        <label class="ps-4" for="documento">Numero del motor del vehiculo</label>
                                    </div>
                                    <!-- ========== End tipo documento ========== -->
                                    <!-- ========== Start descripcion del documento ========== -->
                                    <div class="form-floating mb-3">
                                        <textarea class="form-control" placeholder="Descripcion del documento" id="floatingTextarea" disabled><?php echo $descripcion?></textarea>
                                        <label class="ps-4" for="floatingTextarea">Descripcion</label>
                                    </div>
                                    <!-- ========== End descripcion del documento ========== -->
                                </div>
                            <?php
                            $consulta0 = "SELECT * FROM vehiculos_documentos WHERE Id = $id";
                            $execute0 = mysqli_query($conn, $consulta0);
                            if(mysqli_num_rows($execute0) < 1){
                                ?>
                                    <div class="alert alert-danger text-center" role="alert">
                                        <strong>No se Encuentra el ID del vehiculo y Documento</strong>
                                        <p>Porfavor corrige el ID o intenta mas tarde</p>
                                    </div>
                                <?php
                            }else{
                                //creamos variables
                                $row0=$execute0->fetch_array(MYSQLI_ASSOC);
                                $id_vehiculo = $row0['Id_vehiculo'];
                                $id_documento = $row0['Id_documento'];
                                $fecha_expedicion = $row0['Fecha_expedicion'];
                                $fecha_vencimiento = $row0['Fecha_vencimiento'];
                                $compania = $row0['Compañia'];
                                ?>
                                    <div class="row mt-4 border">
                                        <div class="row text-center mb-2">
                                            <h2>Numero de ID de la vinculacion: <?php echo $id?></h2>
                                        </div>
                                        <div class="col">
                                            <div class="form-floating mb-3">
                                                <input class="form-control" type="number" placeholder="Id del vehiculo" id="id_vehiculo" value="<?php echo $id_vehiculo?>" disabled>
                                                <label for="id_vehiculo" id="">Id del vehiculo</label>
                                            </div>
                                            <div class="form-floating mb-3">
                                                <input class="form-control" type="number" placeholder="Id del docuemento" id="id_documento" value="<?php echo $id_documento?>" disabled>
                                                <label for="id_documento" id="">Id del documento</label>
                                            </div>
                                            <div class="form-floating mb-3">
                                                <input class="form-control" type="date" placeholder="fecha_expedicion" id="fecha_expedicion" value="<?php echo $fecha_expedicion?>" disabled>
                                                <label for="fecha_expedicion" id="">Fecha de expedicion</label>
                                            </div>
                                            <div class="form-floating mb-3">
                                                <input class="form-control" type="date" placeholder="fecha_vencimiento" id="fecha_vencimiento" value="<?php echo $fecha_vencimiento?>" disabled>
                                                <label for="fecha_vencimiento" id="">Fecha de vencimiento</label>
                                            </div>
                                            <div class="form-floating mb-3">
                                                <input class="form-control" type="text" placeholder="compañia" id="compania" value="<?php echo $compania?>" disabled>
                                                <label for="compania" id="">Compañia</label>
                                            </div>
                                        </div>
                                    </div>
                                <?php
                            }
                        }
                    //<!-- ========== End buscar por documento ========== -->
                }
                //<!-- ========== End ingresar ID ========== -->
            };
            //<!-- ========== End buscar ========== -->
            //<!-- ========== Start crear ========== -->
            //<!-- ========== Start backend crear ========== -->
            if(isset($_POST["submit"])){
                //creamos variables
                $tipo_documento = $_POST["tipo_documento_seleccionado"];
                $descripcion = $_POST["descripcion_documento"];
                //creamos consulta
                $consulta3 = "INSERT INTO documentos (Descripcion, Documentos) VALUES ('$descripcion', '$tipo_documento')";
                $execute3 = mysqli_query($conn, $consulta3);

                if($execute3 = true){
                    ?>
                        <div class="alert alert-success text-center" role="alert">
                            <h4 class="alert-heading">Se registro su documento</h4>
                            <p>Se ha registrado su documento correctamente en la base de datos</p>
                            <hr>
                        </div>
                    <?php
                }
            }
            //<!-- ========== End backend crear ========== -->
            //<!-- ========== Start backend editar ========== -->
                if(isset($_POST['editar_vehiculo_documento'])){
                    //creamos variables
                    $placa = $_POST['placa'];
                    $marca = $_POST['marca'];
                    $modelo = $_POST['modelo'];
                    $color = $_POST['color'];
                    $chasis = $_POST['chasis'];
                    $motor = $_POST['motor'];
                    $capacidad = $_POST['capacidad'];
                    $matricula = $_POST['matricula'];
                    $documento = $_POST['documento'];
                    $descripcion = $_POST['descripcion'];
                    $id_vinculacion = $_POST['id_vincualacion'];
                    $id_vehiculo = $_POST['id_vehiculo'];
                    $id_documento = $_POST['id_documento'];
                    $fecha_expedicion = $_POST['fecha_expedicion'];
                    $fecha_vencimiento = $_POST['fecha_vencimiento'];
                    $compania = $_POST['compania'];
                $consulta11 = "UPDATE vehiculos SET Placa = '$placa', Marca = '$marca', Modelo = '$modelo', Color = '$color', NroChasis = '$chasis', NroMotor = '$motor', Capacidad = '$capacidad', NroMatricula = '$matricula' WHERE Id = '$id_vehiculo'";
                $execute11 = mysqli_query($conn, $consulta11);

                if ($execute11 = true){
                        $consulta12 = "UPDATE documentos SET Descripcion = '$descripcion', Documentos = '$documento' WHERE Id = '$id_documento'";
                        $execute12 = mysqli_query($conn, $consulta12);
                        if ($execute12 = true){
                            $consulta13 = "UPDATE vehiculos_documentos SET Fecha_expedicion = '$fecha_expedicion', Fecha_vencimiento = '$fecha_vencimiento', Compañia = '$compania' WHERE Id = '$id_vinculacion'";
                            $execute13 = mysqli_query($conn, $consulta13);
                            if($execute13 = true){
                        ?>
                            <div class="alert alert-success text-center" role="alert">
                                <h4 class="alert-heading">Se edito Correctamente</h4>
                                <p>Se ha editado sus datos correctamente en la base de datos</p>
                                <hr>
                            </div>
                        <?php
                        }else{
                        ?>
                            <div class="alert alert-danger text-center" role="alert">
                                <strong>No se pudo editar los datos</strong>
                                <p>Porfavor corrige los datos o intenta mas tarde</p>
                            </div>
                        <?php
                        }
                    }else{
                        ?>
                            <div class="alert alert-danger text-center" role="alert">
                                <strong>No se pudo editar los datos</strong>
                                <p>Porfavor corrige los datos o intenta mas tarde</p>
                            </div>
                        <?php
                    }
                }else{
                    ?>
                        <div class="alert alert-danger text-center" role="alert">
                            <strong>No se pudo editar los datos</strong>
                            <p>Porfavor corrige los datos o intenta mas tarde</p>
                        </div>
                    <?php
                }
            }
            //<!-- ========== End backend editar ========== -->
            //<!-- ========== Start creamos el backend de la creacion del vehiculo ========== -->
                if(isset($_POST["registrar"])){
                    //creamos las variables
                    $placa = $_POST["placa"];
                    $marca = $_POST["marca"];
                    $modelo = $_POST["modelo"];
                    $color = $_POST["color"];
                    $Nchasis = $_POST["Nchasis"];
                    $Nmotor = $_POST["Nmotor"];
                    $capacidad = $_POST["capacidad"];
                    $Nmatricula = $_POST["Nmatricula"];
                    //creamos consulta
                    $consulta4 = "INSERT INTO vehiculos (Placa, Marca, Modelo, Color, NroChasis, NroMotor, Capacidad, NroMatricula) VALUES ('$placa','$marca','$modelo','$color','$Nchasis','$Nmotor','$capacidad','$Nmatricula')";
                    $execute4 = mysqli_query($conn, $consulta4);

                    if ($execute4 = true){
                        ?>
                            <div class="alert alert-success text-center" role="alert">
                                <h4 class="alert-heading">Se registro su vehiculo</h4>
                                <p>Se ha registrado su vehiculo correctamente en la base de datos</p>
                                <hr>
                            </div>
                        <?php
                    }
                }
                
            //<!-- ========== End creamos el backend de la creacion del vehiculo ========== -->
            if(!empty($_POST["crear"])){
                echo "<div class='row text-center mt-3'><h1>Crear ". $_POST["crear"]. "</h1></div>";
                if($_POST["crear"] == "Documentos"){
                    //<!-- ========== Start crear docuementos ========== -->
                    ?>
                    <div class="row border p-2">
                        <form action="" method="post">
                            <label class="form-label" for="documento">Tipo de documento</label>
                            <select class="form-select" name="tipo_documento_seleccionado" id="documento">
                                <option value="soat">SOAT</option>
                                <option value="tecnomecanica">TECNOMECANICA</option>
                                <option value="seguro">SEGURO</option>
                            </select>
                            <label class="form-label" for="descripcion">Descripcion</label>
                            <textarea class="form-control mb-2" name="descripcion_documento" placeholder="Describe tu documento" id="descripcion" required></textarea>
                            <button name="submit" type="submit" class="btn btn-success">Registrar</button>
                        </form>
                    </div>
                    <?php
                    //<!-- ========== End crear docuemntos ========== -->
                    
                }elseif($_POST["crear"] == "Vehiculo"){
                    ?>
                    <div class="row">
                        <form method="post">
                            <div class="row p-2">
                                <!-- ========== Start primera seccion izquierda ========== -->
                                <div class="col-md-6 ">
                                    <label for="placa" class="form-label">Placa del vehiculo</label>
                                    <input class="form-control" type="text" id="placa" name="placa">
                                    <label for="marca" class="form-label">Marca</label>
                                    <input type="text" name="marca" id="marca" class="form-control">
                                    <label for="modelo" class="form-label">Modelo</label>
                                    <input type="number" name="modelo" id="modelo" class="form-control">
                                    <label for="color" class="form-label">Color</label>
                                    <input type="text" name="color" id="color" class="form-control">
                                </div>
                                <!-- ========== End primera seccion izquierda ========== -->
                                <div class="col-md-6">
                                    <label class="form-label" for="chasis">Numero de chasis del vehiculo</label>
                                    <input class="form-control" type="text" id="chasis" name="Nchasis">
                                    <label for="motor" class="form-label">Numero de motor del vehiculo</label>
                                    <input type="text" name="Nmotor" id="motor" class="form-control">
                                    <label for="capacidad" class="form-label">Capacidad del vehiculo</label>
                                    <input type="number" name="capacidad" id="capacidad" class="form-control">
                                    <label for="matricula" class="form-label">Numero de matricula del vehiculo</label>
                                    <input type="text" name="Nmatricula" id="matricula" class="form-control">
                                </div>
                            </div>
                            <button class="btn btn-success" name="registrar" type="submit">Registrar</button>
                        </form>
                    </div>
                    <?php
                }elseif($_POST["crear"] == "Vehiculo y Documentos"){
                    ?>
                    <!-- ========== form vehiculo y documento ========== -->
                    <div class="row">
                        <form method="post">
                            <div class="row p-2">
                                <div class="col-md-12">
                                    <!-- ========== Start formaulario de docuemntos ========== -->
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label class="form-label" for="documento">Tipo de documento</label>
                                            <select class="form-select" name="tipo_documento_seleccionado" id="documento">
                                                <option value="soat">SOAT</option>
                                                <option value="tecnomecanica">TECNOMECANICA</option>
                                                <option value="seguro">SEGURO</option>
                                            </select>
                                        </div>
                                        <div class="col-md-6">
                                            <label class="form-label" for="descripcion">Descripcion</label>
                                            <textarea class="form-control mb-2" name="descripcion_documento" placeholder="Describe tu documento" id="descripcion" required></textarea>
                                        </div>
                                    </div>
                                    <!-- ========== End formaulario de docuemntos ========== -->
                                </div>
                                <!-- ========== Start formulario de vehiculo ========== -->
                                <div class="col-md-6 ">
                                    <label for="placa" class="form-label">Placa del vehiculo</label>
                                    <input class="form-control" type="text" id="placa" name="placa">
                                    <label for="marca" class="form-label">Marca</label>
                                    <input type="text" name="marca" id="marca" class="form-control">
                                    <label for="modelo" class="form-label">Modelo</label>
                                    <input type="number" name="modelo" id="modelo" class="form-control">
                                    <label for="color" class="form-label">Color</label>
                                    <input type="text" name="color" id="color" class="form-control">
                                    <label for="expedicion" class="form-label">Expedicion</label>
                                    <input type="date" class="form-control" name="expedicion" id="expedicion">
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label" for="chasis">Numero de chasis del vehiculo</label>
                                    <input class="form-control" type="text" id="Nchasis" name="Nchasis">
                                    <label for="motor" class="form-label">Numero de motor del vehiculo</label>
                                    <input type="text" name="Nmotor" id="Nmotor" class="form-control">
                                    <label for="capacidad" class="form-label">Capacidad del vehiculo</label>
                                    <input type="number" name="capacidad" id="capacidad" class="form-control">
                                    <label for="matricula" class="form-label">Numero de matricula del vehiculo</label>
                                    <input type="text" name="Nmatricula" id="Nmatricula" class="form-control">
                                    <label for="vencimiento" class="form-label">Vencimiento</label>
                                    <input type="date" class="form-control" name="vencimiento" id="vencimiento">
                                    <label for="compania" class="form-label">Compañia</label>
                                    <input type="text" name="compania" id="compania" class="form-control">
                                </div>
                                <!-- ========== End formulario de vehiculo ========== -->
                            </div>
                            <button class="btn btn-success" name="registrarvd" type="submit">Registrar datos</button>
                        </form>
                    </div>
                    <?php
                }
            };
            //<!-- ========== End crear ========== -->
            //<!-- ========== Start editar ========== -->
            if(isset($_POST["editar"])){
                $id = $_POST["editar"];
                //<!-- ==========  consulta sql datos del vehiculo ========== -->
                $consulta8 = "SELECT * FROM vehiculos WHERE id = '$id'";
                $execute8 = mysqli_query($conn, $consulta8);
                //<!-- ========== mostrar resultado ========== -->
                if (mysqli_num_rows($execute8) < 1) {
                    ?>
                    <div class="alert alert-danger text-center" role="alert">
                        <strong>No se Encuentra el ID del vehiculo</strong>
                        <p>Porfavor corrige el ID o intenta mas tarde</p>
                    </div>
                    <?php
                    } else {
                        //<!-- ==========  agregamos los datos a variables ========== -->
                        $row8 = $execute8->fetch_array(MYSQLI_ASSOC);
                        $placa = $row8["Placa"];
                        $marca = $row8["Marca"];
                        $modelo = $row8["Modelo"];
                        $color = $row8["Color"];
                        $Nro_Chasis = $row8["NroChasis"];
                        $Nro_Motor = $row8["NroMotor"];
                        $capacidad = $row8["Capacidad"];
                        $Nro_Matricula = $row8["NroMatricula"];
                        //<!-- ========== End agregamos los datos a variables ========== -->

                        //<!-- ========== fin resultado ========== -->
                    ?>
                        <!-- ========== mostrar datos ========== -->
                        <div class="row border p-2 mb-4">
                            <div class="row text-center mb-2">
                                <h2>Numero de ID del vehiculo: <?php echo $id ?></h2>
                            </div>
                            <div class="col-md-6">
                                <form action="" method="post">
                                    <!-- ==========  placas ========== -->
                                    <div class="form-floating mb-3">
                                        <input type="text" class="form-control" name="placa" id="placas" placeholder="Placa del vehiculo" value="<?php echo $placa ?>">
                                        <label for="placas">Placa del vehiculo</label>
                                    </div>
                                    <!-- ========== fin placas ========== -->
                                    <!-- ==========  marca ========== -->
                                    <div class="form-floating mb-3">
                                        <input type="text" name="marca" class="form-control" id="marca" placeholder="Marca del vehiculo" value="<?php echo $marca ?>">
                                        <label for="marcas">Marca del vehiculo</label>
                                    </div>
                                    <!-- ========== fin marca ========== -->
                                    <!-- ==========  modelo ========== -->
                                    <div class="form-floating mb-3">
                                        <input type="number" name="modelo" class="form-control" id="modelo" placeholder="Modelo del vehiculo" value="<?php echo $modelo ?>">
                                        <label for="modelo">Modelo del vehiculo</label>
                                    </div>
                                    <!-- ========== fin modelo ========== -->
                                    <!-- ==========  color ========== -->
                                    <div class="form-floating mb-3">
                                        <input type="text" name="color" class="form-control" id="color" placeholder="Color del vehiculo" value="<?php echo $color ?>">
                                        <label for="color">Color del vehiculo</label>
                                    </div>
                                    <!-- ========== fin color ========== -->
                            </div>
                            <div class="col-md-6">
                                <!-- ==========  Numero chasis ========== -->
                                <div class="form-floating mb-3">
                                    <input type="text" name="chasis" class="form-control" id="Nchasis" placeholder="Numero del chasis del vehiculo" value="<?php echo $Nro_Chasis ?>">
                                    <label for="Nchasis">Numero del chasis del vehiculo</label>
                                </div>
                                <!-- ========== fin Numero chasis ========== -->
                                <!-- ==========  Numero motor ========== -->
                                <div class="form-floating mb-3">
                                    <input type="text" name="motor" class="form-control" id="Nmotor" placeholder="Numero del motor del vehiculo" value="<?php echo $Nro_Motor ?>">
                                    <label for="Nmotor">Numero del motor del vehiculo</label>
                                </div>
                                <!-- ========== fin Numero motor ========== -->
                                <!-- ==========  capacidad ========== -->
                                <div class="form-floating mb-3">
                                    <input type="text" name="capacidad" class="form-control" id="capacidad" placeholder="Capacidad del vehiculo" value="<?php echo $capacidad ?>">
                                    <label for="capacidad">capacidad del vehiculo</label>
                                </div>
                                <!-- ========== fin capacidad ========== -->
                                <!-- ==========  Numero matricula ========== -->
                                <div class="form-floating mb-3">
                                    <input type="text" name="matricula" class="form-control" id="matricula" placeholder="Matricula del vehiculo" value="<?php echo $Nro_Matricula ?>">
                                    <label for="matricula">Matricula del vehiculo</label>
                                </div>
                                <!-- ========== fin Numero matricula ========== -->
                            </div>
                        </div>
                    <?php
                    }
                        //<!-- ========== fin visualizar datos ========== -->
                        //<!-- ========== fin buscar por vehiculo ========== -->
                        //<!-- ========== iniciamos a buscar por documento ========== -->
                        $consulta9 = "SELECT * FROM documentos WHERE Id = $id";
                        $execute9 = mysqli_query($conn, $consulta9);
                        if (mysqli_num_rows($execute9) < 1) {
                        ?>
                            <div class="alert alert-danger text-center" role="alert">
                                <strong>No se Encuentra el ID del Documento</strong>
                                <p>Porfavor corrige el ID o intenta mas tarde</p>
                            </div>
                        <?php
                        } else {
                            $row9 = $execute9->fetch_array(MYSQLI_ASSOC);
                            $descripcion = $row9["Descripcion"];
                            $documento = $row9["Documentos"];
                        ?>
                            <div class="row border p-2">
                                <div class="row text-center mb-2">
                                    <h2>Numero de ID del documento: <?php echo $id ?></h2>
                                </div>
                                <!-- ========== mostrar tipo documento ========== -->
                                <div class="form-floating mb-3">
                                    <select class="form-select" name="documento" id="documento">
                                        <option value="<?php echo $documento ?>" class="text-uppercase" disabled><?php echo $documento ?></option>
                                        <option value="soat" class="text-uppercase">SOAT</option>
                                        <option value="tecnomecanica">TECNOMECANICA</option>
                                        <option value="seguro">SEGURO</option>
                                    </select>
                                    <label class="ps-4" for="documento">Tipo de documento</label>
                                </div>
                                <!-- ========== fin mostrar tipo documento ========== -->
                                <!-- ========== inicio mostrando descripcion del documento ========== -->
                                <div class="form-floating mb-3">
                                    <textarea class="form-control" name="descripcion" placeholder="Descripcion del documento" id="descripcion"><?php echo $descripcion ?></textarea>
                                    <label class="ps-4" for="descripcion">Descripcion</label>
                                </div>
                                <!-- ========== fin de descripcion del documento ========== -->


                                <!-- ========== Boton para formulario de editar ========== -->
                                <!-- <button type="button" class="btn btn-primary waves-effect waves-light" data-bs-toggle="modal" data-bs-target="#editarvd">Editar vehiculo y documento</button> -->
                            </div>
                        <?php
                        }
                        //<!-- ========== fin buscar por documento ========== -->

                        $consulta10 = "SELECT * FROM vehiculos_documentos WHERE Id = $id";
                        $execute10  = mysqli_query($conn, $consulta10);
                        if (mysqli_num_rows($execute10) < 1) {
                        ?>
                            <div class="alert alert-danger text-center" role="alert">
                                <strong>No se Encuentra el ID del vehiculo y documento</strong>
                                <p>Porfavor corrige el ID o intenta mas tarde</p>
                            </div>
                        <?php
                        } else {
                            $row10 = $execute10->fetch_array(MYSQLI_ASSOC);
                            $Id = $row10["Id"];
                            $Id_vehiculo = $row10["Id_vehiculo"];
                            $Id_documento = $row10["Id_documento"];
                            $fecha_expedicion = $row10["Fecha_expedicion"];
                            $fecha_vencimiento = $row10["Fecha_vencimiento"];
                            $compania = $row10["Compañia"];
                        ?>
                            <div class="row border p-2 mt-4">
                                <div class="row text-center mb-2">
                                    <h2>Numero de ID del vehiculo y documento: <?php echo $id ?></h2>
                                </div>

                                <!-- ========== mostrar id ========== -->
                                <div class="row">
                                    <div class="col">
                                        <div class="col">
                                            <label class="ps-4" for="Id">Id vinculacion</label>
                                            <input type="number" class="form-control" name="id_vincualacion" id="ids" placeholder="Id" value="<?php echo $Id?>" min="<?php echo $Id?>" max="<?php echo $Id?>">
                                        </div>
                                        <!-- ========== fin mostrar id ========== -->
                                        <!-- ========== mostrar id_vehiculo========== -->
                                        <div class="col">
                                            <label class="ps-4" for="id_vehiculo">Id del vehiculo</label>
                                            <input type="number" class="form-control" name="id_vehiculo" id="id_vehiculo" placeholder="Id vehiculo" value="<?php echo $Id_vehiculo ?>" min="<?php echo $Id_vehiculo?>" max="<?php echo $Id_vehiculo?>">
                                        </div>
                                        <!-- ========== fin mostrar id_vehiculo ========== -->
                                        <!-- ========== inicio mostrando id_documento ========== -->
                                        <div class="col">
                                            <label class="ps-4" for="Id_documento">Id del documento</label>
                                            <input type="number" class="form-control" name="id_documento" placeholder="Id del documento" id="Id_documento" value="<?php echo $Id_documento ?>" min="<?php echo $Id_documento?>" max="<?php echo $Id_documento?>">
                                        </div>
                                        <!-- ========== fin id_documento ========== -->
                                        <!-- ========== inicio mostrando fecha_expedicion ========== -->
                                        <div class="col">
                                            <label class="ps-4" for="fecha_expedicion">Fecha expedicion</label>
                                            <input type="date" class="form-control" name="fecha_expedicion" id="fecha_expedicion" placeholder="fecha expedicion" value="<?php echo $fecha_expedicion ?>" >
                                        </div>
                                        <!-- ========== fin mostrar fecha_expedicion========== -->
                                        <!-- ========== inicio mostrando fecha_vencimiento ========== -->
                                        <div class="col">
                                            <label class="ps-4" for="fecha_vencimiento">Fecha vencimiento</label>
                                            <input type="date" class="form-control" name="fecha_vencimiento" placeholder="fecha vencimiento" id="fecha_vencimiento" value="<?php echo $fecha_vencimiento ?>" >
                                        </div>
                                        <!-- ========== fin id_documento ========== -->
                                        <div class="col">
                                            <label class="ps-4" for="compania">Compañia</label>
                                            <input type="text" class="form-control" name="compania" id="compania" placeholder="Compañia" value="<?php echo $compania ?>" >
                                        </div>


                                        <!-- ========== fin mostrar compania ========== -->
                                        <!-- ========== Boton para formulario de editar ========== -->
                                        <button style="margin-top: 14px;" type="submit" id="editarvd" name="editar_vehiculo_documento" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#editarvd" value="editarvd">Editar vehiculo y documento</button>
                                    </div>
                                    </form>
                                </div>
                            </div>
                        <?php
                    }
            };
            //<!-- ========== End editar ========== -->
            //<!-- ========== Start eliminar ========== -->
            if(isset($_POST["eliminar"])){
                $id = $_POST["eliminar"];
                //<!-- ==========  consulta sql datos del vehiculo ========== -->
                $consulta14 = "SELECT * FROM vehiculos WHERE id = '$id'";
                $execute14 = mysqli_query($conn, $consulta14);
                //<!-- ========== mostrar resultado ========== -->
                if (mysqli_num_rows($execute14) < 1) {
                    ?>
                    <div class="alert alert-danger text-center" role="alert">
                        <strong>No se Encuentra el ID del vehiculo</strong>
                        <p>Porfavor corrige el ID o intenta mas tarde</p>
                    </div>
                    <?php
                    } else {
                        //<!-- ==========  agregamos los datos a variables ========== -->
                        $row14 = $execute14->fetch_array(MYSQLI_ASSOC);
                        $placa = $row14["Placa"];
                        $marca = $row14["Marca"];
                        $modelo = $row14["Modelo"];
                        $color = $row14["Color"];
                        $Nro_Chasis = $row14["NroChasis"];
                        $Nro_Motor = $row14["NroMotor"];
                        $capacidad = $row14["Capacidad"];
                        $Nro_Matricula = $row14["NroMatricula"];
                        //<!-- ========== End agregamos los datos a variables ========== -->

                        //<!-- ========== fin resultado ========== -->
                    ?>
                        <!-- ========== mostrar datos ========== -->
                        <div class="row border p-2 mb-4">
                            <div class="row text-center mb-2">
                                <h2>Numero de ID del vehiculo: <?php echo $id ?></h2>
                            </div>
                            <div class="col-md-6">
                                <form action="" method="post">
                                    <!-- ==========  placas ========== -->
                                    <div class="form-floating mb-3">
                                        <input type="text" class="form-control" name="placa" id="placas" placeholder="Placa del vehiculo" value="<?php echo $placa ?>">
                                        <label for="placas">Placa del vehiculo</label>
                                    </div>
                                    <!-- ========== fin placas ========== -->
                                    <!-- ==========  marca ========== -->
                                    <div class="form-floating mb-3">
                                        <input type="text" name="marca" class="form-control" id="marca" placeholder="Marca del vehiculo" value="<?php echo $marca ?>">
                                        <label for="marcas">Marca del vehiculo</label>
                                    </div>
                                    <!-- ========== fin marca ========== -->
                                    <!-- ==========  modelo ========== -->
                                    <div class="form-floating mb-3">
                                        <input type="number" name="modelo" class="form-control" id="modelo" placeholder="Modelo del vehiculo" value="<?php echo $modelo ?>">
                                        <label for="modelo">Modelo del vehiculo</label>
                                    </div>
                                    <!-- ========== fin modelo ========== -->
                                    <!-- ==========  color ========== -->
                                    <div class="form-floating mb-3">
                                        <input type="text" name="color" class="form-control" id="color" placeholder="Color del vehiculo" value="<?php echo $color ?>">
                                        <label for="color">Color del vehiculo</label>
                                    </div>
                                    <!-- ========== fin color ========== -->
                            </div>
                            <div class="col-md-6">
                                <!-- ==========  Numero chasis ========== -->
                                <div class="form-floating mb-3">
                                    <input type="text" name="chasis" class="form-control" id="Nchasis" placeholder="Numero del chasis del vehiculo" value="<?php echo $Nro_Chasis ?>">
                                    <label for="Nchasis">Numero del chasis del vehiculo</label>
                                </div>
                                <!-- ========== fin Numero chasis ========== -->
                                <!-- ==========  Numero motor ========== -->
                                <div class="form-floating mb-3">
                                    <input type="text" name="motor" class="form-control" id="Nmotor" placeholder="Numero del motor del vehiculo" value="<?php echo $Nro_Motor ?>">
                                    <label for="Nmotor">Numero del motor del vehiculo</label>
                                </div>
                                <!-- ========== fin Numero motor ========== -->
                                <!-- ==========  capacidad ========== -->
                                <div class="form-floating mb-3">
                                    <input type="text" name="capacidad" class="form-control" id="capacidad" placeholder="Capacidad del vehiculo" value="<?php echo $capacidad ?>">
                                    <label for="capacidad">capacidad del vehiculo</label>
                                </div>
                                <!-- ========== fin capacidad ========== -->
                                <!-- ==========  Numero matricula ========== -->
                                <div class="form-floating mb-3">
                                    <input type="text" name="matricula" class="form-control" id="matricula" placeholder="Matricula del vehiculo" value="<?php echo $Nro_Matricula ?>">
                                    <label for="matricula">Matricula del vehiculo</label>
                                </div>
                                <!-- ========== fin Numero matricula ========== -->
                            </div>
                        </div>
                    <?php
                    }
                        //<!-- ========== fin visualizar datos ========== -->
                        //<!-- ========== fin buscar por vehiculo ========== -->
                        //<!-- ========== iniciamos a buscar por documento ========== -->
                        $consulta15 = "SELECT * FROM documentos WHERE Id = $id";
                        $execute15 = mysqli_query($conn, $consulta15);
                        if (mysqli_num_rows($execute15) < 1) {
                        ?>
                            <div class="alert alert-danger text-center" role="alert">
                                <strong>No se Encuentra el ID del Documento</strong>
                                <p>Porfavor corrige el ID o intenta mas tarde</p>
                            </div>
                        <?php
                        } else {
                            $row15 = $execute15->fetch_array(MYSQLI_ASSOC);
                            $descripcion = $row15["Descripcion"];
                            $documento = $row15["Documentos"];
                        ?>
                            <div class="row border p-2">
                                <div class="row text-center mb-2">
                                    <h2>Numero de ID del documento: <?php echo $id ?></h2>
                                </div>
                                <!-- ========== mostrar tipo documento ========== -->
                                <div class="form-floating mb-3">
                                    <select class="form-select" name="documento" id="documento">
                                        <option value="<?php echo $documento ?>" class="text-uppercase" disabled><?php echo $documento ?></option>
                                        <option value="soat" class="text-uppercase">SOAT</option>
                                        <option value="tecnomecanica">TECNOMECANICA</option>
                                        <option value="seguro">SEGURO</option>
                                    </select>
                                    <label class="ps-4" for="documento">Tipo de documento</label>
                                </div>
                                <!-- ========== fin mostrar tipo documento ========== -->
                                <!-- ========== inicio mostrando descripcion del documento ========== -->
                                <div class="form-floating mb-3">
                                    <textarea class="form-control" name="descripcion" placeholder="Descripcion del documento" id="descripcion"><?php echo $descripcion ?></textarea>
                                    <label class="ps-4" for="descripcion">Descripcion</label>
                                </div>
                                <!-- ========== fin de descripcion del documento ========== -->


                                <!-- ========== Boton para formulario de editar ========== -->
                                <!-- <button type="button" class="btn btn-primary waves-effect waves-light" data-bs-toggle="modal" data-bs-target="#editarvd">Editar vehiculo y documento</button> -->
                            </div>
                        <?php
                        }
                        //<!-- ========== fin buscar por documento ========== -->

                        $consulta16 = "SELECT * FROM vehiculos_documentos WHERE Id = $id";
                        $execute16  = mysqli_query($conn, $consulta16);
                        if (mysqli_num_rows($execute16) < 1) {
                        ?>
                            <div class="alert alert-danger text-center" role="alert">
                                <strong>No se Encuentra el ID del vehiculo y documento</strong>
                                <p>Porfavor corrige el ID o intenta mas tarde</p>
                            </div>
                        <?php
                        } else {
                            $row16 = $execute16->fetch_array(MYSQLI_ASSOC);
                            $Id = $row16["Id"];
                            $Id_vehiculo = $row16["Id_vehiculo"];
                            $Id_documento = $row16["Id_documento"];
                            $fecha_expedicion = $row16["Fecha_expedicion"];
                            $fecha_vencimiento = $row16["Fecha_vencimiento"];
                            $compania = $row16["Compañia"];
                        ?>
                            <div class="row border p-2 mt-4">
                                <div class="row text-center mb-2">
                                    <h2>Numero de ID del vehiculo y documento: <?php echo $id ?></h2>
                                </div>

                                <!-- ========== mostrar id ========== -->
                                <div class="row">
                                    <div class="col">
                                        <div class="col">
                                            <label class="ps-4" for="Id">Id vinculacion</label>
                                            <input type="number" class="form-control" name="id_vincualacion" id="ids" placeholder="Id" value="<?php echo $Id?>" min="<?php echo $Id?>" max="<?php echo $Id?>">
                                        </div>
                                        <!-- ========== fin mostrar id ========== -->
                                        <!-- ========== mostrar id_vehiculo========== -->
                                        <div class="col">
                                            <label class="ps-4" for="id_vehiculo">Id del vehiculo</label>
                                            <input type="number" class="form-control" name="id_vehiculo" id="id_vehiculo" placeholder="Id vehiculo" value="<?php echo $Id_vehiculo ?>" min="<?php echo $Id_vehiculo?>" max="<?php echo $Id_vehiculo?>">
                                        </div>
                                        <!-- ========== fin mostrar id_vehiculo ========== -->
                                        <!-- ========== inicio mostrando id_documento ========== -->
                                        <div class="col">
                                            <label class="ps-4" for="Id_documento">Id del documento</label>
                                            <input type="number" class="form-control" name="id_documento" placeholder="Id del documento" id="Id_documento" value="<?php echo $Id_documento ?>" min="<?php echo $Id_documento?>" max="<?php echo $Id_documento?>">
                                        </div>
                                        <!-- ========== fin id_documento ========== -->
                                        <!-- ========== inicio mostrando fecha_expedicion ========== -->
                                        <div class="col">
                                            <label class="ps-4" for="fecha_expedicion">Fecha expedicion</label>
                                            <input type="date" class="form-control" name="fecha_expedicion" id="fecha_expedicion" placeholder="fecha expedicion" value="<?php echo $fecha_expedicion ?>" >
                                        </div>
                                        <!-- ========== fin mostrar fecha_expedicion========== -->
                                        <!-- ========== inicio mostrando fecha_vencimiento ========== -->
                                        <div class="col">
                                            <label class="ps-4" for="fecha_vencimiento">Fecha vencimiento</label>
                                            <input type="date" class="form-control" name="fecha_vencimiento" placeholder="fecha vencimiento" id="fecha_vencimiento" value="<?php echo $fecha_vencimiento ?>" >
                                        </div>
                                        <!-- ========== fin id_documento ========== -->
                                        <div class="col">
                                            <label class="ps-4" for="compania">Compañia</label>
                                            <input type="text" class="form-control" name="compania" id="compania" placeholder="Compañia" value="<?php echo $compania ?>" >
                                        </div>


                                        <!-- ========== fin mostrar compania ========== -->
                                        <!-- ========== Boton para formulario de editar ========== -->
                                        <button type="submit" id="eliminar" name="eliminar_vehiculo_documento" class="btn btn-danger mt-4" data-bs-toggle="modal" data-bs-target="#editarvd" value="eliminar">Eliminar vehiculo y documento</button>
                                    </div>
                                    </form>
                                </div>
                            </div>
                        <?php
                    }
            }
            //<!-- ========== End eliminar ========== -->
        ?>
<!-- ========== End backend ========== -->
    </menu>
<!-- ========== End manu ========== -->
</div>

<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>