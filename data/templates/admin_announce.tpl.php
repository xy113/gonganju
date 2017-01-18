<? if($operation=='add'||$operation=='edit') { ?>

<script src="source/ueditor/editor_config.js" type="text/javascript"></script>

<script src="source/ueditor/editor_all_min.js" type="text/javascript"></script>

<link rel="stylesheet" type="text/css" href="source/ueditor/themes/default/ueditor.css"/>

<div class="toolbar">

<h2><?php echo $lang['announcement']?></h2>

<ul class="tab">

<li><a href="<?php echo $BASESCRIPT?>?action=announce"><span><?php echo $lang['manage']?></span></a></li>

<? if($operation=='add') { ?>

<li class="current"><a href="<?php echo $BASESCRIPT?>?action=announce&operation=add"><span><?php echo $lang['add']?></span></a></li>

<? } else { ?>

<li class="current"><a href="<?php echo $BASESCRIPT?>?action=announce&operation=edit&id=<?php echo $id?>"><span><?php echo $lang['edit']?></span></a></li>

<? } ?>

</ul>

</div>

<div class="wrapper">

<form method="post" name="announcement" id="announcement" action="<?php echo $BASESCRIPT?>?action=announce&operation=<?php echo $operation?>">

<input type="hidden" name="formsubmit" value="yes">

<input type="hidden" name="formhash" value="<?php echo FORMHASH?>" />

<input type="hidden" name="id" value="<?php echo $id?>" />

  <table width="100%" border="0" cellspacing="0" cellpadding="0" class="formtable">

<tr class="firstrow">

  <td colspan="2"><?php echo $lang['announce_write']?></td>

</tr>

<tr>

  <td class="bold" width="520"><?php echo $lang['title']?></td>

  <td></td>

</tr>

<tr>

<td><input type="text" class="text text500" id="newtitle" name="articlenew[title]" value="<?php echo $article['title']?>"></td>

<td></td>

</tr>

<tr>

  <td class="bold"><?php echo $lang['poster']?></td>

  <td></td>

</tr>

<tr>

<td><input type="text" class="text text500" id="newposter" name="articlenew[poster]" value="<?php echo $article['poster']?>"></td>

<td></td>

</tr>

<tr>

  <td class="bold"><?php echo $lang['content']?></td>

  <td></td>

</tr>

<tr>

  <td colspan="2">

  	<textarea id="editor" name="articlenew[message]"><?php echo $article['message']?></textarea>

<script type="text/javascript">

var editor = new baidu.editor.ui.Editor();

editor.render("editor");

</script>

  </td>

</tr>

<tr class="bottom">

<td colspan="2"><input type="submit" class="button submit" value="<?php echo $lang['submit']?>" /></td>

</tr>

  </table>

  </form>

</div>

<script type="text/javascript">

$("#announcement").submit(function(){

if(!$("#newtitle").val()){

alert('<?php echo $lang['announce_submit_error']?>');

return false;

}else{

return true;

}

});

</script>

<? } else { ?>

<div class="toolbar">

<h2><?php echo $lang['announcement']?></h2>

<ul class="tab">

<li class="current"><a href="<?php echo $BASESCRIPT?>?action=announce"><span><?php echo $lang['manage']?></span></a></li>

<li><a href="<?php echo $BASESCRIPT?>?action=announce&operation=add"><span><?php echo $lang['add']?></span></a></li>

</ul>

</div>

<div class="wrapper">

<form name="announce" method="post" action="<?php echo $BASESCRIPT?>?action=announce">

<input type="hidden" name="formsubmit" value="yes" />

<input type="hidden" name="formhash" value="<?php echo FORMHASH?>" />

    <table width="100%" border="0" cellspacing="0" cellpadding="0" class="listtable">

      <tr>

        <th width="50"><input type="checkbox" class="checkbox" onclick="checkAll(this,'delete[]')"> <?php echo $lang['delete_check']?></th>

        <th><?php echo $lang['title']?></th>

        <th width="100"><?php echo $lang['poster']?></th>

        <th width="160"><?php echo $lang['pubtime']?></th>

        <th width="80"></th>

      </tr>

  <tbody id="announces">

  <? if(is_array($articles)) { foreach($articles as $article) { ?>      <tr>

        <td><input type="checkbox" class="checkbox" name="delete[]" value="<?php echo $article['id']?>"></td>

        <td><?php echo $article['title']?></td>

        <td><?php echo $article['poster']?></td>

        <td><?php echo $article['dateline']?></td>

        <td><a href="<?php echo $BASESCRIPT?>?action=announce&operation=edit&id=<?php echo $article['id']?>"><?php echo $lang['edit']?></a></td>

      </tr>

  <? } } ?>  </tbody>

  <tr class="bottom">

<td colspan="5">

<span class="pagebox"><?php echo $pagelink?></span>

<input type="submit" class="button" value="<?php echo $lang['submit']?>"> 

<input type="button" class="button" value="<?php echo $lang['refresh']?>" onClick="LoadPage('page=<?php echo $page?>')">

</td>

  </tr>

  </table>

  </form>

</div>

<script type="text/javascript">

$("#announces tr").mouseover(function(){$(this).addClass("hover")}).mouseout(function(){$(this).removeClass("hover")});

</script>

<? } ?>