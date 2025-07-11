<?php
require_once __DIR__ . '/config.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name    = htmlspecialchars($_POST['name']    ?? '');
    $phone   = htmlspecialchars($_POST['phone']   ?? '');
    $service = htmlspecialchars($_POST['service'] ?? '');
    $msg     = htmlspecialchars($_POST['message'] ?? '');

    $text = "📩 <b>Yangi buyurtma:</b>\n"
          . "👤 <b>Ism:</b> {$name}\n"
          . "📞 <b>Telefon:</b> {$phone}\n"
          . "🔧 <b>Xizmat:</b> {$service}\n"
          . "📝 <b>Izoh:</b> {$msg}";

    $apiURL = "https://api.telegram.org/bot{$8161964057:AAHstCzutKh64Uz7dUfk6wBFi33pMDz_4vA}/sendMessage";

    $ch = curl_init($apiURL);
    curl_setopt_array($ch, [
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_POSTFIELDS     => [
            'chat_id'    => $CHAT_ID,
            'parse_mode' => 'HTML',
            'text'       => $text
        ],
        CURLOPT_TIMEOUT => 5
    ]);

    $response = curl_exec($ch);
    curl_close($ch);

    header("Location: contact.html?success=1");
    exit;
}
