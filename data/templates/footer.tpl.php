<div class="warpper" id="footer">
<div class="blank"></div>
<div class="menu">
<a href="<?php echo $siteurl?>" target="_blank">首页</a>　<? if(is_array($CACHE['nav'])) { foreach($CACHE['nav'] as $nav) { if($nav['position']=='mid') { ?>
<a href="<?php echo $nav['url']?>"><?php echo $nav['title']?></a>　
<? } } } ?></div>
<p><?php echo $config['copyright']?></p>
<p>建议使用：1024*768以上分辨率 16位以上颜色 IE5.0以上版本浏览器</p>
<div class="blank"></div>
</div>
</body>
</html>