<?php
return array(
	//'配置项'=>'配置值'
	 /* 数据库设置 */
    'DB_TYPE'               =>  'mysql',     // 数据库类型
    'DB_HOST'               =>  'localhost', // 服务器地址
    'DB_NAME'               =>  'wgyt',          // 数据库名
    'DB_USER'               =>  'root',      // 用户名
    'DB_PWD'                =>  '',          // 密码
    'DB_PORT'               =>  '3306',        // 端口
    'DB_PREFIX'             =>  '',    // 数据库表前缀
    'DB_PARAMS'          	=>  array(), // 数据库连接参数
    'DB_DEBUG'  			=>  TRUE, // 数据库调试模式 开启后可以记录SQL日志
    'DB_FIELDS_CACHE'       =>  true,        // 启用字段缓存
    'DB_CHARSET'            =>  'utf8',      // 数据库编码默认采用utf8
    'DB_DEPLOY_TYPE'        =>  0, // 数据库部署方式:0 集中式(单一服务器),1

	'SHOW_PAGE_TRACE' =>true,
    'TMPL_L_DELIM' => '<{',
    'TMPL_R_DELIM' => '}>',
	//'MODULE_ALLOW_LIST' =>array('Admin','Home'),
	//'DEFAULT_MODULE'=>'Home'

    // '__TMPL__'      =>  APP_TMPL_PATH,  // 项目模板目录
    // '__ROOT__'      =>  __ROOT__,       // 当前网站地址
    // '__APP__'       =>  __APP__,        // 当前项目地址
    // '__GROUP__'     =>  defined('GROUP_NAME')?__GROUP__:__APP__,
    // '__ACTION__'    =>  __ACTION__,     // 当前操作地址
    // '__SELF__'      =>  __SELF__,       // 当前页面地址
    // '__URL__'       =>  __URL__,
    // '../Public'     =>  APP_TMPL_PATH.'Public',// 项目公共模板目录
    // '__PUBLIC__'    =>  __ROOT__.'/Public',// 站点公共目录
);