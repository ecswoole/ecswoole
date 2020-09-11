<?php

namespace App\Support;

class ErrorCode
{
	const CONST_00000 = 'ok';

	// 一级宏观错误码
	const CONST_A0001 = '用户端错误';

	// 二级宏观错误码
	const CONST_A0100 = '用户注册错误';
	const CONST_A0101 = '用户未同意隐私协议';
	const CONST_A0102 = '注册国家或地区受限';
	const CONST_A0110 = '用户名校验失败';
	const CONST_A0111 = '用户名已存在';
	const CONST_A0112 = '用户名包含敏感词';
	const CONST_A0113 = '用户名包含特殊字符';
	const CONST_A0120 = '密码校验失败';
	const CONST_A0121 = '密码长度不够';
	const CONST_A0122 = '密码强度不够';
	const CONST_A0130 = '校验码输入错误';
	const CONST_A0131 = '短信校验码输入错误';
	const CONST_A0132 = '邮件校验码输入错误';
	const CONST_A0133 = '语音校验码输入错误';
	const CONST_A0140 = '用户证件异常';
	const CONST_A0141 = '用户证件类型未选择';
	const CONST_A0142 = '大陆身份证编号校验非法';
	const CONST_A0143 = '护照编号校验非法';
	const CONST_A0144 = '军官证编号校验非法';
	const CONST_A0150 = '用户基本信息校验失败';
	const CONST_A0151 = '手机格式校验失败';
	const CONST_A0152 = '地址格式校验失败';
	const CONST_A0153 = '邮箱格式校验失败';

	// 二级宏观错误码
	const CONST_A0200 = '用户登录异常';
	const CONST_A0201 = '用户账户不存在';
	const CONST_A0202 = '用户账户被冻结';
	const CONST_A0203 = '用户账户已作废';
	const CONST_A0210 = '用户密码错误';
	const CONST_A0211 = '用户输入密码错误次数超限';
	const CONST_A0220 = '用户身份校验失败';
	const CONST_A0221 = '用户指纹识别失败';
	const CONST_A0222 = '用户面容识别失败';
	const CONST_A0223 = '用户未获得第三方登录授权';
	const CONST_A0230 = '用户登录已过期';
	const CONST_A0240 = '用户验证码错误';
	const CONST_A0241 = '用户验证码尝试次数超限';

	// 二级宏观错误码
	const CONST_A0300 = '访问权限异常';
	const CONST_A0301 = '访问未授权';
	const CONST_A0302 = '正在授权中';
	const CONST_A0303 = '用户授权申请被拒绝';
	const CONST_A0310 = '因访问对象隐私设置被拦截';
	const CONST_A0311 = '授权已过期';
	const CONST_A0312 = '无权限使用 API';
	const CONST_A0320 = '用户访问被拦截';
	const CONST_A0321 = '黑名单用户';
	const CONST_A0322 = '账号被冻结';
	const CONST_A0323 = '非法 IP 地址';
	const CONST_A0324 = '网关访问受限';
	const CONST_A0325 = '地域黑名单';
	const CONST_A0330 = '服务已欠费';
	const CONST_A0340 = '用户签名异常';
	const CONST_A0341 = 'RSA 签名错误';

	// 二级宏观错误码
	const CONST_A0400 = '用户请求参数错误';
	const CONST_A0401 = '包含非法恶意跳转链接';
	const CONST_A0402 = '无效的用户输入';
	const CONST_A0410 = '请求必填参数为空';
	const CONST_A0411 = '用户订单号为空';
	const CONST_A0412 = '订购数量为空';
	const CONST_A0413 = '缺少时间戳参数';
	const CONST_A0414 = '非法的时间戳参数';
	const CONST_A0420 = '请求参数值超出允许的范围';
	const CONST_A0421 = '参数格式不匹配';
	const CONST_A0422 = '地址不在服务范围';
	const CONST_A0423 = '时间不在服务范围';
	const CONST_A0424 = '金额超出限制';
	const CONST_A0425 = '数量超出限制';
	const CONST_A0426 = '请求批量处理总个数超出限制';
	const CONST_A0427 = '请求 JSON 解析失败';
	const CONST_A0430 = '用户输入内容非法';
	const CONST_A0431 = '包含违禁敏感词';
	const CONST_A0432 = '图片包含违禁信息';
	const CONST_A0433 = '文件侵犯版权';
	const CONST_A0440 = '用户操作异常';
	const CONST_A0441 = '用户支付超时';
	const CONST_A0442 = '确认订单超时';
	const CONST_A0443 = '订单已关闭';

	// 二级宏观错误码
	const CONST_A0500 = '用户请求服务异常';
	const CONST_A0501 = '请求次数超出限制';
	const CONST_A0502 = '请求并发数超出限制';
	const CONST_A0503 = '用户操作请等待';
	const CONST_A0504 = 'WebSocket 连接异常';
	const CONST_A0505 = 'WebSocket 连接断开';
	const CONST_A0506 = '用户重复请求';

	// 二级宏观错误码
	const CONST_A0600 = '用户资源异常';
	const CONST_A0601 = '账户余额不足';
	const CONST_A0602 = '用户磁盘空间不足';
	const CONST_A0603 = '用户内存空间不足';
	const CONST_A0604 = '用户 OSS 容量不足';
	const CONST_A0605 = '用户配额已用光'; // 每天抽奖数

