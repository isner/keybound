<?php
// -----------------------------
// ### Spell classification ###
//
//$class => 
//	'specs' =>
//		spec =>
//			filename =>
//				displayText, 
//				displaySubtext
//	'talents' =>
//		lev?? =>
//			filename =>
//				displayText,
//				displaySubtext
//	'glyphs' =>
//		glyph =>
//			filename =>
//				displayText
//				displaySubtext
// -----------------------------

$warlockAbilities = array(
	// ----------
	// All Specs
	// ----------
	'specs' => array(
		'all' => array(
			'banish' => array(
				'displayText' => 'Banish',
				'displaySubtext' => '',
				'abilityType' => 'combat'
			),
			'commanddemon' => array(
				'displayText' => 'Command Demon',
				'displaySubtext' => '',
				'abilityType' => 'pet'
			),
			'corruption' => array(
				'displayText' => 'Corruption',
				'displaySubtext' => '',
				'abilityType' => 'combat'
			),
			'createhealthstone' => array(
				'displayText' => 'Create Healthstone',
				'displaySubtext' => '',
				'abilityType' => 'utility'
			),
			'createsoulwell' => array(
				'displayText' => 'Create Soulwell',
				'displaySubtext' => '',
				'abilityType' => 'utility'
			),
			'curseofenfeeblement' => array(
				'displayText' => 'Curse of Enfeeblement',
				'displaySubtext' => '',
				'abilityType' => 'combat'
			),
			'curseoftheelements' => array(
				'displayText' => 'Curse of the Elements',
				'displaySubtext' => '',
				'abilityType' => 'combat'
			),
			'darkintent' => array(
				'displayText' => 'Dark Intent',
				'displaySubtext' => '',
				'abilityType' => 'buff'
			),
			'demoniccirclesummon' => array(
				'displayText' => 'Demonic Circle: Summon',
				'displaySubtext' => '',
				'abilityType' => 'combat'
			),
			'demoniccircleteleport' => array(
				'displayText' => 'Demonic Circle: Teleport',
				'displaySubtext' => '',
				'abilityType' => 'combat'
			),
			'demonicgateway' => array(
				'displayText' => 'Demonic Gateway',
				'displaySubtext' => '',
				'abilityType' => 'combat'
			),
			'enslavedemon' => array(
				'displayText' => 'Enslave Demon',
				'displaySubtext' => '',
				'abilityType' => 'combat'
			),
			'eyeofkilrogg' => array(
				'displayText' => 'Eye of Kilrogg',
				'displaySubtext' => '',
				'abilityType' => 'utility'
			),
			'fear' => array(
				'displayText' => 'Fear',
				'displaySubtext' => '',
				'abilityType' => 'combat'
			),
			'felflame' => array(
				'displayText' => 'Fel Flame',
				'displaySubtext' => '',
				'abilityType' => 'combat'
			),
			'felhunter_devourmagic' => array(
				'displayText' => 'Felhunter: Devour Magic',
				'displaySubtext' => '',
				'abilityType' => 'pet'
			),
			'felhunter_spelllock' => array(
				'displayText' => 'Felhunter: Spell Lock',
				'displaySubtext' => '',
				'abilityType' => 'pet'
			),
			'healthfunnel' => array(
				'displayText' => 'Health Funnel',
				'displaySubtext' => '',
				'abilityType' => 'combat'
			),
			'healthstone' => array(
				'displayText' => 'Healthstone',
				'displaySubtext' => 'Item',
				'abilityType' => 'combat'
			),
			'imp_cauterizemaster' => array(
				'displayText' => 'Imp: Cauterize Master',
				'displaySubtext' => '',
				'abilityType' => 'pet'
			),
			'imp_flee' => array(
				'displayText' => 'Imp: Flee',
				'displaySubtext' => '',
				'abilityType' => 'pet'
			),
			'imp_singemagic' => array(
				'displayText' => 'Imp: Singe Magic',
				'displaySubtext' => '',
				'abilityType' => 'pet'
			),
			'lifedrain' => array(
				'displayText' => 'Life Drain',
				'displaySubtext' => '',
				'abilityType' => 'combat'
			),
			'ritualofsummoning' => array(
				'displayText' => 'Ritual of Summoning',
				'displaySubtext' => '',
				'abilityType' => 'utility'
			),
			'soulshatter' => array(
				'displayText' => 'Soulshatter',
				'displaySubtext' => '',
				'abilityType' => 'combat'
			),
			'soulstone' => array(
				'displayText' => 'Soulstone',
				'displaySubtext' => '',
				'abilityType' => 'combat'
			),
			'succubus_seduction' => array(
				'displayText' => 'Succubus: Seduction',
				'displaySubtext' => '',
				'abilityType' => 'pet'
			),
			'succubus_whiplash' => array(
				'displayText' => 'Succubus: Whiplash',
				'displaySubtext' => '',
				'abilityType' => 'pet'
			),
			'summondoomguard' => array(
				'displayText' => 'Summon Doomguard',
				'displaySubtext' => '',
				'abilityType' => 'combat'
			),
			'twilightward' => array(
				'displayText' => 'Twilight Ward',
				'displaySubtext' => '',
				'abilityType' => 'combat'
			),
			'underwaterbreathing' => array(
				'displayText' => 'Underwater Breathing',
				'displaySubtext' => '',
				'abilityType' => 'buff'
			),
			'unendingresolve' => array(
				'displayText' => 'Unending Resolve',
				'displaySubtext' => '',
				'abilityType' => 'combat'
			),
			'voidwalker_disarm' => array(
				'displayText' => 'Voidwalker: Disarm',
				'displaySubtext' => '',
				'abilityType' => 'pet'
			),
			'voidwalker_shadowbulwark' => array(
				'displayText' => 'Voidwalker: Shadow Bulwark',
				'displaySubtext' => '',
				'abilityType' => 'pet'
			),
			'voidwalker_shadowshield' => array(
				'displayText' => 'Voidwalker: Shadow Shield',
				'displaySubtext' => '',
				'abilityType' => 'pet'
			),
			'voidwalker_suffering' => array(
				'displayText' => 'Voidwalker: Suffering',
				'displaySubtext' => '',
				'abilityType' => 'pet'
			),
			'symbiosis' => array(
				'displayText' => 'Symbiosis',
				'displaySubtext' => '',
				'abilityType' => 'combat'
			)
		),
		// -----------
		// Affliction
		// -----------
		'affliction' => array(
			'agony' => array(
				'displayText' => 'Agony',
				'displaySubtext' => '',
				'abilityType' => 'combat'
			),
			'curseofexhaustion' => array(
				'displayText' => 'Curse of Exhaustion',
				'displaySubtext' => '',
				'abilityType' => 'combat'
			),
			'darksoulmisery' => array(
				'displayText' => 'Dark Soul: Misery',
				'displaySubtext' => '',
				'abilityType' => 'combat'
			),
			'drainsoul' => array(
				'displayText' => 'Drain Soul',
				'displaySubtext' => '',
				'abilityType' => 'combat'
			),
			'haunt' => array(
				'displayText' => 'Haunt',
				'displaySubtext' => '',
				'abilityType' => 'combat'
			),
			'lifetap' => array(
				'displayText' => 'Life Tap',
				'displaySubtext' => '',
				'abilityType' => 'combat'
			),
			'maleficgrasp' => array(
				'displayText' => 'Malefic Grasp',
				'displaySubtext' => '',
				'abilityType' => 'combat'
			),
			'rainoffire' => array(
				'displayText' => 'Rain of Fire',
				'displaySubtext' => '',
				'abilityType' => 'combat'
			),
			'seedofcorruption' => array(
				'displayText' => 'Seed of Corruption',
				'displaySubtext' => '',
				'abilityType' => 'combat'
			),
			'soulburn' => array(
				'displayText' => 'Soulburn',
				'displaySubtext' => '',
				'abilityType' => 'combat'
			),
			'soulswap' => array(
				'displayText' => 'Soul Swap',
				'displaySubtext' => '',
				'abilityType' => 'combat'
			),
			'unstableaffliction' => array(
				'displayText' => 'Unstable Affliction',
				'displaySubtext' => '',
				'abilityType' => 'combat'
			)
		),
		// -----------
		// Demonology
		// -----------
		'demonology' => array(
			'darksoulknowledge' => array(
				'displayText' => 'Dark Soul: Knowledge',
				'displaySubtext' => '',
				'abilityType' => 'combat'
			),
			'demon_carrionswarm' => array(
				'displayText' => 'Carrion Swarm',
				'displaySubtext' => 'Demon Form',
				'abilityType' => 'combat'
			),
			'demonicrebirth' => array(
				'displayText' => 'Demonic Rebirth',
				'displaySubtext' => '',
				'abilityType' => 'combat'
			),
			'felguard_axetoss' => array(
				'displayText' => 'Felguard: Axe Toss',
				'displaySubtext' => '',
				'abilityType' => 'pet'
			),
			'felguard_felstorm' => array(
				'displayText' => 'Felguard: Felstorm',
				'displaySubtext' => '',
				'abilityType' => 'pet'
			),
			'handofguldan' => array(
				'displayText' => 'Hand of Guldan',
				'displaySubtext' => '',
				'abilityType' => 'combat'
			),
			'hellfire' => array(
				'displayText' => 'Hellfire',
				'displaySubtext' => '',
				'abilityType' => 'combat'
			),
			'lifetap' => array(
				'displayText' => 'Life Tap',
				'displaySubtext' => '',
				'abilityType' => 'combat'
			),
			'metamorphosis' => array(
				'displayText' => 'Metamorphosis',
				'displaySubtext' => 'Stance',
				'abilityType' => 'stance'
			),
			'shadowbolt' => array(
				'displayText' => 'Shadow Bolt',
				'displaySubtext' => '',
				'abilityType' => 'combat'
			),
			'soulfire' => array(
				'displayText' => 'Soul Fire',
				'displaySubtext' => '',
				'abilityType' => 'combat'
			)
		),
		// ------------
		// Destruction
		// ------------
		'destruction' => array(
			'chaosbolt' => array(
				'displayText' => 'Chaos Bolt',
				'displaySubtext' => '',
				'abilityType' => 'combat'
			),
			'conflagrate' => array(
				'displayText' => 'Conflagrate',
				'displaySubtext' => '',
				'abilityType' => 'combat'
			),
			'darksoulinstability' => array(
				'displayText' => 'Dark Soul: Instability',
				'displaySubtext' => '',
				'abilityType' => 'combat'
			),
			'embertap' => array(
				'displayText' => 'Ember Tap',
				'displaySubtext' => '',
				'abilityType' => 'combat'
			),
			'fireandbrimstone' => array(
				'displayText' => 'Fire and Brimstone',
				'displaySubtext' => '',
				'abilityType' => 'combat'
			),
			'flamesofxoroth' => array(
				'displayText' => 'Flames of Xoroth',
				'displaySubtext' => '',
				'abilityType' => 'combat'
			),
			'havoc' => array(
				'displayText' => 'Havoc',
				'displaySubtext' => '',
				'abilityType' => 'combat'
			),
			'immolate' => array(
				'displayText' => 'Immolate',
				'displaySubtext' => '',
				'abilityType' => 'combat'
			),
			'incinerate' => array(
				'displayText' => 'Incinerate',
				'displaySubtext' => '',
				'abilityType' => 'combat'
			),
			'rainoffire' => array(
				'displayText' => 'Rain of Fire',
				'displaySubtext' => '',
				'abilityType' => 'combat'
			),
			'shadowburn' => array(
				'displayText' => 'Shadowburn',
				'displaySubtext' => '',
				'abilityType' => 'combat'
			)
		),
	),
	'talents' => array(
		// -----------------
		// Level 15 Talents
		// -----------------
		'lev15' => array(
			'darkregeneration' => array(
				'displayText' => 'Dark Regeneration',
				'displaySubtext' => 'Talent',
				'abilityType' => 'combat'
			),
			'harvestlife' => array(
				'displayText' => 'Harvest Life',
				'displaySubtext' => 'Talent',
				'abilityType' => 'combat'
			)
		),
		// -----------------
		// Level 30 Talents
		// -----------------
		'lev30' => array(
			'howlofterror' => array(
				'displayText' => 'Howl of Terror',
				'displaySubtext' => 'Talent',
				'abilityType' => 'combat'
			),
			'mortalcoil' => array(
				'displayText' => 'Mortal Coil',
				'displaySubtext' => 'Talent',
				'abilityType' => 'combat'
			),
			'shadowfury' => array(
				'displayText' => 'Shadowfury',
				'displaySubtext' => 'Talent',
				'abilityType' => 'combat'
			)
		),
		// -----------------
		// Level 45 Talents
		// -----------------
		'lev45' => array(
			'soullink' => array(
				'displayText' => 'Soul Link',
				'displaySubtext' => 'Talent',
				'abilityType' => 'combat'
			),
			'sacrificialpact' => array(
				'displayText' => 'Sacrificial Pact',
				'displaySubtext' => 'Talent',
				'abilityType' => 'combat'
			),
			'darkbargain' => array(
				'displayText' => 'Dark Bargain',
				'displaySubtext' => 'Talent',
				'abilityType' => 'combat'
			)
		),
		// -----------------
		// Level 60 Talents
		// -----------------
		'lev60' => array(
			'bloodfear' => array(
				'displayText' => 'Blood Fear',
				'displaySubtext' => 'Talent',
				'abilityType' => 'combat'
			),
			'burningrush' => array(
				'displayText' => 'Burning Rush',
				'displaySubtext' => 'Talent',
				'abilityType' => 'combat'
			),
			'unboundwill' => array(
				'displayText' => 'Unbound Will',
				'displaySubtext' => 'Talent',
				'abilityType' => 'combat'
			)
		),
		// -----------------
		// Level 75 Talents
		// -----------------
		'lev75' => array(
			'grimoireofsupremacy' => array(
				'felimp_searmagic' => array(
					'displayText' => 'Fel Imp: Sear Magic',
					'displaySubtext' => '',
					'abilityType' => 'pet'
				),
				'observer_clonemagic' => array(
					'displayText' => 'Observer: Clone Magic',
					'displaySubtext' => '',
					'abilityType' => 'pet'
				),
				'observer_opticalblast' => array(
					'displayText' => 'Observer: Optical Blast',
					'displaySubtext' => '',
					'abilityType' => 'pet'
				),
				'shivarra_fellash' => array(
					'displayText' => 'Shivarra: Fel Lash',
					'displaySubtext' => '',
					'abilityType' => 'pet'
				),
				'shivarra_mesmerize' => array(
					'displayText' => 'Shivarra: Mesmerize',
					'displaySubtext' => '',
					'abilityType' => 'pet'
				),
				'voidlord_voidshield' => array(
					'displayText' => 'Voidlord: Void Shield',
					'displaySubtext' => '',
					'abilityType' => 'pet'
				)
			),
			'grimoireofservice' => array(
				'displayText' => 'Grimoire of Service',
				'displaySubtext' => 'Talent',
				'abilityType' => 'combat'
			),
			'grimoireofsacrifice' => array(
				'displayText' => 'Grimoire of Sacrifice',
				'displaySubtext' => 'Talent',
				'abilityType' => 'combat'
			)
		),
		// -----------------
		// Level 90 Talents
		// -----------------
		'lev90' => array(
			'archimondesvengeance' => array(
				'displayText' => "Archimonde's Vengeance",
				'displaySubtext' => 'Talent',
				'abilityType' => 'combat'
			),
			'kiljaedenscunning' => array(
				'displayText' => "Kil'jaeden's Cunning",
				'displaySubtext' => 'Talent',
				'abilityType' => 'combat'
			)
		)
	),
	'glyphs' => array(
		'demonhunting' => array(
			'darkapotheosis' => array(
				'displayText' => 'Dark Apotheosis',
				'displaySubtext' => 'Stance (Glyph)',
				'abilityType' => 'stance'
			)
		),
		'impswarm' => array(
			'impswarm' => array(
				'displayText' => 'Imp Swarm',
				'displaySubtext' => 'Glyph',
				'abilityType' => 'combat'
			)
		)
	)
);
?>