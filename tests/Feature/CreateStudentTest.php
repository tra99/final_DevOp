<?php

use App\Models\Student;
use Illuminate\Foundation\Testing\RefreshDatabase;
use function PHPUnit\Framework\assertTrue;

uses(RefreshDatabase::class);

test('create student', function () {
    $student = Student::create([
        'name' => 'Hok Sochetra',
        'email' => 'e20201277@itc.edu.kh',
        'phone' => '012 345 678',
        'dob' => '2003-10-01'
    ]);

    assertTrue($student->exists());
});
