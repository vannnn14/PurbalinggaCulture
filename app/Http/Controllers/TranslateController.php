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

        // Pisahkan teks berdasarkan spasi
        $words = explode(' ', $text);

        $translatedWords = [];

        foreach ($words as $word) {
            if ($mode === 'ngapak') {
                $data = Kamus::where('ngapak', $word)->first();
                $translatedWords[] = $data ? $data->indonesia : $word; // kalau ga ada, biarkan
            } else {
                $data = Kamus::where('indonesia', $word)->first();
                $translatedWords[] = $data ? $data->ngapak : $word; // kalau ga ada, biarkan
            }
        }

        // Gabungkan hasil terjemahan jadi kalimat
        $translatedText = implode(' ', $translatedWords);

        return response()->json([
            'status' => 'success',
            'input' => $text,
            'mode' => $mode,
            'translation' => $translatedText
        ]);
    }
}
