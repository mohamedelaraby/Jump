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

    // Prepare statement with query
    public function query($sqlStatement){
        $this->stmt = $this->dbh->prepare($sqlStatement); 
    }


    // Bind Values to the sql statement
    public function bind($paramter,$variable,$data_type = null){
        // Check for the type of the variable
        if(is_null($data_type)){
            switch(true){
                case is_int($variable):
                    $data_type = PDO::PARAM_INT;
                    break;
                case is_bool($variable):
                    $data_type = PDO::PARAM_BOOL;
                    break;    
                case is_null($variable):
                    $data_type = PDO::PARAM_NULL;
                    break;
                default:
                    $data_type = PDO::PARAM_STR;
                     
            }
        }

        //Bind the values
        $this->stmt->bindValue($paramter,$variable,$data_type);
    }


    // Execute the prepared statement
    public function execute(){
        return $this->stmt->execute();
    }

    // Get Mutli Record as array of objects
    public function resultSet(){
        // execute the statement
        $this->execute();
        // Get the resultset
        return $this->stmt->fetchAll();
    }

    // Get  single record as an object
    public function singleResultSet(){
        $this->execute();
        return $this->stmt->fetch();
    }

    // Get row count
    public function rowCount(){
        return $this->stmt->rowCount();
    }
 }


?>