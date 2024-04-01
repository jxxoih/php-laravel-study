<?php

namespace App\Http\Controllers;

use App\Models\Board;
use Illuminate\Http\Request;

class BoardController extends Controller
{
    public function index(Request $request) {
	    // boards 테이블에서 데이터를 최신순으로 10개씩 페이징해서 조회합니다.
		$boards = Board::latest()->paginate(10);

		// boards/index.blade.php 에서 boards를 사용합니다.
		return view('boards.index', compact('boards'));
    }

    public function list(Request $request) {
        $testData = "데이터 넘겨줌";

        return view('boards.list', compact('testData'));
    }
}
