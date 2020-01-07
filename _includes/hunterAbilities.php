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

$hunterAbilities = array(
	// ----------
	// All Specs
	// ----------
	'specs' => array(
		'all' => array(
			'revivepet' => array(
				'displayText' => 'Revive Pet',
				'displaySubtext' => '',
				'abilityType' => 'utility',
				'wowhead_type' => 'spell',
				'wowhead_id' => '982',
				'keybound_id' => '0301'
			),
			'arcaneshot' => array(
				'displayText' => 'Arcane Shot',
				'displaySubtext' => '',
				'abilityType' => 'combat',
				'wowhead_type' => 'spell',
				'wowhead_id' => '3044',
				'keybound_id' => '0302'
			),
			'callpet1' => array(
				'displayText' => 'Call Pet 1',
				'displaySubtext' => '',
				'abilityType' => 'utility',
				'wowhead_type' => 'spell',
				'wowhead_id' => '883',
				'keybound_id' => '0303'
			),
			'steadyshot' => array(
				'displayText' => 'Steady Shot',
				'displaySubtext' => '',
				'abilityType' => 'combat',
				'wowhead_type' => 'spell',
				'wowhead_id' => '56641',
				'keybound_id' => '0304'
			),
			'concussiveshot' => array(
				'displayText' => 'Concussive Shot',
				'displaySubtext' => '',
				'abilityType' => 'combat',
				'wowhead_type' => 'spell',
				'wowhead_id' => '5116',
				'keybound_id' => '0305'
			),
			'dismisspet' => array(
				'displayText' => 'Dismiss Pet',
				'displaySubtext' => '',
				'abilityType' => 'combat',
				'wowhead_type' => 'spell',
				'wowhead_id' => '2641',
				'keybound_id' => '0306'
			),
			'beastlore' => array(
				'displayText' => 'Beast Lore',
				'displaySubtext' => '',
				'abilityType' => 'utility',
				'wowhead_type' => 'spell',
				'wowhead_id' => '1462',
				'keybound_id' => '0307'
			),
			'tamebeast' => array(
				'displayText' => 'Tame Beast',
				'displaySubtext' => '',
				'abilityType' => 'utility',
				'wowhead_type' => 'spell',
				'wowhead_id' => '1515',
				'keybound_id' => '0308'
			),
			'serpentsting' => array(
				'displayText' => 'Serpent Sting',
				'displaySubtext' => '',
				'abilityType' => 'combat',
				'wowhead_type' => 'spell',
				'wowhead_id' => '1978',
				'keybound_id' => '0309'
			),
			'feedpet' => array(
				'displayText' => 'Feed Pet',
				'displaySubtext' => '',
				'abilityType' => 'utility',
				'wowhead_type' => 'spell',
				'wowhead_id' => '6991',
				'keybound_id' => '0310'
			),
			'aspectofthehawk' => array(
				'displayText' => 'Aspect of the Hawk',
				'displaySubtext' => 'Stance',
				'abilityType' => 'stance',
				'wowhead_type' => 'spell',
				'wowhead_id' => '13165',
				'keybound_id' => '0311'
			),
			'disengage' => array(
				'displayText' => 'Disengage',
				'displaySubtext' => '',
				'abilityType' => 'combat',
				'wowhead_type' => 'spell',
				'wowhead_id' => '781',
				'keybound_id' => '0312'
			),
			'huntersmark' => array(
				'displayText' => "Hunter's Mark",
				'displaySubtext' => '',
				'abilityType' => 'combat',
				'wowhead_type' => 'spell',
				'wowhead_id' => '1130',
				'keybound_id' => '0313'
			),
			'scattershot' => array(
				'displayText' => 'Scatter Shot',
				'displaySubtext' => '',
				'abilityType' => 'combat',
				'wowhead_type' => 'spell',
				'wowhead_id' => '19503',
				'keybound_id' => '0314'
			),
			'mendpet' => array(
				'displayText' => 'Mend Pet',
				'displaySubtext' => '',
				'abilityType' => 'combat',
				'wowhead_type' => 'spell',
				'wowhead_id' => '136',
				'keybound_id' => '0315'
			),
			'eagleeye' => array(
				'displayText' => 'Eagle Eye',
				'displaySubtext' => '',
				'abilityType' => 'utility',
				'wowhead_type' => 'spell',
				'wowhead_id' => '6197',
				'keybound_id' => '0316'
			),
			'callpet2' => array(
				'displayText' => 'Call Pet 2',
				'displaySubtext' => '',
				'abilityType' => 'utility',
				'wowhead_type' => 'spell',
				'wowhead_id' => '83242',
				'keybound_id' => '0317'
			),
			'multishot' => array(
				'displayText' => 'Multi-Shot',
				'displaySubtext' => '',
				'abilityType' => 'combat',
				'wowhead_type' => 'spell',
				'wowhead_id' => '2643',
				'keybound_id' => '0318'
			),
			'aspectofthecheetah' => array(
				'displayText' => 'Aspect of the Cheetah',
				'displaySubtext' => 'Stance',
				'abilityType' => 'stance',
				'wowhead_type' => 'spell',
				'wowhead_id' => '5118',
				'keybound_id' => '0319'
			),
			'freezingtrap' => array(
				'displayText' => 'Freezing Trap',
				'displaySubtext' => '',
				'abilityType' => 'combat',
				'wowhead_type' => 'spell',
				'wowhead_id' => '1499',
				'keybound_id' => '0320'
			),
			'feigndeath' => array(
				'displayText' => 'Feign Death',
				'displaySubtext' => 'Pet Ability',
				'abilityType' => 'combat',
				'wowhead_type' => 'spell',
				'wowhead_id' => '5384',
				'keybound_id' => '0321'
			),
			'tranquilizingshot' => array(
				'displayText' => 'Tranquilizing Shot',
				'displaySubtext' => '',
				'abilityType' => 'combat',
				'wowhead_type' => 'spell',
				'wowhead_id' => '19801',
				'keybound_id' => '0322'
			),
			'killshot' => array(
				'displayText' => 'Kill Shot',
				'displaySubtext' => '',
				'abilityType' => 'combat',
				'wowhead_type' => 'spell',
				'wowhead_id' => '53351',
				'keybound_id' => '0323'
			),
			'scarebeast' => array(
				'displayText' => 'Scare Beast',
				'displaySubtext' => '',
				'abilityType' => 'combat',
				'wowhead_type' => 'spell',
				'wowhead_id' => '1513',
				'keybound_id' => '0324'
			),
			'flare' => array(
				'displayText' => 'Flare',
				'displaySubtext' => '',
				'abilityType' => 'combat',
				'wowhead_type' => 'spell',
				'wowhead_id' => '1543',
				'keybound_id' => '0325'
			),
			'explosivetrap' => array(
				'displayText' => 'Explosive Trap',
				'displaySubtext' => '',
				'abilityType' => 'combat',
				'wowhead_type' => 'spell',
				'wowhead_id' => '13813',
				'keybound_id' => '0326'
			),
			'widowvenom' => array(
				'displayText' => 'Widow Venom',
				'displaySubtext' => '',
				'abilityType' => 'combat',
				'wowhead_type' => 'spell',
				'wowhead_id' => '82654',
				'keybound_id' => '0327'
			),
			'callpet3' => array(
				'displayText' => 'Call Pet 3',
				'displaySubtext' => '',
				'abilityType' => 'utility',
				'wowhead_type' => 'spell',
				'wowhead_id' => '83243',
				'keybound_id' => '0328'
			),
			'icetrap' => array(
				'displayText' => 'Ice Trap',
				'displaySubtext' => '',
				'abilityType' => 'combat',
				'wowhead_type' => 'spell',
				'wowhead_id' => '13809',
				'keybound_id' => '0329'
			),
			'traplauncher' => array(
				'displayText' => 'Trap Launcher',
				'displaySubtext' => '',
				'abilityType' => 'combat',
				'wowhead_type' => 'spell',
				'wowhead_id' => '77769',
				'keybound_id' => '0330'
			),
			'distractingshot' => array(
				'displayText' => 'Distracting Shot',
				'displaySubtext' => '',
				'abilityType' => 'combat',
				'wowhead_type' => 'spell',
				'wowhead_id' => '20736',
				'keybound_id' => '0331'
			),
			'rapidfire' => array(
				'displayText' => 'Rapid Fire',
				'displaySubtext' => '',
				'abilityType' => 'combat',
				'wowhead_type' => 'spell',
				'wowhead_id' => '3045',
				'keybound_id' => '0332'
			),
			'aspectofthepack' => array(
				'displayText' => 'Aspect of the Pack',
				'displaySubtext' => 'Stance',
				'abilityType' => 'stance',
				'wowhead_type' => 'spell',
				'wowhead_id' => '13159',
				'keybound_id' => '0333'
			),
			'readiness' => array(
				'displayText' => 'Readiness',
				'displaySubtext' => '',
				'abilityType' => 'combat',
				'wowhead_type' => 'spell',
				'wowhead_id' => '23989',
				'keybound_id' => '0334'
			),
			'callpet4' => array(
				'displayText' => 'Call Pet 4',
				'displaySubtext' => '',
				'abilityType' => 'utility',
				'wowhead_type' => 'spell',
				'wowhead_id' => '83244',
				'keybound_id' => '0335'
			),
			'snaketrap' => array(
				'displayText' => 'Snake Trap',
				'displaySubtext' => '',
				'abilityType' => 'combat',
				'wowhead_type' => 'spell',
				'wowhead_id' => '34600',
				'keybound_id' => '0336'
			),
			'masterscall' => array(
				'displayText' => "Master's Call",
				'displaySubtext' => '',
				'abilityType' => 'combat',
				'wowhead_type' => 'spell',
				'wowhead_id' => '53271',
				'keybound_id' => '0337'
			),
			'misdirection' => array(
				'displayText' => 'Misdirection',
				'displaySubtext' => '',
				'abilityType' => 'combat',
				'wowhead_type' => 'spell',
				'wowhead_id' => '34477',
				'keybound_id' => '0338'
			),
			'deterrence' => array(
				'displayText' => 'Deterrence',
				'displaySubtext' => '',
				'abilityType' => 'combat',
				'wowhead_type' => 'spell',
				'wowhead_id' => '19263',
				'keybound_id' => '0339'
			),
			'callpet5' => array(
				'displayText' => 'Call Pet 5',
				'displaySubtext' => '',
				'abilityType' => 'utility',
				'wowhead_type' => 'spell',
				'wowhead_id' => '83245',
				'keybound_id' => '0340'
			),
			'camouflage' => array(
				'displayText' => 'Camouflage',
				'displaySubtext' => '',
				'abilityType' => 'combat',
				'wowhead_type' => 'spell',
				'wowhead_id' => '51753',
				'keybound_id' => '0341'
			),
			'stampede' => array(
				'displayText' => 'Stampede',
				'displaySubtext' => '',
				'abilityType' => 'combat',
				'wowhead_type' => 'spell',
				'wowhead_id' => '121818',
				'keybound_id' => '0342'
			),
			'symbiosis' => array(
				'displayText' => 'Symbiosis',
				'displaySubtext' => '',
				'abilityType' => 'combat',
				'wowhead_type' => 'spell',
				'wowhead_id' => '110497',
				'keybound_id' => '0343'
			)
		),
		// -----------
		// Beast Mastery
		// -----------
		'beast mastery' => array(
			'killcommand' => array(
				'displayText' => 'Kill Command',
				'displaySubtext' => '',
				'abilityType' => 'combat',
				'wowhead_type' => 'spell',
				'wowhead_id' => '34026',
				'keybound_id' => '0344'
			),
			'intimidation' => array(
				'displayText' => 'Intimidation',
				'displaySubtext' => '',
				'abilityType' => 'combat',
				'wowhead_type' => 'spell',
				'wowhead_id' => '19577',
				'keybound_id' => '0345'
			),
			'focusfire' => array(
				'displayText' => 'Focus Fire',
				'displaySubtext' => '',
				'abilityType' => 'combat',
				'wowhead_type' => 'spell',
				'wowhead_id' => '82692',
				'keybound_id' => '0346'
			),
			'bestialwrath' => array(
				'displayText' => 'Bestial Wrath',
				'displaySubtext' => '',
				'abilityType' => 'combat',
				'wowhead_type' => 'spell',
				'wowhead_id' => '19574',
				'keybound_id' => '0347'
			),
			'cobrashot' => array(
				'displayText' => 'Cobra Shot',
				'displaySubtext' => '',
				'abilityType' => 'combat',
				'wowhead_type' => 'spell',
				'wowhead_id' => '77767',
				'keybound_id' => '0348'
			)
		),
		// -----------
		// Marksmanship
		// -----------
		'marksmanship' => array(
			'aimedshot' => array(
				'displayText' => 'Aimed Shot',
				'displaySubtext' => '',
				'abilityType' => 'combat',
				'wowhead_type' => 'spell',
				'wowhead_id' => '19434',
				'keybound_id' => '0349'
			),
			'chimerashot' => array(
				'displayText' => 'Chimera Shot',
				'displaySubtext' => '',
				'abilityType' => 'combat',
				'wowhead_type' => 'spell',
				'wowhead_id' => '53209',
				'keybound_id' => '0350'
			)
		),
		// ------------
		// Survival
		// ------------
		'survival' => array(
			'explosiveshot' => array(
				'displayText' => 'Explosive Shot',
				'displaySubtext' => '',
				'abilityType' => 'combat',
				'wowhead_type' => 'spell',
				'wowhead_id' => '53301',
				'keybound_id' => '0351'
			),
			'blackarrow' => array(
				'displayText' => 'Black Arrow',
				'displaySubtext' => '',
				'abilityType' => 'combat',
				'wowhead_type' => 'spell',
				'wowhead_id' => '3674',
				'keybound_id' => '0352'
			),
			'cobrashot' => array(
				'displayText' => 'Cobra Shot',
				'displaySubtext' => '',
				'abilityType' => 'combat',
				'wowhead_type' => 'spell',
				'wowhead_id' => '77767',
				'keybound_id' => '0353'
			)
		),
	),
	'talents' => array(
		// -----------------
		// Level 15 Talents
		// -----------------
		'lev15' => array(
			
		),
		// -----------------
		// Level 30 Talents
		// -----------------
		'lev30' => array(
			'silencingshot' => array(
				'displayText' => 'Silencing Shot',
				'displaySubtext' => 'Talent',
				'abilityType' => 'combat',
				'wowhead_type' => 'spell',
				'wowhead_id' => '34490',
				'keybound_id' => '0354'
			),
			'wyvernsting' => array(
				'displayText' => 'Wyvern Sting',
				'displaySubtext' => 'Talent',
				'abilityType' => 'combat',
				'wowhead_type' => 'spell',
				'wowhead_id' => '19386',
				'keybound_id' => '0355'
			),
			'bindingshot' => array(
				'displayText' => 'Binding Shot',
				'displaySubtext' => 'Talent',
				'abilityType' => 'combat',
				'wowhead_type' => 'spell',
				'wowhead_id' => '109248',
				'keybound_id' => '0356'
			)
		),
		// -----------------
		// Level 45 Talents
		// -----------------
		'lev45' => array(
			'exhilaration' => array(
				'displayText' => 'Exhilaration',
				'displaySubtext' => 'Talent',
				'abilityType' => 'combat',
				'wowhead_type' => 'spell',
				'wowhead_id' => '109304',
				'keybound_id' => '0357'
			),
			'aspectoftheironhawk' => array(
				'displayText' => 'Aspect of the Iron Hawk',
				'displaySubtext' => 'Talent',
				'abilityType' => 'combat',
				'wowhead_type' => 'spell',
				'wowhead_id' => '109260',
				'keybound_id' => '0358'
			)
		),
		// -----------------
		// Level 60 Talents
		// -----------------
		'lev60' => array(
			'fervor' => array(
				'displayText' => 'Fervor',
				'displaySubtext' => 'Talent',
				'abilityType' => 'combat',
				'wowhead_type' => 'spell',
				'wowhead_id' => '82726',
				'keybound_id' => '0359'
			),
			'direbeast' => array(
				'displayText' => 'Dire Beast',
				'displaySubtext' => 'Talent',
				'abilityType' => 'combat',
				'wowhead_type' => 'spell',
				'wowhead_id' => '120679',
				'keybound_id' => '0360'
			)
		),
		// -----------------
		// Level 75 Talents
		// -----------------
		'lev75' => array(
			'amurderofcrows' => array(
				'displayText' => 'A Murder of Crows',
				'displaySubtext' => 'Talent',
				'abilityType' => 'combat',
				'wowhead_type' => 'spell',
				'wowhead_id' => '131894',
				'keybound_id' => '0361'
			),
			'blinkstrike' => array(
				'displayText' => 'Blink Strike',
				'displaySubtext' => 'Talent',
				'abilityType' => 'combat',
				'wowhead_type' => 'spell',
				'wowhead_id' => '130392',
				'keybound_id' => '0362'
			),
			'lynxrush' => array(
				'displayText' => 'Lynx Rush',
				'displaySubtext' => 'Talent',
				'abilityType' => 'combat',
				'wowhead_type' => 'spell',
				'wowhead_id' => '120697',
				'keybound_id' => '0363'
			)
		),
		// -----------------
		// Level 90 Talents
		// -----------------
		'lev90' => array(
			'glaivetoss' => array(
				'displayText' => 'Glaive Toss',
				'displaySubtext' => 'Talent',
				'abilityType' => 'combat',
				'wowhead_type' => 'spell',
				'wowhead_id' => '117050',
				'keybound_id' => '0364'
			),
			'powershot' => array(
				'displayText' => 'Powershot',
				'displaySubtext' => 'Talent',
				'abilityType' => 'combat',
				'wowhead_type' => 'spell',
				'wowhead_id' => '109259',
				'keybound_id' => '0365'
			),
			'barrage' => array(
				'displayText' => 'Barrage',
				'displaySubtext' => 'Talent',
				'abilityType' => 'combat',
				'wowhead_type' => 'spell',
				'wowhead_id' => '120360',
				'keybound_id' => '0366'
			)
		)
	),
	'glyphs' => array(
		'aspectofthebeast' => array(
			'aspectofthebeast' => array(
				'displayText' => 'Aspect of the Beast',
				'displaySubtext' => 'Glyph',
				'abilityType' => 'combat',
				'wowhead_type' => 'spell',
				'wowhead_id' => '125042',
				'keybound_id' => '0367'
			)
		),
		'fetch' => array(
			'fetch' => array(
				'displayText' => 'Fetch',
				'displaySubtext' => 'Glyph',
				'abilityType' => 'combat',
				'wowhead_type' => 'spell',
				'wowhead_id' => '125050',
				'keybound_id' => '0368'
			)
		),
		'fireworks' => array(
			'fireworks' => array(
				'displayText' => 'Fireworks',
				'displaySubtext' => 'Glyph',
				'abilityType' => 'combat',
				'wowhead_type' => 'spell',
				'wowhead_id' => '127933',
				'keybound_id' => '0369'
			)
		)
	),
	'petspec' => array(
		'ferocity' => array(
			'rabid' => array(
				'displayText' => 'Rabid',
				'displaySubtext' => 'Pet',
				'abilityType' => 'combat',
				'wowhead_type' => 'spell',
				'wowhead_id' => '53401',
				'keybound_id' => '0370'
			),
			'heartofthephoenix' => array(
				'displayText' => 'Heart of the Phoenix',
				'displaySubtext' => 'Pet',
				'abilityType' => 'combat',
				'wowhead_type' => 'spell',
				'wowhead_id' => '55709',
				'keybound_id' => '0371'
			),
			'dash' => array(
				'displayText' => 'Dash',
				'displaySubtext' => 'Pet',
				'abilityType' => 'combat',
				'wowhead_type' => 'spell',
				'wowhead_id' => '61684',
				'keybound_id' => '0372'
			)
		),
		'tenacity' => array(
			'laststand' => array(
				'displayText' => 'Last Stand',
				'displaySubtext' => 'Pet',
				'abilityType' => 'combat',
				'wowhead_type' => 'spell',
				'wowhead_id' => '53478',
				'keybound_id' => '0373'
			),
			'charge' => array(
				'displayText' => 'Charge',
				'displaySubtext' => 'Pet',
				'abilityType' => 'combat',
				'wowhead_type' => 'spell',
				'wowhead_id' => '61685',
				'keybound_id' => '0374'
			),
			'thunderstomp' => array(
				'displayText' => 'Thunderstomp',
				'displaySubtext' => 'Pet',
				'abilityType' => 'combat',
				'wowhead_type' => 'spell',
				'wowhead_id' => '63900',
				'keybound_id' => '0375'
			)
		),
		'cunning' => array(
			'roarofsacrifice' => array(
				'displayText' => 'Roar of Sacrifice',
				'displaySubtext' => 'Pet',
				'abilityType' => 'combat',
				'wowhead_type' => 'spell',
				'wowhead_id' => '53480',
				'keybound_id' => '0376'
			),
			'bullheaded' => array(
				'displayText' => 'Bullheaded',
				'displaySubtext' => 'Pet',
				'abilityType' => 'combat',
				'wowhead_type' => 'spell',
				'wowhead_id' => '53490',
				'keybound_id' => '0377'
			),
			'dash' => array(
				'displayText' => 'Dash',
				'displaySubtext' => 'Pet',
				'abilityType' => 'combat',
				'wowhead_type' => 'spell',
				'wowhead_id' => '61684',
				'keybound_id' => '0378'
			)
		)
	)
);
?>