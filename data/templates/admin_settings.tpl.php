<div class="toolbar"><h2><?php echo $lang['setting_system']?></h2></div>

<div class="wrapper">

<form name="settings" method="post" action="<?php echo $BASESCRIPT?>?action=settings&operation=<?php echo $operation?>">

<input type="hidden" name="formsubmit" value="yes" />

<input type="hidden" name="formhash" value="<?php echo FORMHASH?>" />

<table border="0" cellpadding="0" cellspacing="0" width="100%" class="formtable">

<thead>

<tr class="firstrow">

  <td width="360"><?php echo $lang['setting_'.$operation]?>£º</td>

  <td>&nbsp;</td>

</tr>

</thead>

<? if($operation=='basic') { ?>

<tbody id="basic">

<tr>

  <td width="360" class="bold"><?php echo $lang['setting_sysname']?>£º</td>

  <td>&nbsp;</td>

</tr>

<tr>

  <td><input name="settingnew[sysname]" type="text" class="text" value="<?php echo $config['sysname']?>" /></td>

  <td><?php echo $lang['setting_tips_0']?></td>

</tr>

<tr>

  <td class="bold"><?php echo $lang['setting_sitename']?>£º</td>

  <td>&nbsp;</td>

</tr>

<tr>

  <td><input name="settingnew[sitename]" type="text" class="text" value="<?php echo $config['sitename']?>"/></td>

  <td><?php echo $lang['setting_tips_1']?></td>

</tr>

<tr>

  <td class="bold"><?php echo $lang['setting_siteurl']?>£º</td>

  <td>&nbsp;</td>

</tr>

<tr>

  <td><input name="settingnew[siteurl]" type="text" class="text" value="<?php echo $config['siteurl']?>"/></td>
  <td><?php echo $lang['setting_tips_2']?></td>

</tr>

<tr>

  <td class="bold"><?php echo $lang['setting_keywords']?>£º</td>

  <td>&nbsp;</td>

</tr>

<tr>

  <td><input name="settingnew[keywords]" class="text" value="<?php echo $config['keywords']?>"></td>

  <td><?php echo $lang['setting_tips_3']?></td>

</tr>

<tr>

  <td class="bold"><?php echo $lang['setting_description']?>£º</td>

  <td>&nbsp;</td>

</tr>

<tr>

  <td><textarea name="settingnew[description]" class="textarea"><?php echo $config['description']?></textarea></td>

  <td><?php echo $lang['setting_tips_4']?></td>

</tr>

<tr>

  <td class="bold"><?php echo $lang['setting_icp']?>£º</td>

  <td>&nbsp;</td>

</tr>

<tr>

  <td><input name="settingnew[icp]" type="text" class="text" value="<?php echo $config['icp']?>" /></td>

  <td><?php echo $lang['setting_tips_5']?></td>

</tr>

<tr>

  <td class="bold"><?php echo $lang['setting_copyright']?>£º</td>

  <td>&nbsp;</td>

</tr>

<tr>

  <td><input name="settingnew[copyright]" class="text" value="<?php echo $config['copyright']?>"></td>

  <td><?php echo $lang['setting_tips_6']?></td>

</tr>

<tr>

  <td class="bold"><?php echo $lang['setting_statcode']?>£º</td>

  <td>&nbsp;</td>

</tr>

<tr>

  <td><textarea name="settingnew[statcode]" class="textarea"><?php echo $config['statcode']?></textarea></td>

  <td><?php echo $lang['setting_tips_8']?></td>

</tr>

<tr>

  <td class="bold"><?php echo $lang['setting_slidewidth']?>£º</td>

  <td>&nbsp;</td>

</tr>

<tr>

  <td><input type="text" name="settingnew[slidewidth]" value="<?php echo $config['slidewidth']?>" class="text" /></td>

  <td><?php echo $lang['setting_tips_9']?></td>

</tr>

<tr>

  <td class="bold"><?php echo $lang['setting_slideheight']?>£º</td>

  <td>&nbsp;</td>

</tr>

<tr>

  <td><input type="text" name="settingnew[slideheight]" value="<?php echo $config['slideheight']?>" class="text" /></td>

  <td><?php echo $lang['setting_tips_10']?></td>

</tr>

<tr>

  <td class="bold"><?php echo $lang['setting_sysclosed']?>£º</td>

  <td></td>

</tr>

<tr>

  <td>

<input name="settingnew[sysclosed]" type="radio" class="radio" value="1"<? if($config['sysclosed']) { ?> checked="checked"<? } ?> /> <?php echo $lang['yes']?>¡¡

<input name="settingnew[sysclosed]" type="radio" class="radio" value="0"<? if(!$config['sysclosed']) { ?> checked="checked"<? } ?> /> <?php echo $lang['no']?>  

  </td>

  <td><?php echo $lang['setting_tips_11']?></td>

</tr>

<tr>

  <td class="bold"><?php echo $lang['setting_closedreason']?>£º</td>

  <td>&nbsp;</td>

</tr>



<tr>

  <td><textarea name="settingnew[sysclosedreason]" class="textarea"><?php echo $config['sysclosedreason']?></textarea></td>

  <td><?php echo $lang['setting_tips_12']?></td>

</tr>

</tbody>

<? } if($operation=='optimization') { ?>

<tbody id="optimization">

<tr>

  <td width="360" class="bold"><?php echo $lang['setting_rewrite']?>:</td>

  <td>&nbsp;</td>

</tr>

<tr>

  <td>

<input type="radio" class="radio" name="settingnew[rewrite]"  value="1"<? if($config['rewrite']) { ?> checked="checked"<? } ?> /> <?php echo $lang['yes']?>¡¡

<input type="radio" class="radio" name="settingnew[rewrite]"  value="0"<? if(!$config['rewrite']) { ?> checked="checked"<? } ?> /> <?php echo $lang['no']?>		  

  </td>

  <td><?php echo $lang['setting_tips_13']?></td>

</tr>

<tr>

  <td class="bold"><?php echo $lang['setting_seotitle']?>:</td>

  <td></td>

  </tr>

<tr>

  <td><input name="settingnew[seotitle]" type="text" class="text" value="<?php echo $config['seotitle']?>" /></td>

  <td><?php echo $lang['setting_tips_14']?></td>

  </tr>

<tr>

  <td class="bold"><?php echo $lang['setting_seohead']?>:</td>

  <td></td>

  </tr>

<tr>

  <td><textarea name="settingnew[seohead]" class="textarea"><?php echo $config['seohead']?></textarea></td>

  <td><?php echo $lang['setting_tips_15']?></td>

  </tr>

<tr>

  <td class="bold"><?php echo $lang['setting_iscache']?>£º</td>

  <td></td>

</tr>

<tr>

  <td>

<input type="radio" class="radio" name="settingnew[iscache]"  value="1"<? if($config['iscache']) { ?> checked="checked"<? } ?> /> <?php echo $lang['yes']?>¡¡

<input type="radio" class="radio" name="settingnew[iscache]"  value="0"<? if(!$config['iscache']) { ?> checked="checked"<? } ?> /> <?php echo $lang['no']?>		  

  </td>

  <td><?php echo $lang['setting_tips_16']?></td>

</tr>

<tr>

  <td class="bold"><?php echo $lang['setting_cacheindex']?>:</td>

  <td></td>

  	</tr>

<tr>

  <td><input type="text" name="settingnew[cacheindex]" class="text" value="<?php echo $config['cacheindex']?>" /></td>

  <td><?php echo $lang['setting_tips_17']?></td>

  	</tr>

<tr>

  <td class="bold"><?php echo $lang['setting_cachetime']?>£º</td>

  <td></td>

</tr>

<tr>

  <td><input type="text" name="settingnew[cachetime]" value="<?php echo $config['cachetime']?>" class="text" /></td>

  <td><?php echo $lang['setting_tips_18']?></td>

  	</tr>

<tr>

  <td class="bold"><?php echo $lang['setting_cachedir']?>£º</td>

  <td></td>

</tr>

<tr>

  <td><input type="text" name="settingnew[cachedir]" value="<?php echo $config['cachedir']?>" class="text" /></td>

  <td><?php echo $lang['setting_tips_19']?></td>

  	</tr>

<tr>

  <td class="bold"><?php echo $lang['setting_gzipcompress']?>£º</td>

  <td></td>

</tr>

<tr>

  <td>

<input type="radio" class="radio" name="settingnew[gzipcompress]" value="1"<? if($config['gzipcompress']) { ?> checked="checked"<? } ?> /> <?php echo $lang['yes']?>¡¡

<input type="radio" class="radio" name="settingnew[gzipcompress]" value="0"<? if(!$config['gzipcompress']) { ?> checked="checked"<? } ?> /> <?php echo $lang['no']?>

  </td>

  <td><?php echo $lang['setting_tips_20']?></td>

  </tr>

</tbody>

<? } if($operation=='attachment') { ?>

<tbody id="attcachment">

  <tr>

<td width="360" class="bold"><?php echo $lang['setting_attachdir']?>£º</td>

<td>&nbsp;</td>

  </tr>

  <tr>

<td><input name="settingnew[attachdir]" type="text" value="<?php echo $config['attachdir']?>" class="text" /></td>

<td><?php echo $lang['setting_tips_21']?></td>

  </tr>

  <tr>

<td class="bold"><?php echo $lang['setting_attachmax']?>£º</td>

<td>&nbsp;</td>

  </tr>

  <tr>

<td><input name="settingnew[attachmax]" type="text" value="<?php echo $config['attachmax']?>" class="text" /></td>

<td><?php echo $lang['setting_tips_22']?></td>

  </tr>

  <tr>

<td class="bold"><?php echo $lang['setting_attachtype']?>£º</td>

<td>&nbsp;</td>

  </tr>

  <tr>

<td><input name="settingnew[attachtype]" type="text" value="<?php echo $config['attachtype']?>" class="text" /></td>

<td><?php echo $lang['setting_tips_23']?></td>

  </tr>

</tbody>

<? } if($operation=='image') { ?>

<tbody id="image">

  <tr>

<td width="360" class="bold"><?php echo $lang['setting_imgtype']?>£º</td>

<td>&nbsp;</td>

  </tr>

  <tr>

<td><input name="settingnew[imgtype]" type="text" value="<?php echo $config['imgtype']?>" class="text" /></td>

<td><?php echo $lang['setting_tips_24']?></td>

  </tr>

  <tr>

<td class="bold"><?php echo $lang['setting_thumbstatus']?>£º</td>

<td>&nbsp;</td>

  </tr>

  <tr>

<td>

<input type="radio" class="radio" name="settingnew[thumbstatus]" value="1"<? if($config['thumbstatus']) { ?> checked="checked"<? } ?> />

<?php echo $lang['yes']?>

<input type="radio" class="radio" name="settingnew[thumbstatus]" value="0"<? if(!$config['thumbstatus']) { ?> checked="checked"<? } ?> />

<?php echo $lang['no']?>		 	

</td>

<td><?php echo $lang['setting_tips_25']?></td>

  </tr>

  <tr>

<td class="bold"><?php echo $lang['setting_thumbsize']?>£º</td>

<td>&nbsp;</td>

  </tr>

  <tr>

<td>

<input name="settingnew[thumbwidth]" type="text" value="<?php echo $config['thumbwidth']?>" class="text text60" /> x 

<input name="settingnew[thumbheight]" type="text" value="<?php echo $config['thumbheight']?>" class="text text60" />			

</td>

<td><?php echo $lang['setting_tips_26']?></td>

  </tr>

  <tr>

<td class="bold"><?php echo $lang['setting_watermark']?>£º</td>

<td>&nbsp;</td>

  </tr>

  <tr>

<td>

<input type="radio" class="radio" name="settingnew[watermarkstatus]" value="0"<? if($config['watermarkstatus']==0) { ?> checked="checked"<? } ?> /> <?php echo $lang['setting_nowatermark']?><br />

<input type="radio" class="radio" name="settingnew[watermarkstatus]" value="1"<? if($config['watermarkstatus']==1) { ?> checked="checked"<? } ?> />

#1

<input type="radio" class="radio" name="settingnew[watermarkstatus]" value="2"<? if($config['watermarkstatus']==2) { ?> checked="checked"<? } ?> />

#2

<input type="radio" class="radio" name="settingnew[watermarkstatus]" value="3"<? if($config['watermarkstatus']==3) { ?> checked="checked"<? } ?> />

#3<br />

<input type="radio" class="radio" name="settingnew[watermarkstatus]" value="4"<? if($config['watermarkstatus']==4) { ?> checked="checked"<? } ?> />

#4

<input type="radio" class="radio" name="settingnew[watermarkstatus]" value="5"<? if($config['watermarkstatus']==5) { ?> checked="checked"<? } ?> />

#5

<input type="radio" class="radio" name="settingnew[watermarkstatus]" value="6"<? if($config['watermarkstatus']==6) { ?> checked="checked"<? } ?> />

#6<br />

<input type="radio" class="radio" name="settingnew[watermarkstatus]" value="7"<? if($config['watermarkstatus']==7) { ?> checked="checked"<? } ?> />

#7

<input type="radio" class="radio" name="settingnew[watermarkstatus]" value="8"<? if($config['watermarkstatus']==8) { ?> checked="checked"<? } ?> />

#8

<input type="radio" class="radio" name="settingnew[watermarkstatus]" value="9"<? if($config['watermarkstatus']==9) { ?> checked="checked"<? } ?> />

#9			

</td>

<td><?php echo $lang['setting_tips_27']?></td>

  </tr>

  <tr>

<td class="bold"><?php echo $lang['setting_watermarktype']?>£º</td>

<td>&nbsp;</td>

  </tr>

  <tr>

<td>

<input type="radio" class="radio" name="settingnew[watermarktype]" value="0"<? if(!$config['watermarktype']) { ?> checked="checked"<? } ?> />

<?php echo $lang['setting_watermarktype_0']?>

<input type="radio" class="radio" name="settingnew[watermarktype]" value="1"<? if($config['watermarktype']) { ?> checked="checked"<? } ?> />

<?php echo $lang['setting_watermarktype_1']?>			

</td>

<td><?php echo $lang['setting_tips_28']?></td>

  </tr>

  <tr>

<td class="bold"><?php echo $lang['setting_watertext']?>£º</td>

<td>&nbsp;</td>

  </tr>

  <tr>

<td><textarea name="settingnew[watermarktext]" class="textarea"><?php echo $config['watermarktext']?></textarea></td>

<td><?php echo $lang['setting_tips_29']?></td>

  </tr>

  <tr>

<td class="bold"><?php echo $lang['setting_waterfont']?>£º</td>

<td>&nbsp;</td>

  </tr>

  <tr>

<td><input name="settingnew[watermarkfontfile]" type="text" value="<?php echo $config['watermarkfontfile']?>" class="text" /></td>

<td><?php echo $lang['setting_tips_30']?></td>

  </tr>

  <tr>

<td class="bold"><?php echo $lang['setting_watersize']?>£º</td>

<td>&nbsp;</td>

  </tr>

  <tr>

<td><input name="settingnew[watermarkfontsize]" type="text" value="<?php echo $config['watermarkfontsize']?>" class="text" /></td>

<td><?php echo $lang['setting_tips_31']?></td>

  </tr>

  <tr>

<td class="bold"><?php echo $lang['setting_watercolor']?>£º</td>

<td>&nbsp;</td>

  </tr>

  <tr>

<td><input name="settingnew[watermarkfontcolor]" type="text" value="<?php echo $config['watermarkfontcolor']?>" class="text" /></td>

<td><?php echo $lang['setting_tips_32']?></td>

  </tr>

  <tr>

<td class="bold"><?php echo $lang['setting_waterimg']?>£º</td>

<td>&nbsp;</td>

  </tr>

  <tr>

<td><input name="settingnew[watermarkimg]" type="text" value="<?php echo $config['watermarkimg']?>" class="text" /></td>

<td><?php echo $lang['setting_tips_33']?></td>

  </tr>

  <tr>

<td class="bold"><?php echo $lang['setting_wateralpha']?>£º</td>

<td>&nbsp;</td>

  </tr>

  <tr>

<td><input name="settingnew[watermarkalpha]" type="text" value="<?php echo $config['watermarkalpha']?>" class="text" /></td>

<td><?php echo $lang['setting_tips_34']?></td>

  </tr>

  <tr>

<td class="bold"><?php echo $lang['setting_waterxoffset']?>£º</td>

<td>&nbsp;</td>

  </tr>

  <tr>

<td><input name="settingnew[watermarkoffsetx]" type="text" value="<?php echo $config['watermarkoffsetx']?>" class="text" /></td>

<td><?php echo $lang['setting_tips_35']?></td>

  </tr>

  <tr>

<td class="bold"><?php echo $lang['setting_wateryoffset']?>£º</td>

<td>&nbsp;</td>

  </tr>

  <tr>

<td><input name="settingnew[watermarkoffsety]" type="text" value="<?php echo $config['watermarkoffsety']?>" class="text" /></td>

<td><?php echo $lang['setting_tips_36']?></td>

  </tr>

</tbody>

<? } if($operation=='register') { ?>

<tbody id="register">

<tr>

  <td width="360" class="bold"><?php echo $lang['setting_register_allowed']?>£º</td>

  <td>&nbsp;</td>

</tr>

<tr>

  <td>

<input name="settingnew[regallowed]" type="radio" class="radio" value="1"<? if($config['regallowed']) { ?> checked="checked"<? } ?> />

<?php echo $lang['yes']?>¡¡

  <input name="settingnew[regallowed]" type="radio" class="radio" value="0"<? if(!$config['regallowed']) { ?> checked="checked"<? } ?> />

<?php echo $lang['no']?>			

  </td>

  <td><?php echo $lang['setting_tips_37']?></td>

  </tr>

<tr>

  <td class="bold"><?php echo $lang['setting_register_link']?>:</td>

  <td>&nbsp;</td>

  </tr>

<tr>

  <td><input type="text" name="settingnew[reglink]" value="<?php echo $config['reglink']?>" class="text" /></td>

  <td><?php echo $lang['setting_tips_38']?></td>

  </tr>

<tr>

  <td class="bold"><?php echo $lang['setting_register_linkname']?>:</td>

  <td>&nbsp;</td>

  </tr>

<tr>

  <td><input type="text" name="settingnew[reglinkname]" value="<?php echo $config['reglinkname']?>" class="text" /></td>

  <td><?php echo $lang['setting_tips_39']?></td>

  </tr>

<tr>

  <td class="bold"><?php echo $lang['setting_register_advance']?>£º</td>

  <td>&nbsp;</td>

</tr>

<tr>

  <td>

<input name="settingnew[regadvance]" type="radio" class="radio" value="1"<? if($config['regadvance']) { ?> checked="checked"<? } ?> />

<?php echo $lang['yes']?>¡¡

  <input name="settingnew[regadvance]" type="radio" class="radio" value="0"<? if(!$config['regadvance']) { ?> checked="checked"<? } ?> />

<?php echo $lang['no']?>			

  </td>

  <td><?php echo $lang['setting_tips_40']?></td>

  </tr>

<tr>

  <td class="bold"><?php echo $lang['setting_register_verify']?>:</td>

  <td>&nbsp;</td>

  </tr>

<tr>

  <td>

<select name="settingnew[regverify]" style="width:300px;">

<option value="0"<? if($config['regverify']==0) { ?> selected="selected"<? } ?>><?php echo $lang['setting_register_verify_0']?></option>

<option value="1"<? if($config['regverify']==1) { ?> selected="selected"<? } ?>><?php echo $lang['setting_register_verify_1']?></option>

<option value="2"<? if($config['regverify']==2) { ?> selected="selected"<? } ?>><?php echo $lang['setting_register_verify_2']?></option>

</select>

  </td>

  <td><?php echo $lang['setting_tips_41']?></td>

  </tr>

<tr>

  <td class="bold"><?php echo $lang['setting_register_wellcomemsg']?>£º</td>

  <td>&nbsp;</td>

</tr>

<tr>

  <td>

<ul>

<li><input name="settingnew[wellcomemsg]" type="radio" class="radio" value="0"<? if($config['wellcomemsg']==0) { ?> checked="checked"<? } ?> /> <?php echo $lang['setting_register_wellcomemsg_0']?></li>

<li><input name="settingnew[wellcomemsg]" type="radio" class="radio" value="1"<? if($config['wellcomemsg']==1) { ?> checked="checked"<? } ?> /> <?php echo $lang['setting_register_wellcomemsg_1']?></li>

<li><input name="settingnew[wellcomemsg]" type="radio" class="radio" value="2"<? if($config['wellcomemsg']==2) { ?> checked="checked"<? } ?> /> <?php echo $lang['setting_register_wellcomemsg_2']?></li>

</ul>		 	

</td>

  <td><?php echo $lang['setting_tips_42']?></td>

  </tr>

<tr>

  <td class="bold"><?php echo $lang['setting_register_wellcomemsgtitle']?>£º</td>

  <td>&nbsp;</td>

</tr>

<tr>

  <td><input type="text" name="settingnew[wellcomemsgtitle]" class="text" value="<?php echo $config['wellcomemsgtitle']?>" /></td>

  <td><?php echo $lang['setting_tips_43']?></td>

  </tr>

<tr>

  <td class="bold"><?php echo $lang['setting_register_wellcomemsgtxt']?>£º</td>

  <td>&nbsp;</td>

</tr>

<tr>

  <td><textarea name="settingnew[wellcomemsgtxt]" class="textarea"><?php echo $config['wellcomemsgtxt']?></textarea></td>

  <td><?php echo $lang['setting_tips_44']?></td>

  </tr>

<tr>

  <td class="bold"><?php echo $lang['setting_register_sysrules']?>£º</td>

  <td>&nbsp;</td>

</tr>

<tr>

  <td>

<input name="settingnew[sysrules]" type="radio" class="radio" value="1"<? if($config['sysrules']==1) { ?> checked="checked"<? } ?> />

<?php echo $lang['yes']?>¡¡

<input name="settingnew[sysrules]" type="radio" class="radio" value="0"<? if($config['sysrules']==0) { ?> checked="checked"<? } ?> />

<?php echo $lang['no']?>			

</td>

  <td><?php echo $lang['setting_tips_45']?></td>

  </tr>

<tr>

  <td class="bold"><?php echo $lang['setting_register_sysrulestxt']?>£º</td>

  <td>&nbsp;</td>

</tr>

<tr>

  <td><textarea name="settingnew[sysrulestxt]" class="textarea"><?php echo $config['sysrulestxt']?></textarea></td>

  <td><?php echo $lang['setting_tips_46']?></td>

  </tr>

</tbody>

<? } if($operation=='randcode') { ?>

<tbody id="randcode">

<tr>

  <td width="360" class="bold"><?php echo $lang['setting_randcodestatus']?>£º</td>

  <td></td>

</tr>

<tr>

  <td>

<ul>

<li><input class="checked" name="settingnew[randcodestatus][register]" type="checkbox" value="1"<? if($config['randcodestatus']['register']) { ?> checked="checked"<? } ?> /> <?php echo $lang['setting_randcodestatus_1']?></li>

<li><input class="checked" name="settingnew[randcodestatus][login]" type="checkbox" value="1"<? if($config['randcodestatus']['login']) { ?> checked="checked"<? } ?> /> <?php echo $lang['setting_randcodestatus_2']?></li>

<li><input class="checked" name="settingnew[randcodestatus][post]" type="checkbox" value="1"<? if($config['randcodestatus']['post']) { ?> checked="checked"<? } ?> /> <?php echo $lang['setting_randcodestatus_3']?></li>

<li><input class="checked" name="settingnew[randcodestatus][reply]" type="checkbox" value="1"<? if($config['randcodestatus']['reply']) { ?> checked="checked"<? } ?> /> <?php echo $lang['setting_randcodestatus_4']?></li>

<li><input class="checked" name="settingnew[randcodestatus][modify]" type="checkbox" value="1"<? if($config['randcodestatus']['modify']) { ?> checked="checked"<? } ?> /> <?php echo $lang['setting_randcodestatus_5']?></li>

</ul>			  

  </td>

  <td><?php echo $lang['setting_tips_47']?></td>

  </tr>

</tbody>

<? } if($operation=='contact') { ?>

<tbody id="contact">

<tr>

<td class="bold" width="360"><?php echo $lang['setting_contact_name']?></td>

<td></td>

</tr>

<tr>

<td width="360"><input type="text" class="text" name="settingnew[ct_name]" value="<?php echo $config['ct_name']?>" /></td>

<td><?php echo $lang['setting_tips_48']?></td>

</tr>

<tr>

<td class="bold"><?php echo $lang['setting_contact_tel']?></td>

<td></td>

</tr>

<tr>

<td><input type="text" class="text" name="settingnew[ct_tel]" value="<?php echo $config['ct_tel']?>" /></td>

<td><?php echo $lang['setting_tips_49']?></td>

</tr>

<tr>

<td class="bold"><?php echo $lang['setting_contact_fax']?></td>

<td></td>

</tr>

<tr>

<td><input type="text" class="text" name="settingnew[ct_fax]" value="<?php echo $config['ct_fax']?>" /></td>

<td><?php echo $lang['setting_tips_50']?></td>

</tr>

<tr>

<td class="bold"><?php echo $lang['setting_contact_email']?></td>

<td></td>

</tr>

<tr>

<td><input type="text" class="text" name="settingnew[ct_email]" value="<?php echo $config['ct_email']?>" /></td>

<td><?php echo $lang['setting_tips_51']?></td>

</tr>

<tr>

<td class="bold"><?php echo $lang['setting_contact_qq']?></td>

<td></td>

</tr>

<tr>

<td><input type="text" class="text" name="settingnew[ct_qq]" value="<?php echo $config['ct_qq']?>" /></td>

<td><?php echo $lang['setting_tips_52']?></td>

</tr>

<tr>

<td class="bold"><?php echo $lang['setting_contact_msn']?></td>

<td></td>

</tr>

<tr>

<td><input type="text" class="text" name="settingnew[ct_msn]" value="<?php echo $config['ct_msn']?>" /></td>

<td><?php echo $lang['setting_tips_53']?></td>

</tr>

<tr>

<td class="bold"><?php echo $lang['setting_contact_postnum']?></td>

<td></td>

</tr>

<tr>

<td><input type="text" class="text" name="settingnew[ct_postnum]" value="<?php echo $config['ct_postnum']?>" /></td>

<td><?php echo $lang['setting_tips_54']?></td>

</tr>

<tr>

<td class="bold"><?php echo $lang['setting_contact_address']?></td>

<td></td>

</tr>

<tr>

<td><input type="text" class="text" name="settingnew[ct_address]" value="<?php echo $config['ct_address']?>" /></td>

<td><?php echo $lang['setting_tips_55']?></td>

</tr>

<tr>

<td class="bold"><?php echo $lang['setting_contact_drive']?></td>

<td></td>

</tr>

<tr>

<td><input type="text" class="text" name="settingnew[ct_drive]" value="<?php echo $config['ct_drive']?>" /></td>

<td><?php echo $lang['setting_tips_56']?></td>

</tr>

<tr>

<td class="bold"><?php echo $lang['setting_contact_map']?></td>

<td></td>

</tr>

<tr>

<td><textarea class="textarea" name="settingnew[ct_map]"><?php echo $config['ct_map']?></textarea></td>

<td><?php echo $lang['setting_tips_57']?></td>

</tr>

</tbody>

<? } ?>

<tfoot>

  <tr class="bottom">

<td colspan="2"><input type="submit" name="button-submit" class="button submit" value="<?php echo $lang['submit']?>" /></td>

  </tr>

</tfoot>

</table>

</form>

</div>