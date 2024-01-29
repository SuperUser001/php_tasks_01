<?php
echo php_uname()."\n";
echo PHP_OS."\n";
if (strtoupper(substr(PHP_OS, 0, 3)) === 'WIN') {
echo 'Этот сервер использует Windows!';
} else {
echo 'Этот сервер, не использует Windows!'."\n";
}
?>