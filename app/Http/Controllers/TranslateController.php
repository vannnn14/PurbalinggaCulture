<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kamus;

class TranslateController extends Controller
{
    public function translate(Request $request)
    {
        $data = $request->validate([
            'text' => 'required|string',
            'mode' => 'in:ngapak,indo'
        ]);

        $text = mb_strtolower(trim($data['text']));
        $mode = $data['mode'] ?? 'ngapak';

        // Pecah token sambil mempertahankan spasi/whitespace
        $tokens = preg_split('/(\s+)/u', $text, -1, PREG_SPLIT_DELIM_CAPTURE);

        // Ambil kata unik (bukan whitespace)
        $words = array_values(array_unique(array_filter($tokens, fn($t) => !preg_match('/^\s+$/u', $t) && $t !== '')));

        if ($mode === 'ngapak') {
            $rows = Kamus::whereIn('ngapak', $words)->get();
            $map  = $rows->pluck('indonesia', 'ngapak')->toArray(); // ['kowe' => 'kamu', ...]
        } else {
            $rows = Kamus::whereIn('indonesia', $words)->get();
            $map  = $rows->pluck('ngapak', 'indonesia')->toArray();
        }

        // Susun kembali tokens: jika token whitespace tetap, kalau kata ganti jika ada di map
        $out = array_map(function ($t) use ($map) {
            if (preg_match('/^\s+$/u', $t)) return $t;
            return $map[$t] ?? $t;
        }, $tokens);

        return response()->json([
            'translation' => implode('', $out)
        ]);
    }
}
