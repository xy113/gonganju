<? if($operation=='edit') { ?>

<div class="toolbar">

<h2><?php echo $lang['image_category']?></h2>

<ul class="tab">

<li><a href="<?php echo $BASESCRIPT?>?action=<?php echo $action?>"><span><?php echo $lang['manage']?></span></a></li>

<li class="current"><a href="<?php echo $BASESCRIPT?>?action=<?php echo $action?>&operation=edit&cid=<?php echo $cid?>"><span><?php echo $lang['edit']?></span></a></li>

</ul>

</div>

<div class="wrapper">

  <form name="form1" method="post" action="<?php echo $BASESCRIPT?>?action=<?php echo $action?>&operation=edit">

  	<input type="hidden" name="formsubmit" value="yes">

<input type="hidden" name="formhash" value="<?php echo FORMHASH?>">

<input type="hidden" name="cid" value="<?php echo $cid?>">

    <table width="100%" border="0" cellspacing="0" cellpadding="0" class="formtable">

   <tr class="firstrow">

        <td colspan="2"><?php echo $lang['category_edit']?></td>

      </tr>

      <tr>

        <td class="bold" width="360"><?php echo $lang['category_name']?></td>

        <td>&nbsp;</td>

      </tr>

      <tr>

        <td><input type="text" class="text" name="categorynew[name]" value="<?php echo $category['name']?>"></td>

        <td>&nbsp;</td>

      </tr>

      <tr>

        <td class="bold"><?php echo $lang['category_parent']?></td>

        <td>&nbsp;</td>

      </tr>

      <tr>

        <td>

<select name="categorynew[fid]" class="select" style="width:300px;">

<option value="0">------</option><? if(is_array($categories)) { foreach($categories as $cat) { ?><option value="<?php echo $cat['cid']?>"<? if($category['fid']==$cat['cid']) { ?> selected="selected"<? } ?>><?php echo $cat['name']?></option><? } } ?></select>

</td>

        <td>&nbsp;</td>

      </tr>

      <tr>

        <td class="bold"><?php echo $lang['displayorder']?></td>

        <td>&nbsp;</td>

      </tr>

      <tr>

        <td><input type="text" class="text" name="categorynew[displayorder]" value="<?php echo $category['displayorder']?>"></td>

        <td>&nbsp;</td>

      </tr>

      <tr>

        <td class="bold"><?php echo $lang['category_status']?>　<input type="checkbox" class="checkbox" value="1" name="categorynew[status]"<? if($category['status']) { ?> checked="checked"<? } ?>></td>

        <td></td>

      </tr>

      <tr>

        <td class="bold"><?php echo $lang['keywords']?></td>

        <td>&nbsp;</td>

      </tr>

      <tr>

        <td><input type="text" class="text" name="categorynew[keywords]" value="<?php echo $category['keywords']?>"></td>

        <td>&nbsp;</td>

      </tr>

  <tr>

        <td class="bold"><?php echo $lang['description']?></td>

        <td>&nbsp;</td>

      </tr>

      <tr>

        <td><textarea name="categorynew[description]" class="textarea" style="width:300px; height:100px;"><?php echo $category['description']?></textarea></td>

        <td>&nbsp;</td>

      </tr>

  <tr>

        <td><input type="submit" class="button submit" value="<?php echo $lang['submit']?>"></td>

        <td>&nbsp;</td>

      </tr>

    </table>

    </form>

</div>

<? } else { ?>

<div class="toolbar">

<h2><?php echo $lang['image_category']?></h2>

</div>

<div class="wrapper">

  <form name="<?php echo $action?>" method="post" action="<?php echo $BASESCRIPT?>?action=<?php echo $action?>">

  	<input type="hidden" name="formsubmit" value="yes">

<input type="hidden" name="formhash" value="<?php echo FORMHASH?>">

    <table width="100%" border="0" cellspacing="0" cellpadding="0" class="listtable">

      <tr>

        <th width="50"><?php echo $lang['category_id']?></th>

        <th width="80"><?php echo $lang['displayorder']?></th>

        <th width="400"><?php echo $lang['category_name']?></th>

        <th width="80"><?php echo $lang['category_records']?></th>

        <th width="90"><?php echo $lang['category_status']?></th>

        <th>&nbsp;</th>

      </tr>

  <? if(is_array($categories['category'])) { foreach($categories['category'] as $cat) { ?>  <tbody id="cat_<?php echo $cat['cid']?>">

  <tr onMouseOver="$(this).addClass('hover')" onMouseOut="$(this).removeClass('hover')">

        <td><?php echo $cat['cid']?></td>

        <td><input type="text" class="text text60" name="categorynew[<?php echo $cat['cid']?>][displayorder]" value="<?php echo $cat['displayorder']?>"></td>

        <td><input type="text" class="text text160" style="font-weight:bold;" name="categorynew[<?php echo $cat['cid']?>][name]" value="<?php echo $cat['name']?>"> <a href="###" class="addcat" onclick="addChild(<?php echo $cat['cid']?>)"><?php echo $lang['category_addchild']?></a></td>

        <td><?php echo $cat['records']?></td>

        <td><input type="checkbox" class="checked" value="1" name="categorynew[<?php echo $cat['cid']?>][status]"<? if($cat['status']) { ?> checked="checked"<? } ?>></td>

        <td><a href="<?php echo $BASESCRIPT?>?action=<?php echo $action?>&operation=edit&cid=<?php echo $cat['cid']?>"><?php echo $lang['edit']?></a> <a href="<?php echo $BASESCRIPT?>?action=<?php echo $action?>&operation=delete&cid=<?php echo $cat['cid']?>"><?php echo $lang['del']?></a></td>

      </tr>

  <? if(is_array($categories['sub'])) { foreach($categories['sub'] as $sub) { ?>  <? if($sub['fid']==$cat['cid']) { ?>

  <tr onMouseOver="$(this).addClass('hover')" onMouseOut="$(this).removeClass('hover')">

        <td><?php echo $sub['cid']?></td>

        <td><input type="text" class="text text60" name="categorynew[<?php echo $sub['cid']?>][displayorder]" value="<?php echo $sub['displayorder']?>"></td>

        <td>|！！<input type="text" class="text text160" name="categorynew[<?php echo $sub['cid']?>][name]" value="<?php echo $sub['name']?>"></td>

        <td><?php echo $sub['records']?></td>

        <td><input type="checkbox" class="checked" value="1" name="categorynew[<?php echo $sub['cid']?>][status]"<? if($sub['status']) { ?> checked="checked"<? } ?>></td>

        <td><a href="<?php echo $BASESCRIPT?>?action=<?php echo $action?>&operation=edit&cid=<?php echo $sub['cid']?>"><?php echo $lang['edit']?></a> <a href="<?php echo $BASESCRIPT?>?action=<?php echo $action?>&operation=delete&cid=<?php echo $cat['cid']?>"><?php echo $lang['del']?></a></td>

      </tr>

  <? } ?>

  <? } } ?>  </tbody>

  <? } } ?>  <tbody id="newcat"></tbody>

  <tr>

  	<td></td>

<td colspan="5"><div class="addtr"><a href="###" onclick="addCat()"><?php echo $lang['category_addnew']?></a></div></td>

  </tr>

  <tr class="bottom">

  	<td colspan="6">

<input type="submit" class="button" value="<?php echo $lang['submit']?>">

<input type="button" class="button" value="<?php echo $lang['refresh']?>" onclick="LoadPage()">

</td>

  </tr>

    </table>

  </form>

</div>

<script type="text/javascript">

function addCat(){

$("#newcat").append('<tr><td><input type="hidden" name="newfid[]" value="0"><input type="hidden" name="newtype[]" value="category"</td><td><input type="text" class="text text60" name="neworder[]" value="0"></td>'+

        '<td><input type="text" class="text text160" style="font-weight:bold;" name="newname[]" value="<?php echo $lang['category_newname']?>"></td><td></td>'+

        '<td><input type="checkbox" class="checked" value="1" name="newstatus[]" checked="checked"></td><td></td></tr>');

}

function addChild(id){

$("#cat_"+id).append('<tr><td><input type="hidden" name="newfid[]" value="'+id+'"><input type="hidden" name="newtype[]" value="sub"></td><td><input type="text" class="text text60" name="neworder[]" value="0"></td>'+

        '<td>|！！<input type="text" class="text text160" name="newname[]" value="<?php echo $lang['category_newname']?>"></td><td></td><td><input type="checkbox" class="checked" name="newstatus[]" checked="checked"></td><td></td></tr>');

}

</script>

<? } ?>