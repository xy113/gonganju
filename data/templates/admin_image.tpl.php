<div class="toolbar">

<span class="right">

<form name="search" action="">

<input type="hidden" name="action" value="<?php echo $action?>">

<select name="cid" id="cid">

<option value="0" class="bold"><?php echo $lang['image_all']?></option><? if(is_array($categories['category'])) { foreach($categories['category'] as $cat) { ?><option value="<?php echo $cat['cid']?>" class="bold"<? if($cid==$cat['cid']) { ?> selected="selected"<? } ?>><?php echo $cat['name']?></option><? if(is_array($categories['sub'])) { foreach($categories['sub'] as $sub) { if($sub['fid']==$cat['cid']) { ?>

<option value="<?php echo $sub['cid']?>"<? if($cid==$sub['cid']) { ?> selected="selected"<? } ?>>|��<?php echo $sub['name']?></option>

<? } } } } } ?></select>

<input type="text" class="text text200" name="keywords" value="<?php echo $keywords?>">

<input type="submit" class="button search" value="<?php echo $lang['search']?>">

</form>

</span>

<h2><?php echo $lang['image_manage']?></h2>

<ul class="tab">

<li class="current"><a href="<?php echo $BASESCRIPT?>?action=<?php echo $action?>"><span><?php echo $lang['manage']?></span></a></li>

<li><a href="<?php echo $BASESCRIPT?>?action=<?php echo $action?>&operation=add&cid=<?php echo $cid?>"><span><?php echo $lang['add']?></span></a></li>

</ul>

</div>

<div class="wrapper">

  <form name="<?php echo $action?>" id="<?php echo $action?>" method="post" action="">

  <input type="hidden" name="formsubmit" value="yes">

  <input type="hidden" name="formhash" value="<?php echo FORMHASH?>">

  <table width="100%" border="0" cellspacing="0" cellpadding="0" class="listtable">

    <tr>

      <th width="55"><input type="checkbox" class="checkbox" onclick="checkAll(this,'id[]')"> <?php echo $lang['selectall']?></th>

      <th>ͼ�����</th>

      <th width="80">ͼ�����</th>

      <th width="80"><?php echo $lang['article_author']?></th>

      <th width="50"><?php echo $lang['article_views']?></th>

  <th width="50"><?php echo $lang['recommend']?></th>

      <th width="50"><?php echo $lang['audited']?></th>

      <th width="140"><?php echo $lang['pubtime']?></th>

      <th width="100">&nbsp;</th>

    </tr><? if(is_array($images)) { foreach($images as $img) { ?>    <tr onmouseOver="$(this).addClass('hover')" onmouseOut="$(this).removeClass('hover')">

      <td><input type="checkbox" class="checkbox" name="id[]" value="<?php echo $img['id']?>"></td>

      <td><a href="views.php?id=<?php echo $img['id']?>" target="_blank"><?php echo $img['title']?></a></td>

      <td><?php echo $img['name']?></td>

      <td><?php echo $img['author']?></td>

      <td><?php echo $img['views']?></td>

  <td><img src="/static/images/<? if($img['recommend']) { ?>yes.gif<? } else { ?>no.gif<? } ?>" border="0" /></td>

      <td><img src="/static/images/<? if($img['audited']) { ?>yes.gif<? } else { ?>no.gif<? } ?>" border="0" /></td>

      <td><?php echo $img['pubtime']?></td>

      <td><a href="<?php echo $BASESCRIPT?>?action=<?php echo $action?>&operation=edit&id=<?php echo $img['id']?>"><?php echo $lang['edit']?></a> <a href="<?php echo $BASESCRIPT?>?action=imagefile&operation=upload&gid=<?php echo $img['id']?>">�ϴ�ͼƬ</a></td>

    </tr><? } } ?><tr class="bottom">

<td><input type="checkbox" class="checkbox" onclick="checkAll(this,'id[]')"> <?php echo $lang['selectall']?></td>

<td colspan="8">

<span class="pagebox"><?php echo $pagelink?></span>

<select name="mod" id="mod" class="select">

<option value="delete">ɾ��</option>

<option value="recommend">��Ϊ�Ƽ�</option>

<option value="unrecommend">ȡ���Ƽ�</option>

<option value="audited">ͨ�����</option>

<option value="unaudited">ȡ�����</option>

<option value="move">�ƶ�����</option>

</select>

<select name="target" id="target" style="display:none;"><? if(is_array($categories['category'])) { foreach($categories['category'] as $cat) { ?><option value="<?php echo $cat['cid']?>"<? if($cid==$cat['cid']) { ?> selected="selected"<? } if(!$cat['status']) { ?> disabled="disabled"<? } ?> class="bold"><?php echo $cat['name']?></option><? if(is_array($categories['sub'])) { foreach($categories['sub'] as $sub) { if($sub['fid']==$cat['cid']) { ?>

<option value="<?php echo $sub['cid']?>"<? if($cid==$sub['cid']) { ?> selected="selected"<? } if(!$sub['status']) { ?> disabled="disabled"<? } ?>>|��<?php echo $sub['name']?></option>

<? } } } } } ?></select>

<input type="submit" class="button" value="<?php echo $lang['submit']?>">

<input type="button" class="button" value="<?php echo $lang['refresh']?>" onclick="LoadPage()">

</td>

</tr>

  </table>

  </form>

</div>

<script type="text/javascript">

$("#mod").change(function(){

if($(this).val()=='move'){

$("#target").show();

}else {

$("#target").hide();

}

});

</script>