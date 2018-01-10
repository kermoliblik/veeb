<?php
/**
 * Created by PhpStorm.
 * User: dante
 * Date: 10-Jan-18
 * Time: 14:21
 */

function vorm()
{

    echo '
        <form action="salvestus.php" method="post">
            Eesnimi:<br />
            <input type="text" name="eesnimi">
            Perenimi:<br />
            <input type="text" name="perenimi">
            <br />
            <input type="submit" value="salvesta">
        </form>
    ';
}
vorm();