<? if($operation=='edit') { ?>

<div class="toolbar">

<h2><?php echo $lang['usergroup_admingroup']?> - <?php echo $admingroup['grouptitle']?>(admingid:<?php echo $admingid?>)</h2>

<ul class="tab">

<li><a href="<?php echo $BASESCRIPT?>?action=admingroups"><span><?php echo $lang['manage']?></span></a></li>

<li class="current"><a href="<?php echo $BASESCRIPT?>?action=admingroups&operation=edit&admingid=<?php echo $admingid?>"><span><?php echo $lang['edit']?></span></a></li>

</ul>

</div>

<div class="wrapper">

<form method="post" name="admingroup" id="admingroup" action="<?php echo $BASESCRIPT?>?action=admingroups&operation=edit">

<input type="hidden" name="formsubmit" value="yes" />

<input type="hidden" name="formhash" value="<?php echo FORMHASH?>" />

<input type="hidden" name="admingid" value="<?php echo $admingid?>" />

  	<table width="100%" border="0" cellspacing="0" cellpadding="0" class="formtable" id="actions">

      <tr class="firstrow">

        <td colspan="2"><?php echo $lang['usergroup_detail']?></td>

      </tr>

      <tr>

        <td class="bold" width="200" valign="top"><label class="actioncat"><input type="checkbox" class="checkbox" name="disabledactions[]" value="settings"<?php echo $checked['settings']?> /> <?php echo $lang['admingroup_action_settings']?></label></td>

        <td valign="top">

<ul class="actionlist">

<li><label><input type="checkbox" class="checkbox" name="disabledactions[]" value="settings_basic"<?php echo $checked['settings_basic']?> /> <?php echo $lang['admingroup_action_settings_basic']?></label></li>

<li><label><input type="checkbox" class="checkbox" name="disabledactions[]" value="settings_optimization"<?php echo $checked['settings_optimization']?> /> <?php echo $lang['admingroup_action_settings_optimization']?></label></li>

<li><label><input type="checkbox" class="checkbox" name="disabledactions[]" value="settings_attachment"<?php echo $checked['settings_attachment']?> /> <?php echo $lang['admingroup_action_settings_attachment']?></label></li>

<li><label><input type="checkbox" class="checkbox" name="disabledactions[]" value="settings_image"<?php echo $checked['settings_image']?> /> <?php echo $lang['admingroup_action_settings_image']?></label></li>

<li><label><input type="checkbox" class="checkbox" name="disabledactions[]" value="settings_register"<?php echo $checked['settings_register']?> /> <?php echo $lang['admingroup_action_settings_register']?></label></li>

<li><label><input type="checkbox" class="checkbox" name="disabledactions[]" value="settings_randcode"<?php echo $checked['settings_randcode']?> /> <?php echo $lang['admingroup_action_settings_randcode']?></label></li>

<li><label><input type="checkbox" class="checkbox" name="disabledactions[]" value="settings_contact"<?php echo $checked['settings_contact']?> /> <?php echo $lang['admingroup_action_settings_contact']?></label></li>

<li><label><input type="checkbox" class="checkbox" name="disabledactions[]" value="cplog"<?php echo $checked['cplog']?> /> <?php echo $lang['admingroup_action_cplog']?></label></li>

<li><label><input type="checkbox" class="checkbox" name="disabledactions[]" value="nav"<?php echo $checked['nav']?> /> <?php echo $lang['admingroup_action_nav']?></label></li>

<li><label><input type="checkbox" class="checkbox" name="disabledactions[]" value="about"<?php echo $checked['about']?> /> <?php echo $lang['admingroup_action_about']?></label></li>

</ul>

</td>

      </tr>

       <tr>

        <td class="bold"><label class="actioncat"><input type="checkbox" class="checkbox" name="disabledactions[]" value="member"<?php echo $checked['member']?> /> <?php echo $lang['admingroup_action_member']?></label></td>

        <td>

<ul class="actionlist">

<li><label><input type="checkbox" class="checkbox" name="disabledactions[]" value="member_add"<?php echo $checked['member_add']?> /> <?php echo $lang['admingroup_action_member_add']?></label></li>

<li><label><input type="checkbox" class="checkbox" name="disabledactions[]" value="member_edit"<?php echo $checked['member_edit']?> /> <?php echo $lang['admingroup_action_member_edit']?></label></li>

<li><label><input type="checkbox" class="checkbox" name="disabledactions[]" value="admingroups"<?php echo $checked['admingroups']?> /> <?php echo $lang['admingroup_action_admingroup_edit']?></label></li>

<li><label><input type="checkbox" class="checkbox" name="disabledactions[]" value="usergroups"<?php echo $checked['usergroups']?> /> <?php echo $lang['admingroup_action_usergroup_edit']?></label></li>

</ul>

</td>

      </tr>

      <tr>

        <td class="bold"><label class="actioncat"><input type="checkbox" class="checkbox" name="disabledactions[]" value="articles"<?php echo $checked['articles']?> /> <?php echo $lang['admingroup_action_article']?></label></td>

        <td>

<ul class="actionlist">

<li><label><input type="checkbox" class="checkbox" name="disabledactions[]" value="articles_add"<?php echo $checked['articles_add']?> /> <?php echo $lang['admingroup_action_article_add']?></label></li>

<li><label><input type="checkbox" class="checkbox" name="disabledactions[]" value="articles_edit"<?php echo $checked['articles_edit']?> /> <?php echo $lang['admingroup_action_article_edit']?></label></li>

<li><label><input type="checkbox" class="checkbox" name="disabledactions[]" value="articlecat"<?php echo $checked['articlecat']?> /> <?php echo $lang['admingroup_action_articlecat']?></label></li>

<li><label><input type="checkbox" class="checkbox" name="disabledactions[]" value="articlecat_edit"<?php echo $checked['articlecat_edit']?> /> <?php echo $lang['admingroup_action_articlecat_edit']?></label></li>

<li><label><input type="checkbox" class="checkbox" name="disabledactions[]" value="articlecat_delete"<?php echo $checked['articlecat_delete']?> /> <?php echo $lang['admingroup_action_articlecat_delete']?></label></li>

<li><label><input type="checkbox" class="checkbox" name="disabledactions[]" value="source"<?php echo $checked['source']?> /> <?php echo $lang['admingroup_action_article_source']?></label></li>

</ul>

</td>

      </tr>

       <tr>

        <td class="bold"><label class="actioncat"><input type="checkbox" class="checkbox" name="disabledactions[]" value="goods"<?php echo $checked['goods']?> /> <?php echo $lang['admingroup_action_goods']?></label></td>

        <td>

<ul class="actionlist">

<li><label><input type="checkbox" class="checkbox" name="disabledactions[]" value="goods_add"<?php echo $checked['goods_add']?> /> <?php echo $lang['admingroup_action_goods_add']?></label></li>

<li><label><input type="checkbox" class="checkbox" name="disabledactions[]" value="goods_edit"<?php echo $checked['goods_edit']?> /> <?php echo $lang['admingroup_action_goods_edit']?></label></li>

<li><label><input type="checkbox" class="checkbox" name="disabledactions[]" value="goodscat"<?php echo $checked['goodscat']?> /> <?php echo $lang['admingroup_action_goodscat']?></label></li>

<li><label><input type="checkbox" class="checkbox" name="disabledactions[]" value="goodscat_edit"<?php echo $checked['goodscat_edit']?> /> <?php echo $lang['admingroup_action_goodscat_edit']?></label></li>

<li><label><input type="checkbox" class="checkbox" name="disabledactions[]" value="goodscat_delete"<?php echo $checked['goodscat_delete']?> /> <?php echo $lang['admingroup_action_goodscat_delete']?></label></li>

<li><label><input type="checkbox" class="checkbox" name="disabledactions[]" value="goodstypes"<?php echo $checked['goodstypes']?> /> <?php echo $lang['admingroup_action_goods_types']?></label></li>

<li><label><input type="checkbox" class="checkbox" name="disabledactions[]" value="goodstypes_typeoption"<?php echo $checked['goodstypes_typeoption']?> /> <?php echo $lang['admingroup_action_goods_typeoption']?></label></li>

</ul>

</td>

      </tr>

       <tr>

        <td class="bold"><label class="actioncat"><input type="checkbox" class="checkbox" name="disabledactions[]" value="task"<?php echo $checked['task']?> /> <?php echo $lang['admingroup_action_task']?></label></td>

        <td>

<ul class="actionlist">

<li><label><input type="checkbox" class="checkbox" name="disabledactions[]" value="announce"<?php echo $checked['announce']?> /> <?php echo $lang['admingroup_action_announce']?></label></li>

<li><label><input type="checkbox" class="checkbox" name="disabledactions[]" value="friendlink"<?php echo $checked['friendlink']?> /> <?php echo $lang['admingroup_action_friendlink']?></label></li>

<li><label><input type="checkbox" class="checkbox" name="disabledactions[]" value="faq"<?php echo $checked['faq']?> /> <?php echo $lang['admingroup_action_faq']?></label></li>

<li><label><input type="checkbox" class="checkbox" name="disabledactions[]" value="feedback"<?php echo $checked['feedback']?> /> <?php echo $lang['admingroup_action_feedback']?></label></li>

</ul>

</td>

      </tr>

      <tr>

        <td colspan="2"><input type="submit" class="button submit" value="<?php echo $lang['submit']?>" /></td>

      </tr>

    </table>

</form>

</div>

<? } else { ?>

<div class="toolbar">

<h2><?php echo $lang['usergroup_admingroup']?></h2>

</div>

<div class="wrapper">

  <form method="post" name="admingroup" action="<?php echo $BASESCRIPT?>?action=admingroups">

  <input type="hidden" name="formsubmit" value="yes" />

  <input type="hidden" name="formhash" value="<?php echo FORMHASH?>" />

  <table width="100%" border="0" cellspacing="0" cellpadding="0" class="listtable">

<tr>

  <th width="50"><input type="checkbox" class="checkbox" onclick="checkAll(this,'delete[]')" /> <?php echo $lang['delete_check']?></th>

  <th width="30"><?php echo $lang['usergroup_groupid']?></th>

  <th width="300"><?php echo $lang['usergroup_grouptitle']?></th>

  <th width="100"><?php echo $lang['usergroup_typename']?></th>

  <th width="160"><?php echo $lang['usergroup_adminlevel']?></th>

  <th></th>

</tr>

<tbody id="grouplist"><? if(is_array($admingroups)) { foreach($admingroups as $gg) { ?><tr onmouseover="this.className='hover'" onmouseout="this.className=''">

  <td><input <? if($gg['type']=='system') { ?> disabled="disabled"<? } else { ?> name="delete[]"<? } ?> type="checkbox" value="<?php echo $gg['groupid']?>" /></td>

  <td><?php echo $gg['groupid']?></td>

  <td><input type="text" class="text text200" name="grouptitle[<?php echo $gg['groupid']?>]" value="<?php echo $gg['grouptitle']?>" /></td>

  <td><?php echo $gg['typename']?></td>

  <td><?php echo $gg['level']?></td>

  <td><a href="<?php echo $BASESCRIPT?>?action=admingroups&operation=edit&admingid=<?php echo $gg['admingid']?>"><?php echo $lang['usergroup_detail']?></a></td>

</tr><? } } ?></tbody>

<tr>

  <td></td>

  <td colspan="5"><div class="addtr"><a href="javascript:;" id="addgroup"><?php echo $lang['usergroup_addnew']?></a></div></td>

</tr>

<tr class="bottom">

<td><input type="checkbox" class="checkbox" onclick="checkAll(this,'delete[]')" /> <?php echo $lang['delete_check']?></td>

<td colspan="5"><input type="submit" class="button" name="button-submit" value="<?php echo $lang['submit']?>" /> <input type="button" class="button" value="<?php echo $lang['refresh']?>" onclick="LoadPage()" /></td>

</tr>

  </table>

  </form>

</div>

<script type="text/javascript">

$("#addgroup").click(function(){

$("#grouplist").append('<tr><td></td><td></td><td><input type="text" class="text text200" name="newgrouptitle[]" value="<?php echo $lang['usergroup_newgroupname']?>"></td><td><?php echo $lang['usergroup_type']['custom']?></td>'+

'<td><select name="newradminid[]"><option value="1"><?php echo $lang['usergroup_level']['1']?></option><option value="2"><?php echo $lang['usergroup_level']['2']?></option><option value="3"><?php echo $lang['usergroup_level']['3']?></option></select></td><td></td></tr>');

});

</script>

<? } ?>