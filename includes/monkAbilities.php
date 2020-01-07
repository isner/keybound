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

$monkAbilities = array(
	// ----------
	// All Specs
	// ----------
	'specs' => array(
		'all' => array(
			'jab' => array(
				'displayText' => 'Jab',
				'displaySubtext' => '',
				'abilityType' => 'combat'
			),
			'stanceofthefiercetiger' => array(
				'displayText' => 'Stance of the Fierce Tiger',
				'displaySubtext' => 'Stance',
				'abilityType' => 'stance'
			),
			'tigerpalm' => array(
				'displayText' => 'Tiger Palm',
				'displaySubtext' => '',
				'abilityType' => 'combat'
			),
			'roll' => array(
				'displayText' => 'Roll',
				'displaySubtext' => '',
				'abilityType' => 'combat'
			),
			'blackoutkick' => array(
				'displayText' => 'Blackout Kick',
				'displaySubtext' => '',
				'abilityType' => 'combat'
			),
			'provoke' => array(
				'displayText' => 'Provoke',
				'displaySubtext' => '',
				'abilityType' => 'combat'
			),
			'resuscitate' => array(
				'displayText' => 'Resuscitate',
				'displaySubtext' => '',
				'abilityType' => 'utility'
			),
			'zenpilgrimage' => array(
				'displayText' => 'Zen Pilgrimage',
				'displaySubtext' => '',
				'abilityType' => 'utility'
			),
			'detox' => array(
				'displayText' => 'Detox',
				'displaySubtext' => '',
				'abilityType' => 'combat'
			),
			'touchofdeath' => array(
				'displayText' => 'Touch of Death',
				'displaySubtext' => '',
				'abilityType' => 'combat'
			),
			'legacyoftheemperor' => array(
				'displayText' => 'Legacy of the Emperor',
				'displaySubtext' => '',
				'abilityType' => 'combat'
			),
			'fortifyingbrew' => array(
				'displayText' => 'Fortifying Brew',
				'displaySubtext' => '',
				'abilityType' => 'combat'
			),
			'expelharm' => array(
				'displayText' => 'Expel Harm',
				'displaySubtext' => '',
				'abilityType' => 'combat'
			),
			'disable' => array(
				'displayText' => 'Disable',
				'displaySubtext' => '',
				'abilityType' => 'combat'
			),
			'spearhandstrike' => array(
				'displayText' => 'Spear Hand Strike',
				'displaySubtext' => '',
				'abilityType' => 'combat'
			),
			'paralysis' => array(
				'displayText' => 'Paralysis',
				'displaySubtext' => '',
				'abilityType' => 'combat'
			),
			'spinningcranekick' => array(
				'displayText' => 'Spinning Crane Kick',
				'displaySubtext' => '',
				'abilityType' => 'combat'
			),
			'cracklingjadelightning' => array(
				'displayText' => 'Crackling Jade Lightning',
				'displaySubtext' => '',
				'abilityType' => 'combat'
			),
			'healingsphere' => array(
				'displayText' => 'Healing Sphere',
				'displaySubtext' => '',
				'abilityType' => 'combat'
			),
			'pathofblossoms' => array(
				'displayText' => 'Path of Blossoms',
				'displaySubtext' => '',
				'abilityType' => 'combat'
			),
			'grappleweapon' => array(
				'displayText' => 'Grapple Weapon',
				'displaySubtext' => '',
				'abilityType' => 'combat'
			),
			'zenmeditation' => array(
				'displayText' => 'Zen Meditation',
				'displaySubtext' => '',
				'abilityType' => 'combat'
			),
			'transcendencetransfer' => array(
				'displayText' => 'Transcendence: Transfer',
				'displaySubtext' => '',
				'abilityType' => 'combat'
			),
			'transcendence' => array(
				'displayText' => 'Transcendence',
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
		// Brewmaster
		// -----------
		'brewmaster' => array(
			'dizzyinghaze' => array(
				'displayText' => 'Dizzying Haze',
				'displaySubtext' => '',
				'abilityType' => 'combat'
			),
			'stanceofthesturdyox' => array(
				'displayText' => 'Stance of the Sturdy Ox',
				'displaySubtext' => 'Stance',
				'abilityType' => 'stance'
			),
			'kegsmash' => array(
				'displayText' => 'Keg Smash',
				'displaySubtext' => '',
				'abilityType' => 'combat'
			),
			'breathoffire' => array(
				'displayText' => 'Breath of Fire',
				'displaySubtext' => '',
				'abilityType' => 'combat'
			),
			'clash' => array(
				'displayText' => 'Clash',
				'displaySubtext' => '',
				'abilityType' => 'combat'
			),
			'guard' => array(
				'displayText' => 'Guard',
				'displaySubtext' => '',
				'abilityType' => 'combat'
			),
			'elusivebrew' => array(
				'displayText' => 'Elusive Brew',
				'displaySubtext' => '',
				'abilityType' => 'combat'
			),
			'avertharm' => array(
				'displayText' => 'Avert Harm',
				'displaySubtext' => '',
				'abilityType' => 'combat'
			),
			'summonblackoxstatue' => array(
				'displayText' => 'Summon Black Ox Statue',
				'displaySubtext' => '',
				'abilityType' => 'combat'
			),
			'purifyingbrew' => array(
				'displayText' => 'Purifying Brew',
				'displaySubtext' => '',
				'abilityType' => 'combat'
			)
		),
		// -----------
		// Mistweaver
		// -----------
		'mistweaver' => array(
			'stanceofthewiseserpent' => array(
				'displayText' => 'Stance of the Wise Serpent',
				'displaySubtext' => 'Stance',
				'abilityType' => 'stance'
			),
			'soothingmist' => array(
				'displayText' => 'Soothing Mist',
				'displaySubtext' => '',
				'abilityType' => 'combat'
			),
			'envelopingmist' => array(
				'displayText' => 'Eveloping Mist',
				'displaySubtext' => '',
				'abilityType' => 'combat'
			),
			'surgingmist' => array(
				'displayText' => 'Surging Mist',
				'displaySubtext' => '',
				'abilityType' => 'combat'
			),
			'renewingmist' => array(
				'displayText' => 'Renewing Mist',
				'displaySubtext' => '',
				'abilityType' => 'combat'
			),
			'lifecocoon' => array(
				'displayText' => 'Life Cocoon',
				'displaySubtext' => '',
				'abilityType' => 'combat'
			),
			'manatea' => array(
				'displayText' => 'Mana Tea',
				'displaySubtext' => '',
				'abilityType' => 'combat'
			),
			'uplift' => array(
				'displayText' => 'Uplift',
				'displaySubtext' => '',
				'abilityType' => 'combat'
			),
			'thunderfocustea' => array(
				'displayText' => 'Thunder Focus Tea',
				'displaySubtext' => '',
				'abilityType' => 'combat'
			),
			'summonjadeserpentstatue' => array(
				'displayText' => 'Summon Jade Serpent Statue',
				'displaySubtext' => '',
				'abilityType' => 'combat'
			),
			'revival' => array(
				'displayText' => 'Revival',
				'displaySubtext' => '',
				'abilityType' => 'combat'
			)
		),
		// ------------
		// Windwalker
		// ------------
		'windwalker' => array(
			'fistsoffury' => array(
				'displayText' => 'Fists of Fury',
				'displaySubtext' => '',
				'abilityType' => 'combat'
			),
			'flyingserpentkick' => array(
				'displayText' => 'Flying Serpent Kick',
				'displaySubtext' => '',
				'abilityType' => 'combat'
			),
			'touchofkarma' => array(
				'displayText' => 'Touch of Karma',
				'displaySubtext' => '',
				'abilityType' => 'combat'
			),
			'energizingbrew' => array(
				'displayText' => 'Energizing Brew',
				'displaySubtext' => '',
				'abilityType' => 'combat'
			),
			'spinningfireblossom' => array(
				'displayText' => 'Spinning Fire Blossom',
				'displaySubtext' => '',
				'abilityType' => 'combat'
			),
			'risingsunkick' => array(
				'displayText' => 'Rising Sun Kick',
				'displaySubtext' => '',
				'abilityType' => 'combat'
			),
			'tigereyebrew' => array(
				'displayText' => 'Tigereye Brew',
				'displaySubtext' => '',
				'abilityType' => 'combat'
			),
			'legacyofthewhitetiger' => array(
				'displayText' => 'Legacy of the White Tiger',
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
			'tigerslust' => array(
				'displayText' => "Tiger's Lust",
				'displaySubtext' => 'Talent',
				'abilityType' => 'combat'
			)
		),
		// -----------------
		// Level 30 Talents
		// -----------------
		'lev30' => array(
			'chiwave' => array(
				'displayText' => 'Chi Wave',
				'displaySubtext' => 'Talent',
				'abilityType' => 'combat'
			),
			'zensphere' => array(
				'displayText' => 'Zen Sphere',
				'displaySubtext' => 'Talent',
				'abilityType' => 'combat'
			),
			'chiburst' => array(
				'displayText' => 'Chi Burst',
				'displaySubtext' => 'Talent',
				'abilityType' => 'combat'
			)
		),
		// -----------------
		// Level 45 Talents
		// -----------------
		'lev45' => array(
			'chibrew' => array(
				'displayText' => 'Chi Brew',
				'displaySubtext' => 'Talent',
				'abilityType' => 'combat'
			)
		),
		// -----------------
		// Level 60 Talents
		// -----------------
		'lev60' => array(
			'chargingoxwave' => array(
				'displayText' => 'Charging Ox Wave',
				'displaySubtext' => 'Talent',
				'abilityType' => 'combat'
			),
			'legsweep' => array(
				'displayText' => 'Leg Sweep',
				'displaySubtext' => 'Talent',
				'abilityType' => 'combat'
			)
		),
		// -----------------
		// Level 75 Talents
		// -----------------
		'lev75' => array(
			'dampenharm' => array(
				'displayText' => 'Dampen Harm',
				'displaySubtext' => 'Talent',
				'abilityType' => 'combat'
			),
			'diffusemagic' => array(
				'displayText' => 'Diffuse Magic',
				'displaySubtext' => 'Talent',
				'abilityType' => 'combat'
			)
		),
		// -----------------
		// Level 90 Talents
		// -----------------
		'lev90' => array(
			'rushingjadewind' => array(
				'displayText' => 'Rushing Jade Wind',
				'displaySubtext' => 'Talent',
				'abilityType' => 'combat'
			),
			'invokexuenthewhitetiger' => array(
				'displayText' => 'Invoke Xuen, the White Tiger',
				'displaySubtext' => 'Talent',
				'abilityType' => 'combat'
			),
			'chitorpedo' => array(
				'displayText' => 'Chi Torpedo',
				'displaySubtext' => 'Talent',
				'abilityType' => 'combat'
			)
		)
	),
	'glyphs' => array(
		'leeroftheox' => array(
			'leeroftheox' => array(
				'displayText' => 'Leer of the Ox',
				'displaySubtext' => 'Glyph',
				'abilityType' => 'combat'
			)
		),
		'zenflight' => array(
			'zenflight' => array(
				'displayText' => 'Zen Flight',
				'displaySubtext' => 'Glyph',
				'abilityType' => 'utility'
			)
		)
	)
);
?>