<?php
// Telegram bot tokeni
$BOT_TOKEN = '8161964057:AAHstCzutKh64Uz7dUfk6wBFi33pMDz_4vA';

// Kimga xabar boradi
$CHAT_ID = '6830094264';
?>
<?php
// Foydalanuvchi tanlagan tilni sessiyada saqlaymiz
session_start();

if (isset($_GET['lang'])) {
    $_SESSION['lang'] = $_GET['lang'];
}

// Default til - UZ
$lang = $_SESSION['lang'] ?? 'uz';

// Tanlangan til faylini yuklaymiz
$lang_file = "lang/" . $lang . ".php";
if (!file_exists($lang_file)) {
    $lang_file = "lang/uz.php"; // Agar mavjud bo‘lmasa UZ ga qaytadi
}
$texts = include($lang_file);
?>
<!DOCTYPE html>
<html lang="<?= $lang ?>">
<head>
    <meta charset="UTF-8">
    <title><?= $texts['welcome'] ?></title>
</head>
<body>

<!-- Til tanlash tugmalari -->
<form method="get" style="margin: 20px;">
    <label><?= $texts['lang_select'] ?></label>
    <select name="lang" onchange="this.form.submit()">
        <option value="uz" <?= $lang=='uz'?'selected':'' ?>>🇺🇿 O‘zbekcha</option>
        <option value="ru" <?= $lang=='ru'?'selected':'' ?>>🇷🇺 Русский</option>
        <option value="en" <?= $lang=='en'?'selected':'' ?>>🇬🇧 English</option>
    </select>
</form>

<h1><?= $texts['welcome'] ?></h1>
<p><?= $texts['about'] ?></p>
<a href="#"><?= $texts['contact'] ?></a>

</body>
</html>
