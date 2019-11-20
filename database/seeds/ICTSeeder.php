<?php

use Illuminate\Database\Seeder;
use App\Question;
class ICTSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $ict = array(
            array('subject_id'=>4,'question'=> 'A computer program designed to perform group of coordinated functions, tasks, or activities for benefit of user is termed as', 'option1' => 'computer application','option2' => 'control application','option3' => 'punching application','option4' => 'peripheral application','correct_ans' =>"a"),
            array('subject_id'=>4,'question'=> 'In flowcharts, capsule shaped symbol is used to represent', 'option1' => 'beginning of program','option2' => 'ending of program','option3' => 'output data','option4' => 'both A and B','correct_ans' => "d"),
            array('subject_id'=>4,'question'=> "To write a program functions such as input four numbers and print their sum, program refinement second level includes", 'option1' => 'print the values','option2' => 'print the variables','option3' => 'input four numbers','option4' => 'calculate sum','correct_ans' => "d"),
            array('subject_id'=>4,'question'=> "Algorithm is made up of", 'option1' => 'sequence to print data','option2' => 'selection','option3' => 'repetition','option4' => 'all of above','correct_ans' => 'd'),
            array('subject_id'=>4,'question'=> 'Thing to keep in mind while solving a problem is', 'option1' => 'input data','option2' => 'output data','option3' => 'stored data','option4' => 'all of above','correct_ans' => 'd'),
            array('subject_id'=>4,'question'=> 'Series of steps that are followed to solve a problem is classified as', 'option1' => 'flowchart','option2' => 'structure diagram','option3' => 'algorithm','option4' => 'solving method','correct_ans' => "c"),
            array('subject_id'=>4,'question'=> 'Transmission in which all bits are sent at same time for each character is called, is', 'option1' => 'parallel transmission','option2' => 'wide transmission','option3' => 'local transmission','option4' => 'serial transmission','correct_ans' => "a"),
            array('subject_id'=>4,'question'=> 'Types of software programs are', 'option1' => 'Application programs','option2' => 'Replicate programs','option3' => 'Logical programs','option4' => 'both A and B','correct_ans' => "d"),
            array('subject_id'=>4,'question'=> "Process to exit from computer by giving correct instructions such as 'EXIT' is classified as", 'option1' => 'log in','option2' => "process out",'option3' => 'process in','option4' =>"log out",'correct_ans' => "d"),
            array('subject_id'=>4,'question'=> 'Function of running and loading programs by use of peripherals is function of', 'option1' => "operating system",'option2' => 'inquiry system','option3' => 'dump programs','option4' => 'function system','correct_ans' => "a"),
            array('subject_id'=>4,'question'=> 'Program which exactly perform operations that its manual says is classified as', 'option1' => 'unreliable','option2' => 'unstable functioning','option3' => 'robust','option4' => 'reliable','correct_ans' => "d"),
            array('subject_id'=>4,'question'=> 'Program provides users with grid of rows and columns is classified as', 'option1' => 'spreadsheet','option2' => 'column grid','option3' => 'rows grid','option4' => 'reliability grid','correct_ans' => "a"),
            array('subject_id'=>4,'question'=> 'In microcomputers, operating system is usually stored on', 'option1' => 'random access memory','option2' => 'read only memory','option3' => 'permanent memory','option4' => 'temporary memory.','correct_ans' => "b"),
            array('subject_id'=>4,'question'=> 'Slots in spreadsheet that can be copied to other slots are classified as', 'option1' => 'relative slots','option2' => 'replicate slots','option3' => 'complicate slots','option4' => 'column slots','correct_ans' => "b"),
            array('subject_id'=>4,'question'=> 'Process of gaining access to a computer by giving correct user identification is classified as', 'option1' => 'process in','option2' => 'log out','option3' => 'log in','option4' => 'process out','correct_ans' => "c"),
            array('subject_id'=>4,'question'=> 'Number and name system which uses to identify user is called', 'option1' => 'user identification','option2' => 'system identification','option3' => 'temporary identification','option4' => 'operating identification','correct_ans' => "a"),
            array('subject_id'=>4,'question'=> 'Slots in spreadsheet whose formula is not exactly copied are classified as', 'option1' => 'complicate slots','option2' => 'column slots','option3' => 'relative slots','option4' => 'replicate slots','correct_ans' => "c"),
            array('subject_id'=>4,'question'=> 'Diagram which is used to show logic elements and their interconnections is said to be', 'option1' => 'circuit diagram','option2' => 'system diagram','option3' => 'logic diagram','option4' => 'gate diagram','correct_ans' => "c"),
            array('subject_id'=>4,'question'=> 'lectrical circuit having all voltages at one of two values are called', 'option1' => 'binary circuit','option2' => 'binary logic','option3' => 'logic circuit','option4' => 'none of the above','correct_ans' => "c"),
            array('subject_id'=>4,'question'=> 'Operation carried out by a NOT gate are also termed as', 'option1' => 'inverting','option2' => 'converting','option3' => 'reverting','option4' => 'reversing','correct_ans' => "a"),
            array('subject_id'=>4,'question'=> 'Number of logic gates and way of their interconnections can be classified as', 'option1' => 'logical network','option2' => 'system network','option3' => 'circuit network','option4' => 'gate network','correct_ans' => "a"),
            array('subject_id'=>4,'question'=> 'Logic gate in which output is zero for inputs in which one input is one and other inputs are zero is classified as', 'option1' => 'AND gate','option2' => 'NOT gate','option3' => 'OR gate','option4' => 'OUT gate','correct_ans' => "a"),
            array('subject_id'=>4,'question'=> 'Logic gate in which any one of inputs is logic 1 results in output as logic 1 is termed as', 'option1' => 'NOT gate','option2' => 'NOR gate','option3' => 'AND gate','option4' => 'OR gate','correct_ans' => "d"),
            array('subject_id'=>4,'question'=> "Table that shows result of logical operations conducted is called", 'option1' => 'logic table','option2' => 'gate table','option3' => 'system circuit table','option4' => 'truth table','correct_ans' => "d"),
            array('subject_id'=>4,'question'=> " Logic circuit with only one output and one or more inputs is said to be", 'option1' => 'binary gate','option2' => 'logic gate','option3' => 'circuit gate','option4' => 'system gate','correct_ans' => "b"),
            array('subject_id'=>4,'question'=> 'A logic gate having two or more inputs and when both inputs are logic 1 then output will be logic 1 is said to be', 'option1' => 'AND gate','option2' => 'OUT gate','option3' => 'OR gate','option4' => 'IN gate','correct_ans' => "a"),
            array('subject_id'=>4,'question'=> "A single unit which is composed of small group of bits is known as", 'option1' => 'bit','option2' => 'bug','option3' => "flag",'option4' => 'byte','correct_ans' => "d"),
            array('subject_id'=>4,'question'=> 'BCD stands for', 'option1' => 'Binary Coded Decimal','option2' => 'Binary Coded Digitals','option3' => 'Binary Characters Decimals','option4' => 'Binary Conducting Decimals','correct_ans' => "a"),
            array('subject_id'=>4,'question'=> " 'megabytes' of computer storage capacity consists of", 'option1' => 'one million bytes','option2' => 'two million bytes','option3' => 'three million bytes','option4' => 'four million bytes','correct_ans' => "a"),
            array('subject_id'=>4,'question'=> " Method of representing numbers such as '0s' and '1s' is called", 'option1' => 'binary notation','option2' => 'primary notation','option3' => 'secondary notation','option4' => 'variable notation','correct_ans' => "a"),
            array('subject_id'=>4,'question'=> "Number of bits in 'EBCDIC' code for computing are", 'option1' => 'eight bits','option2' => 'eighteen bits','option3' => 'twenty eight bits','option4' => 'seven bits','correct_ans' => "a"),
            array('subject_id'=>4,'question'=> 'Numbers that are written with base 16 are classified as', 'option1' => 'whole numbers','option2' => 'hexadecimal','option3' => 'exponential integers','option4' => 'mantissa','correct_ans' => "b"),
            array('subject_id'=>4,'question'=> 'Binary strings which are formed by replacing 0s by 1s and 1s by 0s is referred as', 'option1' => 'ones complement','option2' => 'twos complement','option3' => 'ones string','option4' => 'twos string','correct_ans' => "a"),
            array('subject_id'=>4,'question'=> 'In American Standard Code (ASCII), maximum possible characters set size can be', 'option1' => 'character set of 128','option2' => 'character set of 138','option3' => 'character set of 148','option4' => 'character set of 158','correct_ans' => "a"),
            array('subject_id'=>4,'question'=> "Code 'EBCDIC' which is used in computing stands for", 'option1' => 'extended BCD interchange code','option2' => 'extension of BCD information code','option3' => 'extension of BCD interchange conduct','option4' => 'extended BCD information conduct','correct_ans' => "a"),
            array('subject_id'=>4,'question'=> 'Number of bits in American Standard Code (ASCII) used in computing are', 'option1' => 'five bits','option2' => 'six bits','option3' => 'twenty bits','option4' => 'ten bits','correct_ans' => "c"),
            array('subject_id'=>4,'question'=> 'Symbols such as letters or any digit are called', 'option1' => 'characters','option2' => 'small bits','option3' => 'small bytes','option4' => 'output characters','correct_ans' => "a"),
            array('subject_id'=>4,'question'=> 'Sequence of grouped binary digits is represented', 'option1' => 'bit string','option2' => 'byte string','option3' => 'binary string','option4' => 'input string','correct_ans' => "c"),
            array('subject_id'=>4,'question'=> "System which stores data in states such as '0' and '1' is called", 'option1' => 'binary digit','option2' => "bit",'option3' => 'bytes','option4' => 'characters','correct_ans' => "a"),
            array('subject_id'=>4,'question'=> 'Smallest number that can be stored as positive integers is', 'option1' => '0','option2' => '1','option3' => '2','option4' => '3','correct_ans' => "a"),
            array('subject_id'=>4,'question'=> "Sequence of operations are represented in", 'option1' => 'flowcharts of algorithms','option2' => 'flowchart of process','option3' => 'flowchart of system','option4' => 'flowchart of operations','correct_ans' => "a"),
            array('subject_id'=>4,'question'=> 'Binary integers that are formed by finding 1s complement and adding 1 to it are called', 'option1' => "threes complement",'option2' => 'ones complement','option3' => 'twos complement','option4' => 'ones string','correct_ans' => "c"),
            array('subject_id'=>4,'question'=> 'Any byte used to store data in a computer system is of', 'option1' => 'four bits','option2' => 'five bits','option3' => 'seven bits','option4' => 'eight bits','correct_ans' => "d"),
            array('subject_id'=>4,'question'=> 'Numbers that are written with base 8 are classified as', 'option1' => 'octal numbers','option2' => 'hexadecimal','option3' => 'two digit positive integers','option4' => 'real numbers','correct_ans' => "a"),
            array('subject_id'=>4,'question'=> 'In a binary system, numbers with power of 2 are', 'option1' => '1, 2, 4, 8, 16, 32','option2' => '1, 2, 3, 4, 5, 6','option3' => '1, 2, 16, 32, 64, 81','option4' => '1, 3, 5, 7, 9, 11','correct_ans' => "a"),
            array('subject_id'=>4,'question'=> 'Number with power 2 such as 32, 16, 4, 2, 1 are represented in form of binary integers as', 'option1' => '110111','option2' => '1.11E+14','option3' => 'e111101','option4' => '21110001','correct_ans' => "a"),
            array('subject_id'=>4,'question'=> ' In flowchart, parallelogram is used for representation of', 'option1' => 'general input symbol','option2' => 'operation on data','option3' => 'ones complement method','option4' => 'output data screen','correct_ans' => "a"),
            array('subject_id'=>4,'question'=> '1 kilobyte consists of', 'option1' => '768 bytes','option2' => '724 bytes','option3' => '1024 bytes','option4' => '1078 bytes','correct_ans' => "c"),
            array('subject_id'=>4,'question'=> 'In flowcharts, symbol of rectangle is used to represent', 'option1' => 'operations on data','option2' => 'system process','option3' => 'manual operations','option4' => 'magnetic disc','correct_ans' => "a"),
            array('subject_id'=>4,'question'=> 'In flow chart, diamond shaped symbol is used to represent', 'option1' => 'decision box','option2' => 'statement box','option3' => 'error box','option4' => 'if-statement box','correct_ans' => "a"),
            array('subject_id'=>4,'question'=> 'To write a program function i.e. program for sum of four integers, program refinement first level includes', 'option1' => 'input four numbers','option2' => 'calculate sum','option3' => 'print the values','option4' => 'display the values','correct_ans' => "a"),
            array('subject_id'=>4,'question'=> 'Part of algorithm which is repeated for fixed number of times is classified as', 'option1' => 'iteration','option2' => 'selection','option3' => 'sequence','option4' => 'reverse action','correct_ans' => "a"),
            array('subject_id'=>4,'question'=> 'Diagram that represents steps or operations involved in any kind of process is called,', 'option1' => 'system diagram', 'option2' => 'management hierarchy','option3' => 'flowcharts','option4' => 'convenience diagrams','correct_ans' => "c"),
         );     
         Question::insert($ict);
    }
}
