<?php

goto a;
echo "Ini di skip";

a:
echo "langsung kesini" . PHP_EOL;

/// GoTo di Loop 
$count  = 1;

while (true) {
    echo "While Loop $count" . PHP_EOL;
    $count++;
    if ($count > 10) {
        /// Ini akan menghentikan perulangan
        goto end;
    }
}

end:
echo "End Loop";
