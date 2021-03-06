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
        $physics = array(
            array('subject_id'=>3,'question'=> 'Terminal potential difference of battery depends on', 'option1' => 'current','option2' => 'temperature','option3' => 'both A and B','option4' => 'resistance of external resistor','correct_ans' =>"d"),
            array('subject_id'=>3,'question'=> 'Density of water in kg m-3 is', 'option1' => 1000,'option2' => 100,'option3' => 10000,'option4' => 4000,'correct_ans' => "a"),
            array('subject_id'=>3,'question'=> 'As object gains speed, its G.P.E (Gravitational Potential Energy', 'option1' => 'increases','option2' => 'remains constant','option3' => 'decreases','option4' => 'varies depending on altitude','correct_ans' => "d"),
            array('subject_id'=>3,'question'=> 'Activity is proportional to number of', 'option1' => 'daughter nuclei','option2' => 'decayed nuclei','option3' => 'decayed nuclei','option4' => 'father nuclei','correct_ans' => "c"),
            array('subject_id'=>3,'question'=> 'A filament lamp is', 'option1' => 'Ohmic','option2' => 'non-Ohmic','option3' => 'low resistive','option4' => 'non glowing','correct_ans' => "b"),
            array('subject_id'=>3,'question'=> 'Intensity of suns radiation is about', 'option1' => '1.0 kW m-2','option2' => '20 kW m-2','option3' => '5 kW m-2','option4' => '8 kW m-2','correct_ans' => "a"),
            array('subject_id'=>3,'question'=> 'Phenomena in which a charged body attract uncharged body is called', 'option1' => 'electrostatic induction','option2' => 'electric current','option3' => 'charge movement','option4' => 'magnetic induction','correct_ans' => "a"),
            array('subject_id'=>3,'question'=> 'Semiconductors have electron number density of order', 'option1' => '1024 m-3','option2' => '1020 m-3','option3' => '1012 m-3','option4' => '1023 m-3','correct_ans' => "d"),
            array('subject_id'=>3,'question'=> 'An electron is travelling at right angles to a uniform magnetic field of flux density 1.2 mT with a speed of 8 × 106 m s-1, radius of circular path followed by electron is', 'option1' => '3.8 cm','option2' => '3.7 cm','option3' => '3.6 cm','option4' => '3.5 cm','correct_ans' => "a"),
            array('subject_id'=>3,'question'=> 'High speed electrons have wavelength of order', 'option1' => '10-15 m','option2' => '10-14 m','option3' => '10-16 m','option4' => '10-17 m','correct_ans' => "a"),
            array('subject_id'=>3,'question'=> 'Strength of magnetic field is known as', 'option1' => 'flux','option2' => 'density','option3' => 'magnetic strength','option4' => 'magnetic flux density','correct_ans' => "d"),
            array('subject_id'=>3,'question'=> 'Only force acting on a bouncing ball is', 'option1' => 'gravity','option2' => 'weight of ball','option3' => 'friction','option4' => 'a and b both','correct_ans' => "a"),
            array('subject_id'=>3,'question'=> 'Gradual decrease in x-ray beam intensity as it passes through material is called', 'option1' => 'attenuation','option2' => 'decay','option3' => 'radioactivity','option4' => 'imaging','correct_ans' => "a"),
            array('subject_id'=>3,'question'=> 'A straight line symbol shows the', 'option1' => 'fuse','option2' => 'diode','option3' => 'connecting lead','option4' => 'switch','correct_ans' => "c"),
            array('subject_id'=>3,'question'=> 'Visible light has wavelength of', 'option1' => '5 × 10-7 m','option2' => '3 × 108 m','option3' => '6 × 10³ m','option4' => '4 × 104 m','correct_ans' => "a"),
            array('subject_id'=>3,'question'=> 'Force acting on two point masses is directly proportional to', 'option1' => 'sum of masses','option2' => 'difference of masses','option3' => 'distance between masses','option4' => 'product of masses','correct_ans' => "d"),
            array('subject_id'=>3,'question'=> 'Maximum displacement from equilibrium position is', 'option1' => 'frequency','option2' => 'amplitude','option3' => 'wavelength','option4' => 'period','correct_ans' => "b"),
            array('subject_id'=>3,'question'=> 'Attenuation coefficient of bone is 600 m-1 for x-rays of energy 20 keV and intensity of beam of x-rays is 20 Wm-2, then intensity of beam after passing through a bone of 4mm is', 'option1' => '3 Wm-2','option2' => '2.5 Wm-2','option3' => '2.0 Wm-2','option4' => '1.8 Wm-2','correct_ans' => "d"),
            array('subject_id'=>3,'question'=> 'Contact force always acts at parallel to the surface producing it', 'option1' => 'acute angles to the surface producing it','option2' => 'right angles to the surface producing it','option3' => 'obtuse angle to the surface producing it','option4' => 'obtuse angle to the surface producing it','correct_ans' => "b"),
            array('subject_id'=>3,'question'=> 'Unit of luminous intensity is', 'option1' => 'm','option2' => 'kg','option3' => 'cd','option4' => 'mol','correct_ans' => "c"),
            array('subject_id'=>3,'question'=> ' As compared to sound waves frequency of radio waves is', 'option1' => 'lower','option2' => 'higher','option3' => 'equal','option4' => 'may be higher or lower','correct_ans' => "b"),
            array('subject_id'=>3,'question'=> 'Decrease in strength of signal is known as', 'option1' => 'tuning','option2' => 'modulation','option3' => 'attenuation','option4' => 'amplification','correct_ans' => "c"),
            array('subject_id'=>3,'question'=> 'E.M.F can be induced in a circuit by', 'option1' => 'changing magnetic flux density','option2' => 'changing area of circuit','option3' => 'changing the angle','option4' => 'all of above','correct_ans' => "d"),
            array('subject_id'=>3,'question'=> 'Resistivity of lead is', 'option1' => '22.5 × 10-8 Ω m','option2' => '20.8 × 10-8 Ω m','option3' => '10 Ω m','option4' => '5 Ω m','correct_ans' => "b"),
            array('subject_id'=>3,'question'=> 'If a secondary coil has 40 turns, and, a primary coil with 20 turns is charged with 50 V of potential difference, then potential difference in secondary coil would be', 'option1' => '50 V in secondary coil','option2' => '100 V in secondary coil','option3' => '60 V in secondary coil','option4' => '25 V in secondary coil','correct_ans' => "d"),
            array('subject_id'=>3,'question'=> 'Effect of diffraction is greatest if waves pass through a gap with width equal to', 'option1' => 'frequency','option2' => 'wavelength','option3' => 'amplitude','option4' => 'wavefront','correct_ans' => "b"),
            array('subject_id'=>3,'question'=> 'In order to find internal structure of nucleus, electrons should be accelerated by voltages up to', 'option1' => '105 V','option2' => '107 V','option3' => '109 V','option4' => '1011 V','correct_ans' => "c"),
            array('subject_id'=>3,'question'=> 'Particles involved in movement within material are', 'option1' => 'protons','option2' => 'electrons','option3' => 'neutrons','option4' => 'positrons','correct_ans' => "c"),
            array('subject_id'=>3,'question'=> ' As compared to sound waves frequency of radio waves is', 'option1' => 'lower','option2' => 'higher','option3' => 'equal','option4' => 'may be higher or lower','correct_ans' => "b"),
            array('subject_id'=>3,'question'=> 'Decrease in strength of signal is known as', 'option1' => 'tuning','option2' => 'modulation','option3' => 'attenuation','option4' => 'amplification','correct_ans' => "c"),
            array('subject_id'=>3,'question'=> 'E.M.F can be induced in a circuit by', 'option1' => 'changing magnetic flux density','option2' => 'changing area of circuit','option3' => 'changing the angle','option4' => 'all of above','correct_ans' => "d"),
            array('subject_id'=>3,'question'=> 'Systematic errors occur due to', 'option1' => 'overuse of instruments','option2' => 'careless usage of instruments','option3' => 'both A and B','option4' => 'human sight','correct_ans' => "c"),
            array('subject_id'=>3,'question'=> 'Speed of Earth when a rock of mass 60 kg falling towards Earth with speed of 20 m s-1 is', 'option1' => '2.4 × 10-22 m s-1','option2' => '3.5 × 10-33 m s-1','option3' => '−2.0 × 10-22 m s-1','option4' => '−3 × 1034 m s-1','correct_ans' => "c"),
            array('subject_id'=>3,'question'=> ' Normal force acting per unit cross sectional area is called', 'option1' => 'weight','option2' => 'pressure','option3' => 'volume','option4' => 'friction','correct_ans' => "b"),
            array('subject_id'=>3,'question'=> ' Accelerometer detects the', 'option1' => 'small acceleration','option2' => 'large acceleration','option3' => 'small deceleration','option4' => 'large acceleration and deceleration','correct_ans' => "d"),
            array('subject_id'=>3,'question'=> 'Combinations of base units are', 'option1' => 'simple units','option2' => 'derived units','option3' => 'scalars','option4' => 'vectors','correct_ans' => "b"),
            array('subject_id'=>3,'question'=> 'If plates of capacitor are oppositely charged then total charge is equal to', 'option1' => 'negative','option2' => 'positive','option3' => 'zero','option4' => 'infinite','correct_ans' => "c"),
            array('subject_id'=>3,'question'=> 'LED starts to conduct when voltage is about', 'option1' => '1 V','option2' => '4 V','option3' => '3 V','option4' => '2 V','correct_ans' => "c"),
            array('subject_id'=>3,'question'=> 'LED starts to conduct when voltage is about', 'option1' => '1 V','option2' => '4 V','option3' => '3 V','option4' => '2 V','correct_ans' => "d"),
            array('subject_id'=>3,'question'=> ' For non-inverting amplifier input and output is', 'option1' => 'out of phase','option2' => 'in phase','option3' => 'have phase difference of 180°','option4' => 'have phase difference of 90°','correct_ans' => "b"),
            array('subject_id'=>3,'question'=> ' If gradient of a graph is negative, then acceleration is', 'option1' => 'positive','option2' => 'negative','option3' => 'zero°','option4' => '1°','correct_ans' => "b"),
            array('subject_id'=>3,'question'=> 'Ratio of tensile to strain is', 'option1' => "Young's modulus",'option2' => 'stress','option3' => 'stiffness','option4' => 'tensile force','correct_ans' => "a"),
            array('subject_id'=>3,'question'=> ' Energy given to nucleus to dismantle it increases the', 'option1' => 'kinetic energy of individual nucleons','option2' => 'mechanical energy of individual nucleons','option3' => 'potential energy of individual nucleons','option4' => 'chemical energy of individual nucleons','correct_ans' => "c"),
            array('subject_id'=>3,'question'=> 'Tensile strain is equal to', 'option1' => 'Force per unit area','option2' => 'Force per unit volume','option3' => 'Extension per unit length','option4' => 'Force per unit length','correct_ans' => "c"),
            array('subject_id'=>3,'question'=> 'If energy loss is zero then decrease in G.P.E is equal to', 'option1' => 'decreases in kinetic energy','option2' => 'gain in kinetic energy','option3' => 'constant kinetic energy','option4' => 'zero kinetic energy','correct_ans' => "b"),
            array('subject_id'=>3,'question'=> 'In case of filament lamp at higher voltages, resistance of lamp', 'option1' => 'decreases','option2' => 'increases','option3' => 'remains constant','option4' => 'varies depending on the filament','correct_ans' => "b"),
            array('subject_id'=>3,'question'=> 'Supply of energy depends upon', 'option1' => 'mass of material','option2' => 'the change in temperature','option3' => 'the material itself','option4' => 'all of above','correct_ans' => "d"),
            array('subject_id'=>3,'question'=> ' If frequency of modulated wave is less than frequency of carrier wave, then input signal is', 'option1' => 'negative','option2' => 'positive','option3' => 'zero','option4' => 'all of above','correct_ans' => "a"),
            array('subject_id'=>3,'question'=> 'Average power of all activities of our body is', 'option1' => '111 W','option2' => '113 W','option3' => '116 W','option4' => '120 W','correct_ans' => "c"),
            array('subject_id'=>3,'question'=> 'Kinetic friction is always', 'option1' => 'lesser than static friction','option2' => 'greater than static friction','option3' => 'equal to static friction','option4' => 'equal to contact force','correct_ans' => "a"),
            array('subject_id'=>3,'question'=> 'Gravitational potential is always', 'option1' => 'positive','option2' => 'negative','option3' => 'zero','option4' => 'infinity','correct_ans' => "b"),
            array('subject_id'=>3,'question'=> 'Displacement-time graph depicting an oscillatory motion is', 'option1' => 'cos curve','option2' => 'sine curve','option3' => 'sine curve','option4' => 'straight line','correct_ans' => "c"),
            array('subject_id'=>3,'question'=> 'Rate of flow of electric charge is', 'option1' => 'electric current','option2' => 'conventional current only','option3' => 'electronic current only','option4' => 'potential difference','correct_ans' => "a"),
         );     
         Question::insert($physics);   
         // End of Physics Question
   
    }
}
