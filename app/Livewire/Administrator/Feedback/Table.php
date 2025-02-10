<?php

namespace App\Livewire\Administrator\Feedback;

use App\Models\Feedback;
use Livewire\Component;
use Livewire\WithPagination;

class Table extends Component
{
    use WithPagination;

    public $search;
    public $status;

    protected $queryString =[
        'status',
        'search'
    ];

    public function mount()
    {
        $this->search;
        $this->status;
    }

    public function updatedSearch()
    {
        $this->resetPage();
    }

    public function setStatus($value)
    {
        $this->status = $value;
        $this->resetPage();
    }

    public function setReview($id)
    {
        $data = Feedback::find($id);

        $data->update([
            'status' => 'reviewed'
        ]);
    }

    public function delete($id)
    {
        $feedback = Feedback::find($id);
        if ($feedback) {

            $feedback->delete();

            session()->flash('flash_message', [
                'type' => 'deleted',
                'message' => 'Umpan balik berhasil dihapus.',
            ]);
            return redirect()->route('administrator.feedback');
        } else {
            session()->flash('flash_message', [
                'type' => 'error',
                'message' => 'Umpan Balik tidak ditemukan.',
            ]);
            return redirect()->route('administrator.feedback');
        } 
    }
    
    public function render()
    {
        $datas = Feedback::when($this->search, function ($query) {
            $query->where('message', 'like', '%' . $this->search . '%');
        })
        ->when($this->status, function ($query) {
            $query->where('status', $this->status);
        })
        ->paginate(8);

        $pending = Feedback::where('status', 'pending')->get();

        return view('livewire.administrator.feedback.table', 
        [
            'datas' => $datas,
            'pending' => $pending,
        ]);
    }

}
