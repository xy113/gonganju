<?php

/**

 * ============================================================================

 * 版权所有 (C) 2010 WWW.SONGDEWEI.COM All Rights Reserved。

 * 网站地址: http://www.songdewei.com

 * ============================================================================

 * @author:     David Song<songdewei@163.com>

 * @version:    v1.0

 * ---------------------------------------------

 * $Date: 2012-06-02

 * $ID: admincp.php

*/ 

if(!defined('IN_XSCMS')){

   die('Access Denied!');

}

$cplang = array();

/**公共部分**/

$cplang['home'] = '首页';

$cplang['quit'] = '退出';

$cplang['founder'] = '创始人';

$cplang['cphome'] = '管理中心';

$cplang['appname'] = '后台管理系统';

$cplang['query_info'] = '页面共执行了%d次查询,用时%s秒。';

$cplang['copyright'] = '&copy;2012-2099 <a href="http://www.toking.cc" target="_blank">WWW.SONGDEWEI.COM</a> 版权所有，并保留所有权利。';

$cplang['remark'] = '备注';

$cplang['recommend'] = '推荐';

$cplang['unrecommend'] = '取消推荐';

$cplang['display'] = '显示';

$cplang['displayorder'] = '显示顺序';

$cplang['hidden'] = '隐藏';

$cplang['resume'] = '恢复';

$cplang['export'] = '导入';

$cplang['import'] = '导出';

$cplang['available'] = '可用';

$cplang['add_newoption'] = '添加新项';

$cplang['ctrlenter'] = '完成后可按 Ctrl+Enter 提交';

$cplang['repeat_testing'] = '检测重复';

$cplang['sysmessage'] = '系统提示';

$cplang['clearcache'] = '清除缓存';

$cplang['markas'] = '标记为';

$cplang['comment'] = '评论';

$cplang['audit'] = '审核';

$cplang['audited'] = '已审';

$cplang['unaudited'] = '未审';

$cplang['save_edit'] = '保存修改';

$cplang['back_list'] = '返回列表';

$cplang['ascorder'] = '升序排列';

$cplang['descorder'] = '降序排列';

$cplang['checkrepeat'] = '检测重复';

$cplang['allowcomment'] = '允许评论';

$cplang['allowvote'] = '允许投票';

$cplang['setrecommend'] = '设为推荐';

$cplang['passaudited'] = '通过审核';

$cplang['checkrepeat'] = '检测重复';

$cplang['loading'] = '正在处理您的请求...';

$cplang['deleting'] = '正在删除信息...';

$cplang['complete'] = '操作已完成';

$cplang['priv_error'] = '权限错误';

$cplang['noaccess'] = '对不起,您无权进行此项操作。';

$cplang['action_noaccess'] = '您没有权限进行次操作。';

$cplang['drop_confirm'] = '数据删除后将不能恢复，您确定要删除所选记录吗?';

$cplang['no_select'] = '您还没有选择任何选项。';

$cplang['upload_file'] = '上传文件';

$cplang['upfile_type_error'] = '上传文件的类型不正确。';

$cplang['upfile_failed'] = '上传文件失败。';

$cplang['go_back'] = '返回上一页';

$cplang['back'] = '返回';

$cplang['continue'] = '继续';

$cplang['system_message'] = '系统信息';

$cplang['select_all'] = '全选';

$cplang['select_please'] = '请选择...';

$cplang['delete_check'] = '删?';

/*用户登录*/

$cplang['login_tips'] = 'THECMS是一个采用 PHP 和 MySQL 数据库构建的高效企业网站解决方案, 是众多企业网站首选技术品牌。';

$cplang['login_username'] = '用户名';

$cplang['login_password'] = '密　码';

$cplang['login_randcode'] = '验证码';

$cplang['login_btnlogin'] = '登 录';

$cplang['login_btnreset'] = '重 置';

$cplang['login_error'] = '账号或密码输入错误，请重新输入。';

$cplang['login_randcode_error'] = '请输入验证码。';

$cplang['login_succed'] = '登录成功';

$cplang['login_failed'] = '登录失败';

/**后台主页**/

$cplang['hello'] = '您好';

$cplang['edit_profile'] = '编辑个人资料';

$cplang['logout'] = '退出登录';

$cplang['sitehome'] = '站点首页';

$cplang['aboutus'] = '关于我们';

