<?php

declare(strict_types=1);

namespace root\emojis;

use pocketmine\event\EventPriority;
use pocketmine\event\player\PlayerChatEvent;
use pocketmine\plugin\PluginBase;
use pocketmine\resourcepacks\ResourcePackException;
use pocketmine\resourcepacks\ZippedResourcePack;
use ReflectionException;
use root\emojis\utils\ChatParser;

class Loader extends PluginBase {
    /** @throws ReflectionException */
    protected function onEnable(): void {
        $this->loadPack();

        $this->getServer()->getPluginManager()->registerEvent(PlayerChatEvent::class, function(PlayerChatEvent $ev): void {
            $message = $ev->getMessage();
            $ev->setMessage(ChatParser::parse($message));
        }, EventPriority::MONITOR, $this, true);
    }

    private function loadPack(): void {
        $resourceFile = "pack.mcpack";

        $this->saveResource($resourceFile, true);

        $packPath = $this->getDataFolder() . $resourceFile;
        if (!is_file($packPath)) {
            $this->getLogger()->error("Pack unreachable: " . $packPath);
            return;
        }

        try {
            $pack = new ZippedResourcePack($packPath);
        } catch(ResourcePackException $e) {
            $this->getLogger()->error("Impossible to load pack: " . $e->getMessage());
            return;
        }

        $manager = $this->getServer()->getResourcePackManager();

        $stack = $manager->getResourceStack();
        foreach ($stack as $loadedPack) {
            if ($loadedPack->getPackId() === $pack->getPackId()) {
                $this->getLogger()->info("Pack with name {$pack->getPackName()} already load");
                return;
            }
        }

        array_unshift($stack, $pack);
        $manager->setResourceStack($stack);
        $manager->setResourcePacksRequired(true);

        $this->getLogger()->info("Pack loaded : {$pack->getPackName()} v{$pack->getPackVersion()}");
    }
}