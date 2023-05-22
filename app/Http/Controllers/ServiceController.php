<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Services;
use Stripe\Product;


class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $services = Services::orderBy('id', 'ASC')->get();
        $data['services'] = $services;
        return view('service', $data);

        //return Services::orderBy('id', 'ASC')->get();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try {
            $service = new Services;
            $service->user_id = $request->get('user_id');
            $service->type = $request->get('type');
            $service->title = $request->get('title');
            $service->price = $request->get('price');
            $service->region = $request->get('region');
            $service->municipality = $request->get('municipality');
            $service->city = $request->get('city');
            $service->description = $request->get('description');
            $service->url = $request->get('url');
            $service->phone = $request->get('phone');
            $service->email = $request->get('email');

            //$name = $request->file('image')->getClientOriginalName();
            $image = $request->file('image');
            $name = $image->getClientOriginalName();

            $request->file('image')->storeAs('public/images/services', $name);

            $service->image = $name;

            $service->save();

            //return response()->json(['changes' => 'saved.'],200);

            return redirect()->to('services');
        }catch (\Exception $e) {
            return response()->json(['error' => '404 invalid'], 400);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        try {
            $service = Services::findOrFail($id);
            $service->type = $request->input('type');
            $service->title = $request->input('title');
            $service->price = $request->input('price');
            $service->region = $request->input('region');
            $service->municipality = $request->input('municipality');
            $service->city = $request->input('city');
            $service->description = $request->input('description');
            $service->url = $request->input('url');
            $service->phone = $request->input('phone');
            $service->email = $request->input('email');


            $service->update();

            return response()->json(['changes' => 'saved.'],200);
         } catch (\Exception $e) {
             return response()->json(['error' => '404 invalid'],200);
         }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            $service = Services::findOrFail($id);
            $service->delete();

            //return response()->json(['changes' => 'saved.'],200);
            return redirect()->to('about');
         } catch (\Exception $e) {
             return response()->json(['error' => '404 invalid'],200);
         }
    }

    public function search(Request $request)
    {
        $search = $request->search;

        $services = Services::where('title', 'Like', '%'.$search. '%')->get(); //region, municipality, city

        return view('service', compact('services'));
    }
}
