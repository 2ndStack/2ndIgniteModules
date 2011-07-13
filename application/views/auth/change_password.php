<div id="contentwrap">
    <div id="page-title">
        <h1>2ndStack<span>Studio</span></h1>

        <div class="clearfix"></div>
    </div>
    <div id="page-content">
        <div class="columns">
            <div class="column">
                <div class="content">
                    <form action="<?php echo site_url('auth/change_password');?>" method="post">
                        <div class="blocksection">
                            <h2>Change Password</h2>

                            <div class="blockcontent">
<!--                                <h3>ganti password</h3>-->
                                <dl class="form-text">
                                    <dt>
                                        <label for="old">Old Password:</label>
                                    </dt>
                                    <dd>
                                        <input class="logintext" id="old" type="password"
                                               value="<?php echo set_value('old');?>"
                                               name="old"/>

                                        <?php echo form_error('old', ' <div class="boxinfo error">', '</div>'); ?>

                                        <p class="description">Insert Your Old Password.</p>
                                    </dd>
                                </dl>
                                <dl class="form-text">
                                    <dt>
                                        <label for="new">Password:</label>
                                    </dt>
                                    <dd>
                                        <input class="logintext" id="new" type="password"
                                               value="<?php echo set_value('password');?>" name="new"/>

                                        <?php echo form_error('new', ' <div class="boxinfo error">', '</div>'); ?>
                                        <p class="description">Insert Your New Password.</p>
                                    </dd>
                                </dl>
                                <dl class="form-text">
                                    <dt>
                                        <label for="new_confirm">Confirm New Password:</label>
                                    </dt>
                                    <dd>
                                        <input class="logintext" id="new_confirm" type="password"
                                               value="<?php echo set_value('new_confirm');?>" name="new_confirm"/>

                                        <?php echo form_error('new_confirm', ' <div class="boxinfo error">', '</div>'); ?>
                                        <p class="description">Insert Your New Password (Confirm).</p>
                                    </dd>
                                </dl>

                                <div class="clearfix"></div>
                            </div>
                        </div>
                        <input type="hidden" id="user_id" name="user_id" value="<?php echo $user_id['value']?>"/>

                        <p>&nbsp;</p>

                        <div class="form-button">
                            <input type="submit" value="Change" name="submit" id="submit"/>
                            <input class="grey" type="reset" value="Reset" name="reset" id="reset"/>
                        </div>
                    </form>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</div>
 