	// 二级宏观错误码
	const CONST_A0700 = '用户上传文件异常';
	const CONST_A0701 = '用户上传文件类型不匹配';
	const CONST_A0702 = '用户上传文件太大';
	const CONST_A0703 = '用户上传图片太大';
	const CONST_A0704 = '用户上传视频太大';
	const CONST_A0705 = '用户上传压缩文件太大';

	//  二级宏观错误码
	const CONST_A0800 = '用户当前版本异常';
	const CONST_A0801 = '用户安装版本与系统不匹配';
	const CONST_A0802 = '用户安装版本过低';
	const CONST_A0803 = '用户安装版本过高';
	const CONST_A0804 = '用户安装版本已过期';
	const CONST_A0805 = '用户 API 请求版本不匹配';
	const CONST_A0806 = '用户 API 请求版本过高';
	const CONST_A0807 = '用户 API 请求版本过低';

	// 二级宏观错误码
	const CONST_A0900 = '用户隐私未授权';
	const CONST_A0901 = '用户隐私未签署';
	const CONST_A0902 = '用户摄像头未授权';
	const CONST_A0903 = '用户相机未授权';
	const CONST_A0904 = '用户图片库未授权';
	const CONST_A0905 = '用户文件未授权';
	const CONST_A0906 = '用户位置信息未授权';
	const CONST_A0907 = '用户通讯录未授权';

	// 二级宏观错误码
	const CONST_A1000 = '用户设备异常';
	const CONST_A1001 = '用户相机异常';
	const CONST_A1002 = '用户麦克风异常';
	const CONST_A1003 = '用户听筒异常';
	const CONST_A1004 = '用户扬声器异常';
	const CONST_A1005 = '用户 GPS 定位异常';

	// 一级宏观错误码
	const CONST_B0001 = '系统执行出错';

	// 二级宏观错误码
	const CONST_B0100 = '系统执行超时';
	const CONST_B0101 = '系统订单处理超时';

	// 二级宏观错误码
	const CONST_B0200 = '系统容灾功能被触发';
	const CONST_B0210 = '系统限流';
	const CONST_B0220 = '系统功能降级';

	// 二级宏观错误码
	const CONST_B0300 = '系统资源异常';
	const CONST_B0310 = '系统资源耗尽';
	const CONST_B0311 = '系统磁盘空间耗尽';
	const CONST_B0312 = '系统内存耗尽';
	const CONST_B0313 = '文件句柄耗尽';
	const CONST_B0314 = '系统连接池耗尽';
	const CONST_B0315 = '系统线程池耗尽';
	const CONST_B0320 = '系统资源访问异常';
	const CONST_B0321 = '系统读取磁盘文件失败';

	// 一级宏观错误码
	const CONST_C0001 = '调用第三方服务出错';

	// 二级宏观错误码
	const CONST_C0100 = '中间件服务出错';
	const CONST_C0110 = 'RPC 服务出错';
	const CONST_C0111 = 'RPC 服务未找到';
	const CONST_C0112 = 'RPC 服务未注册';
	const CONST_C0113 = '接口不存在';

	const CONST_C0120 = '消息服务出错';
	const CONST_C0121 = '消息投递出错';
	const CONST_C0122 = '消息消费出错';
	const CONST_C0123 = '消息订阅出错';
	const CONST_C0124 = '消息分组未查到';
	const CONST_C0130 = '缓存服务出错';
	const CONST_C0131 = 'key 长度超过限制';
	const CONST_C0132 = 'value 长度超过限制';
	const CONST_C0133 = '存储容量已满';
	const CONST_C0134 = '不支持的数据格式';
	const CONST_C0140 = '配置服务出错';
	const CONST_C0150 = '网络资源服务出错';
	const CONST_C0151 = 'VPN 服务出错';
	const CONST_C0152 = 'CDN 服务出错';
	const CONST_C0153 = '域名解析服务出错';
	const CONST_C0154 = '网关服务出错';

	// 二级宏观错误码
	const CONST_C0200 = '第三方系统执行超时';
	const CONST_C0210 = 'RPC 执行超时';
	const CONST_C0220 = '消息投递超时';
	const CONST_C0230 = '缓存服务超时';
	const CONST_C0240 = '配置服务超时';
	const CONST_C0250 = '数据库服务超时';

	// 二级宏观错误码
	const CONST_C0300 = '数据库服务出错';
	const CONST_C0311 = '表不存在';
	const CONST_C0312 = '列不存在';
	const CONST_C0321 = '多表关联中存在多个相同名称的列';
	const CONST_C0331 = '数据库死锁';
	const CONST_C0341 = '主键冲突';

	// 二级宏观错误码
	const CONST_C0400 = '第三方容灾系统被触发';
	const CONST_C0401 = '第三方系统限流';
	const CONST_C0402 = '第三方功能降级';

	// 二级宏观错误码
	const CONST_C0500 = '通知服务出错';
	const CONST_C0501 = '短信提醒服务失败';
	const CONST_C0502 = '语音提醒服务失败';
	const CONST_C0503 = '邮件提醒服务失败';
}
