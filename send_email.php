<?php
require 'vendor/autoload.php';
use Mailgun\Mailgun;

function send_email($type = "hive_invite", $to, $friendly_name, $user_from, $secret_link, $subject ="", $from = "") {
    $config = require "config.php";

    if (in_array($type, ["hive_invite", "verify_email"])) {
        if ($type === "hive_invite") {
            if ($subject === "") {$subject = "Welcome to Hive, $friendly_name!";}
            if ($from === "") {$from = implode("", $config->branding) . " <noreply@$config->domain>";}
        } elseif ($type === "verify_email") {
            if ($subject === "") {$subject = "Verify your email to create your Hive Account, $friendly_name!";}
            if ($from === "") {$from = implode("", $config->branding) . " <noreply@$config->domain>";}
        }
        $mg = Mailgun::create('api_key', 'https://api.eu.mailgun.net');

        return $mg->messages()->send($config->domain, [
            'from' => $from,
            'to' => "$friendly_name <$to>",
            'subject' => $subject,
            'template' => $type,
            't:text' => 'yes',
            'o:tracking' => 'no',
            'o:tracking-clicks' => 'no',
            '0:tracking-opens' => 'no',
            'recipient-variables' => json_encode([
                "$to" => [
                    "friendly_name" => $friendly_name,
                    "user_from" => $user_from,
                    "app_name" => implode("", $config->branding),
                    "secret_link" => $secret_link
                ]
            ])
        ]);
    } else {
        return false;
    }
}

send_email("hive_invite", "email@example.com", "Email", "cadawg", "https://hive.uno/em/903wjsfdfs");