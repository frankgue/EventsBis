<?php

namespace App\Http\Controllers;

use App\Http\Requests\EventFormRequest;
use Illuminate\Http\Request;
use App\Models\Event;
use MercurySeries\Flashy\Flashy;

class EventsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $events = Event::paginate(10);

        return view('events.index', compact('events'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $event = new Event;
        return view('events.create', compact('event'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(EventFormRequest $request)
    {
        Event::create([
            'title' => $request->title,
            'description' => $request->description,
        ]);
        Flashy::message('Evénement Créé avec succès!');
        //flash('Evénement Créé avec succès!');

        return redirect()->route('home');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $event = Event::whereSlug($slug)->firstOrFail();

        return view('events.show', compact('event'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($slug)
    {
        $event = Event::whereSlug($slug)->firstOrFail();

        return view('events.edit', compact('event'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(EventFormRequest $request, $slug)
    {
        $event = Event::whereSlug($slug)->firstOrFail();

        $event->update([
            'title' => $request->title,
            'description' => $request->description,
        ]);

        Flashy::primary(sprintf('Evénement "%s" supprimé avec succès!', $event->title));

        //flash('Evénement #'. $event->id .' modifié avec succès!');
        return redirect()->route('events.show', $event->slug);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($slug)
    {
        $event = Event::whereSlug($slug)->firstOrFail();
        $event->delete();

        flashy()->error(sprintf('Evénement "%s" supprimé avec succès!', $event->title));
        //flash('Evénement supprimé avec succès!', 'danger');
        return redirect()->route('home');
    }
}
