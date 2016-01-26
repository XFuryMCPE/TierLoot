<?php

namespace xfury\tl;

use pocketmine\plugin\PluginBase as P;
use pocketmine\event\Listener as L;
use pocketmine\utils\TextFormat;
use pocketmine\event\block\BlockBreakEvent as BBL;
use pocketmine\level\sound\PopSound as Pop;
use pocketmine\level\particle\LavaParticle as Lava;
use pocketmine\block\Block;
use pocketmine\math\Vector3;
use pocketmine\item\Item;

class Main extends P implements L{
	
	public function onEnable(){
		$this->getServer()->getPluginManager()->registerEvents($this,$this);
		$this->saveDefaultConfig();
		$this->getServer()->getLogger()->info(TextFormat::GREEN."[TierLoot] Activated!");
	}

	public function onBreak(BBL $e){
		$p = $e->getPlayer();
		if($e->getBlock()->getId() == 1 && mt_rand(0,$this->getConfig()->get("t1-chance")) == "1"){
			if($p->getGamemode() == "1"){
				if($this->getConfig()->get("find-in-cmode") == "false"){
				}
				else{
					$p->getLevel()->addParticle(new Lava($e->getBlock(), 2));
					$p->getLevel()->addParticle(new Lava($e->getBlock(), 2));
					$p->getLevel()->addParticle(new Lava($e->getBlock(), 2));
					$p->getLevel()->addParticle(new Lava($e->getBlock(), 2));
					$p->getLevel()->addParticle(new Lava($e->getBlock(), 2));
					$p->getLevel()->addParticle(new Lava($e->getBlock(), 2));
					$p->getLevel()->addParticle(new Lava($e->getBlock(), 2));
					$p->getLevel()->addParticle(new Lava($e->getBlock(), 2));
					$p->getLevel()->addSound(new Pop($p->getLocation()));
					$this->getServer()->broadcastMessage(TextFormat::LIGHT_PURPLE.TextFormat::BOLD."<TL> ".TextFormat::RESET.TextFormat::GREEN.$p->getName().TextFormat::AQUA." found ".TextFormat::BOLD.TextFormat::DARK_RED."Tier 1".TextFormat::RESET.TextFormat::AQUA." loot underground!");
					foreach($this->getConfig()->get("t1-loot") as $loot){
						$p->getInventory()->addItem(Item::get($loot,0,mt_rand(0,$this->getConfig()->get("t1-item-max"))));
					}
				}
			}
		}
		else{
		}
		if($e->getBlock()->getId() == 1 && mt_rand(0,$this->getConfig()->get("t2-chance")) == "1"){
			if($p->getGamemode() == "1"){
				if($this->getConfig()->get("find-in-cmode") == "false"){
				}
				else{
					$p->getLevel()->addParticle(new Lava($e->getBlock(), 2));
					$p->getLevel()->addParticle(new Lava($e->getBlock(), 2));
					$p->getLevel()->addParticle(new Lava($e->getBlock(), 2));
					$p->getLevel()->addParticle(new Lava($e->getBlock(), 2));
					$p->getLevel()->addParticle(new Lava($e->getBlock(), 2));
					$p->getLevel()->addParticle(new Lava($e->getBlock(), 2));
					$p->getLevel()->addParticle(new Lava($e->getBlock(), 2));
					$p->getLevel()->addParticle(new Lava($e->getBlock(), 2));
					$p->getLevel()->addParticle(new Lava($e->getBlock(), 2));
					$p->getLevel()->addParticle(new Lava($e->getBlock(), 2));
					$p->getLevel()->addParticle(new Lava($e->getBlock(), 2));
					$p->getLevel()->addSound(new Pop($p->getLocation()));
					$this->getServer()->broadcastMessage(TextFormat::LIGHT_PURPLE.TextFormat::BOLD."<TL> ".TextFormat::RESET.TextFormat::GREEN.$p->getName().TextFormat::AQUA." found ".TextFormat::BOLD.TextFormat::RED."Tier 2".TextFormat::RESET.TextFormat::AQUA." loot underground!");
					foreach($this->getConfig()->get("t2-loot") as $loot){
						$p->getInventory()->addItem(Item::get($loot,0,mt_rand(0,$this->getConfig()->get("t2-item-max"))));
					}
				}
			}
		}
		else{
		}
		if($e->getBlock()->getId() == 1 && mt_rand(0,$this->getConfig()->get("t3-chance")) == "1"){
			if($p->getGamemode() == "1"){
				if($this->getConfig()->get("find-in-cmode") == "false"){
				}
				else{
					$p->getLevel()->addParticle(new Lava($e->getBlock(), 2));
					$p->getLevel()->addParticle(new Lava($e->getBlock(), 2));
					$p->getLevel()->addParticle(new Lava($e->getBlock(), 2));
					$p->getLevel()->addParticle(new Lava($e->getBlock(), 2));
					$p->getLevel()->addParticle(new Lava($e->getBlock(), 2));
					$p->getLevel()->addParticle(new Lava($e->getBlock(), 2));
					$p->getLevel()->addParticle(new Lava($e->getBlock(), 2));
					$p->getLevel()->addParticle(new Lava($e->getBlock(), 2));
					$p->getLevel()->addParticle(new Lava($e->getBlock(), 2));
					$p->getLevel()->addParticle(new Lava($e->getBlock(), 2));
					$p->getLevel()->addParticle(new Lava($e->getBlock(), 2));
					$p->getLevel()->addParticle(new Lava($e->getBlock(), 2));
					$p->getLevel()->addParticle(new Lava($e->getBlock(), 2));
					$p->getLevel()->addSound(new Pop($p->getLocation()));
					$this->getServer()->broadcastMessage(TextFormat::LIGHT_PURPLE.TextFormat::BOLD."<TL> ".TextFormat::RESET.TextFormat::GREEN.$p->getName().TextFormat::AQUA." found ".TextFormat::BOLD.TextFormat::GOLD."Tier 3".TextFormat::RESET.TextFormat::AQUA." loot underground!");
					foreach($this->getConfig()->get("t3-loot") as $loot){
						$p->getInventory()->addItem(Item::get($loot,0,mt_rand(0,$this->getConfig()->get("t3-item-max"))));
					}
				}
			}
		}
		else{
		}
		if($e->getBlock()->getId() == 1 && mt_rand(0,$this->getConfig()->get("t4-chance")) == "1"){
			if($p->getGamemode() == "1"){
				if($this->getConfig()->get("find-in-cmode") == "false"){
				}
				else{
					$p->getLevel()->addParticle(new Lava($e->getBlock(), 2));
					$p->getLevel()->addParticle(new Lava($e->getBlock(), 2));
					$p->getLevel()->addParticle(new Lava($e->getBlock(), 2));
					$p->getLevel()->addParticle(new Lava($e->getBlock(), 2));
					$p->getLevel()->addParticle(new Lava($e->getBlock(), 2));
					$p->getLevel()->addParticle(new Lava($e->getBlock(), 2));
					$p->getLevel()->addParticle(new Lava($e->getBlock(), 2));
					$p->getLevel()->addParticle(new Lava($e->getBlock(), 2));
					$p->getLevel()->addParticle(new Lava($e->getBlock(), 2));
					$p->getLevel()->addParticle(new Lava($e->getBlock(), 2));
					$p->getLevel()->addParticle(new Lava($e->getBlock(), 2));
					$p->getLevel()->addParticle(new Lava($e->getBlock(), 2));
					$p->getLevel()->addParticle(new Lava($e->getBlock(), 2));
					$p->getLevel()->addParticle(new Lava($e->getBlock(), 2));
					$p->getLevel()->addParticle(new Lava($e->getBlock(), 2));
					$p->getLevel()->addSound(new Pop($p->getLocation()));
					$this->getServer()->broadcastMessage(TextFormat::LIGHT_PURPLE.TextFormat::BOLD."<TL> ".TextFormat::RESET.TextFormat::GREEN.$p->getName().TextFormat::AQUA." found ".TextFormat::BOLD.TextFormat::YELLOW."Tier 4".TextFormat::RESET.TextFormat::AQUA." loot underground!");
					foreach($this->getConfig()->get("t4-loot") as $loot){
						$p->getInventory()->addItem(Item::get($loot,0,mt_rand(0,$this->getConfig()->get("t4-item-max"))));
					}
				}
			}
		}
		else{
		}
		if($e->getBlock()->getId() == 1 && mt_rand(0,$this->getConfig()->get("t5-chance")) == "1"){
			if($p->getGamemode() == "1"){
				if($this->getConfig()->get("find-in-cmode") == "false"){
				}
				else{
					$p->getLevel()->addParticle(new Lava($e->getBlock(), 2));
					$p->getLevel()->addParticle(new Lava($e->getBlock(), 2));
					$p->getLevel()->addParticle(new Lava($e->getBlock(), 2));
					$p->getLevel()->addParticle(new Lava($e->getBlock(), 2));
					$p->getLevel()->addParticle(new Lava($e->getBlock(), 2));
					$p->getLevel()->addParticle(new Lava($e->getBlock(), 2));
					$p->getLevel()->addParticle(new Lava($e->getBlock(), 2));
					$p->getLevel()->addParticle(new Lava($e->getBlock(), 2));
					$p->getLevel()->addParticle(new Lava($e->getBlock(), 2));
					$p->getLevel()->addParticle(new Lava($e->getBlock(), 2));
					$p->getLevel()->addParticle(new Lava($e->getBlock(), 2));
					$p->getLevel()->addParticle(new Lava($e->getBlock(), 2));
					$p->getLevel()->addParticle(new Lava($e->getBlock(), 2));
					$p->getLevel()->addParticle(new Lava($e->getBlock(), 2));
					$p->getLevel()->addParticle(new Lava($e->getBlock(), 2));
					$p->getLevel()->addParticle(new Lava($e->getBlock(), 2));
					$p->getLevel()->addParticle(new Lava($e->getBlock(), 2));
					$p->getLevel()->addSound(new Pop($p->getLocation()));
					$this->getServer()->broadcastMessage(TextFormat::LIGHT_PURPLE.TextFormat::BOLD."<TL> ".TextFormat::RESET.TextFormat::GREEN.$p->getName().TextFormat::AQUA." found ".TextFormat::BOLD.TextFormat::WHITE."Tier 5".TextFormat::RESET.TextFormat::AQUA." loot underground!");
					foreach($this->getConfig()->get("t5-loot") as $loot){
						$p->getInventory()->addItem(Item::get($loot,0,mt_rand(0,$this->getConfig()->get("t5-item-max"))));
					}
				}
			}
		}
		else{
		}
	}
}
