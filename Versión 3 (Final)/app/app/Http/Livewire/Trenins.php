<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Trenin;

class Trenins extends Component
{
    use WithPagination;

	protected $paginationTheme = 'bootstrap';
    public $selected_id, $keyWord, $Ejercicios_id, $SobrecargaS_id, $SobrecargaR_id, $Direccion;
    public $updateMode = false;

    public function render()
    {
		$keyWord = '%'.$this->keyWord .'%';
        return view('livewire.trenins.view', [
            'trenins' => Trenin::latest()
						->orWhere('Ejercicios_id', 'LIKE', $keyWord)
						->orWhere('SobrecargaS_id', 'LIKE', $keyWord)
						->orWhere('SobrecargaR_id', 'LIKE', $keyWord)
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
		$this->Ejercicios_id = null;
		$this->SobrecargaS_id = null;
		$this->SobrecargaR_id = null;
        $this->Direccion = null;
    }

    public function store()
    {
        $this->validate([
		'Ejercicios_id' => 'required',
		'SobrecargaS_id' => 'required',
		'SobrecargaR_id' => 'required',
        'Direccion' => 'required',
        ]);

        Trenin::create([ 
			'Ejercicios_id' => $this-> Ejercicios_id,
			'SobrecargaS_id' => $this-> SobrecargaS_id,
			'SobrecargaR_id' => $this-> SobrecargaR_id,
            'Direccion' => $this-> Direccion
        ]);
        
        $this->resetInput();
		$this->emit('closeModal');
		session()->flash('message', 'Trenin Successfully created.');
    }

    public function edit($id)
    {
        $record = Trenin::findOrFail($id);

        $this->selected_id = $id; 
		$this->Ejercicios_id = $record-> Ejercicios_id;
		$this->SobrecargaS_id = $record-> SobrecargaS_id;
		$this->SobrecargaR_id = $record-> SobrecargaR_id;
		
        $this->updateMode = true;
    }

    public function update()
    {
        $this->validate([
		'Ejercicios_id' => 'required',
		'SobrecargaS_id' => 'required',
		'SobrecargaR_id' => 'required',
        ]);

        if ($this->selected_id) {
			$record = Trenin::find($this->selected_id);
            $record->update([ 
			'Ejercicios_id' => $this-> Ejercicios_id,
			'SobrecargaS_id' => $this-> SobrecargaS_id,
			'SobrecargaR_id' => $this-> SobrecargaR_id
            ]);

            $this->resetInput();
            $this->updateMode = false;
			session()->flash('message', 'Trenin Successfully updated.');
        }
    }

    public function destroy($id)
    {
        if ($id) {
            $record = Trenin::where('id', $id);
            $record->delete();
        }
    }
}
