<?php
namespace ImagicalGamer\NoDrop;
use pocketmine\command\Command;
use pocketmine\event\Listener;
use pocketmine\event\player\PlayerDropItemEvent;
use pocketmine\plugin\PluginBase;
class Main extends PluginBase implements Listener{

public function onEnable(){
	$this->getServer()->getPluginManager()->registerEvents($this, $this);
}
public function onDropItem(PlayerDropItemEvent $event){
    $event->setCancelled(true);
}
}
