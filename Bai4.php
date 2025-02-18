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
echo $students[0]["name"] . "<br>" .$students[0]["namSinh"] . "<br>" .$students[0]["gioiTinh"] . "<br>" .
    $students[0]["Toan"] . "<br>" .$students[0]["Van"] . "<br>" .$students[0]["English"] . "<br>";
    echo "<br>";    
print_r($students[0]);
echo "<br>";
print_r($students[1]);
?>