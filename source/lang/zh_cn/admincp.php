<?php

/**

 * ============================================================================

 * ��Ȩ���� (C) 2010 WWW.SONGDEWEI.COM All Rights Reserved��

 * ��վ��ַ: http://www.songdewei.com

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

/**��������**/

$cplang['home'] = '��ҳ';

$cplang['quit'] = '�˳�';

$cplang['founder'] = '��ʼ��';

$cplang['cphome'] = '��������';

$cplang['appname'] = '��̨����ϵͳ';

$cplang['query_info'] = 'ҳ�湲ִ����%d�β�ѯ,��ʱ%s�롣';

$cplang['copyright'] = '&copy;2012-2099 <a href="http://www.toking.cc" target="_blank">WWW.SONGDEWEI.COM</a> ��Ȩ���У�����������Ȩ����';

$cplang['remark'] = '��ע';

$cplang['recommend'] = '�Ƽ�';

$cplang['unrecommend'] = 'ȡ���Ƽ�';

$cplang['display'] = '��ʾ';

$cplang['displayorder'] = '��ʾ˳��';

$cplang['hidden'] = '����';

$cplang['resume'] = '�ָ�';

$cplang['export'] = '����';

$cplang['import'] = '����';

$cplang['available'] = '����';

$cplang['add_newoption'] = '�������';

$cplang['ctrlenter'] = '��ɺ�ɰ� Ctrl+Enter �ύ';

$cplang['repeat_testing'] = '����ظ�';

$cplang['sysmessage'] = 'ϵͳ��ʾ';

$cplang['clearcache'] = '�������';

$cplang['markas'] = '���Ϊ';

$cplang['comment'] = '����';

$cplang['audit'] = '���';

$cplang['audited'] = '����';

$cplang['unaudited'] = 'δ��';

$cplang['save_edit'] = '�����޸�';

$cplang['back_list'] = '�����б�';

$cplang['ascorder'] = '��������';

$cplang['descorder'] = '��������';

$cplang['checkrepeat'] = '����ظ�';

$cplang['allowcomment'] = '��������';

$cplang['allowvote'] = '����ͶƱ';

$cplang['setrecommend'] = '��Ϊ�Ƽ�';

$cplang['passaudited'] = 'ͨ�����';

$cplang['checkrepeat'] = '����ظ�';

$cplang['loading'] = '���ڴ�����������...';

$cplang['deleting'] = '����ɾ����Ϣ...';

$cplang['complete'] = '���������';

$cplang['priv_error'] = 'Ȩ�޴���';

$cplang['noaccess'] = '�Բ���,����Ȩ���д��������';

$cplang['action_noaccess'] = '��û��Ȩ�޽��дβ�����';

$cplang['drop_confirm'] = '����ɾ���󽫲��ָܻ�����ȷ��Ҫɾ����ѡ��¼��?';

$cplang['no_select'] = '����û��ѡ���κ�ѡ�';

$cplang['upload_file'] = '�ϴ��ļ�';

$cplang['upfile_type_error'] = '�ϴ��ļ������Ͳ���ȷ��';

$cplang['upfile_failed'] = '�ϴ��ļ�ʧ�ܡ�';

$cplang['go_back'] = '������һҳ';

$cplang['back'] = '����';

$cplang['continue'] = '����';

$cplang['system_message'] = 'ϵͳ��Ϣ';

$cplang['select_all'] = 'ȫѡ';

$cplang['select_please'] = '��ѡ��...';

$cplang['delete_check'] = 'ɾ?';

/*�û���¼*/

$cplang['login_tips'] = 'THECMS��һ������ PHP �� MySQL ���ݿ⹹���ĸ�Ч��ҵ��վ�������, ���ڶ���ҵ��վ��ѡ����Ʒ�ơ�';

$cplang['login_username'] = '�û���';

$cplang['login_password'] = '�ܡ���';

$cplang['login_randcode'] = '��֤��';

$cplang['login_btnlogin'] = '�� ¼';

$cplang['login_btnreset'] = '�� ��';

$cplang['login_error'] = '�˺Ż���������������������롣';

$cplang['login_randcode_error'] = '��������֤�롣';

$cplang['login_succed'] = '��¼�ɹ�';

$cplang['login_failed'] = '��¼ʧ��';

/**��̨��ҳ**/

$cplang['hello'] = '����';

$cplang['edit_profile'] = '�༭��������';

$cplang['logout'] = '�˳���¼';

$cplang['sitehome'] = 'վ����ҳ';

$cplang['aboutus'] = '��������';

$cplang['tech_support'] = '����֧��';

$cplang['dev_documents'] = '�����ĵ�';

$cplang['new'] = '�½�';

/*��������Ϣ*/

$cplang['server_info'] = '������������Ϣ';