$cplang['tech_support'] = '技术支持';

$cplang['dev_documents'] = '开发文档';

$cplang['new'] = '新建';

/*服务器信息*/

$cplang['server_info'] = '服务器基本信息';

$cplang['server_os'] = '服务器系统';

$cplang['server_ip'] = '服务器IP';

$cplang['web_server'] = '服务器类型';

$cplang['php_ver'] = 'PHP版本';

$cplang['mysql_ver'] = 'MySql版本';

$cplang['server_issocket'] = 'Socket 支持';

$cplang['server_iszlib'] = 'Zlib 支持';

$cplang['server_max_upload'] = '附件上传限制';

$cplang['safe_mode'] = '安全模式';

$cplang['safe_mode_gid'] = '安全模式GID';

$cplang['gd_ver'] = 'GD版本';

$cplang['web_charset'] = '页面编码';

/*系统设置*/

/*基本设置*/

$cplang['setting_system'] = '系统配置';

$cplang['setting_basic'] = '站点信息设置';

$cplang['setting_sysname'] = '系统名称';

$cplang['setting_sitename'] = '网站名称';

$cplang['setting_siteurl'] = '网站地址';

$cplang['setting_keywords'] = '关键字';

$cplang['setting_description'] = '网站描述';

$cplang['setting_icp'] = '备案信息';

$cplang['setting_copyright'] = '版权信息';

$cplang['setting_statcode'] = '统计代码';

$cplang['setting_islog'] = '启用日志';

$cplang['setting_sysclosed'] = '关闭网站';

$cplang['setting_closedreason'] = '关闭原因';

$cplang['setting_slidewidth'] = '幻灯片宽';

$cplang['setting_slideheight'] = '幻灯片高';

/**优化配置**/

$cplang['setting_optimization'] = '系统优化配置';

$cplang['setting_rewrite'] = 'URL 静态化';

$cplang['setting_seotitle'] = '标题附加字';

$cplang['setting_seohead'] = '其他头部信息';

$cplang['setting_iscache'] = '启用缓存';

$cplang['setting_cacheindex'] = '缓存首页有效期';

$cplang['setting_cachetime'] = '页面缓存时间';

$cplang['setting_cachedir'] = '缓存目录';

$cplang['setting_gzipcompress'] = '页面 Gzip 压缩';

/**附件设置**/

$cplang['setting_attachment'] = '附件上传设置';

$cplang['setting_attachdir'] = '附件保存目录';

$cplang['setting_attachmax'] = '允许上传附件最大值';

$cplang['setting_attachtype'] = '允许上传的附件类型';

/**图片附件**/

$cplang['setting_image'] = '图片上传设置';

$cplang['setting_imgtype'] = '允许上传的图片类型';

$cplang['setting_thumbstatus'] = '自动生成缩略图';

$cplang['setting_thumbsize'] = '缩略大小';

$cplang['setting_watermark'] = '图片水印';

$cplang['setting_nowatermark'] = '不启用水印功能';

$cplang['setting_watermarktype'] = '水印类型';

$cplang['setting_watermarktype_0'] = '图片水印';

$cplang['setting_watermarktype_1'] = '文字水印';

$cplang['setting_watertext']='水印文字';

$cplang['setting_waterimg']='水印图片';

$cplang['setting_waterfont']='水印字体';

$cplang['setting_watersize']='水印文字大小';

$cplang['setting_watercolor']='水印文字颜色';

$cplang['setting_wateralpha']='水印透明度';

$cplang['setting_waterpos']='水印位置';

$cplang['setting_waterxoffset'] = '文字水印横向偏移量';

$cplang['setting_wateryoffset'] = '文字水印纵向偏移量';

/**用户注册设置**/

$cplang['setting_register'] = '用户注册设置';

$cplang['setting_register_link'] = '注册文件名';

$cplang['setting_register_linkname'] = '注册链接文字';

$cplang['setting_register_allowed'] = '开放用户注册';

$cplang['setting_register_advance'] = '显示高级选项';

$cplang['setting_register_verify'] = '新用户注册验证';

$cplang['setting_register_verify_0'] = '无';

$cplang['setting_register_verify_1'] = 'Email验证';

$cplang['setting_register_verify_2'] = '人工审核';

$cplang['setting_register_wellcomemsg'] = '发送欢迎信息';

