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

$rogueAbilities = array(
	// ----------
	// All Specs
	// ----------
	'specs' => array(
		'all' => array(
			'throw' => array(
				'displayText' => 'Throw',
				'displaySubtext' => '',
				'abilityType' => 'combat'
			),
			'sinisterstrike' => array(
				'displayText' => 'Sinister Strike',
				'displaySubtext' => '',
				'abilityType' => 'combat'
			),
			'eviscerate' => array(
				'displayText' => 'Eviscerate',
				'displaySubtext' => '',
				'abilityType' => 'combat'
			),
			'stealth' => array(
				'displayText' => 'Stealth',
				'displaySubtext' => '',
				'abilityType' => 'stance'
			),
			'ambush' => array(
				'displayText' => 'Ambush',
				'displaySubtext' => '',
				'abilityType' => 'combat'
			),
			'evasion' => array(
				'displayText' => 'Evasion',
				'displaySubtext' => '',
				'abilityType' => 'combat'
			),
			'deadlypoison' => array(
				'displayText' => 'Deadly Poison',
				'displaySubtext' => '',
				'abilityType' => 'buff'
			),
			'sap' => array(
				'displayText' => 'Sap',
				'displaySubtext' => '',
				'abilityType' => 'combat'
			),
			'sliceanddice' => array(
				'displayText' => 'Slice and Dice',
				'displaySubtext' => '',
				'abilityType' => 'combat'
			),
			'pickpocket' => array(
				'displayText' => 'Pick Pocket',
				'displaySubtext' => '',
				'abilityType' => 'utility'
			),
			'recuperate' => array(
				'displayText' => 'Recuperate',
				'displaySubtext' => '',
				'abilityType' => 'combat'
			),
			'kick' => array(
				'displayText' => 'Kick',
				'displaySubtext' => '',
				'abilityType' => 'combat'
			),
			'cripplingpoison' => array(
				'displayText' => 'Crippling Poison',
				'displaySubtext' => '',
				'abilityType' => 'buff'
			),
			'gouge' => array(
				'displayText' => 'Gouge',
				'displaySubtext' => '',
				'abilityType' => 'combat'
			),
			'picklock' => array(
				'displayText' => 'Pick Lock',
				'displaySubtext' => '',
				'abilityType' => 'utility'
			),
			'sprint' => array(
				'displayText' => 'Sprint',
				'displaySubtext' => '',
				'abilityType' => 'combat'
			),
			'distract' => array(
				'displayText' => 'Distract',
				'displaySubtext' => '',
				'abilityType' => 'combat'
			),
			'mindnumbingpoison' => array(
				'displayText' => 'Mind-numbing Poison',
				'displaySubtext' => '',
				'abilityType' => 'buff'
			),
			'cheapshot' => array(
				'displayText' => 'Cheap Shot',
				'displaySubtext' => '',
				'abilityType' => 'combat'
			),
			'woundpoison' => array(
				'displayText' => 'Wound Poison',
				'displaySubtext' => '',
				'abilityType' => 'buff'
			),
			'vanish' => array(
				'displayText' => 'Vanish',
				'displaySubtext' => '',
				'abilityType' => 'combat'
			),
			'exposearmor' => array(
				'displayText' => 'Expose Armor',
				'displaySubtext' => '',
				'abilityType' => 'combat'
			),
			'blind' => array(
				'displayText' => 'Blind',
				'displaySubtext' => '',
				'abilityType' => 'combat'
			),
			'kidneyshot' => array(
				'displayText' => 'Kidney Shot',
				'displaySubtext' => '',
				'abilityType' => 'combat'
			),
			'feint' => array(
				'displayText' => 'Feint',
				'displaySubtext' => '',
				'abilityType' => 'combat'
			),
			'rupture' => array(
				'displayText' => 'Rupture',
				'displaySubtext' => '',
				'abilityType' => 'combat'
			),
			'garrote' => array(
				'displayText' => 'Garrote',
				'displaySubtext' => '',
				'abilityType' => 'combat'
			),
			'dismantle' => array(
				'displayText' => 'Dismantle',
				'displaySubtext' => '',
				'abilityType' => 'combat'
			),
			'cloakofshadows' => array(
				'displayText' => 'Cloak of Shadows',
				'displaySubtext' => '',
				'abilityType' => 'combat'
			),
			'fanofknives' => array(
				'displayText' => 'Fan of Knives',
				'displaySubtext' => '',
				'abilityType' => 'combat'
			),
			'shadowwalk' => array(
				'displayText' => 'Shadow Walk',
				'displaySubtext' => '',
				'abilityType' => 'combat'
			),
			'shiv' => array(
				'displayText' => 'Shiv',
				'displaySubtext' => '',
				'abilityType' => 'combat'
			),
			'shroudofconcealment' => array(
				'displayText' => 'Shroud of Concealment',
				'displaySubtext' => '',
				'abilityType' => 'combat'
			),
			'tricksofthetrade' => array(
				'displayText' => 'Tricks of the Trade',
				'displaySubtext' => '',
				'abilityType' => 'combat'
			),
			'redirect' => array(
				'displayText' => 'Redirect',
				'displaySubtext' => '',
				'abilityType' => 'combat'
			),
			'crimsontempest' => array(
				'displayText' => 'Crimson Tempest',
				'displaySubtext' => '',
				'abilityType' => 'combat'
			),
			'smokebomb' => array(
				'displayText' => 'Smoke Bomb',
				'displaySubtext' => '',
				'abilityType' => 'combat'
			),
			'shadowblades' => array(
				'displayText' => 'Shadow Blades',
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
		// Assassination
		// -----------
		'assassination' => array(
			'mutilate' => array(
				'displayText' => 'Mutilate',
				'displaySubtext' => '',
				'abilityType' => 'combat'
			),
			'envenom' => array(
				'displayText' => 'Envenom',
				'displaySubtext' => '',
				'abilityType' => 'combat'
			),
			'dispatch' => array(
				'displayText' => 'Dispatch',
				'displaySubtext' => '',
				'abilityType' => 'combat'
			),
			'vendetta' => array(
				'displayText' => 'Vendetta',
				'displaySubtext' => '',
				'abilityType' => 'combat'
			)
		),
		// -----------
		// Combat
		// -----------
		'combat' => array(
			'bladeflurry' => array(
				'displayText' => 'Blade Flurry',
				'displaySubtext' => '',
				'abilityType' => 'combat'
			),
			'revealingstrike' => array(
				'displayText' => 'Revealing Strike',
				'displaySubtext' => '',
				'abilityType' => 'combat'
			),
			'adrenalinerush' => array(
				'displayText' => 'Adrenaline Rush',
				'displaySubtext' => '',
				'abilityType' => 'combat'
			),
			'killingspree' => array(
				'displayText' => 'Killing Spree',
				'displaySubtext' => '',
				'abilityType' => 'combat'
			)
		),
		// ------------
		// Subtlety
		// ------------
		'subtlety' => array(
			'hemorrhage' => array(
				'displayText' => 'Hemorrhage',
				'displaySubtext' => '',
				'abilityType' => 'combat'
			),
			'premeditation' => array(
				'displayText' => 'Premeditation',
				'displaySubtext' => '',
				'abilityType' => 'combat'
			),
			'backstab' => array(
				'displayText' => 'Backstab',
				'displaySubtext' => '',
				'abilityType' => 'combat'
			),
			'shadowdance' => array(
				'displayText' => 'Shadow Dance',
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
		
		),
		// -----------------
		// Level 30 Talents
		// -----------------
		'lev30' => array(
			'deadlythrow' => array(
				'displayText' => 'Deadly Throw',
				'displaySubtext' => 'Talent',
				'abilityType' => 'combat'
			),
			'combatreadiness' => array(
				'displayText' => 'Combat Readiness',
				'displaySubtext' => 'Talent',
				'abilityType' => 'combat'
			)
		),
		// -----------------
		// Level 45 Talents
		// -----------------
		'lev45' => array(
			'leechingpoison' => array(
				'displayText' => 'Leeching Poison',
				'displaySubtext' => 'Talent',
				'abilityType' => 'buff'
			)
		),
		// -----------------
		// Level 60 Talents
		// -----------------
		'lev60' => array(
			'preparation' => array(
				'displayText' => 'Preparation',
				'displaySubtext' => 'Talent',
				'abilityType' => 'combat'
			),
			'shadowstep' => array(
				'displayText' => 'Shadowstep',
				'displaySubtext' => 'Talent',
				'abilityType' => 'combat'
			),
			'burstofspeed' => array(
				'displayText' => 'Burst of Speed',
				'displaySubtext' => 'Talent',
				'abilityType' => 'combat'
			)
		),
		// -----------------
		// Level 75 Talents
		// -----------------
		'lev75' => array(
			'paralyticpoison' => array(
				'displayText' => 'Paralytic Poison',
				'displaySubtext' => 'Talent',
				'abilityType' => 'buff'
			)
		),
		// -----------------
		// Level 90 Talents
		// -----------------
		'lev90' => array(
			'shurikentoss' => array(
				'displayText' => 'Shuriken Toss',
				'displaySubtext' => 'Talent',
				'abilityType' => 'combat'
			)
		)
	),
	'glyphs' => array(
		
	)
);
?>