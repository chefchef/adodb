<?php

namespace ADOdb\Driver;

use \ADOdb\Datasource as ADO_Datasource;

class DriverManager
{
    public static function create(ADO_DataSource $dso)
    {
        switch ($dso->getType()) {
            case 'mysql':
            case 'pdo':
                return new PDO\Driver($dso);
        }
        throw new \Exception('No valid Driver found for this source');
    }
}