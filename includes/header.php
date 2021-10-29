<?php
    if (!defined('__TYPECHO_ROOT_DIR__')) exit;
?>
<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php $this->archiveTitle(array(
            'category'  =>  _t('分类 %s 下的文章'),
            'search'    =>  _t('包含关键字 %s 的文章'),
            'tag'       =>  _t('标签 %s 下的文章'),
            'author'    =>  _t('%s 发布的文章')
        ), '', ' - '); ?><?php $this->options->title(); ?></title>
    <meta name="keywords" content="KeyWord">
    <meta name="description" content="Description">
    <link rel="stylesheet" href="<?php $this->options->themeUrl('style.css?v=0.01')?>">
    <link rel="shortcut icon" href="https://yujienb.cn/favicon.ico" type="image/x-icon">
    <?php $this->need('/includes/auto-echo.php')?>
    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/mdui@1.0.1/dist/css/mdui.min.css"
        integrity="sha384-cLRrMq39HOZdvE0j6yBojO4+1PrHfB7a9l5qLcmRm/fiWXYY+CndJPmyu5FV/9Tw"
        crossorigin="anonymous"
    />
    <?php $this->header(); ?>
</head>
<body>
    <div class="main">
        <header class="mdui-color-blue-400 mdui-shadow-3">
            <div class="header-main">
                <div class="header-site-title">
                    <a href="<?php $this->options->siteUrl(); ?>" class="font-pmzd"><?php $this->options->title() ?></a>
                    <div class="header-site-des"><?php $this->options->description() ?></div>
                </div>
                <nav class="nav-style">
                    <a href="<?php $this->options->siteUrl(); ?>" class="nav-btn mdui-btn" id="index">首页</a>
                    <a href="#" class="nav-btn mdui-btn" id="index">分类</a>
                    <a href="#" class="nav-btn mdui-btn" id="index">友链</a>
                    <a href="#" class="nav-btn mdui-btn" id="index">关于</a>
                    <a href="#" class="nav-btn mdui-btn" id="index" mdui-menu="{target: '#nav-more'}">更多</a>
                    <ul class="mdui-menu" id="nav-more">
                        <li class="mdui-menu-item">
                            <a href="javascript:;" class="mdui-ripple">音乐厅</a>
                        </li>
                        <li class="mdui-menu-item" disabled>
                            <a href="javascript:;">P站反代</a>
                        </li>
                        <li class="mdui-menu-item">
                            <a href="javascript:;" class="mdui-ripple">藏图阁</a>
                        </li>
                        <li class="mdui-divider"></li>
                        <li class="mdui-menu-item">
                            <a href="javascript:;" class="mdui-ripple">后台</a>
                        </li>
                    </ul>
                    <a href="#" class="mdui-btn mdui-btn-icon"><i class="mdui-icon material-icons">search</i></a>
                </nav>
            </div>
        </header>