$cplang['server_os'] = '������ϵͳ';

$cplang['server_ip'] = '������IP';

$cplang['web_server'] = '����������';

$cplang['php_ver'] = 'PHP�汾';

$cplang['mysql_ver'] = 'MySql�汾';

$cplang['server_issocket'] = 'Socket ֧��';

$cplang['server_iszlib'] = 'Zlib ֧��';

$cplang['server_max_upload'] = '�����ϴ�����';

$cplang['safe_mode'] = '��ȫģʽ';

$cplang['safe_mode_gid'] = '��ȫģʽGID';

$cplang['gd_ver'] = 'GD�汾';

$cplang['web_charset'] = 'ҳ�����';

/*ϵͳ����*/

/*��������*/

$cplang['setting_system'] = 'ϵͳ����';

$cplang['setting_basic'] = 'վ����Ϣ����';

$cplang['setting_sysname'] = 'ϵͳ����';

$cplang['setting_sitename'] = '��վ����';

$cplang['setting_siteurl'] = '��վ��ַ';

$cplang['setting_keywords'] = '�ؼ���';

$cplang['setting_description'] = '��վ����';

$cplang['setting_icp'] = '������Ϣ';

$cplang['setting_copyright'] = '��Ȩ��Ϣ';

$cplang['setting_statcode'] = 'ͳ�ƴ���';

$cplang['setting_islog'] = '������־';

$cplang['setting_sysclosed'] = '�ر���վ';

$cplang['setting_closedreason'] = '�ر�ԭ��';

$cplang['setting_slidewidth'] = '�õ�Ƭ��';

$cplang['setting_slideheight'] = '�õ�Ƭ��';

/**�Ż�����**/

$cplang['setting_optimization'] = 'ϵͳ�Ż�����';

$cplang['setting_rewrite'] = 'URL ��̬��';

$cplang['setting_seotitle'] = '���⸽����';

$cplang['setting_seohead'] = '����ͷ����Ϣ';

$cplang['setting_iscache'] = '���û���';

$cplang['setting_cacheindex'] = '������ҳ��Ч��';

$cplang['setting_cachetime'] = 'ҳ�滺��ʱ��';

$cplang['setting_cachedir'] = '����Ŀ¼';

$cplang['setting_gzipcompress'] = 'ҳ�� Gzip ѹ��';

/**��������**/

$cplang['setting_attachment'] = '�����ϴ�����';

$cplang['setting_attachdir'] = '��������Ŀ¼';

$cplang['setting_attachmax'] = '�����ϴ��������ֵ';

$cplang['setting_attachtype'] = '�����ϴ��ĸ�������';

/**ͼƬ����**/

$cplang['setting_image'] = 'ͼƬ�ϴ�����';

$cplang['setting_imgtype'] = '�����ϴ���ͼƬ����';

$cplang['setting_thumbstatus'] = '�Զ���������ͼ';

$cplang['setting_thumbsize'] = '���Դ�С';

$cplang['setting_watermark'] = 'ͼƬˮӡ';

$cplang['setting_nowatermark'] = '������ˮӡ����';

$cplang['setting_watermarktype'] = 'ˮӡ����';

$cplang['setting_watermarktype_0'] = 'ͼƬˮӡ';

$cplang['setting_watermarktype_1'] = '����ˮӡ';

$cplang['setting_watertext']='ˮӡ����';

$cplang['setting_waterimg']='ˮӡͼƬ';

$cplang['setting_waterfont']='ˮӡ����';

$cplang['setting_watersize']='ˮӡ���ִ�С';

$cplang['setting_watercolor']='ˮӡ������ɫ';

$cplang['setting_wateralpha']='ˮӡ͸����';

$cplang['setting_waterpos']='ˮӡλ��';

$cplang['setting_waterxoffset'] = '����ˮӡ����ƫ����';

$cplang['setting_wateryoffset'] = '����ˮӡ����ƫ����';

/**�û�ע������**/

$cplang['setting_register'] = '�û�ע������';

$cplang['setting_register_link'] = 'ע���ļ���';

$cplang['setting_register_linkname'] = 'ע����������';

$cplang['setting_register_allowed'] = '�����û�ע��';

$cplang['setting_register_advance'] = '��ʾ�߼�ѡ��';

$cplang['setting_register_verify'] = '���û�ע����֤';

$cplang['setting_register_verify_0'] = '��';

$cplang['setting_register_verify_1'] = 'Email��֤';

$cplang['setting_register_verify_2'] = '�˹����';

$cplang['setting_register_wellcomemsg'] = '���ͻ�ӭ��Ϣ';

$cplang['setting_register_wellcomemsg_0'] = '������';

$cplang['setting_register_wellcomemsg_1'] = '���ͻ�ӭ����Ϣ';

