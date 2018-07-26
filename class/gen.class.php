<?php

class ClassGEN
{
  public function gen()
  {
    $chars = "qazxswedcvfrtgbnhyujmkiolp1234567890QAZXSWEDCVFRTGBNHYUJMKIOLP";

    $max  = 5;
    $size = StrLen($chars) - 1;
    $url  = "";
    while ($max--)
      $url .= $chars[rand(0, $size)];

    $proto = strtolower(substr($_SERVER["SERVER_PROTOCOL"], 0, strpos($_SERVER["SERVER_PROTOCOL"], '/'))) . '://';

    return $proto . $_SERVER['HTTP_HOST'] . "/?" . $url;
  }
}
