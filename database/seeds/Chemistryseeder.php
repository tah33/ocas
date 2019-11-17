<?php

use Illuminate\Database\Seeder;
use App\Question;
class Chemistryseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $chemistry = array(
            array('subject_id'=>2,'question'=> 'Bond created by overlapping of one modified orbit on another orbit is known as', 'option1' => 'Sigma bond (σ-bond)','option2' => 'Pi bond (π-bond)','option3' => 'Covalent bond','option4' => 'Dative bond','correct_ans' =>"a"),
            array('subject_id'=>2,'question'=> "Only one 'benzene ring' is present in compounds of", 'option1' => 'aryl','option2' => 'acryl','option3' => 'carboxylic','option4' => 'ketone','correct_ans' => "a"),
            array('subject_id'=>2,'question'=> ' Elements which are good catalysts and have ability to change their oxidation number are', 'option1' => 'transition elements','option2' => 'Nobel gases','option3' => 'alkalis','option4' => 'all of them','correct_ans' => "a"),
            array('subject_id'=>2,'question'=> "Salting' is last stage in manufacturing of", 'option1' => 'plastic','option2' => 'soap','option3' => 'detergent','option4' => 'all of them','correct_ans' => 'b'),
            array('subject_id'=>2,'question'=> 'When heated, metal that results in change of state to gas is', 'option1' => 'Si(s)','option2' => 'Al(s)','option3' => 'S(s)','option4' => 'P(s)','correct_ans' => 'c'),
            array('subject_id'=>2,'question'=> 'Metal that reacts quickly with Cl2 is', 'option1' => 'Si(s)','option2' => 'P(s)','option3' => 'Ar(g)','option4' => 'Mg(s)','correct_ans' => "d"),
            array('subject_id'=>2,'question'=> ' PH of buffer solution depends upon concentration of', 'option1' => 'acid (H+-)','option2' => 'conjugate base (-OH-)','option3' => 'salt','option4' => 'both A and B','correct_ans' => "d"),
            array('subject_id'=>2,'question'=> 'As metallic radii increases in Group II, density', 'option1' => 'increases','option2' => 'decreases','option3' => 'remains the same','option4' => 'depends upon the elements it reacts with','correct_ans' => "a"),
            array('subject_id'=>2,'question'=> ' An Oxidation number can be', 'option1' => 'positive','option2' => 'negative','option3' => 'zero','option4' => 'All of Above','correct_ans' => "d"),
            array('subject_id'=>2,'question'=> 'Another product of reaction SiO2(s) + NaOH(l) → Na2SiO3aq... would be', 'option1' => 'HO3+','option2' => 'OH-','option3' => 'H2O(l)','option4' => 'H2(g)','correct_ans' => "c"),
            array('subject_id'=>2,'question'=> 'In periodic table, element in a second row of transition elements beneath titanium is', 'option1' => 'Zinc (Zn)','option2' => 'Zirconium (Zr)','option3' => 'Scandium (Sc)','option4' => 'Copper (Cu)','correct_ans' => "c"),
            array('subject_id'=>2,'question'=> 'Atomic radius of nickel is', 'option1' => '0.115/nm','option2' => '0.105/nm','option3' => '0.117/nm','option4' => '0.132/nm','correct_ans' => "a"),
            array('subject_id'=>2,'question'=> 'Carbon monoxide is a gas which is', 'option1' => 'colorless','option2' => 'odorless','option3' => 'tasteless','option4' => 'all of them','correct_ans' => "d"),
            array('subject_id'=>2,'question'=> 'Condition of Mg in which it reacts violently with water, is', 'option1' => 'Mg(s) while cold','option2' => 'Mg(s) when heated','option3' => 'Mg(s) at normal temperature','option4' => 'both A and B','correct_ans' => "b"),
            array('subject_id'=>2,'question'=> 'Smallest particle of an element which can take part in any chemical change is know as a/an', 'option1' => 'nucleus','option2' => 'atom','option3' => 'proton','option4' => 'neutron','correct_ans' => "b"),
            array('subject_id'=>2,'question'=> 'Halogen alkanes are naturally found and are', 'option1' => 'abundant','option2' => 'rare','option3' => '','option4' => 'plenty','correct_ans' => "b"),
            array('subject_id'=>2,'question'=> 'Presence of electrons is shown by three dimensional shape of orbit with', 'option1' => 'high probability','option2' => 'low probability','option3' => 'no probability','option4' => 'slow ratio','correct_ans' => "a"),
            array('subject_id'=>2,'question'=> ' Number of times a p+ is heavier than an e- is', 'option1' => '18 times','option2' => '200 times','option3' => '184 times','option4' => '1840 times','correct_ans' => "d"),
            array('subject_id'=>2,'question'=> 'Carminic acid gives purple color with', 'option1' => 'acids (H+-)','option2' => 'alkalis (-OH-)','option3' => 'weak acids (H+-)','option4' => 'all of them','correct_ans' => "b"),
            array('subject_id'=>2,'question'=> 'Nylon is a/an', 'option1' => 'amides','option2' => 'peptides','option3' => 'polyamides','option4' => 'polyesters','correct_ans' => "c"),
            array('subject_id'=>2,'question'=> 'Lysine and arginine are left behind in peptides bonds and are known as', 'option1' => 'amylase','option2' => 'trypsin','option3' => 'urease','option4' => 'lactase','correct_ans' => "c"),
            array('subject_id'=>2,'question'=> 'Number of dative bonds to central metal ion is its', 'option1' => 'oxidation number','option2' => 'compound number','option3' => 'co-ordination number','option4' => 'dative number','correct_ans' => "c"),
            array('subject_id'=>2,'question'=> 'Due to presence of double bonds, alkenes are', 'option1' => 'unsaturated','option2' => 'saturated','option3' => 'polar','option4' => 'non-polar','correct_ans' => "a"),
            array('subject_id'=>2,'question'=> "PH can be kept constant with help of", 'option1' => 'saturated solution','option2' => 'unsaturated solution','option3' => 'buffer solution','option4' => 'super saturated solution','correct_ans' => "c"),
            array('subject_id'=>2,'question'=> "Benefits of using small cells could be", 'option1' => 'lightweight','option2' => 'high voltage','option3' => 'constant voltage','option4' => 'all of them','correct_ans' => "d"),
            array('subject_id'=>2,'question'=> 'Natural gas and steam react together in Haber?s process to form', 'option1' => 'oxygen','option2' => 'nitrogen','option3' => 'carbon dioxide','option4' => 'hydrogen','correct_ans' => "d"),
            array('subject_id'=>2,'question'=> "Metals are more reactive with oxygen", 'option1' => 'across the periodic table','option2' => 'across the Period 2','option3' => "down the Group-II",'option4' => 'up the Group-II','correct_ans' => "c"),
            array('subject_id'=>2,'question'=> ' Equilibrium reactions are found in large scale in production of', 'option1' => 'ammonia','option2' => 'sulfuric acid','option3' => 'lactic acid','option4' => 'both A and B','correct_ans' => "d"),
            array('subject_id'=>2,'question'=> 'Main product of calcium carbonate is', 'option1' => 'lime','option2' => 'carbonates','option3' => 'calcium','option4' => 'limestone','correct_ans' => "d"),
            array('subject_id'=>2,'question'=> 'On hydration, [Al(H2O)6]3+ (aq) produces', 'option1' => 'H+ and [Al(H2O)5]2+(aq)','option2' => 'H2(g) and [Al(H2O)4]2+(aq)','option3' => 'H2(g) and [Al(H2O)3]+(aq)','option4' => 'All of Above','correct_ans' => "a"),
            array('subject_id'=>2,'question'=> 'During a chemical reaction, atoms can not be', 'option1' => 'created','option2' => 'destroyed','option3' => 'converted','option4' => 'both A and B','correct_ans' => "d"),
            array('subject_id'=>2,'question'=> 'In an unsaturated solution, concentration of each ion of sparingly soluble salt at 298k, tells us the', 'option1' => 'solubility product','option2' => 'solubility reactant','option3' => 'dynamic equilibrium','option4' => 'solubility equilibrium','correct_ans' => "a"),
            array('subject_id'=>2,'question'=> 'Percentage of sample of HBr decomposes at 430°C. is', 'option1' => '20%','option2' => '10%','option3' => '22%','option4' => '11%','correct_ans' => "b"),
            array('subject_id'=>2,'question'=> 'Real gases do not react as expected', 'option1' => 'ideal gas','option2' => 'noble gas','option3' => 'non-ideal gas','option4' => 'inert gas','correct_ans' => "a"),
            array('subject_id'=>2,'question'=> 'MgCO3 decomposes when heating with which of following?', 'option1' => 'CO','option2' => 'CO2','option3' => 'H2CO3','option4' => 'CO3-2','correct_ans' => "b"),
            array('subject_id'=>2,'question'=> ' Amino acids react to form peptides and proteins, this process is known as', 'option1' => 'addition polymerization','option2' => 'substitution polymerization','option3' => 'condensation polymerization','option4' => 'hydration polymerization','correct_ans' => "c"),
            array('subject_id'=>2,'question'=> 'Amines which are bonded in Alkyl group are', 'option1' => 'primary amines','option2' => 'secondary amines','option3' => 'tertiary amines','option4' => 'quaternary amines','correct_ans' => "a"),
            array('subject_id'=>2,'question'=> 'Sulfuric acid is manufactured with help of', 'option1' => 'Haber process','option2' => 'Contact process','option3' => 'Complex reaction','option4' => 'Redox reaction','correct_ans' => "b"),
            array('subject_id'=>2,'question'=> 'Length of line joining two points (1, 2) and (4, 8) is:', 'option1' => '3','option2' => '9','option3' => '?45','option4' => '45','correct_ans' => "c"),
            array('subject_id'=>2,'question'=> 'ystem of reaction in which no reactant leaves reaction mixture, is termed as', 'option1' => 'open system','option2' => 'closed system','option3' => 'semi-open system','option4' => 'partially closed system','correct_ans' => "b"),
            array('subject_id'=>2,'question'=> "Friedrich August Kekule's structure of 'benzene' was inspiration of a", 'option1' => 'chemist','option2' => 'nature','option3' => 'dream','option4' => 'cloud','correct_ans' => "c"),
            array('subject_id'=>2,'question'=> 'Distribution of energy with respect to temperature was given in', 'option1' => "Boltzmann distribution",'option2' => 'Boltzmann energy','option3' => 'Boltzmann temperature distribution','option4' => 'Boltzmann pressure','correct_ans' => "a"),
            array('subject_id'=>2,'question'=> 'Molecular structure of SF6 is', 'option1' => 'linear','option2' => 'tetrahedral','option3' => 'hexagonal','option4' => 'octahedral','correct_ans' => "d"),
            array('subject_id'=>2,'question'=> 'On description of proton, new classification of acid and base was given by', 'option1' => 'J.bronsted','option2' => 'T.lowry','option3' => 'J.Dalton','option4' => 'both A and B','correct_ans' => "d"),
            array('subject_id'=>2,'question'=> 'Depleting of CFCs caused a serious environmental hazard i.e.', 'option1' => 'ozone layer','option2' => 'UV rays','option3' => 'stratosphere','option4' => 'exosphere','correct_ans' => "a"),
            array('subject_id'=>2,'question'=> 'In Redox reactions, electrons may be', 'option1' => 'gained','option2' => 'lost','option3' => 'shared','option4' => 'both A and B','correct_ans' => "d"),
            array('subject_id'=>2,'question'=> 'In Al2Cl6, number of electron pairs donated by each Chloride ion are', 'option1' => '1','option2' => '2','option3' => '3','option4' => '4','correct_ans' => "b"),
            array('subject_id'=>2,'question'=> 'In most of organic compounds, group found is', 'option1' => 'benzene ring','option2' => 'aldehydes','option3' => 'ketone','option4' => 'carboxylic','correct_ans' => "a"),
            array('subject_id'=>2,'question'=> 'Force of attraction and repulsion in gaseous molecule is', 'option1' => 'present','option2' => 'absent','option3' => 'slight','option4' => 'huge','correct_ans' => "b"),
            array('subject_id'=>2,'question'=> ' Scrubbers are composed of', 'option1' => 'calcium hydroxide','option2' => 'calcium carbonate','option3' => 'both A and B','option4' => 'calcium hydroxide','correct_ans' => "c"),
            array('subject_id'=>2,'question'=> ' Diamond form of Carbon do not conduct electricity due to absence of', 'option1' => 'spectators electrons','option2' => 'delocalized electrons','option3' => 'free electrons','option4' => 'ions','correct_ans' => "b"),
            array('subject_id'=>2,'question'=> 'Chemical elements are represented by Greek or Latin', 'option1' => 'alphabets','option2' => 'symbols','option3' => 'gods','option4' => 'illusions','correct_ans' => "b"),
            array('subject_id'=>2,'question'=> 'In process of oxidation, 20% of iron and steel is destroyed because of,', 'option1' => 'rusting' => 'molting','option3' => 'global warming','option4' => 'All of Above','correct_ans' => "a"),
         );     
         Question::insert($chemistry);
    }
}
