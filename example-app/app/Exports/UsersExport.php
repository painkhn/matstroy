<?php
namespace App\Exports;

use App\Models\User;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithStyles; // Для стилизации
use PhpOffice\PhpSpreadsheet\Style\Alignment; // Для выравнивания

class UsersExport implements FromCollection, WithHeadings, WithStyles
{
    /**
     * Получаем коллекцию пользователей.
     *
     * @return \Illuminate\Support\Collection
     */
    public function collection()
    {
        // Получаем всех пользователей
        return User::select('id', 'name', 'email', 'is_admin', 'photo', 'created_at') // Указываем нужные поля
                   ->get();
    }

    /**
     * Заголовки для столбцов.
     *
     * @return array
     */
    public function headings(): array
    {
        return [
            'ID',
            'Имя',
            'Email',
            'Администратор',
            'Фото',
            'Дата регистрации',
        ];
    }

    /**
     * Стилизация столбцов, включая автоширину.
     *
     * @return array
     */
    public function styles($sheet)
    {
        // Применяем стили к заголовкам
        $sheet->getStyle('A1:F1')->getFont()->setBold(true); // Жирные заголовки
        $sheet->getStyle('A1:F1')->getAlignment()->setHorizontal(Alignment::HORIZONTAL_CENTER); // Центрировать заголовки

        // Устанавливаем автоширину для всех столбцов (A - F)
        foreach (range('A', 'F') as $columnID) {
            $sheet->getColumnDimension($columnID)->setAutoSize(true);
        }

        return [];
    }
}

