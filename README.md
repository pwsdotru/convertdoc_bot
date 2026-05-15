# Converter Doc Bot

Telegram Bot for convert documents to PDF format

## Install

### Set webhook

Run script [init.php](./bot/init.php) with URL to folder **bot** on your server

````shell script
php bot/init.php "https://host[:port]/path"
````

Where **host** and **port** are for your webserver with bot scripts. 
**path** is URL to folder on webserver to folder that contains files from **bot** folder. 
Or rewrite alias to this folder. 
