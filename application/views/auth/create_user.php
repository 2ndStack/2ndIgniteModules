<div id="contentwrap">
    <div id="page-title">
        <h1>2ndStack<span>Studio</span></h1>

        <div class="clearfix"></div>
    </div>
    <div id="page-content">
        <div class="columns">
            <div class="column">
                <div class="content">
                    <form action="<?php echo site_url('auth/create_user');?>" method="post">
                        <div class="blocksection">
                            <h2>Create User</h2>

                            <div class="blockcontent">
                                <h3>Please enter the users information below.</h3>
                                <dl class="form-text">
                                    <dt>
                                        <label for="first_name">First Name:</label>
                                    </dt>
                                    <dd>
                                        <input id="first_name" type="text"
                                               name="first_name"/>

                                        <?php echo form_error('first_name', ' <div class="boxinfo error">', '</div>'); ?>


                                        <p class="description">Insert Your First Name.</p>
                                    </dd>
                                </dl>
                                <dl class="form-text">
                                    <dt>
                                        <label for="last_name">Last Name:</label>
                                    </dt>
                                    <dd>
                                        <input id="last_name" type="text"
                                               value="" name="last_name"/>

                                        <?php echo form_error('last_name', ' <div class="boxinfo error">', '</div>'); ?>
                                        <p class="description">Insert Your Last Name.</p>
                                    </dd>
                                </dl>


                                <dl class="form-text">
                                    <dt>
                                        <label for="company">Company Name:</label>
                                    </dt>
                                    <dd>
                                        <input id="company" type="text"
                                               value="" name="company"/>

                                        <?php echo form_error('company', ' <div class="boxinfo error">', '</div>'); ?>
                                        <p class="description">Insert Your Company Name.</p>
                                    </dd>
                                </dl>

                                <dl class="form-text">
                                    <dt>
                                        <label for="email">Email:</label>
                                    </dt>
                                    <dd>
                                        <input id="email" type="text"
                                               value="" name="email"/>

                                        <?php echo form_error('email', ' <div class="boxinfo error">', '</div>'); ?>
                                        <p class="description">Insert Your Email.</p>
                                    </dd>
                                </dl>

                                <dl class="form-text">
                                    <dt>
                                        <label for="last_name">Phone:</label>
                                    </dt>
                                    <dd>
                                        <input style="width:50px ;" id="last_name" type="text"
                                               value="" name="phone1" maxlength="3"/> -
                                        <input style="width:50px ;" id="last_name" type="text"
                                               value="" name="phone2" size="10" maxlength="3"/> -
                                        <input style="width:70px ;" id="last_name" type="text"
                                               value="" name="phone3" size="10" maxlength="4"/>

                                        <?php echo form_error('phone1', ' <div class="boxinfo error">', '</div>'); ?>
                                        <?php echo form_error('phone2', ' <div class="boxinfo error">', '</div>'); ?>
                                        <?php echo form_error('phone3', ' <div class="boxinfo error">', '</div>'); ?>
                                        <p class="description">Insert Your Phone Number.</p>
                                    </dd>
                                </dl>

                                <dl class="form-text">
                                    <dt>
                                        <label for="password">Password:</label>
                                    </dt>
                                    <dd>
                                        <input class="logintext" id="password" type="password"
                                               value="" name="password"/>

                                        <?php echo form_error('password', ' <div class="boxinfo error">', '</div>'); ?>
                                        <p class="description">Insert Your Password.</p>
                                    </dd>
                                </dl>

                                <dl class="form-text">
                                    <dt>
                                        <label for="confirm">Confirm Password:</label>
                                    </dt>
                                    <dd>
                                        <input id="confirm" type="password"
                                               value="" name="password_confirm"/>

                                        <?php echo form_error('password_confirm', ' <div class="boxinfo error">', '</div>'); ?>
                                        <p class="description">Confirm Your Password.</p>
                                    </dd>
                                </dl>

                                <div class="clearfix"></div>
                            </div>
                        </div>
                        <p>&nbsp;</p>

                        <div class="form-button">
                            <input type="submit" value="Create User" name="submit" id="submit"/>

                        </div>
                    </form>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</div>
