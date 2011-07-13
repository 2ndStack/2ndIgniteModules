
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
                            <h2>Forgot Password</h2>

                            <div class="blockcontent">
                                <h3>Please enter your email address so we can send you an email to reset your password.</h3>
                                <dl class="form-text">
                                    <dt>
                                        <label for="email">E-mail:</label>
                                    </dt>
                                    <dd>
                                        <input class="logintext" id="email" type="text"
                                               value=""
                                               name="email"/>

                                        <?php echo form_error('email', ' <div class="boxinfo error">', '</div>'); ?>

                                        <p class="description">Insert Your Email.</p>
                                    </dd>
                                </dl>

                                <div class="clearfix"></div>
                            </div>
                        </div>
                        <p>&nbsp;</p>

                        <div class="form-button">
                            <input type="submit" value="Submit" name="submit" id="submit"/>

                        </div>
                    </form>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</div>
