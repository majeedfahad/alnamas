<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreStepsRequest;
use App\Models\Steps;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class StepsController extends Controller
{
    public function index(Request $request)
    {
        $steps = Steps::all();

        return view('steps.index', compact('steps'));
    }

    public function create()
    {
        Alert::warning('هذه الصفحة لا تعمل');
        return view('steps.create');
    }

    public function store(StoreStepsRequest $request)
    {
        $data = $request->validated();

        Steps::create($data);

        return redirect()->route('steps.index');
    }
}
