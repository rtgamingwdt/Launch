<?php

namespace me\rtgamingwdt\Launch;

use pocketmine\Server;
use pocketmine\Player;

use pocketmine\plugin\PluginBase;

use pocketmine\event\Listener;

use pocketmine\command\CommandSender;
use pocketmine\command\Command;
use pocketmine\entity\Entity;
use pocketmine\entity\Living;

use pocketmine\math\Vector3;

use pocketmine\utils\TextFormat;

class Main extends PluginBase implements Listener {
  
  public function onEnable() {
    
  }
  
  public function onDisable() {
    
  }
  
  public function onCommand(CommandSender $sender, Command $cmd, String $label, Array $args) : bool {
    switch($cmd->getName()) {
      case "launch":
        if(!$sender instanceof Player) {
          $sender->sendMessage("*console goes flying*");
          return true;
        }
        if (count($args) == 0) {
          $sender->sendMessage(TextFormat::LIGHT_PURPLE.TextFormat::BOLD."Zooooom!");
          $player = $sender->getPlayer();
          $player->knockBack($player, 0, $player->getDirectionVector()->getX(), $player->getDirectionVector()->getZ(), 2);
        }
        
        $sender->sendMessage(TextFormat::LIGHT_PURPLE.TextFormat::BOLD."Zooooom!");
        $player = $sender->getPlayer();
        $player->knockBack($player, 0, $player->getDirectionVector()->getX(), $player->getDirectionVector()->getZ(), $args[1]);
    }
    return true;
  }
}
