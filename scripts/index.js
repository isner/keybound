$(document).ready(function() {

	var os = navigator.platform;
	var url = window.location.href;
	var host = window.location.host;
	
	checkedBoxes();
	uncheckedBoxes();
	instructionsScreen();
	welcomePanel();
	beginHere();
	helper_dragMe();

	/*----------------------------------------
		Spellbook prev & next page buttons
	----------------------------------------*/
	
	$('#sb_prevPage').mouseenter(function() {
		$(this).find('img').attr('src', 'images/sb_arrow_left_hover.png');
	}).mouseleave(function() {
		$(this).find('img').attr('src', 'images/sb_arrow_left.png');
	});
	
	$('#sb_nextPage').mouseenter(function() {
		$(this).find('img').attr('src', 'images/sb_arrow_right_hover.png');
	}).mouseleave(function() {
		$(this).find('img').attr('src', 'images/sb_arrow_right.png');
	});

	/*----------------------------------------
		Slowly fade in page after load
	----------------------------------------*/
	
	//$('body').hide().delay(200).fadeIn(400); // Temporarily disabled = glitchy appearance
	// Fade in page after brief delay

	//----------------------------------------------------
	//		Initialize available races for each spec
	//----------------------------------------------------
	
	availableRaces = null;
	
	races = {};
	races['DeathKnight'] = ['Draenei','Dwarf','Gnome','Human','Night Elf','Worgen','Blood Elf','Goblin','Orc','Tauren','Troll','Undead','Pandaren'];
	races['Druid'] = ['Night Elf','Worgen','Tauren','Troll'];
	races['Hunter'] = ['Draenei','Dwarf','Human','Night Elf','Worgen','Blood Elf','Goblin','Orc','Tauren','Troll','Undead','Pandaren'];
	races['Mage'] = ['Draenei','Dwarf','Gnome','Human','Night Elf','Worgen','Blood Elf','Goblin','Orc','Troll','Undead','Pandaren'];
	races['Monk'] = ['Draenei','Dwarf','Gnome','Human','Night Elf','Blood Elf','Orc','Tauren','Troll','Undead','Pandaren'];
	races['Paladin'] = ['Draenei','Dwarf','Human','Blood Elf','Tauren'];
	races['Priest'] = ['Draenei','Dwarf','Gnome','Human','Night Elf','Worgen','Blood Elf','Goblin','Tauren','Troll','Undead','Pandaren'];
	races['Rogue'] = ['Dwarf','Gnome','Human','Night Elf','Worgen','Blood Elf','Goblin','Orc','Troll','Undead','Pandaren'];
	races['Shaman'] = ['Draenei','Dwarf','Goblin','Orc','Tauren','Troll','Pandaren'];
	races['Warlock'] = ['Dwarf','Gnome','Human','Worgen','Blood Elf','Goblin','Orc','Troll','Undead'];
	races['Warrior'] = ['Draenei','Dwarf','Gnome','Human','Night Elf','Worgen','Blood Elf','Goblin','Orc','Tauren','Troll','Undead','Pandaren'];	
	
	keyContainer_array = ['f1-normal','f1-shift','f1-ctrl','f2-normal','f2-shift','f2-ctrl','f3-normal','f3-shift','f3-ctrl','f4-normal','f4-shift','f4-ctrl','tilde-normal','tilde-shift','tilde-ctrl','1-normal','1-shift','1-ctrl','2-normal','2-shift','2-ctrl','3-normal','3-shift','3-ctrl','4-normal','4-shift','4-ctrl','5-normal','5-shift','5-ctrl','6-normal','6-shift','6-ctrl','q-normal','q-shift','q-ctrl','w-normal','w-shift','w-ctrl','e-normal','e-shift','e-ctrl','r-normal','r-shift','r-ctrl','t-normal','t-shift','t-ctrl','y-normal','y-shift','y-ctrl','a-normal','a-shift','a-ctrl','s-normal','s-shift','s-ctrl','d-normal','d-shift','d-ctrl','f-normal','f-shift','f-ctrl','g-normal','g-shift','g-ctrl','h-normal','h-shift','h-ctrl','z-normal','z-shift','z-ctrl','x-normal','x-shift','x-ctrl','c-normal','c-shift','c-ctrl','v-normal','v-shift','v-ctrl','b-normal','b-shift','b-ctrl','n-normal','n-shift','n-ctrl','space-normal','space-shift','space-ctrl','wheelUp-normal','wheelUp-shift','wheelUp-ctrl','wheelClick-normal','wheelClick-shift','wheelClick-ctrl','wheelDown-normal','wheelDown-shift','wheelDown-ctrl','mouse1-normal','mouse1-shift','mouse1-ctrl','mouse2-normal','mouse2-shift','mouse2-ctrl','mouse3-normal','mouse3-shift','mouse3-ctrl','mouse4x1-normal','mouse4x1-shift','mouse4x1-ctrl','mouse4x2-normal','mouse4x2-shift','mouse4x2-ctrl','mouse4x3-normal','mouse4x3-shift','mouse4x3-ctrl','mouse4x4-normal','mouse4x4-shift','mouse4x4-ctrl'];
	
	//--------------------------------------------------
	// 'Class Selection' interface
	//--------------------------------------------------
	
	$('.classIcon').mouseenter(function() {
	// User hovers a class icon
		$(this).css('border-color', '#ecc40d').css('opacity', '1.0');
		// Give icon yellow border and increased opacity
	});
	
	$('.classIcon').mouseleave(function() {
	// User blurs a class icon
		$(this).css('border-color', '#7a7a7a').css('opacity', '0.5');
		// Return icon border to grey and decrease opacity
	});
	
	$('.classIcon').mousedown(function() {
	// User clicks a class icon
		$('.classIcon').css('border-color', '#7a7a7a').css('opacity', '0.5');
		// Fade all class icons
		$(this).css('border-color', '#ecc40d').css('opacity', '1.0');
		// Emphasize the selected class icon
		$('.classIcon').unbind('mouseenter');
		// Disable hover animation for class icons
		$('.classIcon').unbind('mouseleave');
		// Disable blur animation for class icons
		
		classText = $(this).children('div.hide').text();
		// Retrieve class text from hidden div
		
		if (classText == 'Death Knight') {
		// If user selects Death Knight
			var classText = 'DeathKnight';
			// Compress text into one word to match array titles
		}
		
		//----------------------------
		//		Druid Fourth Spec
		//----------------------------
		
		if (classText == 'Druid') {
		// If user selects Druid
			$('#spec1, #spec2, #spec3, #spec4').css({ width: '22.5%' });
			// Shrink spec cells to accomodate 4 wide
			$('#spec4').show();
			// Show fourth spec cell
			
		} else {
		// If user selects any other class than Druid
			$('#spec1, #spec2, #spec3').css({ width: '30%' });
			// Grow spec cells to accomodate 3 wide
			$('#spec4').hide();
			// Hide fourth spec cell
		}
		
		availableRaces = races[classText];
		// Define list of available races for the selected class
		
		$('#selectedClass').attr('value', classText);
		// Define selectedClass
		
		if ($('div#raceSelectionText').css('display') == 'none') {
			$('div#raceSelectionText').css({display: 'block', color: 'black'});
		}
		$('div#raceSelectionText').animate({color: '#ccc'});
		// Animate text color
		
		$('.raceSelection').fadeIn();
		// Show 'Race Selection' pane
		
		if ($('#classSelectionText').html() != '') {
		// Class icon has NEVER been selected
		
			$('#classSelectionText').html('');
			// hide "Select Your Class" text
			$('#classIconsContainer').animate({ marginTop: '-=50px' }, 400);
			// Shift class icons up
			
		
		}
		
		$('#raceSelectionContainer').children('div.selectBox').attr('value', 'Choose...');
		$('#raceSelectionContainer').children('div.selectBox').children('span.selected').html('Choose...');
		$('#raceSelectionContainer').children('div.selectBox').children('div.selectOptions').children('span.selectOption').css('display', 'none');
		// Revert to race selection list to default state
		
		// $('.specTalents').fadeOut(); // Commented because when user selects a different class, the new talents are visible before the pane fades out
		$('.specTalents').hide();
		// $('#specTalentsSelectionContainer').fadeOut(); // Commented because when user selects a different class, the new talents are visible before the pane fades out
		$('#specTalentsSelectionContainer').hide();
		$('.specTalent.selected').removeClass('selected').css({ backgroundColor: '#000' });
		// Hide specs/talents pane and deselect all talents
		
		$('span[class$=Selected]').hide();
		$('span[class='+ classText +'Selected]').show();
		// Show the specs/talents DOM elements for the selected class
		
		$('#specChosenWrapper').fadeOut();
		// Hide "Begin Binding" button
				
	});
	
	//--------------------------------------------------
	// 'Select Your Race' select list
	//--------------------------------------------------
	
	enableSelectLists();
	
	//--------------------------------------------------
	// Draggable items in the spellbook
	//--------------------------------------------------
	
	$('.draggableAbility').draggable({
		cursor: 'pointer',
		cursorAt: { top: 20, left: 20 },
		zIndex: 1000,
		revert: 'invalid',
		helper: 'clone',
		appendTo: 'body',
		start: function(event, ui) {
			
		},
		drag: function(event, ui) {
			$(ui.helper).find('a').attr('rel', '');
		},
		stop: function(event, ui) {
			$(this).css('z-index', '500');
			$('div.roaming').find('a').attr('rel', '');
		}
	});
	
	$('.draggableAbility').mouseover(function() {
		var row = $(this).parents('.spellRow');
		if ($(row).css('opacity') == 0.3 && $(row).hasClass('dim') == true) {
			$(row).fadeTo(50, 0.75);
			$(row).addClass('illum');
		}
	});
	
	$('.draggableAbility').mouseleave(function() {
		var row = $(this).parents('.spellRow');
		if ($(row).hasClass('illum') && $(row).hasClass('dim') == true) {
			$(row).fadeTo(50, 0.3);
			$(row).removeClass('illum');
		}
	});
		
	//-------------------------------------------------
	// Draggable items on the keyboard
	//-------------------------------------------------
	
	roamingOptions = {
	// Set options for a draggable that has been relocated to the keyContainers
	
		helper: 'original',
		zIndex: 1000,
		start: function(event, ui) {
			$(this).css('opacity', '1');
			var src = $(this).parent();
		},
		stop: function(event, ui) {
			$(this).css('z-index', '500');
		},
		revert: function(valid) {
		
			if (!valid) {
			
				// Find the filename of the dropped image
				var thisImage = $(this).find('img').attr('src');
				
				// Count the number of matching icons in the keyboard
				var remainingIcons = $('#keyboardContainer img[src="' + thisImage + '"]').length;
				
				if (remainingIcons > 1) {
					// There is still an icon on the keyboard
					
					// Don't unfade the entry in the spellbook
				
				} else {
					// You've overwritten the last instance of the existing icon
				
					// Unfade the spellbook entry
					$('#spellbook').find('img').each(function() {
					
						if ($(this).attr('src') == thisImage) {
						
							$(this).parents('.spellRow').removeClass('dim').fadeTo('slow', 0.8).find('.spellName').css({ color: '#ecc40d' });
							
						}
						
					});
				}
			}
		}
	}
	
	//----------------------------------------	
	// Set behavior for "droppableContainer"s
	//----------------------------------------
	
	$('.droppableContainer').droppable({
		accept: '.draggableAbility',
		greedy: true,
		// Drop event only effects immediate parent container
		// hoverClass: 'keyContainer-hover',
		drop: function(event, ui) {
		// Icon is dropped on the keyboard
			
			var existingIcon = $(this).find('img').attr('src');
			// Find the filename of the icon
			
			var dragged = $(ui.draggable);
			var holder = $(this).find('.iconHolder, .iconHolder-fKey, .iconHolder-space, .iconHolder-mouse');
			
			$(dragged).parents('.spellRow').addClass('dim').fadeTo(50, 0.3).find('.spellName').css({ color: '#744a4a' });
			// Fade out the icon's spellbook entry, and prepare it for mouseover illumination
			
			if ($(dragged).hasClass('roaming')) {
			// Ability dragged from the keyboard
			
				$(dragged).appendTo(holder)
					.css({ left: 0, top: 0 })
					.draggable(roamingOptions);
				
			} else {
			// Ability dragged from the spellbook
			
				$(dragged).clone().appendTo(holder)
					.css({ left: 0, top: 0 })
					.css('height', '30px')
					.css('width', '30px')
					/*.css('border-color', '#8f8f8f')*/
					.css('border', '1px solid #7a7a7a')
					.css('opacity', '1')
					.addClass('roaming')
					.draggable(roamingOptions);
			
			}
			
			var numExistingIcon = $(this).find('img').length;
			
			if (numExistingIcon == 2) {
			// There is already an icon in this key
							
				if ($(dragged).find('img').attr('src') != existingIcon) {
				// Dragged icon is NOT the same as the overwritten icon
					
					// Number of existing icons left on the keyboard
					var remainingIcons = $('#keyboardContainer img[src="' + existingIcon + '"]').length;
					
					if (remainingIcons > 1) {
					// There is still an icon on the keyboard
						
						// Don't unfade the entry in the spellbook
					
					} else {
					// You've overwritten the last instance of the existing icon
				
					// Unfade the replaced icon's spellbook entry
					$('img[src="'+ existingIcon +'"]').parents('.spellRow').removeClass('dim').fadeTo('slow', 1.0).find('.spellName').css({ color: '#ecc40d' });
				
					}
				
				}
				
				// Remove the existing icon
				$(this).find('img[src="'+ existingIcon +'"]:first')
					.parents('div.draggableAbility').remove();
			
			}
		}
	});
	
	// -----------------------
	// Spellbook Page Turning
	// -----------------------
	
	var currPage = 1;
	var containerWidth = 900;
	var totalPages = $('#sb_totalPages').text();
	
	$('#sb_nextPage').mousedown(function() {
		if (currPage < totalPages) {
			$('.spellbookScrollingHolder').animate({
				'left': -containerWidth * currPage
			}, 1);
			currPage ++;
			$('#sb_pageNum').text('Page ' + currPage + ' of ' + totalPages);
		}
	});
	
	$('#sb_prevPage').mousedown(function() {
		if (currPage > 1) {
			currPage --;
			$('.spellbookScrollingHolder').animate({
				'left': (-containerWidth * (currPage - 1))
			}, 1);
			$('#sb_pageNum').text('Page ' + currPage + ' of ' + totalPages);
		}
	});
	
	/*###########################
	  ##                       ##
	  ##  Key Modifier States  ##
	  ##                       ##
	  ###########################*/
	
	$('div[id$="-shift"]').hide();
	$('div[id$="-ctrl"]').hide();
	$('div[id$="-alt"]').hide();
	// Hide all modifier state keys
	
	$('body').delay(500).keydown(function(e) {
		if (e.keyCode == 16) {
		// Shift pressed
		
			$('div[id$="-normal"]').hide().find('.iconHolder').show();
			$('div[id$="-shift"]').show().find('.iconHolder').show();
			$('div[id$="-ctrl"]').hide().find('.iconHolder').show();
			
			$('#shift').css({ background: '#4a6b74' });
			$('#shift').addClass('keyContainer-blueShadow');
			$('#shift').removeClass('keyContainer-greyShadow');
			// Highlight the shift key
			
			$('#modifierState-status').css({ color: '#4a6b74' });
			$('#modifierState-status').text('Shift');
			// Change modifier status text
			
		}
	}).keyup(function(e) {
		if (e.keyCode == 16) {
		// Shift released
		
			$('div[id$="-normal"]').show();
			$('div[id$="-shift"]').hide();
			$('div[id$="-ctrl"]').hide();
			
			$('#shift').css({ background: '#161616' });
			$('#shift').addClass('keyContainer-greyShadow');
			$('#shift').removeClass('keyContainer-blueShadow');
			// Return shift key's background to normal
			
			$('.keyContainer').removeClass('keyContainer-hover');
			// Remove the hover highlight from all keys
			
			$('#modifierState-status').css({ color: '#7A7A7A' });
			$('#modifierState-status').text('Normal');
			// Revert modifier status text
			
		}
	});
	
	if (os.toLowerCase().indexOf("win") >= 0) {
	// Windows user, so use Ctrl modifier
	
		$('body').delay(500).keydown(function(e) {
			if (e.keyCode == 17) {
			// Ctrl pressed
			
				$('div[id$="-normal"]').hide();
				$('div[id$="-shift"]').hide();
				$('div[id$="-ctrl"]').show();
				
				$('#ctrl').css({ background: '#744a4a' });
				$('#ctrl').addClass('keyContainer-redShadow');
				$('#ctrl').removeClass('keyContainer-greyShadow');
				// Highlight the ctrl key
				
				$('#modifierState-status').css({ color: '#744a4a' });
				$('#modifierState-status').text('Ctrl');
				// Change modifier status text
				
			}
		}).keyup(function(e) {
			if (e.keyCode == 17) {
			// Ctrl released
			
				$('div[id$="-normal"]').show();
				$('div[id$="-shift"]').hide();
				$('div[id$="-ctrl"]').hide();
				
				$('#ctrl').css({ background: '#161616' });
				$('#ctrl').addClass('keyContainer-greyShadow');
				$('#ctrl').removeClass('keyContainer-redShadow');
				// Return ctrl key's background to normal
				
				$('.keyContainer').removeClass('keyContainer-hover');
				// Remove the hover highlight from all keys
				
				$('#modifierState-status').css({ color: '#7A7A7A' });
				$('#modifierState-status').text('Normal');
				// Revert modifier status text
				
			}
		});
	
	} else {
	// Mac OS user, so use Alt modifier
	
		$('body').delay(500).keydown(function(e) {
			if (e.keyCode == 18) {
			// Alt pressed
			
				$('div[id$="-normal"]').hide();
				$('div[id$="-shift"]').hide();
				$('div[id$="-ctrl"]').show();
				
				$('#alt').css({ background: '#744a4a' });
				$('#alt').addClass('keyContainer-redShadow');
				$('#alt').removeClass('keyContainer-greyShadow');
				// Highlight the Alt key
				
				$('#modifierState-status').css({ color: '#744a4a' });
				$('#modifierState-status').text('Alt');
				// Change modifier status text
				
			}
		}).keyup(function(e) {
			if (e.keyCode == 18) {
			// Alt released
			
				$('div[id$="-normal"]').show();
				$('div[id$="-shift"]').hide();
				$('div[id$="-ctrl"]').hide();
				
				$('#alt').css({ background: '#161616' });
				$('#alt').addClass('keyContainer-greyShadow');
				$('#alt').removeClass('keyContainer-redShadow');
				// Return alt key's background to normal
				
				$('.keyContainer').removeClass('keyContainer-hover');
				// Remove the hover highlight from all keys
				
				$('#modifierState-status').css({ color: '#7A7A7A' });
				$('#modifierState-status').text('Normal');
				// Revert modifier status text
				
			}
		});
	
	}
	
	// -----------------------
	// 		Enter button
	// -----------------------
	
	$('#button-enter').mouseenter(function() {
		$(this).animate({ borderColor: '#ecc40d' }, 50);
	}).mouseleave(function() {
		$(this).animate({ borderColor: '#000' }, 50);
	});
	
}); /* END document ready */

