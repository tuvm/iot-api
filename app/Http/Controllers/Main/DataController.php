<?php

namespace App\Http\Controllers\Main;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Data;

class DataController extends Controller
{
    public $a = '[';

    public function Try($parent) {
        $data = DB::select('SELECT * FROM locations where parent_id = '.$parent.';');
        if(sizeof($data) > 0) {
            for($i = 0; $i < sizeof($data); $i++) {
                $this->a = $this->a . json_encode($data[$i]);
                $check = DB::select('SELECT * FROM locations where parent_id = '.$data[$i]->id.';');
                if(sizeof($check) > 0) {
                    $this->a = rtrim($this->a, "}");
                    $this->a = $this->a . ', "child":[';
                }
                else {
                    if($i == sizeof($data) - 1) {
                        if($parent != 0) {
                            $this->a = $this->a . ']},';
                        }
                        else {
                            $this->a = $this->a . ']';
                        }
                    }
                    else {
                        $this->a = $this->a . ', ';
                    }
                }
                $this->Try($data[$i]->id);
            }
        }
        
    }
    public function getdata() {
        $this->Try(0);
        $this->a = rtrim($this->a, ",");
        $this->a = $this->a . ']';
        return $this->a;
    }
    public function test() {
        $datatest = DB::select('SELECT * FROM locations;');
        return $datatest;
    }
}
