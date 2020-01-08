<?php
session_start();
require_once('includes/functions.php');
require_once('includes/classTalents.php');

//=================================================
//               BEGIN CLIENT SIDE
//=================================================

require('includes/header.php');
?>

<!--
		Welcome panel
-->

<div id="infoPanel">
	
	<p>Create keybinding layouts for <br /><span style="color: #ecc40d">any</span> spec in <i>World of Warcraft&trade;</i></p>
	
	<span id="infoPanel-subtitle"><a href="about.php"><b>Read more about this site</b></a></span>
	
</div>

<!--
		Class Selection interface
-->

<form method="post" action="bind.php">

<div class="spacer">For nostalgia purposes only - content is out of date and inaccessible</div>

<div id="classSelectionText" class="centeredHeader classSelection">Select Your Class</div>

<div id="classIconsContainer" class="classSelection">

	<?php foreach ($classes as $key => $value) { ?>
	
	<div class="classIcon"><img src="images/_classes/<?php echo $value['filename']; ?>.jpg">
	
		<div class="hide"><?php echo $key; ?></div>
		
	</div>
	
	<?php } ?>
	
	<input type="hidden" id="selectedClass" name="selectedClass" value="">

</div>

<div class="spacer"></div>



<div id="raceSelectionText" class="centeredHeader raceSelection">Choose Your Race</div>

<div id="raceSelectionContainer" class="raceSelection">

	<div class="selectBox">
		<span class="selected"></span>
		<span class="selectArrow">&#9660</span>
		<div class="selectOptions">
			<span class="selectOption" value="">Choose...</span>
			<span class="selectOption" value="Draenei">Draenei</span>
			<span class="selectOption" value="Dwarf">Dwarf</span>
			<span class="selectOption" value="Gnome">Gnome</span>
			<span class="selectOption" value="Human">Human</span>
			<span class="selectOption" value="Night Elf">Night Elf</span>
			<span class="selectOption" value="Worgen">Worgen</span>
			<span class="selectOption" value="Blood Elf">Blood Elf</span>
			<span class="selectOption" value="Goblin">Goblin</span>
			<span class="selectOption" value="Orc">Orc</span>
			<span class="selectOption" value="Tauren">Tauren</span>
			<span class="selectOption" value="Troll">Troll</span>
			<span class="selectOption" value="Undead">Undead</span>
			<span class="selectOption" value="Pandaren">Pandaren</span>
		</div>
	</div>
	
</div>

<input type="hidden" id="selectedRace" name="selectedRace" value="">

<div class="spacer"></div>

<div id="specTalentsSelectionText" class="centeredHeader specTalents">Choose Specialization &amp; Talents</div>

