<? if($operation=='edit') { ?>

<div class="toolbar">

<h2><?php echo $lang['usergroup_manage']?></h2>

<ul class="tab">

<li><a href="<?php echo $BASESCRIPT?>?action=usergroups"><span><?php echo $lang['manage']?></span></a></li>

<li class="current"><a href="<?php echo $BASESCRIPT?>?action=usergroups&operation=edit&groupid=<?php echo $groupid?>"><span><?php echo $lang['edit']?></span></a></li>

</ul>

</div>

<div class="wrapper">

  <form name="usergroup" method="post" action="<?php echo $BASESCRIPT?>?action=usergroups&operation=edit">

  <input type="hidden" name="formsubmit" value="yes" />

  <input type="hidden" name="formhash" value="<?php echo FORMHASH?>" />

  <input type="hidden" name="groupid" value="<?php echo $groupid?>">

  <table width="100%" border="0" cellspacing="0" cellpadding="0" class="formtable">

  	<tr class="firstrow">

  <td colspan="2"><?php echo $lang['usergroup_permission_set']?></td>

</tr>

<tr>

  <td class="bold" width="260"><?php echo $lang['usergroup_allowpost']?></td>

  <td>&nbsp;</td>

</tr>

<tr>

  <td><input type="radio" name="usergroupnew[allowpost]" value="1"<? if($usergroup['allowpost']) { ?> checked="checked"<? } ?>> <?php echo $lang['yes']?>　

  <input type="radio" name="usergroupnew[allowpost]" value="0"<? if(!$usergroup['allowpost']) { ?> checked="checked"<? } ?>> <?php echo $lang['no']?></td>

  <td><?php echo $lang['usergroup_tips_0']?></td>

</tr>

<tr>

  <td class="bold"><?php echo $lang['usergroup_allowreply']?></td>

  <td>&nbsp;</td>

</tr>

<tr>

  <td><input type="radio" name="usergroupnew[allowreply]" value="1"<? if($usergroup['allowreply']) { ?> checked="checked"<? } ?>> <?php echo $lang['yes']?>　

  <input type="radio" name="usergroupnew[allowreply]" value="0"<? if(!$usergroup['allowreply']) { ?> checked="checked"<? } ?>> <?php echo $lang['no']?></td>

  <td><?php echo $lang['usergroup_tips_1']?></td>

</tr>

<tr>

  <td class="bold"><?php echo $lang['usergroup_allowcomment']?></td>

  <td>&nbsp;</td>

</tr>

<tr>

  <td><input type="radio" name="usergroupnew[allowcomment]" value="1"<? if($usergroup['allowcomment']) { ?> checked="checked"<? } ?>> <?php echo $lang['yes']?>　

  <input type="radio" name="usergroupnew[allowcomment]" value="0"<? if(!$usergroup['allowcomment']) { ?> checked="checked"<? } ?>> <?php echo $lang['no']?></td>

  <td><?php echo $lang['usergroup_tips_2']?></td>

</tr>

<tr>

  <td class="bold"><?php echo $lang['usergroup_allowupload']?></td>

  <td>&nbsp;</td>

</tr>

<tr>

  <td><input type="radio" name="usergroupnew[allowpostattach]" value="1"<? if($usergroup['allowpostattach']) { ?> checked="checked"<? } ?>> <?php echo $lang['yes']?>　

  <input type="radio" name="usergroupnew[allowpostattach]" value="0"<? if(!$usergroup['allowpostattach']) { ?> checked="checked"<? } ?>> <?php echo $lang['no']?></td>

  <td><?php echo $lang['usergroup_tips_3']?></td>

</tr>

<tr>

  <td class="bold"><?php echo $lang['usergroup_allowdownload']?></td>

  <td>&nbsp;</td>

</tr>

<tr>

  <td><input type="radio" name="usergroupnew[allowgetattach]" value="1"<? if($usergroup['allowgetattach']) { ?> checked="checked"<? } ?>> <?php echo $lang['yes']?>　

  <input type="radio" name="usergroupnew[allowgetattach]" value="0"<? if(!$usergroup['allowgetattach']) { ?> checked="checked"<? } ?>> <?php echo $lang['no']?></td>

  <td><?php echo $lang['usergroup_tips_4']?></td>

</tr>

<tr>

  <td class="bold"><?php echo $lang['usergroup_allowsearch']?></td>

  <td>&nbsp;</td>

</tr>

<tr>

  <td><input type="radio" name="usergroupnew[allowsearch]" value="1"<? if($usergroup['allowsearch']) { ?> checked="checked"<? } ?>> <?php echo $lang['yes']?>　

  <input type="radio" name="usergroupnew[allowsearch]" value="0"<? if(!$usergroup['allowsearch']) { ?> checked="checked"<? } ?>> <?php echo $lang['no']?></td>

  <td><?php echo $lang['usergroup_tips_5']?></td>

</tr>

<tr>

<td colspan="2"><input type="submit" class="button submit" value="<?php echo $lang['submit']?>" name="button-submit" /></td>

</tr>

  </table>

  </form>

</div>

<? } else { ?>

<div class="toolbar">

<h2><?php echo $lang['usergroup_manage']?></h2>

<ul class="tab" id="tab">

<li id="tab_member"><a href="###"><span><?php echo $lang['usergroup_member']?></span></a></li>

<li id="tab_custom"><a href="###"><span><?php echo $lang['usergroup_custom']?></span></a></li>

<li id="tab_system"><a href="###"><span><?php echo $lang['usergroup_system']?></span></a></li>

</ul>

</div>

<div class="wrapper">

  <span id="content">

  <span id="form_member" style="display:none;">

  <form method="post" name="usergroup" action="<?php echo $BASESCRIPT?>?action=usergroups">

  <input type="hidden" name="formsubmit" value="yes" />

  <input type="hidden" name="formhash" value="<?php echo FORMHASH?>" />

  <input type="hidden" name="type" value="member" />

  <table width="100%" border="0" cellspacing="0" cellpadding="0" class="listtable">

<tr>

  <th width="50"><input type="checkbox" class="checkbox" onclick="checkAll(this,'delete[]')" /> <?php echo $lang['delete_check']?></th>

  <th width="30"><?php echo $lang['usergroup_groupid']?></th>

  <th width="200"><?php echo $lang['usergroup_grouptitle']?></th>

  <th width="200"><?php echo $lang['usergroup_credits_between']?></th>

  <th></th>

</tr>

<tbody id="membergroup"><? if(is_array($usergroups['member'])) { foreach($usergroups['member'] as $group) { ?><tr onmouseover="this.className='hover'" onmouseout="this.className=''">

  <td><input name="delete[]" type="checkbox" value="<?php echo $group['groupid']?>" /></td>

  <td><?php echo $group['groupid']?></td>

  <td><input type="text" name="groupnew[<?php echo $group['groupid']?>][grouptitle]" value="<?php echo $group['grouptitle']?>" class="text text160"></td>

  <td>

<input type="text" name="groupnew[<?php echo $group['groupid']?>][creditslower]" value="<?php echo $group['creditslower']?>" class="text text60"> ~

<input type="text" name="groupnew[<?php echo $group['groupid']?>][creditshigher]" value="<?php echo $group['creditshigher']?>" class="text text60">

  </td>

  <td><a href="<?php echo $BASESCRIPT?>?action=usergroups&operation=edit&groupid=<?php echo $group['groupid']?>"><?php echo $lang['usergroup_permission_edit']?></a></td>

</tr><? } } ?></tbody>

<tr>

  <td></td>

  <td colspan="4"><div class="addtr"><a href="javascript:;" id="addmembergroup"><?php echo $lang['usergroup_addnew']?></a></div></td>

</tr>

<tr class="bottom">

<td><input type="checkbox" class="checkbox" onclick="checkAll(this,'delete[]')" /> <?php echo $lang['delete_check']?></td>

<td colspan="4">

<input type="submit" name="button-submit" class="button" value="<?php echo $lang['submit']?>" /> 

<input type="button" class="button" name="" value="<?php echo $lang['refresh']?>" onclick="LoadPage('type=member')" />

</td>

</tr>

  </table>

  </form>

  </span>

  <span id="form_custom" style="display:none;">

  <form method="post" name="customgroup" action="<?php echo $BASESCRIPT?>?action=usergroups">

  <input type="hidden" name="formsubmit" value="yes" />

  <input type="hidden" name="formhash" value="<?php echo FORMHASH?>" />

  <input type="hidden" name="type" value="custom" />

  <table width="100%" border="0" cellspacing="0" cellpadding="0" class="listtable">

<tr>

  <th width="50"><input type="checkbox" class="checkbox" onclick="checkAll(this,'delete[]')" /> <?php echo $lang['delete_check']?></th>

  <th width="30"><?php echo $lang['usergroup_groupid']?></th>

  <th width="200"><?php echo $lang['usergroup_grouptitle']?></th>

  <th></th>

</tr><? if(is_array($usergroups['custom'])) { foreach($usergroups['custom'] as $group) { ?><tr onmouseover="this.className='hover'" onmouseout="this.className=''">

  <td><input type="checkbox" value="<?php echo $group['groupid']?>" disabled="disabled" /></td>

  <td><?php echo $group['groupid']?></td>

  <td><input type="text" name="groupnew[<?php echo $group['groupid']?>][grouptitle]" value="<?php echo $group['grouptitle']?>" class="text text160"></td>

  <td><a href="<?php echo $BASESCRIPT?>?action=usergroups&operation=edit&groupid=<?php echo $group['groupid']?>"><?php echo $lang['usergroup_permission_edit']?></a></td>

</tr><? } } ?><tr class="bottom">

<td><input type="checkbox" class="checkbox" onclick="checkAll(this,'delete[]')" /> <?php echo $lang['delete_check']?></td>

<td colspan="3">

<input type="submit" name="button-submit" class="button" value="<?php echo $lang['submit']?>" />

<input type="button" name="" class="button" value="<?php echo $lang['refresh']?>" onclick="LoadPage('type=custom')" />

</td>

</tr>

  </table>

  </form>

  </span>

  <span id="form_system" style="display:none;">

  <form method="post" name="systemgroup" action="<?php echo $BASESCRIPT?>?action=usergroups">

  <input type="hidden" name="formsubmit" value="yes" />

  <input type="hidden" name="formhash" value="<?php echo FORMHASH?>" />

  <input type="hidden" name="type" value="system" />

  <table width="100%" border="0" cellspacing="0" cellpadding="0" class="listtable" id="systemgroup">

<tr>

  <th width="50"><input type="checkbox" class="checkbox" onclick="checkAll(this,'delete[]')" /> <?php echo $lang['delete_check']?></th>

  <th width="30"><?php echo $lang['usergroup_groupid']?></th>

  <th width="200"><?php echo $lang['usergroup_grouptitle']?></th>

  <th></th>

</tr><? if(is_array($usergroups['system'])) { foreach($usergroups['system'] as $group) { ?><tr onmouseover="$(this).addClass('hover')" onmouseout="$(this).removeClass('hover')">

  <td><input type="checkbox" class="checkbox" disabled="disabled" /></td>

  <td><?php echo $group['groupid']?></td>

  <td><input type="text" class="text text160" name="groupnew[<?php echo $group['groupid']?>][grouptitle]" value="<?php echo $group['grouptitle']?>" /></td>

  <td><a href="<?php echo $BASESCRIPT?>?action=usergroups&operation=edit&groupid=<?php echo $group['groupid']?>"><?php echo $lang['usergroup_permission_edit']?></a></td>

</tr><? } } ?><tr class="bottom">

<td><input type="checkbox" class="checkbox" onclick="checkAll(this,'delete[]')" /> <?php echo $lang['delete_check']?></td>

<td colspan="3">

<input type="submit" name="button-submit" class="button" value="<?php echo $lang['submit']?>" />

<input type="button" name="" class="button" value="<?php echo $lang['refresh']?>" onclick="LoadPage('type=system')" />

</td>

</tr>

  </table>

  </form>

  </span>

  </span>

</div>

<script type="text/javascript">

var type = '<?php echo $type?>';

if(!type) type = 'member';

$("#form_"+type).show();

$("#tab_"+type).addClass("current");

$('#tab li').click(function(){

$(this).addClass("current").siblings().removeClass();

$("#content > span").eq($('#tab li').index(this)).show().siblings().hide();

});

$("#addmembergroup").click(function(){

$("#membergroup").append('<tr><td></td><td></td><td><input type="text" name="newgrouptitle[]" value="<?php echo $lang['usergroup_newgroupname']?>" class="text text160"></td><td>'+

  	'<input type="text" name="newcreditslower[]" value="0" class="text text60"> ~ <input type="text" name="newcreditshigher[]" value="0" class="text text60"></td><td></td></tr>');

});

</script>

<? } ?>