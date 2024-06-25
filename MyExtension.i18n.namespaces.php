<?php
/**
 *  Translations of the namespaces introduced by MyExtension.
 *
 * @file
 */

$namespaceNames = [];

//  For wikis where the MyExtension extension is not installed.
if( !defined( 'NS_LINUX' ) ) {
    define( 'NS_LINUX', 3000 );
}

if( !defined( 'NS_LINUX_TALK' ) ) {
    define( 'NS_LINUX_TALK', 3001 );
}

if( !defined( 'NS_CHINESEMEDICINE' ) ) {
    define( 'NS_CHINESEMEDICINE', 3002 );
}

if( !defined( 'NS_CHINESEMEDICINE_TALK' ) ) {
    define( 'NS_CHINESEMEDICINE_TALK', 3003 );
}

/** English */
$namespaceNames['en'] = [
    NS_LINUX => 'Linux',
    NS_LINUX_TALK => 'Linux_talk',
    NS_CHINESEMEDICINE => 'ChineseMedicine',
    NS_CHINESEMEDICINE_TALK => 'ChineseMedicine_talk'
];

/** Chinese */
$namespaceNames['zh'] = [
    NS_LINUX => 'Linux',
    NS_LINUX_TALK => 'Linux讨论',
    NS_CHINESEMEDICINE => '中医',
    NS_CHINESEMEDICINE_TALK => '中医讨论'
];