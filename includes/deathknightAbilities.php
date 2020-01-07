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

$deathknightAbilities_ids = array(
	'imageFolder' => 'deathknight',
	'aa' => 'Blood Strike',
	'ab' => 'Death Coil',
	'ac' => 'Death Grip'
);

$deathknightAbilities = array(
	// ----------
	// All Specs
	// ----------
	'specs' => array(
		'all' => array(
			'bloodstrike' => array(
				'displayText' => 'Blood Strike',
				'displaySubtext' => '',
				'abilityType' => 'combat',
				'wowhead_type' => 'spell',
				'wowhead_id' => '45902',
				'keybound_id' => 'aa'
			),
			'deathcoil' => array(
				'displayText' => 'Death Coil',
				'displaySubtext' => '',
				'abilityType' => 'combat',
				'wowhead_type' => 'spell',
				'wowhead_id' => '47541',
				'keybound_id' => 'ab'
			),
			'deathgrip' => array(
				'displayText' => 'Death Grip',
				'displaySubtext' => '',
				'abilityType' => 'combat',
				'wowhead_type' => 'spell',
				'wowhead_id' => '49576',
				'keybound_id' => 'ac'
			),
			'frostpresence' => array(
				'displayText' => 'Frost Presence',
				'displaySubtext' => 'Stance',
				'abilityType' => 'stance',
				'wowhead_type' => 'spell',
				'wowhead_id' => '48266',
				'keybound_id' => 'ad'
			),
			'icytouch' => array(
				'displayText' => 'Icy Touch',
				'displaySubtext' => '',
				'abilityType' => 'combat',
				'wowhead_type' => 'spell',
				'wowhead_id' => '45477',
				'keybound_id' => 'ae'
			),
			'plaguestrike' => array(
				'displayText' => 'Plague Strike',
				'displaySubtext' => '',
				'abilityType' => 'combat',
				'wowhead_type' => 'spell',
				'wowhead_id' => '45462',
				'keybound_id' => 'af'
			),
			'pestilence' => array(
				'displayText' => 'Pestilence',
				'displaySubtext' => '',
				'abilityType' => 'combat',
				'wowhead_type' => 'spell',
				'wowhead_id' => '50842',
				'keybound_id' => 'ag'
			),
			'raisedead' => array(
				'displayText' => 'Raise Dead',
				'displaySubtext' => '',
				'abilityType' => 'combat',
				'wowhead_type' => 'spell',
				'wowhead_id' => '46584',
				'keybound_id' => 'ah'
			),
			'deathstrike' => array(
				'displayText' => 'Death Strike',
				'displaySubtext' => '',
				'abilityType' => 'combat',
				'wowhead_type' => 'spell',
				'wowhead_id' => '49998',
				'keybound_id' => 'ai'
			),
			'bloodboil' => array(
				'displayText' => 'Blood Boil',
				'displaySubtext' => '',
				'abilityType' => 'combat',
				'wowhead_type' => 'spell',
				'wowhead_id' => '48721',
				'keybound_id' => 'aj'
			),
			'mindfreeze' => array(
				'displayText' => 'Mind Freeze',
				'displaySubtext' => '',
				'abilityType' => 'combat',
				'wowhead_type' => 'spell',
				'wowhead_id' => '47528',
				'keybound_id' => 'ak'
			),
			'bloodpresence' => array(
				'displayText' => 'Blood Presence',
				'displaySubtext' => 'Stance',
				'abilityType' => 'stance',
				'wowhead_type' => 'spell',
				'wowhead_id' => '48263',
				'keybound_id' => 'al'
			),
			'strangulate' => array(
				'displayText' => 'Strangulate',
				'displaySubtext' => '',
				'abilityType' => 'combat',
				'wowhead_type' => 'spell',
				'wowhead_id' => '47476',
				'keybound_id' => 'am'
			),
			'chainsofice' => array(
				'displayText' => 'Chains of Ice',
				'displaySubtext' => '',
				'abilityType' => 'combat',
				'wowhead_type' => 'spell',
				'wowhead_id' => '45524',
				'keybound_id' => 'an'
			),
			'deathanddecay' => array(
				'displayText' => 'Death and Decay',
				'displaySubtext' => '',
				'abilityType' => 'combat',
				'wowhead_type' => 'spell',
				'wowhead_id' => '43265',
				'keybound_id' => 'ao'
			),
			'iceboundfortitude' => array(
				'displayText' => 'Icebound Fortitude',
				'displaySubtext' => '',
				'abilityType' => 'combat',
				'wowhead_type' => 'spell',
				'wowhead_id' => '48792',
				'keybound_id' => 'ap'
			),
			'hornofwinter' => array(
				'displayText' => 'Horn of Winter',
				'displaySubtext' => '',
				'abilityType' => 'buff',
				'wowhead_type' => 'spell',
				'wowhead_id' => '57330',
				'keybound_id' => 'aq'
			),
			'pathoffrost' => array(
				'displayText' => 'Path of Frost',
				'displaySubtext' => '',
				'abilityType' => 'combat',
				'wowhead_type' => 'spell',
				'wowhead_id' => '3714',
				'keybound_id' => 'ar'
			),
			'antimagicshell' => array(
				'displayText' => 'Anti-Magic Shell',
				'displaySubtext' => '',
				'abilityType' => 'combat',
				'wowhead_type' => 'spell',
				'wowhead_id' => '48707',
				'keybound_id' => 'as'
			),
			'controlundead' => array(
				'displayText' => 'Control Undead',
				'displaySubtext' => '',
				'abilityType' => 'combat',
				'wowhead_type' => 'spell',
				'wowhead_id' => '111673',
				'keybound_id' => 'at'
			),
			'unholypresence' => array(
				'displayText' => 'Unholy Presence',
				'displaySubtext' => 'Stance',
				'abilityType' => 'stance',
				'wowhead_type' => 'spell',
				'wowhead_id' => '48265',
				'keybound_id' => 'au'
			),
			'raiseally' => array(
				'displayText' => 'Raise Ally',
				'displaySubtext' => '',
				'abilityType' => 'combat',
				'wowhead_type' => 'spell',
				'wowhead_id' => '61999',
				'keybound_id' => 'av'
			),
			'empowerruneweapon' => array(
				'displayText' => 'Empower Rune Weapon',
				'displaySubtext' => '',
				'abilityType' => 'combat',
				'wowhead_type' => 'spell',
				'wowhead_id' => '47568',
				'keybound_id' => 'aw'
			),
			'armyofthedead' => array(
				'displayText' => 'Army of the Dead',
				'displaySubtext' => '',
				'abilityType' => 'combat',
				'wowhead_type' => 'spell',
				'wowhead_id' => '42650',
				'keybound_id' => 'ax'
			),
			'outbreak' => array(
				'displayText' => 'Outbreak',
				'displaySubtext' => '',
				'abilityType' => 'combat',
				'wowhead_type' => 'spell',
				'wowhead_id' => '77575',
				'keybound_id' => 'ay'
			),
			'necroticstrike' => array(
				'displayText' => 'Necrotic Strike',
				'displaySubtext' => '',
				'abilityType' => 'combat',
				'wowhead_type' => 'spell',
				'wowhead_id' => '73975',
				'keybound_id' => 'az'
			),
			'darksimulacrum' => array(
				'displayText' => 'Dark Simulacrum',
				'displaySubtext' => '',
				'abilityType' => 'combat',
				'wowhead_type' => 'spell',
				'wowhead_id' => '77606',
				'keybound_id' => 'a0'
			),
			'soulreaper' => array(
				'displayText' => 'Soul Reaper',
				'displaySubtext' => '',
				'abilityType' => 'combat',
				'wowhead_type' => 'spell',
				'wowhead_id' => '130736', // Unholy
				// Other wowhead_ids for other specs:
				// Frost: 130735
				// Blood: 114866
				'keybound_id' => 'a1'
			),
			'symbiosis' => array(
				'displayText' => 'Symbiosis',
				'displaySubtext' => '',
				'abilityType' => 'combat',
				'wowhead_type' => 'spell',
				'wowhead_id' => '110498',
				'keybound_id' => 'a2'
			)
		),
		// -----------
		// Blood
		// -----------
		'blood' => array(
			'darkcommand' => array(
				'displayText' => 'Dark Command',
				'displaySubtext' => '',
				'abilityType' => 'combat',
				'wowhead_type' => 'spell',
				'wowhead_id' => '56222',
				'keybound_id' => 'a3'
			),
			'heartstrike' => array(
				'displayText' => 'Heart Strike',
				'displaySubtext' => '',
				'abilityType' => 'combat',
				'wowhead_type' => 'spell',
				'wowhead_id' => '55050',
				'keybound_id' => 'a4'
			),
			'runetap' => array(
				'displayText' => 'Rune Tap',
				'displaySubtext' => '',
				'abilityType' => 'combat',
				'wowhead_type' => 'spell',
				'wowhead_id' => '48982',
				'keybound_id' => 'a5'
			),
			'runestrike' => array(
				'displayText' => 'Rune Strike',
				'displaySubtext' => '',
				'abilityType' => 'combat',
				'wowhead_type' => 'spell',
				'wowhead_id' => '56815',
				'keybound_id' => 'a6'
			),
			'dancingruneweapon' => array(
				'displayText' => 'Dancing Rune Weapon',
				'displaySubtext' => '',
				'abilityType' => 'combat',
				'wowhead_type' => 'spell',
				'wowhead_id' => '49028',
				'keybound_id' => 'a7'
			),
			'vampiricblood' => array(
				'displayText' => 'Vampiric Blood',
				'displaySubtext' => '',
				'abilityType' => 'combat',
				'wowhead_type' => 'spell',
				'wowhead_id' => '55233',
				'keybound_id' => 'a8'
			),
			'boneshield' => array(
				'displayText' => 'Bone Shield',
				'displaySubtext' => '',
				'abilityType' => 'combat',
				'wowhead_type' => 'spell',
				'wowhead_id' => '49222',
				'keybound_id' => 'a9'
			)
		),
		// -----------
		// Frost
		// -----------
		'frost' => array(
			'froststrike' => array(
				'displayText' => 'Frost Strike',
				'displaySubtext' => '',
				'abilityType' => 'combat',
				'wowhead_type' => 'spell',
				'wowhead_id' => '49143',
				'keybound_id' => 'ba'
			),
			'howlingblast' => array(
				'displayText' => 'Howling Blast',
				'displaySubtext' => '',
				'abilityType' => 'combat',
				'wowhead_type' => 'spell',
				'wowhead_id' => '49184',
				'keybound_id' => 'bb'
			),
			'obliterate' => array(
				'displayText' => 'Obliterate',
				'displaySubtext' => '',
				'abilityType' => 'combat',
				'wowhead_type' => 'spell',
				'wowhead_id' => '49020',
				'keybound_id' => 'bc'
			),
			'pillaroffrost' => array(
				'displayText' => 'Pillar of Frost',
				'displaySubtext' => '',
				'abilityType' => 'combat',
				'wowhead_type' => 'spell',
				'wowhead_id' => '51271',
				'keybound_id' => 'bd'
			)
		),
		// ------------
		// Unholy
		// ------------
		'unholy' => array(
			'scourgestrike' => array(
				'displayText' => 'Scourge Strike',
				'displaySubtext' => '',
				'abilityType' => 'combat',
				'wowhead_type' => 'spell',
				'wowhead_id' => '55090',
				'keybound_id' => 'be'
			),
			'festeringstrike' => array(
				'displayText' => 'Festering Strike',
				'displaySubtext' => '',
				'abilityType' => 'combat',
				'wowhead_type' => 'spell',
				'wowhead_id' => '85948',
				'keybound_id' => 'bf'
			),
			'unholyfrenzy' => array(
				'displayText' => 'Unholy Frenzy',
				'displaySubtext' => '',
				'abilityType' => 'combat',
				'wowhead_type' => 'spell',
				'wowhead_id' => '49016',
				'keybound_id' => 'bg'
			),
			'darktransformation' => array(
				'displayText' => 'Dark Transformation',
				'displaySubtext' => '',
				'abilityType' => 'combat',
				'wowhead_type' => 'spell',
				'wowhead_id' => '63560',
				'keybound_id' => 'bh'
			),
			'summongargoyle' => array(
				'displayText' => 'Summon Gargoyle',
				'displaySubtext' => '',
				'abilityType' => 'combat',
				'wowhead_type' => 'spell',
				'wowhead_id' => '49206',
				'keybound_id' => 'bi'
			)
		),
	),
	'talents' => array(
		// -----------------
		// Level 15 Talents
		// -----------------
		'lev15' => array(
			'plagueleech' => array(
				'displayText' => 'Plague Leech',
				'displaySubtext' => 'Talent',
				'abilityType' => 'combat',
				'wowhead_type' => 'spell',
				'wowhead_id' => '123693',
				'keybound_id' => 'bj'
			),
			'unholyblight' => array(
				'displayText' => 'Unholy Blight',
				'displaySubtext' => 'Talent',
				'abilityType' => 'combat',
				'wowhead_type' => 'spell',
				'wowhead_id' => '115989',
				'keybound_id' => 'bk'
			)
		),
		// -----------------
		// Level 30 Talents
		// -----------------
		'lev30' => array(
			'lichborne' => array(
				'displayText' => 'Lichborne',
				'displaySubtext' => 'Talent',
				'abilityType' => 'combat',
				'wowhead_type' => 'spell',
				'wowhead_id' => '49039',
				'keybound_id' => 'bl'
			),
			'antimagiczone' => array(
				'displayText' => 'Anti-Magic Zone',
				'displaySubtext' => 'Talent',
				'abilityType' => 'combat',
				'wowhead_type' => 'spell',
				'wowhead_id' => '51052',
				'keybound_id' => 'bm'
			)
		),
		// -----------------
		// Level 45 Talents
		// -----------------
		'lev45' => array(
			'deathsadvance' => array(
				'displayText' => "Death's Advance",
				'displaySubtext' => 'Talent',
				'abilityType' => 'combat',
				'wowhead_type' => 'spell',
				'wowhead_id' => '96268',
				'keybound_id' => 'bn'
			),
			'asphyxiate' => array(
				'displayText' => 'Asphyxiate',
				'displaySubtext' => 'Talent',
				'abilityType' => 'combat',
				'wowhead_type' => 'spell',
				'wowhead_id' => '108194',
				'keybound_id' => 'bo'
			)
		),
		// -----------------
		// Level 60 Talents
		// -----------------
		'lev60' => array(
			'deathpact' => array(
				'displayText' => 'Death Pact',
				'displaySubtext' => 'Talent',
				'abilityType' => 'combat',
				'wowhead_type' => 'spell',
				'wowhead_id' => '48743',
				'keybound_id' => 'bp'
			),
			'deathsiphon' => array(
				'displayText' => 'Death Siphon',
				'displaySubtext' => 'Talent',
				'abilityType' => 'combat',
				'wowhead_type' => 'spell',
				'wowhead_id' => '108196',
				'keybound_id' => 'bq'
			),
			'conversion' => array(
				'displayText' => 'Conversion',
				'displaySubtext' => 'Talent',
				'abilityType' => 'combat',
				'wowhead_type' => 'spell',
				'wowhead_id' => '119975',
				'keybound_id' => 'br'
			)
		),
		// -----------------
		// Level 75 Talents
		// -----------------
		'lev75' => array(
			'bloodtap' => array(
				'displayText' => 'Blood Tap',
				'displaySubtext' => 'Talent',
				'abilityType' => 'combat',
				'wowhead_type' => 'spell',
				'wowhead_id' => '45529',
				'keybound_id' => 'bs'
			)
		),
		// -----------------
		// Level 90 Talents
		// -----------------
		'lev90' => array(
			'gorefiendsgrasp' => array(
				'displayText' => "Gorefiend's Grasp",
				'displaySubtext' => 'Talent',
				'abilityType' => 'combat',
				'wowhead_type' => 'spell',
				'wowhead_id' => '108199',
				'keybound_id' => 'bt'
			),
			'remorselesswinter' => array(
				'displayText' => 'Remorseless Winter',
				'displaySubtext' => 'Talent',
				'abilityType' => 'combat',
				'wowhead_type' => 'spell',
				'wowhead_id' => '108200',
				'keybound_id' => 'bu'
			),
			'desecratedground' => array(
				'displayText' => 'Desecrated Ground',
				'displaySubtext' => 'Talent',
				'abilityType' => 'combat',
				'wowhead_type' => 'spell',
				'wowhead_id' => '108201',
				'keybound_id' => 'bv'
			)
		)
	),
	'glyphs' => array(
		'corpseexplosion' => array(
			'corpseexplosion' => array(
				'displayText' => 'Corpse Explosion',
				'displaySubtext' => 'Glyph',
				'abilityType' => 'utility',
				'wowhead_type' => 'spell',
				'wowhead_id' => '127344',
				'keybound_id' => 'bw'
			)
		)
	)
);
?>