/*#################
  ##             ##
  ##  FUNCTIONS  ##
  ##             ##
  #################*/

// --------------------
// Race Selection list
// --------------------

function enableSelectLists() {

	$('div.selectBox').each(function() {
	
		// Set 'selected' text to text of first option
		$(this).children('span.selected').html(
			$(this).children('div.selectOptions').children('span.selectOption:first').html()
		);
		
		// Set 'selected' value to value of first option
		$(this).attr(
			'value', $(this).children('div.selectOptions').children('span.selectOption:first').attr('value')
		);
		
			$(this).children('span.selected, span.selectArrow').click(function() {
				// User clicks on race list
			
				racesShowing = false;
				
				$(this).parents('.selectBox').find('.selectOption').each(function() {
					// For each race in the selection list
				
					if ($(this).css('display') == 'block') {
						// Races are displayed
					
						$(this).css({display: 'none'});
						racesShowing = true;
					
					}
					
				});
					
				if (racesShowing !== true) {
				
					$(this).parents('div.selectBox').find('span.selectOption').each(function() {
						// For each race in the select list
					
						if ( $.inArray($(this).attr('value'), availableRaces) !== -1 ) {
						
							$(this).css('display', 'block');
								
						} else {
						
							$(this).css('display', 'none');
						
						}
							
					});
				
				}
					
				$('span.selectOption:nth-child(1)').css('display', 'none');
				
			});
			
		$(this).find('span.selectOption').click(function() {
		
			$(this).parent('div.selectOptions').find('span.selectOption').css('display', 'none');
			
			$(this).closest('div.selectBox').attr(
				'value', $(this).attr('value')
			);
			
			$(this).parent().siblings('span.selected').html(
				$(this).html()
			);
			
			$('#selectedRace').attr('value', $(this).attr('value'));
			
			// $('div#raceSelectionText').animate({color: '#4A4A4A'}); MIGHT BRING BACK
			// Animate "Choose Your Race" text color
			
			if ($('#raceSelectionText').html() != '') {
			// Race has NEVER been selected
			
				$('#raceSelectionText').html('');
				// Hide "Select Your Race" text
				$('#raceSelectionContainer').animate({ marginTop: '-=50px' }, 200, function() {
				// Shift race selection up
				
					displaySpecsTalents();
					// Display Specs/Talents
					
				});
				
			
			} else {
			
				displaySpecsTalents();
				// Display Specs/Talents
				
				showBeginButton();
			
			}
			
		});
		
	});
	
}

