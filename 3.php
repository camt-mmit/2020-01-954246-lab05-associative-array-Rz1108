<?php
/**
     * ID:602110198
     * Name: Jingrong Zhuang
     * WeChat: Rz
     */
/*
You can create grade data with with the following structure:

$gradeData = [
    'A' => [],
    'B' => [],
    'C' => [],
    'D' => [],
    'F' => [],
];

Then you can check valid grade and store student with the following code:

if(array_key_exists($grade, $gradeData)) {
    $gradeData[$grade][] = $name;
} else {
    printf("Please input A, B, C, D or F for grade!!!\n");
}


And for print them out:

foreach($gradeData as $grade => $students) {
    printf("%s (%2d): %s\n", $grade, count($students), implode(', ', $students));
}

*/

    do{
        $name=null;
        $grade=null;
        printf("Student %3d: (name grade, enter for end of data): ",$i=$i+1);
        fscanf(STDIN,"%s %s\n",$name,$grade);
        if ($name == null)
    break;
        else{
            if($grade == "A" || $grade == "B" ||$grade == "C"||$grade == "D"||$grade == "F"){
                $names[]=$name;
                $grades[]=$grade;
            $student[$names[$i-1]]=$grades[$i-1];
            }
            else {
                printf("Please input A, B, C, D or F for grade!!!\n");
                $i=$i-1;
        }}}while ($name != null);

    printf("\n");
    
    $gra=['A','B','C','D','F'];
    foreach ($gra as $i0 => $gravalue){
        $times=0;
        foreach($student as $key =>$students){
            if ($students == $gravalue){
            $times=$times+1;}}
        printf("%s ( %d): ",$gravalue,$times);
        $repeat[$i0]=array_keys($student,$gravalue);
        for($i1=0;$i1<=count($repeat);$i1++){
        if ($i1==0 && $repeat[$i0][$i1] != null)
            printf("%s",$repeat[$i0][$i1]);
            else if ($i1>0 && $repeat[$i0][$i1] != null)
            printf(", %s",$repeat[$i0][$i1]);
            else printf("");
            }printf("\n");}
            




