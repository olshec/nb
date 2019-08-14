
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
        <a href="#install-php" class="btn btn-primary" data-toggle="collapse">установка php</a>
        <div id="install-php" class="collapse">
            <pre>
    
        Образец файла с настройками 000-default.conf: <a href="000-default.conf">образец</a>
    
        Install php7.3:
        sudo apt -y install lsb-release apt-transport-https ca-certificates 
        sudo wget -O /etc/apt/trusted.gpg.d/php.gpg https://packages.sury.org/php/apt.gpg
        echo "deb https://packages.sury.org/php/ $(lsb_release -sc) main" | sudo tee /etc/apt/sources.list.d/php7.3.list
    
        sudo apt update
        sudo apt -y install php7.3
        sudo apt install php7.3-cli php7.3-fpm php7.3-json php7.3-pdo php7.3-mysql php7.3-zip php7.3-gd  php7.3-mbstring php7.3-curl php7.3-xml php7.3-bcmath php7.3-json
        sudo apt install libapache2-mod-php7.3
        Confirm one:
        $ apt policy php7.3-cli
        
        (Чтобы установить PHP 7.3 по умолчанию, запустите:
        update-alternatives --set php /usr/bin/php7.3)
        Прежде чем мы сможем настроить Apache для использования PHP 7.3, нам нужно отключить старую версию PHP 7.0, набрав:
        a2dismod php7.0
        Теперь включите только что установленную версию PHP 7.3 с помощью следующей команды:
        a2enmod php7.3
        Перезапустите веб-сервер Apache, чтобы изменения вступили в силу:
        systemctl restart apache2
            </pre>
        </div>
    </div>
    <br>
    
    <div class="container">
            <a href="#settings-xdebug" class="btn btn-primary" data-toggle="collapse">настройка xdebug</a>
            <div id="settings-xdebug" class="collapse">
                <pre>
    
        Настройка xdebug (файл 20-xdebug.ini):
        zend_extension=xdebug.so
        
        display_errors = On
        display_startup_errors = On
        
        [xdebug]
        xdebug.remote_enable=1
        xdebug.remote_autostart=1
        xdebug.remote_host=127.0.0.1
        xdebug.remote_log=/var/www/html/xdebug.log
        xdebug.remote_connect_back=0
        xdebug.remote_port=9000
            </pre>
        </div>
    </div>


</body>

</html>








