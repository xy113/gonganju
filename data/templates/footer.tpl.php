<div class="warpper" id="footer">
<div class="blank"></div>
<div class="menu">
<a href="<?php echo $siteurl?>" target="_blank">��ҳ</a>��<? if(is_array($CACHE['nav'])) { foreach($CACHE['nav'] as $nav) { if($nav['position']=='mid') { ?>
<a href="<?php echo $nav['url']?>"><?php echo $nav['title']?></a>��
<? } } } ?></div>
<p><?php echo $config['copyright']?></p>
<p>����ʹ�ã�1024*768���Ϸֱ��� 16λ������ɫ IE5.0���ϰ汾�����</p>
<div class="blank"></div>
</div>
</body>
</html>