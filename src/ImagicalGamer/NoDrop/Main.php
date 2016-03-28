<?php
namespace ImagicalGamer\NoDrop;
use pocketmine\command\Command;
use pocketmine\event\Listener;
use pocketmine\event\player\PlayerDropItemEvent;
use pocketmine\plugin\PluginBase;
class Main extends PluginBase implements Listener{

public function onEnable(){
	$this->getServer()->getPluginManager()->registerEvents($this, $this);
        @mkdir($this->getDataFolder());
	$config = new Config($this->getDataFolder() . "/config.yml", Config::YAML);
	$config->set("NoDrop" . "true");
	$config->save();
}
public function onDropItem(PlayerDropItemEvent $event){
	$config = $this->getConfig();
	if($config->get("NoDrop") === "true")
	{
    $event->setCancelled(true);
}
   else
   {
   	$event->setCancelled(false);
   }
}
