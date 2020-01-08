<?php
session_start();
require_once('includes/functions.php');
require_once('includes/racialAbilities.php');
require_once('includes/deathknightAbilities.php');
$currentClass = (isset($_POST['selectedClass'])) ? $_POST['selectedClass'] : $_SESSION['class'];
require_once('includes/'. strtolower($currentClass) .'Abilities.php');
classNotSet(); // If SESSION['class'] is unset, redirect to class selection
?>

<script type="text/javascript">
	var selectedClass_abilityCodeArray = <?php echo json_encode($deathknightAbilities_ids); ?>
</script>

<?php
if (isset($_POST['selectedClass']))
{
	$_SESSION['class'] = stripslashes($_POST['selectedClass']);
	$_SESSION['race'] = stripslashes($_POST['selectedRace']);
	$_SESSION['spec'] = stripslashes(trim($_POST['selectedSpec']));
	$_SESSION['talents']['lev15'] = stripslashes(trim($_POST['selected15']));
	$_SESSION['talents']['lev30'] = stripslashes(trim($_POST['selected30']));
	$_SESSION['talents']['lev45'] = stripslashes(trim($_POST['selected45']));
	$_SESSION['talents']['lev60'] = stripslashes(trim($_POST['selected60']));
	$_SESSION['talents']['lev75'] = stripslashes(trim($_POST['selected75']));
	$_SESSION['talents']['lev90'] = stripslashes(trim($_POST['selected90']));
}

// $_POST = array(); // Not necessary - experiment

$class = strtolower($_SESSION['class']);
$classArray = $class . 'Abilities';
// Define the name of the basic ability array to search based on the user's class

$_SESSION['displayAbilities'] = array();
// Prepare array for abilities that will be displayed in the spellbook

foreach ($$classArray as $category => $value) {
	// echo 'Category: ' . $category . '<br />';
	
	if ($category == 'specs')
	{
	
		foreach ($value as $spec => $value)
		{
		
			if ($spec == 'all' || $spec == strtolower($_SESSION['spec']))
			{
				// echo '---Spec: ' . $spec . '<br />';
			
				foreach ($value as $filename => $value)
				{
					// echo '------Filename: ' . $filename . '<br />';
					
					$_SESSION['displayAbilities'][$filename]['displayText'] = $value['displayText'];
					$_SESSION['displayAbilities'][$filename]['displaySubtext'] = $value['displaySubtext'];
					$_SESSION['displayAbilities'][$filename]['abilityType'] = $value['abilityType'];
					$_SESSION['displayAbilities'][$filename]['wowhead_type'] = (isset($value['wowhead_type'])) ? $value['wowhead_type'] : '';
					$_SESSION['displayAbilities'][$filename]['wowhead_id'] = (isset($value['wowhead_id'])) ? $value['wowhead_id'] : '';
					$_SESSION['displayAbilities'][$filename]['keybound_id'] = (isset($value['keybound_id'])) ? $value['keybound_id'] : '';
					
				}
			}
		}
		
	} elseif ($category == 'talents') {
	
		foreach ($value as $lev => $value) {
			// echo '---Lev: ' . $lev . '<br />';
			
			foreach ($value as $talent => $value) {
				// echo '------Talent: ' . $talent . '<br />';
				
				if ($talent == 'grimoireofsupremacy') {
				
					if ($_SESSION['talents']['lev75'] == 'Grimoire of Supremacy') {
				
						foreach ($value as $petAbility => $value) {
							// echo '---------Pet Ability: ' . $petAbility . '<br />';
							
							$_SESSION['displayAbilities'][$petAbility]['displayText'] = $value['displayText'];
							$_SESSION['displayAbilities'][$petAbility]['displaySubtext'] = $value['displaySubtext'];
							$_SESSION['displayAbilities'][$petAbility]['abilityType'] = $value['abilityType'];
							$_SESSION['displayAbilities'][$petAbility]['wowhead_type'] = (isset($value['wowhead_type'])) ? $value['wowhead_type'] : '';
							$_SESSION['displayAbilities'][$petAbility]['wowhead_id'] = (isset($value['wowhead_id'])) ? $value['wowhead_id'] : '';
							$_SESSION['displayAbilities'][$petAbility]['keybound_id'] = (isset($value['keybound_id'])) ? $value['keybound_id'] : '';
							
							foreach ($value as $key => $texts) {
								// echo '------------'.$key.': ' . $texts . '<br />';
							}
						}
					}
				
				} else {
				
					if (in_array($value['displayText'], $_SESSION['talents'])) {
			
						$_SESSION['displayAbilities'][$talent]['displayText'] = $value['displayText'];
						$_SESSION['displayAbilities'][$talent]['displaySubtext'] = $value['displaySubtext'];
						$_SESSION['displayAbilities'][$talent]['abilityType'] = $value['abilityType'];
						$_SESSION['displayAbilities'][$talent]['wowhead_type'] = (isset($value['wowhead_type'])) ? $value['wowhead_type'] : '';
							$_SESSION['displayAbilities'][$talent]['wowhead_id'] = (isset($value['wowhead_id'])) ? $value['wowhead_id'] : '';
							$_SESSION['displayAbilities'][$talent]['keybound_id'] = (isset($value['keybound_id'])) ? $value['keybound_id'] : '';
				
					}
				}
			}
		}
		
	} // elseif ($category == 'glyphs') {
	
		// foreach ($value as $glyph => $value) {
			// echo '---Glyph: ' . $glyph . '<br />';
			
			// foreach ($value as $glyphAgain => $value) {
				// echo '------GlyphAgain: ' . $glyphAgain . '<br />';
				
				// foreach ($value as $key => $texts) {
					// echo '---------'.$key.': ' . $texts . '<br />';
				// }
			// }
		// }
		
	// }
}

