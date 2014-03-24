<?php
namespace wcf\system\bbcode;
use wcf\system\WCF;

/**
 * Parses the [headline] bbcode tag.
 * 
 * @author	Sascha Schickberger
 * @copyright	2014 Cetheus.net
 * @license	GNU Lesser General Public License <http://opensource.org/licenses/lgpl-license.php>
 * @package	com.woltlab.wcf
 * @subpackage	system.bbcode
 * @category	Community Framework
 */
class HeadlineBBCode extends AbstractBBCode {
	/**
	 * @see	\wcf\system\bbcode\IBBCode::getParsedTag()
	 */
	public function getParsedTag(array $openingTag, $content, array $closingTag, BBCodeParser $parser) {
		
		if ($parser->getOutputType() == 'text/html') {

			WCF::getTPL()->assign(array(
				'content' => $content,
				'anchor' => (!empty($openingTag['attributes'][0]) ? 'h-'.$openingTag['attributes'][0] : ''),
			));
			return WCF::getTPL()->fetch('headlineBBCodeTag');
		}
		else if ($parser->getOutputType() == 'text/simplified-html') {
			return ("----".$content."----\n");
		}
	}
}
