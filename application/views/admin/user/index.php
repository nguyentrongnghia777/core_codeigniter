<?php $this->load->view('admin/template/header', ['title' => 'Manage User']) ?>
<div class="page-user">
    <div class="container">
        <h1><?php echo lang('index_heading');?></h1>
        <p><?php echo lang('index_subheading');?></p>

        <div id="infoMessage"><?php echo $message;?></div>

        <table class="table table-bordered table-hover" >
            <tr>
                <th><?php echo lang('index_fname_th');?></th>
                <th><?php echo lang('index_email_th');?></th>                
                <th><?php echo lang('index_groups_th');?></th>
                <th><?php echo lang('index_status_th');?></th>
                <th><?php echo lang('index_action_th');?></th>
            </tr>
            <?php foreach ($users as $user):?>
                <tr>
                    <td><?php echo htmlspecialchars($user->full_name,ENT_QUOTES,'UTF-8');?></td>
                    <td><?php echo htmlspecialchars($user->email,ENT_QUOTES,'UTF-8');?></td>
                    <td>
                        <?php foreach ($user->groups as $group):?>
                            <?php echo anchor("admin/user/edit_group/".$group->id, htmlspecialchars($group->name,ENT_QUOTES,'UTF-8')) ;?><br />
                        <?php endforeach?>
                    </td>
                    <td><?php echo ($user->active) ? anchor("admin/user/deactivate/".$user->id, lang('index_active_link')) : anchor("admin/user/activate/". $user->id, lang('index_inactive_link'));?></td>
                    <td><?php echo anchor("admin/user/edit_user/".$user->id, 'Edit') ;?></td>
                </tr>
            <?php endforeach;?>
        </table>

        <p><?php echo anchor('admin/user/create_user', lang('index_create_user_link'))?> | <?php echo anchor('admin/user/create_group', lang('index_create_group_link'))?></p>
    </div>
</div>
<?php $this->load->view('admin/template/footer') ?>