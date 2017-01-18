<div class="toolbar">

<h2><?php echo $lang['source_manage']?> - <?php echo $lang['source_'.$type]?></h2>

</div>

<div class="wrapper">

  <form name="form1" method="post" action="">

  	<input type="hidden" name="formsubmit" value="yes">

<input type="hidden" name="formhash" value="<?php echo FORMHASH?>">

<input type="hidden" name="type" value="<?php echo $type?>">

    <table width="100%" border="0" cellspacing="0" cellpadding="0" class="listtable">

      <tr>

        <th width="50"><input type="checkbox" class="checkbox" onclick="checkAll(this,'delete[]')"> <?php echo $lang['delete_check']?></th>

        <th width="80"><?php echo $lang['displayorder']?></th>

        <th width="200"><?php echo $lang['source_sitename']?></th>

        <th><?php echo $lang['source_siteurl']?></th>

      </tr>

  <? if(is_array($sources)) { foreach($sources as $source) { ?>      <tr onmouseover="$(this).addClass('hover')" onmouseout="$(this).removeClass('hover')">

        <td><input type="checkbox" class="checkbox" name="delete[]" value="<?php echo $source['siteid']?>"></td>

        <td><input type="text" class="text text60" name="sitenew[<?php echo $source['siteid']?>][displayorder]" value="<?php echo $source['displayorder']?>"></td>

        <td><input type="text" class="text text160" name="sitenew[<?php echo $source['siteid']?>][sitename]" value="<?php echo $source['sitename']?>"></td>

        <td><input type="text" class="text" name="sitenew[<?php echo $source['siteid']?>][siteurl]" value="<?php echo $source['siteurl']?>"></td>

      </tr>

  <? } } ?>  <tbody id="newsource"></tbody>

  <tr>

  	<td></td>

<td colspan="3"><div class="addtr"><a href="###" id="addsource"><?php echo $lang['source_addnew']?></a></div></td>

  </tr>

  <tr class="bottom">

  	<td><input type="checkbox" class="checkbox" onclick="checkAll(this,'delete[]')"> <?php echo $lang['delete_check']?></td>

<td colspan="3">

<input type="submit" class="button" value="<?php echo $lang['submit']?>">

<input type="button" class="button" value="<?php echo $lang['refresh']?>" onclick="LoadPage('type=<?php echo $type?>')">

</td>

  </tr>

    </table>

    </form>

</div>

<script type="text/javascript">

$("#addsource").click(function(){

$("#newsource").append('<tr><td><input type="hidden" name="newtype[]" value="<?php echo $type?>"></td><td><input type="text" class="text text60" name="neworder[]" value="0"></td>'+

        '<td><input type="text" class="text text160" name="newsitename[]"></td><td><input type="text" class="text" name="newsiteurl[]"></td></tr>');

})

</script>