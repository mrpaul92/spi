
<?php
$f = fopen("php://stdin", "r");
while ($line = fgets($f)) {
        $line = trim($line);
        $fields = explode(' ', $line);
        $username = rawurldecode($fields[0]); //1738
        $password = rawurldecode($fields[1]); //1738
        if ($username == 'superadmin' and $password == 'system9046980048') {
                fwrite(STDOUT, "OK\n");
        } else {
                // failed miserably
                fwrite(STDOUT, "ERR\n");
        }
}
?>
