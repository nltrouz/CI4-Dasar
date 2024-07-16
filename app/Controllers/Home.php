<?php

namespace App\Controllers;

use Config\Database;

class Home extends BaseController
{
    public function index(): string
    {
        return view('layout');
    }
    
    public function test()
    {
        // Get the database connection
        $db = Database::connect();

        // Execute the SQL command to show tables
        $query = $db->query('SHOW TABLES');

        // Fetch the result as an array of objects
        $tables = $query->getResult();

        // Output the tables (you can format this as needed)
        echo "<h1>Tables in db_presensi:</h1>";
        foreach ($tables as $table) {
            // Assuming MySQL, the field will be called `Tables_in_db_presensi`
            $tableName = $table->{'Tables_in_db_presensi'};
            echo $tableName . '<br>';
        }
    }
}
