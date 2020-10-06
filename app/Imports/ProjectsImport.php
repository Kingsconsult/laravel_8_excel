<?php

namespace App\Imports;

use App\Models\Project;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;


class ProjectsImport implements ToModel, WithHeadingRow
{
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function model(array $row)
    {
        return new Project([
            'name'     => $row['name'],
            'introduction'    => $row['introduction'],
            'location'    => $row['location'],
            'cost'    => $row['cost']
        ]);
    }
}