$cplang['setting_register_wellcomemsg_0'] = '不发送';

$cplang['setting_register_wellcomemsg_1'] = '发送欢迎短信息';

$cplang['setting_register_wellcomemsg_2'] = '发送欢迎Email';

$cplang['setting_register_wellcomemsgtitle'] = '欢迎邮件标题';

$cplang['setting_register_wellcomemsgtxt'] = '欢迎邮件内容';

$cplang['setting_register_sysrules'] = '显示许可协议';

$cplang['setting_register_sysrulestxt'] = '许可协议内容';

/**验证码设置**/

$cplang['setting_randcode'] = '验证码设置';

$cplang['setting_randcodestatus'] = '启用验证码';

$cplang['setting_randcodestatus_1'] = '新用户注册';

$cplang['setting_randcodestatus_2'] = '用户登录';

$cplang['setting_randcodestatus_3'] = '发表提问与回复';

$cplang['setting_randcodestatus_4'] = '发表评论';

$cplang['setting_randcodestatus_5'] = '修改个人资料';

/*联系信息设置*/

$cplang['setting_contact'] = '联系信息设置';

$cplang['setting_contact_name'] = '联系人';

$cplang['setting_contact_tel'] = '联系电话';

$cplang['setting_contact_fax'] = '传真号码';

$cplang['setting_contact_email'] = '电子邮件';

$cplang['setting_contact_qq'] = 'QQ号码';

$cplang['setting_contact_msn'] = 'MSN';

$cplang['setting_contact_postnum'] = '邮政编码';

$cplang['setting_contact_address'] = '联系地址';

$cplang['setting_contact_drive'] = '乘车路线';

$cplang['setting_contact_map'] = '电子地图';



$cplang['setting_tips_0'] = '系统名称，将显示在导航条和标题中';

$cplang['setting_tips_1'] = '网站名称，将显示在页面底部的联系方式处';

$cplang['setting_tips_2'] = '网站 URL，将作为链接显示在页面底部';

$cplang['setting_tips_3'] = 'Keywords 项出现在页面头部的 Meta 标签中，用于记录本页面的关键字，多个关键字间请用半角逗号 "," 隔开';

$cplang['setting_tips_4'] = 'Description 出现在页面头部的 Meta 标签中，用于记录本页面的概要与描述';

$cplang['setting_tips_5'] = '页面底部可以显示 ICP 备案信息，如果网站已备案，在此输入您的授权码，它将显示在页面底部，如果没有请留空';

$cplang['setting_tips_6'] = '网站的版权信息，将显示在页面底部';

$cplang['setting_tips_7'] = '是否记录后台操作日志，是为记录，否为不记录';

$cplang['setting_tips_8'] = '用于统计网站访问情况的第三方统计代码，通常为JS代码';

$cplang['setting_tips_9'] = '首页幻灯片图片宽度';

$cplang['setting_tips_10'] = '首页幻灯片的图片高度';

$cplang['setting_tips_11'] = '暂时将网站关闭，其他人无法访问，但不影响管理员访问';

$cplang['setting_tips_12'] = '网站关闭时出现的提示信息';



$cplang['setting_tips_13'] = 'URL 静态化可以提高搜索引擎抓取，开启本功能需要对 Web 服务器增加相应的 Rewrite 规则，且会轻微增加服务器负担。';

$cplang['setting_tips_14'] = '网页标题通常是搜索引擎关注的重点，本附加字设置将出现在标题中论坛名称的后面，如果有多个关键字，建议用 "|"、","(不含引号) 等符号分隔';

$cplang['setting_tips_15'] = '如需在 <head></head> 中添加其他的 HTML 代码，可以使用本设置，否则请留空';

$cplang['setting_tips_16'] = '设置是否启用页面缓存，启用缓存可以减轻服务器负担，提高浏览速度';

$cplang['setting_tips_17'] = '设置首页缓存更新的时间，单位为秒，0 为关闭（此处关闭以后，缓存系数将不再起作用），建议设置为 900。';

$cplang['setting_tips_18'] = '设置页面缓存更新的时间，单位为秒，0 为关闭。请根据实际情况进行调整，建议设置为 900。';

$cplang['setting_tips_19'] = '默认为 data/cache 目录，如果您需要将其指定为其他目录，请确定您指定的目录有可写权限';

