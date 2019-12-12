<?php  
/** [ INFO ]:-
 * PDO Database class
 * Connect to database
 * Create prepared statements
 * Bind values
 * Return rows and  results
 */

 class Database {
    private $host = DB_HOST;
    private $user = DB_USER;
    private $pass = DB_PASS;
    private $db_name = DB_NAME;

    private $dbh; // for prepared statement;
    private $stmt;
    private $error;

    public function __construct(){
        // Set DSN
        $dsn = 'mysql:host='.$this->host .';dbname='.$this->db_name;
        $options = array(
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ,
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_PERSISTENT => true,
            PDO::ATTR_EMULATE_PREPARES => true   
        );

        // Create PDO instance
        try{
            $this->dbh = new PDO($dsn, $this->user,$this->pass,$options);
        } catch (PDOException $e){
            $this->error = $e->getMessage();
            die("reload you page".$this->error);
            
        }
    }
 }


?>