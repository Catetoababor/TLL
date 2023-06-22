<?php

$arch = fopen($_POST['archivo'] . '.txt', 'w');
fwrite ($arch, $_POST['texto']);
fclose ($arch);