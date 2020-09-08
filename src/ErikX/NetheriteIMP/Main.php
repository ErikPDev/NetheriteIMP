<?php

namespace ErikX\NetheriteIMP;

use pocketmine\plugin\PluginBase;
use pocketmine\item\Item;
use pocketmine\item\ItemFactory;
use pocketmine\event\player\PlayerInteractEvent;
use pocketmine\event\inventory\InventoryTransactionEvent;
use pocketmine\inventory\ArmorInventory;
use pocketmine\event\entity\EntityArmorChangeEvent;
class Main extends PluginBase{
    public function onEnable(){
        // VV Armor Implementations Below VV
        ItemFactory::registerItem(new Armor\NetheriteHelmet(), true);
        ItemFactory::registerItem(new Armor\NetheriteChestplate(), true);
        ItemFactory::registerItem(new Armor\NetheriteLeggings(), true);
        ItemFactory::registerItem(new Armor\NetheriteBoots(), true);
        
        
        // VV Items Implementations Below VV
        ItemFactory::registerItem(new Items\NetheriteSword(), true);
        ItemFactory::registerItem(new Items\NetheritePickaxe(), true);
        ItemFactory::registerItem(new Items\NetheriteShovel(), true);
        Itemfactory::registerItem(new Items\NetheriteAxe(), true);
        ItemFactory::registerItem(new Items\NetheriteHoe(), true);
        Item::initCreativeItems();
    }

    // public function onInteract(PlayerInteractEvent $event){
    //     $itemInHand = $event->getItem();
    //     $player = $event->getPlayer();
    //     $slot = $event->getPlayer()->getInventory()->getHeldItemIndex();
    //     $event->setCancelled(true);
    //     switch($itemInHand->getId()) {
    //         case 748:
    //             if($player->getArmorInventory()->getHelmet()->isNull()){
                    
    //                 $player->getArmorInventory()->setHelmet($itemInHand);
    //                 $player->getInventory()->setItem($slot, Item::AIR);
    //             }
    //     }
    // }

    // public function onTransaction(InventoryTransactionEvent $event){
    //     if(!$event->getInventory() instanceof ArmorInventory) return;
    //     if(!$event->getInventory()->getHolder() instanceof Player) return;
     
    // }
    
}