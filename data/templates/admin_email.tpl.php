<? if($operation=='newmail') { ?>

<div class="yourpos">

<?php echo $lang['cp_home']?>

<span>ϵͳ����</span>

<span>�����ʼ�</span>

<span>���ʼ�</span>

</div>

<div class="main-div">

<div class="titlediv">

<b>�����ʼ�</b>��

<a href="<?php echo $BASESCRIPT?>?action=email" class="cmenu">����</a> 

<a href="<?php echo $BASESCRIPT?>?action=email&operation=edit&mailid=<?php echo $mailid?>" class="cmenu-on">���ʼ�</a>

</div>

<form method="post" name="newmail" action="<?php echo $BASESCRIPT?>?action=email&operation=newmail&mailid=<?php echo $mailid?>">

<input type="hidden" name="submit" value="yes" />

<input type="hidden" name="formhash" value="<?php echo FORMHASH?>" />

  	<table width="100%" border="0" cellspacing="0" cellpadding="0" class="formtable">

      <tr>

        <td width="360" class="bold">�ʼ�����</td>

        <td>&nbsp;</td>

      </tr>

      <tr>

        <td><input type="text" class="text" name="newmail[subject]" value="<?php echo $mail['subject']?>"></td>

        <td>&nbsp;</td>

      </tr>

      <tr>

        <td class="bold">�ռ���</td>

        <td>&nbsp;</td>

      </tr>

      <tr>

        <td><input type="text" class="text" name="newmail[mailto]" value="<?php echo $mail['mailto']?>"></td>

        <td>�������ռ������� ��;�� ����</td>

      </tr>

      <tr>

        <td class="bold">������</td>

        <td>&nbsp;</td>

      </tr>

      <tr>

        <td><input type="text" class="text" name="newmail[mailfrom]" value="<?php echo $mail['mailfrom']?>"></td>

        <td>��ѡ</td>

      </tr>

      <tr>

        <td class="bold">ͬʱ���͸����л�Ա<input type="checkbox" class="checkbox" name="mailtoall" value="1"></td>

        <td>&nbsp;</td>

      </tr>

      <tr>

        <td class="bold">�ʼ�����</td>

        <td>&nbsp;</td>

      </tr>

      <tr>

        <td colspan="2"><?php echo $fckeditor?></td>

      </tr>

      <tr>

        <td colspan="2"><input type="submit" class="button" name="button-submit" value="<?php echo $lang['submit']?>"></td>

      </tr>

    </table>

</form>

</div>

<? } else { ?>

<div class="toolbar">

<h2>�����ʼ�</h2>

<ul class="tab">

<li class="current"><a href="<?php echo $BASESCRIPT?>?action=email"><span><?php echo $lang['manage']?></span></a></li>

<li><a href="<?php echo $BASESCRIPT?>?action=email&operation=newmail"><span>���ʼ�</span></a></li>

</ul>	

</div>

<div class="wrapper">

<form name="mails" method="post" action="<?php echo $BASESCRIPT?>?action=email">

<table width="100%" border="0" cellspacing="0" cellpadding="0" class="listtable">

  <tr>

<th width="50"><input type="checkbox" class="checkbox" onclick="checkAll(this,'delete[]')"> ɾ?</th>

<th width="300">����</th>

<th width="160">������</th>

<th>�ռ���</th>

<th width="160">����ʱ��</th>

<th width="80"></th>

  </tr>

  <? if(is_array($mails)) { foreach($mails as $mail) { ?>  <tr>

<td><input type="checkbox" class="checkbox" name="delete[]" value="<?php echo $mail['mailid']?>"></td>

<td><?php echo $mail['subject']?></td>

<td><?php echo $mail['mailfrom']?></td>

<td><?php echo $mail['mailto']?></td>

<td><?php echo $mail['dateline']?></td>

<td><a href="<?php echo $BASESCRIPT?>?action=email&operation=newmail&mailid=<?php echo $mail['mailid']?>">���·���</a></td>

  </tr>

  <? } } ?>  <tr class="bottom">

  	<td><input type="checkbox" class="checkbox" onclick="checkAll(this,'delete[]')"> ɾ?</td>

<td colspan="5">

<span class="pagebox"><?php echo $pagelink?></span>

<input type="submit" name="button-submit" value="<?php echo $lang['submit']?>" class="button">

<input type="button" name="button" class="button" value="<?php echo $lang['refresh']?>" onclick="LoadPage('page=<?php echo $page?>')">

</td>

  </tr>

</table>

</form>

</div>

<? } ?>