<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Jobapi;

class JobController extends Controller
{
    public function index()
    {
        return Jobapi::all();
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'salary' => 'required|numeric',
            'location' => 'required|string|max:255',
        ]);
        $job = Jobapi::create($validated);
        return response()->json($job, 201);
    }

    public function show($id)
    {
        $job = Jobapi::findOrFail($id);
        return $job;
    }

    public function update(Request $request, $id)
    {
        $job = Jobapi::findOrFail($id);
        $job->update($request->all());
        return response()->json($job);
    }

    public function destroy($id)
    {
        $job = Jobapi::findOrFail($id);
        $job->delete();
        return response()->json(['message' => 'Deleted']);
    }
}
