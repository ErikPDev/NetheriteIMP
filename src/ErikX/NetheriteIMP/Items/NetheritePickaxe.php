<?php

namespace ErikX\NetheriteIMP\Items;
use pocketmine\entity\Entity;
use pocketmine\block\BlockToolType;
use pocketmine\block\Block;
use pocketmine\item\Pickaxe;

class NetheritePickaxe extends Pickaxe{
    public function __construct(int $meta = 0){
        parent::__construct(745, $meta, "Netherite Pickaxe", 5);
    }
    public function getBlockToolType(): int{
        return BlockToolType::TYPE_PICKAXE;
    }
    public function getBlockToolHarvestLevel(): int{
        return 5;
    }

    public function getMaxDurability(): int{
        return 2031;
    }

    public function onDestroyBlock(Block $block): bool{
        if ($block->getHardness() > 0) {
            return $this->applyDamage(1);
        }
        return false;
    }

    public function getAttackPoints(): int{
        return 6;
    }

    public function onAttackEntity(Entity $victim): bool{
        return $this->applyDamage(2);
    }

}