<div id="login-box">
    <h2>Login</h2>
<?=
    $helpers->form->open() .
    $helpers->form->get_text_field('Username', 'username') .
    $helpers->form->get_password_field('Password', 'password') .    
    $helpers->form->close('Login');
?>
</div>