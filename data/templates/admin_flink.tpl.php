<? if($operation=='edit') { ?>

<div class="toolbar">

<h2><?php echo $lang['friendlink']?></h2>

<ul class="tab">

<li><a href="<?php echo $BASESCRIPT?>?action=flink"><span><?php echo $lang['manage']?></span></a></li>

<li class="current"><a href="<?php echo $BASESCRIPT?>?action=flink&operation=edit&siteid=<?php echo $siteid?>"><span><?php echo $lang['edit']?></span></a></li>

</ul>

</div>

<div class="wrapper">

<form method="post" action="<?php echo $BASESCRIPT?>?action=flink&operation=edit">

<input type="hidden" name="formsubmit" value="yes">

<input type="hidden" name="formhash" value="<?php echo FORMHASH?>" />

<input type="hidden" name="siteid" value="<?php echo $siteid?>">

  <table width="100%" border="0" cellspacing="0" cellpadding="0" class="formtable">

  	<tr class="firstrow">

  <td colspan="2"><?php echo $lang['flink_edit']?></td>

</tr>

<tr>

  <td width="520" class="bold"><?php echo $lang['flink_sitename']?></td>

  <td>&nbsp;</td>

</tr>

<tr>

  <td><input type="text" class="text text500" name="sitenew[sitename]" value="<?php echo $site['sitename']?>"></td>

  <td>&nbsp;</td>

</tr>

<tr>

  <td class="bold"><?php echo $lang['flink_siteurl']?></td>

  <td>&nbsp;</td>

</tr>

<tr>

  <td><input type="text" class="text text500" name="sitenew[siteurl]" value="<?php echo $site['siteurl']?>"></td>

  <td>&nbsp;</td>

</tr>

<tr>

  <td class="bold"><?php echo $lang['flink_logo']?></td>

  <td>&nbsp;</td>

</tr>

<tr>

  <td><input type="text" class="text text500" name="sitenew[logo]" value="<?php echo $site['logo']?>"></td>

  <td>&nbsp;</td>

</tr>

<tr>

  <td class="bold"><?php echo $lang['displayorder']?></td>

  <td>&nbsp;</td>

</tr>

<tr>

  <td><input type="text" class="text text500" name="sitenew[displayorder]" value="<?php echo $site['displayorder']?>"></td>

  <td>&nbsp;</td>

</tr>

<tr>

  <td class="bold"><?php echo $lang['description']?></td>

  <td>&nbsp;</td>

</tr>

<tr>

  <td><textarea name="sitenew[description]" class="textarea" style="width:500px;"><?php echo $site['description']?></textarea></td>

  <td>&nbsp;</td>

</tr>

<tr>

  <td><input type="submit" class="button submit" name="button-submit" value="<?php echo $lang['submit']?>"></td>

  <td>&nbsp;</td>

</tr>

  </table>

  </form>

</div>

<? } else { ?>

<div class="toolbar">

<h2><?php echo $lang['friendlink']?></h2>

<span class="records"><?php echo $lang['total']?><?php echo $totalrecords?><?php echo $lang['total_records']?></span>

</div>

<div class="wrapper">

<form method="post" name="sites" action="<?php echo $BASESCRIPT?>?action=flink&page=<?php echo $page?>">

<input type="hidden" name="formsubmit" value="yes">

<input type="hidden" name="formhash" value="<?php echo FORMHASH?>" />

  	<table width="100%" border="0" cellspacing="0" cellpadding="0" class="listtable">

      <tr>

        <th width="50"><input type="checkbox" class="checkbox" onClick="checkAll(this,'delete[]')"> <?php echo $lang['delete_check']?></th>

        <th width="180"><?php echo $lang['flink_sitename']?></th>

        <th width="320"><?php echo $lang['flink_siteurl']?></th>

        <th width="100"><?php echo $lang['displayorder']?></th>

        <th width="80"><?php echo $lang['display']?></th>

        <th>&nbsp;</th>

      </tr>

  <? if(is_array($sites)) { foreach($sites as $site) { ?>      <tr onmouseover="$(this).addClass('hover')" onmouseout="$(this).removeClass('hover')">

        <td><input type="checkbox" class="checkbox" name="delete[]" value="<?php echo $site['siteid']?>"></td>

        <td><input type="text" class="text text160" value="<?php echo $site['sitename']?>" name="sitenew[<?php echo $site['siteid']?>][sitename]"></td>

        <td><input type="text" class="text" value="<?php echo $site['siteurl']?>" name="sitenew[<?php echo $site['siteid']?>][siteurl]"></td>

        <td><input type="text" class="text text60" value="<?php echo $site['displayorder']?>" name="sitenew[<?php echo $site['siteid']?>][displayorder]"></td>

        <td><input type="checkbox" class="checkbox" value="1" name="sitenew[<?php echo $site['siteid']?>][display]"<? if($site['display']) { ?> checked="checked"<? } ?>></td>

        <td><a href="<?php echo $BASESCRIPT?>?action=flink&operation=edit&siteid=<?php echo $site['siteid']?>"><?php echo $lang['edit']?></a></td>

      </tr>

  <? } } ?>  <tbody id="newsite"></tbody>

      <tr>

        <td></td>

        <td colspan="5"><div class="addtr"><a href="javascript:;" onclick="addLink()"><?php echo $lang['flink_addnew']?></a></div></td>

      </tr>

  <tr class="bottom">

        <td><input type="checkbox" class="checkbox" onClick="checkAll(this,'delete[]')"> <?php echo $lang['delete_check']?></td>

        <td colspan="5">

<span class="pagebox"><?php echo $pagelink?></span>

<input type="submit" name="button-submit" class="button" value="<?php echo $lang['submit']?>">

<input type="button" class="button" value="<?php echo $lang['refresh']?>" onclick="LoadPage('page=<?php echo $page?>')">

</td>

      </tr>

    </table>

</form>

</div>

<script type="text/javascript">

function addLink(){

$("#newsite").append('<tr><td></td><td><input type="text" class="text text160" name="newsitename[]"></td><td><input type="text" class="text" name="newsiteurl[]"></td>'+

        '<td><input type="text" class="text text60" name="neworder[]" value="0"></td><td><input type="checkbox" class="checkbox" value="1" name="newdisplay[]"></td><td></td></tr>');

}

</script>

<? } ?>