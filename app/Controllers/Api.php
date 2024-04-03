<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Api extends CI_Controller {
    
    public function __construct() {
        parent::__construct();
        // Load any necessary models or libraries here
    }

    public function users() {
        // Load model or fetch data directly from database
        $users = array(
            array('id' => 1, 'name' => 'John Doe', 'email' => 'john@example.com'),
            array('id' => 2, 'name' => 'Jane Smith', 'email' => 'jane@example.com'),
            // Add more user data as needed
        );

        // Serve the data as JSON
        $this->output
            ->set_content_type('application/json')
            ->set_output(json_encode($users));
    }

    // Add more API methods as needed
}