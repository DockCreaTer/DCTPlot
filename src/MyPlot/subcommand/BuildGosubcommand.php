<?php
namespace MyPlot\subcommand;

use pocketmine\command\CommandSender;
use pocketmine\level\Level;
use pocketmine\level\Location;
use pocketmine\level\Position;

class BuildGoSubCommand extends SubCommand
 
$pos = new Position(15,15,15,$this->getServer()->getLevelByName($this->level));
$sender->teleport($pos);
 $sender->sendMessage(TextFormat::GREEN.$this->tra("进入成功！"));
}
//$sender->setLevel($this->getServer()->getLevelByName($this->level));
