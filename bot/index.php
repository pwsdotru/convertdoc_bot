<?php

require_once(dirname(__DIR__) . "vendor/autoload.php");

use TelegramBot\Api\Client;
use TelegramBot\Api\Exception;
use function parse_ini_file;

try {
    $config = parse_ini_file(__DIR__ . "/config.ini");
    $bot = new Client($config["TOKEN"]);

    $bot->command('start', function ($message) use ($bot) {
            $bot->sendMessage(
                $message->getChat()->getId(),
                "Send file for convert as attachment"
            );
    });

    $bot->run();
} catch (Exception $e) {
    $e->getMessage();
}
