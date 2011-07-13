<div id="contentwrap">
    <div id="page-title">
        <h1>2ndStack<span>Studio</span></h1>

        <div class="clearfix"></div>
    </div>
    <div id="page-content">
        <div class="columns">
            <div class="column">
                <div class="content">
                    <form action="<?php echo site_url('auth/login');?>" method="post">
                        <div class="blocksection">
                            <h2>Admin Login</h2>

                            <div class="blockcontent">
                                <h3>Log in</h3>
                                <dl class="form-text">
                                    <dt>
                                        <label for="email">E-mail:</label>
                                    </dt>
                                    <dd>
                                        <input class="logintext" id="email" type="text"
                                               value="<?php echo set_value('email');?>"
                                               name="email"/>

                                        <?php echo form_error('email', ' <div class="boxinfo error">', '</div>'); ?>

                                        <!--
                                        <div class="boxinfo">
                                            your info text here...
                                        </div>
                                        <div class="boxinfo success">
                                            Username is valid and not in use.
                                        </div>
                                        <div class="boxinfo error">
                                            Please complete the required field "Username".
                                        </div>
                                        -->
                                        <p class="description">Insert Your Email.</p>
                                    </dd>
                                </dl>
                                <dl class="form-text">
                                    <dt>
                                        <label for="password">Password:</label>
                                    </dt>
                                    <dd>
                                        <input class="logintext" id="password" type="password"
                                               value="<?php echo set_value('password');?>" name="password"/>

                                        <?php echo form_error('password', ' <div class="boxinfo error">', '</div>'); ?>
                                        <p class="description">Insert Your Password.</p>
                                    </dd>
                                </dl>
                                <dl class="form-check">
                                    <dt>
                                        <label for="logincheck">Remember me ?</label>
                                    </dt>
                                    <dd>
                                        <input id="logincheck" class="logincheck" type="checkbox" name="remember"
                                               value="1"/>
                                    </dd>
                                </dl>
                                <div class="clearfix"></div>
                            </div>
                        </div>


                        <div class="form-button">
                            <input type="submit" value="Log in" name="submit" id="submit"/>
                            <input class="grey" type="reset" value="Reset" name="reset" id="reset"/>
                        </div>
                    </form>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</div>
