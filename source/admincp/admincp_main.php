<?php

/**

 * ============================================================================

 * 版权所有 (C) 2010-2099 WWW.SONGDEWEI.COM All Rights Reserved。

 * 网站地址: http://www.songdewei.com

 * ============================================================================

 * @author:     David Song<songdewei@163.com>

 * @version:    v1.0

 * ---------------------------------------------

 * $Date: 2012-05-20

 * $ID:admincp_main.php

**/

if (!defined('IN_XSCMS')||!defined('IN_ADMINCP'))die('Access Denied!');

include ROOT_PATH."/source/lang/$config[language]/cpmenu.php";

$lang = array_merge($lang,$cpmenu);

$menus = '';

$menus.= checkaction('settings','',FALSE) ? showmenu('settings',array(

	checkaction('settings','basic',FALSE) ? array('menu_settings_basic','settings&operation=basic') : array(),

	checkaction('settings','optimization',FALSE) ? array('menu_settings_optimization','settings&operation=optimization') : array(),

	checkaction('settings','attchment',FALSE) ? array('menu_settings_attachment','settings&operation=attachment') : array(),

	checkaction('settings','image',FALSE) ? array('menu_settings_image','settings&operation=image') : array(),

	checkaction('settings','register',FALSE) ? array('menu_settings_register','settings&operation=register') : array(),

	checkaction('settings','randcode',FALSE) ? array('menu_settings_randcode','settings&operation=randcode') : array(),

	checkaction('settings','contact',FALSE) ? array('menu_settings_contact','settings&operation=contact') : array(),

	checkaction('nav','',FALSE) ? array('menu_nav','nav') : array(),

	checkaction('cplog','',FALSE) ? array('menu_adminlog','cplog') : array(),

	checkaction('about','',FALSE) ? array('menu_about','about') : array()

)) : '';



$menus.= checkaction('member','',FALSE) ? showmenu('user',array(

	checkaction('admingroups','',FALSE) ? array('menu_admingroup','admingroups') : array(),

	checkaction('usergroups','',FALSE) ? array('menu_usergroup','usergroups') : array(),

	checkaction('member','add',FALSE) ? array('menu_adduser','member&operation=add') : array(),

	array('menu_userlist','member'),

)) : '';



$menus.= checkaction('articles','',FALSE) ? showmenu('article',array(

	checkaction('articles','add',FALSE) ? array('menu_addarticle','articles&operation=add') : array(),

	array('menu_articlelist','articles'),

	array('menu_article_pending','articles&audited=0'),

	checkaction('articlecat','',FALSE) ? array('menu_article_category','articlecat') : array(),

	checkaction('source','',FALSE) ? array('menu_article_source','source&type=article') : array()

)) : '';



$menus.= showmenu('video',array(

	array('menu_addvideo','video&operation=add'),

	array('menu_videolist','video'),

	array('menu_video_category','videocat')

));



$menus.= showmenu('image',array(

	array('menu_addimage','image&operation=add'),

	array('menu_imagelist','image'),

	array('menu_image_category','imagecat'),

	array('menu_slide','slide')

));



$menus.= showmenu('tool',array(

	array('menu_runlog','runlog'),

	//array('menu_stat','stat'),

	array('menu_cache','cache'),

	array('menu_email','email'),

	array('menu_check','check')

));



$menus.= checkaction('task','',FALSE) ? showmenu('task',array(

	checkaction('announce','',FALSE) ? array('menu_announce','announce') : array(),

	checkaction('friendlink','',FALSE) ? array('menu_flink','flink') : array(),

	checkaction('faq','',FALSE) ? array('menu_faq','faq') : array(),

	checkaction('feedback','',FALSE) ? array('menu_feedback','feedback') : array()

)) : '';

include template('admin');

?>