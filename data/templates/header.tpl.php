<div class="top">
<div class="inner">
<span class="right" id="timer"></span>
��ӭ����<?php echo $config['sitename']?>
<script type="text/javascript">setInterval("document.getElementById('timer').innerHTML='������:'+new Date().toLocaleString()+' ����'+'��һ����������'.charAt(new Date().getDay());",1000);</script>
</div>
</div>
<div class="warpper">
<img src="static/images/logo.png" border="0" />
</div>
<ul id="nav">
<li><a href="/">��ҳ</a></li><? if(is_array($CACHE['nav'])) { foreach($CACHE['nav'] as $nav) { if($nav['position']=='mid') { ?>
<li><a href="<?php echo $nav['url']?>"<? if($nav['open']) { ?> target="_blank"<? } ?>><?php echo $nav['title']?></a></li>
<? } } } ?></ul>
<div class="warpper blank"></div>