$cplang['setting_tips_20'] = '将页面内容以 gzip 压缩后传输，可以加快传输速度，需 PHP 4.0.4 以上且支持 Zlib 模块才能使用';

$cplang['setting_tips_21'] = '服务器路径, 属性 777, 必须为 web 可访问到的目录, 结尾不加 "/", 相对目录务必以 "./" 开头';

$cplang['setting_tips_22'] = '设置允许上传文件的最大值，单位MB。';

$cplang['setting_tips_23'] = '设置允许上传的附件类型，填写附件类型的扩展名。';

$cplang['setting_tips_24'] = '允许上传的图片格式，一般设置为JPG,GIF,PNG三种即可。';

$cplang['setting_tips_25'] = '您可以设置自动为用户上传的 JPG/PNG/GIF 图片附件添加缩略图或将图片附件缩到指定的大小。不支持动画 GIF 格式';

$cplang['setting_tips_26'] = '设置缩略图的大小，小于此尺寸的图片附件将不生成缩略图。';

$cplang['setting_tips_27'] = '您可以设置自动为用户上传的 JPG/PNG/GIF 图片附件添加水印，请在此选择水印添加的位置(3x3 共 9 个位置可选)。不支持动画 GIF 格式。';

$cplang['setting_tips_28'] = '您可以设置水印的类型。';

$cplang['setting_tips_29'] = '如果您指定的 TrueType 字体为中文字体文件，那么您可以在文本水印中书写中文。';

$cplang['setting_tips_30'] = '填写存放在 相对于系统根目录下的字体文件。如使用中文 TTF 字体请使用包含完整中文汉字的字体文件。';

$cplang['setting_tips_31'] = '设置文本水印字体大小，请按照字体设置相应的大小。';

$cplang['setting_tips_32'] = '输入 16 进制颜色代表文本水印字体颜色';

$cplang['setting_tips_33'] = '填写存放在 相对于系统根目录下的水印图片文件。';

$cplang['setting_tips_34'] = '设置 GIF 类型水印图片与原始图片的融合度，范围为 1～100 的整数，数值越大水印图片透明度越低。PNG 类型水印本身具有真彩透明效果，无须此设置。本功能需要开启水印功能后才有效。';

$cplang['setting_tips_35'] = '设置水印文本输出后向屏幕中央的横向的偏移值。';

$cplang['setting_tips_36'] = '设置水印文本输出后向屏幕中央的纵向的偏移值。';

$cplang['setting_tips_37'] = '设置是否允许游客注册成为网站会员。';

$cplang['setting_tips_38'] = '设置网站注册页的文件名，默认为“register.php”，修改名称有利于防止灌水软件，如果您更改了此设置，那么您需要使用“FTP工具”手动重命名文件名称';

$cplang['setting_tips_39'] = '设置网站注册页的链接文字，默认为“注册”';

$cplang['setting_tips_40'] = '在注册页面是否显示选填内容';

$cplang['setting_tips_41'] = '选择“无”用户可直接注册成功；选择“Email 验证”将向用户注册 Email 发送一封验证邮件以确认邮箱的有效性；选择“人工审核”将由管理员人工逐个确定是否允许新用户注册';

$cplang['setting_tips_42'] = '可选择是否自动向新注册用户发送一条欢迎信息';

$cplang['setting_tips_43'] = '系统发送的欢迎信息的标题，不支持 HTML，不超过 75 字节。';

$cplang['setting_tips_44'] = '系统发送的欢迎信息的内容。标题内容均支持变量替换，可以使用如下变量:<br>{username} : 用户名<br>{time} : 发送时间<br>{sitename} : 站点名称<br>{adminemail} : 管理员email';

$cplang['setting_tips_45'] = '新用户注册时显示许可协议';

$cplang['setting_tips_46'] = '注册许可协议的详细内容';

$cplang['setting_tips_47'] = '验证码可以避免恶意注册及恶意灌水，请选择需要打开验证码的操作。注意: 启用验证码会使得部分操作变得繁琐，建议仅在必需时打开<br><br><img src="./source/include/validate.php" id="randcode" border="0" /><br><br><a href="javascript:;" onclick="$(\'#randcode\').attr(\'src\',\'./source/include/validate.php?\'+Math.random())">刷新验证码</a>';

$cplang['setting_tips_48'] = '输入您的联系人信息';

