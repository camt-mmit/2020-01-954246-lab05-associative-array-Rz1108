<?php
/**
     * ID:602110198
     * Name: Jingrong Zhuang
     * WeChat: Rz
     */

/*
Instead of using separated variables for storing your data,
try to use associative array to store them with the following structure:

[
    [
        'prefix' = > '...',
        'firstName' => '...',
        'lastName' => '...',
        'gender' => '...',
        'phone' => ['...', ... ],
    ],

    [
        'prefix' = > '...',
        'firstName' => '...',
        'lastName' => '...',
        'gender' => '...',
        'phone' => ['...', ... ],
    ],

    ...
]

And for prefix and gender use the following data:

    $prefixData = ['Mr.', 'Miss.', 'Mrs.'];
    $genderData = ['Male', 'Female', 'Transgender'];

Then you do not need if-statement get the real data from code (0, 1).
e.g. in your code you can use:

printf("Gender: %s\n", $genderData[$gender_num[$i]]);

*/

// *** I recommand you to initial $i before use it.
$i = 0;
do{
        printf("Data %3d\n",$i=$i+1);
        
        printf("      Name Prefix (0: Mr., 1: Miss., 2: Mrs.): ");
        $NP=null;
        fscanf(STDIN,"%s",$NP);
        if ($NP==null)
    break;
    else {
        $prefix_num[]=$NP;
        printf("                                   First Name: ");
        fscanf(STDIN,"%s",$FN);
        $firstname[]=$FN;
        printf("                                    Last Name: ");
        fscanf(STDIN,"%s",$LN);
        $lastname[]=$LN;
        printf("  Gender (0: Male, 1: Female, 2: Transgender): ");
        fscanf(STDIN,"%d",$GN);
        $gender_num[]=$GN;
        // you can use while(true) for infinity loop.
        //for ($j=1;$j>0;$j++) {
        while(true) {
            printf("                                  Phone Number%3d: ",$j);
        $PN=null;
        fscanf(STDIN,"%s",$PN);
        if ($PN==null){
        break;
        }
        else $phonenum[$i-1][$j-1]=$PN;
    }}}
    while ($NP!=null);

    printf("\n");

    echo str_repeat("-",53);
    printf("\n");

    foreach($prefix_num as $i0 => $prefix){
        if($prefix==0){
            printf("Mr.");
        }
        else if($prefix==1){
            printf("Miss.");
        }
        else if($prefix==2){
            printf("Mrs.");
        }  
        else printf("Wrong number entry");
        printf("%s %s\n",$firstname[$i0],$lastname[$i0]);
        printf("Gender: ");
        if($gender_num[$i0]==0){
            printf("Male\n");
        }
        else if($gender_num[$i0]==1){
            printf("Female\n");
        }
        else if($gender_num[$i0]==2){
            printf("Transgender\n");
        }
        else printf("Wrong number entry\n");
        printf("Phone Number: ");
        // *** you can use implode to do this job.
        // foreach ($phonenum[$i0] as $i1 => $phones){
        // if ($i1==0){
        //     printf("%s",$phones);}
        // else printf(", %s",$phones);}
        printf("%s", implode(', ', $phonenum[$i0]));
        printf("\n");
        echo str_repeat("-",53);
    printf("\n");
    }