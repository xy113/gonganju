// JavaScript Document
function $$(o){
	return document.getElementById(o);
}
function trimStr(str) { 
	var reg = /\s{2,}/g;
	var str = str.replace(reg,'');	
	var re = /\s*(\S[^\0]*\S)\s*/; 
	re.exec(str); 
	return RegExp.$1; 
}
function mb_cutstr(str, maxlen, dot) {
	var len = 0;
	var ret = '';
	var dot = !dot ? '...' : '';
	maxlen = maxlen - dot.length;
	for(var i = 0; i < str.length; i++) {
		len += str.charCodeAt(i) < 0 || str.charCodeAt(i) > 255 ? (charset == 'utf-8' ? 3 : 2) : 1;
		if(len > maxlen) {
			ret += dot;
			break;
		}
		ret += str.substr(i, 1);
	}
	return ret;
}
function social_share(share_url){
	var sw=Math.floor((window.screen.width/2-300));
    var sh=Math.floor((window.screen.height/2-280));
	window.open(share_url,'dialog','Width=600,Height=400,toolbar=no,menubar=no,directories=no,top='+sh+',left='+sw+',resizable=yes,scrollbars=yes,center=yes,help=no,alwaysRaised=yes,location=no, status=no',false);
}