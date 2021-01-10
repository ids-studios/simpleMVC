# simpleMVC
An simple php Model View Controller.

## Installation

Upload the simpleMVC project on your web hosting or local machine, modify the .htaccess to point the right directory and then navigate to the location of the app. You should see an starter template with some information on how to modify the simpleMVC project. 
After this you have to navigate to app/config/config.php and edit the URLROOT and database information there.

## Usage of the database class(PDO)
```php
 $db = new Database;

    $db->DBQuery('SELECT * FROM table'); //Queries an SQL statement to the database
    $result = $db->DBResultSet(); // Saves the result set into $result variable
    $db->DBQuery('SELECT * FROM table WHERE id = :id'); // Selecting data with prepared statement
    $db->DBBindValues(':id',1); //Binding the id with actual value
    $db->DBExecute(); // Executes the statement, pleace it in if statement to check for true or false.
    $result = $db->DBResultSingle(); // Returning single row
```

## Usage of the functions class
```php
 $functions = new Functions();

    $functions->LogIPAddress(); //Returns IP address from the client / may return null
    $functions->GetOS(); //Returns OS platform / may return null
    $functions->GetBrowser(); //Returns browser / may return null
    $functions->EncryptData($string,$key); //Will encrypt the $string variable with the $key variable / WARNING: This is not 100% safe encryption, do not use for sensitive data.
    $functions->DecryptData($string,$key); //Will decrypt the $string variable with $key variable/ WARNING: If the $key variable is not the right one used to encrypt - will throw error.
    $functions->GenerateRandom($lenght); //Will generate an random string(letters and numbers) with the lenght specified. Modify $characters if you want only letters or numbers.
    $functions->RedirectTo('www.google.com'); // Will redirect to www.google.com
    $funcions->FileExists($file,$path); // Check if $file exists within $path
```

## Creating an new page

In order to create new page, you need to create the page in view/pages/ with name and design you want, after this is done you need to go to controllers/Pages.php and create a new public function with the name desired and set setView('pages/example');
Check controllers/Pages.php for the example method and view/pages/example.php. 

## License
[MIT](https://choosealicense.com/licenses/mit/)
