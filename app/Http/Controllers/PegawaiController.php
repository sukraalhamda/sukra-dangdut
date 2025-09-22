<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PegawaiController
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $name             = "Sukra Alhamda";
        $birthDate        = new \DateTime('20025-08-13');
        $tgl_harus_wisuda = new \DateTime('2025-10-28');
        $current_semester = 3;

        $today  = new \DateTime();
        $my_age = $today->diff($birthDate)->y;


        $hobbies = ["Dengarin musik", "futsal", "Lari", "Membaca", "Gaming"];

        $time_to_study_left = $today->diff($tgl_harus_wisuda)->days;

        $future_goal = "Menjadi Software Engineer";

        if ($current_semester < 3) {
            $info_semester = "Masih Awal, Kejar TAK";
        } else {
            $info_semester = "Jangan main-main, kurang-kurangi main game!";
        }

        // kirim ke view
        return view('pegawai', [
            'name'               => $name,
            'my_age'             => $my_age,
            'hobbies'            => $hobbies,
            'tgl_harus_wisuda'   => $tgl_harus_wisuda->format('Y-m-d'),
            'time_to_study_left' => $time_to_study_left,
            'current_semester'   => $current_semester,
            'info_semester'      => $info_semester,
            'future_goal'        => $future_goal,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
