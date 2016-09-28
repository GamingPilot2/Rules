<?php 
 
 namespace SimpleRules; 
 
 use pocketmine\Player; 
 use pocketmine\command\Command; 
 use pocketmine\command\CommandSender; 
 use pocketmine\utils\TextFormat; 
 use pocketmine\event\Listener; 
 use pocketmine\event\player\PlayerChatEvent; 
 use pocketmine\Server; 
 use pocketmine\plugin\pluginBase; 
  
 class Main extends PluginBase implements Listener{ 
 	public function onEnable(){ 
      $this->getServer()->getPluginManager()->registerEvents($this,$this); 
      $this->getLogger()->info("Rules now enabled !"); 
     } 
     public function onCommand(CommandSender $sender,Command $cmd,$label,array $args){ 
     	if($cmd->getName() == "rules"){
		$player = $this->getServer()->getPlayer($sender->getName());  
     		 $sender->sendMessage("§6--------{§dLife§eRules§6}--------"); 
             $sender->sendMessage("§91- §4Use bug/§c 1x §aBan 12H §c2x §aBan 7jrs §c3x §aBan def"); 
             $sender->sendMessage("§92- §4Utilisation de la commande §lme §r/§c 1x §aKick §c2x §aBan 1mois §c3x §aBan def"); 
             $sender->sendMessage("§93- §4Insultes à un §ljoueur/staff§r /§c 1x §aBan 1sem §c2x §aBan 1 mois §c3x §aBan def (Pseudo+IP+CID)"); 
             $sender->sendMessage("§6----------------------------------"); 
             $sender->sendMessage("?"); 
             $sender->sendMessage("&"); 
             $sender->sendMessage("?"); 
             $sender->sendMessage("&"); 
             $sender->sendMessage("?");  
         } 
         return true; 
     } 
 } 
 } 