$cplang['setting_tips_49'] = '输入您的联系电话，格式如010-XXXXXXXX或138XXXXXXXX，可填多个';

$cplang['setting_tips_50'] = '输入您的传真号码，格式如010-XXXXXXXX，可填多个';

$cplang['setting_tips_51'] = '输入您的电子邮件地址，多个地址请用‘|’隔开';

$cplang['setting_tips_52'] = '输入您的QQ号码，多个号码请用‘|’隔开';

$cplang['setting_tips_53'] = '输入您的MSN账号，多个账号请用‘|’隔开';

$cplang['setting_tips_54'] = '输入您的邮政编码';

$cplang['setting_tips_55'] = '输入您的联系地址';

$cplang['setting_tips_56'] = '输入您单位的乘车路线，如1路，2路';

$cplang['setting_tips_57'] = '填入您的位置地图代码,代码可从Google地图，百度地图，搜狗地图等获取';

$cplang['setting_modi_succeed'] = '系统配置修改成功。';

/*系统日志管理*/

$cplang['cplog_manage'] = '后台日志管理';

$cplang['cplog_admin'] = '操作人员';

$cplang['cplog_list'] = '日志列表';

$cplang['cplog_body'] = '操作记录';

$cplang['cplog_ipaddr'] = '登录IP';

$cplang['cplog_time'] = '操作时间';

$cplang['cplog_requesturi'] = '请求地址';

$cplang['cplog_clear'] = '清空日志';

$cplang['cplog_export'] = '导出日志';

$cplang['runlog'] = '运行记录';

/*网站相关信息*/

$cplang['about_manage'] = '相关信息管理';

$cplang['about_list'] = '信息列表';

$cplang['about_add'] = '添加信息';

$cplang['about_edit'] = '编辑信息';

$cplang['about_title'] = '标题';

$cplang['about_lastedit'] = '修改人';

$cplang['about_time'] = '修改时间';

$cplang['about_submit_error'] = '标题和内容不能为空，请重新填写。';

/**公告管理**/

$cplang['announcement'] = '系统公告';

$cplang['announce_add'] = '发布公告';

$cplang['announce_edit'] = '编辑公告';

$cplang['announce_write'] = '撰写公告';

$cplang['announce_submit_error'] = '公告标题和内容不能为空，请重新填写。';

/*友情链接*/

$cplang['friendlink'] = '友情链接';

$cplang['flink_sitename'] = '网站名称';

$cplang['flink_siteurl'] = '网站地址';

$cplang['flink_logo'] = 'LOGO图片';

$cplang['flink_addnew'] = '新增链接';

$cplang['flink_edit'] = '编辑链接';

$cplang['faq'] = '常见问题';

/*用户反馈*/

$cplang['feedback'] = '用户反馈';

$cplang['feedback_user'] = '投诉人';

$cplang['feedback_tel'] = '联系电话';

$cplang['feedback_email'] = '电子邮件';

$cplang['feedback_time'] = '投诉时间';

$cplang['feedback_detail'] = '查看详细';

$cplang['feedback_content'] = '投诉内容';

/*文件检查*/

$cplang['file_check'] = '文件权限检查';

$cplang['file_name'] = '文件名';

$cplang['file_readable'] = '可读';

$cplang['file_writeable'] = '可写';

$cplang['file_execable'] = '可执行';

$cplang['file_time'] = '修改时间';

$cplang['file_parent'] = '上级目录';

/*管理员管理*/

$cplang['admin_manage'] = '管理员管理';

$cplang['admin_add'] = '添加管理员';

$cplang['admin_edit'] = '编辑管理员';

$cplang['admin_basic'] = '基本信息';

$cplang['admin_username'] = '用户名';

$cplang['admin_password'] = '密码';

$cplang['admin_realname'] = '真实姓名';

$cplang['admin_admingroup'] = '管理组';

$cplang['admin_email'] = '电子邮件';

$cplang['admin_tel'] = '联系电话';

$cplang['admin_qq'] = 'QQ号码';

$cplang['admin_lastvisit'] = '最后登录';

$cplang['admin_lastip'] = '最后登录IP';

$cplang['admin_permission'] = '权限设置';

$cplang['admin_allowadminsetting'] = '允许管理系统设置';

$cplang['admin_allowadminuser'] = '允许管理用户';

