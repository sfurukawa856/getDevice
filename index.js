'use strict';
/**
 * ブラウザ判定の関数
 * @return 機種名 
 */
function getDevice() {
	const ua = navigator.userAgent.toLowerCase();

	if ((ua.indexOf('msie') != -1 || ua.indexOf('trident') != -1) && ua.indexOf('mobile') === -1) {
		return 'ie';
	} else if (ua.indexOf('edge') != -1 && ua.indexOf('mobile') === -1) {
		return 'edge';
	} else if (ua.indexOf('chrome') != -1 && ua.indexOf('mobile') === -1) {
		return 'chrome';
	} else if (ua.indexOf('safari') != -1 && ua.indexOf('mobile') === -1) {
		return 'safari';
	} else if (ua.indexOf('firefox') != -1 && ua.indexOf('mobile') === -1) {
		return 'firefox';
	} else if (ua.indexOf("iphone") != -1) {
		return 'iphone';
	} else if (ua.indexOf("ipad") != -1) {
		return 'ipad';
	} else if (ua.indexOf("android") != -1) {
		return 'android';
	}
}

console.log(getDevice());