<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;
use Illuminate\Support\Facades\Storage;

class ServiceController extends Controller
{
    public function index()
    {
        $services = Service::get();

        return view ('service.index', [
            'services'=>$services
        ]);
    }

    public function show(Service $service)
    {
        return view ('service.show', [
            'service'=>$service
        ]);
    }

    public function create()
    {
        return view ('service.create');
    }

    public function store(Request $request)
    {
        // $request->validate([
        //     'title' => 'required|max:255',
        //     'body' => 'required|max:64000',
        //     'img' => 'image|mimes:jpg,jpeg,png,svg,gif|max:2048',
        // ]);

        $service = new Service;
        $service->img = $request->file('img')->store('storage/' . $service->title);
        $service->title = $request->title;
        $service->brief = $request->brief;
        $service->desc = $request->desc;
        $service->length = $request->length;
        $service->save();
         
        return back()->with('success', 'Service Created');
    }

    public function delete(Service $service)
    {
        Storage::Delete($service->img);
        $service->delete();

        $services = Service::get();

        return view ('service.index', [
            'services'=>$services
        ]);
    }
}
