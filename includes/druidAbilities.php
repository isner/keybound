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

$druidAbilities = array(
	// ----------
	// All Specs
	// ----------
	'specs' => array(
		'all' => array(
			'wrath' => array(
				'displayText' => 'Wrath',
				'displaySubtext' => '',
				'abilityType' => 'combat',
				'wowhead_type' => 'spell',
				'wowhead_id' => '5176',
				'keybound_id' => '0201'
			),
			'moonfire' => array(
				'displayText' => 'Moonfire',
				'displaySubtext' => '',
				'abilityType' => 'combat',
				'wowhead_type' => 'spell',
				'wowhead_id' => '8921',
				'keybound_id' => '0202'
			),
			'rejuvenation' => array(
				'displayText' => 'Rejuvenation',
				'displaySubtext' => '',
				'abilityType' => 'combat',
				'wowhead_type' => 'spell',
				'wowhead_id' => '774',
				'keybound_id' => '0203'
			),
			'prowl' => array(
				'displayText' => 'Prowl',
				'displaySubtext' => 'Stance',
				'abilityType' => 'stance',
				'wowhead_type' => 'spell',
				'wowhead_id' => '5215',
				'keybound_id' => '0204'
			),
			'rake' => array(
				'displayText' => 'Rake',
				'displaySubtext' => '',
				'abilityType' => 'combat',
				'wowhead_type' => 'spell',
				'wowhead_id' => '1822',
				'keybound_id' => '0205'
			),
			'ferociousbite' => array(
				'displayText' => 'Ferocious Bite',
				'displaySubtext' => '',
				'abilityType' => 'combat',
				'wowhead_type' => 'spell',
				'wowhead_id' => '22568',
				'keybound_id' => '0206'
			),
			'mangle' => array(
				'displayText' => 'Mangle',
				'displaySubtext' => '',
				'abilityType' => 'combat',
				'wowhead_type' => 'spell',
				'wowhead_id' => '33876',
				'keybound_id' => '0207'
			),
			'catform' => array(
				'displayText' => 'Cat Form',
				'displaySubtext' => 'Stance',
				'abilityType' => 'stance',
				'wowhead_type' => 'spell',
				'wowhead_id' => '768',
				'keybound_id' => '0208'
			),
			'growl' => array(
				'displayText' => 'Growl',
				'displaySubtext' => '',
				'abilityType' => 'combat',
				'wowhead_type' => 'spell',
				'wowhead_id' => '6795',
				'keybound_id' => '0209'
			),
			'maul' => array(
				'displayText' => 'Maul',
				'displaySubtext' => '',
				'abilityType' => 'combat',
				'wowhead_type' => 'spell',
				'wowhead_id' => '6807',
				'keybound_id' => '0210'
			),
			'bearform' => array(
				'displayText' => 'Bear Form',
				'displaySubtext' => 'Stance',
				'abilityType' => 'stance',
				'wowhead_type' => 'spell',
				'wowhead_id' => '5487',
				'keybound_id' => '0211'
			),
			'entanglingroots' => array(
				'displayText' => 'Entangling Roots',
				'displaySubtext' => '',
				'abilityType' => 'combat',
				'wowhead_type' => 'spell',
				'wowhead_id' => '339',
				'keybound_id' => '0212'
			),
			'revive' => array(
				'displayText' => 'Revive',
				'displaySubtext' => '',
				'abilityType' => 'utility',
				'wowhead_type' => 'spell',
				'wowhead_id' => '50769',
				'keybound_id' => '0213'
			),
			'teleportmoonglade' => array(
				'displayText' => 'Teleport: Moonglade',
				'displaySubtext' => '',
				'abilityType' => 'utility',
				'wowhead_type' => 'spell',
				'wowhead_id' => '18960',
				'keybound_id' => '0214'
			),
			'travelform' => array(
				'displayText' => 'Travel Form',
				'displaySubtext' => 'Stance',
				'abilityType' => 'stance',
				'wowhead_type' => 'spell',
				'wowhead_id' => '783',
				'keybound_id' => '0215'
			),
			'swipe' => array(
				'displayText' => 'Swipe',
				'displaySubtext' => '',
				'abilityType' => 'combat',
				'wowhead_type' => 'spell',
				'wowhead_id' => '106785',
				'keybound_id' => '0216'
			),
			'aquaticform' => array(
				'displayText' => 'Aquatic Form',
				'displaySubtext' => 'Stance',
				'abilityType' => 'stance',
				'wowhead_type' => 'spell',
				'wowhead_id' => '1066',
				'keybound_id' => '0217'
			),
			'dash' => array(
				'displayText' => 'Dash',
				'displaySubtext' => '',
				'abilityType' => 'combat',
				'wowhead_type' => 'spell',
				'wowhead_id' => '1850',
				'keybound_id' => '0218'
			),
			'healingtouch' => array(
				'displayText' => 'Healing Touch',
				'displaySubtext' => '',
				'abilityType' => 'combat',
				'wowhead_type' => 'spell',
				'wowhead_id' => '5185',
				'keybound_id' => '0219'
			),
			'faeriefire' => array(
				'displayText' => 'Faerie Fire',
				'displaySubtext' => '',
				'abilityType' => 'combat',
				'wowhead_type' => 'spell',
				'wowhead_id' => '770',
				'keybound_id' => '0220'
			),
			'pounce' => array(
				'displayText' => 'Pounce',
				'displaySubtext' => '',
				'abilityType' => 'combat',
				'wowhead_type' => 'spell',
				'wowhead_id' => '9005',
				'keybound_id' => '0221'
			),
			'lacerate' => array(
				'displayText' => 'Lacerate',
				'displaySubtext' => '',
				'abilityType' => 'combat',
				'wowhead_type' => 'spell',
				'wowhead_id' => '33745',
				'keybound_id' => '0222'
			),
			'hurricane' => array(
				'displayText' => 'Hurricane',
				'displaySubtext' => '',
				'abilityType' => 'combat',
				'wowhead_type' => 'spell',
				'wowhead_id' => '16914',
				'keybound_id' => '0223'
			),
			'barkskin' => array(
				'displayText' => 'Barkskin',
				'displaySubtext' => '',
				'abilityType' => 'combat',
				'wowhead_type' => 'spell',
				'wowhead_id' => '22812',
				'keybound_id' => '0224'
			),
			'naturesgrasp' => array(
				'displayText' => "Nature's Grasp",
				'displaySubtext' => '',
				'abilityType' => 'combat',
				'wowhead_type' => 'spell',
				'wowhead_id' => '16689',
				'keybound_id' => '0225'
			),
			'innervate' => array(
				'displayText' => 'Innervate',
				'displaySubtext' => '',
				'abilityType' => 'combat',
				'wowhead_type' => 'spell',
				'wowhead_id' => '29166',
				'keybound_id' => '0226'
			),
			'rebirth' => array(
				'displayText' => 'Rebirth',
				'displaySubtext' => '',
				'abilityType' => 'combat',
				'wowhead_type' => 'spell',
				'wowhead_id' => '20484',
				'keybound_id' => '0227'
			),
			'swiftflightform' => array(
				'displayText' => 'Swift Flight Form',
				'displaySubtext' => 'Stance',
				'abilityType' => 'stance',
				'wowhead_type' => 'spell',
				'wowhead_id' => '40120',
				'keybound_id' => '0228'
			),
			'soothe' => array(
				'displayText' => 'Soothe',
				'displaySubtext' => '',
				'abilityType' => 'combat',
				'wowhead_type' => 'spell',
				'wowhead_id' => '2908',
				'keybound_id' => '0229'
			),
			'markofthewild' => array(
				'displayText' => 'Mark of the Wild',
				'displaySubtext' => '',
				'abilityType' => 'buff',
				'wowhead_type' => 'spell',
				'wowhead_id' => '1126',
				'keybound_id' => '0230'
			),
			'hibernate' => array(
				'displayText' => 'Hibernate',
				'displaySubtext' => '',
				'abilityType' => 'combat',
				'wowhead_type' => 'spell',
				'wowhead_id' => '2637',
				'keybound_id' => '0231'
			),
			'frenziedregeneration' => array(
				'displayText' => 'Frenzied Regeneration',
				'displaySubtext' => '',
				'abilityType' => 'combat',
				'wowhead_type' => 'spell',
				'wowhead_id' => '22842',
				'keybound_id' => '0232'
			),
			'mightofursoc' => array(
				'displayText' => 'Might of Ursoc',
				'displaySubtext' => '',
				'abilityType' => 'combat',
				'wowhead_type' => 'spell',
				'wowhead_id' => '106922',
				'keybound_id' => '0233'
			),
			'tranquility' => array(
				'displayText' => 'Tranquility',
				'displaySubtext' => '',
				'abilityType' => 'combat',
				'wowhead_type' => 'spell',
				'wowhead_id' => '740',
				'keybound_id' => '0234'
			),
			'cyclone' => array(
				'displayText' => 'Cyclone',
				'displaySubtext' => '',
				'abilityType' => 'combat',
				'wowhead_type' => 'spell',
				'wowhead_id' => '33786',
				'keybound_id' => '0235'
			),
			'maim' => array(
				'displayText' => 'Maim',
				'displaySubtext' => '',
				'abilityType' => 'combat',
				'wowhead_type' => 'spell',
				'wowhead_id' => '22570',
				'keybound_id' => '0236'
			),
			'stampedingroar' => array(
				'displayText' => 'Stampeding Roar',
				'displaySubtext' => '',
				'abilityType' => 'combat',
				'wowhead_type' => 'spell',
				'wowhead_id' => '106898',
				'keybound_id' => '0237'
			),
			'symbiosis' => array(
				'displayText' => 'Symbiosis',
				'displaySubtext' => '',
				'abilityType' => 'combat',
				'wowhead_type' => 'spell',
				'wowhead_id' => '110309',
				'keybound_id' => '0238'
			)
		),
		// -----------
		// Balance
		// -----------
		'balance' => array(
			'starfire' => array(
				'displayText' => 'Starfire',
				'displaySubtext' => '',
				'abilityType' => 'combat',
				'wowhead_type' => 'spell',
				'wowhead_id' => '2912',
				'keybound_id' => '0239'
			),
			'starsurge' => array(
				'displayText' => 'Starsurge',
				'displaySubtext' => '',
				'abilityType' => 'combat',
				'wowhead_type' => 'spell',
				'wowhead_id' => '78674',
				'keybound_id' => '0240'
			),
			'moonkinform' => array(
				'displayText' => 'Moonkin Form',
				'displaySubtext' => 'Stance',
				'abilityType' => 'stance',
				'wowhead_type' => 'spell',
				'wowhead_id' => '24858',
				'keybound_id' => '0241'
			),
			'sunfire' => array(
				'displayText' => 'Sunfire',
				'displaySubtext' => '',
				'abilityType' => 'combat',
				'wowhead_type' => 'spell',
				'wowhead_id' => '93402',
				'keybound_id' => '0242'
			),
			'astralcommunion' => array(
				'displayText' => 'Astral Communion',
				'displaySubtext' => '',
				'abilityType' => 'combat',
				'wowhead_type' => 'spell',
				'wowhead_id' => '127663',
				'keybound_id' => '0243'
			),
			'removecorruption' => array(
				'displayText' => 'Remove Corruption',
				'displaySubtext' => '',
				'abilityType' => 'combat',
				'wowhead_type' => 'spell',
				'wowhead_id' => '2782',
				'keybound_id' => '0244'
			),
			'solarbeam' => array(
				'displayText' => 'Solar Beam',
				'displaySubtext' => '',
				'abilityType' => 'combat',
				'wowhead_type' => 'spell',
				'wowhead_id' => '78675',
				'keybound_id' => '0245'
			),
			'celestialalignment' => array(
				'displayText' => 'Celestial Alignment',
				'displaySubtext' => '',
				'abilityType' => 'combat',
				'wowhead_type' => 'spell',
				'wowhead_id' => '112071',
				'keybound_id' => '0246'
			),
			'starfall' => array(
				'displayText' => 'Starfall',
				'displaySubtext' => '',
				'abilityType' => 'combat',
				'wowhead_type' => 'spell',
				'wowhead_id' => '48505',
				'keybound_id' => '0247'
			),
			'wildmushroom' => array(
				'displayText' => 'Wild Mushroom',
				'displaySubtext' => '',
				'abilityType' => 'combat',
				'wowhead_type' => 'spell',
				'wowhead_id' => '88747',
				'keybound_id' => '0248'
			),
			'wildmushroomdetonate' => array(
				'displayText' => 'Wild Mushroom: Detonate',
				'displaySubtext' => '',
				'abilityType' => 'combat',
				'wowhead_type' => 'spell',
				'wowhead_id' => '88751',
				'keybound_id' => '0249'
			)
		),
		// -----------
		// Feral
		// -----------
		'feral' => array(
			'tigersfury' => array(
				'displayText' => "Tiger's Fury",
				'displaySubtext' => '',
				'abilityType' => 'combat',
				'wowhead_type' => 'spell',
				'wowhead_id' => '5217',
				'keybound_id' => '0250'
			),
			'shred' => array(
				'displayText' => 'Shred',
				'displaySubtext' => '',
				'abilityType' => 'combat',
				'wowhead_type' => 'spell',
				'wowhead_id' => '5221',
				'keybound_id' => '0251'
			),
			'savageroar' => array(
				'displayText' => 'Savage Roar',
				'displaySubtext' => '',
				'abilityType' => 'combat',
				'wowhead_type' => 'spell',
				'wowhead_id' => '52610',
				'keybound_id' => '0252'
			),
			'rip' => array(
				'displayText' => 'Rip',
				'displaySubtext' => '',
				'abilityType' => 'combat',
				'wowhead_type' => 'spell',
				'wowhead_id' => '1079',
				'keybound_id' => '0253'
			),
			'removecorruption' => array(
				'displayText' => 'Remove Corruption',
				'displaySubtext' => '',
				'abilityType' => 'combat',
				'wowhead_type' => 'spell',
				'wowhead_id' => '2782',
				'keybound_id' => '0254'
			),
			'thrash' => array(
				'displayText' => 'Thrash',
				'displaySubtext' => '',
				'abilityType' => 'combat',
				'wowhead_type' => 'spell',
				'wowhead_id' => '77758',
				'keybound_id' => '0255'
			),
			'berserk' => array(
				'displayText' => 'Berserk',
				'displaySubtext' => '',
				'abilityType' => 'combat',
				'wowhead_type' => 'spell',
				'wowhead_id' => '106952',
				'keybound_id' => '0256'
			),
			'ravage' => array(
				'displayText' => 'Ravage',
				'displaySubtext' => '',
				'abilityType' => 'combat',
				'wowhead_type' => 'spell',
				'wowhead_id' => '102545',
				'keybound_id' => '0257'
			),
			'survivalinstincts' => array(
				'displayText' => 'Survival Instincts',
				'displaySubtext' => '',
				'abilityType' => 'combat',
				'wowhead_type' => 'spell',
				'wowhead_id' => '61336',
				'keybound_id' => '0258'
			),
			'skullbash' => array(
				'displayText' => 'Skull Bash',
				'displaySubtext' => '',
				'abilityType' => 'combat',
				'wowhead_type' => 'spell',
				'wowhead_id' => '106839',
				'keybound_id' => '0259'
			)
		),
		// ------------
		// Guardian
		// ------------
		'guardian' => array(
			'savagedefense' => array(
				'displayText' => 'Savage Defense',
				'displaySubtext' => '',
				'abilityType' => 'combat',
				'wowhead_type' => 'spell',
				'wowhead_id' => '62606',
				'keybound_id' => '0260'
			),
			'bearhug' => array(
				'displayText' => 'Bear Hug',
				'displaySubtext' => '',
				'abilityType' => 'combat',
				'wowhead_type' => 'spell',
				'wowhead_id' => '102795',
				'keybound_id' => '0261'
			),
			'rip' => array(
				'displayText' => 'Rip',
				'displaySubtext' => '',
				'abilityType' => 'combat',
				'wowhead_type' => 'spell',
				'wowhead_id' => '1079',
				'keybound_id' => '0262'
			),
			'removecorruption' => array(
				'displayText' => 'Remove Corruption',
				'displaySubtext' => '',
				'abilityType' => 'combat',
				'wowhead_type' => 'spell',
				'wowhead_id' => '2782',
				'keybound_id' => '0263'
			),
			'thrash' => array(
				'displayText' => 'Thrash',
				'displaySubtext' => '',
				'abilityType' => 'combat',
				'wowhead_type' => 'spell',
				'wowhead_id' => '77758',
				'keybound_id' => '0264'
			),
			'berserk' => array(
				'displayText' => 'Berserk',
				'displaySubtext' => '',
				'abilityType' => 'combat',
				'wowhead_type' => 'spell',
				'wowhead_id' => '106952',
				'keybound_id' => '0265'
			),
			'ravage' => array(
				'displayText' => 'Ravage',
				'displaySubtext' => '',
				'abilityType' => 'combat',
				'wowhead_type' => 'spell',
				'wowhead_id' => '102545',
				'keybound_id' => '0266'
			),
			'survivalinstincts' => array(
				'displayText' => 'Survival Instincts',
				'displaySubtext' => '',
				'abilityType' => 'combat',
				'wowhead_type' => 'spell',
				'wowhead_id' => '61336',
				'keybound_id' => '0267'
			),
			'skullbash' => array(
				'displayText' => 'Skull Bash',
				'displaySubtext' => '',
				'abilityType' => 'combat',
				'wowhead_type' => 'spell',
				'wowhead_id' => '106839',
				'keybound_id' => '0268'
			),
			'enrage' => array(
				'displayText' => 'Enrage',
				'displaySubtext' => '',
				'abilityType' => 'combat',
				'wowhead_type' => 'spell',
				'wowhead_id' => '5229',
				'keybound_id' => '0269'
			)
		),
		// ------------
		// Restoration
		// ------------
		'restoration' => array(
			'swiftmend' => array(
				'displayText' => 'Swiftmend',
				'displaySubtext' => '',
				'abilityType' => 'combat',
				'wowhead_type' => 'spell',
				'wowhead_id' => '18562',
				'keybound_id' => '0270'
			),
			'nourish' => array(
				'displayText' => 'Nourish',
				'displaySubtext' => '',
				'abilityType' => 'combat',
				'wowhead_type' => 'spell',
				'wowhead_id' => '50464',
				'keybound_id' => '0271'
			),
			'regrowth' => array(
				'displayText' => 'Regrowth',
				'displaySubtext' => '',
				'abilityType' => 'combat',
				'wowhead_type' => 'spell',
				'wowhead_id' => '8936',
				'keybound_id' => '0272'
			),
			'naturescure' => array(
				'displayText' => "Nature's Cure",
				'displaySubtext' => '',
				'abilityType' => 'combat',
				'wowhead_type' => 'spell',
				'wowhead_id' => '88423',
				'keybound_id' => '0273'
			),
			'lifebloom' => array(
				'displayText' => 'Lifebloom',
				'displaySubtext' => '',
				'abilityType' => 'combat',
				'wowhead_type' => 'spell',
				'wowhead_id' => '33778',
				'keybound_id' => '0274'
			),
			'ironbark' => array(
				'displayText' => 'Ironbark',
				'displaySubtext' => '',
				'abilityType' => 'combat',
				'wowhead_type' => 'spell',
				'wowhead_id' => '102342',
				'keybound_id' => '0275'
			),
			'wildgrowth' => array(
				'displayText' => 'Wild Growth',
				'displaySubtext' => '',
				'abilityType' => 'combat',
				'wowhead_type' => 'spell',
				'wowhead_id' => '48438',
				'keybound_id' => '0276'
			),
			'wildmushroom' => array(
				'displayText' => 'Wild Mushroom',
				'displaySubtext' => '',
				'abilityType' => 'combat',
				'wowhead_type' => 'spell',
				'wowhead_id' => '88747',
				'keybound_id' => '0277'
			),
			'wildmushroombloom' => array(
				'displayText' => 'Wild Mushroom: Bloom',
				'displaySubtext' => '',
				'abilityType' => 'combat',
				'wowhead_type' => 'spell',
				'wowhead_id' => '102791',
				'keybound_id' => '0278'
			)
		)
	),
	'talents' => array(
		// -----------------
		// Level 15 Talents
		// -----------------
		'lev15' => array(
			'displacerbeast' => array(
				'displayText' => 'Displacer Beast',
				'displaySubtext' => 'Talent',
				'abilityType' => 'combat',
				'wowhead_type' => 'spell',
				'wowhead_id' => '102280',
				'keybound_id' => '0279'
			),
			'wildcharge' => array(
				'displayText' => 'Wild Charge',
				'displaySubtext' => 'Talent',
				'abilityType' => 'combat',
				'wowhead_type' => 'spell',
				'wowhead_id' => '102401',
				'keybound_id' => '0280'
			)
		),
		// -----------------
		// Level 30 Talents
		// -----------------
		'lev30' => array(
			'naturesswiftness' => array(
				'displayText' => "Nature's Swiftness",
				'displaySubtext' => 'Talent',
				'abilityType' => 'combat',
				'wowhead_type' => 'spell',
				'wowhead_id' => '132158',
				'keybound_id' => '0281'
			),
			'renewal' => array(
				'displayText' => 'Renewal',
				'displaySubtext' => 'Talent',
				'abilityType' => 'combat',
				'wowhead_type' => 'spell',
				'wowhead_id' => '108238',
				'keybound_id' => '0282'
			),
			'cenarionward' => array(
				'displayText' => 'Cenarion Ward',
				'displaySubtext' => 'Talent',
				'abilityType' => 'combat',
				'wowhead_type' => 'spell',
				'wowhead_id' => '102351',
				'keybound_id' => '0283'
			)
		),
		// -----------------
		// Level 45 Talents
		// -----------------
		'lev45' => array(
			'faerieswarm' => array(
				'displayText' => 'Faerie Swarm',
				'displaySubtext' => 'Talent',
				'abilityType' => 'combat',
				'wowhead_type' => 'spell',
				'wowhead_id' => '106707',
				'keybound_id' => '0284'
			),
			'massentanglement' => array(
				'displayText' => 'Mass Entanglement',
				'displaySubtext' => 'Talent',
				'abilityType' => 'combat',
				'wowhead_type' => 'spell',
				'wowhead_id' => '102359',
				'keybound_id' => '0285'
			),
			'typhoon' => array(
				'displayText' => 'Typhoon',
				'displaySubtext' => 'Talent',
				'abilityType' => 'combat',
				'wowhead_type' => 'spell',
				'wowhead_id' => '132469',
				'keybound_id' => '0286'
			)
		),
		// -----------------
		// Level 60 Talents
		// -----------------
		'lev60' => array(
			'incarnation' => array(
				'displayText' => 'Incarnation',
				'displaySubtext' => 'Talent',
				'abilityType' => 'combat',
				'wowhead_type' => 'spell',
				'wowhead_id' => '106731',
				'keybound_id' => '0287'
			),
			'forceofnature' => array(
				'displayText' => 'Force of Nature',
				'displaySubtext' => 'Talent',
				'abilityType' => 'combat',
				'wowhead_type' => 'spell',
				'wowhead_id' => '106737',
				'keybound_id' => '0288'
			)
		),
		// -----------------
		// Level 75 Talents
		// -----------------
		'lev75' => array(
			'disorientingroar' => array(
				'displayText' => 'Disorienting Roar',
				'displaySubtext' => 'Talent',
				'abilityType' => 'combat',
				'wowhead_type' => 'spell',
				'wowhead_id' => '99',
				'keybound_id' => '0289'
			),
			'ursolsvortex' => array(
				'displayText' => "Ursol's Vortex",
				'displaySubtext' => 'Talent',
				'abilityType' => 'combat',
				'wowhead_type' => 'spell',
				'wowhead_id' => '102793',
				'keybound_id' => '0290'
			),
			'mightybash' => array(
				'displayText' => 'Mighty Bash',
				'displaySubtext' => 'Talent',
				'abilityType' => 'combat',
				'wowhead_type' => 'spell',
				'wowhead_id' => '5211',
				'keybound_id' => '0291'
			)
		),
		// -----------------
		// Level 90 Talents
		// -----------------
		'lev90' => array(
			'heartofthewild' => array(
				'displayText' => 'Heart of the Wild',
				'displaySubtext' => 'Talent',
				'abilityType' => 'combat',
				'wowhead_type' => 'spell',
				'wowhead_id' => '108288',
				'keybound_id' => '0292'
			),
			'naturesvigil' => array(
				'displayText' => "Nature's Vigil",
				'displaySubtext' => 'Talent',
				'abilityType' => 'combat',
				'wowhead_type' => 'spell',
				'wowhead_id' => '124974',
				'keybound_id' => '0293'
			)
		)
	),
	'glyphs' => array(
		'treant' => array(
			'treant' => array(
				'displayText' => 'Treant',
				'displaySubtext' => 'Glyph',
				'abilityType' => 'utility',
				'wowhead_type' => 'spell',
				'wowhead_id' => '114282',
				'keybound_id' => '0294'
			)
		)
	)
);
?>