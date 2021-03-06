# EMBER
This is the version of EMBER obtained from server atisha around September 2015 and modified to work with PHP 5 (it was running under PHP 3 at that time) and Chrome.

## Installation

You will need PHP, Apache an MySQL installed - please refer to other guides available on the Internet on how to do that. 

Instructions below are only guidelines and may differ slightly on your system (these refer to Mac OS Yosemite).

```
Make sure you secure your Web server and database with the appropriate measures - e.g. make sure you use HTTPS 
as passwords are passed in plaintext.
```

### Enable PHP for Apache

First, make a backup of the default Apache configuration (if youa re not sure what you are doing).

```
# cd /etc/apache2/
# sudo cp httpd.conf httpd.conf.bak
```

Now edit the Apache configuration.

```
# sudo vi httpd.conf
```

Uncomment the following line:

```
LoadModule php5_module libexec/apache2/libphp5.so
```

Restart Apache:

```
# sudo apachectl restart
```

You can verify PHP is enabled by creating a phpinfo() page in your DocumentRoot (from your Apache configuration - the default DocumentRoot for Mac OS X Yosemite is /Library/WebServer/Documents).

```
# echo '<?php phpinfo();' > /Library/WebServer/Documents/phpinfo.php
```

### MySQL

Either download the MySQL DMG for Mac OS X or install via package manager, e.g. homebrew.

Start MySQL server (you may not need sudo on your system):

```
# sudo mysql.server start
```

Connect to your MySQL console and create database called 'ember'. Create user 'ember' as well and grant all privileges to that user on database 'ember'. 

Copy `html/connect.inc.php.example` into `html/connect.inc.php` and set the password you used for database user 'ember' in `html/connect.inc.php` config file.

```
$mysql -u root -p
mysql> create database ember;
mysql> CREATE USER 'ember'@'localhost' IDENTIFIED BY 'your_super_secret_password';
mysql> GRANT ALL PRIVILEGES ON ember.* TO 'ember'@'localhost';
```

From command line load the EMBER .sql dump file (obtained separately).

```
$mysql -u ember -p -h localhost ember < ember-db-dump.sql
Enter password: 
```

If you need to do a MySQL backup of the 'ember' database, you can do something like:
```
$mysqldump -u ember -p -h localhost ember  > ember-db-dump.sql
Enter password: 
````

### Connect PHP and MySQL
You need to ensure PHP and MySQL can communicate with one another. In the case you not have `/var/mysql/mysql.sock` file after starting MySQL server, it is necessary to create a symlink to the MySQL's sock file (located in `/tmp/mysql.sock` on Mac OS).

```
# cd /var 
# sudo mkdir mysql
# sudo cd mysql
# # ln -s /tmp/mysql.sock mysql.sock
```

Sometimes it is the other way around - you may have `/var/mysql/mysql.sock` and not `/tmp/mysql.sock`, in which case you need to create a symlink `tmp/mysql.sock` to point to `/var/mysql/mysql.sock`.

### Additional configuration 

You may need to configure DocumentRoot in your Apache configuration file (`/etc/apache2/httpd.conf`) to look something like the following:

```
DocumentRoot "/home/ember/EMBER"
<Directory "/home/ember/EMBER">
    # The Options directive is both complicated and important.  Please see
    # http://httpd.apache.org/docs/2.4/mod/core.html#options
    # for more information.
    #
    Options FollowSymLinks Multiviews
    MultiviewsMatch Any

    #
    # AllowOverride controls what directives may be placed in .htaccess files.
    # It can be "All", "None", or any combination of the keywords:
    #   AllowOverride FileInfo AuthConfig Limit
    #
    AllowOverride None

    #
    # Controls who can get stuff from this server.
    #
    Require all granted
</Directory>
```

```
Note the `Require all granted` directive - the syntax has changed as of Apache 2.4.
```
