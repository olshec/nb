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

    --install tplink 821n

        sudo apt-get install git build-essential dkms

        git clone https://github.com/Mange/rtl8192eu-linux-driver.git

        sudo dkms add ./rtl8192eu-linux-driver
        -- maybe need do make

        sudo dkms install -m rtl8192eu -v 1.0

        reboot


    --for write ntfs disk:
    apt install gnome-disk-utility
    ntfs-3g 
    nano /etc/fstab: /dev/sdb1    /media/user1/mnt    ntfs-3g    umask=0,user,locale=ru_RU.UTF-8    0    0


    --for sudo: 
    nano /etc/sudoers
    --write: user1    ALL=(ALL:ALL) ALL



    apt-get install pulseaudio
    amixer set Master 5%+ 
    amixer set Master 5%-
    amixer set Master toggle




    sudo apt-get install apache2 php libapache2-mod-php mysql-client mysql-server phpmyadmin

    systemctl status mysqld

    sudo mysql_secure_installation

    --phpmyadmin:
    nano /etc/apache2/apache2.conf
    -- add the following line:
    Include /etc/phpmyadmin/apache.conf 

    sudo ln -s /usr/share/phpmyadmin /var/www/

    create user 'test'@'localhost' identified by '123';
    grant all privileges on *.* to 'test'@'localhost' ;
    flush privileges;


    --for disable keyrig
    sudo apt-get install seahorse


    display power on both:
        #!/bin/bash
        xrandr --output HDMI-1 --auto
        xrandr --output VGA-1 --right-of HDMI-1 --auto

        #!/bin/bash
        xrandr --output VGA-1 --auto
        xrandr --output HDMI-1 --off


        CONFIGURE KEYBOARD:
        The configured keyboard shortcuts are stored in : ~/.config/xfce4/xfconf/xfce-perchannel-xml/xfce4-keyboard-shortcuts.xml
        And the system default (at least on OpenSuse 12.1) : /etc/xdg/xfce4/xfconf/xfce-perchannel-xml/xfce4-keyboard-shortcuts.xml


        </pre>

    
</body>

</html>
