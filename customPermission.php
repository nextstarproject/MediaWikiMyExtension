<?php

# 权限配置
$wgGroupPermissions['*']['createaccount'] = false;
$wgGroupPermissions['*']['edit'] = false;
$wgGroupPermissions['*']['read'] = false;
$wgGroupPermissions['user'] = [
    'read' => true,
    'edit' => false,
    'createpage' => false,
    'upload' => false,
];
// 创建 redactor 用户组
$wgGroupPermissions['redactor'] = [
    'read' => true,
    'edit' => true,
    'createpage' => true,
    'upload' => false,
];
// 创建 uploader 用户组
$wgGroupPermissions['uploader'] = [
    'read' => true,
    'edit' => false,
    'createpage' => false,
    'upload' => true,
];
$wgGroupPermissions['sysop']['edit'] = true;
$wgGroupPermissions['sysop']['createpage'] = true;
$wgGroupPermissions['sysop']['upload'] = true;