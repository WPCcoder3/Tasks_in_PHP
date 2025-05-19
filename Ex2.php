<?php
function calculate_the_Vo_and_To($V1, $T1, $V2, $T2) {
    $Vo = $V1 + $V2;
    $To = ($V1 * $T1 + $V2 * $T2) / ($V1 + $V2);
    return [$Vo, $To];
}

    echo "Введите объем первой жидкости в литрах: ";
    $V1 = (float)trim(fgets(STDIN));

    echo "Введите температуру первой жидкости в Кельвинах: ";
    $T1 = (float)trim(fgets(STDIN));

    echo "Введите объем второй жидкости в литрах: ";
    $V2 = (float)trim(fgets(STDIN));

    echo "Введите температуру второй жидкости в Кельвинах: ";
    $T2 = (float)trim(fgets(STDIN));

    list($Vo, $To) = calculate_the_Vo_and_To($V1, $T1, $V2, $T2);

    echo "Ответ: V_смеси = " . round($Vo, 2) . " (л), T_смеси = " . round($To, 2) . " (К)\n";

?>
