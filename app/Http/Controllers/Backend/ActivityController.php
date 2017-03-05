<?php
/**
 * Created by PhpStorm.
 * User: luowen
 * Date: 2017/3/4
 * Time: 14:21
 */

namespace App\Http\Controllers\Backend;


use Illuminate\Http\Request;

class ActivityController extends BaseController
{

    protected $subViewPath = "activity/";

    public function index(Request $request)
    {
        return $this -> _sendViewResponse("index");
    }

    public function create(Request $request)
    {
        return $this -> _sendViewResponse('new');
    }

    public function industry(Request $request)
    {
        return $this -> _sendViewResponse('industry');
    }

    public function common(Request $request)
    {
        return $this -> _sendViewResponse("common");
    }


    public function bargain(Request $request)
    {
        return $this -> _sendViewResponse('bargain');
    }
}