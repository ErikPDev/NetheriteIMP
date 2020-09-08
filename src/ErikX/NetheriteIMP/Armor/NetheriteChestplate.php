<?php

namespace ErikX\NetheriteIMP\Armor;
use pocketmine\item\Armor;

class NetheriteChestplate extends Armor{
    public function __construct(int $meta = 0){
        parent::__construct(749, $meta, "Netherite Chestplate");
    }
    public function getDefensePoints(): int{
        return 8;
    }
    public function getMaxDurability(): int{
        return 592;
    }
}