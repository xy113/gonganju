<div class="toolbar">

<h2>导航栏设置</h2>

</div>

<div class="wrapper">

<form name="about" method="post" action="<?php echo $BASESCRIPT?>?action=<?php echo $action?>">

<input type="hidden" name="formsubmit" value="yes" />

<input type="hidden" name="formhash" value="<?php echo FORMHASH?>" />

    <table width="100%" border="0" cellspacing="0" cellpadding="0" class="listtable">

      <tr>

        <th width="50"><input type="checkbox" onclick="checkAll(this,'delete[]')"> 删?</th>

        <th width="80">排序</th>

        <th width="300">标题</th>

        <th>链接</th>

        <th width="80">位置</th>

        <th width="80">新窗口打开</th>

        <th width="60">可用</th>

      </tr>

  <tr><th colspan="7">顶部导航</th></tr>

  <? if(is_array($navs['top']['0'])) { foreach($navs['top']['0'] as $nav) { ?>  <tbody id="nav_<?php echo $nav['id']?>">

      <tr>

        <td><input type="checkbox" name="delete[]" value="<?php echo $nav['id']?>"></td>

        <td><input type="text" class="text text60" name="navnew[<?php echo $nav['id']?>][displayorder]" value="<?php echo $nav['displayorder']?>"></td>

        <td><input type="text" class="text text160" style="font-weight:bold;" name="navnew[<?php echo $nav['id']?>][title]" value="<?php echo $nav['title']?>"> <a href="###" class="addcat" onclick="addChild(<?php echo $nav['id']?>,'top')">添加子导航</a></td>

        <td><input type="text" class="text" name="navnew[<?php echo $nav['id']?>][url]" value="<?php echo $nav['url']?>"></td>

        <td>

<select class="select" name="navnew[<?php echo $nav['id']?>][position]">

<option value="top" selected="selected">顶部</option>

<option value="mid">中部</option>

<option value="bot">底部</option>

</select>

</td>

        <td><input type="checkbox" name="navnew[<?php echo $nav['id']?>][open]" value="1"<? if($nav['open']) { ?> checked="checked"<? } ?>></td>

        <td><input type="checkbox" name="navnew[<?php echo $nav['id']?>][display]" value="1"<? if($nav['display']) { ?> checked="checked"<? } ?>></td>

      </tr>

  <? if(is_array($navs['top'][$nav['id']])) { foreach($navs['top'][$nav['id']] as $sub) { ?>  <tr>

        <td><input type="checkbox" name="delete[]" value="<?php echo $sub['id']?>"></td>

        <td><input type="text" class="text text60" name="navnew[<?php echo $sub['id']?>][displayorder]" value="<?php echo $sub['displayorder']?>"></td>

        <td>|——<input type="text" class="text text160" name="navnew[<?php echo $sub['id']?>][title]" value="<?php echo $sub['title']?>"></td>

        <td><input type="text" class="text" name="navnew[<?php echo $sub['id']?>][url]" value="<?php echo $sub['url']?>"></td>

        <td>

<select class="select" name="navnew[<?php echo $sub['id']?>][position]">

<option value="top" selected="selected">顶部</option>

<option value="mid">中部</option>

<option value="bot">底部</option>

</select>

</td>

        <td><input type="checkbox" name="navnew[<?php echo $sub['id']?>][open]" value="1"<? if($sub['open']) { ?> checked="checked"<? } ?>></td>

        <td><input type="checkbox" name="navnew[<?php echo $sub['id']?>][display]" value="1"<? if($sub['display']) { ?> checked="checked"<? } ?>></td>

      </tr>

  <? } } ?>  </tbody>

  <? } } ?>  <tr><th colspan="7">中部导航</th></tr>

  <? if(is_array($navs['mid']['0'])) { foreach($navs['mid']['0'] as $nav) { ?>  <tbody id="nav_<?php echo $nav['id']?>">

      <tr>

        <td><input type="checkbox" name="delete[]" value="<?php echo $nav['id']?>"></td>

        <td><input type="text" class="text text60" name="navnew[<?php echo $nav['id']?>][displayorder]" value="<?php echo $nav['displayorder']?>"></td>

        <td><input type="text" class="text text160" style="font-weight:bold;" name="navnew[<?php echo $nav['id']?>][title]" value="<?php echo $nav['title']?>"> <a href="###" class="addcat" onclick="addChild(<?php echo $nav['id']?>,'mid')">添加子导航</a></td>

        <td><input type="text" class="text" name="navnew[<?php echo $nav['id']?>][url]" value="<?php echo $nav['url']?>"></td>

        <td>

<select class="select" name="navnew[<?php echo $nav['id']?>][position]">

<option value="top">顶部</option>

<option value="mid" selected="selected">中部</option>

<option value="bot">底部</option>

</select>

</td>

        <td><input type="checkbox" name="navnew[<?php echo $nav['id']?>][open]" value="1"<? if($nav['open']) { ?> checked="checked"<? } ?>></td>

        <td><input type="checkbox" name="navnew[<?php echo $nav['id']?>][display]" value="1"<? if($nav['display']) { ?> checked="checked"<? } ?>></td>

      </tr>

  <? if(is_array($navs['mid'][$nav['id']])) { foreach($navs['mid'][$nav['id']] as $sub) { ?>  <tr>

        <td><input type="checkbox" name="delete[]" value="<?php echo $sub['id']?>"></td>

        <td><input type="text" class="text text60" name="navnew[<?php echo $sub['id']?>][displayorder]" value="<?php echo $sub['displayorder']?>"></td>

        <td>|——<input type="text" class="text text160" name="navnew[<?php echo $sub['id']?>][title]" value="<?php echo $sub['title']?>"></td>

        <td><input type="text" class="text" name="navnew[<?php echo $sub['id']?>][url]" value="<?php echo $sub['url']?>"></td>

        <td>

<select class="select" name="navnew[<?php echo $sub['id']?>][position]">

<option value="top">顶部</option>

<option value="mid" selected="selected">中部</option>

<option value="bot">底部</option>

</select>

</td>

        <td><input type="checkbox" name="navnew[<?php echo $sub['id']?>][open]" value="1"<? if($sub['open']) { ?> checked="checked"<? } ?>></td>

        <td><input type="checkbox" name="navnew[<?php echo $sub['id']?>][display]" value="1"<? if($sub['display']) { ?> checked="checked"<? } ?>></td>

      </tr>

  <? } } ?>  </tbody>

  <? } } ?>  <tr><th colspan="7">底部导航</th></tr>

  <? if(is_array($navs['bot']['0'])) { foreach($navs['bot']['0'] as $nav) { ?>  <tbody id="nav_<?php echo $nav['id']?>">

      <tr>

        <td><input type="checkbox" name="delete[]" value="<?php echo $nav['id']?>"></td>

        <td><input type="text" class="text text60" name="navnew[<?php echo $nav['id']?>][displayorder]" value="<?php echo $nav['displayorder']?>"></td>

        <td><input type="text" class="text text160" style="font-weight:bold;" name="navnew[<?php echo $nav['id']?>][title]" value="<?php echo $nav['title']?>"> <a href="###" class="addcat" onclick="addChild(<?php echo $nav['id']?>,'bot')">添加子导航</a></td>

        <td><input type="text" class="text" name="navnew[<?php echo $nav['id']?>][url]" value="<?php echo $nav['url']?>"></td>

        <td>

<select class="select" name="navnew[<?php echo $nav['id']?>][position]">

<option value="top">顶部</option>

<option value="mid">中部</option>

<option value="bot" selected="selected">底部</option>

</select>

</td>

        <td><input type="checkbox" name="navnew[<?php echo $nav['id']?>][open]" value="1"<? if($nav['open']) { ?> checked="checked"<? } ?>></td>

        <td><input type="checkbox" name="navnew[<?php echo $nav['id']?>][display]" value="1"<? if($nav['display']) { ?> checked="checked"<? } ?>></td>

      </tr>

  <? if(is_array($navs['bot'][$nav['id']])) { foreach($navs['bot'][$nav['id']] as $sub) { ?>  <tr>

        <td><input type="checkbox" name="delete[]" value="<?php echo $sub['id']?>"></td>

        <td><input type="text" class="text text60" name="navnew[<?php echo $sub['id']?>][displayorder]" value="<?php echo $sub['displayorder']?>"></td>

        <td>|——<input type="text" class="text text160" name="navnew[<?php echo $sub['id']?>][title]" value="<?php echo $sub['title']?>"></td>

        <td><input type="text" class="text" name="navnew[<?php echo $sub['id']?>][url]" value="<?php echo $sub['url']?>"></td>

        <td>

<select class="select" name="navnew[<?php echo $sub['id']?>][position]">

<option value="top">顶部</option>

<option value="mid">中部</option>

<option value="bot" selected="selected">底部</option>

</select>

</td>

        <td><input type="checkbox" name="navnew[<?php echo $sub['id']?>][open]" value="1"<? if($sub['open']) { ?> checked="checked"<? } ?>></td>

        <td><input type="checkbox" name="navnew[<?php echo $sub['id']?>][display]" value="1"<? if($sub['display']) { ?> checked="checked"<? } ?>></td>

      </tr>

  <? } } ?>  </tbody>

  <? } } ?>  <tbody id="newnav"></tbody>

  <tr>

  	<td></td>

  	<td colspan="6"><a href="###" class="addcat" id="addnav">添加新导航</a></td>

  </tr>

  <tr class="bottom">

