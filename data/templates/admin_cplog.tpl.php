<div class="toolbar">

<span class="right">

<form method="get" name="search" action="<?php echo $BASESCRIPT?>">

<input type="hidden" name="action" value="<?php echo $action?>" />

<input type="text" class="text text200" id="keywords" value="<?php echo $keywords?>" />

<input type="submit" class="button search" value="<?php echo $lang['search']?>" />

</form>

</span>

<h2><?php echo $lang['cplog_list']?></h2>

<span class="records"><?php echo $lang['total']?><?php echo $totalrecords?><?php echo $lang['total_records']?></span>

</div>

<div class="wrapper">

  <table width="100%" border="0" cellspacing="0" cellpadding="0" class="listtable">

<tr>

  <th width="50"><input type="checkbox" class="checkbox" onclick="checkAll(this,'delete[]')" /> <?php echo $lang['delete_check']?></td>

  <th width="60"><?php echo $lang['cplog_admin']?></th>

  <th width="360"><?php echo $lang['cplog_body']?></th>

  <th><?php echo $lang['cplog_requesturi']?></th>

  <th width="80"><?php echo $lang['cplog_ipaddr']?></th>

  <th width="100" class="last"><?php echo $lang['cplog_time']?></th>

</tr>

<tbody id="cplogs"><? if(is_array($cplogs)) { foreach($cplogs as $log) { ?><tr>

  <td><label><input name="delete[]" type="checkbox" value="<?php echo $log['id']?>" class="checkbox" /></label></td>

  <td><a href="<?php echo $BASESCRIPT?>?action=cplog&uid=<?php echo $log['uid']?>"><?php echo $log['username']?></a></td>

  <td><?php echo $log['body']?></td>

  <td><?php echo $log['requesturi']?></td>

  <td><a href="http://www.ip138.com/ips.asp?ip=<?php echo $log['ipaddr']?>" target="_blank"><?php echo $log['ipaddr']?></a></td>

  <td><?php echo $log['dateline']?></td>

</tr><? } } ?></tbody>

<tr class="bottom">

<td colspan="6">

<span class="pagebox"><?php echo $pagelink?></span>

<b class="button" tabindex="0" onclick="Delete('delete[]','<?php echo $querystring?>&formhash=<?php echo FORMHASH?>')"><?php echo $lang['del']?></b>

<b class="button" tabindex="0" onclick="ClearAll()"><?php echo $lang['cplog_clear']?></b>

<b class="button" tabindex="0" onclick="Export()"><?php echo $lang['cplog_export']?></b>

</td>

</tr>

  </table>

</div>

<script type="text/javascript">

$("#cplogs tr").mouseover(function(){$(this).addClass("hover")}).mouseout(function(){$(this).removeClass("hover")});

function ClearAll(){

if(confirm(drop_confirm)){

$.ajax({url:ajaxurl+'&operation=clearall&formhash=<?php echo FORMHASH?>',

beforSend:showloading("正在删除信息..."),

success:function(response){$("#body").html(response)},

complete:closeloading()

})

}

}

function Export(){

window.open(baseurl+"&operation=export");

}

</script>