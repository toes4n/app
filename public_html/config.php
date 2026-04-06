<?php  // Moodle configuration file

unset($CFG);
global $CFG;
$CFG = new stdClass();

$CFG->dbtype    = 'mariadb'; // Use 'mysqli' if you encounter issues, though mariadb often works
$CFG->dblibrary = 'native';
$CFG->dbhost    = 'who-srv.mysql.database.azure.com'; // Your Azure Endpoint
$CFG->dbname    = 'u999747919_lmsdemo2';             // Ensure this DB exists on Azure
$CFG->dbuser    = 'tkqweddfmy';
$CFG->dbpass    = 'OUMPdHotFUTe5$do';
$CFG->prefix    = 'mdl_';
$CFG->dboptions = array (
  'dbpersist' => 0,
  'dbport' => 3306,
  'dbsocket' => '',
  'dbcollation' => 'utf8mb4_unicode_ci',
  'dbssl' => true, // Azure MySQL Flexible Server requires SSL by default
);

// Update this to your Azure Default Domain from the screenshot
$CFG->wwwroot   = 'https://who-gta0ccdvd2g4e8ge.southeastasia-01.azurewebsites.net';

// On Azure App Service, the web root is typically /home/site/wwwroot
// Ensure you have created the 'moodledata' folder in /home/
$CFG->dataroot  = '/home/moodledata'; 

$CFG->admin     = 'admin';
$CFG->directorypermissions = 0777;

require_once(__DIR__ . '/lib/setup.php');

// There is no php closing tag in this file,
// it is intentional because it prevents trailing whitespace problems!
