<?php
    $students = [
    [
        'name'  =>  'username',
        'e-mail'  =>  'user@email.com',
        'phone'  =>  '7305477760',
        'enroll Number' => '1234567305477760',
        'date of admission' => '08-Dec, 2021'
    ],
    [
        'name'  =>  'username',
        'e-mail'  =>  'user@email.com',
        'phone'  =>  '7305477760',
        'enroll Number' => '1234567305477760',
        'date of admission' => '08-Dec, 2021'
    ],
    [
        'name'  =>  'username',
        'e-mail'  =>  'user@email.com',
        'phone'  =>  '7305477760',
        'enroll Number' => '1234567305477760',
        'date of admission' => '08-Dec, 2021'
    ],
    [
        'name'  =>  'username',
        'e-mail'  =>  'user@email.com',
        'phone'  =>  '7305477760',
        'enroll Number' => '1234567305477760',
        'date of admission' => '08-Dec, 2021'
    ],[
        'name'  =>  'username',
        'e-mail'  =>  'user@email.com',
        'phone'  =>  '7305477760',
        'enroll Number' => '1234567305477760',
        'date of admission' => '08-Dec, 2021'
    ],[
        'name'  =>  'username',
        'e-mail'  =>  'user@email.com',
        'phone'  =>  '7305477760',
        'enroll Number' => '1234567305477760',
        'date of admission' => '08-Dec, 2021'
    ]
    ];
foreach ($students as  $student) {
    echo ' 
            <div class="row bg-white rounded my-2 me-1" style="width: 100%;">
            <div class="col pb-2" ><img  src="people.png" alt="image"></div>
            <div class="col py-3">'.$student['name'].'</div>
            <div class="col py-3">'.$student['e-mail'].'</div>
            <div class="col py-3">'.$student['phone'].'</div>
            <div class="col py-3">'.$student['enroll Number'].'</div>
            <div class="col py-3">'.$student['date of admission'].'</div>
            <div class="col text-end py-3">
              <a href="#"><img class="pe-2"  src="modif.png" alt="icon"></a>
              <a href="#"><img src="poub.png" alt="icon"></a>
            </div>
            </div>'; 

}        
?>