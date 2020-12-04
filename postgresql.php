
<!DOCTYPE html>
<html>

<head>
    <title>Knowledge base</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>

<body>
<?php include 'navigator.php';?>

<div class="container">
    <a href="#postgres-config" class="btn btn-primary" data-toggle="collapse">postgresql command</a>
    <div id="postgres-config" class="collapse">
    <pre>

    sudo su - postgres
    psql -h localhost  -U postgres

    \c - get database
    \l - list of databases
    \d - describe fields in table
    \dt - describe tables
    \dT+ - describe types
    \g - last command
    DROP TABLE resume CASCADE;

    CREATE DATABASE yii2basic
    \password postgres  - set password for user 'postgres'

    ./yii migrate/down 1
    ./yii migrate

    DROP TYPE gender_enum;
    CREATE TYPE gender_enum AS ENUM ('male', 'female');

    </pre>
  </div>
</div>
    
</body>
</html>