$cplang['setting_register_wellcomemsg_2'] = '���ͻ�ӭEmail';

$cplang['setting_register_wellcomemsgtitle'] = '��ӭ�ʼ�����';

$cplang['setting_register_wellcomemsgtxt'] = '��ӭ�ʼ�����';

$cplang['setting_register_sysrules'] = '��ʾ���Э��';

$cplang['setting_register_sysrulestxt'] = '���Э������';

/**��֤������**/

$cplang['setting_randcode'] = '��֤������';

$cplang['setting_randcodestatus'] = '������֤��';

$cplang['setting_randcodestatus_1'] = '���û�ע��';

$cplang['setting_randcodestatus_2'] = '�û���¼';

$cplang['setting_randcodestatus_3'] = '����������ظ�';

$cplang['setting_randcodestatus_4'] = '��������';

$cplang['setting_randcodestatus_5'] = '�޸ĸ�������';

/*��ϵ��Ϣ����*/

$cplang['setting_contact'] = '��ϵ��Ϣ����';

$cplang['setting_contact_name'] = '��ϵ��';

$cplang['setting_contact_tel'] = '��ϵ�绰';

$cplang['setting_contact_fax'] = '�������';

$cplang['setting_contact_email'] = '�����ʼ�';

$cplang['setting_contact_qq'] = 'QQ����';

$cplang['setting_contact_msn'] = 'MSN';

$cplang['setting_contact_postnum'] = '��������';

$cplang['setting_contact_address'] = '��ϵ��ַ';

$cplang['setting_contact_drive'] = '�˳�·��';

$cplang['setting_contact_map'] = '���ӵ�ͼ';



$cplang['setting_tips_0'] = 'ϵͳ���ƣ�����ʾ�ڵ������ͱ�����';

$cplang['setting_tips_1'] = '��վ���ƣ�����ʾ��ҳ��ײ�����ϵ��ʽ��';

$cplang['setting_tips_2'] = '��վ URL������Ϊ������ʾ��ҳ��ײ�';

$cplang['setting_tips_3'] = 'Keywords �������ҳ��ͷ���� Meta ��ǩ�У����ڼ�¼��ҳ��Ĺؼ��֣�����ؼ��ּ����ð�Ƕ��� "," ����';

$cplang['setting_tips_4'] = 'Description ������ҳ��ͷ���� Meta ��ǩ�У����ڼ�¼��ҳ��ĸ�Ҫ������';

$cplang['setting_tips_5'] = 'ҳ��ײ�������ʾ ICP ������Ϣ�������վ�ѱ������ڴ�����������Ȩ�룬������ʾ��ҳ��ײ������û��������';

$cplang['setting_tips_6'] = '��վ�İ�Ȩ��Ϣ������ʾ��ҳ��ײ�';

$cplang['setting_tips_7'] = '�Ƿ��¼��̨������־����Ϊ��¼����Ϊ����¼';

$cplang['setting_tips_8'] = '����ͳ����վ��������ĵ�����ͳ�ƴ��룬ͨ��ΪJS����';

$cplang['setting_tips_9'] = '��ҳ�õ�ƬͼƬ���';

$cplang['setting_tips_10'] = '��ҳ�õ�Ƭ��ͼƬ�߶�';

$cplang['setting_tips_11'] = '��ʱ����վ�رգ��������޷����ʣ�����Ӱ�����Ա����';

$cplang['setting_tips_12'] = '��վ�ر�ʱ���ֵ���ʾ��Ϣ';



$cplang['setting_tips_13'] = 'URL ��̬�����������������ץȡ��������������Ҫ�� Web ������������Ӧ�� Rewrite �����һ���΢���ӷ�����������';

$cplang['setting_tips_14'] = '��ҳ����ͨ�������������ע���ص㣬�����������ý������ڱ�������̳���Ƶĺ��棬����ж���ؼ��֣������� "|"��","(��������) �ȷ��ŷָ�';

$cplang['setting_tips_15'] = '������ <head></head> ����������� HTML ���룬����ʹ�ñ����ã�����������';

$cplang['setting_tips_16'] = '�����Ƿ�����ҳ�滺�棬���û�����Լ���������������������ٶ�';

$cplang['setting_tips_17'] = '������ҳ������µ�ʱ�䣬��λΪ�룬0 Ϊ�رգ��˴��ر��Ժ󣬻���ϵ�������������ã�����������Ϊ 900��';

$cplang['setting_tips_18'] = '����ҳ�滺����µ�ʱ�䣬��λΪ�룬0 Ϊ�رա������ʵ��������е�������������Ϊ 900��';

$cplang['setting_tips_19'] = 'Ĭ��Ϊ data/cache Ŀ¼���������Ҫ����ָ��Ϊ����Ŀ¼����ȷ����ָ����Ŀ¼�п�дȨ��';

