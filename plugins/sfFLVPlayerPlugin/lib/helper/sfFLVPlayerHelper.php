<?php


/**
   * @package sfFLVPlayer
   * 
   * @author Ruf <ruf@donax.ch>
   * @since  1.0.0 - 20 july 2007
   * @version 1.0.1
   * 
   * Original library by
   * @author Neolao
   * http://resources.neolao.com/flash/components/player_flv
   * 
   */

/**
   * Returns an embedded flash movie using the flv flash player from Neolao
   *
   * @param array  $flashvars   List of flashvars as described in 
   * http://resources.neolao.com/flash/components/player_flv
   * @param string $id	Identifier of the object
   * @param array  $html_options Contains html options
   * 
   * @author Ruf <ruf@donax.ch>
   * @since  1.0.0 - 20 july 2007
   *
   * 
   */
function FLVPlayer($id, $flashvars, $html_options = null) {
	if (isset ($flashvars['flv']) || isset ($flashvars['config']) || isset ($flashvars['configxml'])) {
		echo '<object id="' . $id . '" ';
		echo 'type="application/x-shockwave-flash" ';
		echo 'data="' . sfConfig :: get('sf_FLVPlayer_web_dir') . sfConfig :: get('sf_FLVPlayer_player') . '" ';

		if (!is_null($html_options)) {
			if (isset ($html_options['width'])) {
				echo ' width="' . $html_options['width'] . '"';
			} elseif(isset($flashvars['width'])) {
				echo ' width="' . $flashvars['width'] . '"';
			} else {
				throw new sfException('Flv width must be defined either in flashvars or in html_options');
			}
			if (isset ($html_options['height'])) {
				echo ' height="' . $html_options['height'] . '"';
			}elseif(isset($flashvars['height'])){
				echo ' height="' . $flashvars['height'] . '"';
			} else {
				throw new sfException('Flv height must be defined either in flashvars or in html_options');
			}
		} else {
		if(isset($flashvars['width'])){
			echo ' width="' . $flashvars['width'] . '"';
		} else {
				throw new sfException('Flv width must be defined either in flashvars or in html_options');
			}
		if(isset($flashvars['height'])){
			echo ' height="' . $flashvars['height'] . '"';
		} else {
				throw new sfException('Flv height must be defined either in flashvars or in html_options');
			}
		}

		echo '>';
		echo '<param name="movie" value="' . sfConfig :: get('sf_FLVPlayer_web_dir') . sfConfig :: get('sf_FLVPlayer_player') . '" />';

		echo '<param name="flashVars" value="';
		
		//Writing the array of flv files
	if (isset($flashvars['flv'])) {
		// If $flashvars is an array
		if (is_array($flashvars['flv'])) {
			$flv = $flashvars['flv'];
			for ($index = 0 ; $index < count($flashvars['flv']) ; $index++) {
				if ($index==0) {
					echo "&amp;flv=";
				}
				else{
					echo "|";
				}
				echo $flv[$index];
				;
			}
			// Otherwise
		} else {
			echo '&amp;flv=' . $flashvars['flv'];
		}
		// removing flv from the array before calling write_flashvars
		unset($flashvars['flv']);
	}
		

		write_flashvars($flashvars);

		echo '" />';
		echo '</object>';
	} else {
		echo __('No flash movie defined. Use the "flv" option to define it.');	
	}

}

/**
   * Appends the flashvars defined by the user to the flash movie
   *
   * @param array  $flashvars   List of flashvars as described in 
   * http://resources.neolao.com/flash/components/player_flv/templates/multi
   * 
   * @author Ruf <ruf@donax.ch>
   * @since  1.0.0 - 8 jun 2007
   *
   * 
   */
function write_flashvars($flashvars) {

	foreach ($flashvars as $flashvar => $value) {
		echo '&amp;' . $flashvar . '=' . $value;
	}
}

?>
