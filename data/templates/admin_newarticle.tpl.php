<script src="source/ueditor/editor_config.js" type="text/javascript"></script>

<script src="source/ueditor/editor_all_min.js" type="text/javascript"></script>

<link rel="stylesheet" type="text/css" href="source/ueditor/themes/default/ueditor.css"/>

<div class="toolbar">

<h2><?php echo $lang['article_manage']?></h2>

<ul class="tab">

<li><a href="<?php echo $BASESCRIPT?>?action=articles&cid=<?php echo $cid?>"><span><?php echo $lang['manage']?></span></a></li>

<? if($operation=='add') { ?>

<li class="current"><a href="<?php echo $BASESCRIPT?>?action=articles&operation=add&cid=<?php echo $cid?>"><span><?php echo $lang[$operation]?></span></a></li>

<? } else { ?>

<li class="current"><a href="<?php echo $BASESCRIPT?>?action=articles&operation=edit&id=<?php echo $id?>"><span><?php echo $lang[$operation]?></span></a></li>

<? } ?>

</ul>

</div>

<div class="wrapper">

  <form name="article" id="article" method="post" enctype="multipart/form-data" action="<?php echo $BASESCRIPT?>?action=articles&operation=<?php echo $operation?>">

  	<input type="hidden" name="formsubmit" value="yes" />

  	<input type="hidden" name="formhash" value="<?php echo FORMHASH?>" />

<input type="hidden" name="id" value="<?php echo $id?>" />

    <table width="100%" border="0" cellspacing="0" cellpadding="0" class="formtable" style="table-layout:fixed;">

      <tr class="firstrow">

        <td class="bold" width="80"><?php echo $lang['article_write']?></td>

        <td>&nbsp;</td>

      </tr>

      <tr>

        <td class="bold"><?php echo $lang['article_title']?></td>

        <td><input type="text" class="text text500" name="articlenew[title]" value="<?php echo $article['title']?>"></td>

      </tr>

  <tr class="odd">

        <td class="bold"><?php echo $lang['tags']?></td>

        <td><input type="text" class="text text500" name="articlenew[tags]" value="<?php echo $article['tags']?>"></td>

      </tr>

      <tr>

  	<td class="bold"><?php echo $lang['article_category']?></td>

        <td>

<select class="select" name="articlenew[cid]" style="width:500px; padding:5px 2px;"><? if(is_array($categories['category'])) { foreach($categories['category'] as $cat) { ?><option value="<?php echo $cat['cid']?>"<? if($cid==$cat['cid']) { ?> selected="selected"<? } if(!$cat['status']) { ?> disabled="disabled"<? } ?> class="bold"><?php echo $cat['name']?></option><? if(is_array($categories['sub'])) { foreach($categories['sub'] as $sub) { if($sub['fid']==$cat['cid']) { ?>

<option value="<?php echo $sub['cid']?>"<? if($cid==$sub['cid']) { ?> selected="selected"<? } if(!$sub['status']) { ?> disabled="disabled"<? } ?>>|¡ª<?php echo $sub['name']?></option>

<? } } } } } ?></select>

</td>

      </tr>

      <tr class="odd">

        <td class="bold"><?php echo $lang['article_source']?></td>

        <td>

<input type="text" class="text text500" id="article_source" name="articlenew[source]" value="<?php echo $article['source']?>" style="width:245px;">

<select onchange="$('#article_source').val(this.value)" style="padding:5px 2px; width:245px;">

<option>ÇëÑ¡Ôñ</option><? if(is_array($CACHE['source'])) { foreach($CACHE['source'] as $source) { if($source['type']=='article') { ?>

<option value="<?php echo $source['sitename']?>"><?php echo $source['sitename']?></option>

<? } } } ?></select>

</td>

      </tr>

  <tr>

        <td class="bold"><?php echo $lang['article_image']?></td>

        <td>

<input type="text" class="text text500" name="articlenew[image]" id="article_image" value="<?php echo $article['image']?>">

<b class="button" tabindex="0">

<span>ä¯ÀÀÎÄ¼þ</span>

<input type="file" name="file" class="file" onchange="article_image.value=this.value" />

</b> 

</td>

      </tr>

  <tr class="odd">

        <td class="bold"><?php echo $lang['article_summary']?></td>

        <td><textarea class="textarea" name="articlenew[summary]" style="width:500px; padding:3px;"><?php echo $article['summary']?></textarea></td>

      </tr>

  <!--<tr>

        <td class="bold"><?php echo $lang['article_content']?></td>

        <td>&nbsp;</td>

      </tr>-->

  <tr class="odd">

        <td colspan="2">

<textarea id="editor" name="articlenew[content]"><?php echo $article['content']?></textarea>

<script type="text/javascript">

var editor = new baidu.editor.ui.Editor();
editor.sessid = '<?php echo SESSID?>';
editor.render("editor");

</script>

</td>

      </tr>

      <tr>

        <td colspan="2">

<input type="checkbox" class="checkbox" value="1" name="articlenew[audited]" checked="checked"> <?php echo $lang['audited']?> 

<input type="checkbox" class="checkbox" value="1" name="articlenew[recommend]"<? if($article['recommend']) { ?> checked="checked"<? } ?>> <?php echo $lang['recommend']?> 

<input type="checkbox" class="checkbox" value="1" name="articlenew[allowcomment]"<? if($article['allowcomment']) { ?> checked="checked"<? } ?>> <?php echo $lang['allowcomment']?> 

<input type="checkbox" class="checkbox" value="1" name="articlenew[allowvote]"<? if($article['allowvote']) { ?> checked="checked"<? } ?>> <?php echo $lang['allowvote']?>

</td>

<tr class="bottom">

<td colspan="2"><input type="submit" class="button submit" value="<?php echo $lang['submit']?>"></td>

        </tr>

    </table>

    </form>

</div>

<script type="text/javascript">

$("#article").submit(function(){

if(!$("input[name='articlenew[title]']").val()){

alert("<?php echo $lang['article_error_0']?>");

return false;

}

return true;

});

</script>