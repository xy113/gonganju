<? if($operation=='edit') { ?>

<script src="source/ueditor/editor_config.js" type="text/javascript"></script>

<script src="source/ueditor/editor_all_min.js" type="text/javascript"></script>

<link rel="stylesheet" type="text/css" href="source/ueditor/themes/default/ueditor.css"/>

<div class="toolbar">

<h2><?php echo $lang['faq']?></h2>

<ul class="tab">

<li><a href="<?php echo $BASESCRIPT?>?action=faq"><span><?php echo $lang['manage']?></span></a></li>

<li class="current"><a href="<?php echo $BASESCRIPT?>?action=faq&operation=edit&id=<?php echo $id?>"><span><?php echo $lang['edit']?></span></a></li>

</ul>

</div>

<div class="wrapper">

<form method="post" id="faq" name="faq" action="<?php echo $BASESCRIPT?>?action=faq&operation=edit">

<input type="hidden" name="id" value="<?php echo $id?>" />

<input type="hidden" name="formsubmit" value="yes">

<input type="hidden" name="formhash" value="<?php echo FORMHASH?>" />

<table width="100%" border="0" cellspacing="0" cellpadding="0" class="formtable">

<tr class="firstrow">

  <td colspan="2"><?php echo $lang['article_write']?></td>

</tr>

<tr>

  <td width="60" class="bold"><?php echo $lang['title']?></td>

  <td><input type="text" class="text text500" name="articlenew[title]" value="<?php echo $article['title']?>"></td>

</tr>

<tr>

  <td class="bold"><?php echo $lang['displayorder']?></td>

  <td><input type="text" class="text text500" name="articlenew[displayorder]" value="<?php echo $article['displayorder']?>"></td>

</tr>

<tr>

  <td class="bold"><?php echo $lang['keywords']?></td>

  <td><input type="text" class="text text500" name="articlenew[keywords]" value="<?php echo $article['keywords']?>"></td>

</tr>

<tr>

  <td colspan="2">

  	<textarea id="editor" name="articlenew[content]"><?php echo $article['body']?></textarea>

<script type="text/javascript">

var editor = new baidu.editor.ui.Editor();

editor.render("editor");

</script>

  </td>

</tr>

<tr>

  <td><input type="submit" class="button submit" name="button-submit" value="<?php echo $lang['submit']?>"></td>

  <td>&nbsp;</td>

</tr>

  </table>

</form>

</div>

<script type="text/javascript">

$("#faq").submit(function(){

var title = $("input[name='articlenew[title]']").val();

var content = FCKeditorAPI.GetInstance("articlenew[content]").GetXHTML();

if(!title || !content){

alert('<?php echo $lang['faq_submit_error']?>');

return false;

}else{

return true;

}

});

function checkForm(){

if(!$("input[name='article[title]']").val()){

alert("标题不能留空哦");

return false;

}

return true;

}

</script>

<? } else { ?>

<div class="toolbar">

<h2><?php echo $lang['faq']?></h2>

</div>

<div class="wrapper">

<form name="faq" method="post" action="<?php echo $BASESCRIPT?>?action=faq">

<input type="hidden" name="formsubmit" value="yes" />

<input type="hidden" name="formhash" value="<?php echo FORMHASH?>" />

    <table width="100%" border="0" cellspacing="0" cellpadding="0" class="listtable">

      <tr>

        <th width="50"><input type="checkbox" class="checkbox" onClick="checkAll(this,'delete[]')"> <?php echo $lang['delete_check']?></th>

        <th width="320"><?php echo $lang['title']?></th>

        <th width="100"><?php echo $lang['displayorder']?></th>

        <th><?php echo $lang['keywords']?></th>

        <th width="80">&nbsp;</th>

      </tr>

  <tbody id="faq">

  <? if(is_array($articles)) { foreach($articles as $article) { ?>      <tr>

        <td><input type="checkbox" class="checkbox" name="delete[]" value="<?php echo $article['id']?>"></td>

        <td><input type="text" class="text" name="articlenew[<?php echo $article['id']?>][title]" value="<?php echo $article['title']?>" /></td>

        <td><input type="text" class="text text60" name="articlenew[<?php echo $article['id']?>][displayorder]" value="<?php echo $article['displayorder']?>" /></td>

        <td><input type="text" class="text" name="articlenew[<?php echo $article['id']?>][keywords]" value="<?php echo $article['keywords']?>" /></td>

        <td><a href="<?php echo $BASESCRIPT?>?action=faq&operation=edit&id=<?php echo $article['id']?>"><?php echo $lang['edit']?></a></td>

      </tr>

  <? } } ?>  </tbody>

  <tr>

  	<td></td>

<td colspan="4"><div class="addtr"><a href="###" id="addfaq"><?php echo $lang['add_newoption']?></a></div></td>

  </tr>

  <tr class="bottom">

  	<td><input type="checkbox" class="checkbox" onclick="checkAll(this,'delete[]')"> <?php echo $lang['delete_check']?></td>

<td colspan="4">

<input type="submit" class="button" value="<?php echo $lang['submit']?>"> 

<input type="button" class="button" value="<?php echo $lang['refresh']?>" onClick="LoadPage('page=<?php echo $page?>')">

</td>

  </tr>

  </table>

  </form>

</div>

<script type="text/javascript">

$("#faq tr").mouseover(function(){$(this).addClass("hover")}).mouseout(function(){$(this).removeClass("hover")});

$("#addfaq").click(function(){

$("#faq").append('<tr><td></td><td><input type="text" class="text" name="newtitle[]" /></td>'+

        '<td><input type="text" class="text text60" name="neworder[]" value="0" /></td>'+

        '<td><input type="text" class="text" name="newkeywors[]" /></td><td></td></tr>');

});

</script>

<? } ?>