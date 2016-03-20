<?php
namespace ImagicalGamer\NoDrop;
use pocketmine\command\CommandSender;
use pocketmine\command\Command;
use pocketmine\event\Listener;
use pocketmine\event\player\PlayerDropItemEvent;
use pocketmine\plugin\PluginBase;
use pocketmine\utils\TextFormat as Color;
class Main extends PluginBase implements Listener{

public function onEnable(){
	$this->getServer()->getPluginManager()->registerEvents($this, $this);
	$this->getLogger()->info(Color::GREEN . "No-Drop Enabled!");
}
public function onDropItem(PlayerDropItemEvent $event){
    $event->setCancelled(true);
}
}
