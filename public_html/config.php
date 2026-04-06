<?php  // Moodle configuration file

unset($CFG);
global $CFG;
$CFG = new stdClass();

$CFG->dbtype    = 'mariadb'; // Use 'mysqli' if 'mariadb' causes issues on Azure MySQL
$CFG->dblibrary = 'native';
$CFG->dbhost    = 'who-srv.mysql.database.azure.com';
$CFG->dbname    = 'u999747919_lmsdemo2'; // Ensure this DB name exists on the Azure server
$CFG->dbuser    = 'tkqweddfmy';
$CFG->dbpass    = 'OUMPdHotFUTe5$do';
$CFG->prefix    = 'mdl_';
$CFG->dboptions = array (
  'dbpersist' => 0,
  'dbport' => 3306,
  'dbsocket' => '',
  'dbcollation' => 'utf8mb4_unicode_ci',
  'dbssl' => true, // Azure Flexible Server strongly recommends SSL
);

// Use your custom domain for the wwwroot
$CFG->wwwroot   = 'https://who.tsandev.org';

// Path for Azure App Service (usually /home/site/wwwroot/moodledata)
// Make sure this directory is outside your public web folder and is writable
$CFG->dataroot  = '/home/data/moodledata'; 

$CFG->admin     = 'admin';
$CFG->directorypermissions = 02777; // Standard for Azure App Service linux environments

require_once(__DIR__ . '/lib/setup.php');
