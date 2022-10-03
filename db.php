<?php
/** Clase para manejar base de datos, usando PDO.
 * 
 * @author Joaquin Bocanegra <joaquinbocanegra@email.com>
 * @link https://github.com/JoaquinBocanegra/
 * @version 1.0.0
 * @copyright 2022 Curso programador de aplicaciones web.
 * 
 */
class Db
{
private $connection;
/** Establecer una conexión.
 * 
 * @return connection.
 */
public function __construct()
{
    try{

    $dsn = "mysql:dbname=" . DATABASE_NAME . ";host=" . SERVER_NAME;
    $this->connection = new PDO($dsn, USER_NAME, PASSWORD);
    return $this->connection;
    }
    catch(PDOException $e){
        die('Conexión fallida ');
    }
    return $this->connection;
}
/** Preparar una query SQL.
 * 
 * @return object
 */
public function prepare($query){
    return $this->connection->prepare($query);

}
/** Ejecutar una SQL query.
 * 
 *
 * @param string $query.
 * @return object 
 */
public function query($query){
    return $this->connection->query($query);
}
/** Cerrar la conexión.
 * 
 * @return mixed
 */
public function close(){
    $this->connection=null;
}
}

?>