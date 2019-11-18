<?php

use Illuminate\Database\Seeder;
use App\Question;
class BiologySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $biology = array(
            array('subject_id'=>11,'question'=> 'Cells are not tightly packed in', 'option1' => 'Epidermis layer','option2' => 'Mesophyll layer','option3' => 'Endodermis','option4' => 'Stomatal pores','correct_ans' =>"b"),
            array('subject_id'=>11,'question'=> 'Regulators of plants growth are produced in', 'option1' => 'Glands','option2' => 'Receptors','option3' => 'Effectors','option4' => 'phytohormones','correct_ans' => "d"),
            array('subject_id'=>11,'question'=> "Food reserves in an aleuronic layer are converted to carbohydrates for seed growth. What's first thing aleuronic gets converted into?", 'option1' => 'Amylase','option2' => 'Starch','option3' => 'Maltose','option4' => 'Glucose','correct_ans' => "d"),
            array('subject_id'=>11,'question'=> "In amylose chain, glucose molecules are linked through", 'option1' => '1→3 bond','option2' => '1→4 bond','option3' => '2→2 bond','option4' => '2→4 bond','correct_ans' => 'b'),
            array('subject_id'=>11,'question'=> 'Tuberculosis (TB) is an example of', 'option1' => 'Pandemic','option2' => 'Prodemic','option3' => 'Endemic','option4' => 'Epidemic','correct_ans' => 'c'),
            array('subject_id'=>11,'question'=> 'Mutated gene that causes cancer is particularly termed as', 'option1' => 'Cancer gene','option2' => 'Mutated gene','option3' => 'Oncogene','option4' => 'Polymeric Genes','correct_ans' => "c"),
            array('subject_id'=>11,'question'=> 'Thickest part in three layers of arteries, is', 'option1' => 'Tunica intima','option2' => 'Tunica externa','option3' => 'Tunica media','option4' => 'All the above','correct_ans' => "c"),
            array('subject_id'=>11,'question'=> 'Any cancer-causing agent is termed as', 'option1' => 'Infectious Agents','option2' => 'Carcinogen','option3' => 'Mutation','option4' => 'Causative Agent','correct_ans' => "b"),
            array('subject_id'=>11,'question'=> '85% of filtrate is reabsorbed in', 'option1' => 'Glomerulus','option2' => "Bowman's capsule",'option3' => 'Renal capsule','option4' =>"Proximal/1st convoluted tubule",'correct_ans' => "a"),
            array('subject_id'=>11,'question'=> 'Large protein molecules are prevented to get through the', 'option1' => "Endothelium of the Bowman's capsule",'option2' => 'Basement membrane','option3' => 'Epithelial cells','option4' => 'Podocytes','correct_ans' => "b"),
            array('subject_id'=>11,'question'=> 'Seed germination in plants is controlled through', 'option1' => 'Gibberellins','option2' => 'Auxins','option3' => 'Abscisic acid','option4' => 'All of above','correct_ans' => "b"),
            array('subject_id'=>11,'question'=> 'In tuberculosis, bacteria usually attack', 'option1' => 'Skin','option2' => 'Lungs','option3' => 'Heart','option4' => 'Limbs','correct_ans' => "b"),
            array('subject_id'=>11,'question'=> 'All are correct for seeds shedding from parent plant, except', 'option1' => 'it can grow right away','option2' => 'it is in a state of dormancy','option3' => 'it has little water content','option4' => 'it is metabolically inactive.','correct_ans' => "a"),
            array('subject_id'=>11,'question'=> 'Small particles in depths of lungs cause', 'option1' => 'Influenza','option2' => 'Pneumonia','option3' => 'Asthma','option4' => 'All of above','correct_ans' => "d"),
            array('subject_id'=>11,'question'=> 'General formula for carbohydrate is', 'option1' => 'Cm (H2O)>sub>2','option2' => 'H2O','option3' => 'H2SO4','option4' => 'HCl','correct_ans' => "a"),
            array('subject_id'=>11,'question'=> 'Typical amount of urea excreted by adult, per day is', 'option1' => '21 grams','option2' => '20 grams','option3' => '25 grams','option4' => '23 grams','correct_ans' => "c"),
            array('subject_id'=>11,'question'=> 'Rate of transpiration increases if', 'option1' => 'It is windy','option2' => 'If temperature is low','option3' => 'It is night time','option4' => 'Pressure is high','correct_ans' => "a"),
            array('subject_id'=>11,'question'=> 'Plant transport system does not transport', 'option1' => 'CO2','option2' => 'Organic salts','option3' => 'Water','option4' => 'Plant hormones','correct_ans' => "a"),
            array('subject_id'=>11,'question'=> 'Which option is incorrect? Rate of transpiration is', 'option1' => 'Maximum during the night','option2' => 'Zero at night','option3' => 'Proportional to the active transport of water through root hairs','option4' => 'Depends upon the thickness of the cuticle','correct_ans' => "a"),
            array('subject_id'=>11,'question'=> 'COPD stands for', 'option1' => 'Cuticular Obstetric Pelvic Disease','option2' => 'Critical Obstructive Pituarity Disorder','option3' => 'Chronic Obstructive Pulmonary Disease','option4' => 'Chronic Obesity Personal Decision','correct_ans' => "c"),
            array('subject_id'=>11,'question'=> 'All arteries carry blood away from heart, except', 'option1' => 'Pulmonary artery','option2' => 'Pulmonary vein','option3' => 'Aorta','option4' => 'capillaries','correct_ans' => "a"),
            array('subject_id'=>11,'question'=> 'Plant hormone that respond to environmental stress and dormancy is called', 'option1' => 'Gibberellins','option2' => 'Auxins','option3' => 'Abscisic acid','option4' => 'Cytokines','correct_ans' => "c"),
            array('subject_id'=>11,'question'=> 'From soil, inorganic ions can be loaded in root hair through', 'option1' => 'Diffusion','option2' => 'Active Transport','option3' => 'Partial osmosis','option4' => 'Differential osmosis','correct_ans' => "b"),
            array('subject_id'=>11,'question'=> "Vancomycin is", 'option1' => 'An infectious disease','option2' => 'Is a virus','option3' => 'Is an antibiotic','option4' => 'Is an antiviral','correct_ans' => "c"),
            array('subject_id'=>11,'question'=> " Alternative name for abscisic acid is", 'option1' => 'Growth hormone','option2' => 'Functional hormone','option3' => 'Stress hormone','option4' => 'Inactive hormone','correct_ans' => "c"),
            array('subject_id'=>11,'question'=> 'Cells may be burst if', 'option1' => 'Water potential decreases','option2' => 'Water potential increases','option3' => 'Excess antibiotics are given','option4' => 'Attacked by pathogens','correct_ans' => "b"),
            array('subject_id'=>11,'question'=> "Finger-like projections with gaps are called as", 'option1' => 'Glomerulus','option2' => 'Podocytes','option3' => "Pathogens",'option4' => 'Vancomycin','correct_ans' => "b"),
            array('subject_id'=>11,'question'=> 'Cardiovascular system is damaged by', 'option1' => 'CO','option2' => 'Nicotine','option3' => 'Oxygen','option4' => 'Both A and B','correct_ans' => "d"),
            array('subject_id'=>11,'question'=> 'Changes in parameter are being regulated and detected through', 'option1' => 'Negative feedback','option2' => 'Positive feedback','option3' => 'Receptor','option4' => 'Effector','correct_ans' => "c"),
            array('subject_id'=>11,'question'=> ' Loss of water from leaves', 'option1' => 'Cause transpiration to occur','option2' => 'Triggers the water potential gradient from the soil','option3' => 'Mediate the photosynthesis','option4' => 'Both A and B','correct_ans' => "d"),
            array('subject_id'=>11,'question'=> 'Annual worldwide incidence of cholera is', 'option1' => '1 -2 million','option2' => '1 -3 million','option3' => '1 -5 million','option4' => '3 -5 million','correct_ans' => "d"),
            array('subject_id'=>11,'question'=> 'Tumor that spread throughout body and damaged invaded tissues is named as', 'option1' => 'Malignant tumors','option2' => 'Benign tumors','option3' => 'Carcinogenic','option4' => 'Fibromas Tumor','correct_ans' => "a"),
            array('subject_id'=>11,'question'=> 'Polio is known as humans haunt after eradication of', 'option1' => 'Tuberculosis','option2' => 'Measles','option3' => 'Chickenpox','option4' => 'Smallpox','correct_ans' => "d"),
            array('subject_id'=>11,'question'=> 'Structure of enzyme is', 'option1' => '2 dimensional coiled strands','option2' => '3 dimensional coiled strands','option3' => 'Long unbranched chains','option4' => 'Short branched chains','correct_ans' => "b"),
            array('subject_id'=>11,'question'=> 'Joining of two monosaccharides take place by process of', 'option1' => 'Glyosidic bond','option2' => 'Condensation','option3' => 'Oxidation','option4' => 'Cellular respiration','correct_ans' => "b"),
            array('subject_id'=>11,'question'=> 'Second stage in urine making involves', 'option1' => 'Ultra-absorption','option2' => 'Ultra-filtration','option3' => 'Egestion','option4' => 'Selective reabsorption','correct_ans' => "a"),
            array('subject_id'=>11,'question'=> 'Pulmonary circulation does not involve', 'option1' => 'Vena cava','option2' => 'Pulmonary arteries','option3' => 'Pulmonary veins','option4' => 'Aorta','correct_ans' => "a"),
            array('subject_id'=>11,'question'=> 'Bulk uptake of liquid is an example of', 'option1' => 'Phagocytosis','option2' => 'Pinocytosis','option3' => 'Exocytosis','option4' => 'Endocytosis','correct_ans' => "b"),
            array('subject_id'=>11,'question'=> 'Cancerous cells', 'option1' => 'Do not die early','option2' => "Are not destroyed by the body's immune system",'option3' => 'It is passed to descendant cells','option4' => 'All of above','correct_ans' => "d"),
            array('subject_id'=>11,'question'=> 'Each DNA molecule in a nucleus makes an identical copy of itself', 'option1' => 'During Synthesis phase of interphase','option2' => 'During formation of autosomes','option3' => 'During formation of sex chromosomes','option4' => 'During mitosis','correct_ans' => "a"),
            array('subject_id'=>11,'question'=> "Oral rehydration therapy largely consists of water and", 'option1' => 'Sodium ions','option2' => 'Glucose','option3' => 'Potassium magnate solution','option4' => 'Salts','correct_ans' => "b"),
            array('subject_id'=>11,'question'=> 'Reabsorption of useful molecules or ions in kidneys occur through', 'option1' => "Diffusion",'option2' => 'Active Transport','option3' => 'Partial osmosis','option4' => 'Differential osmosis','correct_ans' => "b"),
            array('subject_id'=>11,'question'=> 'Hydrophilic R group is found in the', 'option1' => 'Enzyme','option2' => 'Hormones','option3' => 'Glands','option4' => 'Maltose','correct_ans' => "a"),
            array('subject_id'=>11,'question'=> 'Hydrophilic R group is found in the', 'option1' => 'Enzyme','option2' => 'Hormones','option3' => 'Glands','option4' => 'Maltose','correct_ans' => "a"),
            array('subject_id'=>11,'question'=> 'Water potential is raised by', 'option1' => 'Presence of solutes','option2' => 'High pressures','option3' => 'Low pressure','option4' => 'None of above','correct_ans' => "b"),
            array('subject_id'=>11,'question'=> 'Simplest sugars are also called', 'option1' => 'Disaccharides','option2' => 'Monosaccharides','option3' => 'Polysaccharides','option4' => 'Oligosaccharides','correct_ans' => "b"),
            array('subject_id'=>11,'question'=> 'Which statement is incorrect? Effective antibiotics', 'option1' => 'Show selective toxicity','option2' => 'kill the host cell','option3' => 'Are useless against virus','option4' => 'Are useless against virus','correct_ans' => "b"),
            array('subject_id'=>11,'question'=> 'In pea plant, synthesis of GA1 is done through', 'option1' => 'Le allele','option2' => 'le allele','option3' => 'LE allele','option4' => 'lE allele','correct_ans' => "a"),
            array('subject_id'=>11,'question'=> 'Childhood blindness can be caused due to', 'option1' => 'Acquired Immune Deficiency Syndrome (HIV/AIDS)','option2' => 'Malaria','option3' => 'Measles','option4' => 'Tuberculosis','correct_ans' => "c"),
            array('subject_id'=>11,'question'=> 'A pentose, nitrogen and phosphate are combined to form', 'option1' => 'Peptide bond','option2' => 'Nucleotide','option3' => 'Nucleoside','option4' => 'Lipid','correct_ans' => "b"),
            array('subject_id'=>11,'question'=> 'An Auxin is produced in', 'option1' => 'Growing root tips','option2' => 'Growing shoot tips','option3' => 'Old roots','option4' => 'Both A and B','correct_ans' => "d"),
            array('subject_id'=>11,'question'=> ' Combination of glucose and fructose results in', 'option1' => 'Sucrose','option2' => 'Galactose','option3' => 'Fructose','option4' => 'Maltose','correct_ans' => "a"),
            array('subject_id'=>11,'question'=> 'Blood Plasma and glomerular filtrate are different in concentrations of,', 'option1' => 'Uric acid' => 'Proteins','option3' => 'Creatinine','option4' => 'Urea','correct_ans' => "b"),
         );     
         Question::insert($biology);
    }
}