foreach ($racialAbilities[$_SESSION['race']] as $key => $value) {
// For each of the current race's racial abilities

	$_SESSION['displayAbilities'][$key]['displayText'] = $value['displayText'];
	$_SESSION['displayAbilities'][$key]['displaySubtext'] = $value['displaySubtext'];
	$_SESSION['displayAbilities'][$key]['abilityType'] = $value['abilityType'];
	$_SESSION['displayAbilities'][$key]['wowhead_type'] = $value['wowhead_type'];
	$_SESSION['displayAbilities'][$key]['wowhead_id'] = $value['wowhead_id'];
	$_SESSION['displayAbilities'][$key]['keybound_id'] = $value['keybound_id'];
	

}

//------------------------------
//		Spell Replacements
//------------------------------

if (array_key_exists('bloodfear', $_SESSION['displayAbilities'])) {unset($_SESSION['displayAbilities']['fear']);}
if (array_key_exists('faerieswarm', $_SESSION['displayAbilities'])) {unset($_SESSION['displayAbilities']['faeriefire']);}
if (array_key_exists('chitorpedo', $_SESSION['displayAbilities'])) {unset($_SESSION['displayAbilities']['roll']);}
if (array_key_exists('greaterinvisibility', $_SESSION['displayAbilities'])) {unset($_SESSION['displayAbilities']['invisibility']);}
if (array_key_exists('aspectoftheironhawk', $_SESSION['displayAbilities'])) {unset($_SESSION['displayAbilities']['aspectofthehawk']);}
if ($_SESSION['talents']['lev75'] == 'Grimoire of Supremacy') {
	unset($_SESSION['displayAbilities']['felhunter_devourmagic']);
	unset($_SESSION['displayAbilities']['felhunter_spelllock']);
	unset($_SESSION['displayAbilities']['imp_cauterizemaster']);
	unset($_SESSION['displayAbilities']['imp_flee']);
	unset($_SESSION['displayAbilities']['succubus_seduction']);
	unset($_SESSION['displayAbilities']['succubus_whiplash']);
	unset($_SESSION['displayAbilities']['voidwalker_shadowshield']);
}

ksort($_SESSION['displayAbilities']);
// Sort Display Abilities alphabetically

$numPages = ceil(count($_SESSION['displayAbilities']) / 30);
// Calculate how many spellbook pages are needed

$numSpells = count($_SESSION['displayAbilities']);
// Count total number of spells

$classesWithStances = array('DeathKnight','Druid','Hunter','Monk','Priest','Rogue','Warlock','Warrior');
// Used on client side to determine whether to display stance filter

$classesWithBuffs = array('Druid','Mage','Monk','Paladin','Priest','Rogue','Warlock');

//=================================================
//               BEGIN CLIENT SIDE
//=================================================
require('includes/header.php');
?>

<!--
	Visitor is new or has opted to see tutorials
-->
<?php
if ($_SESSION['tutorials'] == 'yes')
{
?>

<div id="helper_dragMe"></div>

<?php
$_SESSION['tutorials'] = 'no';
}
?>

<!--
		SPELLBOOK
-->
<div id="spellbookWrapper">

	<div id="spellbook">

		<div class="spellbookScrollingHolder">
		
			<?php $count = 1; ?>
			<?php foreach ($_SESSION['displayAbilities'] as $key => $value) { ?>
			
				<?php if (1==1) { // If this ability has not been filtered by the user ?>
				
				<?php if ($count == 1 || ($count -1) % 6 == 0) { ?>
				<div class="spellColWrapper">
				<?php } ?>
				
					<div class="spellRow">
					
						<span class="abilityType" style="display: none;"><?php echo $value['abilityType']; ?></span>
					
						<div class="draggableAbility">
						
							<a rel="<?php echo (isset($value['wowhead_type'])) ? $value['wowhead_type'] . '=' . $value['wowhead_id'] . '&amp;lvl=90': ''; ?>" name="<?php echo $value['displayText']; ?>" class="<?php echo (isset($value['keybound_id'])) ? $value['keybound_id'] : ''; ?>">
						
							<?php if ($value['displaySubtext'] == 'Racial') { // This ability is a racial ?>
						
								<img src="images/_races/<?php echo $key; ?>.jpg">
						
							<?php } else { // This ability is a class ability or talent ?>
						
								<img src="images/_<?php echo strtolower($_SESSION['class']). '/' . $key; ?>.jpg">
								
							<?php } ?>
							
							</a>
						
						</div>
						
						<div class="spellName handle">
						
							<span class="spellName-printable"><?php echo $value['displayText']; ?></span>
							
							<?php echo (strlen($value['displayText']) < 19) ? '<br />' : ''; ?>
							<!-- Indent before subtext only if string is short - prevents three-line entries -->
							
							<span class="spellText"><?php echo ($value['displaySubtext'] != '') ? $value['displaySubtext'] : ''; ?></span>
							
						</div>
						
					</div>
					
				<?php if ($count % 6 == 0 || $count == $numSpells) { ?>
				</div>
				<?php } ?>
			
				<?php $count ++; ?>
				<?php } ?>
			<?php } ?>
			
		</div>
		
		<p class="clear"></p>
		
	</div>

