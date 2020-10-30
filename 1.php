<?php
/**
     * ID:602110198
     * Name: Jingrong Zhuang
     * WeChat: Rz
     */
    printf("Input Number of Data: ");
    fscanf(STDIN,"%d\n",$data_num);
/*
Instead of using separated variables for storing your data,
try to use associative array to store them with the following structure:

[
    [
        'prefix' = > '...',
        'firstName' => '...',
        'lastName' => '...',
        'gender' => '...',
        'phone' => '...',
    ],

    [
        'prefix' = > '...',
        'firstName' => '...',
        'lastName' => '...',
        'gender' => '...',
        'phone' => '...',
    ],

    ...
]

And for prefix and gender use the following data:

    $prefixData = ['Mr.', 'Miss.'];
    $genderData = ['Male', 'Female'];


Then you do not need if-statement get the real data from code (0, 1).
e.g. in your code you can use:

printf("Gender: %s\n", $genderData[$gender_num[$i]]);

or for checking the wrong number just use the following code.

printf("Gender: %s\n", (array_key_exists($gender_num[$i], $genderData))? $genderData[$gender_num[$i]] : 'Wrong number entry');

Imagin that if you have 10 posible value: Male, Female, Transgender, Unknow, ...

*/
    for($i0=0;$i0<$data_num;$i0++){
        printf("Data %3d\n",$i0+1);
        printf("   Name Prefix (0: Mr., 1: Miss.): ");
        fscanf(STDIN,"%d",$NP);
        $prefix_num[]=$NP;
        printf("                       First Name: ");
        fscanf(STDIN,"%s",$FN);
        $firstname[]=$FN;
        printf("                        Last Name: ");
        fscanf(STDIN,"%s",$LN);
        $lastname[]=$LN;
        printf("      Gender (0: Male, 1: Female): ");
        fscanf(STDIN,"%d",$GN);
        $gender_num[]=$GN;
        printf("                     Phone Number: ");
        fscanf(STDIN,"%s",$PN);
        $phonenum[]=$PN;
    }
    
    echo str_repeat("-",53);
    printf("\n");

    for($i=0;$i<$data_num;$i++){
        if($prefix_num[$i]==0){
            printf("Mr.");
        }
        else if($prefix_num[$i]==1){
            printf("Miss.");
        }
        else printf("Wrong number entry");
        printf("%s %s\n",$firstname[$i],$lastname[$i]);
        printf("Gender: ");
        if($gender_num[$i]==0){
            printf("Male\n");
        }
        else if($gender_num[$i]==1){
            printf("Female\n");
        }
        else printf("Wrong number entry");
        printf("Phone Number: %s\n",$phonenum[$i]);
        echo str_repeat("-",53);
        printf("\n");

    }

