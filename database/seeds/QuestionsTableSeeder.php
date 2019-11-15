<?php

use Illuminate\Database\Seeder;
use App\Question;
use App\Subject;
class QuestionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $physics = array(array('question'=> 'Terminal potential difference of battery depends on', 'option1' => 'current','option2' => 'temperature','option3' => 'both A and B','option4' => 'resistance of external resistor','correct_ans' =>"d"),
            array('question'=> 'Density of water in kg m-3 is', 'option1' => 1000,'option2' => 100,'option3' => 10000,'option4' => 4000,'correct_ans' => "a"),
            array('question'=> 'As object gains speed, its G.P.E (Gravitational Potential Energy', 'option1' => 'increases','option2' => 'remains constant','option3' => 'decreases','option4' => 'varies depending on altitude','correct_ans' => "d"),
            array('question'=> 'Activity is proportional to number of', 'option1' => 'daughter nuclei','option2' => 'decayed nuclei','option3' => 'decayed nuclei','option4' => 'father nuclei','correct_ans' => "c"),
            array('question'=> 'A filament lamp is', 'option1' => 'Ohmic','option2' => 'non-Ohmic','option3' => 'low resistive','option4' => 'non glowing','correct_ans' => "b"),
            array('question'=> 'Intensity of suns radiation is about', 'option1' => '1.0 kW m-2','option2' => '20 kW m-2','option3' => '5 kW m-2','option4' => '8 kW m-2','correct_ans' => "a"),
            array('question'=> 'Phenomena in which a charged body attract uncharged body is called', 'option1' => 'electrostatic induction','option2' => 'electric current','option3' => 'charge movement','option4' => 'magnetic induction','correct_ans' => "a"),
            array('question'=> 'Semiconductors have electron number density of order', 'option1' => '1024 m-3','option2' => '1020 m-3','option3' => '1012 m-3','option4' => '1023 m-3','correct_ans' => "d"),
            array('question'=> 'An electron is travelling at right angles to a uniform magnetic field of flux density 1.2 mT with a speed of 8 × 106 m s-1, radius of circular path followed by electron is', 'option1' => '3.8 cm','option2' => '3.7 cm','option3' => '3.6 cm','option4' => '3.5 cm','correct_ans' => "a"),
            array('question'=> 'High speed electrons have wavelength of order', 'option1' => '10-15 m','option2' => '10-14 m','option3' => '10-16 m','option4' => '10-17 m','correct_ans' => "a"),
            array('question'=> 'Strength of magnetic field is known as', 'option1' => 'flux','option2' => 'density','option3' => 'magnetic strength','option4' => 'magnetic flux density','correct_ans' => "d"),
            array('question'=> 'Only force acting on a bouncing ball is', 'option1' => 'gravity','option2' => 'weight of ball','option3' => 'friction','option4' => 'a and b both','correct_ans' => "a"),
            array('question'=> 'Gradual decrease in x-ray beam intensity as it passes through material is called', 'option1' => 'attenuation','option2' => 'decay','option3' => 'radioactivity','option4' => 'imaging','correct_ans' => "a"),
            array('question'=> 'A straight line symbol shows the', 'option1' => 'fuse','option2' => 'diode','option3' => 'connecting lead','option4' => 'switch','correct_ans' => "c"),
            array('question'=> 'Visible light has wavelength of', 'option1' => '5 × 10-7 m','option2' => '3 × 108 m','option3' => '6 × 10³ m','option4' => '4 × 104 m','correct_ans' => "a"),
            array('question'=> 'Force acting on two point masses is directly proportional to', 'option1' => 'sum of masses','option2' => 'difference of masses','option3' => 'distance between masses','option4' => 'product of masses','correct_ans' => "d"),
            array('question'=> 'Maximum displacement from equilibrium position is', 'option1' => 'frequency','option2' => 'amplitude','option3' => 'wavelength','option4' => 'period','correct_ans' => "b"),
            array('question'=> 'Attenuation coefficient of bone is 600 m-1 for x-rays of energy 20 keV and intensity of beam of x-rays is 20 Wm-2, then intensity of beam after passing through a bone of 4mm is', 'option1' => '3 Wm-2','option2' => '2.5 Wm-2','option3' => '2.0 Wm-2','option4' => '1.8 Wm-2','correct_ans' => "d"),
            array('question'=> 'Contact force always acts at parallel to the surface producing it', 'option1' => 'acute angles to the surface producing it','option2' => 'right angles to the surface producing it','option3' => 'obtuse angle to the surface producing it','option4' => 'obtuse angle to the surface producing it','correct_ans' => "b"),
            array('question'=> 'Unit of luminous intensity is', 'option1' => 'm','option2' => 'kg','option3' => 'cd','option4' => 'mol','correct_ans' => "c"),
            array('question'=> ' As compared to sound waves frequency of radio waves is', 'option1' => 'lower','option2' => 'higher','option3' => 'equal','option4' => 'may be higher or lower','correct_ans' => "b"),
            array('question'=> 'Decrease in strength of signal is known as', 'option1' => 'tuning','option2' => 'modulation','option3' => 'attenuation','option4' => 'amplification','correct_ans' => "c"),
            array('question'=> 'E.M.F can be induced in a circuit by', 'option1' => 'changing magnetic flux density','option2' => 'changing area of circuit','option3' => 'changing the angle','option4' => 'all of above','correct_ans' => "d"),
         );        
    }
}
