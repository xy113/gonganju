<? if($operation=='add' || $operation=='edit') { ?>

<script src="source/ueditor/editor_config.js" type="text/javascript"></script>

<script src="source/ueditor/editor_all_min.js" type="text/javascript"></script>

<link rel="stylesheet" type="text/css" href="source/ueditor/themes/default/ueditor.css"/>

<div class="toolbar">

<h2><?php echo $lang['about_manage']?></h2>

<ul class="tab">

<li><a href="<?php echo $BASESCRIPT?>?action=about"><span><?php echo $lang['manage']?></span></a></li>

<? if($operation=='add') { ?>

<li class="current"><a href="<?php echo $BASESCRIPT?>?action=about&operation=add"><span><?php echo $lang['add']?></span></a></li>

<? } else { ?>

<li class="current"><a href="<?php echo $BASESCRIPT?>?action=about&operation=edit&id=<?php echo $id?>"><span><?php echo $lang['edit']?></span></a></li>

<? } ?>

</ul>

</div>

<div class="wrapper">

<form method="post" name="formabout" id="formabout" action="<?php echo $BASESCRIPT?>?action=about&operation=<?php echo $operation?>">

<input type="hidden" name="formsubmit" value="yes">

<input type="hidden" name="formhash" value="<?php echo FORMHASH?>" />

<input type="hidden" name="id" value="<?php echo $id?>" />

<table width="100%" border="0" cellspacing="0" cellpadding="0" class="formtable" style="table-layout:fixed;">

<tr class="firstrow">

  <td class="bold" width="60"><?php echo $lang['article_write']?></td>

  <td></td>

</tr>

<tr>

<td class="bold"><?php echo $lang['title']?></td>

<td><input type="text" class="text text500" name="articlenew[title]" value="<?php echo $article['title']?>"></td>

</tr>

<tr>

  <td class="bold"><?php echo $lang['keywords']?></td>

  <td><input type="text" class="text text500" name="articlenew[keywords]" value="<?php echo $article['keywords']?>"></td>

</tr>

<tr>

  <td colspan="2">

  	<textarea id="editor" name="articlenew[content]"><?php echo $article['content']?></textarea>

<script type="text/javascript">

var editor = new baidu.editor.ui.Editor();

editor.render("editor");

</script>

  </td>

</tr>

<tr>

  <td colspan="2"><input type="submit" class="button submit" name="button-submit" value="<?php echo $lang['submit']?>"></td>

</tr>

</table>

</form>

</div>

<script type="text/javascript">

$("#formabout").submit(function(){

var title = $("input[name='articlenew[title]']").val();

if(!title){

alert("标题不能为空");

return false;

}

return true;

})

</script>

<? } else { ?>

<div class="toolbar">

<h2><?php echo $lang['about_manage']?></h2>

<ul class="tab">

<li class="current"><a href="<?php echo $BASESCRIPT?>?action=about"><span><?php echo $lang['manage']?></span></a></li>

<li><a href="<?php echo $BASESCRIPT?>?action=about&operation=add"><span><?php echo $lang['add']?></span></a></li>

</ul>

</div>

<div class="wrapper">

<form name="about" method="post" action="<?php echo $BASESCRIPT?>?action=about">

<input type="hidden" name="formsubmit" value="yes" />

<input type="hidden" name="formhash" value="<?php echo FORMHASH?>" />

    <table width="100%" border="0" cellspacing="0" cellpadding="0" class="listtable">

      <tr>

        <th width="50"><input type="checkbox" class="checkbox" onclick="checkAll(this,'delete[]')"> <?php echo $lang['delete_check']?></th>

        <th><?php echo $lang['title']?></th>

        <th width="100"><?php echo $lang['about_lastedit']?></th>

        <th width="160"><?php echo $lang['about_time']?></th>

        <th width="80">&nbsp;</th>

      </tr>

  <tbody id="abouts">

  <? if(is_array($articles)) { foreach($articles as $article) { ?>      <tr>

        <td><input type="checkbox" class="checkbox" name="delete[]" value="<?php echo $article['id']?>"></td>

        <td><a href="about.php?id=<?php echo $article['id']?>" target="_blank"><?php echo $article['title']?></a></td>

        <td><?php echo $article['author']?></td>

        <td><?php echo $article['dateline']?></td>

        <td><a href="<?php echo $BASESCRIPT?>?action=about&operation=edit&id=<?php echo $article['id']?>"><?php echo $lang['edit']?></a></td>

      </tr>

  <? } } ?>  </tbody>

  <tr class="bottom">

<td colspan="5"><input type="submit" class="button" value="<?php echo $lang['submit']?>"> <input type="button" class="button" value="<?php echo $lang['refresh']?>" onClick="LoadPage('page=<?php echo $page?>')"></td>

  </tr>

  </table>

  </form>

</div>

<script type="text/javascript">

$("#abouts tr").mouseover(function(){$(this).addClass("hover")}).mouseout(function(){$(this).removeClass("hover")});

</script>

<? } ?>