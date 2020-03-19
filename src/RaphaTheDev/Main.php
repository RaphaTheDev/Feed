<?php

namespace RaphaTheDev;

use pocketmine\Player;
use pocketmine\Server;
use pocketmine\command\CommandSender;
use pocketmine\command\Command;
use pocketmine\plugin\Plugin;
use pocketmine\level\particle\HappyVillagerParticle;
use pocketmine\level\sound\ClickSound;
use pocketmine\math\Vector3;
use pocketmine\plugin\PluginBase;

class Feed extends PluginBase {

    public function onEnable(){
        $this->getLogger()->info("§7> §aEnabling Feed Plugin);
    }

    public function onDisable(){
        $this->getLogger()->info("§7> §cDisabling Feed Plugin");
    }

    public function onCommand(CommandSender $sender, Command $kmt, string $label, array $args): bool {
         switch($use->getName()){
            case "feed":
                if($sender instanceof Player){
                    if($sender->hasPermission("feed.use")){
                        $sender->setFood(20);
                        $sender->getLevel()->addParticle(new HappyVillagerParticle($sender));
                        $sender->getLevel()->addSound(new ClickSound($sender));
                        $sender->sendPopup("§b§lYou were §cSuccesfuly §bFed");
                    }
                }
                break;
        }
        return true;
    }
}
