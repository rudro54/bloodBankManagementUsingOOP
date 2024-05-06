<?php

namespace app\Classes;

use app\Interfaces\BloodBankInterface;
use app\Traits\BloodTestingTrait;


class BloodBank implements BloodBankInterface
{

    use BloodTestingTrait;

    private $donors = [];



    public function receivedBlood(BloodDonor $donor)
    {
        $this->donors[] = $donor;

        echo "Blood Received From " . $donor->getName() . "\n";

    }
    public function getDonorsByBloodGroup($bloodGroup)
    {

        $matchingDonors = [];

        foreach ($this->donors as $donor) {
            if ($donor->getBloodGroup() == $bloodGroup) {
                $matchingDonors[] = $donor;
            }

        }

        return $matchingDonors;


    }


    public function displayDonors()
    {
        echo "List Of Donors : \n";
        echo "As Per Donor Class  : \n";

        foreach ($this->donors as $donor) {
            $donor->displayDonorInfo();


            echo "This Info Taken From Blood Bank :  \n";

            $this->testBloodGroup($donor);

            echo "\n";
        }
    }

}