<?php
/**
 * 打卡系统模块处理程序
 *
 * @author 
 * @url http://bbs.we7.cc/
 */
defined('IN_IA') or exit('Access Denied');

class Dg_clockModuleProcessor extends WeModuleProcessor {
	public function respond() {
		$content = $this->message['content'];
		//这里定义此模块进行消息处理时的具体过程, 请查看微擎文档来编写你的代码
		//return $this->respText(var_export($this->message,true));
		return $this->respText('http://139.129.39.188/app/index.php?i=2&c=entry&do=index1&m=dg_clock');
	}
}