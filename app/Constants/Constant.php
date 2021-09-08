<?php

namespace App\Constants;

class Constant
{
    const gender = ['Male' => 1, 'Female' => 2, 'Other' => 3];
    const religion = ['Islam' => 1, 'Christianity' => 2, 'Hinduism' => 3, 'Others' => 4];
    const religions = ['Muslim' => 1, 'Christian' => 2, 'Agnostic' => 3, 'Spiritual' => 4 , 'Buddhist' => 5 , 'Hindu' => 6 , 'Jew' => 7  , 'Catholic' => 8 ,     'Orthodox'=> 9 , 'Protestant'=> 10,  'Other'=> 11];
    const marital_status = ['Single' => 1, 'Married' => 2, 'Divorced' => 3 , 'Widower' => 4];
    const Language = ['English' => 1, 'Arabic' => 2, 'Persian' => 3];
    const Complexion = ['Very Fair' => 1, 'Fair' => 2, 'Dark' => 3 , 'Very Dark' => 4];
    const Body_shape = ['Slim' => 1, 'Athelete' => 2, 'Normal' => 3 ];
    const Life_style = ['Very Modern' => 1, 'Modern' => 2, 'Simple' => 3  , 'Very Simple' => 4 ];
    const Physique = ['Slim' => 1, 'Fat' => 2 ];
    const Salary = ['1000-2000 §' => 1, '2000-3000 §' => 2, '3000-4000 §' => 3 , '4000-6000 §' => 3  , 'Over 6000§' => 4 ];
    const height = ['1-ft' => 1, '2-ft' => 2 , '3-ft' => 3 , '4-ft' => 4 , '5-ft' => 5 , '6-ft' => 6 , '7-ft' => 7 ];
    const isActive = ['Active' => 1, 'Inactive' => 0];
    const types  = ['Matcher' => 1, 'Agent' => 2 , 'Parent' => 3 ];
    const EyesColor = ['Blue' => 1, 'Light Brown' => 2 , 'Dark Brown' => 3 , 'Green' => 4 , 'Gray' => 5 , 'Mixed' => 6 , 'Others' => 7];
    const SkinColor = ['Blue' => 1, 'Light Brown' => 2 , 'Dark Brown' => 3 , 'Blonde' => 4 , 'White' => 5 , 'Black' => 6 ];
    const Ethnicity = ['Muslim' => 1, 'African' => 2 , 'Latin America' => 3 , 'Mixed' => 4 , 'Indian' => 5 , 'Arabic' => 6 , 'European' => 7 , 'American' => 8 , 'Australin' => 8];
    const Inches = ['0-inc' => 0, '1-inc' => 1, '2-inc' => 2 , '3-inc' => 3 , '4-inc' => 4 , '5-inc' => 5 , '6-inc' => 6 , '7-inc' => 7 , '8-inc' => 8 , '9-inc' => 9 , '10-inc' => 10 , '11-inc' => 11 ];
    const displayInMenus = ['No' => 0, 'Yes' => 1];
    const perPage = ['10', '25', '50', '100'];
    const allowedImgExts = ['jpg', 'jpeg', 'png', 'gif','svg'];
    const baseURL = 'http://localhost/matrimonial/api/v1';

}

