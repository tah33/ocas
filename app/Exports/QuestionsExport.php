<?php

namespace App\Exports;

use App\Question;
use Maatwebsite\Excel\Concerns\FromCollection;
use DB;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithHeadings;
class QuestionsExport implements FromCollection , WithHeadings
{

    public function collection()
    {
        $questions = DB::table('questions')->select('question','option1','option2','option3','option4','correct_ans')->get();
        return $questions;
    }

    public function headings(): array
    {
        return ["Question", "option1","option2","option3","option4",'Correct Answer'];
    }
}
