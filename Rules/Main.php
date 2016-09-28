<?php

namespace Rules;

use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\plugin\PluginBase;
use pocketmine\event\player\PlayerChatEvent;
use pocketmine\event\Listener;

class Main extends PluginBase implements Listener{

public function onEnable(){
      $this->getLogger()->info("Le plugin /rules est desormais actif !");
      $this->getServer()->getPluginManager()->registerEvents($this, $this);
      }
public function onCommand(CommandSender $sender, Command $command, $label, array $args){
 case "rules";
   if($sender instanceof Player){
  $sender->sendMessage("§6--------{§dLife§eRules§6}--------");
  $sender->sendMessage("§91- §4Use bug/§c 1x §aBan 12H §c2x §aBan 7jrs §c3x §aBan def");
  $sender->sendMessage("§92- §4Utilisation de la commande §lme §r/§c 1x §aKick §c2x §aBan 1mois §c3x §aBan def");
  $sender->sendMessage("§93- §4Insultes à un §ljoueur/staff§r /§c 1x §aBan 1sem §c2x §aBan 1 mois §c3x §aBan def (Pseudo+IP+CID)");
  $sender->sendMessage("§6----------------------------------");
           break;
            }
     return true;
 }
