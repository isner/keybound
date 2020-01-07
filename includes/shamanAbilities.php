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

$shamanAbilities = array(
	// ----------
	// All Specs
	// ----------
	'specs' => array(
		'all' => array(
			'lightningbolt' => array(
				'displayText' => 'Lightning Bolt',
				'displaySubtext' => '',
				'abilityType' => 'combat'
			),
			'primalstrike' => array(
				'displayText' => 'Primal Strike',
				'displaySubtext' => '',
				'abilityType' => 'combat'
			),
			'earthshock' => array(
				'displayText' => 'Earth Shock',
				'displaySubtext' => '',
				'abilityType' => 'combat'
			),
			'healingsurge' => array(
				'displayText' => 'Healing Surge',
				'displaySubtext' => '',
				'abilityType' => 'combat'
			),
			'lightningshield' => array(
				'displayText' => 'Lightning Shield',
				'displaySubtext' => '',
				'abilityType' => 'combat'
			),
			'flametongueweapon' => array(
				'displayText' => 'Flametongue Weapon',
				'displaySubtext' => '',
				'abilityType' => 'buff'
			),
			'purge' => array(
				'displayText' => 'Purge',
				'displaySubtext' => '',
				'abilityType' => 'combat'
			),
			'flameshock' => array(
				'displayText' => 'Flame Shock',
				'displaySubtext' => '',
				'abilityType' => 'combat'
			),
			'ancestralspirit' => array(
				'displayText' => 'Ancestral Spirit',
				'displaySubtext' => '',
				'abilityType' => 'utility'
			),
			'ghostwolf' => array(
				'displayText' => 'Ghost Wolf',
				'displaySubtext' => '',
				'abilityType' => 'combat'
			),
			'windshear' => array(
				'displayText' => 'Wind Shear',
				'displaySubtext' => '',
				'abilityType' => 'combat'
			),
			'searingtotem' => array(
				'displayText' => 'Searing Totem',
				'displaySubtext' => '',
				'abilityType' => 'combat'
			),
			'cleansespirit' => array(
				'displayText' => 'Cleanse Spirit',
				'displaySubtext' => '',
				'abilityType' => 'combat'
			),
			'watershield' => array(
				'displayText' => 'Water Shield',
				'displaySubtext' => '',
				'abilityType' => 'combat'
			),
			'frostshock' => array(
				'displayText' => 'Frost Shock',
				'displaySubtext' => '',
				'abilityType' => 'combat'
			),
			'waterwalking' => array(
				'displayText' => 'Water Walking',
				'displaySubtext' => '',
				'abilityType' => 'combat'
			),
			'earthbindtotem' => array(
				'displayText' => 'Earthbind Totem',
				'displaySubtext' => '',
				'abilityType' => 'combat'
			),
			'chainlightning' => array(
				'displayText' => 'Chain Lightning',
				'displaySubtext' => '',
				'abilityType' => 'combat'
			),
			'totemicrecall' => array(
				'displayText' => 'Totemic Recall',
				'displaySubtext' => '',
				'abilityType' => 'combat'
			),
			'healingstreamtotem' => array(
				'displayText' => 'Healing Stream Totem',
				'displaySubtext' => '',
				'abilityType' => 'combat'
			),
			'astralrecall' => array(
				'displayText' => 'Astral Recall',
				'displaySubtext' => '',
				'abilityType' => 'combat'
			),
			'magmatotem' => array(
				'displayText' => 'Magma Totem',
				'displaySubtext' => '',
				'abilityType' => 'combat'
			),
			'farsight' => array(
				'displayText' => 'Far Sight',
				'displaySubtext' => '',
				'abilityType' => 'utility'
			),
			'groundingtotem' => array(
				'displayText' => 'Grounding Totem',
				'displaySubtext' => '',
				'abilityType' => 'combat'
			),
			'chainheal' => array(
				'displayText' => 'Chain Heal',
				'displaySubtext' => '',
				'abilityType' => 'combat'
			),
			'frostbrandweapon' => array(
				'displayText' => 'Frostbrand Weapon',
				'displaySubtext' => '',
				'abilityType' => 'combat'
			),
			'tremortotem' => array(
				'displayText' => 'Tremor Totem',
				'displaySubtext' => '',
				'abilityType' => 'combat'
			),
			'earthelementaltotem' => array(
				'displayText' => 'Earth Elemental Totem',
				'displaySubtext' => '',
				'abilityType' => 'combat'
			),
			'healingrain' => array(
				'displayText' => 'Healing Rain',
				'displaySubtext' => '',
				'abilityType' => 'combat'
			),
			'capacitortotem' => array(
				'displayText' => 'Capacitor Totem',
				'displaySubtext' => '',
				'abilityType' => 'combat'
			),
			'fireelementaltotem' => array(
				'displayText' => 'Fire Elemental Totem',
				'displaySubtext' => '',
				'abilityType' => 'combat'
			),
			'heroism' => array(
				'displayText' => 'Heroism',
				'displaySubtext' => 'or Bloodlust',
				'abilityType' => 'combat'
			),
			'bindelemental' => array(
				'displayText' => 'Bind Elemental',
				'displaySubtext' => '',
				'abilityType' => 'combat'
			),
			'rockbiterweapon' => array(
				'displayText' => 'Rockbiter Weapon',
				'displaySubtext' => '',
				'abilityType' => 'buff'
			),
			'hex' => array(
				'displayText' => 'Hex',
				'displaySubtext' => '',
				'abilityType' => 'combat'
			),
			'stormlashtotem' => array(
				'displayText' => 'Stormlash Totem',
				'displaySubtext' => '',
				'abilityType' => 'combat'
			),
			'unleashelements' => array(
				'displayText' => 'Unleash Elements',
				'displaySubtext' => '',
				'abilityType' => 'combat'
			),
			'spiritwalkersgrace' => array(
				'displayText' => "Spiritwalker's Grace",
				'displaySubtext' => '',
				'abilityType' => 'combat'
			),
			'ascendance' => array(
				'displayText' => 'Ascendance',
				'displaySubtext' => '',
				'abilityType' => 'combat'
			),
			'symbiosis' => array(
				'displayText' => 'Symbiosis',
				'displaySubtext' => '',
				'abilityType' => 'combat'
			)
		),
		// -----------
		// Elemental
		// -----------
		'elemental' => array(
			'thunderstorm' => array(
				'displayText' => 'Thunderstorm',
				'displaySubtext' => '',
				'abilityType' => 'combat'
			),
			'lavaburst' => array(
				'displayText' => 'Lava Burst',
				'displaySubtext' => '',
				'abilityType' => 'combat'
			),
			'earthquake' => array(
				'displayText' => 'Earthquake',
				'displaySubtext' => '',
				'abilityType' => 'combat'
			)
		),
		// -----------
		// Enhancement
		// -----------
		'enhancement' => array(
			'lavalash' => array(
				'displayText' => 'Lava Lash',
				'displaySubtext' => '',
				'abilityType' => 'combat'
			),
			'stormstrike' => array(
				'displayText' => 'Storm Strike',
				'displaySubtext' => '',
				'abilityType' => 'combat'
			),
			'windfuryweapon' => array(
				'displayText' => 'Windfury Weapon',
				'displaySubtext' => '',
				'abilityType' => 'buff'
			),
			'firenova' => array(
				'displayText' => 'Fire Nova',
				'displaySubtext' => '',
				'abilityType' => 'combat'
			),
			'feralspirit' => array(
				'displayText' => 'Feral Spirit',
				'displaySubtext' => '',
				'abilityType' => 'combat'
			),
			'spiritwalk' => array(
				'displayText' => 'Spirit Walk',
				'displaySubtext' => '',
				'abilityType' => 'combat'
			),
			'shamanisticrage' => array(
				'displayText' => 'Shamanistic Rage',
				'displaySubtext' => '',
				'abilityType' => 'combat'
			)
		),
		// ------------
		// Restoration
		// ------------
		'restoration' => array(
			'riptide' => array(
				'displayText' => 'Riptide',
				'displaySubtext' => '',
				'abilityType' => 'combat'
			),
			'purifyspirit' => array(
				'displayText' => 'Purify Spirit',
				'displaySubtext' => '',
				'abilityType' => 'combat'
			),
			'healingwave' => array(
				'displayText' => 'Healing Wave',
				'displaySubtext' => '',
				'abilityType' => 'combat'
			),
			'earthshield' => array(
				'displayText' => 'Earth Shield',
				'displaySubtext' => '',
				'abilityType' => 'combat'
			),
			'earthlivingweapon' => array(
				'displayText' => 'Earthliving Weapon',
				'displaySubtext' => '',
				'abilityType' => 'combat'
			),
			'lavaburst' => array(
				'displayText' => 'Lava Burst',
				'displaySubtext' => '',
				'abilityType' => 'combat'
			),
			'manatidetotem' => array(
				'displayText' => 'Mana Tide Totem',
				'displaySubtext' => '',
				'abilityType' => 'combat'
			),
			'greaterhealingwave' => array(
				'displayText' => 'Greater Healing Wave',
				'displaySubtext' => '',
				'abilityType' => 'combat'
			),
			'spiritlinktotem' => array(
				'displayText' => 'Spirit Link Totem',
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
			'stonebulwarktotem' => array(
				'displayText' => 'Stone Bulwark Totem',
				'displaySubtext' => 'Talent',
				'abilityType' => 'combat'
			),
			'astralshift' => array(
				'displayText' => 'Astral Shift',
				'displaySubtext' => 'Talent',
				'abilityType' => 'combat'
			)
		),
		// -----------------
		// Level 30 Talents
		// -----------------
		'lev30' => array(
			'earthgrabtotem' => array(
				'displayText' => 'Earthgrab Totem',
				'displaySubtext' => 'Talent',
				'abilityType' => 'combat'
			),
			'windwalktotem' => array(
				'displayText' => 'Windwalk Totem',
				'displaySubtext' => 'Talent',
				'abilityType' => 'combat'
			)
		),
		// -----------------
		// Level 45 Talents
		// -----------------
		'lev45' => array(
			'calloftheelements' => array(
				'displayText' => 'Call of the Elements',
				'displaySubtext' => 'Talent',
				'abilityType' => 'combat'
			),
			'totemicprojection' => array(
				'displayText' => 'Totemic Projection',
				'displaySubtext' => 'Talent',
				'abilityType' => 'combat'
			)
		),
		// -----------------
		// Level 60 Talents
		// -----------------
		'lev60' => array(
			'elementalmastery' => array(
				'displayText' => 'Elemetal Mastery',
				'displaySubtext' => 'Talent',
				'abilityType' => 'combat'
			),
			'ancestralswiftness' => array(
				'displayText' => 'Ancestral Swiftness',
				'displaySubtext' => 'Talent',
				'abilityType' => 'combat'
			)
		),
		// -----------------
		// Level 75 Talents
		// -----------------
		'lev75' => array(
			'healingtidetotem' => array(
				'displayText' => 'Healing Tide Totem',
				'displaySubtext' => 'Talent',
				'abilityType' => 'combat'
			),
			'ancestralguidance' => array(
				'displayText' => 'Ancestral Guidance',
				'displaySubtext' => 'Talent',
				'abilityType' => 'combat'
			)
		),
		// -----------------
		// Level 90 Talents
		// -----------------
		'lev90' => array(
			'elementalblast' => array(
				'displayText' => 'Elemental Blast',
				'displaySubtext' => 'Talent',
				'abilityType' => 'combat'
			)
		)
	),
	'glyphs' => array(
	
	)
);
?>