<?php
   if (isset($querys) && count($querys) > 0) {
    ?>
<h1>Data</h1>
<table width="400" border="1">
    <tr>
        <th>No</th>
        <th>title</th>
        <th>category</th>
        <th>content</th>
        <th>Edit</th>
        <th>Delete</th>
    </tr>
    <?php
     $i = 0;
    foreach ($querys as $row) {
        $i++;
        echo "<tr class=\"record\">";
        echo    "<td>$i</td>";
        echo    "<td>$row->title</td>";
        echo    "<td>$row->category</td>";
        echo    "<td>$row->contents</td>";
         echo    "<td><a href=".base_url()."index.php/article/edit/$row->id>Edit</a></td>";
         echo    "<td><a href=".base_url()."index.php/article/delete/$row->id>Delete</a></td>";
        echo  "</tr>";
    }
    ?>
</table>
    <?php

}
?>