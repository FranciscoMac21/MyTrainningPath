<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Guia;

class Guias extends Component
{
    use WithPagination;

	protected $paginationTheme = 'bootstrap';
    public $selected_id, $keyWord, $Titulo, $Descripcion;
    public $updateMode = false;

    public function render()
    {
		$keyWord = '%'.$this->keyWord .'%';
        return view('livewire.guias.view', [
            'guias' => Guia::latest()
						->orWhere('Titulo', 'LIKE', $keyWord)
						->orWhere('Descripcion', 'LIKE', $keyWord)
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
		$this->Titulo = null;
		$this->Descripcion = null;
    }

    public function store()
    {
        $this->validate([
		'Titulo' => 'required',
		'Descripcion' => 'required',
        ]);

        Guia::create([ 
			'Titulo' => $this-> Titulo,
			'Descripcion' => $this-> Descripcion
        ]);
        
        $this->resetInput();
		$this->emit('closeModal');
		session()->flash('message', 'Guia Successfully created.');
    }

    public function edit($id)
    {
        $record = Guia::findOrFail($id);

        $this->selected_id = $id; 
		$this->Titulo = $record-> Titulo;
		$this->Descripcion = $record-> Descripcion;
		
        $this->updateMode = true;
    }

    public function update()
    {
        $this->validate([
		'Titulo' => 'required',
		'Descripcion' => 'required',
        ]);

        if ($this->selected_id) {
			$record = Guia::find($this->selected_id);
            $record->update([ 
			'Titulo' => $this-> Titulo,
			'Descripcion' => $this-> Descripcion
            ]);

            $this->resetInput();
            $this->updateMode = false;
			session()->flash('message', 'Guia Successfully updated.');
        }
    }

    public function destroy($id)
    {
        if ($id) {
            $record = Guia::where('id', $id);
            $record->delete();
        }
    }
}
