<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Data User</title>
  </head>
  <body>
    <div id="form_input" title="Edit Data">
      <table>
        <?php echo validation_errors(); ?>
        <?php echo form_open('article/update'); ?>
        <tr >
            <td> <?php echo form_label('title: '); ?></td><?php echo form_hidden('id',$id); ?>
            <td> <?php echo form_input('title',$title,'id="tit"'); ?></td>
        </tr>
        <tr>
            <td> <?php echo form_label('category : ');?> </td>
            <td> <?php echo form_input('category',$category,'id="cat"'); ?></td>
        </tr>
         <tr>
            <td> <?php echo form_label('Content : ');?> </td>
            <td> <?php echo form_input('contents',$contents,'id="cont"'); ?></td>
        </tr>
       
        <tr>
                <td><?php echo form_submit('submit','Update')?>
        </tr>
      </table>
      </div>
  </body>
</html>