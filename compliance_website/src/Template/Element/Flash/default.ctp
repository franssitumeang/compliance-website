<?php
$class = '';
$arr_message = (explode(" ",$message));
if($arr_message[2] == 'could' || $arr_message[2] == 'not'){
    $class = 'alert alert-danger';
}
else{
    $class = 'alert alert-success';
}

if (!isset($params['escape']) || $params['escape'] !== false) {
    $message = h($message);
}
?>
<div class="<?= h($class) ?>" onclick="this.classList.add('hidden');"><?= $message ?></div>
