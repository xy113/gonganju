<div class="toolbar">

<h2><?php echo $lang['image_manage']?></h2>

<ul class="tab">

<? if($operation=='add') { ?>

<li><a href="<?php echo $BASESCRIPT?>?action=<?php echo $action?>&cid=<?php echo $cid?>"><span><?php echo $lang['manage']?></span></a></li>

<li class="current"><a href="<?php echo $BASESCRIPT?>?action=<?php echo $action?>&operation=add&cid=<?php echo $cid?>"><span><?php echo $lang[$operation]?></span></a></li>

<? } else { ?>

<li><a href="<?php echo $BASESCRIPT?>?action=<?php echo $action?>&cid=<?php echo $video['cid']?>"><span><?php echo $lang['manage']?></span></a></li>

<li class="current"><a href="<?php echo $BASESCRIPT?>?action=<?php echo $action?>&operation=edit&id=<?php echo $id?>"><span><?php echo $lang[$operation]?></span></a></li>

<? } ?>

</ul>

</div>

<div class="wrapper">

  <form name="image" id="image" method="post" enctype="multipart/form-data" action="<?php echo $BASESCRIPT?>?action=<?php echo $action?>&operation=<?php echo $operation?>">

  	<input type="hidden" name="formsubmit" value="yes" />

  	<input type="hidden" name="formhash" value="<?php echo FORMHASH?>" />

<input type="hidden" name="id" value="<?php echo $id?>" />

    <table width="100%" border="0" cellspacing="0" cellpadding="0" class="formtable">

      <tr class="firstrow">

        <td class="bold" width="80">编辑图组</td>

        <td>&nbsp;</td>

      </tr>

      <tr>

        <td class="bold">图组标题</td>

        <td><input type="text" class="text text500" name="imagenew[title]" value="<?php echo $image['title']?>"></td>

      </tr>

  <tr class="odd">

        <td class="bold"><?php echo $lang['tags']?></td>

        <td><input type="text" class="text text500" name="imagenew[tags]" value="<?php echo $image['tags']?>"></td>

      </tr>

      <tr>

  	<td class="bold">图组分类</td>

        <td>

<select class="select" name="imagenew[cid]" style="width:500px; padding:5px 2px;"><? if(is_array($categories['category'])) { foreach($categories['category'] as $cat) { ?><option value="<?php echo $cat['cid']?>"<? if($cid==$cat['cid']) { ?> selected="selected"<? } if(!$cat['status']) { ?> disabled="disabled"<? } ?> class="bold"><?php echo $cat['name']?></option><? if(is_array($categories['sub'])) { foreach($categories['sub'] as $sub) { if($sub['fid']==$cat['cid']) { ?>

<option value="<?php echo $sub['cid']?>"<? if($cid==$sub['cid']) { ?> selected="selected"<? } if(!$sub['status']) { ?> disabled="disabled"<? } ?>>|—<?php echo $sub['name']?></option>

<? } } } } } ?></select>

</td>

      </tr>

  <tr>

        <td class="bold">图组封面</td>

        <td>

<input type="text" class="text text500" name="imagenew[image]" id="image_image" value="<?php echo $image['image']?>">

<b class="button" tabindex="0">

<span>浏览文件</span>

<input type="file" name="file" class="file" onchange="image_image.value=this.value" />

</b>

</td>

      </tr>

  <tr>

        <td class="bold">图组说明</td>

        <td><textarea name="imagenew[content]" style="width:90%; height:200px;"><?php echo $video['content']?></textarea></td>

      </tr>

      <tr>

        <td colspan="2">

<input type="checkbox" class="checkbox" value="1" name="imagenew[audited]" checked="checked"> <?php echo $lang['audited']?> 

<input type="checkbox" class="checkbox" value="1" name="imagenew[recommend]"<? if($image['recommend']) { ?> checked="checked"<? } ?>> <?php echo $lang['recommend']?> 

<input type="checkbox" class="checkbox" value="1" name="imagenew[allowcomment]"<? if($image['allowcomment']) { ?> checked="checked"<? } ?>> <?php echo $lang['allowcomment']?> 

<input type="checkbox" class="checkbox" value="1" name="imagenew[allowvote]"<? if($image['allowvote']) { ?> checked="checked"<? } ?>> <?php echo $lang['allowvote']?>

</td>

<tr class="bottom">

<td colspan="2"><input type="submit" class="button submit" value="<?php echo $lang['submit']?>"></td>

        </tr>

    </table>

    </form>

</div>

<script type="text/javascript">

$("#video").submit(function(){

if(!$("input[name='imagenew[title]']").val()){

alert("标题不能留空，请重新输入。");

return false;

}

if(!$("input[name='imagenew[image]']").val()){

alert("视频截图不能留空，请重新输入。");

return false;

}

return true;

})

</script>