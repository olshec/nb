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

<pre>
    sudo systemctl restart ssh
    service ssh restart

    emacs /etc/ssh/sshd_config

    ssh  -N -D 12345 olegshev2018@34.66.54.197

    scp -P 22 '/home/user1/Downloads/mydb.sql' user1@35.200.255.71:~/load/
</pre>

</body>

</html>