// ---------------------------------
//	"Specialization & Talents" Pane
// ---------------------------------

function displaySpecsTalents() {

	$('.specTalents').fadeIn();
	$('#specTalentsSelectionContainer').fadeIn();
	$('#specTalentsSelectionContainer').fadeIn(function() {
	// Show specs/talents pane
	
		$('.specTalent').mouseenter(function() {
		// EVENT: Mouse enters a spec/talent
		
			if ($(this).hasClass('selected') == false) {
			// This spec/talent is NOT currently selected
			
				$('span', this).css({ opacity: '1.0' });
				$(this).css({ backgroundColor: '#1f1d0d' });
				// Highlight spec/talent
			
			}
			
		}).mouseleave(function() {
		// EVENT: Mouse leaves a spec/talent
		
			if ($(this).hasClass('selected') == false) {
			// This spec/talent is NOT currently selected
		
				$('span', this).css({ opacity: '0.5' });
				$(this).css({ backgroundColor: '#000' });
				// Return spec/talent to normal appearance
			
			}
			
		}).mousedown(function() {
		// EVENT: User clicks a spec or talent
		
			if ($(this).hasClass('selected') == false) {
			// This spec or talent is NOT currently selected
			
				$(this).addClass('selected');
				// Add selected class to this spec or talent
				
				$(this).siblings().find('span').css({ opacity: '0.5' });
				$(this).siblings().removeClass('selected').animate({ backgroundColor: '#000' }, 200);
				$(this).siblings().removeClass('selected');
				// Return all other specs/talents in this row to normal appearance
					
				$(this).animate({ backgroundColor: 'white' }, 30, function() {
					$(this).animate({ backgroundColor: '#504a22' }, 80);
				});
				// Flash animation to add interactivity to UI
				
				showBeginButton();
				// Show Begin button if enough specs/talents are selected
				
				var clickedRow = $(this).siblings('.specTalentRowLabel').text();
				var clickedText = $(this).find('.talentText span:visible').text();
				$('#selected'+ clickedRow).attr('value', clickedText);
				
			}
		
		});
	
	});
	
}

