<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Landing;

class LandingController extends Controller
{
    //
    private $landing;

    public function __construct(Landing $landing) {
        $this->landing = $landing;
    }

    public function index($route)
    {
        $landing = $this->landing->where('route', $route)->first();
        return view('landing.index')->with('landing', $landing);
    }

    public function add(Request $request)
    {
        $this->landing->name = $request->name;
        $this->landing->route = $request->route;
        $this->landing->data = '';
        $this->landing->save();
    }

    public function update(Request $request)
    {
        $landing = $this->landing->find($request->id);
        $landing->data = json_encode($request->data);
        $landing->save();
    }

    public function all()
    {
        return $this->landing->all();
    }

    public function get($id)
    {
        return $this->landing->find($id);
    }

}
