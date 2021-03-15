 <?php 
   /*
 * Este archivo esta echo solo para la conexion
 */

/**
 * En la clase conexion_bd solo esta la conexion a nuestra base de datos en donde tenemos el servidor con una direcion ip 
 *
 * @author Administración
 */
   // coneccion a la base de datos ded enfermero 
   
    $conx=mysqli_connect("localhost","root","","catvirtual"); 
if($conttt=true){
    echo 'coneto';
}else 
    echo 'error';


    
   /* $sesion_logion=true;
$nombre = $_POST["usuario"]; 
$password = $_POST["clave"]; 

// Conectamos con la base de datos y almacenamos la conexión en la variable conexión 
     //mysql_connect("184.154.128.195","fdldbsqx_tulua","+T~W=m%Cu&]Q");
//$res=mysql_db_query("fdldbsqx_base_bienestar","select * from cta");
	//$ar=mysql_fetch_array($res);
	//$nombre=$ar["nombre"];
	///comenzamos a realizar la conexion 
        
           $conexion =mysql_connect("localhost","root","password","bd_tulua");
            if (!$conexion){
                
                echo 'error al conectar con ala base de datos';
            }else{
                echo "se conecto ala base de datos";
            } 
        /// consulta de base de datos 
            $consulta="SELECT * FROM login WHERE  user='$nombre' and password='$password'"; 
           // almaceno el resultado
            $resultado= mysqli_query($conexion,$consulta);
            // recorro el dato
            $fila= mysqli_num_rows($resultado);
            
            if($fila>0)
            {
                header("Location:funciones_login/validacion_login.php");
            } else {
                echo 'ERROR EN LA UTENTICACION';    
            }
            ///
            
 /// inicioamos conexion 
    
 error_reporting(0);
session_start();
$con = new mysqli("localhost", "root", "password", "bd_tulua");
if ($con->connect_errno)
{
       echo "Fallo al conectar a MySQL: (" . $con->connect_errno . ") " . $con->connect_error;
       exit();
}
@mysqli_query($con, "SET NAMES 'utf8'");
if ($_POST['user'] == null || $_POST['pass'] == null)
{
    echo '<span>Por favor complete todos los campos.</span>';
}
else
{
    $user = mysqli_real_escape_string($_POST['user'], $con);
    $pass = mysqli_real_escape_string($_POST['pass'], $con);
    $consulta = mysqli_query($con, "SELECT user, pass FROM login WHERE user = '$user' AND pass = '$pass'");
    if (mysqli_num_rows($consulta) > 0)
    {
        $_SESSION["usuario"] = $user;
        echo '<script>location.href = "welcome.php"</script>';
    }
    else
    {
        echo '<span>El usuario y/o clave son incorrectas, vuelva a intentarlo.</span>';
    }
}
?>
                
        //seleccionamos la base de datos a la que conectarlos, el primer parametro es nuestra BD y el segundo la conexion
 
      
 
?>


</body>
</html>

<?php
   	// conexiones
	
        // INICIAMOS VERIFICACION DE CONEXION ALA BASE DE DATOS 
	//public function MySQL(){
    */   
/* @var $conexion type */
    /**   private $conexion;
      private $servidor="45.56.217.12";
    private $usuario="mipym702";//clave
         private  $contrasena="Estoybien17";
	///comenzamos a realizar la conexion 
        $conexion =mysql_connect($servidor,$usuario,$contraseña);
            if (!$conexion){
                echo 'error al conectar con ala base de datos';
            }else{
                echo "se conecto ala base de datos".$conexion;
            }
        }*/
		//if(!isset($this->conexion)){
		///	$this->conexion=(mysql_connect($this->servidor,$this->clave,$this->contrasena))
		//	or die(mysql_error());
		//	mysql_select_db("mipym702_proteccion",$this->conexion) or die(mysql_error());
		//	}
		//}//
		
//	public function consulta($consulta){
//		$this->total_consultas++;
//		$resultado=mysql_query($consulta,$this->conexion);
//		if(!$resultado){
//			echo 'MySQL error:'.mysql_error();
//			exit;
//			}
//			return $resultado;
  //                      echo 'conextado';
//		}	
		
    //   public function fetch_array($consulta){
	//	   return mysql_fetch_array($consulta);		   
	//	   }
		   
	//	public function fetch_assoc($consulta){
	//	   return mysql_fetch_assoc($consulta);		   
	//	   }
		   
	//	public function num_rows($consulta){
	//		return mysql_num_rows($consulta);			
	//		}
			
	//	public function TotalConsultas(){
        ///return $this->total_consultas; 
//		}
	
//fin de la clase


    
    
    
    
    
?>


