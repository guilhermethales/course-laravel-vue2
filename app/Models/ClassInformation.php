<?php

namespace SON\Models;

use Bootstrapper\Interfaces\TableInterface;
use Illuminate\Database\Eloquent\Model;

class ClassInformation extends Model implements TableInterface
{
    protected $fillable = [
        'date_start', 'date_end', 'cycle', 'subdivision', 'semester', 'year'
    ];

    protected $dates = ['date_start', 'date_end'];

    public function getTableHeaders() {
        return [
            'ID',
            'Data Início',
            'Data Fim',
            'Ciclo',
            'Subdivisão',
            'Semestre',
            'Ano',
        ];
    }

    public function getValueForHeader($header) {
        switch ($header) {
            case 'ID':
                return $this->id;
            case 'Data Início':
                return $this->date_start->format('d/m/Y');
            case 'Data Fim':
                return $this->date_end->format('d/m/Y');
            case 'Ciclo':
                return $this->cycle;
            case 'Subdivisão':
                return $this->subdivision;
            case 'Semestre':
                return $this->semester;
            case 'Ano':
                return $this->year;
        }
    }
}
