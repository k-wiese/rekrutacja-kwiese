<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Carbon\Carbon;

class CalendarComponent extends Component
{
    public $date;
    public $month = [];

    protected $rules = [
        'date' => 'required|date|date_format:Y-m',
    ];

    public function render()
    {
        return view('livewire.calendar-component');
    }

    public function mount()
    {
        $this->date = '2023-02';
    }

    public function generate()
    {
        $this->validate();

        $carbon_date = Carbon::createFromFormat('Y-m-d', $this->date . '-01');

        $this->month['title'] = $carbon_date->format('F Y');
        $start_day = $carbon_date->format('l');

        $days_to_print = $carbon_date->daysInMonth;
        $days_printed = 1;
        $calendar_array = [];

        for ($i = 0; $i <= 35; $i++) {
            if ($i === 0) {
                switch ($start_day) {
                    case 'Monday':
                        $i = 0;
                        break;

                    case 'Tuesday':
                        $calendar_array[1] = ' ';
                        $i = 1;

                        break;

                    case 'Wednesday':
                        $calendar_array[1] = ' ';
                        $calendar_array[2] = ' ';
                        $i = 2;
                        break;

                    case 'Thursday':
                        $calendar_array[1] = ' ';
                        $calendar_array[2] = ' ';
                        $calendar_array[3] = ' ';
                        $i = 3;

                        break;

                    case 'Friday':
                        $calendar_array[1] = ' ';
                        $calendar_array[2] = ' ';
                        $calendar_array[3] = ' ';
                        $calendar_array[4] = ' ';
                        $i = 4;

                        break;

                    case 'Saturday':
                        $calendar_array[1] = ' ';
                        $calendar_array[2] = ' ';
                        $calendar_array[3] = ' ';
                        $calendar_array[4] = ' ';
                        $calendar_array[5] = ' ';
                        $i = 5;

                        break;

                    case 'Sunday':
                        $calendar_array[1] = ' ';
                        $calendar_array[2] = ' ';
                        $calendar_array[3] = ' ';
                        $calendar_array[4] = ' ';
                        $calendar_array[5] = ' ';
                        $calendar_array[6] = ' ';
                        $i = 6;

                        break;
                }
            } else {
                if ($days_printed <= $days_to_print) {
                    $calendar_array[$i] = $days_printed;

                    $days_printed += 1;
                } else {
                    $calendar_array[$i] = ' ';
                }
            }
        }
        $this->month['calendar'] = $calendar_array;
    }
}