$cplang['admin_allowadmindb'] = '允许管理数据库';

$cplang['admin_allowadmintag'] = '允许管理标签';

$cplang['admin_allowadminlog'] = '允许管理日志';

$cplang['admin_allowadminnav'] = '允许管理导航栏';

$cplang['admin_allowadminlink'] = '允许管理友情链接';

$cplang['admin_allowadminannounce'] = '允许管理系统公告';

$cplang['admin_allowadminabout'] = '允许管理网站相关信息';

$cplang['admin_tips_0'] = '设置是否允许修改系统配置';

$cplang['admin_tips_1'] = '设置是否允许管理用户信息';

$cplang['admin_tips_2'] = '设置是否允许管理数据库';

$cplang['admin_tips_3'] = '设置是否允许管理标签';

$cplang['admin_tips_4'] = '设置是否允许管理后台日志';

$cplang['admin_tips_5'] = '设置是否允许导航栏';

$cplang['admin_tips_6'] = '设置是否允许管理友情链接';

$cplang['admin_tips_7'] = '设置是否允许管理系统公告';

$cplang['admin_tips_8'] = '设置是否允许管理网站相关信息';

/*会员管理*/

$cplang['member_manage'] = '会员管理';

$cplang['member_add'] = '添加新会员';

$cplang['member_edit'] = '编辑会员';

$cplang['member_username'] = '用户名';

$cplang['member_password'] = '密码';

$cplang['member_email'] = '电子邮件';

$cplang['member_usergroup'] = '用户组';

$cplang['member_regdate'] = '注册日期';

$cplang['member_lastvisit'] = '最后登录';

$cplang['member_lastip'] = '最后登录IP';

$cplang['member_credits'] = '财富';

$cplang['member_repeat'] = '用户名已被使用，请重新输入。';

$cplang['member_error_0'] = '用户名不能为空';

$cplang['member_error_1'] = '密码输入不正确，至少6位';

$cplang['member_error_2'] = '电子邮件输入不正确';

$cplang['member_tips_0'] = '必填，支持中文和我英文';

$cplang['member_tips_1'] = '不可修改';

$cplang['member_tips_2'] = '必填，至少6位字母或符号组成';

$cplang['member_tips_3'] = '不修改请留空';

$cplang['member_tips_4'] = '必填项，不能留空';



$cplang['usergroup_manage'] = '用户组管理';

$cplang['usergroup_member'] = '会员用户组';

$cplang['usergroup_system'] = '系统用户组';

$cplang['usergroup_custom'] = '自定义用户组';

$cplang['usergroup_groupid'] = '组ID';

$cplang['usergroup_grouptitle'] = '组头衔';

$cplang['usergroup_credits_between'] = '积分介于';

$cplang['usergroup_detail'] = '详细设置';

$cplang['usergroup_addnew'] = '新增分组';

$cplang['usergroup_newgroupname'] = '新分组名称';

$cplang['usergroup_admingroup'] = '管理员分组';

$cplang['usergroup_usergroup'] = '会员分组';

$cplang['usergroup_typename'] = '类型';

$cplang['usergroup_type']['system'] = '内置';

$cplang['usergroup_type']['custom'] = '自定义';

$cplang['usergroup_type']['member'] = '会员';

$cplang['usergroup_adminlevel'] = '管理级别';

$cplang['usergroup_level'][1] = '系统管理员';

$cplang['usergroup_level'][2] = '内容管理员';

$cplang['usergroup_level'][3] = '板块管理员';

$cplang['usergroup_permission_edit'] = '编辑权限';

$cplang['usergroup_permission_set'] = '组权限设置';

$cplang['usergroup_allowpost'] = '允许发表帖子';

$cplang['usergroup_allowreply'] = '允许回复帖子';

$cplang['usergroup_allowcomment'] = '允许发布评论';

$cplang['usergroup_allowupload'] = '允许上传附件';

$cplang['usergroup_allowdownload'] = '允许下载附件';

$cplang['usergroup_allowsearch'] = '允许使用搜索';

$cplang['usergroup_tips_0'] = '设置是否允许发表帖子';

$cplang['usergroup_tips_1'] = '设置是否允许回复帖子';

$cplang['usergroup_tips_2'] = '设置是否允许发表评论';

$cplang['usergroup_tips_3'] = '设置是否允许上传附件';

