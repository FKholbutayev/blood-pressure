<?php

namespace App\Http\Livewire;

use App\Models\Patient;
use Illuminate\Database\Eloquent\Builder;
use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;

class PatientTable extends DataTableComponent
{

    public function columns(): array
    {
        return [
            Column::make('First Name', 'first_name')
                ->sortable()
                ->searchable(),

            Column::make('Last Name', 'last_name')
                ->sortable()
                ->searchable(),

            Column::make('Address', 'address')
                ->sortable(),

            Column::make('Phone Number', 'telephone_number')
                ->sortable(),

            Column::make('Email', 'email')
                ->sortable()
                ->searchable()
        ];
    }

    public function query(): Builder
    {
        return Patient::query();
    }

    public function rowView(): string
    {
        return 'livewire-tables.rows.patient_table';
    }
}

