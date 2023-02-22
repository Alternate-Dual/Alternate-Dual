<?php 
 class Database{

    private $host;
    private $db;
    //private $port;
    private $user;
    private $password;
    private $charset;

    public function __construct(){
        $this->host = 'localhost:3307';
        $this->db = 'nutrifit';
        //$this->port = '3306';
        $this->user = 'root';
        $this->password = '';
        $this->charset = 'utf8mb4';

    }
    
    function connect(){
        try{
            $connection = "mysql:host=" . $this->host . ";dbname=" . $this->db . ";charset=" . $this->charset;
            $options = [
                PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_EMULATE_PREPARES   => false,
            ];
            
            $pdo = new PDO($connection, $this->user, $this->password, $options);
    
            return $pdo;
        }catch(PDOException $e){
            print_r('Error connection: ' . $e->getMessage());
        }
    }

 }

?>