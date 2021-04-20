<?php
function ssha_encode($text) {
  for ($i=1;$i<=10;$i++) {
    $salt .= substr('0123456789abcdef',rand(0,15),1);
  }
  
  echo "salt = $salt <br/>";
  
  $hash = "{SSHA}".base64_encode(pack("H*",sha1($text.$salt)).$salt);
  return $hash;
}
//tested
//e.g.: salt = 011e863c82, pw = 1236547890, hashed = {SSHA}QTDB0BJzq9fDAj/ooy8MCrK64CowMTFlODYzYzgy
//in LDIF: userpassword: {SSHA}QTDB0BJzq9fDAj/ooy8MCrK64CowMTFlODYzYzgy
?>
