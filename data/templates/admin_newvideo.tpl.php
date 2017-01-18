<div class="toolbar">

<h2><?php echo $lang['video_manage']?></h2>

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

  <form name="video" id="video" method="post" enctype="multipart/form-data" action="<?php echo $BASESCRIPT?>?action=<?php echo $action?>&operation=<?php echo $operation?>">

  	<input type="hidden" name="formsubmit" value="yes" />

  	<input type="hidden" name="formhash" value="<?php echo FORMHASH?>" />

<input type="hidden" name="id" value="<?php echo $id?>" />

    <table width="100%" border="0" cellspacing="0" cellpadding="0" class="formtable">

      <tr class="firstrow">

        <td class="bold" width="80">编辑视频</td>

        <td>&nbsp;</td>

      </tr>

      <tr>

        <td class="bold">视频标题</td>

        <td><input type="text" class="text text500" name="videonew[title]" value="<?php echo $video['title']?>"></td>

      </tr>

  <tr class="odd">

        <td class="bold"><?php echo $lang['tags']?></td>

        <td><input type="text" class="text text500" name="videonew[tags]" value="<?php echo $video['tags']?>"></td>

      </tr>

      <tr>

  	<td class="bold">视频分类</td>

        <td>

<select class="select" name="videonew[cid]" style="width:500px; padding:5px 2px;"><? if(is_array($categories['category'])) { foreach($categories['category'] as $cat) { ?><option value="<?php echo $cat['cid']?>"<? if($cid==$cat['cid']) { ?> selected="selected"<? } if(!$cat['status']) { ?> disabled="disabled"<? } ?> class="bold"><?php echo $cat['name']?></option><? if(is_array($categories['sub'])) { foreach($categories['sub'] as $sub) { if($sub['fid']==$cat['cid']) { ?>

<option value="<?php echo $sub['cid']?>"<? if($cid==$sub['cid']) { ?> selected="selected"<? } if(!$sub['status']) { ?> disabled="disabled"<? } ?>>|—<?php echo $sub['name']?></option>

<? } } } } } ?></select>

</td>

      </tr>

  <tr>

        <td class="bold">视频截图</td>

        <td>

<input type="text" class="text text500" name="videonew[image]" id="video_image" value="<?php echo $video['image']?>">

<b class="button" tabindex="0">

<span>浏览文件</span>

<input type="file" name="file" class="file" onchange="video_image.value=this.value" />

</b>

</td>

      </tr>

  <tr class="odd">

        <td class="bold">视频地址</td>

        <td><input type="text" class="text text500" name="videonew[videourl]" value="<?php echo $video['videourl']?>"></td>

      </tr>

  <tr>

        <td class="bold">视频说明</td>

        <td><textarea name="videonew[content]" style="width:90%; height:200px;"><?php echo $video['content']?></textarea></td>

      </tr>

      <tr>

        <td colspan="2">

<input type="checkbox" class="checkbox" value="1" name="videonew[audited]" checked="checked"> <?php echo $lang['audited']?> 

<input type="checkbox" class="checkbox" value="1" name="videonew[recommend]"<? if($video['recommend']) { ?> checked="checked"<? } ?>> <?php echo $lang['recommend']?> 

<input type="checkbox" class="checkbox" value="1" name="videonew[allowcomment]"<? if($video['allowcomment']) { ?> checked="checked"<? } ?>> <?php echo $lang['allowcomment']?> 

<input type="checkbox" class="checkbox" value="1" name="videonew[allowvote]"<? if($video['allowvote']) { ?> checked="checked"<? } ?>> <?php echo $lang['allowvote']?>

</td>

<tr class="bottom">

<td colspan="2"><input type="submit" class="button submit" value="<?php echo $lang['submit']?>"></td>

        </tr>

    </table>

    </form>

</div>

<script type="text/javascript">

$("#video").submit(function(){

if(!$("input[name='videonew[title]']").val()){

alert("标题不能留空，请重新输入。");

return false;

}

if(!$("input[name='videonew[image]']").val()){

alert("视频截图不能留空，请重新输入。");

return false;

}

if(!$("input[name='videonew[videourl]']").val()){

alert("视频地址不能留空，请重新输入。");

return false;

}

return true;

})

</script>