
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
    <a href="#mariadb-config" class="btn btn-primary" data-toggle="collapse">change password</a>
    <div id="mariadb-config" class="collapse">
        <pre>
        
            sudo mysql
            SET PASSWORD FOR 'root'@'localhost' = PASSWORD('1111');
            
            
            sudo systemctl stop mariadb
            sudo systemctl start mariadb

	
		SIGN IN without sudo: sudo snap connect mysql-workbench-community:password-manager-service :password-manager-service
            
        </pre>
    </div>
</div>
<br>



    
</body>

</html>








