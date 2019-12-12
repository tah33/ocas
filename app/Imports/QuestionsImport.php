<?php

namespace App\Imports;

use App\Question;
use Maatwebsite\Excel\Concerns\ToModel;
use Response;
class QuestionsImport implements ToModel
{

    public $id;

    public function __construct($id){
        $this->id = $id;
    }

    public function model(array $row)
    {

        $question               = new Question;
        $question->subject_id   = $this->id;
        $question->question     = $row[1];
        $question->option1      = $row[2];
        $question->option2      = $row[3];
        $question->option3      = $row[4];
        $question->option4      = $row[5];
        $question->correct_ans  = $row[6];
        return $question;

    }
}
