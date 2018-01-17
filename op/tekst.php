
<?php
/**
 * Created by PhpStorm.
 * User: anna.karutina
 * Date: 15.01.2018
 * Time: 14:20
 */
class tekst
{
    // klassi muutujad
    // klassi omadused
    // class variables
    var $sonad = '';
    // klassi tegevused
    // klassi meetodid
    // class methods
    /**
     * tekst constructor.
     * @param string $sonad
     */
    public function __construct($sonad){
        $this->maaraTekst($sonad);
    }
    function maaraTekst($sonad){
        $this->sonad = $sonad;
    }
    function prindiTekst(){
        echo $this->sonad.'<br />';
    }
}