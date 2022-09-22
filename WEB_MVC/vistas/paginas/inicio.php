<?php
    if(!isset($_SESSION["validarIngreso"])){

        echo '<script>window.location= "index.php?pagina=ingreso";</script>';

            return;
    }else{
        if($_SESSION["validarIngreso"]!= "ok") {

            echo '<script>window.location= "index.php?pagina=ingreso";</script>';

            return;
        }
    }

$usuarios = ControladorFormularios::ctrSeleccionarRegistros(null,null);
        ControladorFormularios::ctrSeleccionarRegistros(null,null);
        

?>
<div class="table-responsive" >
    <table class="table" background="https://img.freepik.com/foto-gratis/resumen-superficie-texturas-muro-piedra-hormigon-blanco_74190-8189.jpg?size=626&ext=jpg" >

        <thead>
            <tr>
                <th>#</th>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Tipo de Documento</th>
                <th>Documento</th>
                <th>Lugar de nacimiento</th>
                <th>Fecha de nacimiento</th>
                <th>Telefono</th>
                <th>Email</th>
                <th>Usuario</th>
                <th>Contrañesa</th>
                <th>Acciones</th>
            </tr>
        </thead>

        <tbody >
            <?php foreach($usuarios as $key=> $value): ?>
                <tr>
                    <td><?php echo $value["id"]; ?></td>
                    <td><?php echo $value["nombre"]; ?></td>
                    <td><?php echo $value["apellido"]; ?></td>
                    <td><?php echo $value["tipodocumento"]; ?></td>
                    <td><?php echo $value["documento"]; ?></td>
                    <td><?php echo $value["lugarnacimiento"]; ?></td>
                    <td><?php echo $value["fechanacimiento"]; ?></td>
                    <td><?php echo $value["telefono"]; ?></td>
                    <td><?php echo $value["email"]; ?></td>
                    <td><?php echo $value["user"]; ?></td>
                    <td><?php echo $value["pwd"]; ?></td>
                    <td>

                    <div class="btn-group">
                        <div class="px-1">
                            <a href="index.php?pagina=editar&id=<?php echo $value ["id"]; ?>" class="btn btn-success"> <i class="fas fa-pencil-alt"></i></a>
                        </div>

                            <form method="post">
                                <input type="hidden" value="<?php echo $value["id"]; ?>" name="eliminarRegistro" >                       
                                <button type="submit" class="btn btn-danger"> <i class="fas fa-trash-alt"></i></button>

                                <?php 
                                    $eliminar = new ControladorFormularios();
                                    $eliminar -> ctrEliminarRegistro();
                                ?>
                            </form>
                    </div>

                    </td>

                </tr>
            <?php endforeach ?>
            
        </tbody>
    </table>
</div>