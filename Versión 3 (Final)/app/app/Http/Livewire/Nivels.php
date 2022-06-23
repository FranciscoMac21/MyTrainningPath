<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Nivel;

class Nivels extends Component
{
    use WithPagination;

	protected $paginationTheme = 'bootstrap';
    public $selected_id, $keyWord, $nivel;
    public $updateMode = false;

    public function render()
    {
		$keyWord = '%'.$this->keyWord .'%';
        return view('livewire.nivels.view', [
            'nivels' => Nivel::latest()
						->orWhere('nivel', 'LIKE', $keyWord)
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
		$this->nivel = null;
    }

    public function store()
    {
        $this->validate([
		'nivel' => 'required',
        ]);

        Nivel::create([ 
			'nivel' => $this-> nivel
        ]);
        
        $this->resetInput();
		$this->emit('closeModal');
		session()->flash('message', 'Nivel Successfully created.');
    }

    public function edit($id)
    {
        $record = Nivel::findOrFail($id);

        $this->selected_id = $id; 
		$this->nivel = $record-> nivel;
		
        $this->updateMode = true;
    }

    public function update()
    {
        $this->validate([
		'nivel' => 'required',
        ]);

        if ($this->selected_id) {
			$record = Nivel::find($this->selected_id);
            $record->update([ 
			'nivel' => $this-> nivel
            ]);

            $this->resetInput();
            $this->updateMode = false;
			session()->flash('message', 'Nivel Successfully updated.');
        }
    }

    public function destroy($id)
    {
        if ($id) {
            $record = Nivel::where('id', $id);
            $record->delete();
        }
    }
}
