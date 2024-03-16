<?php

use Livewire\Volt\Component;
use App\Models\Note;

new class extends Component {
    public function with():array {
        $notes = Note::all();
        return[
            'notes' =>$notes
            // 'notes' => Auth::user()->notes->get()
        ];
    }
}; ?>

<div>
    @foreach ($notes as $note)            
            <x-card wire:key='{{$note->id}}'>
                <div class="flex justify-between">
                    <a href="#" class="text-xl font-bold hover:underline hover:text-blue-500">
                        {{$note->title}}
                    </a>
                </div>
                <p>{{ $note->body}} </p>
            </x-card>
            {{-- <x-card title="{{$note->title}}">
                <p>{{ $note->body}} </p>
            </x-card> --}}
    @endforeach
</div>
