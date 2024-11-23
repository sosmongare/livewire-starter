<div>
    {{-- Because she competes with no one, no one can compete with her. --}}
    <form wire:submit='submit'>
        <div>
            <label for="bird_count">Bird Count</label>
                <input wire:model='bird_count' type="number">
        </div>
        <div>
            <label for="notes">Notes</label>
                <textarea wire:model='notes'></textarea>
        </div>
        <button>Add new bird</button>

    </form>
    @if ($errors->any())
        <div>
            @foreach ($errors->all() as $error)
                <div style="color: red">{{ $error }}</div>
            @endforeach
        </div>
        
    @endif

    <div>
        @foreach ($entries as $entry)
            <li>{{$entry->bird_count  }} - {{ $entry->notes  }}</li>   
        @endforeach
    </div>
</div>
