<? if($operation=='view') { ?>

<div class="wrapper">

    <table width="100%" border="0" cellspacing="0" cellpadding="0" class="formtable">

  <tr class="odd">

  	<td colspan="4"><strong><?php echo $feedback['subject']?></strong></td>

  </tr>

      <tr>

        <td><?php echo $lang['feedback_user']?></td>

        <td width="160"><?php echo $feedback['username']?></td>

        <td width="80"><?php echo $lang['feedback_time']?></td>

        <td><?php echo $feedback['dateline']?></td>

      </tr>

   <tr>

        <td><?php echo $lang['feedback_tel']?></td>

        <td><?php echo $feedback['tel']?></td>

        <td><?php echo $lang['feedback_email']?></td>

        <td><?php echo $feedback['email']?></td>

      </tr>

      <tr>

        <td><?php echo $lang['feedback_content']?></td>

        <td colspan="3"></td>

      </tr>

  <tr>

  	<td colspan="4"><?php echo $feedback['message']?></td>

  </tr>

    </table>

</div>

</body></html><? exit(); } else { ?>

<div class="toolbar">

<h2><?php echo $lang['feedback']?></h2>

<span class="records"><?php echo $lang['total']?><?php echo $totalrecords?><?php echo $lang['total_records']?></span>

</div>

<div class="wrapper">

<form method="post" name="feedback" action="<?php echo $BASESCRIPT?>?action=feedback">

<input type="hidden" name="formsubmit" value="yes" />

<input type="hidden" name="formhash" value="<?php echo FORMHASH?>" />

    <table width="100%" border="0" cellspacing="0" cellpadding="0" class="listtable">

    <tr>

      <th width="50"><input type="checkbox" class="checkbox" onclick="checkAll(this,'delete[]')"> <?php echo $lang['delete_check']?></th>

      <th><?php echo $lang['title']?></th>

      <th width="100"><?php echo $lang['feedback_user']?></th>

      <th width="100"><?php echo $lang['feedback_tel']?></th>

      <th width="150"><?php echo $lang['feedback_email']?></th>

      <th width="150"><?php echo $lang['feedback_time']?></th>

      <th width="80">&nbsp;</th>

    </tr><? if(is_array($messages)) { foreach($messages as $mm) { ?>    <tr>

      <td><input type="checkbox" class="checkbox" name="delete[]" value="<?php echo $mm['id']?>"></td>

      <td><?php echo $mm['subject']?></td>

      <td><?php echo $mm['username']?></td>

      <td><?php echo $mm['tel']?></td>

      <td><?php echo $mm['email']?></td>

      <td><?php echo $mm['dateline']?></td>

      <td><a href="###" onclick="ViewMsg(<?php echo $mm['id']?>)"><?php echo $lang['feedback_detail']?></a></td>

    </tr><? } } ?><tr class="bottom">

<td><input type="checkbox" class="checkbox" onclick="checkAll(this,'delete[]')" /> <?php echo $lang['delete_check']?></td>

<td colspan="6">

<span class="pagebox"><?php echo $pagelink?></span>

<input type="submit" class="button" value="<?php echo $lang['submit']?>">

<input type="button" class="button" value="<?php echo $lang['refresh']?>" onclick="LoadPage('<?php echo $querystring?>')" />

</td>

</tr>

  	</table>

</form>

</div>

<script type="text/javascript">

function ViewMsg(id){

//window.open(ADMINSCRIPT+'?action=street&areaid='+areaid);

var sw=Math.floor((window.screen.width/2-300));

    var sh=Math.floor((window.screen.height/2-300));

window.open(ADMINSCRIPT+'?action=feedback&operation=view&id='+id,'dialog','Width=600,Height=400,toolbar=no,menubar=no,directories=no,top='+sh+',left='+sw+',resizable=yes,scrollbars=yes,center=yes,help=no,alwaysRaised=yes,location=no, status=no',false);

}

</script>

<? } ?>