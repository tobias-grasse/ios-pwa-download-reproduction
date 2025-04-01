<?php
header('Content-Disposition: attachment; filename="dummy.pdf"');
header('Content-Type: application/octet-stream');

return file_get_contents('./dummy.pdf');
