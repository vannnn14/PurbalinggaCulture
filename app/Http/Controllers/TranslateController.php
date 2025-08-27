<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kamus;

class TranslateController extends Controller
{
    public function translate(Request $request)
    {
        $text = strtolower($request->input('text'));
        $mode = $request->input('mode');

        // Cari di tabel tb_kamus
        if ($mode === 'ngapak') {
            $data = Kamus::where('ngapak', $text)->first();
        } else {
            $data = Kamus::where('indonesia', $text)->first();
        }

        return response()->json([
            'status' => 'success',
            'input' => $text,
            'mode' => $mode,
            'translation' => $data ? ($mode === 'ngapak' ? $data->indonesia : $data->ngapak) : "Tidak ditemukan"
        ]);
    }
}
