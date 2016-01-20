<!DOCTYPE html>
<div class="container">
        <div class="login-page-box">
        <div class="table-wrapper">
                <div class="login-box">


<html>
<head>

    
   
    
</head>
<body>

    <h1>Edit your avatar</h1>

    <!-- echo out the system feedback (error and success messages) -->
    <?php $this->renderFeedbackMessages(); ?>

    <div class="box">
        <h3>Upload an Avatar</h3>

        <div class="feedback info">
        If old Profile Photo is displayed please refresh the webpage!
        </div>

        <form action="<?php echo Config::get('URL'); ?>login/uploadAvatar_action" method="post" enctype="multipart/form-data">
            <label for="avatar_file">Select an avatar image from your hard-disk (will be scaled to 44x44 px, only .jpg currently):</label>
            <input type="file" name="avatar_file" required />
            <!-- max size 5 MB (as many people directly upload high res pictures from their digital cameras) -->
            <input type="hidden" name="MAX_FILE_SIZE" value="5000000" />
            <input type="submit" value="Upload image" />
        </form>
    </div>

    <div class="box">
        <h3>Delete your avatar</h3>
        <p>Click this link to delete your (local) avatar: <a href="<?php echo Config::get('URL'); ?>login/deleteAvatar_action">Delete your avatar</a>
    </div>
</div>
</div>
</div>
</div>
</div>