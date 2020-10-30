<?php
/**
     * ID:602110198
     * Name: Jingrong Zhuang
     * WeChat: Rz
     */
/*
You can create grade data with with the following structure:

$gradeData = [
    'A' => [
        'score' => 4,
        'students' => [],
    ],
    'B' => [
        'score' => 3,
        'students' => [],
    ],
    'C' => [
        'score' => 2,
        'students' => [],
    ],
    'D' => [
        'score' => 1,
        'students' => [],
    ],
    'F' => [
        'score' => 0,
        'students' => [],
    ],
];

Then you can check valid grade and store student with the following code:

if(array_key_exists($grade, $gradeData)) {
    $gradeData[$grade]['students'][] = $name;
} else {
    printf("Please input A, B, C, D or F for grade!!!\n");
}


And for print them out:

$totalScore = 0;
$totalStudent = 0;
foreach($gradeData as $grade => $data) {
    $times = count($data['students']);
    $totalScore += $data['score'] * $times;
    $totalStudent += $times;
    printf("%s (%2d): %s\n", $grade, $times, implode(', ', $data['students']));
}
printf("Average Grade Point: %.2f", $totalScore/$totalStudent);
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
    $score=[4,3,2,1,0];
    foreach ($gra as $i0 => $gravalue){
        $times=0;
        foreach($student as $key =>$students){
            if ($students == $gravalue){
            $times=$times+1;}}
        $scores[]=$times*$score[$i0];
        printf("%s ( %d): ",$gravalue,$times);
        $repeat[$i0]=array_keys($student,$gravalue);
        for($i1=0;$i1<=count($repeat);$i1++){
            if ($i1==0 && $repeat[$i0][$i1] != null)
            printf("%s",$repeat[$i0][$i1]);
            else if ($i1>0 && $repeat[$i0][$i1] != null)
            printf(", %s",$repeat[$i0][$i1]);
            else printf("");
            }
        printf("\n");}
        $average=array_sum($scores)/5;
        printf("Average Grade Point: %.2f",$average);
            




