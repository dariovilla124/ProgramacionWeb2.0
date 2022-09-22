<?php

class ControladorFormularios{
    /**
     * REGISTRO
     */
    static public function ctrRegistro(){

        if(isset($_POST["nombre"])){

            $tabla = "persona";

            $datos = array("nombre" => $_POST["nombre"],
                            "apellido" => $_POST["apellido"],
                            "tipodocumento" => $_POST["tipodocumento"],
                            "documento" => $_POST["documento"],
                            "lugarnacimiento" => $_POST["lugarnacimiento"],
                            "fechanacimiento" => $_POST["fechanacimiento"],
                            "telefono" => $_POST["telefono"],
                            "email" => $_POST["email"],
                            "user" => $_POST["user"],
                            "pwd" => $_POST["pwd"]);
            $respuesta = ModeloFormularios::mdlRegistro($tabla,$datos);

            return $respuesta;
            /*return "ok";*/
            
            /**echo $_POST["nombre"]."<br>".$_POST["apellido"]."<br>".$_POST["tipodocumento"]."<br>",$_POST["documento"]."<br>".$_POST[""]."<br>".$_POST["lugarnacimiento"]."<br>".$_POST["fechanacimiento"]."<br>".$_POST["telefono"]."<br>".$_POST["email"]."<br>".$_POST["user"]."<br>".$_POST["pwd"];*/

        }
    }

    /**
     * SELECCIONAR REGISTROS
     */

    static public function ctrSeleccionarRegistros($item,$valor){

        $tabla="persona";

        $respuesta = ModeloFormularios::mdlSeleccionarRegistro($tabla,$item,$valor);

        return $respuesta;
    }
    /**
     * ingreso
     */

    public function ctrIngreso(){
        if(isset($_POST["ingresoemail"])){

            $tabla="persona";
            $item="email";
            $valor=$_POST["ingresoemail"];    
            $respuesta = ModeloFormularios::mdlSeleccionarRegistro($tabla,$item,$valor);

            if($respuesta["email"] == $_POST["ingresoemail"] && $respuesta["pwd"] == $_POST["ingresopwd"]){

                $_SESSION["validarIngreso"] = "ok";

                echo'<script>

                    if(window.history.replaceState ) {
                        window.history.replaceState ( null, null, window.location.href );
                    }

                    window.location= "index.php?pagina=inicio";
                </script>';
            }
            else{

                echo'<script>

                    if(window.history.replaceState ) {
                        window.history.replaceState ( null, null, window.location.href );
                    }
                </script>';

                echo '<div class="alert alert-danger"> No coinciden los datos</div>';
            }

        }


    } 

    /**
     * actualizar registro
     */
        static public function ctrActualizarRegistro(){

            if(isset($_POST["actnombre"])){

                if($_POST["actpwd"] != ""){
                    $password = $_POST["actpwd"];
                }else{
                    $password= $_POST["pwd"];
                }

                $tabla = "persona";

                $datos = array( "id" => $_POST["idusuario"],
                                "nombre" => $_POST["actnombre"],
                                "apellido" => $_POST["actapellido"],
                                "tipodocumento" => $_POST["acttipodocumento"],
                                "documento" => $_POST["actdocumento"],
                                "lugarnacimiento" => $_POST["actlugarnacimiento"],
                                "fechanacimiento" => $_POST["actfechanacimiento"],
                                "telefono" => $_POST["acttelefono"],
                                "email" => $_POST["actemail"],
                                "user" => $_POST["actuser"],
                                "pwd" => $password);
                $respuesta = ModeloFormularios::mdlActualizarRegistro($tabla,$datos);

                

                return $respuesta;
        }
    }

    /**
     * Eliminar
     */

    public function ctrEliminarRegistro(){

        if(isset($_POST["eliminarRegistro"])){

            $tabla= "persona";
            $valor=$_POST["eliminarRegistro"];

            $respuesta = ModeloFormularios::mdlEliminarRegistro($tabla,$valor);

            if( $respuesta == "ok") {
                echo'<script>

                    if(window.history.replaceState ) {
                        window.history.replaceState ( null, null,null, null, null, null,null, null,null, null,window.location.href );
                    }

                    window.location= "index.php?pagina=inicio";
                </script>';
            }
        }
    }
}