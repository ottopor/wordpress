<?php
// displaying page content
$ftp_upload_nonce = wp_create_nonce('ftp_upload_form_nonce');
$action_url = FTP_UPLOAD_PLUGIN_DIR . '/process-form.php?_wpnonce='. $ftp_upload_nonce;
?>
<html>
  <head>
    <title>FTP upload</title>
  </head>
  <body>
    <h1>FTP Upload</h1>
    <h2>Upload a file to a FTP server</h2>
    <div>
      <form action="<?php echo $action_url; ?>" method="POST">
          <div id="macindia-ftp" style="display:none;">
            <p>
              <label for="host">FTP Host</label>
              <input name="host" type="text" value="">
          </p>
          <p>
              <label for="user">FTP username</label>
              <input name="user" type="text" value="">
          </p>
          <p>
            <label for="password">FTP password</label>
            <input name="password" type="password" value="">
          </p>
          <p>
          We need a file uploader here.
          </p>
          <p>
            <input type="submit" value="Get batch">
          </p>
        </div>
      </form>
    </div>
  </body>
</html>
