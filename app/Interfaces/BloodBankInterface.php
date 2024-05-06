<?php

namespace app\Interfaces;

use app\Classes\BloodDonor;


interface BloodBankInterface
{
    public function receivedBlood(BloodDonor $donor);
    public function getDonorsByBloodGroup($bloodGroup);
}