<?php
session_start();
unset($_SESSION['uid']);
 session_destroy();
?>
<script type="text/javascript">
  window.open('index.php','_self');
</script>
