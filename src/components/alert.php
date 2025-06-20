<?php

if (!empty($_GET['status']) && !empty($_GET['message']) && isset($_GET['is_error'])) {

  $is_error = filter_var($_GET['is_error'], FILTER_VALIDATE_BOOLEAN);
  $message = htmlspecialchars($_GET['message'], ENT_QUOTES, 'UTF-8');
  ?>
  <div class="alert <?php echo $is_error ? 'error' : 'success'; ?>" role="alert">
    <svg viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
      <path fill-rule="evenodd"
            d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z"
            clip-rule="evenodd"></path>
    </svg>
    <div>
      <span><?php echo $message; ?></span>
    </div>
  </div>
    <?php
}
?>
