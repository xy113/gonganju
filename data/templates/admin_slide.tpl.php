<? if($operation=='add' || $operation=='edit') { ?>

<div class="toolbar">

<h2><?php echo $lang['about_manage']?></h2>

<ul class="tab">

<li><a href="<?php echo $BASESCRIPT?>?action=<?php echo $action?>"><span><?php echo $lang['manage']?></span></a></li>

<? if($operation=='add') { ?>

<li class="current"><a href="<?php echo $BASESCRIPT?>?action=<?php echo $action?>&operation=add"><span><?php echo $lang['add']?></span></a></li>

<? } else { ?>

<li class="current"><a href="<?php echo $BASESCRIPT?>?action=<?php echo $action?>&operation=edit&id=<?php echo $id?>"><span><?php echo $lang['edit']?></span></a></li>

<? } ?>

</ul>

</div>

<div class="wrapper">

<form method="post" name="formslide" id="formslide" enctype="multipart/form-data" action="<?php echo $BASESCRIPT?>?action=<?php echo $action?>&operation=<?php echo $operation?>">

<input type="hidden" name="formsubmit" value="yes">

<input type="hidden" name="formhash" value="<?php echo FORMHASH?>" />

<input type="hidden" name="id" value="<?php echo $id?>" />

<table width="100%" border="0" cellspacing="0" cellpadding="0" class="formtable">

<tr class="firstrow">

  <td class="bold" colspan="2"><?php echo $lang['slide_manage']?></td>

</tr>

<tr>

<td class="bold" width="40"><?php echo $lang['title']?></td>

<td><input type="text" class="text text500" name="slidenew[title]" value="<?php echo $slide['title']?>"></td>

</tr>

<tr>

<td class="bold" width="40"><?php echo $lang['link']?></td>

<td><input type="text" class="text text500" name="slidenew[linkurl]" value="<?php echo $slide['linkurl']?>"></td>

</tr>

<tr>

  <td class="bold"><?php echo $lang['image']?></td>

  <td><input type="text" class="text text500" name="slidenew[image]" id="slide_image" value="<?php echo $slide['image']?>"> 

  	<b class="button" tabindex="0">

<span>浏览文件</span>

<input type="file" name="file" class="file" id="avatar_file" onchange="slide_image.value=this.value" />

</b> 

  </td>

</tr>

<tr>

  <td class="bold"><?php echo $lang['description']?></td>

  <td><textarea class="textarea" name="slidenew[description]" style="width:500px;"><?php echo $slide['description']?></textarea></td>

</tr>

<tr>

  <td colspan="2"><input type="submit" class="button submit" name="button-submit" value="<?php echo $lang['submit']?>"></td>

</tr>

</table>

</form>

</div>

<script type="text/javascript">

$("#formslide").submit(function(){

var title = $("input[name='slidenew[title]']").val();

var image = $("input[name='slidenew[image]']").val();

if(!title){

alert("标题不能为空");

return false;

}

if(!image){

alert("图片不能留空");

return false;

}

return true;

});

</script>

<? } else { ?>

<div class="toolbar">

<h2><?php echo $lang['slide_manage']?></h2>

<ul class="tab">

<li class="current"><a href="<?php echo $BASESCRIPT?>?action=<?php echo $action?>"><span><?php echo $lang['manage']?></span></a></li>

<li><a href="<?php echo $BASESCRIPT?>?action=<?php echo $action?>&operation=add"><span><?php echo $lang['add']?></span></a></li>

</ul>

</div>

<div class="wrapper">

<form name="about" method="post" action="<?php echo $BASESCRIPT?>?action=<?php echo $action?>">

<input type="hidden" name="formsubmit" value="yes" />

<input type="hidden" name="formhash" value="<?php echo FORMHASH?>" />

    <table width="100%" border="0" cellspacing="0" cellpadding="0" class="listtable">

      <tr>

        <th width="50"><input type="checkbox" class="checkbox" onclick="checkAll(this,'delete[]')"> <?php echo $lang['delete_check']?></th>

        <th><?php echo $lang['title']?></th>

        <th width="100"><?php echo $lang['about_lastedit']?></th>

        <th width="160"><?php echo $lang['about_time']?></th>

        <th width="60">&nbsp;</th>

      </tr>

  <tbody id="abouts">

  <? if(is_array($slides)) { foreach($slides as $sd) { ?>      <tr onMouseOver="$(this).addClass('hover')" onMouseOut="$(this).removeClass('hover')">

        <td><input type="checkbox" class="checkbox" name="delete[]" value="<?php echo $sd['id']?>"></td>

        <td><a href="<?php echo $sd['linkurl']?>" target="_blank"><?php echo $sd['title']?></a></td>

        <td><?php echo $sd['author']?></td>

        <td><?php echo $sd['dateline']?></td>

        <td><a href="<?php echo $BASESCRIPT?>?action=<?php echo $action?>&operation=edit&id=<?php echo $sd['id']?>"><?php echo $lang['edit']?></a></td>

      </tr>

  <? } } ?>  </tbody>

  <tr class="bottom">

<td colspan="5"><input type="submit" class="button" value="<?php echo $lang['submit']?>"> <input type="button" class="button" value="<?php echo $lang['refresh']?>" onClick="LoadPage('page=<?php echo $page?>')"></td>

  </tr>

  </table>

  </form>

</div>

<? } ?>