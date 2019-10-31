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
    	$soft=Subject::where('name','software')->first();
        $net=Subject::where('name','networking')->first();
        $elec=Subject::where('name','Electronics')->first();
        DB::table('questions')->insert([
        	['subject_id'=>$soft->id,'question'=>'From the following which quality deals with maintaining the quality of the software product?','option1'=>'Quality assurance','option2'=>'Quality control','option3'=>'Quality efficiency','option4'=>'None of the above','given_ans'=>'Quality control','correct_ans'=>'Quality control'],
        	['subject_id'=>$soft->id,'question'=>'Function-oriented design is comprised of many smaller sub-systems is known as, Functions','option1'=>'Yes','option2'=>'No','option3'=>'','option4'=>'','given_ans'=>'Yes','correct_ans'=>'No'],
        	['subject_id'=>$soft->id,'question'=>'Software project manager is engaged with software management activities. He is responsible for ______ .','option1'=>'Project planning','option2'=>'Monitoring the progress','option3'=>'Communication among stakeholders','option4'=>'All mentioned above','given_ans'=>'All mentioned above','correct_ans'=>'All mentioned above'],
        	['subject_id'=>$soft->id,'question'=>'Software is not considered to be collection of executable programming code, associated libraries and documentations.','option1'=>'True','option2'=>'False','option3'=>'','option4'=>'','given_ans'=>'True','correct_ans'=>'True'],
        	['subject_id'=>$soft->id,'question'=>'CASE tools cannot be grouped together if they have similar functionality, process activities and capability of getting integrated with other tools..','option1'=>'True','option2'=>'False','option3'=>'','option4'=>'','given_ans'=>'True','correct_ans'=>'False'],

        ]);
        DB::table('questions')->insert([
        	['subject_id'=>$net->id,'question'=>'Communication between a computer and a keyboard involves ______________ transmission','option1'=>'Automatic','option2'=>'Half-duplex','option3'=>'Full-duplex','option4'=>'Simplex','given_ans'=>'Simplex','correct_ans'=>'Simplex'],
        	['subject_id'=>$net->id,'question'=>'The _______ is the physical path over which a message travels','option1'=>'Path','option2'=>'Medium','option3'=>'Protocol','option4'=>'Route','given_ans'=>'Path','correct_ans'=>'Medium'],
        	['subject_id'=>$net->id,'question'=>' A set of rules that governs data communication','option1'=>'Protocol','option2'=>'Standards','option3'=>'RFCs','option4'=>'None of the mentioned','given_ans'=>'Protocol','correct_ans'=>'Protocol'],
        	['subject_id'=>$net->id,'question'=>'The data link layer takes the packets from _________ and encapsulates them into frames for transmission.','option1'=>'network layer','option2'=>'physical layer','option3'=>'transport layer','option4'=>' application layer','given_ans'=>'network layer','correct_ans'=>'network layer'],
        	['subject_id'=>$net->id,'question'=>'The network layer concerns with','option1'=>'bits','option2'=>'frames','option3'=>'packets','option4'=>'None of the mentioned','given_ans'=>'True','correct_ans'=>'False'],

        ]);
        DB::table('questions')->insert([
        	['subject_id'=>$elec->id,'question'=>'The typical value of SCR for modern alternator is','option1'=>'1.0','option2'=>'1.2','option3'=>'1.5','option4'=>'0.5','given_ans'=>'0.5','correct_ans'=>'0.5'],
        	['subject_id'=>$elec->id,'question'=>'A single phase full bridge inverter can operated in load commutation mode in case load consist of','option1'=>'RL','option2'=>'RLC underdamped','option3'=>'RLC overdamped','option4'=>'RLC critically damped.','given_ans'=>'RLC underdamped.','correct_ans'=>'RL'],
        	['subject_id'=>$elec->id,'question'=>'A step up chopper has input voltage 110 V and output voltage 150 V. The value of duty cycle is','option1'=>'0.32','option2'=>'0.27','option3'=>'0.45','option4'=>'0.67','given_ans'=>'0.67','correct_ans'=>'0.67'],
        	['subject_id'=>$elec->id,'question'=>'Which statement is true for latching current ?.','option1'=>'It is related to turn off process of the device.','option2'=>'It is related to conduction process of device.','option3'=>'It is related to turn on process of the device','option4'=>'Both A and B','given_ans'=>'It is related to turn on process of the device','correct_ans'=>'It is related to turn on process of the device'],
        	['subject_id'=>$elec->id,'question'=>'If holding current of a thyristor is 2 mA then latching current should be','option1'=>'0.01A','option2'=>'0.002A','option3'=>'0.009A','option4'=>'0.004A','given_ans'=>'0.004A','correct_ans'=>'0.004A'],
        ]);
        
    }
}