$cplang['setting_tips_20'] = '��ҳ�������� gzip ѹ�����䣬���Լӿ촫���ٶȣ��� PHP 4.0.4 ������֧�� Zlib ģ�����ʹ��';

$cplang['setting_tips_21'] = '������·��, ���� 777, ����Ϊ web �ɷ��ʵ���Ŀ¼, ��β���� "/", ���Ŀ¼����� "./" ��ͷ';

$cplang['setting_tips_22'] = '���������ϴ��ļ������ֵ����λMB��';

$cplang['setting_tips_23'] = '���������ϴ��ĸ������ͣ���д�������͵���չ����';

$cplang['setting_tips_24'] = '�����ϴ���ͼƬ��ʽ��һ������ΪJPG,GIF,PNG���ּ��ɡ�';

$cplang['setting_tips_25'] = '�����������Զ�Ϊ�û��ϴ��� JPG/PNG/GIF ͼƬ�����������ͼ��ͼƬ��������ָ���Ĵ�С����֧�ֶ��� GIF ��ʽ';

$cplang['setting_tips_26'] = '��������ͼ�Ĵ�С��С�ڴ˳ߴ��ͼƬ����������������ͼ��';

$cplang['setting_tips_27'] = '�����������Զ�Ϊ�û��ϴ��� JPG/PNG/GIF ͼƬ�������ˮӡ�����ڴ�ѡ��ˮӡ��ӵ�λ��(3x3 �� 9 ��λ�ÿ�ѡ)����֧�ֶ��� GIF ��ʽ��';

$cplang['setting_tips_28'] = '����������ˮӡ�����͡�';

$cplang['setting_tips_29'] = '�����ָ���� TrueType ����Ϊ���������ļ�����ô���������ı�ˮӡ����д���ġ�';

$cplang['setting_tips_30'] = '��д����� �����ϵͳ��Ŀ¼�µ������ļ�����ʹ������ TTF ������ʹ�ð����������ĺ��ֵ������ļ���';

$cplang['setting_tips_31'] = '�����ı�ˮӡ�����С���밴������������Ӧ�Ĵ�С��';

$cplang['setting_tips_32'] = '���� 16 ������ɫ�����ı�ˮӡ������ɫ';

$cplang['setting_tips_33'] = '��д����� �����ϵͳ��Ŀ¼�µ�ˮӡͼƬ�ļ���';

$cplang['setting_tips_34'] = '���� GIF ����ˮӡͼƬ��ԭʼͼƬ���ں϶ȣ���ΧΪ 1��100 ����������ֵԽ��ˮӡͼƬ͸����Խ�͡�PNG ����ˮӡ����������͸��Ч������������á���������Ҫ����ˮӡ���ܺ����Ч��';

$cplang['setting_tips_35'] = '����ˮӡ�ı����������Ļ����ĺ����ƫ��ֵ��';

$cplang['setting_tips_36'] = '����ˮӡ�ı����������Ļ����������ƫ��ֵ��';

$cplang['setting_tips_37'] = '�����Ƿ������ο�ע���Ϊ��վ��Ա��';

$cplang['setting_tips_38'] = '������վע��ҳ���ļ�����Ĭ��Ϊ��register.php�����޸����������ڷ�ֹ��ˮ���������������˴����ã���ô����Ҫʹ�á�FTP���ߡ��ֶ��������ļ�����';

$cplang['setting_tips_39'] = '������վע��ҳ���������֣�Ĭ��Ϊ��ע�ᡱ';

$cplang['setting_tips_40'] = '��ע��ҳ���Ƿ���ʾѡ������';

$cplang['setting_tips_41'] = 'ѡ���ޡ��û���ֱ��ע��ɹ���ѡ��Email ��֤�������û�ע�� Email ����һ����֤�ʼ���ȷ���������Ч�ԣ�ѡ���˹���ˡ����ɹ���Ա�˹����ȷ���Ƿ��������û�ע��';

$cplang['setting_tips_42'] = '��ѡ���Ƿ��Զ�����ע���û�����һ����ӭ��Ϣ';

$cplang['setting_tips_43'] = 'ϵͳ���͵Ļ�ӭ��Ϣ�ı��⣬��֧�� HTML�������� 75 �ֽڡ�';

$cplang['setting_tips_44'] = 'ϵͳ���͵Ļ�ӭ��Ϣ�����ݡ��������ݾ�֧�ֱ����滻������ʹ�����±���:<br>{username} : �û���<br>{time} : ����ʱ��<br>{sitename} : վ������<br>{adminemail} : ����Աemail';

$cplang['setting_tips_45'] = '���û�ע��ʱ��ʾ���Э��';

