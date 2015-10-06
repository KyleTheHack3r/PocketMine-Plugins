<?php

namespace namespace;

// use pocketmine stuff stuff...

class MainClass extends PluginBase implements Listener{

public function random(){

/*
We seet an array, then shuffle it and pick the first value.
*/

  $x = array(1,2,3,4,5,);
  shuffle($x);
  $random = $x[0];
  return $random;
}

}
?>
