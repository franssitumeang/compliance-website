<?php
$class = 'alert alert-secondary';
if (!isset($params['escape']) || $params['escape'] !== false) {
    $message = h($message);
}
?>

<div id="msg_box" class="modal fade">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-body">
                <?= $message ?>
            </div>
            <div class="modal-footer">
                <button type="button" class="genric-btn primary small radius" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<script>
    $(window).load(function(){        
        $('#msg_box').modal({backdrop: 'static', keyboard: false});
    });
</script>