// ----------------
//	"Begin" Button
// ----------------

function showBeginButton() {

	var numTalentsSelected = $('.specTalent.selected').length;
	// Count number of spec/talents currently selected
	
	if (numTalentsSelected == 7) {
	
		$('#specChosenWrapper').fadeIn().find('#specChosen').mouseenter(function() {
			$(this).animate({ borderColor: '#ecc40d' }, 50);
		}).mouseleave(function() {
			$(this).animate({ borderColor: '#000' }, 50);
		});
	
	}

}

//-----------------------------
//	Spellbook ability filters
//-----------------------------

function checkedBoxes() {

	$('#sb_abilityFilter-wrapper').on('click', '.checkbox-checked', function() {
	// User UNTICKS a filter checkbox
	
		$(this).removeClass('checkbox-checked').addClass('checkbox-unchecked');
		// Untick the box
		
		if ($(this).hasClass('utility')) { spellType = 'utility'; }
		if ($(this).hasClass('buff')) { spellType = 'buff'; }
		if ($(this).hasClass('stance')) { spellType = 'stance'; }
		if ($(this).hasClass('pet')) { spellType = 'pet'; }
		// Determine the type of spell to be hidden
		
		$('div.spellRow').each(function () {
		// For each spell row
		
			if ($(this).find('span.abilityType').text() == spellType) {
			// Spell is the type that the user wishes to hide
			
				$(this).addClass('dim').fadeTo(50, 0.3).find('.spellName').css({ color: '#744a4a' });
				// Dim the spell
			}
		});
	});
	
}

