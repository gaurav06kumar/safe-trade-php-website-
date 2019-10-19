<?php
session_start();
unset($_SESSION['TID']);
 session_destroy();
?>
<script type="text/javascript">
  window.open('index.php','_self');
</script>
