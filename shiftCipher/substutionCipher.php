<?php

  const LETTERS = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';

  const CODEMAP = 'UMRSQPBOLEXTZYAKJVCNHDWGIF';
  
  function encrypt($string) {
    $uppercase = strtoupper($string);
    return strtr($uppercase, LETTERS, CODEMAP);
  }
  function decrypt($string) {
    $uppercase = strtoupper($string);
    return strtr($uppercase, CODEMAP, LETTERS);
  }
  echo encrypt('TO BE OR NOT TO BE.');
  // NA MQ AV YAN NA MQ.
  echo decrypt('NA MQ AV YAN NA MQ.');
  // TO BE OR NOT TO BE.
?>