</div> <!-- spellbookWrapper -->

<!-- Spellbook navigation buttons -->
		
<div id="sb_navButton-wrapper">

	<!--
			Ability filters
	-->
	
	<div id="sb_abilityFilter-wrapper">
	
		<span>Utility</span>
		<div class="checkbox-checked utility"></div>
		
		<?php if (in_array($_SESSION['class'], $classesWithBuffs)) { ?>
		<span>Buffs</span>
		<div class="checkbox-checked buff"></div>
		<?php } ?>
		
		<?php if (in_array($_SESSION['class'], $classesWithStances)) { ?>
		<span>Stances</span>
		<div class="checkbox-checked stance"></div>
		<?php } ?>
		
		<?php if ($_SESSION['class'] == 'Hunter' || $_SESSION['class'] == 'Warlock' || ($_SESSION['class'] == 'DeathKnight' && $_SESSION['spec'] == 'Unholy') || ($_SESSION['class'] == 'Mage' && $_SESSION['spec'] == 'Frost')) { ?>
		<span>Pet Abilities</span>
		<div class="checkbox-checked pet"></div>
		<?php } ?>
		
	</div>
	
	<!-- Spellbook navigation -->
	
	<div id="sb_prevPage" class="sb_navButton">
	
		<img src="images/sb_arrow_left.png">
		
	</div>
	
	<div id="sb_pageNum">
	
		<span id="sb_pageNumText">Page 1 of <?php echo $numPages; ?></span>
		
	</div>
	
	<div id="sb_nextPage" class="sb_navButton">
	
		<img src="images/sb_arrow_right.png">
		
	</div>
	
	<!-- Instructions Link -->
	
	<div id="instructions-link">Instructions<img id="question_mark" src="images/question_mark.png"></div>
	
	<!-- Current Class/Spec -->	
	<div id="sb_currentSpec" style="color: #<?php echo $classColors[$_SESSION['class']]; ?>">
	
		<?php echo $_SESSION['race'] . ' ' . $_SESSION['spec'] . ' ' . $_SESSION['class']; ?>
		
	</div>
	
	<!-- jQuery uses this text value to determine total page count -->
	<div id="sb_totalPages"><?php echo $numPages; ?></div>
	
</div>