$cplang['setting_tips_46'] = 'ע�����Э�����ϸ����';

$cplang['setting_tips_47'] = '��֤����Ա������ע�ἰ�����ˮ����ѡ����Ҫ����֤��Ĳ�����ע��: ������֤���ʹ�ò��ֲ�����÷�����������ڱ���ʱ��<br><br><img src="./source/include/validate.php" id="randcode" border="0" /><br><br><a href="javascript:;" onclick="$(\'#randcode\').attr(\'src\',\'./source/include/validate.php?\'+Math.random())">ˢ����֤��</a>';

$cplang['setting_tips_48'] = '����������ϵ����Ϣ';

$cplang['setting_tips_49'] = '����������ϵ�绰����ʽ��010-XXXXXXXX��138XXXXXXXX��������';

$cplang['setting_tips_50'] = '�������Ĵ�����룬��ʽ��010-XXXXXXXX��������';

$cplang['setting_tips_51'] = '�������ĵ����ʼ���ַ�������ַ���á�|������';

$cplang['setting_tips_52'] = '��������QQ���룬����������á�|������';

$cplang['setting_tips_53'] = '��������MSN�˺ţ�����˺����á�|������';

$cplang['setting_tips_54'] = '����������������';

$cplang['setting_tips_55'] = '����������ϵ��ַ';

$cplang['setting_tips_56'] = '��������λ�ĳ˳�·�ߣ���1·��2·';

$cplang['setting_tips_57'] = '��������λ�õ�ͼ����,����ɴ�Google��ͼ���ٶȵ�ͼ���ѹ���ͼ�Ȼ�ȡ';

$cplang['setting_modi_succeed'] = 'ϵͳ�����޸ĳɹ���';

/*ϵͳ��־����*/

$cplang['cplog_manage'] = '��̨��־����';

$cplang['cplog_admin'] = '������Ա';

$cplang['cplog_list'] = '��־�б�';

$cplang['cplog_body'] = '������¼';

$cplang['cplog_ipaddr'] = '��¼IP';

$cplang['cplog_time'] = '����ʱ��';

$cplang['cplog_requesturi'] = '�����ַ';

$cplang['cplog_clear'] = '�����־';

$cplang['cplog_export'] = '������־';

$cplang['runlog'] = '���м�¼';

/*��վ�����Ϣ*/

$cplang['about_manage'] = '�����Ϣ����';

$cplang['about_list'] = '��Ϣ�б�';

$cplang['about_add'] = '�����Ϣ';

$cplang['about_edit'] = '�༭��Ϣ';

$cplang['about_title'] = '����';

$cplang['about_lastedit'] = '�޸���';

$cplang['about_time'] = '�޸�ʱ��';

$cplang['about_submit_error'] = '��������ݲ���Ϊ�գ���������д��';

/**�������**/

$cplang['announcement'] = 'ϵͳ����';

$cplang['announce_add'] = '��������';

$cplang['announce_edit'] = '�༭����';

$cplang['announce_write'] = '׫д����';

$cplang['announce_submit_error'] = '�����������ݲ���Ϊ�գ���������д��';

/*��������*/

$cplang['friendlink'] = '��������';

$cplang['flink_sitename'] = '��վ����';

$cplang['flink_siteurl'] = '��վ��ַ';

$cplang['flink_logo'] = 'LOGOͼƬ';

$cplang['flink_addnew'] = '��������';

$cplang['flink_edit'] = '�༭����';

$cplang['faq'] = '��������';

/*�û�����*/

$cplang['feedback'] = '�û�����';

$cplang['feedback_user'] = 'Ͷ����';

$cplang['feedback_tel'] = '��ϵ�绰';

$cplang['feedback_email'] = '�����ʼ�';

$cplang['feedback_time'] = 'Ͷ��ʱ��';

$cplang['feedback_detail'] = '�鿴��ϸ';

$cplang['feedback_content'] = 'Ͷ������';

/*�ļ����*/

$cplang['file_check'] = '�ļ�Ȩ�޼��';

$cplang['file_name'] = '�ļ���';

$cplang['file_readable'] = '�ɶ�';

$cplang['file_writeable'] = '��д';

$cplang['file_execable'] = '��ִ��';

$cplang['file_time'] = '�޸�ʱ��';

$cplang['file_parent'] = '�ϼ�Ŀ¼';

/*����Ա����*/

$cplang['admin_manage'] = '����Ա����';

$cplang['admin_add'] = '��ӹ���Ա';

$cplang['admin_edit'] = '�༭����Ա';

$cplang['admin_basic'] = '������Ϣ';

$cplang['admin_username'] = '�û���';

$cplang['admin_password'] = '����';

$cplang['admin_realname'] = '��ʵ����';

$cplang['admin_admingroup'] = '������';

