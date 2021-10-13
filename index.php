<form method="GET">
    <input type="text" name="domain">
    <input type="submit">
</form>


<?php

if (isset($_GET['domain'])) {
    echo '<pre>';
    $domain = $_GET['domain'];
    $lookup = system("nslookup {$domain}");
    echo ($lookup);
    echo '</pre>';
}
