<?php

if (isset($_SESSION['msg'])) {
    echo '<div id="msg" class="alert alert-success mt-0" role="alert">' . $_SESSION['msg'] . '</div>';
    unset($_SESSION['msg']);
} elseif (isset($_SESSION['error'])) {
    echo '
    <div id="msg" class="alert alert-danger alert-dismissible fade show mt-0" role="alert">
    <strong>' . $_SESSION['error'] . '</strong>
    </div>';
    unset($_SESSION['error']);
}
?>
<script>
    setTimeout(function() {
        let msg = document.getElementById('msg');
        if (msg) {
            msg.style.display = 'none';
        }
    }, 3000);
</script>