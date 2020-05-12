<?php
    class Sample extends Controller {

        /**
         * Create as many functions as needed.
         * To call the functions the url should look like: ControllerName/ControllMethod.
         * For this Sample, url should be: Sample/sample_method
         */
        
        public function index() {
            // Return a 'view' or do nothing.
            $this -> view('Sample');
        }

        public function sample_method() {
            // Returns the sample view.
            $this -> view('Sample');
        }

        public function sample_data() {
            $this -> view('Sample', ['Name' => "Sample Name", "Number" => "Sample Number"]);
        }

        public function validate() {

            /**
             * Demonstrates how to use a user model in conjunction with a view.
             * Shows how to access stuff based on a post.
             */
            if($_SERVER["REQUEST_METHOD"] == "POST") {
                // No need to check if the fields are empty as they have been validated before.
                $user_email = $_POST['user_email'];
                $user_password = $_POST['user_password'];
                $user = $this -> model('UserModel', [$user_email, $user_password]);

                $user_exists = UserModel::CheckIfUserExists($user_email);
                $user_valid = UserModel::ValidateUser($user_email, $user_password);

                if (!$user_exists) {
                    // TODO: The user does not exist.
                    echo "User does not exist.";
                } else if (!$user_valid) {
                    // TODO: Credentials are wrong.
                    echo "Incorrect password.";
                } else if ($user_exists && $user_valid) {
                    $user_type = $user -> getUserType();

                    $_SESSION['user_email'] = $user_email;
                    $_SESSION['user_type'] = $user_type;
                    
                    header("Location: ../sample_method/");
                } else {
                    // Do nothing.
                }
            }
        }

    }
?>