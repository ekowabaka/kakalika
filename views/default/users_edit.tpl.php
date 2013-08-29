<div id="profile_head">
    <img src="<?= $helpers->gravatar->image($_SESSION['user']['email'])->size(96) ?>" />
    <span class="name"><?= "{$_SESSION['user']['firstname']} {$_SESSION['user']['lastname']}" ?></span><br/>
    <span class="email"><?= $_SESSION['user']['email'] ?></span>
</div>
<div class="row">
<div class="column grid_10_8">
<?php 
$helpers->form->setData($user);
$helpers->form->setErrors($errors);
?>
<?= $helpers->form->open() ?>
<div class="row" style="width:100%">
    <div class="column grid_10_5">
        <?=
            $helpers->form->open_field_set("Personal Information") .
            $helpers->form->get_text_field('Firstname', 'firstname')->description('Your real firstname for easy identification') .
            $helpers->form->get_text_field('Lastname', 'lastname')->description('Optional lastname') .
            $helpers->form->get_text_field('Username', 'username')->description('Note that the username you select must be unique') .
            $helpers->form->get_text_field('Email', 'email')->description("Your email address is also used for your avatar. Visit <a href='gravatar.com'>gravatar.com</a> to setup your avatar.") .
            $helpers->form->close_fieldset() 
        ?>
    </div>
    <div class="column grid_10_5">
        <?=
            $helpers->form->open_field_set("Change Password") .
            $helpers->form->get_text_field('Current Password', 'current_password') .
            $helpers->form->get_text_field('New Password', 'new_password') .
            $helpers->form->get_text_field('Repeat New Password', 'repeat_new_password') .
            $helpers->form->close_fieldset() 
        ?>
    </div>
</div>
<?= $helpers->form->close("Update") ?>
</div></div>
