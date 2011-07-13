<!--<div class='mainInfo'>-->
<!---->
<!--	<div class="pageTitle">Deactivate User</div>-->
<!--    <div class="pageTitleBorder"></div>-->
<!--	<p>Are you sure you want to deactivate the user '--><?php //echo $user['username']; ?><!--'</p>-->
<!--	-->
<!--    --><?php //echo form_open("auth/deactivate/".$user['id']);?>
<!--    	-->
<!--      <p>-->
<!--      	<label for="confirm">Yes:</label>-->
<!--		<input type="radio" name="confirm" value="yes" checked="checked" />-->
<!--      	<label for="confirm">No:</label>-->
<!--		<input type="radio" name="confirm" value="no" />-->
<!--      </p>-->
<!--      -->
<!--      --><?php //echo form_hidden($csrf); ?>
<!--      --><?php //echo form_hidden(array('id'=>$user['id'])); ?>
<!--      -->
<!--      <p>--><?php //echo form_submit('submit', 'Submit');?><!--</p>-->
<!---->
<!--    --><?php //echo form_close();?>
<!---->
<!--</div>-->




<div id="contentwrap">
    <div id="page-title">
        <h1>2ndStack<span>Studio</span></h1>

        <div class="clearfix"></div>
    </div>
    <div id="page-content">
        <div class="columns">
            <div class="column">
                <div class="content">
                    <form action="<?php echo site_url("auth/deactivate/" . $user['id']);?>" method="post">
                        <div class="blocksection">
                            <h2>Deactivate User</h2>

                            <div class="blockcontent">
                                <h3>Are you sure you want to deactivate the user <?php echo $user['username']; ?>?</h3>
                                <dl class="form-radio">

                                    <dd>
                                        <input type="radio" id="radio_1" name="confirm" value="yes" checked="checked"/>
                                        <label
                                                for="radio_1">Yes</label><br/>
                                        <input type="radio" id="radio_2" name="confirm" value="no"/> <label
                                            for="radio_2">No</label><br/>

                                    </dd>
                                          <?php echo form_hidden($csrf); ?>
                                          <?php echo form_hidden(array('id'=>$user['id'])); ?>
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
