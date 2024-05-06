<?php
use app\Classes\BloodBank;
use app\Classes\ProfessionalDonor;
use app\Classes\VolunteerDonor;

include 'autoloader.php';


//initiating objects

$donor1 = new VolunteerDonor("Alice", 25, "A+");
$donor2 = new VolunteerDonor("Bob", 30, "B-");
$donor3 = new ProfessionalDonor("Charlie", 35, "O+");
$donor4 = new ProfessionalDonor("Aurin", 35, "A+");


$bloodBank = new BloodBank();




// Receive Blood From Donors

$bloodBank->receivedBlood($donor1);
$bloodBank->receivedBlood($donor2);
$bloodBank->receivedBlood($donor3);
$bloodBank->receivedBlood($donor4);


// display donors information and perform blood test 

$bloodBank->displayDonors();


// get donors by blood group

echo "\n Donors By Blood Group A+ \n";

$aPositiveDonors = $bloodBank->getDonorsByBloodGroup("A+");

foreach ($aPositiveDonors as $donor) {
    $donor->displayDonorInfo();
}

echo "\n";

// polymorphism 

echo "\n Polymorphism \n";

$donors = [$donor1, $donor2, $donor3];

foreach ($donors as $donor) {
    $donor->donateBlood();
}