$cplang['usergroup_tips_4'] = '设置是否允许下载附件';

$cplang['usergroup_tips_5'] = '设置是否允许使用站内搜索';



$cplang['admingroup_action_settings'] = '系统设置';

$cplang['admingroup_action_settings_basic'] = '站点信息设置';

$cplang['admingroup_action_settings_optimization'] = '系统优化设置';

$cplang['admingroup_action_settings_attachment'] = '附件上传设置';

$cplang['admingroup_action_settings_image'] = '图片附件设置';

$cplang['admingroup_action_settings_register'] = '用户注册设置';

$cplang['admingroup_action_settings_randcode'] = '验证码设置';

$cplang['admingroup_action_settings_contact'] = '联系信息设置';

$cplang['admingroup_action_cplog'] = '系统日志管理';

$cplang['admingroup_action_nav'] = '导航栏设置';

$cplang['admingroup_action_about'] = '网站相关信息设置';

$cplang['admingroup_action_member'] = '用户管理';

$cplang['admingroup_action_member_add'] = '添加用户';

$cplang['admingroup_action_member_edit'] = '编辑用户';

$cplang['admingroup_action_usergroup_edit'] = '更改用户组';

$cplang['admingroup_action_admingroup_edit'] = '更改管理组';

$cplang['admingroup_action_article'] = '文章管理';

$cplang['admingroup_action_article_add'] = '添加文章';

$cplang['admingroup_action_article_edit'] = '编辑文章';

$cplang['admingroup_action_articlecat'] = '文章分类管理';

$cplang['admingroup_action_articlecat_edit'] = '更改文章分类';

$cplang['admingroup_action_articlecat_delete'] = '删除文章分类';

$cplang['admingroup_action_article_source'] = '文章来源管理';

$cplang['admingroup_action_goods'] = '产品管理';

$cplang['admingroup_action_goods_add'] = '添加产品';

$cplang['admingroup_action_goods_edit'] = '编辑产品';

$cplang['admingroup_action_goodscat'] = '产品分类管理';

$cplang['admingroup_action_goodscat_edit'] = '更改产品分类';

$cplang['admingroup_action_goodscat_delete'] = '删除产品分类';

$cplang['admingroup_action_goods_types'] = '更改产品分类模型';

$cplang['admingroup_action_goods_typeoption'] = '更改产品分类选项';

$cplang['admingroup_action_task'] = '站务管理';

$cplang['admingroup_action_announce'] = '公告管理';

$cplang['admingroup_action_friendlink'] = '友情链接';

$cplang['admingroup_action_faq'] = '使用帮助';

$cplang['admingroup_action_feedback'] = '用户反馈';



$cplang['account_username'] = '用户名';

$cplang['account_password'] = '密码';

$cplang['account_question'] = '安全问题';

$cplang['account_answer'] = '问题答案';

$cplang['account_email'] = '电子邮件';

$cplang['account_realname'] = '真实姓名';

$cplang['account_sex'] = '性别';

$cplang['account_birthday'] = '生日';

$cplang['account_qq'] = 'QQ号码';

$cplang['account_tel'] = '联系电话';

$cplang['account_msn'] = 'MSN';

$cplang['account_fax'] = '传真';

$cplang['account_mobile'] = '手机';

$cplang['account_company'] = '公司名称';

$cplang['account_postcode'] = '邮政编码';

$cplang['account_address'] = '联系地址';

$cplang['account_homepage'] = '个人主页';



$cplang['article_manage'] = '文章管理';

$cplang['article_title'] = '文章标题';

$cplang['article_category'] = '文章分类';

$cplang['article_author'] = '作者';

$cplang['article_views'] = '点击';

$cplang['article_status'] = '审核状态';

$cplang['article_allcat'] = '所有分类';

$cplang['article_source'] = '文章来源';

$cplang['article_image'] = '文章图片';

$cplang['article_content'] = '文章内容';

$cplang['article_summary'] = '内容摘要';

$cplang['article_write'] = '撰写文章';

$cplang['article_error_0'] = '文章标题不能为空';

$cplang['article_error_1'] = '文章内容不能为空';



$cplang['goods_manage'] = '产品管理';

$cplang['goods_category'] = '产品分类';

$cplang['goods_title'] = '产品名称';

$cplang['goods_poster'] = '发布人';

