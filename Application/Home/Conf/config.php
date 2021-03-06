<?php
return array(
	'MODULE_ALLOW_LIST'    =>    array('Home','Ajax'),
    'DEFAULT_MODULE'     => 'Home', //默认模块
    'DEFAULT_CONTROLLER'    =>  'Index', // 默认控制器名称
    'DEFAULT_ACTION'        =>  'index', // 默认操作名称
    'URL_MODEL'=>2,
    'URL_ROUTER_ON' => true,
    'URL_ROUTE_RULES' => array(
        'index'=>array("Home/Index/index"),
        'register'=>array("Home/Index/register"),
        'profile'=>array("Home/Index/profile"),
        'login'=>array("Home/Ajax/login"),
    ),
    'URL_MAP_RULES'=>array(
        'index'=>array("Home/Index/index"),
        'register'=>array("Home/Index/register"),
        'profile'=>array("Home/Index/profile"),
        'login'=>array("Home/Ajax/login"),
    ),

        /* 模板相关配置 */
    'TMPL_PARSE_STRING' => array(
    	'__STATIC__' => __ROOT__ . '/Public/static', //静态文件
    	'__ADDONS__' => __ROOT__ . '/Public/' . MODULE_NAME . '/Addons', //插件目录
    	'__IMG__'    => __ROOT__ . '/Public/' . MODULE_NAME . '/images', //图片目录
    	'__CSS__'    => __ROOT__ . '/Public/' . MODULE_NAME . '/css', //CSS目录
    	'__JS__'     => __ROOT__ . '/Public/' . MODULE_NAME . '/js', //JS目录
    ),
     /* 数据库设置 */
    'DB_TYPE'                => 'mysql', // 数据库类型
    'DB_HOST'                => 'localhost', // 服务器地址
    'DB_NAME'                => 'baidulogin', // 数据库名
    'DB_USER'                => 'root', // 用户名
    'DB_PWD'                 => '1234', // 密码
    'DB_PORT'                => '3306', // 端口
    'DB_PREFIX'              => '', // 数据库表前缀
    'DB_PARAMS'              => array(), // 数据库连接参数
    'DB_DEBUG'               => true, // 数据库调试模式 开启后可以记录SQL日志
    'DB_FIELDS_CACHE'        => true, // 启用字段缓存
    'DB_CHARSET'             => 'utf8', // 数据库编码默认采用utf8
    'DB_DEPLOY_TYPE'         => 0, // 数据库部署方式:0 集中式(单一服务器),1 分布式(主从服务器)
    'DB_RW_SEPARATE'         => false, // 数据库读写是否分离 主从式有效
    'DB_MASTER_NUM'          => 1, // 读写分离后 主服务器数量
    'DB_SLAVE_NO'            => '', // 指定从服务器序号

);