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
          <div class="card text-center my-2" style="width: 18rem; width: 100%;">
            <img src="people.png" class="card-img-top rounded-circle" alt="image" style="padding: 30%;">
            <div class="card-body">
            <h5 class="card-title">'.$student['name'].'</h5>
              <p class="card-text">'.$student['e-mail'].'</p>
            </div>
            <ul class="list-group list-group-flush">
              <li class="list-group-item">'.$student['phone'].'</li>
              <li class="list-group-item">'.$student['enroll Number'].'</li>
              <li class="list-group-item">'.$student['date of admission'].'</li>
            </ul>
            <div class="card-body" style="background-color:#FAFFC1">
              <a href="#"><img class="pe-2" src="modif.png" alt="icon"></a>
              <a href="#"><img src="poub.png" alt="icon"></a>
            </div>
          </div>'; 
}        
?>

