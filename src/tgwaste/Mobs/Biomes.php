<?php

declare(strict_types=1);

namespace tgwaste\Mobs;

use pocketmine\data\bedrock\BiomeIds;
use pocketmine\player\Player;

class Biomes {
	public function getMobsForBiome(string $biome) {
		$biome = strtoupper($biome);
		$biometable = [
			"BIRCH FOREST" => ["Cat", "Chicken", "Cow", "Horse", "Parrot", "Pig", "Rabbit", "Sheep", "Slime"],
			"DESERT" => ["Cow", "Horse", "Pig", "Rabbit", "Sheep"],
			"FOREST" => ["Cat", "Chicken", "Cow", "Horse", "Parrot", "Pig", "Rabbit", "Sheep", "Bee"],
			"HELL" => ["Cat", "Chicken", "Cow", "Horse", "Parrot", "Pig", "Rabbit", "Sheep"],
			"ICE PLAINS" => ["PolarBear", "Goat"],
			"MOUNTAINS" => ["Cat", "Chicken", "Cow", "Horse", "Llama", "Parrot", "Pig", "Rabbit", "Sheep", "Goat"],
			"OCEAN" => ["Cod", "Axolotl", "Dolphin", "ElderGuardian", "PufferFish", "Salmon", "Squid", "TropicalFish", "Drowned"],
			"PLAINS" => ["Bee", "Cat", "Chicken", "Cow", "Donkey", "Horse", "Parrot", "Pig", "Rabbit", "Sheep", "Fox"],
			"RIVER" => ["Cod", "Axolotl", "PufferFish", "Salmon", "TropicalFish", "Drowned"],
			"SMALL MOUNTAIN" => ["Cat", "Chicken", "Cow", "Horse", "Llama", "Parrot", "Pig", "Rabbit", "Sheep"],
			"SWAMP" => ["Cow", "Horse", "Pig", "Rabbit", "Sheep", "Slime"],
			"TAIGA" => ["Cat", "Chicken", "Cow", "Horse", "Ocelot", "Pig", "Rabbit", "Sheep"]
		];

		if (!array_key_exists($biome, $biometable)) {
			$biome = "PLAINS";
		}

		return $biometable[$biome];
	}

	public function getNightMobsForBiome(string $biome) {
		$biome = strtoupper($biome);
		$biometable = [
			"BIRCH FOREST" => ["Creeper", "Skeleton", "Spider", "Wolf", "Zombie", "Enderman", "ZombieVillager", "Witch", "Slime", "Witch"],
			"DESERT" => ["Creeper", "Husk", "Skeleton", "Spider", "Stray", "Wolf", "Zombie", "ZombieVillager", "Enderman"],
			"END" => ["Enderman"],
			"FOREST" => ["Creeper", "Enderman", "Skeleton", "Spider", "Wolf", "Zombie", "ZombieVillager", "Witch"],
			"HELL" => ["Skeleton", "Zombie", "Spider", "Creeper", "Enderman"],
			"ICE PLAINS" => ["Skeleton", "Zombie", "Skeleton", "Enderman", "Spider", "Creeper"],
			"MOUNTAINS" => ["Creeper", "Enderman", "Skeleton", "Spider", "Wolf", "Zombie", "Witch"],
			"OCEAN" => ["Cod", "PufferFish", "Salmon", "TropicalFish", "Drowned"],
			"PLAINS" => ["Creeper", "Enderman", "Skeleton", "Spider", "Wolf", "Zombie", "ZombieVillager", "Witch"],
			"SMALL MOUNTAIN" => ["Creeper", "Enderman", "Skeleton", "Spider", "Wolf", "Zombie", "ZombieVillager", "Phantom"],
			"RIVER" => ["Cod", "Axolotl", "PufferFish", "Salmon", "TropicalFish", "Drowned"],
			"SMALL MOUNTAIN" => ["Creeper", "Skeleton", "Spider", "Wolf", "Zombie", "Witch"],
			"SWAMP" => ["Spider", "Stray", "Witch", "Zombie", "Slime"],
			"TAIGA" => ["Spider", "Stray", "Zombie", "Enderman", "Skeleton", "Creeper"],
		];

		if (!array_key_exists($biome, $biometable)) {
			$biome = "PLAINS";
		}

		return $biometable[$biome];
	}
}
