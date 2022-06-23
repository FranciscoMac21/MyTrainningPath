<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Ejercicio;

class Ejercicios extends Component
{
    use WithPagination;

	protected $paginationTheme = 'bootstrap';
    public $selected_id, $keyWord, $Ejercicio;
    public $updateMode = false;

    public function render()
    {
		$keyWord = '%'.$this->keyWord .'%';
        return view('livewire.ejercicios.view', [
            'ejercicios' => Ejercicio::latest()
						->orWhere('Ejercicio', 'LIKE', $keyWord)
						->paginate(10),
        ]);
    }
	
    public function cancel()
    {
        $this->resetInput();
        $this->updateMode = false;
    }
	
    private function resetInput()
    {		
		$this->Ejercicio = null;
    }

    public function store()
    {
        $this->validate([
		'Ejercicio' => 'required',
        ]);

        Ejercicio::create([ 
			'Ejercicio' => $this-> Ejercicio
        ]);
        
        $this->resetInput();
		$this->emit('closeModal');
		session()->flash('message', 'Ejercicio Successfully created.');
    }

    public function edit($id)
    {
        $record = Ejercicio::findOrFail($id);

        $this->selected_id = $id; 
		$this->Ejercicio = $record-> Ejercicio;
		
        $this->updateMode = true;
    }

    public function update()
    {
        $this->validate([
		'Ejercicio' => 'required',
        ]);

        if ($this->selected_id) {
			$record = Ejercicio::find($this->selected_id);
            $record->update([ 
			'Ejercicio' => $this-> Ejercicio
            ]);

            $this->resetInput();
            $this->updateMode = false;
			session()->flash('message', 'Ejercicio Successfully updated.');
        }
    }

    public function destroy($id)
    {
        if ($id) {
            $record = Ejercicio::where('id', $id);
            $record->delete();
        }
    }
}
