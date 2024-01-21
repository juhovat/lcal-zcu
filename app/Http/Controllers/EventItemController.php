<?php

namespace App\Http\Controllers;

use App\Models\Country;
use App\Models\EventItem;
use App\Models\Tag;
use GuzzleHttp\Promise\Create;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\View\View;

use Illuminate\Support\Str;
use App\Http\Requests\CreateEventItemRequest;
use App\Http\Requests\CreateEventRequest;
use App\Http\Requests\UpdateEventItemRequest;
use App\Models\City;

class EventItemController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $events = EventItem::with('country')->get();
        return view('events.index', compact('events'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $countries = Country::all();
        $tags = Tag::all();
        $cities = City::all();

        return view('events.create', compact('countries', 'tags', 'cities'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CreateEventItemRequest $request): RedirectResponse
    {
    $data = $request->validated();
    if ($request->hasFile('image')) {
        $imageName = time() . '.' . $request->file('image')->getClientOriginalExtension();
        //zajistuje pristup (presun z public/public) pro Storage:url()
        $path = $request->file('image')->storeAs('public/events', $imageName);
        $data['image'] = str_replace('public/', '', $path);
    }
    $data['user_id'] = auth()->id();
    $data['slug'] = Str::slug($request->title);

    $event = EventItem::create($data);
    $event->tags()->attach($request->tags);
    return to_route('events.index');
    }


    public function show(EventItem $event): View
    {
        return view('events.show', compact('event'));
    }
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(EventItem $event): View
    {
        $countries = Country::all();
        $tags = Tag::all();
        return view('events.edit', compact('countries', 'tags', 'event'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateEventItemRequest $request, EventItem $event): RedirectResponse
{
    $data = $request->validated();
    if ($request->hasFile('image')) {
        Storage::delete('public/' . $event->image);
        $imageName = time() . '.' . $request->file('image')->getClientOriginalExtension();
        //zajistuje pristup (presun z public/public) pro Storage:url()
        $path = $request->file('image')->storeAs('public/events', $imageName);
        $data['image'] = str_replace('public/', '', $path);
    }

    $data['slug'] = Str::slug($request->title);
    $event->update($data);
    $event->tags()->sync($request->tags);
    return to_route('events.index');
}


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(EventItem $event): RedirectResponse
    {
        Storage::delete($event->image);
        $event->tags()->detach();
        $event->delete();
        return to_route('events.index');
    }
}
