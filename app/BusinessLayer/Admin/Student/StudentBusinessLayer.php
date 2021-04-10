<?php

namespace App\BusinessLayer\Admin\Student;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class StudentBusinessLayer
{
    public function handleStoreStudent($studentData)
    {
        try {
            DB::beginTransaction();

            // insert into user
            $user = User::create([
                'name' => $studentData['first_name'].' '.$studentData['first_name'],
                'email' => $studentData['email'],
                'password' => Hash::make('default')
            ]);
            $user->assignRole('student');

            // insert into student
            if (request()->file('photo')) {
                $studentData['photo'] = request()->file('photo')
                ->store('images/photo', 'public');
            }
            request()->merge(['user_id' => $user->id]);
            unset($studentData['email']);
            $user->student()->create($studentData);

            DB::commit();
        } catch (\Exception $error) {
            DB::rollBack();
            Log::error($error);
        }
    }
}