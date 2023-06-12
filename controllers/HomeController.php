<?php

require_once 'config/database.php';

class HomeController
{
    public function index()
    {
        // Fetch data from the database
        $data = fetchDataFromDatabase();

        // Include the view
        require 'views/home.php';
    }
}