$cplang['admin_email'] = '�����ʼ�';

$cplang['admin_tel'] = '��ϵ�绰';

$cplang['admin_qq'] = 'QQ����';

$cplang['admin_lastvisit'] = '����¼';

$cplang['admin_lastip'] = '����¼IP';

$cplang['admin_permission'] = 'Ȩ������';

$cplang['admin_allowadminsetting'] = '�������ϵͳ����';

$cplang['admin_allowadminuser'] = '��������û�';

$cplang['admin_allowadmindb'] = '����������ݿ�';

$cplang['admin_allowadmintag'] = '��������ǩ';

$cplang['admin_allowadminlog'] = '���������־';

$cplang['admin_allowadminnav'] = '�����������';

$cplang['admin_allowadminlink'] = '���������������';

$cplang['admin_allowadminannounce'] = '�������ϵͳ����';

$cplang['admin_allowadminabout'] = '���������վ�����Ϣ';

$cplang['admin_tips_0'] = '�����Ƿ������޸�ϵͳ����';

$cplang['admin_tips_1'] = '�����Ƿ���������û���Ϣ';

$cplang['admin_tips_2'] = '�����Ƿ�����������ݿ�';

$cplang['admin_tips_3'] = '�����Ƿ���������ǩ';

$cplang['admin_tips_4'] = '�����Ƿ���������̨��־';

$cplang['admin_tips_5'] = '�����Ƿ���������';

$cplang['admin_tips_6'] = '�����Ƿ����������������';

$cplang['admin_tips_7'] = '�����Ƿ��������ϵͳ����';

$cplang['admin_tips_8'] = '�����Ƿ����������վ�����Ϣ';

/*��Ա����*/

$cplang['member_manage'] = '��Ա����';

$cplang['member_add'] = '����»�Ա';

$cplang['member_edit'] = '�༭��Ա';

$cplang['member_username'] = '�û���';

$cplang['member_password'] = '����';

$cplang['member_email'] = '�����ʼ�';

$cplang['member_usergroup'] = '�û���';

$cplang['member_regdate'] = 'ע������';

$cplang['member_lastvisit'] = '����¼';

$cplang['member_lastip'] = '����¼IP';

$cplang['member_credits'] = '�Ƹ�';

$cplang['member_repeat'] = '�û����ѱ�ʹ�ã����������롣';

$cplang['member_error_0'] = '�û�������Ϊ��';

$cplang['member_error_1'] = '�������벻��ȷ������6λ';

$cplang['member_error_2'] = '�����ʼ����벻��ȷ';

$cplang['member_tips_0'] = '���֧�����ĺ���Ӣ��';

$cplang['member_tips_1'] = '�����޸�';

$cplang['member_tips_2'] = '�������6λ��ĸ��������';

$cplang['member_tips_3'] = '���޸�������';

$cplang['member_tips_4'] = '�������������';



$cplang['usergroup_manage'] = '�û������';

$cplang['usergroup_member'] = '��Ա�û���';

$cplang['usergroup_system'] = 'ϵͳ�û���';

$cplang['usergroup_custom'] = '�Զ����û���';

$cplang['usergroup_groupid'] = '��ID';

$cplang['usergroup_grouptitle'] = '��ͷ��';

$cplang['usergroup_credits_between'] = '���ֽ���';

$cplang['usergroup_detail'] = '��ϸ����';

$cplang['usergroup_addnew'] = '��������';

$cplang['usergroup_newgroupname'] = '�·�������';

$cplang['usergroup_admingroup'] = '����Ա����';

$cplang['usergroup_usergroup'] = '��Ա����';

$cplang['usergroup_typename'] = '����';

$cplang['usergroup_type']['system'] = '����';

$cplang['usergroup_type']['custom'] = '�Զ���';

$cplang['usergroup_type']['member'] = '��Ա';

$cplang['usergroup_adminlevel'] = '������';

$cplang['usergroup_level'][1] = 'ϵͳ����Ա';

$cplang['usergroup_level'][2] = '���ݹ���Ա';

$cplang['usergroup_level'][3] = '������Ա';

$cplang['usergroup_permission_edit'] = '�༭Ȩ��';

$cplang['usergroup_permission_set'] = '��Ȩ������';

$cplang['usergroup_allowpost'] = '����������';

$cplang['usergroup_allowreply'] = '����ظ�����';

$cplang['usergroup_allowcomment'] = '����������';

$cplang['usergroup_allowupload'] = '�����ϴ�����';

$cplang['usergroup_allowdownload'] = '�������ظ���';

$cplang['usergroup_allowsearch'] = '����ʹ������';

$cplang['usergroup_tips_0'] = '�����Ƿ�����������';

$cplang['usergroup_tips_1'] = '�����Ƿ�����ظ�����';

