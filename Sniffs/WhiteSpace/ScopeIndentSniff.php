<?php
/**
 * PEAR_Sniffs_Whitespace_ScopeIndentSniff.
 *
 * PHP version 5
 *
 * @category  PHP
 * @package   PHP_CodeSniffer
 * @author    Greg Sherwood <gsherwood@squiz.net>
 * @author    Marc McIntyre <mmcintyre@squiz.net>
 * @copyright 2006 Squiz Pty Ltd (ABN 77 084 670 600)
 * @license   http://matrix.squiz.net/developer/tools/php_cs/licence BSD Licence
 * @version   CVS: $Id: ScopeIndentSniff.php 254092 2008-03-03 02:51:39Z squiz $
 * @link      http://pear.php.net/package/PHP_CodeSniffer
 */

if (class_exists('Generic_Sniffs_WhiteSpace_ScopeIndentSniff', true) === false) {
    $error = 'Class Generic_Sniffs_WhiteSpace_ScopeIndentSniff not found';
    throw new PHP_CodeSniffer_Exception($error);
}

/**
 * PEAR_Sniffs_Whitespace_ScopeIndentSniff.
 *
 * Checks that control structures are structured correctly, and their content
 * is indented correctly.
 *
 * @category  PHP
 * @package   PHP_CodeSniffer
 * @author    Greg Sherwood <gsherwood@squiz.net>
 * @author    Marc McIntyre <mmcintyre@squiz.net>
 * @copyright 2006 Squiz Pty Ltd (ABN 77 084 670 600)
 * @license   http://matrix.squiz.net/developer/tools/php_cs/licence BSD Licence
 * @version   Release: 1.3.0
 * @link      http://pear.php.net/package/PHP_CodeSniffer
 */
class Sisfo_Sniffs_WhiteSpace_ScopeIndentSniff extends Generic_Sniffs_WhiteSpace_ScopeIndentSniff
{

    /**
     * Any scope openers that should not cause an indent.
     *
     * @var array(int)
     */
    protected $nonIndentingScopes = array(T_SWITCH);

}//end class

?>
