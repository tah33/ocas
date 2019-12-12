<?php

namespace App\Exports;

use App\Question;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use DB;
class QuestionExport implements FromCollection, WithHeadings
{
    public $id;

    public function __construct($id){
        $this->id = $id;
    }

    public function collection()
    {
        $questions = DB::table('questions')->select('subject_id','question','option1','option2','option3','option4','correct_ans')
            ->where('subject_id',$this->id)->get();
        return $questions;
    }

    public function headings(): array
    {
        return ['Subject_id',"Question", "option1","option2","option3","option4",'Correct Answer'];
    }
}