$cplang['usergroup_tips_2'] = '�����Ƿ�����������';

$cplang['usergroup_tips_3'] = '�����Ƿ������ϴ�����';

$cplang['usergroup_tips_4'] = '�����Ƿ��������ظ���';

$cplang['usergroup_tips_5'] = '�����Ƿ�����ʹ��վ������';



$cplang['admingroup_action_settings'] = 'ϵͳ����';

$cplang['admingroup_action_settings_basic'] = 'վ����Ϣ����';

$cplang['admingroup_action_settings_optimization'] = 'ϵͳ�Ż�����';

$cplang['admingroup_action_settings_attachment'] = '�����ϴ�����';

$cplang['admingroup_action_settings_image'] = 'ͼƬ��������';

$cplang['admingroup_action_settings_register'] = '�û�ע������';

$cplang['admingroup_action_settings_randcode'] = '��֤������';

$cplang['admingroup_action_settings_contact'] = '��ϵ��Ϣ����';

$cplang['admingroup_action_cplog'] = 'ϵͳ��־����';

$cplang['admingroup_action_nav'] = '����������';

$cplang['admingroup_action_about'] = '��վ�����Ϣ����';

$cplang['admingroup_action_member'] = '�û�����';

$cplang['admingroup_action_member_add'] = '����û�';

$cplang['admingroup_action_member_edit'] = '�༭�û�';

$cplang['admingroup_action_usergroup_edit'] = '�����û���';

$cplang['admingroup_action_admingroup_edit'] = '���Ĺ�����';

$cplang['admingroup_action_article'] = '���¹���';

$cplang['admingroup_action_article_add'] = '�������';

$cplang['admingroup_action_article_edit'] = '�༭����';

$cplang['admingroup_action_articlecat'] = '���·������';

$cplang['admingroup_action_articlecat_edit'] = '�������·���';

$cplang['admingroup_action_articlecat_delete'] = 'ɾ�����·���';

$cplang['admingroup_action_article_source'] = '������Դ����';

$cplang['admingroup_action_goods'] = '��Ʒ����';

$cplang['admingroup_action_goods_add'] = '��Ӳ�Ʒ';

$cplang['admingroup_action_goods_edit'] = '�༭��Ʒ';

$cplang['admingroup_action_goodscat'] = '��Ʒ�������';

$cplang['admingroup_action_goodscat_edit'] = '���Ĳ�Ʒ����';

$cplang['admingroup_action_goodscat_delete'] = 'ɾ����Ʒ����';

$cplang['admingroup_action_goods_types'] = '���Ĳ�Ʒ����ģ��';

$cplang['admingroup_action_goods_typeoption'] = '���Ĳ�Ʒ����ѡ��';

$cplang['admingroup_action_task'] = 'վ�����';

$cplang['admingroup_action_announce'] = '�������';

$cplang['admingroup_action_friendlink'] = '��������';

$cplang['admingroup_action_faq'] = 'ʹ�ð���';

$cplang['admingroup_action_feedback'] = '�û�����';



$cplang['account_username'] = '�û���';

$cplang['account_password'] = '����';

$cplang['account_question'] = '��ȫ����';

$cplang['account_answer'] = '�����';

$cplang['account_email'] = '�����ʼ�';

$cplang['account_realname'] = '��ʵ����';

$cplang['account_sex'] = '�Ա�';

$cplang['account_birthday'] = '����';

$cplang['account_qq'] = 'QQ����';

$cplang['account_tel'] = '��ϵ�绰';

$cplang['account_msn'] = 'MSN';

$cplang['account_fax'] = '����';

$cplang['account_mobile'] = '�ֻ�';

$cplang['account_company'] = '��˾����';

$cplang['account_postcode'] = '��������';

$cplang['account_address'] = '��ϵ��ַ';

$cplang['account_homepage'] = '������ҳ';



$cplang['article_manage'] = '���¹���';

$cplang['article_title'] = '���±���';

$cplang['article_category'] = '���·���';

$cplang['article_author'] = '����';

$cplang['article_views'] = '���';

$cplang['article_status'] = '���״̬';

$cplang['article_allcat'] = '���з���';

$cplang['article_source'] = '������Դ';

$cplang['article_image'] = '����ͼƬ';

$cplang['article_content'] = '��������';

$cplang['article_summary'] = '����ժҪ';

$cplang['article_write'] = '׫д����';

$cplang['article_error_0'] = '���±��ⲻ��Ϊ��';

$cplang['article_error_1'] = '�������ݲ���Ϊ��';



$cplang['goods_manage'] = '��Ʒ����';

$cplang['goods_category'] = '��Ʒ����';

$cplang['goods_title'] = '��Ʒ����';

$cplang['goods_poster'] = '������';

$cplang['goods_clicks'] = '���';

