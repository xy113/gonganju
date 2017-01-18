<? if($operation=='add'||$operation=='edit') { ?>

<div class="toolbar">

<? if($operation=='edit') { ?>

<h2><?php echo $lang['member_manage']?> - <?php echo $member['username']?>(UID:<?php echo $member['uid']?>)</h2>

<ul class="tab">

<li><a href="<?php echo $BASESCRIPT?>?action=member"><span><?php echo $lang['manage']?></span></a></li>

<li class="current"><a href="<?php echo $BASESCRIPT?>?action=member&operation=edit&uid=<?php echo $uid?>"><span><?php echo $lang['edit']?></span></a></li>

</ul>

<? } else { ?>

<h2><?php echo $lang['member_manage']?></h2>

<ul class="tab">

<li><a href="<?php echo $BASESCRIPT?>?action=member"><span><?php echo $lang['manage']?></span></a></li>

<li class="current"><a href="<?php echo $BASESCRIPT?>?action=member&operation=add"><span><?php echo $lang['add']?></span></a></li>

</ul>

<? } ?>

</div>

<div class="wrapper">

    <form id="member" name="member" method="post" action="<?php echo $BASESCRIPT?>?action=member&operation=<?php echo $operation?>">

<input type="hidden" name="formsubmit" value="yes" />

<input type="hidden" name="formhash" value="<?php echo FORMHASH?>" />

<input type="hidden" name="uid" value="<?php echo $uid?>" />

    <table width="100%" border="0" cellspacing="0" cellpadding="0" class="formtable">

      <tr class="firstrow">

        <td colspan="2"><? if($operation=='add') { ?><?php echo $lang['member_add']?><? } else { ?><?php echo $lang['member_edit']?><? } ?></td>

      </tr>

  <tr>

        <td class="bold" width="360"><?php echo $lang['member_username']?></td>

        <td>&nbsp;</td>

      </tr>

      <tr>

        <td><input type="text" class="text" name="membernew[username]" value="<?php echo $member['username']?>"<? if($operation=='edit') { ?> readonly<? } ?> /></td>

        <td><? if($operation=='add') { ?><?php echo $lang['member_tips_0']?><? } else { ?><?php echo $lang['member_tips_1']?><? } ?></td>

      </tr>

      <tr>

        <td class="bold"><?php echo $lang['member_password']?></td>

        <td>&nbsp;</td>

      </tr>

      <tr>

        <td><input type="password" name="membernew[password]" id="password" class="text" value="" /></td>

        <td><? if($operation=='add') { ?><?php echo $lang['member_tips_2']?><? } else { ?><?php echo $lang['member_tips_3']?><? } ?></td>

      </tr>

      <tr>

        <td class="bold"><?php echo $lang['member_email']?></td>

        <td>&nbsp;</td>

      </tr>

      <tr>

        <td><input type="text" name="membernew[email]" id="email" class="text" value="<?php echo $member['email']?>" /></td>

        <td><?php echo $lang['member_tips_4']?></td>

      </tr>

  <tr>

        <td class="bold"><?php echo $lang['member_usergroup']?></td>

        <td>&nbsp;</td>

      </tr>

      <tr>

        <td>

<select name="membernew[groupid]" class="select" style="width:302px;">

<optgroup label="<?php echo $lang['usergroup_member']?>"><? if(is_array($usergroups['member'])) { foreach($usergroups['member'] as $group) { ?><option value="<?php echo $group['groupid']?>"<? if($member['groupid']==$group['groupid']) { ?> selected="selected"<? } ?>><?php echo $group['grouptitle']?></option><? } } ?></optgroup>

<optgroup label="<?php echo $lang['usergroup_system']?>"><? if(is_array($usergroups['system'])) { foreach($usergroups['system'] as $group) { ?><option value="<?php echo $group['groupid']?>"<? if($member['groupid']==$group['groupid']) { ?> selected="selected"<? } ?>><?php echo $group['grouptitle']?></option><? } } ?></optgroup>

<optgroup label="<?php echo $lang['usergroup_custom']?>"><? if(is_array($usergroups['custom'])) { foreach($usergroups['custom'] as $group) { ?><option value="<?php echo $group['groupid']?>"<? if($member['groupid']==$group['groupid']) { ?> selected="selected"<? } ?>><?php echo $group['grouptitle']?></option><? } } ?></optgroup>

</select>

</td>

        <td></td>

      </tr>

  <tr class="bottom"><td colspan="2"><input type="submit" name="button-submit" class="button submit" value="<?php echo $lang['submit']?>" /></td></tr>

    </table>

    </form>

</div>

<script type="text/javascript">

$("#member").submit(function(){

if(!$("input[name='membernew[username]']").val()){

alert('<?php echo $lang['member_error_0']?>');

return false;

}

<? if($operation=='add') { ?>

if(($("input[name='membernew[password]']").val()).length<6){

alert('<?php echo $lang['member_error_1']?>');

return false;

}

<? } else { ?>

if($("input[name='membernew[password]']").val() && ($("input[name='membernew[password]']").val()).length<6){

alert('<?php echo $lang['member_error_1']?>');

return false;

}

<? } ?>

if(!(/^\w+((-|\.)\w+)*@[A-Za-z0-9]+((\.|-)[A-Za-z0-9]+)*\.[A-Za-z0-9]+$/).exec($("input[name='membernew[email]']").val())){

alert('<?php echo $lang['member_error_2']?>');

return false;

}

return true;

})

</script>

<? } else { ?>

<div class="toolbar">

<span class="right">

<form method="get" name="search" action="<?php echo $BASESCRIPT?>">

<input type="hidden" name="action" value="<?php echo $action?>" />

<input type="text" class="text text200" name="keywords" value="<?php echo $keywords?>" />

<input type="submit" class="button search" value="<?php echo $lang['search']?>" />

</form>

</span>

<h2><?php echo $lang['member_manage']?></h2>

<ul class="tab">

<li class="current"><a href="<?php echo $BASESCRIPT?>?action=member"><span><?php echo $lang['manage']?></span></a></li>

<li><a href="<?php echo $BASESCRIPT?>?action=member&operation=add"><span><?php echo $lang['add']?></span></a></li>

</ul>

</div>

<div class="wrapper">

<form method="post" name="member" action="<?php echo $BASESCRIPT?>?action=member">

<input type="hidden" name="formsubmit" value="yes" />

<input type="hidden" name="formhash" value="<?php echo FORMHASH?>" />

  	<table width="100%" border="0" cellspacing="0" cellpadding="0" class="listtable">

<tr>

  <th width="50"><input type="checkbox" class="checkbox" onclick="checkAll(this,'delete[]')" /> <?php echo $lang['delete_check']?></th>

  <th><?php echo $lang['member_username']?></th>

  <th width="120"><?php echo $lang['member_usergroup']?></th>

  <th width="140"><?php echo $lang['member_regdate']?></th>

  <th width="140"><?php echo $lang['member_lastvisit']?></th>

  <th width="120"><?php echo $lang['member_lastip']?></th>

  <th width="100"><?php echo $lang['member_credits']?></th>

  <th width="60"></th>

</tr>

<tbody id="members"><? if(is_array($members)) { foreach($members as $mb) { ?><tr>

  <td><input<? if(!$mb['adminid']) { ?> name="delete[]"<? } else { ?> disabled="disabled"<? } ?> type="checkbox" value="<?php echo $mb['uid']?>" /></td>

  <td><a href="card.php?uid=<?php echo $mb['uid']?>" target="_blank"><?php echo $mb['username']?></a></td>

  <td><?php echo $mb['grouptitle']?></td>

  <td><?php echo $mb['regdate']?></td>

  <td><?php echo $mb['lastvisit']?></td>

  <td><a href="http://www.ip138.com/ips.asp?ip=<?php echo $mb['lastip']?>" target="_blank"><?php echo $mb['lastip']?></a></td>

  <td><?php echo $mb['credits']?></td>

  <td><? if(($mb['adminid'] && $isfounder) || !$mb['adminid']) { ?><a href="<?php echo $BASESCRIPT?>?action=member&operation=edit&uid=<?php echo $mb['uid']?>&page=<?php echo $page?>"><?php echo $lang['edit']?></a><? } ?></td>

</tr><? } } ?></tbody>

<tr class="bottom">

<td><input type="checkbox" class="checkbox" onclick="checkAll(this,'delete[]')" /> <?php echo $lang['delete_check']?></td>

<td colspan="8">

<span class="pagebox"><?php echo $lang['total']?><?php echo $totalrecords?><?php echo $lang['total_records']?> <?php echo $pagelink?></span>

<input type="submit" class="button" value="<?php echo $lang['submit']?>" />

<input type="button" class="button" value="<?php echo $lang['refresh']?>" onclick="LoadPage('keywords=<?php echo $keywords?>&page=<?php echo $page?>')" />

</td>

</tr>

  </table>

 </form>

</div>

<script type="text/javascript">

$("#members tr").mouseover(function(){$(this).addClass("hover")}).mouseout(function(){$(this).removeClass("hover")});

</script>

<? } ?>