<?php
    $str = "HTMLとPHPの学習";
    echo "\$str = 「{$str}」<br><br>";
    $length = mb_strlen($str);
    echo "\$strの長さは{$length}文字です";
    $sub = mb_substr($str,5,3);
    echo "\$strを5文字目から3文字切り取ると「{$sub}」です<br>";
    $srch = "HTML";
    $replace = "Web";
    $result = str_replace($srch, $replace, $str);
    echo "\$strの「{$srch}」を「{$replace}」にすると「{$result}」になります<br>";
?>