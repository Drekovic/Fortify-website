<?php
/*
Plugin Name: WoW Recruit
Description: World of Warcraft player recruitment
Author: Anaxes
Version: 1.0
*/

function wowRecruit()
{
$options = get_option("widget_wowRecruit");
	if($options['rec_0'] == '1' || $options['rec_1'] == '1' || $options['rec_8'] == '1' || $options['rec_18'] == '1'){?><h2>Tanking</h2><?PHP 
	if($options['rec_0'] == '1'){?><font color="#C41F3B">Death Knight</font><br /><?PHP }
	if($options['rec_1'] == '1'){?><font color="#FF7D0A">Druid</font><br /><?PHP }
    if($options['rec_8'] == '1'){?><font color="#F58CBA">Paladin</font><br /><?PHP }
	if($options['rec_18'] == '1'){?><font color="#C79C6E">Warrior</font><br /><?PHP }}
	
	if($options['rec_19'] == '1' ||$options['rec_2'] == '1' ||$options['rec_7'] == '1' ||$options['rec_17'] == '1' ||$options['rec_12'] == '1' ||$options['rec_13'] == '1' ||$options['rec_3'] == '1' ){?><h2>Melee DPS</h2><?PHP
	if($options['rec_19'] == '1'){?><font color="#C41F3B">Death Knight</font><br /><?PHP }
	if($options['rec_2'] == '1'){?><font color="#FF7D0A">Druid</font><br /><?PHP }
    if($options['rec_7'] == '1'){?><font color="#F58CBA">Paladin</font><br /><?PHP }
	if($options['rec_17'] == '1'){?><font color="#C79C6E">Warrior</font><br /><?PHP }
	if($options['rec_12'] == '1'){?><font color="#FFF569">Rogue</font><br /><?PHP }
	if($options['rec_13'] == '1'){?><font color="#2459FF">Shaman</font><br /><?PHP } }
	
	if($options['rec_14'] == '1' || $options['rec_6'] == '1' || $options['rec_16'] == '1' || $options['rec_10'] == '1' || $options['rec_5'] == '1'){?><h2>Ranged DPS</h2><?PHP 
	if($options['rec_3'] == '1'){?><font color="#FF7D0A">Druid</font><br /><?PHP }
	if($options['rec_14'] == '1'){?><font color="#2459FF">Shaman</font><br /><?PHP	}
	if($options['rec_6'] == '1'){?><font color="#69CCF0">Mage</font><br /><?PHP }
	if($options['rec_16'] == '1'){?><font color="#9482C9">Warlock</font><br /><?PHP }		
	if($options['rec_10'] == '1'){?><font color="#FFFFFF">Priest</font><br /><?PHP }
	if($options['rec_5'] == '1'){?><font color="#ABD473">Hunter</font><br /><?PHP }	 }
	
	if($options['rec_4'] == '1' || $options['rec_15'] == '1' || $options['rec_11'] == '1' || $options['rec_9'] == '1'){?><h2>Healing</h2><?PHP 
	if($options['rec_4'] == '1'){?><font color="#FF7D0A">Druid</font><br /><?PHP }
	if($options['rec_15'] == '1'){?><font color="#2459FF">Shaman</font><br /><?PHP	}
	if($options['rec_11'] == '1'){?><font color="#FFFFFF">Priest</font><br /><?PHP }
    if($options['rec_9'] == '1'){?><font color="#F58CBA">Paladin</font><br /><?PHP }}}

function widget_wowRecruit($args) {
  extract($args);
  echo $before_widget;
  echo $before_title;?>Recruiting<?php echo $after_title;
  wowRecruit();
  echo $after_widget;
}

