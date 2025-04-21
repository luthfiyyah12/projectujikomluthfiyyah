<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Event;

class EventController extends Controller
{
    // GET: /api/events
    public function index()
    {
        $events = Event::all();
        return response()->json($events); // <--- ini penting!
    }

    // POST: /api/events
    public function store(Request $request)
    {

        $request->validate([
            'title' => 'required|string',
            'description' => 'nullable|string',
            'date' => 'nullable|date',
            'location' => 'nullable|string',
            'image' => 'required|url',  // Pastikan gambar punya URL yang valid
        ]);

        $event = Event::create([
            'title' => $request->title,
            'description' => $request->description,
            'date' => $request->date,
            'location' => $request->location,
            'image' => $request->image,
        ]);

        return response()->json($event, 201);
    }

    // GET: /api/events/{id}
    public function show($id)
    {
        $event = Event::find($id);
        if (!$event) {
            return response()->json(['message' => 'Event not found'], 404);
        }

        return response()->json($event);
    }

    // DELETE: /api/events/{id}
    public function destroy($id)
    {
        $event = Event::find($id);
        if (!$event) {
            return response()->json(['message' => 'Event not found'], 404);
        }

        $event->delete();
        return response()->json(['message' => 'Event deleted']);
    }

    public function update(Request $request, $id)
    {
        $event = Event::find($id);
        if (!$event) {
            return response()->json(['message' => 'Event not found'], 404);
        }

        $request->validate([
            'title' => 'required|string',
            'description' => 'nullable|string',
            'date' => 'nullable|date',
            'location' => 'nullable|string',
            'image' => 'required|url',
        ]);

        $event->update([
            'title' => $request->title,
            'description' => $request->description,
            'date' => $request->date,
            'location' => $request->location,
            'image' => $request->image,
        ]);

        return response()->json($event);
    }
}
