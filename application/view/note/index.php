<!DOCTYPE html>
<div class="container">
        <div class="login-page-box">
        <div class="table-wrapper">
                <div class="login-box">


<html>
<head>

    
   
    
</head>
<body>
        <!-- echo out the system feedback (error and success messages) -->
        <?php $this->renderFeedbackMessages(); ?>

        <h3>Notes</h3>
        <p>
            Save your favorite journeys and trains here! We at Swift Rails know that travel is important you. With the hectic timetables, update notes of what you need to take here, that way you'll never forget anything. 
        </p>
        <p>
            <form method="post" action="<?php echo Config::get('URL');?>note/create">
                <label>Text of new note: </label><input type="text" name="note_text" />
                <input type="submit" value='Create this note' autocomplete="off" />
            </form>
        </p>

        <?php if ($this->notes) { ?>
            <table class="note-table">
                <thead>
                <tr>
                    <td>Id</td>
                    <td>Note</td>
                    <td>EDIT</td>
                    <td>DELETE</td>
                </tr>
                </thead>
                <tbody>
                    <?php foreach($this->notes as $key => $value) { ?>
                        <tr>
                            <td><?= $value->note_id; ?></td>
                            <td><?= htmlentities($value->note_text); ?></td>
                            <td><a href="<?= Config::get('URL') . 'note/edit/' . $value->note_id; ?>">Edit</a></td>
                            <td><a href="<?= Config::get('URL') . 'note/delete/' . $value->note_id; ?>">Delete</a></td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
            <?php } else { ?>
                <div>No notes yet. Create some !</div>
            <?php } ?>
    </div>
</div>
