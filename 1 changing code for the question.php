<?php
/**
     * ID:602110198
     * Name: Jingrong Zhuang
     * WeChat: Rz
     */
    printf("Input Number of Data: ");
    fscanf(STDIN,"%d\n",$data_num);

    for($i0=0;$i0<$data_num;$i0++){
        printf("Data %3d\n",$i0+1);
        printf("    Name Prefix (0: Mr., 1: Miss., 2: Mrs.): ");
        fscanf(STDIN,"%d",$NP);
        $prefix_num[]=$NP;
        printf("                                 First Name: ");
        fscanf(STDIN,"%s",$FN);
        $firstname[]=$FN;
        printf("                                  Last Name: ");
        fscanf(STDIN,"%s",$LN);
        $lastname[]=$LN;
        printf("Gender (0: Male, 1: Female, 2: Transgender): ");
        fscanf(STDIN,"%d",$GN);
        $gender_num[]=$GN;
        printf("                               Phone Number: ");
        fscanf(STDIN,"%s",$PN);
        $phonenum[]=$PN;
    }
    
    echo str_repeat("-",60);
    printf("\n");

    for($i=0;$i<$data_num;$i++){
        if($prefix_num[$i]==0){
            printf("Mr.");
        }
        else if($prefix_num[$i]==1){
            printf("Miss.");
        }
        else if($prefix_num[$i]==2){
            printf("Mrs.");
        }
        else printf("Wrong number entry\n");
        printf("%s %s\n",$firstname[$i],$lastname[$i]);
        printf("Gender: ");
        if($gender_num[$i]==0){
            printf("Male\n");
        }
        else if($gender_num[$i]==1){
            printf("Female\n");
        }
        else if($gender_num[$i]==2){
            printf("Transgender\n");
        }
        else printf("Wrong number entry\n");
        printf("Phone Number: %s\n",$phonenum[$i]);
        echo str_repeat("-",60);
        printf("\n");

    }

