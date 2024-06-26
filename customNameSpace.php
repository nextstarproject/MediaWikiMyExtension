<?php

# 自定义命名空间
// 定义Linux命名空间常量
define("NS_LINUX", 3000);
define("NS_LINUX_TALK", 3001);
// 注册自定义命名空间
$wgExtraNamespaces[NS_LINUX] = "Linux";
$wgExtraNamespaces[NS_LINUX_TALK] = "Linux讨论";
// 设置命名空间的翻译
$wgNamespaceAliases['Linux'] = NS_LINUX;
$wgNamespaceAliases['Linux_talk'] = NS_LINUX_TALK;
// 定义中医命名空间常量
define("NS_CHINESEMEDICINE", 3002);
define("NS_CHINESEMEDICINE_TALK", 3003);
// 注册自定义命名空间
$wgExtraNamespaces[NS_CHINESEMEDICINE] = "中医";
$wgExtraNamespaces[NS_CHINESEMEDICINE_TALK] = "中医讨论";
// 设置命名空间的翻译
$wgNamespaceAliases['ChineseMedicine'] = NS_CHINESEMEDICINE;
$wgNamespaceAliases['ChineseMedicine_talk'] = NS_CHINESEMEDICINE_TALK;