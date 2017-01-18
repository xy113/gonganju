<div class="top">
<div class="inner">
<span class="right" id="timer"></span>
欢迎访问<?php echo $config['sitename']?>
<script type="text/javascript">setInterval("document.getElementById('timer').innerHTML='今天是:'+new Date().toLocaleString()+' 星期'+'日一二三四五六'.charAt(new Date().getDay());",1000);</script>
</div>
</div>
<div class="warpper">
<img src="static/images/logo.png" border="0" />
</div>
<ul id="nav">
<li><a href="/">首页</a></li><? if(is_array($CACHE['nav'])) { foreach($CACHE['nav'] as $nav) { if($nav['position']=='mid') { ?>
<li><a href="<?php echo $nav['url']?>"<? if($nav['open']) { ?> target="_blank"<? } ?>><?php echo $nav['title']?></a></li>
<? } } } ?></ul>
<div class="warpper blank"></div>
