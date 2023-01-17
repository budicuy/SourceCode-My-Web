<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Design;
use App\Models\Project;

class IndexController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('index', [
            'tittle' => 'Home',
            'designs' => Design::all(),
            'projects' => Project::all(),
            'service' => collect([
                [
                    'tittle' => 'Web Design',
                    'description' => 'Create your amazing idea in websites, full interaction with responsive views.',
                    'image' => 'services-3.png',
                    'link' => '#',
                ],
                [
                    'tittle' => 'UI Dashboard',
                    'description' => 'Create data and tools for you in dashboards, which are easy to use.',
                    'image' => 'services-2.png',
                    'link' => '#',
                ],
                [
                    'tittle' => 'Mobile Design',
                    'description' => 'Create eye-catching and powerful mobile apps with a focus on User.',
                    'image' => 'services-1.png',
                    'link' => '#',
                ],
            ]),
        ]);
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
