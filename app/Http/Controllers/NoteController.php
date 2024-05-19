<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreNoteRequest;
use App\Http\Requests\UpdateNoteRequest;
use App\Models\Note;
use Illuminate\Http\Request;
class NoteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //GET ALL NOTES
        $notes = Note::all();

        return view('index', compact('notes'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        $fields = $request->validate([
            'title'=>['required'],
            'description'=>['required']
        ]);

        $note = new Note();
        
        $note->title=$fields['title'];
        $note->description=$fields['description'];
        $note->user_id = auth()->id();
        
        $note->save();

        return redirect()->route('home')->with('success','Note created Successfully');

        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreNoteRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Note $note)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Note $note)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateNoteRequest $request, Note $note)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Note $note)
    {
        if ($note->user_id !== auth()->id()) {
            abort(403, 'Unauthorized action.');
        }

        $note->delete();

        return redirect()->route('home')->with('success', 'Note deleted successfully');

    }
}
