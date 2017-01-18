<div class="toolbar">

<h2><?php echo $lang['runlog']?></h2>

<span class="records"><?php echo $lang['total']?><?php echo $totalrecords?><?php echo $lang['total_records']?></span>

</div>

<div class="wrapper">

  <table width="100%" border="0" cellspacing="0" cellpadding="0" class="listtable">

<tr>

  <th width="80"><?php echo $lang['cplog_admin']?></th>

  <th width="300"><?php echo $lang['cplog_body']?></th>

  <th><?php echo $lang['cplog_requesturi']?></th>

  <th width="120"><?php echo $lang['cplog_ipaddr']?></th>

  <th width="100"><?php echo $lang['cplog_time']?></th>

</tr><? if(is_array($cplogs)) { foreach($cplogs as $log) { ?><tr onmouseover="$(this).addClass('hover')" onmouseout="$(this).removeClass('hover')">

  <td><?php echo $log['username']?></td>

  <td><?php echo $log['body']?></td>

  <td><?php echo $log['requesturi']?></td>

  <td><a href="http://www.ip138.com/ips.asp?ip=<?php echo $log['ipaddr']?>" target="_blank"><?php echo $log['ipaddr']?></a></td>

  <td><?php echo $log['dateline']?></td>

</tr><? } } ?><tr class="bottom">

<td colspan="5"><span class="pagebox"><?php echo $pagelink?></span></td>

</tr>

  </table>

</div>