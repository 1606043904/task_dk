<?php
/**
 * 打卡系统模块微站定义
 *
 * @author 
 * @url http://bbs.we7.cc/
 */
defined('IN_IA') or exit('Access Denied');

class Dg_clockModuleSite extends WeModuleSite {

	public function doMobileIndex1() {
		include $this->template('index');
	}
	public function doWebIndex2() {
		//这个操作被定义用来呈现 规则列表
	}
	public function doWebIndex3() {
		//这个操作被定义用来呈现 管理中心导航菜单
	}
	public function doMobileIndex4() {
		//这个操作被定义用来呈现 微站首页导航图标
	}
	public function doMobileIndex5() {
		//这个操作被定义用来呈现 微站个人中心导航
	}
	public function doMobileIndex6() {
		//这个操作被定义用来呈现 微站快捷功能导航
	}

}