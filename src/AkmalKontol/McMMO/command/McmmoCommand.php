<?php

namespace AkmalKontol\McMMO\command;

use AkmalKontol\McMMO\form\McmmoForm;
use AkmalKontol\McMMO\Main;
use pocketmine\command\CommandSender;
use pocketmine\command\PluginCommand;
use pocketmine\Player;
use pocketmine\plugin\Plugin;

class McmmoCommand extends PluginCommand
{

    public function __construct(string $name, Plugin $owner)
    {
        parent::__construct($name, $owner);
    }

    public function execute(CommandSender $sender, string $commandLabel, array $args)
    {
        if(!$sender instanceof Player) {
            $sender->sendMessage("Please use command in-game");
            return true;
        }
        $form = new McmmoForm(Main::getInstance());
        $form->init($sender);
        return true;
    }

}