$cplang['goods_clicks'] = '点击';

$cplang['goods_add'] = '添加产品';

$cplang['goods_typemodel'] = '产品分类模型';

$cplang['goods_typeoption'] = '产品分类选项';

$cplang['category_id'] = '分类ID';

$cplang['category_name'] = '分类名称';

$cplang['category_records'] = '记录数';

$cplang['category_status'] = '可发布内容';

$cplang['category_addnew'] = '添加新分类';

$cplang['category_edit'] = '编辑分类';

$cplang['category_addchild'] = '添加子分类';

$cplang['category_newname'] = '新分类名称';

$cplang['category_parent'] = '上级分类';

$cplang['category_drop_confirm'] = '分类删除后将不能被恢复，确定要删除吗?';

$cplang['category_drop_tips'] = '注意：删除分类将会同时删除分类下的子分类和信息。';



$cplang['source_manage'] = '来源管理';

$cplang['source_article'] = '文章来源';

$cplang['source_image'] = '图片来源';

$cplang['source_video'] = '视频来源';

$cplang['source_sitename'] = '网站名称';

$cplang['source_siteurl'] = '网站地址';

$cplang['source_addnew'] = '新增来源';



$cplang['typeoption']['text'] = '字串';

$cplang['typeoption']['number'] = '数字';

$cplang['typeoption']['radio'] = '单选';

$cplang['typeoption']['checkbox'] = '多选';

$cplang['typeoption']['textarea'] = '文本';

$cplang['typeoption']['select'] = '选择';

$cplang['typeoption']['calendar'] = '日历';

$cplang['typeoption']['email'] = '电子邮件';

$cplang['typeoption']['url'] = '超链接';

$cplang['typeoption']['image'] = '图片';

$cplang['typeoption_setting'] = '选项设置';

$cplang['typeoption_existed'] = '已有选项';

$cplang['typeoption_required'] = '必填';

$cplang['typeoption_unchangeable'] = '不可修改';

$cplang['typeoption_onsearch'] = '参与搜索';

$cplang['typeoption_name'] = '选项名称';

$cplang['typeoption_identifier'] = '变量名';

$cplang['typeoption_type'] = '选项类型';

$cplang['typeoption_class'] = '选项分类';

$cplang['typeoption_classname'] = '分类名称';

$cplang['typeoption_addnew'] = '添加新选项';

$cplang['typeoption_addclass'] = '添加新分类';

$cplang['typeoption_tips'] = '只在项目为可选时有效，每行一个选项，等号前面为选项索引(建议用数字)，后面为内容，例如: <br>

			  1 = 光电鼠标<br>

			  2 = 机械鼠标<br>

			  3 = 没有鼠标<br>

			  注意: 选项确定后请勿修改索引和内容的对应关系，但仍可以新增选项。如需调换显示顺序，可以通过移动整行的上下位置来实现<br>';

$cplang['typeoption_title_0'] = '内容最大长度（可选）';

$cplang['typeoption_title_1'] = '最大值（可选）';

$cplang['typeoption_title_2'] = '最小值（可选）';

$cplang['typeoption_title_3'] = '选项内容';

$cplang['typeoption_title_4'] = '图片最大宽度(可选)';

$cplang['typeoption_title_5'] = '图片最大高度(可选)';

$cplang['cache_updated'] = '已成功更新所有缓存';



$cplang['video_manage'] = '视频管理';

$cplang['video_category'] = '视频分类管理';

$cplang['video_all'] = '所有视频';

$cplang['image_manage'] = '图组管理';

$cplang['image_category'] = '图组分类管理';

$cplang['image_all'] = '所有图组';

$cplang['image_upload'] = '上传图片';

$cplang['image_briefing'] = '园区简报';

$cplang['slide_manage'] = '幻灯片管理';

$cplang['nav_manage'] = '导航栏设置';

$cplang['lead_manage'] = '领导信息管理';

$cplang['leadmail_manage'] = '领导信箱';

$cplang['inter_forum'] = '意见分类管理';

$cplang['inter_post'] = '用户留言管理';

$cplang['project_manage'] = '项目管理';

$cplang['lifebox_manage'] = '便民生活管理';

$cplang['branch_manage'] = '部门管理';

$cplang['branch_news'] = '部门动态';

$cplang['branch_file'] = '文件下载';

?>