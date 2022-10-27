<?php
  namespace database;

  //include the database connection class;
   include "connection.php";

   use database\connection;
   use Exception;
use mysqli;

   /**
    * database connection manager 
    *
    */
   class manager {
        
    /**
     * hold the database connection instance
     * 
     * @var object
     */
    private  $connection = null;

    /**
     * the last error
     * 
     * @var false|string
     */

     private $last_error = false;

     /**
      * set if prepared statement should be used for the
      * current database transaction 
      *
      */

      private $is_prepared = true;

     /**
      * prepared statement
      *
      */

      private $stmt = null;

      /**
       * the result of the transaction
       * 
       */
      private $result = null;

     public function __construct()
     {

   try {
     $this->connection = connection::get_instance('localhost' , 'root' , '' , 'shopflix_database')->get_connection();

   } catch(Exception $e){
        echo $e->getMessage();
      }
       $this->prepare("select * from product_variant where ?")->bind([true]);
     
      }

   private function get_db_last_error()
   {
       return $this->connection->error;
   }
   
   /**
    * rollback the database transaction 
    *
    */
   public function rollback(){
    $this->connection->rollback();
    return $this;
   }
  
   /**
    *  commit the database transaction
    *
    */
    public function commit(){
      $this->connection->commit();
      return $this;
    }

    /**
     * disable the use of prepared statement
     * 
     */

     public function disable_prepared_statement(){
      $this->is_prepared = false;
      return $this;
     }

    /**
     * enable the use of prepared statement
     * 
     */

    public function enable_prepared_statement(){
      $this->is_prepared = true;
      return $this;
     }
   
     /**
      * prepare a statement
      *
      */

     private function prepare($sql){
      $this->stmt = $this->connection->prepare($sql);
      return $this;
     }

     /**
      * 
      * binds a prepared statement
      *
      */

     private function bind($params)
     {
        if(is_array($params) && (count($params) < 1)){
          throw new Exception('can not bind empty params');
        }
        $variables = str_repeat('s' , count($params));
        $this->stmt->bind_param($variables , ...$params);
     }

     /**
      *  executes a prepared statement
      *
      */

      private function exec_prepared_statement()
      {
            $this->stmt->execute();
            $this->result = $this->stmt->get_result();
      }

     /**
      * runs a sql query against the database without using 
      * prepared statement
      *
      * @param string $sql
      */
     private function query($sql)
     {
           $this->result = $this->connection->query($sql);
     }

     /**
      * get the whole result as an associative array
      * 
      */
      private function fetch_all_as_assoc_array()
      {
          return $this->result->fetch_all(MYSQLI_ASSOC);
      }
      /**
       * get the whole result as a number array
       * 
       */
      private function fetch_all_as_num_array()
      {
        return $this->result->fecth_all(MYSQLI_NUM);
      }

      /**
       * fetches a single row as an associative array
       * 
       */

       private function fecth_one()
       {
        return $this->result->fetch_assoc();
       }
       /**
        * get the number of rows
        *
        */

        private function get_number_of_result()
        {
          return $this->result->num_rows;
        }

        /**
         * close both the prepared statement and
         * database connection
         */
        private function close()
        {
          $this->stmt->close();
          $this->connection->close();
        }
        /**
         * execute an sql query
         * 
         */

         private function execute_query(string $sql , $params)
         {
            if(!$this->is_prepared)
            {
              $this->query($sql);
            }
            else
             {
               $this->prepare($sql);
               if(!is_null($params)){
               if(!is_array($params)){ $params = [$params]; }
                 $this->bind($params);
               }
               $this->exec_prepared_statement();
            }
         }

         /**
          * execute a select statement against the database
          * and return all the rows
          * @param string $sql
          * @param string|array|int $param
          * @param bool $is_assoc specify if the result should be fethed as
          * an associative array, default is true
          * @return array returns all the rows as an array
          */

          public function select(string $sql , $params = null , bool $is_assoc = true)
          {
             $this->execute_query($sql , $params);
             if($is_assoc){
             $result = $this->fetch_all_as_assoc_array(); 
             } else {
              $result = $this->fetch_all_as_num_array();
             }
             $this->close();
             return $result;
          }
        
          /**
          * execute a select statement against the database and
          * return a single row as an associative array
          *
          * @param string $sql
          * @param string|array|int $param
          * an associative array, default is true
          */

          public function scalar(string $sql , $params = null)
          {
             $this->execute_query($sql , $params);
               $result = $this->fecth_one(); 
             $this->close();
             return $result;
          }

          /**
          * execute an update statement against the database
          *
          * @param string $sql
          * @param string|array|int $param
          */

          public function update(string $sql , $params = null)
          {
             $this->execute_query($sql , $params);
             $this->close();
          }
          /**
          * execute a delete statement against the database
          *
          * @param string $sql
          * @param string|array|int $param
          */

          public function delete(string $sql , $params = null)
          {
             $this->execute_query($sql , $params);
             $this->close();
          }


 }
   

 
 ?>