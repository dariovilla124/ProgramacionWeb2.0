<?php

require_once"conexion.php";

class ModeloFormularios{

    /**
     * registro
     */

    static public function mdlRegistro($tabla,$datos){

        #statement = declaracion
        $stmt = Conexion::conectar()-> prepare("INSERT INTO $tabla(nombre,apellido,tipodocumento,documento,lugarnacimiento,fechanacimiento,telefono,email,user,pwd) 
        values(:nombre,:apellido,:tipodocumento,:documento,:lugarnacimiento,:fechanacimiento,:telefono,:email,:user,:pwd)");

        $stmt->bindParam(":nombre",$datos["nombre"], PDO::PARAM_STR);
        $stmt->bindParam(":apellido",$datos["apellido"], PDO::PARAM_STR);
        $stmt->bindParam(":tipodocumento",$datos["tipodocumento"], PDO::PARAM_STR);
        $stmt->bindParam(":documento",$datos["documento"], PDO::PARAM_STR);
        $stmt->bindParam(":lugarnacimiento",$datos["lugarnacimiento"], PDO::PARAM_STR);
        $stmt->bindParam(":fechanacimiento",$datos["fechanacimiento"], PDO::PARAM_STR);
        $stmt->bindParam(":telefono",$datos["telefono"], PDO::PARAM_STR);
        $stmt->bindParam(":email",$datos["email"], PDO::PARAM_STR);
        $stmt->bindParam(":user",$datos["user"], PDO::PARAM_STR);
        $stmt->bindParam(":pwd",$datos["pwd"], PDO::PARAM_STR);

        if($stmt->execute()){
            return "ok";
        }
        else{
            print_r(Conexion::conectar()->errorInfo());
        }

        $stmt->close();
        $stmt =null;
    }

    /**
     * SELECIONAR REGISTROs
     */
    static public function mdlSeleccionarRegistro($tabla,$item,$valor){

        if($item == null && $valor == null){
            
            $stmt = Conexion::conectar()-> prepare("SELECT * FROM $tabla ORDER BY id ASC");
        
            $stmt->execute();

            return $stmt -> fetchAll();

        }else{

            $stmt = Conexion::conectar()-> prepare("SELECT * FROM $tabla WHERE $item = :$item ORDER BY id ASC");

            $stmt->bindParam(":".$item,$valor, PDO::PARAM_STR);
        
            $stmt->execute();

            return $stmt -> fetch();

        }
        

        $stmt->close();

        $stmt =null;
    }

    /**
     * actualizar
     */

    static public function mdlActualizarRegistro($tabla,$datos){

        #statement = declaracion
        $stmt = Conexion::conectar()-> prepare("UPDATE $tabla SET nombre=:nombre,apellido=:apellido,tipodocumento=:tipodocumento,documento=:documento,lugarnacimiento=:lugarnacimiento,fechanacimiento=:fechanacimiento,telefono=:telefono,email=:email,user=:user,pwd=:pwd WHERE id=:id");

        $stmt->bindParam(":nombre",$datos["nombre"], PDO::PARAM_STR);
        $stmt->bindParam(":apellido",$datos["apellido"], PDO::PARAM_STR);
        $stmt->bindParam(":tipodocumento",$datos["tipodocumento"], PDO::PARAM_STR);
        $stmt->bindParam(":documento",$datos["documento"], PDO::PARAM_STR);
        $stmt->bindParam(":lugarnacimiento",$datos["lugarnacimiento"], PDO::PARAM_STR);
        $stmt->bindParam(":fechanacimiento",$datos["fechanacimiento"], PDO::PARAM_STR);
        $stmt->bindParam(":telefono",$datos["telefono"], PDO::PARAM_STR);
        $stmt->bindParam(":email",$datos["email"], PDO::PARAM_STR);
        $stmt->bindParam(":user",$datos["user"], PDO::PARAM_STR);
        $stmt->bindParam(":pwd",$datos["pwd"], PDO::PARAM_STR);
        $stmt->bindParam(":id",$datos["id"], PDO::PARAM_INT);

        if($stmt->execute()){
            return "ok";
        }
        else{
            print_r(Conexion::conectar()->errorInfo());
        }

        $stmt->close();
        $stmt =null;
    }

    /**
     * eliminar
     */

    static public function mdlEliminarRegistro($tabla,$valor){

        #statement = declaracion
        $stmt = Conexion::conectar()-> prepare("DELETE FROM $tabla WHERE id=:id");

        $stmt->bindParam(":id",$valor, PDO::PARAM_INT);

        if($stmt->execute()){
            return "ok";
        }
        else{
            print_r(Conexion::conectar()->errorInfo());
        }

        $stmt->close();
        $stmt =null;
    }
}