<?php

namespace App\Http\Controllers;

use App\Models\Bejegyzes;
use App\Models\Tevekenyseg;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BejegyzesController extends Controller
{
    //
    public function getAll() {
        return Bejegyzes::all();
    }

    public function getByClassId($osztaly_id) {
        return Bejegyzes::where('osztaly_id', $osztaly_id)->get();
    }

    public function store(Request $request) {
        $bejegyzes = new Bejegyzes();
        $bejegyzes->tevekenyseg_id = $request->tevekenyseg_id;
        $bejegyzes->osztaly_id = $request->osztaly_id;
        if (isset($request->allapot)) $bejegyzes->allapot = $request->allapot;
        $bejegyzes->save();
        if (isset($request->redirect)) {
            return redirect($request->redirect);
        }
    }


    public function index() {
        $classes = [];
        foreach(DB::select("SELECT osztaly as osztaly FROM users GROUP BY osztaly") as $key => $val) {
            $classes[] = $val->osztaly;
        }
        return view("bejegyzes.index", ['classes' => $classes, 'tevs' => Tevekenyseg::all(), 'bejegyzesek' => Bejegyzes::all()]);
    }
}
