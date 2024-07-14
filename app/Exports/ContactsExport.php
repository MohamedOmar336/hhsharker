<?php
namespace App\Exports;

use App\Models\Contact;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class ContactsExport implements FromCollection, WithHeadings
{
    public function collection()
    {
        return Contact::with('groups')->get()->map(function($contact) {
            return [
                'id' => $contact->id,
                'name' => $contact->name,
                'email' => $contact->email,
                'phone' => $contact->phone,
                'address' => $contact->address,
                'segment' => $contact->segment,
                'groups' => $contact->groups->pluck('name')->join(', '),
                'last_interaction' => $contact->last_interaction,
            ];
        });
    }

    public function headings(): array
    {
        return [
            'ID',
            'Name',
            'Email',
            'Phone',
            'Address',
            'Segment',
            'Groups',
            'Last Interaction',
        ];
    }
}
