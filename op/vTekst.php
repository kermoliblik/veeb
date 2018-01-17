<?php
/**
 * Created by PhpStorm.
 * User: dante
 * Date: 17-Jan-18
 * Time: 11:08
 */

require_once 'tekst.php';

class vTekst extends tekst
{
    //class omadus
    var $tekstiVarv = '';

    public function __construct($sonad = '', $varv = '')
    {
        parent::__construct($sonad);
        $this->maaraVarv($varv);
    }


    function maaraVarv($varv){
        $this->tekstiVarv = $varv;
    }

    function prindiTekst()
    {
        if($this->tekstiVarv == '') {
            parent::prindiTekst();
        } else {
            echo '<table>';
            echo '</table>'
        }
    }


}