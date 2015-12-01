<?php

require 'core.inc.php';

session_destroy(); // destroy all the current session running like id session is running in loginform.in.php

header('Location: '.$http_referer);

?>  