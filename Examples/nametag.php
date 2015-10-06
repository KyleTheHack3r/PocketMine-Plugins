<?php
namespace Broadcast;
use pocketmine\plugin\PluginBase;
use pocketmine\Server;
use pocketmine\utils\TextFormat;
use pocketmine\utils\Config;
class MainClass extends PluginBase implements Listener{

public function onJoin(PlayerJoinEvent $event){

/*
Basicaly just $p->setNameTag(); - It accepts a string / var
*/

  $p = $event->getPlayer();
  $x = $p->getName();
  $p->setNameTag("[" + TextFormat::RED + "noob" + "]" + $x);
}

}
?>
