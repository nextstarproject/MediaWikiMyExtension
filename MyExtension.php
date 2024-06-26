<?php

if ( !defined( 'MEDIAWIKI' ) ) {
    exit;
}

// 定义命名空间常量
// define("NS_LINUX", 3000);
// define("NS_LINUX_TALK", 3001);
// define("NS_CHINESEMEDICINE", 3002);
// define("NS_CHINESEMEDICINE_TALK", 3003);

// // 注册命名空间
// $wgExtraNamespaces[NS_LINUX] = 'Linux';
// $wgExtraNamespaces[NS_LINUX_TALK] = 'Linux讨论';
// $wgExtraNamespaces[NS_CHINESEMEDICINE] = '中医';
// $wgExtraNamespaces[NS_CHINESEMEDICINE_TALK] = '中医讨论';

// // 注册命名空间和本地化的钩子
// $wgHooks['CanonicalNamespaces'][] = 'onCanonicalNamespaces';
// $wgHooks['LocalisationCacheRecache'][] = 'onLocalisationCacheRecache';

// function onCanonicalNamespaces( &$namespaces ) {
//     $namespaces[NS_LINUX] = 'Linux';
//     $namespaces[NS_LINUX_TALK] = 'Linux讨论';
//     $namespaces[NS_CHINESEMEDICINE] = 'ChineseMedicine';
//     $namespaces[NS_CHINESEMEDICINE_TALK] = 'ChineseMedicine_talk';
//     return true;
// }

// function onLocalisationCacheRecache( $cache, $code, &$cachedData ) {
//     $customNamespaceNames = [
//         'en' => [
//             NS_LINUX => 'Linux',
//             NS_LINUX_TALK => 'Linux_talk',
//             NS_CHINESEMEDICINE => '',
//             NS_CHINESEMEDICINE_TALK => ''
//         ],
//         'zh' => [
//             NS_LINUX => 'Linux',
//             NS_LINUX_TALK => 'Linux讨论',
//             NS_CHINESEMEDICINE => '中医',
//             NS_CHINESEMEDICINE_TALK => '中医讨论'
//         ],
//     ];

//     if ( isset( $customNamespaceNames[$code] ) ) {
//         foreach ( $customNamespaceNames[$code] as $nsId => $nsName ) {
//             $cachedData['namespaces'][$nsId] = $nsName;
//         }
//     }else{
//         $code = 'zh';
//         foreach ( $customNamespaceNames[$code] as $nsId => $nsName ) {
//             $cachedData['namespaces'][$nsId] = $nsName;
//         }
//     }
//     return true;
// }