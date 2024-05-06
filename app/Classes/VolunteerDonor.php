<?php


namespace app\Classes;

use app\Classes\BloodDonor;

class VolunteerDonor extends BloodDonor
{

    public function donateBlood()
    {

        echo $this->name . " is donating blood \n";

    }



}

