<?php

namespace App\Http\Controllers;

use App\Models\Word;
use Illuminate\Http\Request;

class WordController extends Controller
{
    public function mostRelevant($length, $c1)
    {
        $constraints = [
            'knownAndDefined' => [
                'c1' => 't',
                'c2' => 'r',
                'c3' => 'e',
                'c6' => 'e',
            ],
            'knownButNotHere' => [
                'c3' => 'r',
                'c4' => 'e',
                'c5' => 'e',
            ],
            'in' => ['r', 'e'],
            'excluded' => ['a', 's', 'm', 'i']
        ];


        // Création de la query avec toutes les contraintes
        $query = Word::where('length', $length);

        foreach ($constraints['knownAndDefined'] as $char => $value) {
            $query = $query->where($char, $value);
        }
        foreach ($constraints['knownButNotHere'] as $char => $value) {
            $query = $query->where($char, '!=', $value);
        }
        foreach ($constraints['in'] as $char) {
            $query = $query->where('word', 'LIKE', '%' . $char . '%');
        }
        foreach ($constraints['excluded'] as $char) {
            $query = $query->where('word', 'NOT LIKE', '%' . $char . '%');
        }

        $words = $query->get();


        // Pour chaque position de lettres (c1, c2, ...), compte le nombre de fois
        // que chaque lettre est utilisée à cette position pour tous les mots.
        $countLetters = [];
        foreach ($words as $word) {
            for ($i = 1; $i <= $length; $i++) {
                if (!isset($countLetters['c' . $i][$word['c' . $i]])) {
                    $countLetters['c' . $i][$word['c' . $i]] = 0;
                }
                $countLetters['c' . $i][$word['c' . $i]]++;
            }
        }


        // Recherche le mot avec le plus de points
        $mostRelevant = null;
        $mostRelevantPoints = 0;

        foreach ($words as $word) {
            $wordPoints = 0;
            for ($i = 1; $i <= $length; $i++) {
                $nbUse = $countLetters['c' . $i][$word['c' . $i]];
                $wordPoints += $nbUse;
            }
            if ($wordPoints > $mostRelevantPoints) {
                $mostRelevant = $word;
                $mostRelevantPoints = $wordPoints;
            }
        }

        return ['mostRelevant' => $mostRelevant, 'points' => $mostRelevantPoints, 'words' => $words];
    }
}
