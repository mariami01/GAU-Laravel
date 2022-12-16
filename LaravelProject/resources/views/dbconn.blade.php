<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LaravelProject</title>
</head>
<body>
    <div>
        <?php
            // if(DB::connection()->getPdo(){
            //     echo "Successfully connected with a database:) !".DB::connection->;
            // })
            try {
                $db = DB::connection()->getPdo();
                echo "uhuuuu, successfully connected with a database :) !";
            }
            catch (PDOException $e) {
                self::fatal(
                    "An error occurred while connecting to the database. ".
                    "The error reported by the server was: ".$e->getMessage()
                );
            }
            return $db;
        ?>
    </div>
</body>
</html>