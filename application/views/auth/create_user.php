<!--<div class='mainInfo'>-->
<!---->
<!--	<h1>Create User</h1>-->
<!--	<p>Please enter the users information below.</p>-->
<!---->
<!--	<div id="infoMessage">--><?php //echo $message;?><!--</div>-->
<!---->
<!--    --><?php //echo form_open("auth/create_user");?>
<!--      <p>First Name:<br />-->
<!--      --><?php //echo form_input($first_name);?>
<!--      </p>-->
<!---->
<!--      <p>Last Name:<br />-->
<!--      --><?php //echo form_input($last_name);?>
<!--      </p>-->
<!---->
<!--      <p>Company Name:<br />-->
<!--      --><?php //echo form_input($company);?>
<!--      </p>-->
<!---->
<!--      <p>Email:<br />-->
<!--      --><?php //echo form_input($email);?>
<!--      </p>-->
<!---->
<!--      <p>Phone:<br />-->
<!--      --><?php //echo form_input($phone1);?><!-----><?php //echo form_input($phone2);?><!-----><?php //echo form_input($phone3);?>
<!--      </p>-->
<!---->
<!--      <p>Password:<br />-->
<!--      --><?php //echo form_input($password);?>
<!--      </p>-->
<!---->
<!--      <p>Confirm Password:<br />-->
<!--      --><?php //echo form_input($password_confirm);?>
<!--      </p>-->
<!---->
<!---->
<!--      <p>--><?php //echo form_submit('submit', 'Create User');?><!--</p>-->
<!---->
<!---->
<!--    --><?php //echo form_close();?>
<!---->
<!--</div>-->


<!--<script type="text/javascript" src="--><?php //echo base_url() . 'static/'?><!--js/jquery.dataTables.min.js"></script>-->
<!--<link rel="stylesheet" href="--><?php //echo base_url() . 'static/'?><!--css/table.css" type="text/css"/>-->
<!--<script type="text/javascript" charset="utf-8">-->
<!--    $(document).ready(function() {-->
<!--        $('#datatables').dataTable({-->
<!--                    "sPaginationType": "full_numbers"-->
<!--                }-->
<!--        );-->
<!--    });-->
<!--</script>-->
    <div id="wrapper">
                    <div id="contentwrap">
                        <div id="page-title">
                            <h1>Create User</h1>
                            <div class="clearfix"></div>
                        </div>
                        <div id="page-content">
                            <div class="columns">
                                <div class="column">
                                    <div class="content">
                                        <form method="post" action="">
                                            <div class="blocksection">
                                                <h2>Please enter the users information below.</h2>


<div class="blockcontent">
    <h3>Required Information</h3>
    <dl class="form-text">
        <dt>
            <label for="text_1">Fullname:</label>
        </dt>
        <dd>
            <input type="text" id="text_1" name="text_1" value=""/>

            <!--                                                           <div class="boxinfo">-->
            <!--                                                               your info text here...-->
            <!--                                                           </div>-->
            <!--                                                           <div class="boxinfo success">-->
            <!--                                                               Username is valid and not in use.-->
            <!--                                                           </div>-->
            <!--                                                           <div class="boxinfo error">-->
            <!--                                                               Please complete the required field "Username".-->
            <!--                                                           </div>-->
            <!--                                                         -->
            <p class="description">Ut eros arcu scelerisque sed congue sed vehicula vel justo.</p>
        </dd>
    </dl>
    <dl class="form-text">
        <dt>
            <label for="text_2">Nick:</label>
        </dt>
        <dd>
            <input type="text" id="text_2" name="text_2" value=""/>

            <p class="description">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
        </dd>
    </dl>
    <dl class="form-radio">
        <dt>
            <label for="salutation">Salutation:</label>
        </dt>
        <dd>
            <input type="radio" id="radio_1" name="radiogroup_1" value="Mr"/> <label for="radio_1">Mr</label><br/>
            <input type="radio" id="radio_2" name="radiogroup_1" value="Ms"/> <label for="radio_2">Ms</label><br/>
            <input type="radio" id="radio_3" name="radiogroup_1" value="Ms"/> <label for="radio_3">Ms</label>

            <p class="description">Donec est urna, mattis a convallis suscipit sem Sed ultricies adipiscing lectus ut
                iaculis.</p>
        </dd>
    </dl>
    <dl class="form-select">
        <dt>
            <label for="select_1">Ocuupation:</label>
        </dt>
        <dd>
            <select name="select_1" id="select_1">
                <option value="Student">Student</option>
                <option value="Lecturer">Lecturer</option>
                <option value="Agency">Agency</option>
                <option value="Corporate">Corporate</option>
            </select>

            <p class="description">Ut eros arcu scelerisque sed congue sed vehicula vel justo.</p>
        </dd>
    </dl>
    <dl class="form-text">
        <dt>
            <label for="text_3">Email:</label>
        </dt>
        <dd>
            <input type="text" id="text_3" name="text_3" value=""/>

            <p class="description">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
        </dd>
    </dl>
    <dl class="form-text">
        <dt>
            <label for="text_4">Phone:</label>
        </dt>
        <dd>
            <input type="text" id="text_4" name="text_4" value=""/>

            <p class="description">Donec est urna, mattis a convallis suscipit sem Sed ultricies adipiscing lectus ut
                iaculis.</p>
        </dd>
    </dl>
    <h3>Additional Information</h3>
    <dl class="form-check">
        <dt>
            <label for="inter">Interest:</label>
        </dt>
        <dd>
            <input type="checkbox" id="check_1" name="checkbox_1" value="Knowledge"/> <label
                for="check_1">Knowledge</label><br/>
            <input type="checkbox" id="check_2" name="checkbox_1" value="Networks"/> <label
                for="check_2">Networks</label><br/>
            <input type="checkbox" id="check_3" name="checkbox_1" value="Partnership"/> <label
                for="check_3">Partnership</label>

            <p class="description">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
        </dd>
    </dl>
    <dl class="form-file">
        <dt>
            <label for="file_1">Picture:</label>
        </dt>
        <dd>
            <input type="file" id="file_1" name="file_1" value=""/>

            <p class="description">Ut eros arcu scelerisque sed congue sed vehicula vel justo.</p>
        </dd>
    </dl>
    <dl class="form-textarea">
        <dt>
            <label for="textarea_1">Comment:</label>
        </dt>
        <dd>
            <textarea rows="5" cols="10" id="textarea_1" name="textarea_1"></textarea>

            <p class="description">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
        </dd>
    </dl>
    <dl class="form-code">
        <dt>
            <label for="captcha_1">Captcha Code:</label>
        </dt>
        <dd>
            <img src="images/content/captcha.png" alt=""/>
            <input type="text" id="captcha_1" name="captcha_1" value=""/>

            <p class="description">Ut eros arcu scelerisque sed congue sed vehicula vel justo.</p>
        </dd>
    </dl>
    <div class="clearfix"></div>
</div>
</div>
