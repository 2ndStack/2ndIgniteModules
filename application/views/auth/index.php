<script type="text/javascript" src="<?php echo base_url() . 'static/'?>js/jquery.dataTables.min.js"></script>
<link rel="stylesheet" href="<?php echo base_url() . 'static/'?>css/table.css" type="text/css"/>
<script type="text/javascript" charset="utf-8">
    $(document).ready(function() {
        $('#datatables').dataTable({
                    "sPaginationType": "full_numbers"
                }
        );
    });
</script>

<div id="contentwrap">
    <div id="page-title">
        <h1 class="icon gear">2ndStack<span>Studio</span></h1>

        <div class="clearfix"></div>
    </div>
    <div id="page-content">
        <div class="columns"> <!-- one column: <div class="columns"> -->
            <!-- three columns: <div class="columns three"> -->
            <div class="column">
                <div class="content">
                    <table cellpadding=0 cellspacing=10 border="0" class="display" id="datatables" width="100%">
                        <thead>
                        <tr>
                            <th>First Name</th>
                            <th>Last Name</th>
                            <th>Email</th>
                            <th>Group</th>
                            <th>Status</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php foreach ($users as $user): ?>
                        <tr>
                            <td><?php echo $user['first_name']?></td>
                            <td><?php echo $user['last_name']?></td>
                            <td><?php echo $user['email'];?></td>
                            <td><?php echo $user['group_description'];?></td>
                            <td><?php echo ($user['active']) ? anchor("auth/deactivate/" . $user['id'], 'Active')
                                    : anchor("auth/activate/" . $user['id'], 'Inactive');?></td>
                        </tr>
                            <?php endforeach;?>
                        </tbody>
                        <tfoot>
                        <tr>
                            <td colspan="5"><a href="<?php echo site_url('auth/create_user');?>">Create a new user</a>
                            </td>
                        </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</div>

