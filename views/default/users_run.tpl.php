<h4>List of users</h4>
<div class="row">
    <div class="column grid_10_7">
        
        <div class="tool-section">
            <a href="<?= u('admin/users/add') ?>" class="button greenbutton add-operation">
                <img src="<?= u(load_asset('images/add_user.png')) ?>"/> Add a new user
            </a>
        </div>
        
        <div class="p15">
        <?php
        $helpers->lists->headers = array('Firstname', 'Lastname', 'Username', 'Email', '');
        $helpers->lists->data = $users;
        $this->helpers->list->cellTemplates['id'] = 'users_run_operations.tpl.php';
        echo $helpers->lists;
        ?>
        </div>
    </div>
    <div class="column grid_10_3"><?= t('admin_side_menu.tpl.php') ?></div>
</div>

