<?php
/*
* -------------------------------------
* 
* Date: 18/04/2019 17:43:39 
* productoModel.php
* -------------------------------------
*/
class productoModel extends Model {
    public function __construct() {
        parent::__construct(); 
        $this->instance = $this->loadObjeto('Producto'); 
    }

    public function findByLike($datos){
        
        $qw = explode(" ", $datos);
        $str = "";
        $i = 1;
        foreach ($qw as $value) {
            if($str!=""){
                $str=$str." AND ";
            }
            //$str = $str." CONCAT(d.codDocente,p.nombre1,COALESCE(p.nombre2,''),p.apellido1,COALESCE(p.apellido2,''),p.cedula) LIKE ?$i ";
            $str = $str." (p.nombre LIKE ?$i) ";
            $i++;
        }
        $sql = "SELECT p FROM Entities\Producto p WHERE ".$str;
        //return $sql;
        
        $query = $this->getEm()->createQuery($sql);
        //$query = $this->getEm()->createQuery("SELECT d FROM Entities\Docente d WHERE d.codDocente LIKE ?1");
        $i=1;
        foreach ($qw as $value) {
            //echo($value);
            $query->setParameter($i, "%{$value}%");
            $i++;
        }
        
        //echo($query->getSQL());
        
        $productos = $query->getResult();
        return $productos;
        
    }
}
?>