function uncheckedBoxes() {

	$('#sb_abilityFilter-wrapper').on('click', '.checkbox-unchecked', function() {
	// User TICKS a filter checkbox
	
		$(this).removeClass('checkbox-unchecked').addClass('checkbox-checked');
		// Tick the box
		
		if ($(this).hasClass('utility')) { spellType = 'utility'; }
		if ($(this).hasClass('buff')) { spellType = 'buff'; }
		if ($(this).hasClass('stance')) { spellType = 'stance'; }
		if ($(this).hasClass('pet')) { spellType = 'pet'; }
		// Determine the type of spell to be shown
		
		$('div.spellRow').each(function () {
		// For each spell row
		
			if ($(this).find('span.abilityType').text() == spellType) {
			// Spell is the type that the user wishes to show
			
				var iconName = $(this).find('.draggableAbility img').attr('src');
				
				if ($('div#devicesWrapper img[src="' + iconName + '"]').length) {
				// Spell icon is already on the keyboard, so should not not highlighted in the spellbook
				
				} else {
				// Spell icon is not on the keyboard, so should be re-highlighted in the spellbook
			
					$(this).addClass('dim').fadeTo(100, 0.8).find('.spellName').css({ color: '#ecc40d' });
					// Undim the spell
				
				}
				
			}
		});
	});
}

function instructionsScreen() {
	
	$('div#sb_navButton-wrapper').on('click', 'div#instructions-link', function () {
		$('div#instructions-screen').show().bind('click', 'div#instructions-screen', function() {
			$('div#instructions-screen').hide();
		});
	});

}

function welcomePanel() {

	$('.classIcon').mousedown(function() {
		$('#infoPanel').hide();
	});

}

function beginHere() {

	$('#classSelectionText').delay(2000).animate({ color: '#ecc40d' }, 500).animate({ color: '#ccc' }, 500, beginHere);

}

function helper_dragMe() {

	$('div#helper_dragMe').click(function() { $(this).hide(); });
	$('div#helper_dragMe').show(800).delay(3000).hide(800);
	

}

function splitInto(str, len)
{
    var regex = new RegExp('.{' + len + '}|.{1,' + Number(len-1) + '}', 'g');
    return str.match(regex );
}