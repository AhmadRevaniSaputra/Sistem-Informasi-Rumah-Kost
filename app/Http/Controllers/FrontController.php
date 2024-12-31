<?php

    namespace App\Http\Controllers;


    use App\Models\Profile;

    use App\Services\FrontService;
    use Illuminate\Http\Request;

    class FrontController extends Controller
    {
        //
        protected $frontService;

        public function __construct(FrontService $frontService)
        {
            $this->frontService = $frontService;
        }

        public function index()
        {
            $profile1 = Profile::find(1); // Ambil data profil pertama
            $profile2 = Profile::find(2); // Ambil data profil kedua
        
            return view('front.index', compact('profile1', 'profile2'));
        }
        
    }        