<?php
//Họ tên, Ngày sinh, Giới tính, Điểm Toán, Điểm Văn, Điểm Tiếng anh.
$students = [
    array("name" => "Le Van Ngu", "namSinh" => "30-3-2003", "gioiTinh" => "Nam", "Toan" => 7, "Van" => 7, "English" => 7),
    array("name" => "Nguyen Van Gioi", "namSinh" => "15-7-2003", "gioiTinh" => "Nam", "Toan" => 10, "Van" => 9, "English" => 10),
    array("name" => "Tran Van Minh", "namSinh" => "25-5-2002", "gioiTinh" => "Nam", "Toan" => 8, "Van" => 8, "English" => 8),
    array("name" => "Le Van Hai", "namSinh" => "20-12-2001", "gioiTinh" => "Nu", "Toan" => 9, "Van" => 8, "English" => 9),
    array("name" => "Tam Trung Binh", "namSinh" => "5-4-2003", "gioiTinh" => "Nam", "Toan" => 5, "Van" => 6, "English" => 8),
    array("name" => "Nguyen Van Thanh", "namSinh" => "10-10-2002", "gioiTinh" => "Nam", "Toan" => 7, "Van" => 7, "English" => 9),
    array("name" => "Tran Van Dung", "namSinh" => "12-11-2002", "gioiTinh" => "Nam", "Toan" => 9, "Van" => 9, "English" => 10),
    array("name" => "Le Van Thanh", "namSinh" => "15-9-2003", "gioiTinh" => "Nu", "Toan" => 8, "Van" => 8, "English" => 9),
    array("name" => "Nguyen Van Tuan", "namSinh" => "8-6-2003", "gioiTinh" => "Nam", "Toan" => 9, "Van" => 9, "English" => 9),
    array("name" => "Nguyen Ngoc Yen", "namSinh" => "19-9-2003", "gioiTinh" => "Nu", "Toan" => 7, "Van" => 10, "English" => 7),
    array("name" => "Le Tran Van", "namSinh" => "20-12-2001", "gioiTinh" => "Nu", "Toan" => 9, "Van" => 8, "English" => 9),
];
// Hàm tính điểm trung bình và thêm vào mảng sinh viên
function calculateAverage(&$students) {
    foreach ($students as &$student) {
        $student['DiemTB'] = ($student['Toan'] + $student['Van'] + $student['English']) / 3;
    }
}

// Hàm in sinh viên đã sắp xếp theo tên
function printSortedStudents($students) {
    usort($students, function($a, $b) {
        return strcmp($a['name'], $b['name']);
    });
    
    foreach ($students as $student) {
        echo $student['name'] . ",  " . $student['namSinh'] . ",  " . $student['gioiTinh'] . ",  " .
             $student['Toan'] . " / " . $student['Van'] . " / " . $student['English'] . "<br>" .
             "<br>";
    }
}

// Hàm trả về sinh viên nữ
function getFemaleStudents($students) {
    return array_filter($students, function($student) {
        return $student['gioiTinh'] === 'Nu';
    });
}
function getStudentsWithHighAverage($students) {
    return array_filter($students, function($student) {
        return $student['DiemTB'] >= 8.0;
    });
}
// Hàm sắp xếp lại mảng sinh viên
function sortStudents(&$students) {
    usort($students, function($a, $b) {
        return strcmp($a['name'], $b['name']);
    });
}

// Hàm tìm bạn nữ có Điểm TB cao nhất
function findTopFemaleStudent($students) {
    $femaleStudents = getFemaleStudents($students);
    $topStudent = null;

    foreach ($femaleStudents as $student) {
        if ($topStudent === null || $student['DiemTB'] > $topStudent['DiemTB']) {
            $topStudent = $student;
        }
    }

    return $topStudent;
}

// Tính điểm trung bình cho sinh viên
calculateAverage($students);

// In sinh viên đã sắp xếp theo tên
echo "<b>1-3.</b>Tổng hợp bài 1 đến bài 3.<br><br>";
echo "<b>Họ tên, Ngày sinh, Giới tính, Điểm Toán / Điểm Văn / Điểm Tiếng anh.<br></b>";
printSortedStudents($students);

// Lấy sinh viên nữ và in ra
$femaleStudents = getFemaleStudents($students);
echo "<b>4.</b> Danh sách sinh viên nữ:<br>";
foreach ($femaleStudents as $student) {
    echo $student['name'] . "<br>";
}

// Lấy sinh viên có Điểm TB >= 8.0 và in ra
$highAverageStudents = getStudentsWithHighAverage($students);
echo "<br><b>5.</b> Danh sách sinh viên có Điểm TB >= 8.0:<br>";
foreach ($highAverageStudents as $student) {
    echo $student['name'] . "<br>";
}

// Sắp xếp lại mảng sinh viên và in ra
sortStudents($students);
echo "<br><b>6.</b> Danh sách sinh viên sau khi sắp xếp lại:<br>";
printSortedStudents($students);

// Tìm bạn nữ có Điểm TB cao nhất và in ra
$topFemaleStudent = findTopFemaleStudent($students);
if ($topFemaleStudent) {
    echo "<b>7.</b> Bạn nữ có Điểm TB cao nhất: " . $topFemaleStudent['name'] . " với Điểm TB: " . number_format($topFemaleStudent['DiemTB'], 2) . "<br>";
}

?>