<td colspan="7"><input type="submit" class="button" value="<?php echo $lang['submit']?>"> <input type="button" class="button" value="<?php echo $lang['refresh']?>" onClick="LoadPage()"></td>

  </tr>

    </table>

  	</form>

</div>

<script type="text/javascript">

function addChild(id,pos){

$("#nav_"+id).append('<tr><td><input type="hidden" name="newfid[]" value="'+id+'"></td><td><input type="text" class="text text60" name="neworder[]" value="0"></td>'+

        '<td>|——<input type="text" class="text text160" name="newtitle[]"></td><td><input type="text" class="text" name="newurl[]"></td>'+

        '<td><select class="select" name="newposition[]">'+

'<option value="top"'+(pos=='top' ? ' selected="selected"' : '')+'>顶部</option>'+

'<option value="mid"'+(pos=='mid' ? ' selected="selected"' : '')+'>中部</option>'+

'<option value="bot"'+(pos=='bot' ? ' selected="selected"' : '')+'>底部</option>'+

'</select></td><td><input type="checkbox" name="newopen[]" value="1"></td><td><input type="checkbox" name="newdisplay[]" value="1" checked="checked"></td></tr>');

}

$("#addnav").click(function(){

$("#newnav").append('<tr><td><input type="hidden" name="newfid[]" value="0"></td><td><input type="text" class="text text60" name="neworder[]" value="0"></td>'+

        '<td><input type="text" class="text text160" style="font-weight:bold;" name="newtitle[]"></td><td><input type="text" class="text" name="newurl[]"></td><td>'+

'<select class="select" name="newposition[]"><option value="top">顶部</option><option value="mid">中部</option><option value="bot">底部</option></select>'+

'</td><td><input type="checkbox" name="newopen[]" value="1"></td><td><input type="checkbox" name="newdisplay[]" value="1" checked="checked"></td></tr>');

});

</script>