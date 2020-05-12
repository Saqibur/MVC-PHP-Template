<?php
    require_once INCLUDES . "classes/DataAccess.php";

    class UserModel {

        /**
         * This is a sample user model.
         * NOTE that this does not work. It is there for demo.
         */

        protected $user_email;
        protected $user_password;
        protected $user_type;
        
        public function __construct(string $user_email, string $user_password) {
            // The constructor and object are required when an existing user is required.
            $this -> setEmail($user_email);
            $this -> setPassword($user_password);
            $this -> setUserType($this -> getTypeFromDB($user_email));
        }

        public function setEmail($user_email) {
            $this -> user_email = $user_email;
        }

        public function setPassword($user_password) {
            $this -> user_password = $user_password;

        }

        public function setUserType($user_type) {
            $this -> user_type = $user_type;
        }

        public function getEmail() {
            return $this -> user_email;
        }

        public function getPassword() {
           return $this -> user_password;

        }

        public function getUserType() {
            return $this -> user_type;
        }

        /**
         * Returns the type of a particular from the user table.
         * @return string user_type
         */
        protected function getTypeFromDB($user_email) {
            $connection = DataAccess::DataBaseConnection();

            $statement = $connection -> prepare("SELECT user_type FROM users WHERE email=?");
            $statement -> bind_param("s", $user_email);
            $statement -> execute();
            $statement -> bind_result($user_type);

            while ($statement->fetch()) {
                $user_type;
            }

            $statement -> close();
            mysqli_close($connection);

            return $user_type;
        }

        /**
         * Validates if a user exists or not by checking against
         * the user table.
         * @return boolean $valid
         */
        public static function CheckIfUserExists(string $user_email) {
            $connection = DataAccess::DataBaseConnection();

            $statement = $connection -> prepare("SELECT COUNT(email) FROM users WHERE email = (?)");
            $statement -> bind_param("s", $user_email);
            $statement -> execute();

            $statement -> store_result();
            // var_dump($statement);
            $statement -> bind_result($count);
            while ($statement -> fetch()) {
                $count;
            }
            
            $statement -> close();
            mysqli_close($connection);

            if ($count == 1) {
                // echo "Valid";
                return true;
            } else {
                // echo "Invalid";
                return false;
            }
        }

        /**
         * Validates if the user credentials are correct or not.
         * @return boolean $valid
         */
        public static function ValidateUser(string $user_email, string $user_password) {
            $connection = DataAccess::DataBaseConnection();

            $statement = $connection -> prepare("SELECT password FROM users WHERE email = (?)");
            $statement -> bind_param("s", $user_email);
            $statement -> execute();

            $statement -> store_result();
            // var_dump($statement);
            $statement -> bind_result($password);
            while ($statement -> fetch()) {
                $password;
            }
            
            $statement -> close();
            mysqli_close($connection);

            if ($password == $user_password) {
                return true;
            } else {
                return false;
            }


        }

        public static function CreateNewUser($user_email, $user_password, $user_type) {
            // TODO: to be used by registration. Fix everything in this function for that form.

            $connection = DataAccess::DataBaseConnection();

            $statement = $connection -> prepare("INSERT INTO users (email, password, user_type) VALUES (?, ?, ?)");
            $statement -> bind_param("sss", $user_email, $user_password, $user_type);
            $statement->execute();

            mysqli_close($connection);
        }

        public function getDOB() {
            // TODO: Remove this.
            
            $connection = DataAccess::DataBaseConnection();

            $statement = $connection -> prepare("SELECT dob FROM students WHERE email=?");
            $email = "student@aiub.edu";
            $statement -> bind_param("s", $email);
            $statement -> execute();
            $statement -> bind_result($date);

            while ($statement->fetch()) {
                echo "dob: $date\n";
                var_dump($date);
            }
        }

        public function updateDOB() {
            // TODO: Remove this.
            $connection = DataAccess::DataBaseConnection();

            $statement = $connection -> prepare("UPDATE students SET dob=?");
            $date = "2011-12-11";
            $date = date("Y-m-d",strtotime($date));
            $statement -> bind_param("s", $date);
            $statement -> execute();
        }

    }
?>