<div id="devicesWrapper">

	<div id="modifierState">
	
		<span id="modifierState-status">Normal</span>
		<span id="modifierState-label">Key modifier</span>
		
	</div>
	
	<div id="keyboardContainer" class="">

		<!-- Escape F1 F2 F3 F4 -->
		
		<!-- Escape -->
		
		<div id="esc" class="keyContainer fKey keyContainer-greyShadow" style="margin-right: 55px">
			<span class="keyLabel grey">Esc</span>
		</div>
		
		<!-- F1 -->
		
		<div id="f1-normal" class="keyContainer fKey droppableContainer keyContainer-greyShadow">
			<span class="keyLabel">F1</span>
			<div class="iconHolder-fKey"></div>
		</div>
		<div id="f1-shift" class="keyContainer fKey droppableContainer keyContainer-blueShadow">
			<span class="keyLabel">F1</span>
			<div class="iconHolder-fKey"></div>
		</div>
		<div id="f1-ctrl" class="keyContainer fKey droppableContainer keyContainer-redShadow">
			<span class="keyLabel">F1</span>
			<div class="iconHolder-fKey"></div>
		</div>
		
		<!-- F2 -->
		
		<div id="f2-normal" class="keyContainer fKey droppableContainer keyContainer-greyShadow">
			<span class="keyLabel">F2</span>
			<div class="iconHolder-fKey"></div>
		</div>
		<div id="f2-shift" class="keyContainer fKey droppableContainer keyContainer-blueShadow">
			<span class="keyLabel">F2</span>
			<div class="iconHolder-fKey"></div>
		</div>
		<div id="f2-ctrl" class="keyContainer fKey droppableContainer keyContainer-redShadow">
			<span class="keyLabel">F2</span>
			<div class="iconHolder-fKey"></div>
		</div>
		
		<!-- F3 -->
		
		<div id="f3-normal" class="keyContainer fKey droppableContainer keyContainer-greyShadow">
			<span class="keyLabel">F3</span>
			<div class="iconHolder-fKey"></div>
		</div>
		<div id="f3-shift" class="keyContainer fKey droppableContainer keyContainer-blueShadow">
			<span class="keyLabel">F3</span>
			<div class="iconHolder-fKey"></div>
		</div>
		<div id="f3-ctrl" class="keyContainer fKey droppableContainer keyContainer-redShadow">
			<span class="keyLabel">F3</span>
			<div class="iconHolder-fKey"></div>
		</div>
		
		<!-- F4 -->
		
		<div id="f4-normal" class="keyContainer fKey droppableContainer keyContainer-greyShadow">
			<span class="keyLabel">F4</span>
			<div class="iconHolder-fKey"></div>
		</div>
		<div id="f4-shift" class="keyContainer fKey droppableContainer keyContainer-blueShadow">
			<span class="keyLabel">F4</span>
			<div class="iconHolder-fKey"></div>
		</div>
		<div id="f4-ctrl" class="keyContainer fKey droppableContainer keyContainer-redShadow">
			<span class="keyLabel">F4</span>
			<div class="iconHolder-fKey"></div>
		</div>
		
		<p class="clear"></p>
		
		<div style="height: 10px;"></div>
		
		<p class="clear"></p>
		
		<!-- Tilde 1 2 3 4 5 6 -->
		
		<!-- Tilde -->
		
		<div id="tilde-normal" class="keyContainer squareKey droppableContainer keyContainer-greyShadow">
			<span class="keyLabel">`</span>
			<div class="iconHolder"></div>
		</div>
		<div id="tilde-shift" class="keyContainer squareKey droppableContainer keyContainer-blueShadow">
			<span class="keyLabel">`</span>
			<div class="iconHolder"></div>
		</div>
		<div id="tilde-ctrl" class="keyContainer squareKey droppableContainer keyContainer-redShadow">
			<span class="keyLabel">`</span>
			<div class="iconHolder"></div>
		</div>
		
		<!-- 1 -->
		
		<div id="1-normal" class="keyContainer squareKey droppableContainer keyContainer-greyShadow">
			<span class="keyLabel">1</span>
			<div class="iconHolder"></div>
		</div>
		<div id="1-shift" class="keyContainer squareKey droppableContainer keyContainer-blueShadow">
			<span class="keyLabel">1</span>
			<div class="iconHolder"></div>
		</div>
		<div id="1-ctrl" class="keyContainer squareKey droppableContainer keyContainer-redShadow">
			<span class="keyLabel">1</span>
			<div class="iconHolder"></div>
		</div>
		
		<!-- 2 -->
		
		<div id="2-normal" class="keyContainer squareKey droppableContainer keyContainer-greyShadow">
			<span class="keyLabel">2</span>
			<div class="iconHolder"></div>
		</div>
		<div id="2-shift" class="keyContainer squareKey droppableContainer keyContainer-blueShadow">
			<span class="keyLabel">2</span>
			<div class="iconHolder"></div>
		</div>
		<div id="2-ctrl" class="keyContainer squareKey droppableContainer keyContainer-redShadow">
			<span class="keyLabel">2</span>
			<div class="iconHolder"></div>
		</div>
		
		<!-- 3 -->
		
		<div id="3-normal" class="keyContainer squareKey droppableContainer keyContainer-greyShadow">
			<span class="keyLabel">3</span>
			<div class="iconHolder"></div>
		</div>
		<div id="3-shift" class="keyContainer squareKey droppableContainer keyContainer-blueShadow">
			<span class="keyLabel">3</span>
			<div class="iconHolder"></div>
		</div>
		<div id="3-ctrl" class="keyContainer squareKey droppableContainer keyContainer-redShadow">
			<span class="keyLabel">3</span>
			<div class="iconHolder"></div>
		</div>
		
		<!-- 4 -->
		
		<div id="4-normal" class="keyContainer squareKey droppableContainer keyContainer-greyShadow">
			<span class="keyLabel">4</span>
			<div class="iconHolder"></div>
		</div>
		<div id="4-shift" class="keyContainer squareKey droppableContainer keyContainer-blueShadow">
			<span class="keyLabel">4</span>
			<div class="iconHolder"></div>
		</div>
		<div id="4-ctrl" class="keyContainer squareKey droppableContainer keyContainer-redShadow">
			<span class="keyLabel">4</span>
			<div class="iconHolder"></div>
		</div>
		
		<!-- 5 -->
		
		<div id="5-normal" class="keyContainer squareKey droppableContainer keyContainer-greyShadow">
			<span class="keyLabel">5</span>
			<div class="iconHolder"></div>
		</div>
		<div id="5-shift" class="keyContainer squareKey droppableContainer keyContainer-blueShadow">
			<span class="keyLabel">5</span>
			<div class="iconHolder"></div>
		</div>
		<div id="5-ctrl" class="keyContainer squareKey droppableContainer keyContainer-redShadow">
			<span class="keyLabel">5</span>
			<div class="iconHolder"></div>
		</div>
		
		<!-- 6 -->
		
		<div id="6-normal" class="keyContainer squareKey droppableContainer keyContainer-greyShadow">
			<span class="keyLabel">6</span>
			<div class="iconHolder"></div>
		</div>
		<div id="6-shift" class="keyContainer squareKey droppableContainer keyContainer-blueShadow">
			<span class="keyLabel">6</span>
			<div class="iconHolder"></div>
		</div>
		<div id="6-ctrl" class="keyContainer squareKey droppableContainer keyContainer-redShadow">
			<span class="keyLabel">6</span>
			<div class="iconHolder"></div>
		</div>
		
		<p class="clear"></p>
		
		<!-- Tab Q W E R T Y -->
		
		<!-- Tab -->
		
		<div id="tab" class="keyContainer squareKey keyContainer-greyShadow" style="width: 83px;">
			<span class="keyLabel grey">Tab</span>
		</div>
		
		<!-- Q -->
		
		<div id="q-normal"class="keyContainer squareKey droppableContainer keyContainer-greyShadow">
			<span class="keyLabel">Q</span>
			<div class="iconHolder"></div>
		</div>
		<div id="q-shift"class="keyContainer squareKey droppableContainer keyContainer-blueShadow">
			<span class="keyLabel">Q</span>
			<div class="iconHolder"></div>
		</div>
		<div id="q-ctrl"class="keyContainer squareKey droppableContainer keyContainer-redShadow">
			<span class="keyLabel">Q</span>
			<div class="iconHolder"></div>
		</div>
		
		<!-- W -->
		
		<div id="w-normal" class="keyContainer squareKey droppableContainer keyContainer-greyShadow">
			<span class="keyLabel">W</span>
			<div class="iconHolder"></div>
		</div>
		<div id="w-shift" class="keyContainer squareKey droppableContainer keyContainer-blueShadow">
			<span class="keyLabel">W</span>
			<div class="iconHolder"></div>
		</div>
		<div id="w-ctrl" class="keyContainer squareKey droppableContainer keyContainer-redShadow">
			<span class="keyLabel">W</span>
			<div class="iconHolder"></div>
		</div>
		
		<!-- E -->
		
		<div id="e-normal" class="keyContainer squareKey droppableContainer keyContainer-greyShadow">
			<span class="keyLabel">E</span>
			<div class="iconHolder"></div>
		</div>
		<div id="e-shift" class="keyContainer squareKey droppableContainer keyContainer-blueShadow">
			<span class="keyLabel">E</span>
			<div class="iconHolder"></div>
		</div>
		<div id="e-ctrl" class="keyContainer squareKey droppableContainer keyContainer-redShadow">
			<span class="keyLabel">E</span>
			<div class="iconHolder"></div>
		</div>
		
		<!-- R -->
		
		<div id="r-normal" class="keyContainer squareKey droppableContainer keyContainer-greyShadow">
			<span class="keyLabel">R</span>
			<div class="iconHolder"></div>
		</div>
		<div id="r-shift" class="keyContainer squareKey droppableContainer keyContainer-blueShadow">
			<span class="keyLabel">R</span>
			<div class="iconHolder"></div>
		</div>
		<div id="r-ctrl" class="keyContainer squareKey droppableContainer keyContainer-redShadow">
			<span class="keyLabel">R</span>
			<div class="iconHolder"></div>
		</div>
		
		<!-- T -->
		
		<div id="t-normal" class="keyContainer squareKey droppableContainer keyContainer-greyShadow">
			<span class="keyLabel">T</span>
			<div class="iconHolder"></div>
		</div>
		<div id="t-shift" class="keyContainer squareKey droppableContainer keyContainer-blueShadow">
			<span class="keyLabel">T</span>
			<div class="iconHolder"></div>
		</div>
		<div id="t-ctrl" class="keyContainer squareKey droppableContainer keyContainer-redShadow">
			<span class="keyLabel">T</span>
			<div class="iconHolder"></div>
		</div>
		
		<!-- Y -->
		
		<div id="y-normal" class="keyContainer squareKey droppableContainer keyContainer-greyShadow">
			<span class="keyLabel">Y</span>
			<div class="iconHolder"></div>
		</div>
		<div id="y-shift" class="keyContainer squareKey droppableContainer keyContainer-blueShadow">
			<span class="keyLabel">Y</span>
			<div class="iconHolder"></div>
		</div>
		<div id="y-ctrl" class="keyContainer squareKey droppableContainer keyContainer-redShadow">
			<span class="keyLabel">Y</span>
			<div class="iconHolder"></div>
		</div>
		
		<p class="clear"></p>
		
		<!-- Caps A S D F G H -->
		
		<!-- Caps -->
		
		<div id="caps" class="keyContainer squareKey keyContainer-greyShadow" style="width: 98px;">
			<span class="keyLabel grey">Caps</span>
		</div>
		
		<!-- A -->
		
		<div id="a-normal" class="keyContainer squareKey droppableContainer keyContainer-greyShadow">
			<span class="keyLabel">A</span>
			<div class="iconHolder"></div>
		</div>
		<div id="a-shift" class="keyContainer squareKey droppableContainer keyContainer-blueShadow">
			<span class="keyLabel">A</span>
			<div class="iconHolder"></div>
		</div>
		<div id="a-ctrl" class="keyContainer squareKey droppableContainer keyContainer-redShadow">
			<span class="keyLabel">A</span>
			<div class="iconHolder"></div>
		</div>
		
		<!-- S -->
		
		<div id="s-normal" class="keyContainer squareKey droppableContainer keyContainer-greyShadow">
			<span class="keyLabel">S</span>
			<div class="iconHolder"></div>
		</div>
		<div id="s-shift" class="keyContainer squareKey droppableContainer keyContainer-blueShadow">
			<span class="keyLabel">S</span>
			<div class="iconHolder"></div>
		</div>
		<div id="s-ctrl" class="keyContainer squareKey droppableContainer keyContainer-redShadow">
			<span class="keyLabel">S</span>
			<div class="iconHolder"></div>
		</div>
		
		<!-- D -->
		
		<div id="d-normal" class="keyContainer squareKey droppableContainer keyContainer-greyShadow">
			<span class="keyLabel">D</span>
			<div class="iconHolder"></div>
		</div>
		<div id="d-shift" class="keyContainer squareKey droppableContainer keyContainer-blueShadow">
			<span class="keyLabel">D</span>
			<div class="iconHolder"></div>
		</div>
		<div id="d-ctrl" class="keyContainer squareKey droppableContainer keyContainer-redShadow">
			<span class="keyLabel">D</span>
			<div class="iconHolder"></div>
		</div>
		
		<!-- F -->
		
		<div id="f-normal" class="keyContainer squareKey droppableContainer keyContainer-greyShadow">
			<span class="keyLabel">F</span>
			<div class="iconHolder"></div>
		</div>
		<div id="f-shift" class="keyContainer squareKey droppableContainer keyContainer-blueShadow">
			<span class="keyLabel">F</span>
			<div class="iconHolder"></div>
		</div>
		<div id="f-ctrl" class="keyContainer squareKey droppableContainer keyContainer-redShadow">
			<span class="keyLabel">F</span>
			<div class="iconHolder"></div>
		</div>
		
		<!-- G -->
		
		<div id="g-normal" class="keyContainer squareKey droppableContainer keyContainer-greyShadow">
			<span class="keyLabel">G</span>
			<div class="iconHolder"></div>
		</div>
		<div id="g-shift" class="keyContainer squareKey droppableContainer keyContainer-blueShadow">
			<span class="keyLabel">G</span>
			<div class="iconHolder"></div>
		</div>
		<div id="g-ctrl" class="keyContainer squareKey droppableContainer keyContainer-redShadow">
			<span class="keyLabel">G</span>
			<div class="iconHolder"></div>
		</div>
		
		<!-- H -->
		
		<div id="h-normal" class="keyContainer squareKey droppableContainer keyContainer-greyShadow">
			<span class="keyLabel">H</span>
			<div class="iconHolder"></div>
		</div>
		<div id="h-shift" class="keyContainer squareKey droppableContainer keyContainer-blueShadow">
			<span class="keyLabel">H</span>
			<div class="iconHolder"></div>
		</div>
		<div id="h-ctrl" class="keyContainer squareKey droppableContainer keyContainer-redShadow">
			<span class="keyLabel">H</span>
			<div class="iconHolder"></div>
		</div>
		
		<p class="clear"></p>
		
		<!-- Shift Z X C V B N -->
		
		<!-- Shift -->
		
		<div id="shift" class="keyContainer squareKey keyContainer-greyShadow" style="width: 123px;">
			<span class="keyLabel grey">Shift</span>
		</div>
		
		<!-- Z -->
		
		<div id="z-normal" class="keyContainer squareKey droppableContainer keyContainer-greyShadow">
			<span class="keyLabel">Z</span>
			<div class="iconHolder"></div>
		</div>
		<div id="z-shift" class="keyContainer squareKey droppableContainer keyContainer-blueShadow">
			<span class="keyLabel">Z</span>
			<div class="iconHolder"></div>
		</div>
		<div id="z-ctrl" class="keyContainer squareKey droppableContainer keyContainer-redShadow">
			<span class="keyLabel">Z</span>
			<div class="iconHolder"></div>
		</div>
		
		<!-- X -->
		<div id="x-normal" class="keyContainer squareKey droppableContainer keyContainer-greyShadow">
			<span class="keyLabel">X</span>
			<div class="iconHolder"></div>
		</div>
		<div id="x-shift" class="keyContainer squareKey droppableContainer keyContainer-blueShadow">
			<span class="keyLabel">X</span>
			<div class="iconHolder"></div>
		</div>
		<div id="x-ctrl" class="keyContainer squareKey droppableContainer keyContainer-redShadow">
			<span class="keyLabel">X</span>
			<div class="iconHolder"></div>
		</div>
		
		<!-- C -->
		
		<div id="c-normal" class="keyContainer squareKey droppableContainer keyContainer-greyShadow">
			<span class="keyLabel">C</span>
			<div class="iconHolder"></div>
		</div>
		<div id="c-shift" class="keyContainer squareKey droppableContainer keyContainer-blueShadow">
			<span class="keyLabel">C</span>
			<div class="iconHolder"></div>
		</div>
		<div id="c-ctrl" class="keyContainer squareKey droppableContainer keyContainer-redShadow">
			<span class="keyLabel">C</span>
			<div class="iconHolder"></div>
		</div>
		
		<!-- V -->
		
		<div id="v-normal" class="keyContainer squareKey droppableContainer keyContainer-greyShadow">
			<span class="keyLabel">V</span>
			<div class="iconHolder"></div>
		</div>
		<div id="v-shift" class="keyContainer squareKey droppableContainer keyContainer-blueShadow">
			<span class="keyLabel">V</span>
			<div class="iconHolder"></div>
		</div>
		<div id="v-ctrl" class="keyContainer squareKey droppableContainer keyContainer-redShadow">
			<span class="keyLabel">V</span>
			<div class="iconHolder"></div>
		</div>
		
		<!-- B -->
		
		<div id="b-normal" class="keyContainer squareKey droppableContainer keyContainer-greyShadow">
			<span class="keyLabel">B</span>
			<div class="iconHolder"></div>
		</div>
		<div id="b-shift" class="keyContainer squareKey droppableContainer keyContainer-blueShadow">
			<span class="keyLabel">B</span>
			<div class="iconHolder"></div>
		</div>
		<div id="b-ctrl" class="keyContainer squareKey droppableContainer keyContainer-redShadow">
			<span class="keyLabel">B</span>
			<div class="iconHolder"></div>
		</div>
		
		<!-- N -->
		
		<div id="n-normal" class="keyContainer squareKey droppableContainer keyContainer-greyShadow">
			<span class="keyLabel">N</span>
			<div class="iconHolder"></div>
		</div>
		<div id="n-shift" class="keyContainer squareKey droppableContainer keyContainer-blueShadow">
			<span class="keyLabel">N</span>
			<div class="iconHolder"></div>
		</div>
		<div id="n-ctrl" class="keyContainer squareKey droppableContainer keyContainer-redShadow">
			<span class="keyLabel">N</span>
			<div class="iconHolder"></div>
		</div>
		
		<p class="clear"></p>
		
		<!-- Ctrl Alt Space -->
		
		<!-- Ctrl -->
		
		<div id="ctrl" class="keyContainer squareKey keyContainer-greyShadow" style="width: 83px; margin-right: 78px;">
			<span class="keyLabel grey">Ctrl</span>
		</div>
		
		<!-- Alt -->
		
		<div id="alt" class="keyContainer squareKey keyContainer-greyShadow" style="width: 78px;">
			<span class="keyLabel grey">Alt</span>
		</div>
		
		<!-- Space -->
		
		<div id="space-normal" class="keyContainer squareKey droppableContainer keyContainer-greyShadow" style="width: 258px;">
			<span class="keyLabel grey">Space</span>
			<div class="iconHolder-space"></div>
		</div>
		<div id="space-shift" class="keyContainer squareKey droppableContainer keyContainer-greyShadow" style="width: 258px;">
			<span class="keyLabel grey">Space</span>
			<div class="iconHolder-space"></div>
		</div>
		<div id="space-ctrl" class="keyContainer squareKey droppableContainer keyContainer-greyShadow" style="width: 258px;">
			<span class="keyLabel grey">Space</span>
			<div class="iconHolder-space"></div>
		</div>

	</div>

	<div id="mouseContainer">
	
		<span class="grey" style="position: absolute; bottom: 10px; left: 230px; color: #373737; z-index: 10;">G700 &copy; Logitech</span>
	
		<img src="images/mouse_g700.png" style="position: absolute; left: 100px; top: -20px; transform: scale(0.9,0.9);">

		<div id="9buttonMouse" style="position: relative;">
		<!-- This div occupies no space in the DOM - all contents are absolutely positioned -->
		
			<!-- Wheel up -->
			
			<div id="wheelUp-normal" class="keyContainer mouseKey droppableContainer keyContainer-greyShadow" style="position: absolute; left: 218px; top: 10px;"><div class="iconHolder-mouse"></div></div>
			
			<div id="wheelUp-shift" class="keyContainer mouseKey droppableContainer keyContainer-blueShadow" style="position: absolute; left: 218px; top: 10px;"><div class="iconHolder-mouse"></div></div>
			
			<div id="wheelUp-ctrl" class="keyContainer mouseKey droppableContainer keyContainer-redShadow" style="position: absolute; left: 218px; top: 10px;"><div class="iconHolder-mouse"></div></div>
			
			<span id="wheelUp-text" class="grey">Wheel up</span>
			
			<!-- Wheel click -->
			
			<div id="wheelClick-normal" class="keyContainer mouseKey droppableContainer keyContainer-greyShadow" style="position: absolute; left: 218px; top: 60px;"><div class="iconHolder-mouse"></div></div>
			
			<div id="wheelClick-shift" class="keyContainer mouseKey droppableContainer keyContainer-blueShadow" style="position: absolute; left: 218px; top: 60px;"><div class="iconHolder-mouse"></div></div>
			
			<div id="wheelClick-ctrl" class="keyContainer mouseKey droppableContainer keyContainer-redShadow" style="position: absolute; left: 218px; top: 60px;"><div class="iconHolder-mouse"></div></div>
			
			<span id="wheelClick-text" class="grey">Wheel click</span>
			
			<!-- Wheel down -->
			
			<div id="wheelDown-normal" class="keyContainer mouseKey droppableContainer keyContainer-greyShadow" style="position: absolute; left: 218px; top: 110px;"><div class="iconHolder-mouse"></div></div>
			
			<div id="wheelDown-shift" class="keyContainer mouseKey droppableContainer keyContainer-blueShadow" style="position: absolute; left: 218px; top: 110px;"><div class="iconHolder-mouse"></div></div>
			
			<div id="wheelDown-ctrl" class="keyContainer mouseKey droppableContainer keyContainer-redShadow" style="position: absolute; left: 218px; top: 110px;"><div class="iconHolder-mouse"></div></div>
			
			<span id="wheelDown-text" class="grey">Wheel down</span>
			
			<!-- 1 -->
			
			<div id="mouse1-normal" class="keyContainer mouseKey droppableContainer keyContainer-greyShadow" style="position: absolute; left: 140px; top: 30px;"><div class="iconHolder-mouse"></div></div>
			
			<div id="mouse1-shift" class="keyContainer mouseKey droppableContainer keyContainer-blueShadow" style="position: absolute; left: 140px; top: 30px;"><div class="iconHolder-mouse"></div></div>
			
			<div id="mouse1-ctrl" class="keyContainer mouseKey droppableContainer keyContainer-redShadow" style="position: absolute; left: 140px; top: 30px;"><div class="iconHolder-mouse"></div></div>
			
			<!-- 2 -->
			
			<div id="mouse2-normal" class="keyContainer mouseKey droppableContainer keyContainer-greyShadow" style="position: absolute; left: 140px; top: 80px;"><div class="iconHolder-mouse"></div></div>
			
			<div id="mouse2-shift" class="keyContainer mouseKey droppableContainer keyContainer-blueShadow" style="position: absolute; left: 140px; top: 80px;"><div class="iconHolder-mouse"></div></div>
			
			<div id="mouse2-ctrl" class="keyContainer mouseKey droppableContainer keyContainer-redShadow" style="position: absolute; left: 140px; top: 80px;"><div class="iconHolder-mouse"></div></div>
			
			<!-- 3 -->
			
			<div id="mouse3-normal" class="keyContainer mouseKey droppableContainer keyContainer-greyShadow" style="position: absolute; left: 140px; top: 130px;"><div class="iconHolder-mouse"></div></div>
			
			<div id="mouse3-shift" class="keyContainer mouseKey droppableContainer keyContainer-blueShadow" style="position: absolute; left: 140px; top: 130px;"><div class="iconHolder-mouse"></div></div>

			<div id="mouse3-ctrl" class="keyContainer mouseKey droppableContainer keyContainer-redShadow" style="position: absolute; left: 140px; top: 130px;"><div class="iconHolder-mouse"></div></div>

			<!-- 4-pad 1 -->
			
			<div id="mouse4x1-normal" class="keyContainer mouseKey droppableContainer keyContainer-greyShadow" style="position: absolute; left: 20px; top: 140px;"><div class="iconHolder-mouse"></div></div>
			
			<div id="mouse4x1-shift" class="keyContainer mouseKey droppableContainer keyContainer-blueShadow" style="position: absolute; left: 20px; top: 140px;"><div class="iconHolder-mouse"></div></div>
			
			<div id="mouse4x1-ctrl" class="keyContainer mouseKey droppableContainer keyContainer-redShadow" style="position: absolute; left: 20px; top: 140px;"><div class="iconHolder-mouse"></div></div>
			
			<!-- 4-pad 2 -->
			
			<div id="mouse4x2-normal" class="keyContainer mouseKey droppableContainer keyContainer-greyShadow" style="position: absolute; left: 70px; top: 140px;"><div class="iconHolder-mouse"></div></div>
			
			<div id="mouse4x2-shift" class="keyContainer mouseKey droppableContainer keyContainer-blueShadow" style="position: absolute; left: 70px; top: 140px;"><div class="iconHolder-mouse"></div></div>
			
			<div id="mouse4x2-ctrl" class="keyContainer mouseKey droppableContainer keyContainer-redShadow" style="position: absolute; left: 70px; top: 140px;"><div class="iconHolder-mouse"></div></div>
			
			<!-- 4-pad 3 -->
			
			<div id="mouse4x3-normal" class="keyContainer mouseKey droppableContainer keyContainer-greyShadow" style="position: absolute; left: 20px; top: 190px;"><div class="iconHolder-mouse"></div></div>
			
			<div id="mouse4x3-shift" class="keyContainer mouseKey droppableContainer keyContainer-blueShadow" style="position: absolute; left: 20px; top: 190px;"><div class="iconHolder-mouse"></div></div>
			
			<div id="mouse4x3-ctrl" class="keyContainer mouseKey droppableContainer keyContainer-redShadow" style="position: absolute; left: 20px; top: 190px;"><div class="iconHolder-mouse"></div></div>
			
			<!-- 4-pad 4 -->
			
			<div id="mouse4x4-normal" class="keyContainer mouseKey droppableContainer keyContainer-greyShadow" style="position: absolute; left: 70px; top: 190px;"><div class="iconHolder-mouse"></div></div>
			
			<div id="mouse4x4-shift" class="keyContainer mouseKey droppableContainer keyContainer-blueShadow" style="position: absolute; left: 70px; top: 190px;"><div class="iconHolder-mouse"></div></div>
			
			<div id="mouse4x4-ctrl" class="keyContainer mouseKey droppableContainer keyContainer-redShadow" style="position: absolute; left: 70px; top: 190px;"><div class="iconHolder-mouse"></div></div>
		
		</div>

	</div>

</div> <!-- devicesWrapper -->

<?php
require('includes/footer.php');
?>