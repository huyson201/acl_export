<?php

namespace Foostart\Acl\Exports;

use Foostart\Acl\Authentication\Models\UserProfile;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;


class UserProfileExport implements FromCollection, WithHeadings
{

    public function headings(): array
    {
        return array(
            'Id',
            'Email',
            'Fist Name',
            'Last Name',
            'Phone Number',
            'Address',
            'Country',
            'City'
        );
    }

    /**
     * @return \Illuminate\Support\Collection
     */
    public function collection()
    {
        //
        return UserProfile::getExportListUser();
    }
}
