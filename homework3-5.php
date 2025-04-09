<?php
$year = date('Y');   // 현재 연도
$month = date('n');  // 현재 월

// 해당 달의 1일이 무슨 요일인지 계산 (0: 일요일 ~ 6: 토요일)
$first_day = mktime(0, 0, 0, $month, 1, $year);
$start_day = date('w', $first_day);

// 해당 달의 마지막 날짜 계산
$days_in_month = date('t', $first_day);

echo "<h2>{$year}년 {$month}월 달력</h2>";
echo "<table border='1' style='border-collapse:collapse; text-align:center;'>";
echo "<tr>
        <th style='color:red;'>일</th>
        <th>월</th>
        <th>화</th>
        <th>수</th>
        <th>목</th>
        <th>금</th>
        <th style='color:blue;'>토</th>
      </tr>";

echo "<tr>";

// 첫 주 시작 전 빈칸 출력
for ($i = 0; $i < $start_day; $i++) {
    echo "<td></td>";
}

// 날짜 출력
$day = 1;
for ($i = $start_day; $i < 7; $i++) {
    echo "<td>$day</td>";
    $day++;
}
echo "</tr>";

// 남은 주 출력
while ($day <= $days_in_month) {
    echo "<tr>";
    for ($i = 0; $i < 7; $i++) {
        if ($day <= $days_in_month) {
            echo "<td>$day</td>";
            $day++;
        } else {
            echo "<td></td>";
        }
    }
    echo "</tr>";
}
echo "</table>";
?>
