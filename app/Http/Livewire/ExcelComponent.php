<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ExcelComponent extends Component
{
    public $cell;
    public $numeric_value;

    protected $rules = [
        'cell' => 'required|string',
    ];

    public function render()
    {
        return view('livewire.excel-component');
    }

    public function mount()
    {
        $this->cell = 'PHP81';
    }

    public function generate()
    {
        $this->validate();

        $letters_array = [];
        foreach (str_split($this->cell) as $char) {
            if (!(intval($char) == $char)) {
                array_push($letters_array, strToUpper($char));
            }
        }

        $letters_count = count($letters_array);

        $column = substr($this->cell, $letters_count);

        $row = 0;

        for($i = 0; $i < $letters_count; $i++) 
        {
            foreach (range('A', 'Z') as $key => $letter) {

                if (strToUpper($letters_array[$i]) === $letter) {
                    $row = $row * 26 + ($key+1);
                }
            }
        }


        $this->numeric_value = floatval($row . '.' . $column);
    }
}