<div id="specTalentsSelectionContainer" class="">

	<!-- Specs -->

	<div id="specSelection" class="talentWindowRow specsRow">
	
		<div class="specTalentRowLabel">Spec</div>
		
		<!-- Spec 1 -->
		
		<div id="spec1" class="specTalent">
		
			<div class="talentIcon">
				<span class="DeathKnightSelected"><img src="images/_deathknight/<?php classValues($classes['Death Knight']['specs'], 0); ?>.jpg"></span>
				<span class="DruidSelected"><img src="images/_druid/<?php classValues($classes['Druid']['specs'], 0); ?>.jpg"></span>
				<span class="HunterSelected"><img src="images/_hunter/<?php classValues($classes['Hunter']['specs'], 0); ?>.jpg"></span>
				<span class="MageSelected"><img src="images/_mage/<?php classValues($classes['Mage']['specs'], 0); ?>.jpg"></span>
				<span class="MonkSelected"><img src="images/_monk/<?php classValues($classes['Monk']['specs'], 0); ?>.jpg"></span>
				<span class="PaladinSelected"><img src="images/_paladin/<?php classValues($classes['Paladin']['specs'], 0); ?>.jpg"></span>
				<span class="PriestSelected"><img src="images/_priest/<?php classValues($classes['Priest']['specs'], 0); ?>.jpg"></span>
				<span class="RogueSelected"><img src="images/_rogue/<?php classValues($classes['Rogue']['specs'], 0); ?>.jpg"></span>
				<span class="ShamanSelected"><img src="images/_shaman/<?php classValues($classes['Shaman']['specs'], 0); ?>.jpg"></span>
				<span class="WarlockSelected"><img src="images/_warlock/<?php classValues($classes['Warlock']['specs'], 0); ?>.jpg"></span>
				<span class="WarriorSelected"><img src="images/_warrior/<?php classValues($classes['Warrior']['specs'], 0); ?>.jpg"></span>
			</div>
			
			<div class="talentText">
				<span class="DeathKnightSelected"><?php classKeys($classes['Death Knight']['specs'], 0); ?></span>
				<span class="DruidSelected"><?php classKeys($classes['Druid']['specs'], 0); ?></span>
				<span class="HunterSelected"><?php classKeys($classes['Hunter']['specs'], 0); ?></span>
				<span class="MageSelected"><?php classKeys($classes['Mage']['specs'], 0); ?></span>
				<span class="MonkSelected"><?php classKeys($classes['Monk']['specs'], 0); ?></span>
				<span class="PaladinSelected"><?php classKeys($classes['Paladin']['specs'], 0); ?></span>
				<span class="PriestSelected"><?php classKeys($classes['Priest']['specs'], 0); ?></span>
				<span class="RogueSelected"><?php classKeys($classes['Rogue']['specs'], 0); ?></span>
				<span class="ShamanSelected"><?php classKeys($classes['Shaman']['specs'], 0); ?></span>
				<span class="WarlockSelected"><?php classKeys($classes['Warlock']['specs'], 0); ?></span>
				<span class="WarriorSelected"><?php classKeys($classes['Warrior']['specs'], 0); ?></span>
			</div>
			
		</div>
		
		<!-- Spec 2 -->
		
		<div id="spec2" class="specTalent">
		
			<div class="talentIcon">
				<span class="DeathKnightSelected"><img src="images/_deathknight/<?php classValues($classes['Death Knight']['specs'], 1); ?>.jpg"></span>
				<span class="DruidSelected"><img src="images/_druid/<?php classValues($classes['Druid']['specs'], 1); ?>.jpg"></span>
				<span class="HunterSelected"><img src="images/_hunter/<?php classValues($classes['Hunter']['specs'], 1); ?>.jpg"></span>
				<span class="MageSelected"><img src="images/_mage/<?php classValues($classes['Mage']['specs'], 1); ?>.jpg"></span>
				<span class="MonkSelected"><img src="images/_monk/<?php classValues($classes['Monk']['specs'], 1); ?>.jpg"></span>
				<span class="PaladinSelected"><img src="images/_paladin/<?php classValues($classes['Paladin']['specs'], 1); ?>.jpg"></span>
				<span class="PriestSelected"><img src="images/_priest/<?php classValues($classes['Priest']['specs'], 1); ?>.jpg"></span>
				<span class="RogueSelected"><img src="images/_rogue/<?php classValues($classes['Rogue']['specs'], 1); ?>.jpg"></span>
				<span class="ShamanSelected"><img src="images/_shaman/<?php classValues($classes['Shaman']['specs'], 1); ?>.jpg"></span>
				<span class="WarlockSelected"><img src="images/_warlock/<?php classValues($classes['Warlock']['specs'], 1); ?>.jpg"></span>
				<span class="WarriorSelected"><img src="images/_warrior/<?php classValues($classes['Warrior']['specs'], 1); ?>.jpg"></span>
			</div>
			
			<div class="talentText">
				<span class="DeathKnightSelected"><?php classKeys($classes['Death Knight']['specs'], 1); ?></span>
				<span class="DruidSelected"><?php classKeys($classes['Druid']['specs'], 1); ?></span>
				<span class="HunterSelected"><?php classKeys($classes['Hunter']['specs'], 1); ?></span>
				<span class="MageSelected"><?php classKeys($classes['Mage']['specs'], 1); ?></span>
				<span class="MonkSelected"><?php classKeys($classes['Monk']['specs'], 1); ?></span>
				<span class="PaladinSelected"><?php classKeys($classes['Paladin']['specs'], 1); ?></span>
				<span class="PriestSelected"><?php classKeys($classes['Priest']['specs'], 1); ?></span>
				<span class="RogueSelected"><?php classKeys($classes['Rogue']['specs'], 1); ?></span>
				<span class="ShamanSelected"><?php classKeys($classes['Shaman']['specs'], 1); ?></span>
				<span class="WarlockSelected"><?php classKeys($classes['Warlock']['specs'], 1); ?></span>
				<span class="WarriorSelected"><?php classKeys($classes['Warrior']['specs'], 1); ?></span>
			</div>
			
		</div>
		
		<!-- Spec 3 -->
		
		<div id="spec3" class="specTalent">
		
			<div class="talentIcon">
				<span class="DeathKnightSelected"><img src="images/_deathknight/<?php classValues($classes['Death Knight']['specs'], 2); ?>.jpg"></span>
				<span class="DruidSelected"><img src="images/_druid/<?php classValues($classes['Druid']['specs'], 2); ?>.jpg"></span>
				<span class="HunterSelected"><img src="images/_hunter/<?php classValues($classes['Hunter']['specs'], 2); ?>.jpg"></span>
				<span class="MageSelected"><img src="images/_mage/<?php classValues($classes['Mage']['specs'], 2); ?>.jpg"></span>
				<span class="MonkSelected"><img src="images/_monk/<?php classValues($classes['Monk']['specs'], 2); ?>.jpg"></span>
				<span class="PaladinSelected"><img src="images/_paladin/<?php classValues($classes['Paladin']['specs'], 2); ?>.jpg"></span>
				<span class="PriestSelected"><img src="images/_priest/<?php classValues($classes['Priest']['specs'], 2); ?>.jpg"></span>
				<span class="RogueSelected"><img src="images/_rogue/<?php classValues($classes['Rogue']['specs'], 2); ?>.jpg"></span>
				<span class="ShamanSelected"><img src="images/_shaman/<?php classValues($classes['Shaman']['specs'], 2); ?>.jpg"></span>
				<span class="WarlockSelected"><img src="images/_warlock/<?php classValues($classes['Warlock']['specs'], 2); ?>.jpg"></span>
				<span class="WarriorSelected"><img src="images/_warrior/<?php classValues($classes['Warrior']['specs'], 2); ?>.jpg"></span>
			</div>
			
			<div class="talentText">
				<span class="DeathKnightSelected"><?php classKeys($classes['Death Knight']['specs'], 2); ?></span>
				<span class="DruidSelected"><?php classKeys($classes['Druid']['specs'], 2); ?></span>
				<span class="HunterSelected"><?php classKeys($classes['Hunter']['specs'], 2); ?></span>
				<span class="MageSelected"><?php classKeys($classes['Mage']['specs'], 2); ?></span>
				<span class="MonkSelected"><?php classKeys($classes['Monk']['specs'], 2); ?></span>
				<span class="PaladinSelected"><?php classKeys($classes['Paladin']['specs'], 2); ?></span>
				<span class="PriestSelected"><?php classKeys($classes['Priest']['specs'], 2); ?></span>
				<span class="RogueSelected"><?php classKeys($classes['Rogue']['specs'], 2); ?></span>
				<span class="ShamanSelected"><?php classKeys($classes['Shaman']['specs'], 2); ?></span>
				<span class="WarlockSelected"><?php classKeys($classes['Warlock']['specs'], 2); ?></span>
				<span class="WarriorSelected"><?php classKeys($classes['Warrior']['specs'], 2); ?></span>
			</div>
			
		</div>
		
		<!-- Spec 4 -->
		
		<div id="spec4" class="specTalent">
		
			<div class="talentIcon">
				<span class="DruidSelected"><img src="images/_druid/<?php classValues($classes['Druid']['specs'], 3); ?>.jpg"></span>
			</div>
			
			<div class="talentText">
				<span class="DruidSelected"><?php classKeys($classes['Druid']['specs'], 3); ?></span>
			</div>
		
		</div>
	
	</div>
	
	<!-- Level 15 talents -->
	
	<div id="lev15Talents" class="talentWindowRow">
	
		<div class="specTalentRowLabel">15</div>
		
		<!-- Talent 1 -->
		
		<div id="lev15Talent1" class="specTalent">
		
			<div class="talentIcon">
				<span class="DeathKnightSelected"><img src="images/_deathknight/_talents/_lev15/<?php classValues($classes['Death Knight']['talents']['lev15'], 0); ?>.jpg"></span>
				<span class="DruidSelected"><img src="images/_druid/_talents/_lev15/<?php classValues($classes['Druid']['talents']['lev15'], 0); ?>.jpg"></span>
				<span class="HunterSelected"><img src="images/_hunter/_talents/_lev15/<?php classValues($classes['Hunter']['talents']['lev15'], 0); ?>.jpg"></span>
				<span class="MageSelected"><img src="images/_mage/_talents/_lev15/<?php classValues($classes['Mage']['talents']['lev15'], 0); ?>.jpg"></span>
				<span class="MonkSelected"><img src="images/_monk/_talents/_lev15/<?php classValues($classes['Monk']['talents']['lev15'], 0); ?>.jpg"></span>
				<span class="PaladinSelected"><img src="images/_paladin/_talents/_lev15/<?php classValues($classes['Paladin']['talents']['lev15'], 0); ?>.jpg"></span>
				<span class="PriestSelected"><img src="images/_priest/_talents/_lev15/<?php classValues($classes['Priest']['talents']['lev15'], 0); ?>.jpg"></span>
				<span class="RogueSelected"><img src="images/_rogue/_talents/_lev15/<?php classValues($classes['Rogue']['talents']['lev15'], 0); ?>.jpg"></span>
				<span class="ShamanSelected"><img src="images/_shaman/_talents/_lev15/<?php classValues($classes['Shaman']['talents']['lev15'], 0); ?>.jpg"></span>
				<span class="WarlockSelected"><img src="images/_warlock/_talents/_lev15/<?php classValues($classes['Warlock']['talents']['lev15'], 0); ?>.jpg"></span>
				<span class="WarriorSelected"><img src="images/_warrior/_talents/_lev15/<?php classValues($classes['Warrior']['talents']['lev15'], 0); ?>.jpg"></span>
			</div>
			
			<div class="talentText">
				<span class="DeathKnightSelected"><?php classKeys($classes['Death Knight']['talents']['lev15'], 0); ?></span>
				<span class="DruidSelected"><?php classKeys($classes['Druid']['talents']['lev15'], 0); ?></span>
				<span class="HunterSelected"><?php classKeys($classes['Hunter']['talents']['lev15'], 0); ?></span>
				<span class="MageSelected"><?php classKeys($classes['Mage']['talents']['lev15'], 0); ?></span>
				<span class="MonkSelected"><?php classKeys($classes['Monk']['talents']['lev15'], 0); ?></span>
				<span class="PaladinSelected"><?php classKeys($classes['Paladin']['talents']['lev15'], 0); ?></span>
				<span class="PriestSelected"><?php classKeys($classes['Priest']['talents']['lev15'], 0); ?></span>
				<span class="RogueSelected"><?php classKeys($classes['Rogue']['talents']['lev15'], 0); ?></span>
				<span class="ShamanSelected"><?php classKeys($classes['Shaman']['talents']['lev15'], 0); ?></span>
				<span class="WarlockSelected"><?php classKeys($classes['Warlock']['talents']['lev15'], 0); ?></span>
				<span class="WarriorSelected"><?php classKeys($classes['Warrior']['talents']['lev15'], 0); ?></span>
			</div>
			
		</div>
		
		<!-- Talent 2 -->
		
		<div id="lev15Talent2" class="specTalent">
		
			<div class="talentIcon">
				<span class="DeathKnightSelected"><img src="images/_deathknight/_talents/_lev15/<?php classValues($classes['Death Knight']['talents']['lev15'], 1); ?>.jpg"></span>
				<span class="DruidSelected"><img src="images/_druid/_talents/_lev15/<?php classValues($classes['Druid']['talents']['lev15'], 1); ?>.jpg"></span>
				<span class="HunterSelected"><img src="images/_hunter/_talents/_lev15/<?php classValues($classes['Hunter']['talents']['lev15'], 1); ?>.jpg"></span>
				<span class="MageSelected"><img src="images/_mage/_talents/_lev15/<?php classValues($classes['Mage']['talents']['lev15'], 1); ?>.jpg"></span>
				<span class="MonkSelected"><img src="images/_monk/_talents/_lev15/<?php classValues($classes['Monk']['talents']['lev15'], 1); ?>.jpg"></span>
				<span class="PaladinSelected"><img src="images/_paladin/_talents/_lev15/<?php classValues($classes['Paladin']['talents']['lev15'], 1); ?>.jpg"></span>
				<span class="PriestSelected"><img src="images/_priest/_talents/_lev15/<?php classValues($classes['Priest']['talents']['lev15'], 1); ?>.jpg"></span>
				<span class="RogueSelected"><img src="images/_rogue/_talents/_lev15/<?php classValues($classes['Rogue']['talents']['lev15'], 1); ?>.jpg"></span>
				<span class="ShamanSelected"><img src="images/_shaman/_talents/_lev15/<?php classValues($classes['Shaman']['talents']['lev15'], 1); ?>.jpg"></span>
				<span class="WarlockSelected"><img src="images/_warlock/_talents/_lev15/<?php classValues($classes['Warlock']['talents']['lev15'], 1); ?>.jpg"></span>
				<span class="WarriorSelected"><img src="images/_warrior/_talents/_lev15/<?php classValues($classes['Warrior']['talents']['lev15'], 1); ?>.jpg"></span>
			</div>
			
			<div class="talentText">
				<span class="DeathKnightSelected"><?php classKeys($classes['Death Knight']['talents']['lev15'], 1); ?></span>
				<span class="DruidSelected"><?php classKeys($classes['Druid']['talents']['lev15'], 1); ?></span>
				<span class="HunterSelected"><?php classKeys($classes['Hunter']['talents']['lev15'], 1); ?></span>
				<span class="MageSelected"><?php classKeys($classes['Mage']['talents']['lev15'], 1); ?></span>
				<span class="MonkSelected"><?php classKeys($classes['Monk']['talents']['lev15'], 1); ?></span>
				<span class="PaladinSelected"><?php classKeys($classes['Paladin']['talents']['lev15'], 1); ?></span>
				<span class="PriestSelected"><?php classKeys($classes['Priest']['talents']['lev15'], 1); ?></span>
				<span class="RogueSelected"><?php classKeys($classes['Rogue']['talents']['lev15'], 1); ?></span>
				<span class="ShamanSelected"><?php classKeys($classes['Shaman']['talents']['lev15'], 1); ?></span>
				<span class="WarlockSelected"><?php classKeys($classes['Warlock']['talents']['lev15'], 1); ?></span>
				<span class="WarriorSelected"><?php classKeys($classes['Warrior']['talents']['lev15'], 1); ?></span>
			</div>
			
		</div>
		
		<!-- Talent 3 -->
		
		<div id="lev15Talent3" class="specTalent">
		
			<div class="talentIcon">
				<span class="DeathKnightSelected"><img src="images/_deathknight/_talents/_lev15/<?php classValues($classes['Death Knight']['talents']['lev15'], 2); ?>.jpg"></span>
				<span class="DruidSelected"><img src="images/_druid/_talents/_lev15/<?php classValues($classes['Druid']['talents']['lev15'], 2); ?>.jpg"></span>
				<span class="HunterSelected"><img src="images/_hunter/_talents/_lev15/<?php classValues($classes['Hunter']['talents']['lev15'], 2); ?>.jpg"></span>
				<span class="MageSelected"><img src="images/_mage/_talents/_lev15/<?php classValues($classes['Mage']['talents']['lev15'], 2); ?>.jpg"></span>
				<span class="MonkSelected"><img src="images/_monk/_talents/_lev15/<?php classValues($classes['Monk']['talents']['lev15'], 2); ?>.jpg"></span>
				<span class="PaladinSelected"><img src="images/_paladin/_talents/_lev15/<?php classValues($classes['Paladin']['talents']['lev15'], 2); ?>.jpg"></span>
				<span class="PriestSelected"><img src="images/_priest/_talents/_lev15/<?php classValues($classes['Priest']['talents']['lev15'], 2); ?>.jpg"></span>
				<span class="RogueSelected"><img src="images/_rogue/_talents/_lev15/<?php classValues($classes['Rogue']['talents']['lev15'], 2); ?>.jpg"></span>
				<span class="ShamanSelected"><img src="images/_shaman/_talents/_lev15/<?php classValues($classes['Shaman']['talents']['lev15'], 2); ?>.jpg"></span>
				<span class="WarlockSelected"><img src="images/_warlock/_talents/_lev15/<?php classValues($classes['Warlock']['talents']['lev15'], 2); ?>.jpg"></span>
				<span class="WarriorSelected"><img src="images/_warrior/_talents/_lev15/<?php classValues($classes['Warrior']['talents']['lev15'], 2); ?>.jpg"></span>
			</div>
			
			<div class="talentText">
				<span class="DeathKnightSelected"><?php classKeys($classes['Death Knight']['talents']['lev15'], 2); ?></span>
				<span class="DruidSelected"><?php classKeys($classes['Druid']['talents']['lev15'], 2); ?></span>
				<span class="HunterSelected"><?php classKeys($classes['Hunter']['talents']['lev15'], 2); ?></span>
				<span class="MageSelected"><?php classKeys($classes['Mage']['talents']['lev15'], 2); ?></span>
				<span class="MonkSelected"><?php classKeys($classes['Monk']['talents']['lev15'], 2); ?></span>
				<span class="PaladinSelected"><?php classKeys($classes['Paladin']['talents']['lev15'], 2); ?></span>
				<span class="PriestSelected"><?php classKeys($classes['Priest']['talents']['lev15'], 2); ?></span>
				<span class="RogueSelected"><?php classKeys($classes['Rogue']['talents']['lev15'], 2); ?></span>
				<span class="ShamanSelected"><?php classKeys($classes['Shaman']['talents']['lev15'], 2); ?></span>
				<span class="WarlockSelected"><?php classKeys($classes['Warlock']['talents']['lev15'], 2); ?></span>
				<span class="WarriorSelected"><?php classKeys($classes['Warrior']['talents']['lev15'], 2); ?></span>
			</div>
			
		</div>
	
	</div>
	
	<!-- Level 30 talents -->
	
	<div id="lev30Talents" class="talentWindowRow">
	
		<div class="specTalentRowLabel">30</div>
		
		<!-- Talent 1 -->
		
		<div id="lev30Talent1" class="specTalent">
			
			<div class="talentIcon">
				<span class="DeathKnightSelected"><img src="images/_deathknight/_talents/_lev30/<?php classValues($classes['Death Knight']['talents']['lev30'], 0); ?>.jpg"></span>
				<span class="DruidSelected"><img src="images/_druid/_talents/_lev30/<?php classValues($classes['Druid']['talents']['lev30'], 0); ?>.jpg"></span>
				<span class="HunterSelected"><img src="images/_hunter/_talents/_lev30/<?php classValues($classes['Hunter']['talents']['lev30'], 0); ?>.jpg"></span>
				<span class="MageSelected"><img src="images/_mage/_talents/_lev30/<?php classValues($classes['Mage']['talents']['lev30'], 0); ?>.jpg"></span>
				<span class="MonkSelected"><img src="images/_monk/_talents/_lev30/<?php classValues($classes['Monk']['talents']['lev30'], 0); ?>.jpg"></span>
				<span class="PaladinSelected"><img src="images/_paladin/_talents/_lev30/<?php classValues($classes['Paladin']['talents']['lev30'], 0); ?>.jpg"></span>
				<span class="PriestSelected"><img src="images/_priest/_talents/_lev30/<?php classValues($classes['Priest']['talents']['lev30'], 0); ?>.jpg"></span>
				<span class="RogueSelected"><img src="images/_rogue/_talents/_lev30/<?php classValues($classes['Rogue']['talents']['lev30'], 0); ?>.jpg"></span>
				<span class="ShamanSelected"><img src="images/_shaman/_talents/_lev30/<?php classValues($classes['Shaman']['talents']['lev30'], 0); ?>.jpg"></span>
				<span class="WarlockSelected"><img src="images/_warlock/_talents/_lev30/<?php classValues($classes['Warlock']['talents']['lev30'], 0); ?>.jpg"></span>
				<span class="WarriorSelected"><img src="images/_warrior/_talents/_lev30/<?php classValues($classes['Warrior']['talents']['lev30'], 0); ?>.jpg"></span>
			</div>
			
			<div class="talentText">
				<span class="DeathKnightSelected"><?php classKeys($classes['Death Knight']['talents']['lev30'], 0); ?></span>
				<span class="DruidSelected"><?php classKeys($classes['Druid']['talents']['lev30'], 0); ?></span>
				<span class="HunterSelected"><?php classKeys($classes['Hunter']['talents']['lev30'], 0); ?></span>
				<span class="MageSelected"><?php classKeys($classes['Mage']['talents']['lev30'], 0); ?></span>
				<span class="MonkSelected"><?php classKeys($classes['Monk']['talents']['lev30'], 0); ?></span>
				<span class="PaladinSelected"><?php classKeys($classes['Paladin']['talents']['lev30'], 0); ?></span>
				<span class="PriestSelected"><?php classKeys($classes['Priest']['talents']['lev30'], 0); ?></span>
				<span class="RogueSelected"><?php classKeys($classes['Rogue']['talents']['lev30'], 0); ?></span>
				<span class="ShamanSelected"><?php classKeys($classes['Shaman']['talents']['lev30'], 0); ?></span>
				<span class="WarlockSelected"><?php classKeys($classes['Warlock']['talents']['lev30'], 0); ?></span>
				<span class="WarriorSelected"><?php classKeys($classes['Warrior']['talents']['lev30'], 0); ?></span>
			</div>
			
		</div>
		
		<!-- Talent 2 -->
		
		<div id="lev30Talent2" class="specTalent">
			
			<div class="talentIcon">
				<span class="DeathKnightSelected"><img src="images/_deathknight/_talents/_lev30/<?php classValues($classes['Death Knight']['talents']['lev30'], 1); ?>.jpg"></span>
				<span class="DruidSelected"><img src="images/_druid/_talents/_lev30/<?php classValues($classes['Druid']['talents']['lev30'], 1); ?>.jpg"></span>
				<span class="HunterSelected"><img src="images/_hunter/_talents/_lev30/<?php classValues($classes['Hunter']['talents']['lev30'], 1); ?>.jpg"></span>
				<span class="MageSelected"><img src="images/_mage/_talents/_lev30/<?php classValues($classes['Mage']['talents']['lev30'], 1); ?>.jpg"></span>
				<span class="MonkSelected"><img src="images/_monk/_talents/_lev30/<?php classValues($classes['Monk']['talents']['lev30'], 1); ?>.jpg"></span>
				<span class="PaladinSelected"><img src="images/_paladin/_talents/_lev30/<?php classValues($classes['Paladin']['talents']['lev30'], 1); ?>.jpg"></span>
				<span class="PriestSelected"><img src="images/_priest/_talents/_lev30/<?php classValues($classes['Priest']['talents']['lev30'], 1); ?>.jpg"></span>
				<span class="RogueSelected"><img src="images/_rogue/_talents/_lev30/<?php classValues($classes['Rogue']['talents']['lev30'], 1); ?>.jpg"></span>
				<span class="ShamanSelected"><img src="images/_shaman/_talents/_lev30/<?php classValues($classes['Shaman']['talents']['lev30'], 1); ?>.jpg"></span>
				<span class="WarlockSelected"><img src="images/_warlock/_talents/_lev30/<?php classValues($classes['Warlock']['talents']['lev30'], 1); ?>.jpg"></span>
				<span class="WarriorSelected"><img src="images/_warrior/_talents/_lev30/<?php classValues($classes['Warrior']['talents']['lev30'], 1); ?>.jpg"></span>
			</div>
			
			<div class="talentText">
				<span class="DeathKnightSelected"><?php classKeys($classes['Death Knight']['talents']['lev30'], 1); ?></span>
				<span class="DruidSelected"><?php classKeys($classes['Druid']['talents']['lev30'], 1); ?></span>
				<span class="HunterSelected"><?php classKeys($classes['Hunter']['talents']['lev30'], 1); ?></span>
				<span class="MageSelected"><?php classKeys($classes['Mage']['talents']['lev30'], 1); ?></span>
				<span class="MonkSelected"><?php classKeys($classes['Monk']['talents']['lev30'], 1); ?></span>
				<span class="PaladinSelected"><?php classKeys($classes['Paladin']['talents']['lev30'], 1); ?></span>
				<span class="PriestSelected"><?php classKeys($classes['Priest']['talents']['lev30'], 1); ?></span>
				<span class="RogueSelected"><?php classKeys($classes['Rogue']['talents']['lev30'], 1); ?></span>
				<span class="ShamanSelected"><?php classKeys($classes['Shaman']['talents']['lev30'], 1); ?></span>
				<span class="WarlockSelected"><?php classKeys($classes['Warlock']['talents']['lev30'], 1); ?></span>
				<span class="WarriorSelected"><?php classKeys($classes['Warrior']['talents']['lev30'], 1); ?></span>
			</div>
			
		</div>
		
		<!-- Talent 3 -->
		
		<div id="lev30Talent3" class="specTalent">
			
			<div class="talentIcon">
				<span class="DeathKnightSelected"><img src="images/_deathknight/_talents/_lev30/<?php classValues($classes['Death Knight']['talents']['lev30'], 2); ?>.jpg"></span>
				<span class="DruidSelected"><img src="images/_druid/_talents/_lev30/<?php classValues($classes['Druid']['talents']['lev30'], 2); ?>.jpg"></span>
				<span class="HunterSelected"><img src="images/_hunter/_talents/_lev30/<?php classValues($classes['Hunter']['talents']['lev30'], 2); ?>.jpg"></span>
				<span class="MageSelected"><img src="images/_mage/_talents/_lev30/<?php classValues($classes['Mage']['talents']['lev30'], 2); ?>.jpg"></span>
				<span class="MonkSelected"><img src="images/_monk/_talents/_lev30/<?php classValues($classes['Monk']['talents']['lev30'], 2); ?>.jpg"></span>
				<span class="PaladinSelected"><img src="images/_paladin/_talents/_lev30/<?php classValues($classes['Paladin']['talents']['lev30'], 2); ?>.jpg"></span>
				<span class="PriestSelected"><img src="images/_priest/_talents/_lev30/<?php classValues($classes['Priest']['talents']['lev30'], 2); ?>.jpg"></span>
				<span class="RogueSelected"><img src="images/_rogue/_talents/_lev30/<?php classValues($classes['Rogue']['talents']['lev30'], 2); ?>.jpg"></span>
				<span class="ShamanSelected"><img src="images/_shaman/_talents/_lev30/<?php classValues($classes['Shaman']['talents']['lev30'], 2); ?>.jpg"></span>
				<span class="WarlockSelected"><img src="images/_warlock/_talents/_lev30/<?php classValues($classes['Warlock']['talents']['lev30'], 2); ?>.jpg"></span>
				<span class="WarriorSelected"><img src="images/_warrior/_talents/_lev30/<?php classValues($classes['Warrior']['talents']['lev30'], 2); ?>.jpg"></span>
			</div>
			
			<div class="talentText">
				<span class="DeathKnightSelected"><?php classKeys($classes['Death Knight']['talents']['lev30'], 2); ?></span>
				<span class="DruidSelected"><?php classKeys($classes['Druid']['talents']['lev30'], 2); ?></span>
				<span class="HunterSelected"><?php classKeys($classes['Hunter']['talents']['lev30'], 2); ?></span>
				<span class="MageSelected"><?php classKeys($classes['Mage']['talents']['lev30'], 2); ?></span>
				<span class="MonkSelected"><?php classKeys($classes['Monk']['talents']['lev30'], 2); ?></span>
				<span class="PaladinSelected"><?php classKeys($classes['Paladin']['talents']['lev30'], 2); ?></span>
				<span class="PriestSelected"><?php classKeys($classes['Priest']['talents']['lev30'], 2); ?></span>
				<span class="RogueSelected"><?php classKeys($classes['Rogue']['talents']['lev30'], 2); ?></span>
				<span class="ShamanSelected"><?php classKeys($classes['Shaman']['talents']['lev30'], 2); ?></span>
				<span class="WarlockSelected"><?php classKeys($classes['Warlock']['talents']['lev30'], 2); ?></span>
				<span class="WarriorSelected"><?php classKeys($classes['Warrior']['talents']['lev30'], 2); ?></span>
			</div>
			
		</div>
	
	</div>
	
	<!-- Lev 45 talents -->
	
	<div id="lev45Talents" class="talentWindowRow">
	
		<div class="specTalentRowLabel">45</div>
		
		<!-- Talent 1 -->
		
		<div id="lev45Talent1" class="specTalent">
			
			<div class="talentIcon">
				<span class="DeathKnightSelected"><img src="images/_deathknight/_talents/_lev45/<?php classValues($classes['Death Knight']['talents']['lev45'], 0); ?>.jpg"></span>
				<span class="DruidSelected"><img src="images/_druid/_talents/_lev45/<?php classValues($classes['Druid']['talents']['lev45'], 0); ?>.jpg"></span>
				<span class="HunterSelected"><img src="images/_hunter/_talents/_lev45/<?php classValues($classes['Hunter']['talents']['lev45'], 0); ?>.jpg"></span>
				<span class="MageSelected"><img src="images/_mage/_talents/_lev45/<?php classValues($classes['Mage']['talents']['lev45'], 0); ?>.jpg"></span>
				<span class="MonkSelected"><img src="images/_monk/_talents/_lev45/<?php classValues($classes['Monk']['talents']['lev45'], 0); ?>.jpg"></span>
				<span class="PaladinSelected"><img src="images/_paladin/_talents/_lev45/<?php classValues($classes['Paladin']['talents']['lev45'], 0); ?>.jpg"></span>
				<span class="PriestSelected"><img src="images/_priest/_talents/_lev45/<?php classValues($classes['Priest']['talents']['lev45'], 0); ?>.jpg"></span>
				<span class="RogueSelected"><img src="images/_rogue/_talents/_lev45/<?php classValues($classes['Rogue']['talents']['lev45'], 0); ?>.jpg"></span>
				<span class="ShamanSelected"><img src="images/_shaman/_talents/_lev45/<?php classValues($classes['Shaman']['talents']['lev45'], 0); ?>.jpg"></span>
				<span class="WarlockSelected"><img src="images/_warlock/_talents/_lev45/<?php classValues($classes['Warlock']['talents']['lev45'], 0); ?>.jpg"></span>
				<span class="WarriorSelected"><img src="images/_warrior/_talents/_lev45/<?php classValues($classes['Warrior']['talents']['lev45'], 0); ?>.jpg"></span>
			</div>
			
			<div class="talentText">
				<span class="DeathKnightSelected"><?php classKeys($classes['Death Knight']['talents']['lev45'], 0); ?></span>
				<span class="DruidSelected"><?php classKeys($classes['Druid']['talents']['lev45'], 0); ?></span>
				<span class="HunterSelected"><?php classKeys($classes['Hunter']['talents']['lev45'], 0); ?></span>
				<span class="MageSelected"><?php classKeys($classes['Mage']['talents']['lev45'], 0); ?></span>
				<span class="MonkSelected"><?php classKeys($classes['Monk']['talents']['lev45'], 0); ?></span>
				<span class="PaladinSelected"><?php classKeys($classes['Paladin']['talents']['lev45'], 0); ?></span>
				<span class="PriestSelected"><?php classKeys($classes['Priest']['talents']['lev45'], 0); ?></span>
				<span class="RogueSelected"><?php classKeys($classes['Rogue']['talents']['lev45'], 0); ?></span>
				<span class="ShamanSelected"><?php classKeys($classes['Shaman']['talents']['lev45'], 0); ?></span>
				<span class="WarlockSelected"><?php classKeys($classes['Warlock']['talents']['lev45'], 0); ?></span>
				<span class="WarriorSelected"><?php classKeys($classes['Warrior']['talents']['lev45'], 0); ?></span>
			</div>
			
		</div>
		
		<!-- Talent 2 -->
		
		<div id="lev45Talent2" class="specTalent">
			
			<div class="talentIcon">
				<span class="DeathKnightSelected"><img src="images/_deathknight/_talents/_lev45/<?php classValues($classes['Death Knight']['talents']['lev45'], 1); ?>.jpg"></span>
				<span class="DruidSelected"><img src="images/_druid/_talents/_lev45/<?php classValues($classes['Druid']['talents']['lev45'], 1); ?>.jpg"></span>
				<span class="HunterSelected"><img src="images/_hunter/_talents/_lev45/<?php classValues($classes['Hunter']['talents']['lev45'], 1); ?>.jpg"></span>
				<span class="MageSelected"><img src="images/_mage/_talents/_lev45/<?php classValues($classes['Mage']['talents']['lev45'], 1); ?>.jpg"></span>
				<span class="MonkSelected"><img src="images/_monk/_talents/_lev45/<?php classValues($classes['Monk']['talents']['lev45'], 1); ?>.jpg"></span>
				<span class="PaladinSelected"><img src="images/_paladin/_talents/_lev45/<?php classValues($classes['Paladin']['talents']['lev45'], 1); ?>.jpg"></span>
				<span class="PriestSelected"><img src="images/_priest/_talents/_lev45/<?php classValues($classes['Priest']['talents']['lev45'], 1); ?>.jpg"></span>
				<span class="RogueSelected"><img src="images/_rogue/_talents/_lev45/<?php classValues($classes['Rogue']['talents']['lev45'], 1); ?>.jpg"></span>
				<span class="ShamanSelected"><img src="images/_shaman/_talents/_lev45/<?php classValues($classes['Shaman']['talents']['lev45'], 1); ?>.jpg"></span>
				<span class="WarlockSelected"><img src="images/_warlock/_talents/_lev45/<?php classValues($classes['Warlock']['talents']['lev45'], 1); ?>.jpg"></span>
				<span class="WarriorSelected"><img src="images/_warrior/_talents/_lev45/<?php classValues($classes['Warrior']['talents']['lev45'], 1); ?>.jpg"></span>
			</div>
			
			<div class="talentText">
				<span class="DeathKnightSelected"><?php classKeys($classes['Death Knight']['talents']['lev45'], 1); ?></span>
				<span class="DruidSelected"><?php classKeys($classes['Druid']['talents']['lev45'], 1); ?></span>
				<span class="HunterSelected"><?php classKeys($classes['Hunter']['talents']['lev45'], 1); ?></span>
				<span class="MageSelected"><?php classKeys($classes['Mage']['talents']['lev45'], 1); ?></span>
				<span class="MonkSelected"><?php classKeys($classes['Monk']['talents']['lev45'], 1); ?></span>
				<span class="PaladinSelected"><?php classKeys($classes['Paladin']['talents']['lev45'], 1); ?></span>
				<span class="PriestSelected"><?php classKeys($classes['Priest']['talents']['lev45'], 1); ?></span>
				<span class="RogueSelected"><?php classKeys($classes['Rogue']['talents']['lev45'], 1); ?></span>
				<span class="ShamanSelected"><?php classKeys($classes['Shaman']['talents']['lev45'], 1); ?></span>
				<span class="WarlockSelected"><?php classKeys($classes['Warlock']['talents']['lev45'], 1); ?></span>
				<span class="WarriorSelected"><?php classKeys($classes['Warrior']['talents']['lev45'], 1); ?></span>
			</div>
			
		</div>
		
		<!-- Talent 3 -->
		
		<div id="lev45Talent3" class="specTalent">
			
			<div class="talentIcon">
				<span class="DeathKnightSelected"><img src="images/_deathknight/_talents/_lev45/<?php classValues($classes['Death Knight']['talents']['lev45'], 2); ?>.jpg"></span>
				<span class="DruidSelected"><img src="images/_druid/_talents/_lev45/<?php classValues($classes['Druid']['talents']['lev45'], 2); ?>.jpg"></span>
				<span class="HunterSelected"><img src="images/_hunter/_talents/_lev45/<?php classValues($classes['Hunter']['talents']['lev45'], 2); ?>.jpg"></span>
				<span class="MageSelected"><img src="images/_mage/_talents/_lev45/<?php classValues($classes['Mage']['talents']['lev45'], 2); ?>.jpg"></span>
				<span class="MonkSelected"><img src="images/_monk/_talents/_lev45/<?php classValues($classes['Monk']['talents']['lev45'], 2); ?>.jpg"></span>
				<span class="PaladinSelected"><img src="images/_paladin/_talents/_lev45/<?php classValues($classes['Paladin']['talents']['lev45'], 2); ?>.jpg"></span>
				<span class="PriestSelected"><img src="images/_priest/_talents/_lev45/<?php classValues($classes['Priest']['talents']['lev45'], 2); ?>.jpg"></span>
				<span class="RogueSelected"><img src="images/_rogue/_talents/_lev45/<?php classValues($classes['Rogue']['talents']['lev45'], 2); ?>.jpg"></span>
				<span class="ShamanSelected"><img src="images/_shaman/_talents/_lev45/<?php classValues($classes['Shaman']['talents']['lev45'], 2); ?>.jpg"></span>
				<span class="WarlockSelected"><img src="images/_warlock/_talents/_lev45/<?php classValues($classes['Warlock']['talents']['lev45'], 2); ?>.jpg"></span>
				<span class="WarriorSelected"><img src="images/_warrior/_talents/_lev45/<?php classValues($classes['Warrior']['talents']['lev45'], 2); ?>.jpg"></span>
			</div>
			
			<div class="talentText">
				<span class="DeathKnightSelected"><?php classKeys($classes['Death Knight']['talents']['lev45'], 2); ?></span>
				<span class="DruidSelected"><?php classKeys($classes['Druid']['talents']['lev45'], 2); ?></span>
				<span class="HunterSelected"><?php classKeys($classes['Hunter']['talents']['lev45'], 2); ?></span>
				<span class="MageSelected"><?php classKeys($classes['Mage']['talents']['lev45'], 2); ?></span>
				<span class="MonkSelected"><?php classKeys($classes['Monk']['talents']['lev45'], 2); ?></span>
				<span class="PaladinSelected"><?php classKeys($classes['Paladin']['talents']['lev45'], 2); ?></span>
				<span class="PriestSelected"><?php classKeys($classes['Priest']['talents']['lev45'], 2); ?></span>
				<span class="RogueSelected"><?php classKeys($classes['Rogue']['talents']['lev45'], 2); ?></span>
				<span class="ShamanSelected"><?php classKeys($classes['Shaman']['talents']['lev45'], 2); ?></span>
				<span class="WarlockSelected"><?php classKeys($classes['Warlock']['talents']['lev45'], 2); ?></span>
				<span class="WarriorSelected"><?php classKeys($classes['Warrior']['talents']['lev45'], 2); ?></span>
			</div>
			
		</div>
	
	</div>
	
	<!-- Lev 60 talents -->
	
	<div id="lev60Talents" class="talentWindowRow">
	
		<div class="specTalentRowLabel">60</div>
		
		<!-- Talent 1 -->
		
		<div id="lev60Talent1" class="specTalent">
			
			<div class="talentIcon">
				<span class="DeathKnightSelected"><img src="images/_deathknight/_talents/_lev60/<?php classValues($classes['Death Knight']['talents']['lev60'], 0); ?>.jpg"></span>
				<span class="DruidSelected"><img src="images/_druid/_talents/_lev60/<?php classValues($classes['Druid']['talents']['lev60'], 0); ?>.jpg"></span>
				<span class="HunterSelected"><img src="images/_hunter/_talents/_lev60/<?php classValues($classes['Hunter']['talents']['lev60'], 0); ?>.jpg"></span>
				<span class="MageSelected"><img src="images/_mage/_talents/_lev60/<?php classValues($classes['Mage']['talents']['lev60'], 0); ?>.jpg"></span>
				<span class="MonkSelected"><img src="images/_monk/_talents/_lev60/<?php classValues($classes['Monk']['talents']['lev60'], 0); ?>.jpg"></span>
				<span class="PaladinSelected"><img src="images/_paladin/_talents/_lev60/<?php classValues($classes['Paladin']['talents']['lev60'], 0); ?>.jpg"></span>
				<span class="PriestSelected"><img src="images/_priest/_talents/_lev60/<?php classValues($classes['Priest']['talents']['lev60'], 0); ?>.jpg"></span>
				<span class="RogueSelected"><img src="images/_rogue/_talents/_lev60/<?php classValues($classes['Rogue']['talents']['lev60'], 0); ?>.jpg"></span>
				<span class="ShamanSelected"><img src="images/_shaman/_talents/_lev60/<?php classValues($classes['Shaman']['talents']['lev60'], 0); ?>.jpg"></span>
				<span class="WarlockSelected"><img src="images/_warlock/_talents/_lev60/<?php classValues($classes['Warlock']['talents']['lev60'], 0); ?>.jpg"></span>
				<span class="WarriorSelected"><img src="images/_warrior/_talents/_lev60/<?php classValues($classes['Warrior']['talents']['lev60'], 0); ?>.jpg"></span>
			</div>
			
			<div class="talentText">
				<span class="DeathKnightSelected"><?php classKeys($classes['Death Knight']['talents']['lev60'], 0); ?></span>
				<span class="DruidSelected"><?php classKeys($classes['Druid']['talents']['lev60'], 0); ?></span>
				<span class="HunterSelected"><?php classKeys($classes['Hunter']['talents']['lev60'], 0); ?></span>
				<span class="MageSelected"><?php classKeys($classes['Mage']['talents']['lev60'], 0); ?></span>
				<span class="MonkSelected"><?php classKeys($classes['Monk']['talents']['lev60'], 0); ?></span>
				<span class="PaladinSelected"><?php classKeys($classes['Paladin']['talents']['lev60'], 0); ?></span>
				<span class="PriestSelected"><?php classKeys($classes['Priest']['talents']['lev60'], 0); ?></span>
				<span class="RogueSelected"><?php classKeys($classes['Rogue']['talents']['lev60'], 0); ?></span>
				<span class="ShamanSelected"><?php classKeys($classes['Shaman']['talents']['lev60'], 0); ?></span>
				<span class="WarlockSelected"><?php classKeys($classes['Warlock']['talents']['lev60'], 0); ?></span>
				<span class="WarriorSelected"><?php classKeys($classes['Warrior']['talents']['lev60'], 0); ?></span>
			</div>
			
		</div>
		
		<!-- Talent 2 -->
		
		<div id="lev60Talent2" class="specTalent">
			
			<div class="talentIcon">
				<span class="DeathKnightSelected"><img src="images/_deathknight/_talents/_lev60/<?php classValues($classes['Death Knight']['talents']['lev60'], 1); ?>.jpg"></span>
				<span class="DruidSelected"><img src="images/_druid/_talents/_lev60/<?php classValues($classes['Druid']['talents']['lev60'], 1); ?>.jpg"></span>
				<span class="HunterSelected"><img src="images/_hunter/_talents/_lev60/<?php classValues($classes['Hunter']['talents']['lev60'], 1); ?>.jpg"></span>
				<span class="MageSelected"><img src="images/_mage/_talents/_lev60/<?php classValues($classes['Mage']['talents']['lev60'], 1); ?>.jpg"></span>
				<span class="MonkSelected"><img src="images/_monk/_talents/_lev60/<?php classValues($classes['Monk']['talents']['lev60'], 1); ?>.jpg"></span>
				<span class="PaladinSelected"><img src="images/_paladin/_talents/_lev60/<?php classValues($classes['Paladin']['talents']['lev60'], 1); ?>.jpg"></span>
				<span class="PriestSelected"><img src="images/_priest/_talents/_lev60/<?php classValues($classes['Priest']['talents']['lev60'], 1); ?>.jpg"></span>
				<span class="RogueSelected"><img src="images/_rogue/_talents/_lev60/<?php classValues($classes['Rogue']['talents']['lev60'], 1); ?>.jpg"></span>
				<span class="ShamanSelected"><img src="images/_shaman/_talents/_lev60/<?php classValues($classes['Shaman']['talents']['lev60'], 1); ?>.jpg"></span>
				<span class="WarlockSelected"><img src="images/_warlock/_talents/_lev60/<?php classValues($classes['Warlock']['talents']['lev60'], 1); ?>.jpg"></span>
				<span class="WarriorSelected"><img src="images/_warrior/_talents/_lev60/<?php classValues($classes['Warrior']['talents']['lev60'], 1); ?>.jpg"></span>
			</div>
			
			<div class="talentText">
				<span class="DeathKnightSelected"><?php classKeys($classes['Death Knight']['talents']['lev60'], 1); ?></span>
				<span class="DruidSelected"><?php classKeys($classes['Druid']['talents']['lev60'], 1); ?></span>
				<span class="HunterSelected"><?php classKeys($classes['Hunter']['talents']['lev60'], 1); ?></span>
				<span class="MageSelected"><?php classKeys($classes['Mage']['talents']['lev60'], 1); ?></span>
				<span class="MonkSelected"><?php classKeys($classes['Monk']['talents']['lev60'], 1); ?></span>
				<span class="PaladinSelected"><?php classKeys($classes['Paladin']['talents']['lev60'], 1); ?></span>
				<span class="PriestSelected"><?php classKeys($classes['Priest']['talents']['lev60'], 1); ?></span>
				<span class="RogueSelected"><?php classKeys($classes['Rogue']['talents']['lev60'], 1); ?></span>
				<span class="ShamanSelected"><?php classKeys($classes['Shaman']['talents']['lev60'], 1); ?></span>
				<span class="WarlockSelected"><?php classKeys($classes['Warlock']['talents']['lev60'], 1); ?></span>
				<span class="WarriorSelected"><?php classKeys($classes['Warrior']['talents']['lev60'], 1); ?></span>
			</div>
			
		</div>
		
		<!-- Talent 3 -->
		
		<div id="lev60Talent3" class="specTalent">
			
			<div class="talentIcon">
				<span class="DeathKnightSelected"><img src="images/_deathknight/_talents/_lev60/<?php classValues($classes['Death Knight']['talents']['lev60'], 2); ?>.jpg"></span>
				<span class="DruidSelected"><img src="images/_druid/_talents/_lev60/<?php classValues($classes['Druid']['talents']['lev60'], 2); ?>.jpg"></span>
				<span class="HunterSelected"><img src="images/_hunter/_talents/_lev60/<?php classValues($classes['Hunter']['talents']['lev60'], 2); ?>.jpg"></span>
				<span class="MageSelected"><img src="images/_mage/_talents/_lev60/<?php classValues($classes['Mage']['talents']['lev60'], 2); ?>.jpg"></span>
				<span class="MonkSelected"><img src="images/_monk/_talents/_lev60/<?php classValues($classes['Monk']['talents']['lev60'], 2); ?>.jpg"></span>
				<span class="PaladinSelected"><img src="images/_paladin/_talents/_lev60/<?php classValues($classes['Paladin']['talents']['lev60'], 2); ?>.jpg"></span>
				<span class="PriestSelected"><img src="images/_priest/_talents/_lev60/<?php classValues($classes['Priest']['talents']['lev60'], 2); ?>.jpg"></span>
				<span class="RogueSelected"><img src="images/_rogue/_talents/_lev60/<?php classValues($classes['Rogue']['talents']['lev60'], 2); ?>.jpg"></span>
				<span class="ShamanSelected"><img src="images/_shaman/_talents/_lev60/<?php classValues($classes['Shaman']['talents']['lev60'], 2); ?>.jpg"></span>
				<span class="WarlockSelected"><img src="images/_warlock/_talents/_lev60/<?php classValues($classes['Warlock']['talents']['lev60'], 2); ?>.jpg"></span>
				<span class="WarriorSelected"><img src="images/_warrior/_talents/_lev60/<?php classValues($classes['Warrior']['talents']['lev60'], 2); ?>.jpg"></span>
			</div>
			
			<div class="talentText">
				<span class="DeathKnightSelected"><?php classKeys($classes['Death Knight']['talents']['lev60'], 2); ?></span>
				<span class="DruidSelected"><?php classKeys($classes['Druid']['talents']['lev60'], 2); ?></span>
				<span class="HunterSelected"><?php classKeys($classes['Hunter']['talents']['lev60'], 2); ?></span>
				<span class="MageSelected"><?php classKeys($classes['Mage']['talents']['lev60'], 2); ?></span>
				<span class="MonkSelected"><?php classKeys($classes['Monk']['talents']['lev60'], 2); ?></span>
				<span class="PaladinSelected"><?php classKeys($classes['Paladin']['talents']['lev60'], 2); ?></span>
				<span class="PriestSelected"><?php classKeys($classes['Priest']['talents']['lev60'], 2); ?></span>
				<span class="RogueSelected"><?php classKeys($classes['Rogue']['talents']['lev60'], 2); ?></span>
				<span class="ShamanSelected"><?php classKeys($classes['Shaman']['talents']['lev60'], 2); ?></span>
				<span class="WarlockSelected"><?php classKeys($classes['Warlock']['talents']['lev60'], 2); ?></span>
				<span class="WarriorSelected"><?php classKeys($classes['Warrior']['talents']['lev60'], 2); ?></span>
			</div>
			
		</div>
	
	</div>
	
	<!-- Lev 75 talents -->
	
	<div id="lev75Talents" class="talentWindowRow">
	
		<div class="specTalentRowLabel">75</div>
		
		<!-- Talent 1 -->
		
		<div id="lev75Talent1" class="specTalent">
			
			<div class="talentIcon">
				<span class="DeathKnightSelected"><img src="images/_deathknight/_talents/_lev75/<?php classValues($classes['Death Knight']['talents']['lev75'], 0); ?>.jpg"></span>
				<span class="DruidSelected"><img src="images/_druid/_talents/_lev75/<?php classValues($classes['Druid']['talents']['lev75'], 0); ?>.jpg"></span>
				<span class="HunterSelected"><img src="images/_hunter/_talents/_lev75/<?php classValues($classes['Hunter']['talents']['lev75'], 0); ?>.jpg"></span>
				<span class="MageSelected"><img src="images/_mage/_talents/_lev75/<?php classValues($classes['Mage']['talents']['lev75'], 0); ?>.jpg"></span>
				<span class="MonkSelected"><img src="images/_monk/_talents/_lev75/<?php classValues($classes['Monk']['talents']['lev75'], 0); ?>.jpg"></span>
				<span class="PaladinSelected"><img src="images/_paladin/_talents/_lev75/<?php classValues($classes['Paladin']['talents']['lev75'], 0); ?>.jpg"></span>
				<span class="PriestSelected"><img src="images/_priest/_talents/_lev75/<?php classValues($classes['Priest']['talents']['lev75'], 0); ?>.jpg"></span>
				<span class="RogueSelected"><img src="images/_rogue/_talents/_lev75/<?php classValues($classes['Rogue']['talents']['lev75'], 0); ?>.jpg"></span>
				<span class="ShamanSelected"><img src="images/_shaman/_talents/_lev75/<?php classValues($classes['Shaman']['talents']['lev75'], 0); ?>.jpg"></span>
				<span class="WarlockSelected"><img src="images/_warlock/_talents/_lev75/<?php classValues($classes['Warlock']['talents']['lev75'], 0); ?>.jpg"></span>
				<span class="WarriorSelected"><img src="images/_warrior/_talents/_lev75/<?php classValues($classes['Warrior']['talents']['lev75'], 0); ?>.jpg"></span>
			</div>
			
			<div class="talentText">
				<span class="DeathKnightSelected"><?php classKeys($classes['Death Knight']['talents']['lev75'], 0); ?></span>
				<span class="DruidSelected"><?php classKeys($classes['Druid']['talents']['lev75'], 0); ?></span>
				<span class="HunterSelected"><?php classKeys($classes['Hunter']['talents']['lev75'], 0); ?></span>
				<span class="MageSelected"><?php classKeys($classes['Mage']['talents']['lev75'], 0); ?></span>
				<span class="MonkSelected"><?php classKeys($classes['Monk']['talents']['lev75'], 0); ?></span>
				<span class="PaladinSelected"><?php classKeys($classes['Paladin']['talents']['lev75'], 0); ?></span>
				<span class="PriestSelected"><?php classKeys($classes['Priest']['talents']['lev75'], 0); ?></span>
				<span class="RogueSelected"><?php classKeys($classes['Rogue']['talents']['lev75'], 0); ?></span>
				<span class="ShamanSelected"><?php classKeys($classes['Shaman']['talents']['lev75'], 0); ?></span>
				<span class="WarlockSelected"><?php classKeys($classes['Warlock']['talents']['lev75'], 0); ?></span>
				<span class="WarriorSelected"><?php classKeys($classes['Warrior']['talents']['lev75'], 0); ?></span>
			</div>
			
		</div>
		
		<!-- Talent 2 -->
		
		<div id="lev75Talent2" class="specTalent">
			
			<div class="talentIcon">
				<span class="DeathKnightSelected"><img src="images/_deathknight/_talents/_lev75/<?php classValues($classes['Death Knight']['talents']['lev75'], 1); ?>.jpg"></span>
				<span class="DruidSelected"><img src="images/_druid/_talents/_lev75/<?php classValues($classes['Druid']['talents']['lev75'], 1); ?>.jpg"></span>
				<span class="HunterSelected"><img src="images/_hunter/_talents/_lev75/<?php classValues($classes['Hunter']['talents']['lev75'], 1); ?>.jpg"></span>
				<span class="MageSelected"><img src="images/_mage/_talents/_lev75/<?php classValues($classes['Mage']['talents']['lev75'], 1); ?>.jpg"></span>
				<span class="MonkSelected"><img src="images/_monk/_talents/_lev75/<?php classValues($classes['Monk']['talents']['lev75'], 1); ?>.jpg"></span>
				<span class="PaladinSelected"><img src="images/_paladin/_talents/_lev75/<?php classValues($classes['Paladin']['talents']['lev75'], 1); ?>.jpg"></span>
				<span class="PriestSelected"><img src="images/_priest/_talents/_lev75/<?php classValues($classes['Priest']['talents']['lev75'], 1); ?>.jpg"></span>
				<span class="RogueSelected"><img src="images/_rogue/_talents/_lev75/<?php classValues($classes['Rogue']['talents']['lev75'], 1); ?>.jpg"></span>
				<span class="ShamanSelected"><img src="images/_shaman/_talents/_lev75/<?php classValues($classes['Shaman']['talents']['lev75'], 1); ?>.jpg"></span>
				<span class="WarlockSelected"><img src="images/_warlock/_talents/_lev75/<?php classValues($classes['Warlock']['talents']['lev75'], 1); ?>.jpg"></span>
				<span class="WarriorSelected"><img src="images/_warrior/_talents/_lev75/<?php classValues($classes['Warrior']['talents']['lev75'], 1); ?>.jpg"></span>
			</div>
			
			<div class="talentText">
				<span class="DeathKnightSelected"><?php classKeys($classes['Death Knight']['talents']['lev75'], 1); ?></span>
				<span class="DruidSelected"><?php classKeys($classes['Druid']['talents']['lev75'], 1); ?></span>
				<span class="HunterSelected"><?php classKeys($classes['Hunter']['talents']['lev75'], 1); ?></span>
				<span class="MageSelected"><?php classKeys($classes['Mage']['talents']['lev75'], 1); ?></span>
				<span class="MonkSelected"><?php classKeys($classes['Monk']['talents']['lev75'], 1); ?></span>
				<span class="PaladinSelected"><?php classKeys($classes['Paladin']['talents']['lev75'], 1); ?></span>
				<span class="PriestSelected"><?php classKeys($classes['Priest']['talents']['lev75'], 1); ?></span>
				<span class="RogueSelected"><?php classKeys($classes['Rogue']['talents']['lev75'], 1); ?></span>
				<span class="ShamanSelected"><?php classKeys($classes['Shaman']['talents']['lev75'], 1); ?></span>
				<span class="WarlockSelected"><?php classKeys($classes['Warlock']['talents']['lev75'], 1); ?></span>
				<span class="WarriorSelected"><?php classKeys($classes['Warrior']['talents']['lev75'], 1); ?></span>
			</div>
			
		</div>
		
		<!-- Talent 3 -->
		
		<div id="lev75Talent3" class="specTalent">
			
			<div class="talentIcon">
				<span class="DeathKnightSelected"><img src="images/_deathknight/_talents/_lev75/<?php classValues($classes['Death Knight']['talents']['lev75'], 2); ?>.jpg"></span>
				<span class="DruidSelected"><img src="images/_druid/_talents/_lev75/<?php classValues($classes['Druid']['talents']['lev75'], 2); ?>.jpg"></span>
				<span class="HunterSelected"><img src="images/_hunter/_talents/_lev75/<?php classValues($classes['Hunter']['talents']['lev75'], 2); ?>.jpg"></span>
				<span class="MageSelected"><img src="images/_mage/_talents/_lev75/<?php classValues($classes['Mage']['talents']['lev75'], 2); ?>.jpg"></span>
				<span class="MonkSelected"><img src="images/_monk/_talents/_lev75/<?php classValues($classes['Monk']['talents']['lev75'], 2); ?>.jpg"></span>
				<span class="PaladinSelected"><img src="images/_paladin/_talents/_lev75/<?php classValues($classes['Paladin']['talents']['lev75'], 2); ?>.jpg"></span>
				<span class="PriestSelected"><img src="images/_priest/_talents/_lev75/<?php classValues($classes['Priest']['talents']['lev75'], 2); ?>.jpg"></span>
				<span class="RogueSelected"><img src="images/_rogue/_talents/_lev75/<?php classValues($classes['Rogue']['talents']['lev75'], 2); ?>.jpg"></span>
				<span class="ShamanSelected"><img src="images/_shaman/_talents/_lev75/<?php classValues($classes['Shaman']['talents']['lev75'], 2); ?>.jpg"></span>
				<span class="WarlockSelected"><img src="images/_warlock/_talents/_lev75/<?php classValues($classes['Warlock']['talents']['lev75'], 2); ?>.jpg"></span>
				<span class="WarriorSelected"><img src="images/_warrior/_talents/_lev75/<?php classValues($classes['Warrior']['talents']['lev75'], 2); ?>.jpg"></span>
			</div>
			
			<div class="talentText">
				<span class="DeathKnightSelected"><?php classKeys($classes['Death Knight']['talents']['lev75'], 2); ?></span>
				<span class="DruidSelected"><?php classKeys($classes['Druid']['talents']['lev75'], 2); ?></span>
				<span class="HunterSelected"><?php classKeys($classes['Hunter']['talents']['lev75'], 2); ?></span>
				<span class="MageSelected"><?php classKeys($classes['Mage']['talents']['lev75'], 2); ?></span>
				<span class="MonkSelected"><?php classKeys($classes['Monk']['talents']['lev75'], 2); ?></span>
				<span class="PaladinSelected"><?php classKeys($classes['Paladin']['talents']['lev75'], 2); ?></span>
				<span class="PriestSelected"><?php classKeys($classes['Priest']['talents']['lev75'], 2); ?></span>
				<span class="RogueSelected"><?php classKeys($classes['Rogue']['talents']['lev75'], 2); ?></span>
				<span class="ShamanSelected"><?php classKeys($classes['Shaman']['talents']['lev75'], 2); ?></span>
				<span class="WarlockSelected"><?php classKeys($classes['Warlock']['talents']['lev75'], 2); ?></span>
				<span class="WarriorSelected"><?php classKeys($classes['Warrior']['talents']['lev75'], 2); ?></span>
			</div>
			
		</div>
	
	</div>
	
	<!-- Lev 90 talents -->
	
	<div id="lev90Talents" class="talentWindowRow">
	
		<div class="specTalentRowLabel">90</div>
		
		<!-- Talent 1 -->
		
		<div id="lev90Talent1" class="specTalent">
			
			<div class="talentIcon">
				<span class="DeathKnightSelected"><img src="images/_deathknight/_talents/_lev90/<?php classValues($classes['Death Knight']['talents']['lev90'], 0); ?>.jpg"></span>
				<span class="DruidSelected"><img src="images/_druid/_talents/_lev90/<?php classValues($classes['Druid']['talents']['lev90'], 0); ?>.jpg"></span>
				<span class="HunterSelected"><img src="images/_hunter/_talents/_lev90/<?php classValues($classes['Hunter']['talents']['lev90'], 0); ?>.jpg"></span>
				<span class="MageSelected"><img src="images/_mage/_talents/_lev90/<?php classValues($classes['Mage']['talents']['lev90'], 0); ?>.jpg"></span>
				<span class="MonkSelected"><img src="images/_monk/_talents/_lev90/<?php classValues($classes['Monk']['talents']['lev90'], 0); ?>.jpg"></span>
				<span class="PaladinSelected"><img src="images/_paladin/_talents/_lev90/<?php classValues($classes['Paladin']['talents']['lev90'], 0); ?>.jpg"></span>
				<span class="PriestSelected"><img src="images/_priest/_talents/_lev90/<?php classValues($classes['Priest']['talents']['lev90'], 0); ?>.jpg"></span>
				<span class="RogueSelected"><img src="images/_rogue/_talents/_lev90/<?php classValues($classes['Rogue']['talents']['lev90'], 0); ?>.jpg"></span>
				<span class="ShamanSelected"><img src="images/_shaman/_talents/_lev90/<?php classValues($classes['Shaman']['talents']['lev90'], 0); ?>.jpg"></span>
				<span class="WarlockSelected"><img src="images/_warlock/_talents/_lev90/<?php classValues($classes['Warlock']['talents']['lev90'], 0); ?>.jpg"></span>
				<span class="WarriorSelected"><img src="images/_warrior/_talents/_lev90/<?php classValues($classes['Warrior']['talents']['lev90'], 0); ?>.jpg"></span>
			</div>
			
			<div class="talentText">
				<span class="DeathKnightSelected"><?php classKeys($classes['Death Knight']['talents']['lev90'], 0); ?></span>
				<span class="DruidSelected"><?php classKeys($classes['Druid']['talents']['lev90'], 0); ?></span>
				<span class="HunterSelected"><?php classKeys($classes['Hunter']['talents']['lev90'], 0); ?></span>
				<span class="MageSelected"><?php classKeys($classes['Mage']['talents']['lev90'], 0); ?></span>
				<span class="MonkSelected"><?php classKeys($classes['Monk']['talents']['lev90'], 0); ?></span>
				<span class="PaladinSelected"><?php classKeys($classes['Paladin']['talents']['lev90'], 0); ?></span>
				<span class="PriestSelected"><?php classKeys($classes['Priest']['talents']['lev90'], 0); ?></span>
				<span class="RogueSelected"><?php classKeys($classes['Rogue']['talents']['lev90'], 0); ?></span>
				<span class="ShamanSelected"><?php classKeys($classes['Shaman']['talents']['lev90'], 0); ?></span>
				<span class="WarlockSelected"><?php classKeys($classes['Warlock']['talents']['lev90'], 0); ?></span>
				<span class="WarriorSelected"><?php classKeys($classes['Warrior']['talents']['lev90'], 0); ?></span>
			</div>
			
		</div>
		
		<!-- Talent 2 -->
		
		<div id="lev90Talent2" class="specTalent">
			
			<div class="talentIcon">
				<span class="DeathKnightSelected"><img src="images/_deathknight/_talents/_lev90/<?php classValues($classes['Death Knight']['talents']['lev90'], 1); ?>.jpg"></span>
				<span class="DruidSelected"><img src="images/_druid/_talents/_lev90/<?php classValues($classes['Druid']['talents']['lev90'], 1); ?>.jpg"></span>
				<span class="HunterSelected"><img src="images/_hunter/_talents/_lev90/<?php classValues($classes['Hunter']['talents']['lev90'], 1); ?>.jpg"></span>
				<span class="MageSelected"><img src="images/_mage/_talents/_lev90/<?php classValues($classes['Mage']['talents']['lev90'], 1); ?>.jpg"></span>
				<span class="MonkSelected"><img src="images/_monk/_talents/_lev90/<?php classValues($classes['Monk']['talents']['lev90'], 1); ?>.jpg"></span>
				<span class="PaladinSelected"><img src="images/_paladin/_talents/_lev90/<?php classValues($classes['Paladin']['talents']['lev90'], 1); ?>.jpg"></span>
				<span class="PriestSelected"><img src="images/_priest/_talents/_lev90/<?php classValues($classes['Priest']['talents']['lev90'], 1); ?>.jpg"></span>
				<span class="RogueSelected"><img src="images/_rogue/_talents/_lev90/<?php classValues($classes['Rogue']['talents']['lev90'], 1); ?>.jpg"></span>
				<span class="ShamanSelected"><img src="images/_shaman/_talents/_lev90/<?php classValues($classes['Shaman']['talents']['lev90'], 1); ?>.jpg"></span>
				<span class="WarlockSelected"><img src="images/_warlock/_talents/_lev90/<?php classValues($classes['Warlock']['talents']['lev90'], 1); ?>.jpg"></span>
				<span class="WarriorSelected"><img src="images/_warrior/_talents/_lev90/<?php classValues($classes['Warrior']['talents']['lev90'], 1); ?>.jpg"></span>
			</div>
			
			<div class="talentText">
				<span class="DeathKnightSelected"><?php classKeys($classes['Death Knight']['talents']['lev90'], 1); ?></span>
				<span class="DruidSelected"><?php classKeys($classes['Druid']['talents']['lev90'], 1); ?></span>
				<span class="HunterSelected"><?php classKeys($classes['Hunter']['talents']['lev90'], 1); ?></span>
				<span class="MageSelected"><?php classKeys($classes['Mage']['talents']['lev90'], 1); ?></span>
				<span class="MonkSelected"><?php classKeys($classes['Monk']['talents']['lev90'], 1); ?></span>
				<span class="PaladinSelected"><?php classKeys($classes['Paladin']['talents']['lev90'], 1); ?></span>
				<span class="PriestSelected"><?php classKeys($classes['Priest']['talents']['lev90'], 1); ?></span>
				<span class="RogueSelected"><?php classKeys($classes['Rogue']['talents']['lev90'], 1); ?></span>
				<span class="ShamanSelected"><?php classKeys($classes['Shaman']['talents']['lev90'], 1); ?></span>
				<span class="WarlockSelected"><?php classKeys($classes['Warlock']['talents']['lev90'], 1); ?></span>
				<span class="WarriorSelected"><?php classKeys($classes['Warrior']['talents']['lev90'], 1); ?></span>
			</div>
			
		</div>
		
		<!-- Talent 3 -->
		
		<div id="lev90Talent3" class="specTalent">
			
			<div class="talentIcon">
				<span class="DeathKnightSelected"><img src="images/_deathknight/_talents/_lev90/<?php classValues($classes['Death Knight']['talents']['lev90'], 2); ?>.jpg"></span>
				<span class="DruidSelected"><img src="images/_druid/_talents/_lev90/<?php classValues($classes['Druid']['talents']['lev90'], 2); ?>.jpg"></span>
				<span class="HunterSelected"><img src="images/_hunter/_talents/_lev90/<?php classValues($classes['Hunter']['talents']['lev90'], 2); ?>.jpg"></span>
				<span class="MageSelected"><img src="images/_mage/_talents/_lev90/<?php classValues($classes['Mage']['talents']['lev90'], 2); ?>.jpg"></span>
				<span class="MonkSelected"><img src="images/_monk/_talents/_lev90/<?php classValues($classes['Monk']['talents']['lev90'], 2); ?>.jpg"></span>
				<span class="PaladinSelected"><img src="images/_paladin/_talents/_lev90/<?php classValues($classes['Paladin']['talents']['lev90'], 2); ?>.jpg"></span>
				<span class="PriestSelected"><img src="images/_priest/_talents/_lev90/<?php classValues($classes['Priest']['talents']['lev90'], 2); ?>.jpg"></span>
				<span class="RogueSelected"><img src="images/_rogue/_talents/_lev90/<?php classValues($classes['Rogue']['talents']['lev90'], 2); ?>.jpg"></span>
				<span class="ShamanSelected"><img src="images/_shaman/_talents/_lev90/<?php classValues($classes['Shaman']['talents']['lev90'], 2); ?>.jpg"></span>
				<span class="WarlockSelected"><img src="images/_warlock/_talents/_lev90/<?php classValues($classes['Warlock']['talents']['lev90'], 2); ?>.jpg"></span>
				<span class="WarriorSelected"><img src="images/_warrior/_talents/_lev90/<?php classValues($classes['Warrior']['talents']['lev90'], 2); ?>.jpg"></span>
			</div>
			
			<div class="talentText">
				<span class="DeathKnightSelected"><?php classKeys($classes['Death Knight']['talents']['lev90'], 2); ?></span>
				<span class="DruidSelected"><?php classKeys($classes['Druid']['talents']['lev90'], 2); ?></span>
				<span class="HunterSelected"><?php classKeys($classes['Hunter']['talents']['lev90'], 2); ?></span>
				<span class="MageSelected"><?php classKeys($classes['Mage']['talents']['lev90'], 2); ?></span>
				<span class="MonkSelected"><?php classKeys($classes['Monk']['talents']['lev90'], 2); ?></span>
				<span class="PaladinSelected"><?php classKeys($classes['Paladin']['talents']['lev90'], 2); ?></span>
				<span class="PriestSelected"><?php classKeys($classes['Priest']['talents']['lev90'], 2); ?></span>
				<span class="RogueSelected"><?php classKeys($classes['Rogue']['talents']['lev90'], 2); ?></span>
				<span class="ShamanSelected"><?php classKeys($classes['Shaman']['talents']['lev90'], 2); ?></span>
				<span class="WarlockSelected"><?php classKeys($classes['Warlock']['talents']['lev90'], 2); ?></span>
				<span class="WarriorSelected"><?php classKeys($classes['Warrior']['talents']['lev90'], 2); ?></span>
			</div>
			
		</div>
	
	</div>
	
</div>

<input type="hidden" id="selectedSpec" name="selectedSpec" value="">
<input type="hidden" id="selected15" name="selected15" value="">
<input type="hidden" id="selected30" name="selected30" value="">
<input type="hidden" id="selected45" name="selected45" value="">
<input type="hidden" id="selected60" name="selected60" value="">
<input type="hidden" id="selected75" name="selected75" value="">
<input type="hidden" id="selected90" name="selected90" value="">

<div id="specChosenWrapper">

	<input type="submit" id="specChosen" name="specChosen" value="Begin Binding">

</div>

</form>

<?php
require('includes/footer.php');
?>