$cplang['goods_add'] = '��Ӳ�Ʒ';

$cplang['goods_typemodel'] = '��Ʒ����ģ��';

$cplang['goods_typeoption'] = '��Ʒ����ѡ��';

$cplang['category_id'] = '����ID';

$cplang['category_name'] = '��������';

$cplang['category_records'] = '��¼��';

$cplang['category_status'] = '�ɷ�������';

$cplang['category_addnew'] = '����·���';

$cplang['category_edit'] = '�༭����';

$cplang['category_addchild'] = '����ӷ���';

$cplang['category_newname'] = '�·�������';

$cplang['category_parent'] = '�ϼ�����';

$cplang['category_drop_confirm'] = '����ɾ���󽫲��ܱ��ָ���ȷ��Ҫɾ����?';

$cplang['category_drop_tips'] = 'ע�⣺ɾ�����ཫ��ͬʱɾ�������µ��ӷ������Ϣ��';



$cplang['source_manage'] = '��Դ����';

$cplang['source_article'] = '������Դ';

$cplang['source_image'] = 'ͼƬ��Դ';

$cplang['source_video'] = '��Ƶ��Դ';

$cplang['source_sitename'] = '��վ����';

$cplang['source_siteurl'] = '��վ��ַ';

$cplang['source_addnew'] = '������Դ';



$cplang['typeoption']['text'] = '�ִ�';

$cplang['typeoption']['number'] = '����';

$cplang['typeoption']['radio'] = '��ѡ';

$cplang['typeoption']['checkbox'] = '��ѡ';

$cplang['typeoption']['textarea'] = '�ı�';

$cplang['typeoption']['select'] = 'ѡ��';

$cplang['typeoption']['calendar'] = '����';

$cplang['typeoption']['email'] = '�����ʼ�';

$cplang['typeoption']['url'] = '������';

$cplang['typeoption']['image'] = 'ͼƬ';

$cplang['typeoption_setting'] = 'ѡ������';

$cplang['typeoption_existed'] = '����ѡ��';

$cplang['typeoption_required'] = '����';

$cplang['typeoption_unchangeable'] = '�����޸�';

$cplang['typeoption_onsearch'] = '��������';

$cplang['typeoption_name'] = 'ѡ������';

$cplang['typeoption_identifier'] = '������';

$cplang['typeoption_type'] = 'ѡ������';

$cplang['typeoption_class'] = 'ѡ�����';

$cplang['typeoption_classname'] = '��������';

$cplang['typeoption_addnew'] = '�����ѡ��';

$cplang['typeoption_addclass'] = '����·���';

$cplang['typeoption_tips'] = 'ֻ����ĿΪ��ѡʱ��Ч��ÿ��һ��ѡ��Ⱥ�ǰ��Ϊѡ������(����������)������Ϊ���ݣ�����: <br>

			  1 = ������<br>

			  2 = ��е���<br>

			  3 = û�����<br>

			  ע��: ѡ��ȷ���������޸����������ݵĶ�Ӧ��ϵ�����Կ�������ѡ����������ʾ˳�򣬿���ͨ���ƶ����е�����λ����ʵ��<br>';

$cplang['typeoption_title_0'] = '������󳤶ȣ���ѡ��';

$cplang['typeoption_title_1'] = '���ֵ����ѡ��';

$cplang['typeoption_title_2'] = '��Сֵ����ѡ��';

$cplang['typeoption_title_3'] = 'ѡ������';

$cplang['typeoption_title_4'] = 'ͼƬ�����(��ѡ)';

$cplang['typeoption_title_5'] = 'ͼƬ���߶�(��ѡ)';

$cplang['cache_updated'] = '�ѳɹ��������л���';



$cplang['video_manage'] = '��Ƶ����';

$cplang['video_category'] = '��Ƶ�������';

$cplang['video_all'] = '������Ƶ';

$cplang['image_manage'] = 'ͼ�����';

$cplang['image_category'] = 'ͼ��������';

$cplang['image_all'] = '����ͼ��';

$cplang['image_upload'] = '�ϴ�ͼƬ';

$cplang['image_briefing'] = '԰����';

$cplang['slide_manage'] = '�õ�Ƭ����';

$cplang['nav_manage'] = '����������';

$cplang['lead_manage'] = '�쵼��Ϣ����';

$cplang['leadmail_manage'] = '�쵼����';

$cplang['inter_forum'] = '����������';

$cplang['inter_post'] = '�û����Թ���';

$cplang['project_manage'] = '��Ŀ����';

$cplang['lifebox_manage'] = '�����������';

$cplang['branch_manage'] = '���Ź���';

$cplang['branch_news'] = '���Ŷ�̬';

$cplang['branch_file'] = '�ļ�����';

?>