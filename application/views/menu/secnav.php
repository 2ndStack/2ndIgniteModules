<div id="secnav">
    <ul>
        <li>
            <?php
            if (!$auth->logged_in()) {
            ?>
            <a>Log in</a>
            <ul id="loginbox">
                <li>
                    <form action="<?php echo site_url('auth/login');?>" method="post">
                        <label>E-mail</label>
                        <input class="logintext" id="email" type="text" value=""
                               name="email"/>
                        <label>Password</label>
                        <input class="logintext" id="password" type="password" value="" name="password"/>
                        <button type="submit" value="Log in">Log in</button>
                        <input class="logincheck" type="checkbox" name="remember" value="1"/>
                        <label>Remember Me?</label>

                        <p>
                            <a href="#">Register for a 2ndStack account &raquo;</a>
                        </p>
                    </form>
                </li>
            </ul>
            <?php

        } else {
            ?>
            <a href="<?php echo site_url('auth/logout'); ?>">Log out</a>
            <?php

        }
            ?>
        </li>
        <li class="subnav">
            <a>Help</a>
            <ul>
                <li><a href="<?php echo site_url('auth/change_password');?>">Change Password</a></li>
                <li><a href="#">About</a></li>
            </ul>
        </li>
    </ul>
</div>