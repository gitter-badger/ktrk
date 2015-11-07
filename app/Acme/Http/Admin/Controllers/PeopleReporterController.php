<?php
namespace Admin\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;

use Model\PeopleReporter\ModelName as PeopleReporter;

class PeopleReporterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $peopleReporters = PeopleReporter::get();

        return view('Admin::peopleReporter.index', ['peopleReporters' => $peopleReporters]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Admin::peopleReporter.create', ['peopleReporter' => new PeopleReporter()]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        
        $peopleReporter = PeopleReporter::create($request->except('thumbnail'));

        if($request->hasFile('thumbnail'))
        {
            $file = $request->file('thumbnail');
            $dir  = 'img/director/thumbnail';
            $name = $peopleReporter->id().'.'.$file->getClientOriginalExtension();

            $storage = \Storage::disk('public');
            $storage->makeDirectory($dir);
            // $storage->put($dir.'/'.$name, $file);

            $peopleReporter->thumbnail = $dir.'/'.$name;
            $peopleReporter->save();
            $file->move($dir, $name);
        }
        return redirect()->route('admin.peopleReporter.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(PeopleReporter $peopleReporter)
    {

        return view('Admin::peopleReporter.show', ['peopleReporter' => $peopleReporter]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(PeopleReporter $peopleReporter)
    {
        return view('Admin::peopleReporter.edit', ['peopleReporter' => $peopleReporter]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PeopleReporter $peopleReporter)
    {
        $peopleReporter->update($request->except('thumbnail'));

        if($request->hasFile('thumbnail'))
        {
            $file = $request->file('thumbnail');
            $dir  = 'img/director/thumbnail';

            $name = $peopleReporter->id().'.'.$file->getClientOriginalExtension();
            

            $storage = \Storage::disk('public');
            $storage->makeDirectory($dir);

            $peopleReporter->thumbnail = $dir.'/'.$name;
            $peopleReporter->save();
            $file->move($dir, $name);
        }

        return redirect()->route('admin.peopleReporter.show', $peopleReporter);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(PeopleReporter $peopleReporter)
    {
        $peopleReporter->delete();

        return redirect()->route('admin.peopleReporter.index');
    }
}