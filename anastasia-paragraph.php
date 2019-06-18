<?php
/*
Plugin Name: Анастаси́я Пара́граф (Anastasia Paragraph)
Description: pタグを復活させる簡易なプラグイン(テーマやコアファイルを直接編集するわけにもいかないので……)
Version: 0.0.1
Author: アルム＝バンド
License: MIT
*/
add_filter('the_content', 'wpautop', 0, 1);