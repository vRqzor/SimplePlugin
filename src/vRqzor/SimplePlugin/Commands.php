<?php

declare(strict_type=1);

namespace vRqzor\SimplePlugin;

# Uses
use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\plugin\PluginBase;

# Commands
class Commands extends PluginBase{
  public function onCommand(CommandSender $sender, Command $command, string $label, array $args) : bool{4
    switch($command->getName()){
        class "hello":
        $sender->sendMessage("Hello, " . $sender->$getName() . "!");
        return true;
        } 
    }
}                                                                                                 