function wowRecruit_control()
{

  $options = get_option("widget_wowRecruit");

  if ($_POST['wowRecruit-Submit'])
  {
	for ($e=0;$e < 20; $e++){
		$options['rec_'.$e] = $_POST['wowRecruit-rec_'.$e];	
		}

	update_option("widget_wowRecruit", $options);
  }
  
  //build array
  for ($e=0;$e < 20; $e++){
		$recuitment_array[$e] = $options['rec_'.$e];
		}
  
?><table cellspacing="3" cellpadding="3">
   <tr>
    <th>Class </th>
    <th colspan="4">Role</th>
  </tr>
  <tr>
    <th width="30%"></th>
    <th align="center">Tank</th>
    <th align="center">Melee DPS</th>
    <th align="center">Ranged DPS</th>
    <th align="center">Heal</th>
  </tr>
  <tr>
    <th> Death Knight </th>
    <td width="17%" align="center">
        <input type="checkbox" name="wowRecruit-rec_0" id="wowRecruit-rec_0" value="1" <?PHP if ($recuitment_array[0] == '1'){echo 'checked';}?>>
    </td>
    <td width="18%" align="center"><input type="checkbox" name="wowRecruit-rec_19" id="wowRecruit-rec_19" value="1" <?PHP if ($recuitment_array[19] == '1'){echo 'checked';}?>></td>
    <td width="18%" align="center">&nbsp;</td>
    <td width="17%" align="center">&nbsp;</td>
  </tr>
  <tr>
    <th> Druid </th>
    <td align="center">
        <input type="checkbox" name="wowRecruit-rec_1" id="wowRecruit-rec_1" value="1" <?PHP if ($recuitment_array[1] == '1'){echo 'checked';}?>>
    </td>
    <td align="center"><input type="checkbox" name="wowRecruit-rec_2" id="wowRecruit-rec_2" value="1" <?PHP if ($recuitment_array[2] == '1'){echo 'checked';}?>></td>
    <td align="center"><input type="checkbox" name="wowRecruit-rec_3" id="wowRecruit-rec_3" value="1" <?PHP if ($recuitment_array[3] == '1'){echo 'checked';}?>></td>
    <td align="center"><input type="checkbox" name="wowRecruit-rec_4" id="wowRecruit-rec_4" value="1" <?PHP if ($recuitment_array[4] == '1'){echo 'checked';}?>></td>
  </tr>
  <tr>
    <th> Hunter </th>
    <td align="center">&nbsp;</td>
    <td align="center">&nbsp;</td>
    <td align="center"><input type="checkbox" name="wowRecruit-rec_5" id="wowRecruit-rec_5" value="1" <?PHP if ($recuitment_array[5] == '1'){echo 'checked';}?>></td>
    <td align="center">&nbsp;</td>
  </tr>
  <tr>
    <th> Mage </th>
    <td align="center">&nbsp;</td>
    <td align="center">&nbsp;</td>
    <td align="center"><input type="checkbox" name="wowRecruit-rec_6" id="wowRecruit-rec_6" value="1" <?PHP if ($recuitment_array[6] == '1'){echo 'checked';}?>></td>
    <td align="center">&nbsp;</td>
  </tr>
  <tr>
    <th> Paladin </th>
    <td align="center"><input type="checkbox" name="wowRecruit-rec_8" id="wowRecruit-rec_8" value="1" <?PHP if ($recuitment_array[8] == '1'){echo 'checked';}?>></td>
    <td align="center"><input type="checkbox" name="wowRecruit-rec_7" id="wowRecruit-rec_7" value="1" <?PHP if ($recuitment_array[7] == '1'){echo 'checked';}?>></td>
    <td align="center">&nbsp;</td>
    <td align="center"><input type="checkbox" name="wowRecruit-rec_9" id="wowRecruit-rec_9" value="1" <?PHP if ($recuitment_array[9] == '1'){echo 'checked';}?>></td>
  </tr>
  <tr>
    <th> Priest </th>
    <td align="center">&nbsp;</td>
    <td align="center">&nbsp;</td>
    <td align="center"><input type="checkbox" name="wowRecruit-rec_10" id="wowRecruit-rec_10" value="1" <?PHP if ($recuitment_array[10] == '1'){echo 'checked';}?>></td>
    <td align="center"><input type="checkbox" name="wowRecruit-rec_11" id="wowRecruit-rec_11" value="1" <?PHP if ($recuitment_array[11] == '1'){echo 'checked';}?>></td>
  </tr>
  <tr>
    <th> Rogue </th>
    <td align="center">&nbsp;</td>
    <td align="center"><input type="checkbox" name="wowRecruit-rec_12" id="wowRecruit-rec_12" value="1" <?PHP if ($recuitment_array[12] == '1'){echo 'checked';}?>></td>
    <td align="center">&nbsp;</td>
    <td align="center">&nbsp;</td>
  </tr>
  <tr>
    <th> Shaman </th>
    <td align="center">&nbsp;</td>
    <td align="center"><input type="checkbox" name="wowRecruit-rec_13" id="wowRecruit-rec_13" value="1" <?PHP if ($recuitment_array[13] == '1'){echo 'checked';}?>></td>
    <td align="center"><input type="checkbox" name="wowRecruit-rec_14" id="wowRecruit-rec_14" value="1" <?PHP if ($recuitment_array[14] == '1'){echo 'checked';}?>></td>
    <td align="center"><input type="checkbox" name="wowRecruit-rec_15" id="wowRecruit-rec_15" value="1" <?PHP if ($recuitment_array[15] == '1'){echo 'checked';}?>></td>
  </tr>
  <tr>
    <th> Warlock </th>
    <td align="center">&nbsp;</td>
    <td align="center">&nbsp;</td>
    <td align="center"><input type="checkbox" name="wowRecruit-rec_16" id="wowRecruit-rec_16" value="1" <?PHP if ($recuitment_array[16] == '1'){echo 'checked';}?>></td>
    <td align="center">&nbsp;</td>
  </tr>
  <tr>
    <th> Warrior </th>
    <td align="center"><input type="checkbox" name="wowRecruit-rec_18" id="wowRecruit-rec_18" value="1" <?PHP if ($recuitment_array[18] == '1'){echo 'checked';}?>></td>
    <td align="center"><input type="checkbox" name="wowRecruit-rec_17" id="wowRecruit-rec_17" value="1" <?PHP if ($recuitment_array[17] == '1'){echo 'checked';}?> ></td>
    <td align="center">&nbsp;</td>
    <td align="center">&nbsp;</td>
  </tr>
</table><input type="hidden" id="wowRecruit-Submit" name="wowRecruit-Submit" value="1" /><?PHP

}

function wowRecruit_init()
{
  register_sidebar_widget(__('Wow Recruit'), 'widget_wowRecruit');    
  register_widget_control(   'Wow Recruit', 'wowRecruit_control', 350, 200 );
}
add_action("plugins_loaded", "wowRecruit_init");
?>
