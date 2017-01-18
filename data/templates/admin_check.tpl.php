<div class="toolbar">

<h2><?php echo $lang['file_check']?></h2>

</div>

<div class="wrapper">

  	<table width="100%" border="0" cellspacing="0" cellpadding="0" class="listtable">

      <tr>

        <th width="300"><?php echo $lang['file_name']?></th>

        <th width="80"><?php echo $lang['file_readable']?></th>

        <th width="80"><?php echo $lang['file_writeable']?></th>

        <th width="80"><?php echo $lang['file_execable']?></th>

<th><?php echo $lang['file_time']?></th>

      </tr>

  <tbody id="files">

  <? if($parent) { ?>

      <tr>

        <td><img src="<?php echo $parent['img']?>" border="0" align="absmiddle"> <a href="<?php echo $parent['folderlink']?>"><?php echo $parent['filename']?></a></td>

        <td>&nbsp;</td>

        <td>&nbsp;</td>

        <td>&nbsp;</td>

<td></td>

      </tr>

  <? } ?>

  <? if(is_array($folders)) { foreach($folders as $fd) { ?>      <tr>

        <td><img src="<?php echo $fd['img']?>" border="0" align="absmiddle"> <a href="<?php echo $fd['folderlink']?>"><?php echo $fd['filename']?></a></td>

        <td><img src="/static/images/yes.gif" border="0"></td>

        <td><img src="/static/images/<? if($fd['writeable']) { ?>yes.gif<? } else { ?>no.gif<? } ?>" border="0"></td>

<td></td>

        <td><?php echo $fd['filetime']?></td>

      </tr>

  <? } } ?>  <? if(is_array($filelist)) { foreach($filelist as $ff) { ?>      <tr>

        <td><img src="<?php echo $ff['img']?>" border="0" align="absmiddle"> <?php echo $ff['filename']?></td>

        <td><img src="/static/images/<? if($ff['readable']) { ?>yes.gif<? } else { ?>no.gif<? } ?>" border="0"></td>

        <td><img src="/static/images/<? if($ff['writeable']) { ?>yes.gif<? } else { ?>no.gif<? } ?>" border="0"></td>

<td><img src="/static/images/<? if($ff['execable']) { ?>yes.gif<? } else { ?>no.gif<? } ?>" border="0"></td>

        <td><?php echo $ff['filetime']?></td>

      </tr>

  <? } } ?>  </tbody>

    </table>

</div>

<script type="text/javascript">

$("#files tr").mouseover(function(){$(this).addClass("hover")}).mouseout(function(){$(this).removeClass("hover")});

$("#files tr:last").addClass("bottom");

</script>