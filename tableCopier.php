//Connect to MySQL using PDO.
$pdo = new PDO($dsn, $user, $password);

//The name of the table that you want to copy.
$currentTable = 'members';

//The name of the new table.
$newTableName = 'members_copy';

//Run the CREATE TABLE new_table LIKE current_table
$pdo->query("CREATE TABLE $newTableName LIKE $currentTable");

//Import the data from the old table into the new table.
$pdo->query("INSERT $newTableName SELECT * FROM $currentTable");
