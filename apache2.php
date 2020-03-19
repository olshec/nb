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
    <a href="#restart-apache2" class="btn btn-primary" data-toggle="collapse">Перезапуск</a>
    <div id="restart-apache2" class="collapse">
        <pre>

    Установка каьалога для апача
    DocumentRoot /home/user1/Documents/eclipse-soft/workspaces/php 
        <Directory /home/user1/Documents/eclipse-soft/workspaces/php>
                Options Indexes FollowSymlinks
                AllowOverride all
                Require all granted
        </Directory>

    Это "жёсткий" перезапуск: 
    <code>sudo /etc/init.d/apache2 restart</code>

    Перезапуск, не убивая процесс, а просто применение новой конфигурации:
    <code>sudo /etc/init.d/apache2 reload</code>

    Еще комманды перезапуска:
    systemctl restart apache2
    sudo apache2ctl restart
    sudo service apache2 restart

    Start, stop, restart:
    sudo start apache2
    sudo stop apache2
    sudo reload apache2
    sudo restart apache2    
        </pre>
    </div>
</div>
<br>




</body>

</html>
