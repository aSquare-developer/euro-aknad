<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WindowsPageController extends Controller
{
    public function index() {
      return view('pages.windows');
    }

    public function index_alumiinium() {
      return view('pages.windows-alumiinium');
    }

    public function index_puit_alumiinium() {
      return view('pages.windows-puit-alumiinium');
    }

    public function index_puit_aknad() {
      return view('pages.windows-puit-aknad');
    }

    public function index_pvc_aknad() {
      return view('pages.windows-pvc-aknad');
    }
}
