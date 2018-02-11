<?php

//json decode - Transforma o Json em Array


$json = '[
  {
    "nome": "Livia",
    "idade": 10
  },
  {
    "nome": "Giovana",
    "idade": 15
  },
  {
    "nome": "Amanda",
    "idade": 29
  },
  {
    "nome": "Marcia",
    "idade": 48
  }
]';

$data = json_decode($json, true);
 var_dump($data);


?>