<?php

namespace App\Livewire;

use Livewire\Attributes\Validate;
use App\Models\Entry;
use Livewire\Component;

class BirdForm extends Component
{
    //State- created when component is initialized
    #[Validate('required|integer')]
    public int $bird_count;

    #[Validate('required|string')]
    public string $notes;

    public function submit()
    {
        $this->validate();
        // $this->validate([
        //     'bird_count' => 'required|integer',
        //     'notes' => 'required|string',
        // ]);

        Entry::create([
            'bird_count' => $this->bird_count,
            'notes' => $this->notes,
        ]);

        $this->reset();
    }

    //mount- accepting things

    public function mount(){
        $this->bird_count=5;
    }
    //getting information and push to components
    public function render()
    {
        return view('livewire.bird-form',[
            'entries' => Entry::all()
        ]);
    }
}
