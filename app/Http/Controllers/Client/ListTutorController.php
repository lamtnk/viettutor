<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Service\Admin\TutorService;
use App\Service\Client\ListTutorService;
use Illuminate\Http\Request;

class ListTutorController extends Controller
{
    protected $listTutorService;
    public function __construct(ListTutorService $listTutorService) {
        $this->listTutorService = $listTutorService;
    }
    private function customRound($number) {
        $decimal = $number - intval($number);
        if ($decimal >= 0.8) {
            return intval($number) + 1;
        } elseif ($decimal >= 0.3) {
            return intval($number) + 0.5;
        } else {
            return intval($number);
        }
    }
    public function index() {
        $listTutor = $this->listTutorService->getFullProfile();
        foreach ($listTutor as $key => $item) {
            // Làm tròn số 
            $listTutor[$key]['roundedValue'] = $this->customRound($listTutor[$key]['average_rating']);
            // Tính sao đầy
            $listTutor[$key]['filledStars'] = floor($listTutor[$key]['roundedValue']);
            // Tính sao nửa
            $listTutor[$key]['hasHalfStar'] = ($listTutor[$key]['roundedValue'] - $listTutor[$key]['filledStars']) == 0.5;
            // Tính sao trống
            $listTutor[$key]['emptyStars'] = 5 - $listTutor[$key]['filledStars'] - ($listTutor[$key]['hasHalfStar'] ? 1 : 0);
        }
        // dd($listTutor);
        return view('client.ListTutor.list-tutor', compact('listTutor'));
    }
}
