<?php

class AaaaaaController extends Controller
{	
    public function index()
    {
        $array  = $this->AaaaaaService->getArray();

        $page_genre = $page_slug = 'aaaaaa';
        $page_name  = 'aaaaaaa一覧';

        $data = compact('page_genre', 'page_slug', 'page_name', 'array');

        return view('aaaaaa.index', $data);
    }
}