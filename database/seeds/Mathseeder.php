<?php

use Illuminate\Database\Seeder;
use App\Question;
class Mathseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $math = array(
            array('subject_id'=>1,'question'=> 'Simplify 15ax2 ⁄ 5x', 'option1' => '3ax2','option2' => '3ax','option3' => '5ax2','option4' => '5ax','correct_ans' =>"b"),
            array('subject_id'=>1,'question'=> 'Simplify 5⁄2 ÷ 1⁄x', 'option1' => '5x ⁄ 2','option2' => '5 ⁄ 2x','option3' => '2 ⁄ 5x','option4' => '2x ⁄ 5','correct_ans' => "a"),
            array('subject_id'=>1,'question'=> 'Simplify a(c - b) - b(a - c)', 'option1' => 'ac - 2ab - bc','option2' => 'ac - 2ab + bc','option3' => 'ac + 2ab + bc','option4' => 'ac + bc','correct_ans' => "b"),
            array('subject_id'=>1,'question'=> ' Coefficient of x2 in 4x3 + 3x2 - x + 1 is:', 'option1' => '1','option2' => '-1','option3' => '3','option4' => '2','correct_ans' => "c"),
            array('subject_id'=>1,'question'=> 'Expand and simplfy (x - 5)(x + 4)', 'option1' => 'x2 + 9x - 20','option2' => 'x2 - x - 9','option3' => 'x2 - x - 1','option4' => 'x2 - x - 20','correct_ans' => "d"),
            array('subject_id'=>1,'question'=> 'Expand and simplfy (x - y)(x + y)', 'option1' => 'x2 - 2xy + y2','option2' => 'x2 + 2xy + y2','option3' => 'x2 - y2','option4' => 'x2 + y2','correct_ans' => "c"),
            array('subject_id'=>1,'question'=> '(a - b)2 =', 'option1' => 'a2 - 2ab + b2','option2' => 'a2 + 2ab + b2','option3' => 'a2 - b2','option4' => 'a2 + b2','correct_ans' => "a"),
            array('subject_id'=>1,'question'=> 'Factorise x2 + x - 72', 'option1' => '(x - ?72)(x + ?72)','option2' => '(x - ?72)2','option3' => '(x - 8)(x + 9)','option4' => '(x + 8)(x - 9)','correct_ans' => "c"),
            array('subject_id'=>1,'question'=> 'Factorise -20x2 - 9x + 20', 'option1' => '(5 + 4x)(4 - 5x)','option2' => '(5 - 4x)(4 - 5x)','option3' => '(5 - 4x)(4 + 5x)','option4' => '(5 + 4x)(4 + 5x)','correct_ans' => "a"),
            array('subject_id'=>1,'question'=> 'Expand and simplify (x + y)3', 'option1' => 'x3 + 3xy(x - y) + y3','option2' => 'x3 + 3xy(x + y) + y3','option3' => 'x3 + y3','option4' => 'x3 - y3','correct_ans' => "b"),
            array('subject_id'=>1,'question'=> ' Simplify (x - 9)(x + 10) ⁄ (x2 - 81)', 'option1' => '(x2 + x - 90) ⁄ (x2 - 81)','option2' => '(x + 10) ⁄ (x - 9)','option3' => '(x + 10) ⁄ (x + 9)','option4' => 'None of the above','correct_ans' => "c"),
            array('subject_id'=>1,'question'=> ' Simplify (3x ⁄ 2y)(x ⁄ 3y)', 'option1' => 'x ⁄ 2y','option2' => '(3x2) ⁄ (2y2)','option3' => 'x2 ⁄ (6y2)','option4' => 'x2 ⁄ (2y2)','correct_ans' => "d"),
            array('subject_id'=>1,'question'=> 'Simplify (1 ⁄ (x2 - 1)) ÷ (1 ⁄ (x + 1))', 'option1' => '1 ⁄ (x - 1)','option2' => '1 ⁄ (x + 1)','option3' => '1 ⁄ (x2 - 1)','option4' => 'None of the above','correct_ans' => "a"),
            array('subject_id'=>1,'question'=> ' Simplify (1 ⁄ s) - (1 ⁄ t)', 'option1' => '(s - t) ⁄ st','option2' => '(t - s) ⁄ st','option3' => '0','option4' => '1 ⁄ (s - t)','correct_ans' => "b"),
            array('subject_id'=>1,'question'=> 'Simplify (2 ⁄ tanA) + (4 ⁄ tanB)', 'option1' => '(2tanB + 4tanA) ⁄ tanAtanB','option2' => '(2tanA + 4tanB) ⁄ tanAtanB','option3' => '6 ⁄ (tanA + tanB)','option4' => 'None of the above','correct_ans' => "a"),
            array('subject_id'=>1,'question'=> '1 ⁄ (x2 - 1) can be expressed as (A ⁄ (x+1)) + (B ⁄ (x-1)), which of following pairs of values of A and B is correct?', 'option1' => 'A = 1, B = -1','option2' => 'A = 1⁄2, B = -1⁄2','option3' => 'A = -1⁄2, B = 1⁄2','option4' => 'A = 1, B = 0','correct_ans' => "b"),
            array('subject_id'=>1,'question'=> 'Express ?20 in terms of simplest possible surd.', 'option1' => '10','option2' => '5?2','option3' => '4?5','option4' => '2?5','correct_ans' => "d"),
            array('subject_id'=>1,'question'=> 'Express ?500 in terms of simplest possible surd.', 'option1' => '10?50','option2' => '50?10','option3' => '10?5','option4' => '5?10','correct_ans' => "c"),
            array('subject_id'=>1,'question'=> ' Expand and simplify (3 + 2?5)(6 + 4?5)
', 'option1' => '58 + 24?5','option2' => '58 + 12?5','option3' => '58 + 24?10','option4' => '18 + 32?5','correct_ans' => "a"),
            array('subject_id'=>1,'question'=> 'Rationalise denominator of 1 ⁄ (3?5 - 3?2), simplify where possible', 'option1' => '(3?5 - 3?2) ⁄ (63 - 18?10)','option2' => '(3?5 + 3?2) ⁄ 27','option3' => '(3?5 + 3?2) ⁄ (63 - 18?10)','option4' => '(3?5 - 3?2) ⁄ 27','correct_ans' => "b"),
            array('subject_id'=>1,'question'=> ' Simplify (a^(-1 ⁄ 3) × a^(1 ⁄ 3)) ⁄ a^(-1 ⁄ 2)', 'option1' => 'a^(-7 ⁄ 18)','option2' => 'a^(-1 ⁄ 2)','option3' => 'a^(1 ⁄ 2)','option4' => 'None of the above','correct_ans' => "c"),
            array('subject_id'=>1,'question'=> 'Evaluate (1 ⁄ 64)^(-1⁄3)4^-1', 'option1' => 'tuning','option2' => '4','option3' => '2^-1','option4' => '2','correct_ans' => "b"),
            array('subject_id'=>1,'question'=> 'Logarithm to base 10 of 1000 is:', 'option1' => '1','option2' => '2','option3' => '3','option4' => '4','correct_ans' => "c"),
            array('subject_id'=>1,'question'=> "Index form of 'logarithm to base x of y is z' is:", 'option1' => 'x^z = y','option2' => 'x^y = z','option3' => 'y^z = x','option4' => 'z^y = x','correct_ans' => "a"),
            array('subject_id'=>1,'question'=> "In logarithmic form of '2&sup6; = 64':", 'option1' => 'base = 6, log = 2, number = 64','option2' => 'base = 2, log = 6, number = 64','option3' => 'base = 2, log = 64, number = 6','option4' => 'base = 64, log = 2, number = 6','correct_ans' => "b"),
            array('subject_id'=>1,'question'=> 'Logarithm to base 1⁄2 of 16 is:', 'option1' => '4','option2' => '5','option3' => '-5','option4' => '-4','correct_ans' => "d"),
            array('subject_id'=>1,'question'=> "Logarithm of 'x' to power 'y' is equal to:", 'option1' => 'y × (logarithm of x)','option2' => 'x × (logarithm of y)','option3' => "(logarithm of 'x') × (logarithm of 'y')",'option4' => 'None of the above','correct_ans' => "a"),
            array('subject_id'=>1,'question'=> 'Solve equation 4x2 + 36x + 81', 'option1' => 'x = 9⁄2, x = 9⁄2','option2' => 'x = -9⁄2, x = 9⁄2','option3' => 'x = -9⁄2, x = -9⁄2','option4' => 'None of the above','correct_ans' => "c"),
            array('subject_id'=>1,'question'=> ' Solve equation x2 + 6x - 7 = 0', 'option1' => 'x = -6, x = -1','option2' => 'x = -6, x = 1','option3' => 'x = 6, x = -1','option4' => 'x = 6, x = 1','correct_ans' => "d"),
            array('subject_id'=>1,'question'=> ' Solve equation x2 + 3x', 'option1' => 'x = -3','option2' => 'x = 0, x = -3','option3' => 'x = 3','option4' => 'x = 0, x = 3','correct_ans' => "b"),
            array('subject_id'=>1,'question'=> 'Find by using formula roots for following equation: ax2 + bx + c', 'option1' => '(-b±?(b2 - 4ac)) ⁄ 2a','option2' => '(b ± ?(b2 - 4ac)) ⁄ 2a','option3' => '(-b ± ?(b2 + 4ac)) ⁄ 2a','option4' => '(-b ± ?(b2 - 4c)) ⁄ 2a','correct_ans' => "a"),
            array('subject_id'=>1,'question'=> 'Solve equations: x + 2y = 13, x + y + z = 12, 2y + z = 11', 'option1' => 'x = 3, y = 4, z = 5','option2' => 'x = 5, y = 4, z = 3','option3' => 'x = 4, y = 5, z = 3','option4' => 'x = 3, y = 5, z = 4','correct_ans' => "b"),
            array('subject_id'=>1,'question'=> 'Value of b2 - 4ac determines nature of roots, for real and different roots, b2 - 4ac is:', 'option1' => 'lesser than 0','option2' => 'equal to 0','option3' => 'greater than 0','option4' => 'None of the above','correct_ans' => "c"),
            array('subject_id'=>1,'question'=> '  Value of b2 - 4ac determines nature of roots, for real and equal roots, b2 - 4ac is:', 'option1' => 'lesser than 0','option2' => 'equal to 0','option3' => 'greater than 0','option4' => 'None of the above','correct_ans' => "b"),
            array('subject_id'=>1,'question'=> 'Sum of roots of a quadratic equation is equal to:', 'option1' => '-b ⁄ 2a','option2' => '-2b ⁄ a','option3' => '-b ⁄ a','option4' => 'b ⁄ a','correct_ans' => "c"),
            array('subject_id'=>1,'question'=> 'Length of line joining two points (x1, y1) and (x2, y2) is:', 'option1' => '(x2 - x1) + (y2 - y1)','option2' => '?((x2 - x1) + (y2 - y1))','option3' => '?((x2 - x1)2 + (y2 - y1)2)','option4' => '(y2 - y1) ⁄ (x2 - x1)','correct_ans' => "c"),
            array('subject_id'=>1,'question'=> 'Coordinates of midpoint of line joining two points (x1, y1) and (x2, y2) are:', 'option1' => '((x2 - x1) ⁄ 2, (y2 - y1) ⁄ 2)','option2' => '((x2 + x1) ⁄ 2, (y2 + y1) ⁄ 2)','option3' => '((x2 - x1), (y2 - y1))','option4' => '((x2 + x1), (y2 + y1))','correct_ans' => "b"),
            array('subject_id'=>1,'question'=> ' Coordinates of midpoint of line joining two points (1, 2) and (4, 8) are:', 'option1' => '(2.5, 10)','option2' => '(5, 5)','option3' => '(5, 10)','option4' => '(2.5, 5)','correct_ans' => "d"),
            array('subject_id'=>1,'question'=> 'Length of line joining two points (1, 2) and (4, 8) is:', 'option1' => '3','option2' => '9','option3' => '?45','option4' => '45','correct_ans' => "c"),
            array('subject_id'=>1,'question'=> 'Coordinates of midpoint of line joining two points (16, 4) and (36, 6) are:', 'option1' => '(26, 5)','option2' => '(5, 26)','option3' => '(10, 1)°','option4' => '(1, 10)°','correct_ans' => "a"),
            array('subject_id'=>1,'question'=> ' Length of line joining two points (16, 4) and (36, 6) is:', 'option1' => '22','option2' => '?22','option3' => '404','option4' => '?404','correct_ans' => "d"),
            array('subject_id'=>1,'question'=> 'Consider a line passing through (1, 2) and (4, 8), gradient of this line is equal to:', 'option1' => "1 ⁄ 2",'option2' => '-1 ⁄ 2','option3' => '2','option4' => '-2','correct_ans' => "c"),
            array('subject_id'=>1,'question'=> 'Consider a line passing through (16, 4) and (36, 6), gradient of this line is equal to:', 'option1' => '-0.1','option2' => '0.1','option3' => '-10','option4' => '10','correct_ans' => "b"),
            array('subject_id'=>1,'question'=> 'A father of three daughters bought 6 dolls at $10 each and a few stationary items costing about $5 each. Overall, he spent $200. How many stationary items did he purchase?', 'option1' => '20 items','option2' => '25 items','option3' => '28 items','option4' => '30 items','correct_ans' => "c"),
            array('subject_id'=>1,'question'=> 'Sum of numbers from 1 to 100 i.e. (1+2+3+4+5+6', 'option1' => '505','option2' => '5050','option3' => '550','option4' => '5500','correct_ans' => "b"),
            array('subject_id'=>1,'question'=> '(0.001)2 ÷ 1000 is equal to:', 'option1' => '1000','option2' => '0.001','option3' => '0.00000001','option4' => '0.000000001','correct_ans' => "d"),
            array('subject_id'=>1,'question'=> 'Arrange following fractions in ascending order: (2 ⁄ 7), (4 ⁄ 9), (1 ⁄ 5), (3 ⁄ 8)', 'option1' => '(1 ⁄ 5), (2 ⁄ 7), (3 ⁄ 8), (4 ⁄ 9)','option2' => '(1 ⁄ 5), (4 ⁄ 9), (2 ⁄ 7), (3 ⁄ 8)','option3' => '(1 ⁄ 5), (4 ⁄ 9), (3 ⁄ 8), (2 ⁄ 7)','option4' => '(4 ⁄ 9), (3 ⁄ 8), (2 ⁄ 7), (1 ⁄ 5)','correct_ans' => "a"),
            array('subject_id'=>1,'question'=> 'Arrange following fractions in descending order: (2 ⁄ 7), (4 ⁄ 9), (1 ⁄ 5), (3 ⁄ 8)', 'option1' => '(1 ⁄ 5), (2 ⁄ 7), (3 ⁄ 8), (4 ⁄ 9)','option2' => '(1 ⁄ 5), (4 ⁄ 9), (2 ⁄ 7), (3 ⁄ 8)','option3' => '(1 ⁄ 5), (4 ⁄ 9), (3 ⁄ 8), (2 ⁄ 7)','option4' => '(4 ⁄ 9), (3 ⁄ 8), (2 ⁄ 7), (1 ⁄ 5)','correct_ans' => "d"),
            array('subject_id'=>1,'question'=> 'Mid-way fraction of (5 ⁄ 6) and (8 ⁄ 15) is:', 'option1' => '41 ⁄ 30','option2' => '41 ⁄ 60','option3' => '13 ⁄ 21','option4' => 'None of the above','correct_ans' => "b"),
            array('subject_id'=>1,'question'=> 'A tank of water contains 250 liters of water, if 10 milliliters of water is removed from it every second of an hour, how much water would be left in it after 5 hours. (1 liter = 1000 ml)
', 'option1' => '60 liters','option2' => '65 liters','option3' => '70 liters','option4' => '180 liters','correct_ans' => "c"),
            array('subject_id'=>1,'question'=> ' Among 1, 2, 3, 4, 5, 6, 12, 13, 14, 15, 16, 17, prime numbers include:', 'option1' => '1, 2, 3, 5, 12, 13, 15, 17','option2' => '1, 2, 3, 5, 13, 15, 17','option3' => '1, 2, 3, 5, 13, 17','option4' => '2, 3, 5, 13, 17','correct_ans' => "d"),
            array('subject_id'=>1,'question'=> 'Among 0.5, 1, √(4), π, and (5 ⁄ 8), irrational numbers are:', 'option1' => '0.5, √(4) and π','option2' => '√(4) and π','option3' => 'π only','option4' => 'None of them is an irrational number','correct_ans' => "c"),
            array('subject_id'=>1,'question'=> 'If 0 is first time, nth term of sequence 0, 4, 8, 12, 16,', 'option1' => '4 × n','option2' => '4 × (n + 1)','option3' => '4 × (n - 1)','option4' => 'None of the above','correct_ans' => "c"),
         );     
         Question::insert($math);
    }
}
