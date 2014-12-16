<?php
 	class Connexion{
		//localhost
		const HOST = "localhost";
		const BASE_DE_DONNEE = "renaissanceds";
		const USERNAME = "root";
		const PASSWORD = "root"; 
		
		//ovh
		/*
const HOST = "renaissanceds.mysql.db";
		const BASE_DE_DONNEE = "renaissanceds";
		const USERNAME = "renaissanceds";
		const PASSWORD = "26RenaSen69"; 
*/
		
		
		public static $DSN = "";
		public static $connection = null;
		public static $table = "";
		public static $errors = array();
		public static $options = array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8');
		
		public static function getConnection(){
            try{
            	self::$errors = array();
            	
               	if (is_null(self::$connection)){
	            	self::$DSN = 'mysql:host='.self::HOST.';dbname='.self::BASE_DE_DONNEE;
	            	self::$connection = new PDO(self::$DSN, self::USERNAME, self::PASSWORD, self::$options);
            	}
            }catch(exception $e){
                self::$errors[] = sprintf("Erreur : %s\r\n
                                            Fichier : %s\r\n
                                            Ligne : %s", $e->getMessage(), $e->getFile(), $e->getLine()
                				);
            }
            
            return self::$connection;
		}
		
		public static function hasErrors(){
			return count(self::$errors);
		}
		
		public static function getErrors(){
			return self::$errors;
		}
		
		public static function addError($error){
			self::$errors[] = $error;
		}
		
		/**
		 * D�finie la table � utiliser
		 * @param unknown_type $table
		 */
		public static function setTable($table){
			self::$table = $table;
		}
		
		public static function getTable($table){
			self::$table = $table;
		}
		
		
		/**
		 * Mysql select
		 * @param string $table				exemple: "Commentaires"
		 * @param string $where				exemple: "IdCommentaire = 2"
		 * @param string $colonnes			exemple: "ContenuCommentaire"
		 * @param string $tables_jointes	exemple: array("News", "Auteur")
		 * */
		// SELECT * FROM Commentaires c, news n WHERE c.id_com = n.id_new
		//public function select ($table, $where = "", $colonnes = "*", $tables_jointes = array())
		/**
		 * Mysql select
		 * @param string $query	La requ�te
		 * @return array Les lignes trouv�es
		 */
		public static function select($query){
			$lignes = array();
			
			if (self::hasErrors()) return $lignes;			
			
			$query = self::getConnection()->prepare($query);
			
			if (!$query->execute()) return $lignes;
			
			while ($ligne = $query->fetch(PDO::FETCH_ASSOC)){
				$lignes[] = $ligne;
			}
			
			return $lignes;
		}
		
		/**
		 * Mysql Insert
		 * @param query La requ�te
		 * @return boolean true ou false
		 */
		public static function insert($query){
			if (self::hasErrors()) return false;
			
			$query = self::getConnection()->prepare($query);
			
			return $query->execute();
		}
		
		/**
		 * Mysql Update
		 * @param query La requ�te
		 * @return int Le nombre de lignes ins�r�es
		 */
		public static function update($query){
			if (self::hasErrors()) return false;
				
			$query = self::getConnection()->prepare($query);
			
			return $query->execute();
		}
		
		/**
		 * Mysql Delete
		 * @param query La requ�te
		 * @return int Le nombre de lignes supprim�es
		 */
		public static function delete($query){
			if (self::hasErrors()) return false;
			
			return self::getConnection()->exec($query);
		}
		
		public function __toString()
		{
			$chaine = "***----CONNEXION----***";
			$chaine.= "<\br> Host : ".self::HOST;
			$chaine.= "<\br> Base de donn�e : ".self::BASE_DE_DONNEE;
			$chaine.= "<\br> Username : ".self::USERNAME;
			$chaine.= "Password : ".self::PASSWORD;
			
			return $chaine;
		}
		
		
        
		//Creer ici toutes les fonction sql classique, standart, chaque fonction peux retourner un element ou une liste d'élément en fonction d'un id passé en paramettre
        //Vous avez besoin d'une requete on peux la mettre ici a 90%
		
		public function pdoErrotMYSQL($debug_msg) {
            $title = "MYSQL PDO ERROR";
            echo '<h2>MCH Error !</h2>
            <hr>
            <h5>Type : '.$title.'</h5>
            <p>Message : &ldquo;'.mysql_error().'&rdquo;</p>
            <p>Debug : &ldquo;'.$debug_msg.'&rdquo;</p>';
        }
        
        public function pdo_sql_array_all($sql) {
            //global $dbh;
            $sth = $dbh->prepare($sql);
            $sth->execute();
            $result = $sth->fetchAll();
            return $result;
        }
        
        public function pdo_sql_array_assoc($sql) {
            //global $dbh;
            $sth = $dbh->prepare($sql);
            $sth->execute();
            $rows = $sth->fetchAll(PDO::FETCH_ASSOC);
            return $rows;
        }
        
        public function pdo_sql_array_col($sql,$col) {
            //global $dbh;
            $sth = $dbh->prepare($sql);
            $sth->execute();
            $result = $sth->fetchAll(PDO::FETCH_COLUMN, $col);
            return $result;
        }
		
        public function pdo_sql_objet($sql) {
            global $dbh;
            $sth = $dbh->prepare($sql);
            $sth->execute();
            $result = $sth->fetchAll(PDO::FETCH_OBJ);
            return $result;
        }
        
        public function pdo_sql_nbRow($sql) {
            
            $nb_lignes = 0;
			
			if (self::hasErrors()) return $nb_lignes;			
			
			$query = self::getConnection()->prepare($query);
			
			if (!$query->execute()) return $nb_lignes;
			
			$nb_lignes = $query->rowCount();
			
			return $nb_lignes;
            
            
           
        }
	}
