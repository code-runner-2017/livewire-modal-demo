<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Log;
use Livewire\Component;

class ModalDemo extends Component
{
    public $email;
    public $name;

    public function render()
    {
        return view('livewire.modal-demo');
    }

    public function onSave()
    {
        Log::debug("Saving name=$this->name, email=$this->email");
        $this->resetInputFields();
        $this->emit('onCloseModal', '#exampleModal'); // Close model to using to jquery
    }

    private function resetInputFields()
    {
        $this->email = '';
        $this->name = '';
    }


}
