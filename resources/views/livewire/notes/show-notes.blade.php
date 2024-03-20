<?php

use Livewire\Volt\Component;
use App\Models\Note;

new class extends Component {

    public function delete($noteId)
    {
        $note = Note::where('id', $noteId)->first();
        $this->authorize('delete', $note);
        $note->delete();
    }

    public function with():array {
        $notes = Note::all();
        return[
            'notes' =>$notes
            // 'notes' => Auth::user()->notes->get()
        ];
    }
}; ?>

<div>
    <div class="space-y-2">
        @if ($notes->isEmpty())
        <div class="text-center">
            <p class="text-xl font-bold">No notes yet.</p>
            <p class="text-sm">Lte's create your first note to send</p>
            <x-button primary icon-right="plus" class="mt-6" href="{{route('notes.create')}}" wire:navigate>
                Create a new note
            </x-button>
        </div>
        @else
        <x-button primary class="mb-12" icon-right="plus" href="{{ route('notes.create') }}" wire:navigate>
            Create note
        </x-button>
        <div class="grid grid-cols-2 gap-4">
            @foreach ($notes as $note)
            <x-card wire:key='{{$note->id}}'>
                <div class="flex justify-between">
                    <div>
                        <a  href="{{ route('notes.edit',$note) }}" wire:navigate class="text-xl font-bold hover:underline hover:text-blue-500">
                            {{$note->title}}
                        </a>
                        <p class="mt-2 text-xs">{{ Str::limit($note->body, 50) }}</p>
                    </div>
                    <div class="text-xs text-gray-500">{{ \Carbon\Carbon::parse($note->send_date)->format('M-d-Y')}}
                    </div>
                </div>
                <div class="flex items-end justify-between mt-4 space-x-1">
                    <p class="text-xs">Recipient: <span class="font-semibold">{{ $note->recipient}}</span></p>

                    <div>
                        <x-button.circle icon="eye"></x-button.circle>
                        <x-button.circle wire:click="delete('{{ $note->id }}')" icon="trash"></x-button.circle>
                    </div>
                </div>
            </x-card>
            @endforeach
        </div>
        @endif
    </div>
</div>