<?php
$site_key = '6LfmenwaAAAAAJXpsINfG7pm2pPWrnSO9nlN_x-B'; // Diisi dengan site_key API Google reCapthca yang sobat miliki
$secret_key = '6LfmenwaAAAAAD7FnIiEY3_Grt7zzHYzRQWEPzHa'; // Diisi dengan secret_key API Google reCapthca yang sobat miliki
$captchaErr = "";
if (isset($_POST['submit'])) {
    if (isset($_POST['g-recaptcha-response'])) {
        $api_url = 'https://www.google.com/recaptcha/api/siteverify?secret=' . $secret_key . '&response=' . $_POST['g-recaptcha-response'];
        $response = @file_get_contents($api_url);
        $data = json_decode($response, true);

        if ($data['success']) {
            echo "<h2>captcha Valid</h2>";
        } else {
            echo "<h2>captcha invalid</h2>";
            echo "<p>anda tidak bisa logn</p>";
        }
    } else {
        $success = false;
    }
}
