-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 12, 2019 at 02:01 PM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ocas`
--

-- --------------------------------------------------------

--
-- Table structure for table `activities`
--

CREATE TABLE `activities` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `student_id` bigint(20) UNSIGNED DEFAULT NULL,
  `login_time` time NOT NULL,
  `logout_time` time DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `activities`
--

INSERT INTO `activities` (`id`, `student_id`, `login_time`, `logout_time`, `created_at`, `updated_at`) VALUES
(1, 1, '15:55:45', '15:55:54', '2019-12-12 03:55:45', '2019-12-12 03:55:54'),
(2, 1, '15:56:20', '16:02:46', '2019-12-12 03:56:20', '2019-12-12 04:02:46'),
(3, 1, '16:37:40', '18:21:05', '2019-12-12 04:37:40', '2019-12-12 06:21:05'),
(4, 1, '18:26:53', '18:40:58', '2019-12-12 06:26:53', '2019-12-12 06:40:58');

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `username`, `password`, `created_at`, `updated_at`) VALUES
(1, 'Tanvir', 'tahmedhera@gmail.com', 'tanvir', '$2y$10$UTOB./wfI9p4fJr.6WYQbOPfd7oMNlJuU84oSaSd5O00MufhPP2Hy', '2019-12-08 10:11:28', '2019-12-08 10:11:28');

-- --------------------------------------------------------

--
-- Table structure for table `commons`
--

CREATE TABLE `commons` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `subject_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `commons`
--

INSERT INTO `commons` (`id`, `subject_id`, `created_at`, `updated_at`) VALUES
(1, 1, '2019-12-11 23:25:44', '2019-12-11 23:25:44'),
(2, 5, '2019-12-11 23:25:44', '2019-12-11 23:25:44');

-- --------------------------------------------------------

--
-- Table structure for table `departments`
--

CREATE TABLE `departments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `minimum` int(11) NOT NULL,
  `logo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subject_id` bigint(20) UNSIGNED DEFAULT NULL,
  `range` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `departments`
--

INSERT INTO `departments` (`id`, `slug`, `name`, `minimum`, `logo`, `subject_id`, `range`, `created_at`, `updated_at`) VALUES
(1, 'BBA', 'Bachelor of Business Administration', 50, 'BBA.jpg', 10, 60, NULL, '2019-12-11 23:19:55'),
(2, 'CSE', 'Bachelor of Computer Science and Engineering', 60, 'CSE.jpg', 4, 60, NULL, '2019-12-11 23:20:19'),
(3, 'SCE', 'Bachelor of Science in Civil Engineering', 60, 'SCE.jpg', 1, 70, NULL, '2019-12-11 23:20:33'),
(4, 'SME', 'Bachelor of Science in Mechanical Engineering', 60, 'SME.jpg', 3, 60, NULL, '2019-12-11 23:20:58'),
(5, 'EEE', 'Bachelor of Electrical & Electronics Engineering', 60, 'EEE.jpg', 3, 70, NULL, '2019-12-11 23:21:12'),
(6, 'BSN', 'Bachelor of Science in Nursing', 40, 'BSN.jpg', 11, 60, NULL, '2019-12-11 23:21:22'),
(7, 'BATHM', 'Bachelor of Arts in Tourism and Hospitality Management', 40, 'BATHM.jpg', 5, 80, NULL, '2019-12-11 23:22:10'),
(8, 'BAG', 'Bachelor of Science in Agriculture', 45, 'BAG.png', 13, 70, NULL, '2019-12-11 23:22:33'),
(9, 'BAE', 'Bachelor of Arts in Economics', 40, 'BAE.png', 14, 80, NULL, '2019-12-11 23:22:49');

-- --------------------------------------------------------

--
-- Table structure for table `department_student`
--

CREATE TABLE `department_student` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `student_id` bigint(20) UNSIGNED NOT NULL,
  `department_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `department_student`
--

INSERT INTO `department_student` (`id`, `student_id`, `department_id`, `created_at`, `updated_at`) VALUES
(1, 1, 2, NULL, NULL),
(2, 1, 3, NULL, NULL),
(3, 1, 6, NULL, NULL),
(4, 1, 7, NULL, NULL),
(5, 1, 8, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `exams`
--

CREATE TABLE `exams` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `major` int(11) NOT NULL,
  `common` int(11) NOT NULL,
  `time` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `exams`
--

INSERT INTO `exams` (`id`, `major`, `common`, `time`, `created_at`, `updated_at`) VALUES
(1, 100, 40, 140, '2019-12-12 03:30:06', '2019-12-12 03:30:19');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_100000_create_password_resets_table', 1),
(2, '2019_10_23_115023_create_admins_table', 1),
(3, '2019_10_23_115044_create_subjects_table', 1),
(4, '2019_10_23_115213_create_departments_table', 1),
(5, '2019_10_23_115706_create_students_table', 1),
(6, '2019_10_23_120322_create_questions_table', 1),
(7, '2019_10_23_121530_create_tests_table', 1),
(9, '2019_11_01_085006_create_student_subject_table', 1),
(10, '2019_11_05_145819_create_department_student_table', 1),
(11, '2019_11_05_152350_create_verify_students_table', 1),
(12, '2019_11_26_182535_create_ranks_table', 1),
(13, '2019_11_30_160419_create_commons_table', 1),
(14, '2019_12_09_121128_create_exams_table', 2),
(15, '2019_10_23_121726_create_activities_table', 3);

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `subject_id` bigint(20) UNSIGNED DEFAULT NULL,
  `question` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `option1` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `option2` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `option3` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `option4` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `correct_ans` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`id`, `subject_id`, `question`, `option1`, `option2`, `option3`, `option4`, `correct_ans`, `created_at`, `updated_at`) VALUES
(1, 11, 'Cells are not tightly packed in', 'Epidermis layer', 'Mesophyll layer', 'Endodermis', 'Stomatal pores', 'b', NULL, NULL),
(2, 11, 'Regulators of plants growth are produced in', 'Glands', 'Receptors', 'Effectors', 'phytohormones', 'd', NULL, NULL),
(3, 11, 'Food reserves in an aleuronic layer are converted to carbohydrates for seed growth. What\'s first thing aleuronic gets converted into?', 'Amylase', 'Starch', 'Maltose', 'Glucose', 'd', NULL, NULL),
(4, 11, 'In amylose chain, glucose molecules are linked through', '1→3 bond', '1→4 bond', '2→2 bond', '2→4 bond', 'b', NULL, NULL),
(5, 11, 'Tuberculosis (TB) is an example of', 'Pandemic', 'Prodemic', 'Endemic', 'Epidemic', 'c', NULL, NULL),
(6, 11, 'Mutated gene that causes cancer is particularly termed as', 'Cancer gene', 'Mutated gene', 'Oncogene', 'Polymeric Genes', 'c', NULL, NULL),
(7, 11, 'Thickest part in three layers of arteries, is', 'Tunica intima', 'Tunica externa', 'Tunica media', 'All the above', 'c', NULL, NULL),
(8, 11, 'Any cancer-causing agent is termed as', 'Infectious Agents', 'Carcinogen', 'Mutation', 'Causative Agent', 'b', NULL, NULL),
(9, 11, '85% of filtrate is reabsorbed in', 'Glomerulus', 'Bowman\'s capsule', 'Renal capsule', 'Proximal/1st convoluted tubule', 'a', NULL, NULL),
(10, 11, 'Large protein molecules are prevented to get through the', 'Endothelium of the Bowman\'s capsule', 'Basement membrane', 'Epithelial cells', 'Podocytes', 'b', NULL, NULL),
(11, 11, 'Seed germination in plants is controlled through', 'Gibberellins', 'Auxins', 'Abscisic acid', 'All of above', 'b', NULL, NULL),
(12, 11, 'In tuberculosis, bacteria usually attack', 'Skin', 'Lungs', 'Heart', 'Limbs', 'b', NULL, NULL),
(13, 11, 'All are correct for seeds shedding from parent plant, except', 'it can grow right away', 'it is in a state of dormancy', 'it has little water content', 'it is metabolically inactive.', 'a', NULL, NULL),
(14, 11, 'Small particles in depths of lungs cause', 'Influenza', 'Pneumonia', 'Asthma', 'All of above', 'd', NULL, NULL),
(15, 11, 'General formula for carbohydrate is', 'Cm (H2O)>sub>2', 'H2O', 'H2SO4', 'HCl', 'a', NULL, NULL),
(16, 11, 'Typical amount of urea excreted by adult, per day is', '21 grams', '20 grams', '25 grams', '23 grams', 'c', NULL, NULL),
(17, 11, 'Rate of transpiration increases if', 'It is windy', 'If temperature is low', 'It is night time', 'Pressure is high', 'a', NULL, NULL),
(18, 11, 'Plant transport system does not transport', 'CO2', 'Organic salts', 'Water', 'Plant hormones', 'a', NULL, NULL),
(19, 11, 'Which option is incorrect? Rate of transpiration is', 'Maximum during the night', 'Zero at night', 'Proportional to the active transport of water through root hairs', 'Depends upon the thickness of the cuticle', 'a', NULL, NULL),
(20, 11, 'COPD stands for', 'Cuticular Obstetric Pelvic Disease', 'Critical Obstructive Pituarity Disorder', 'Chronic Obstructive Pulmonary Disease', 'Chronic Obesity Personal Decision', 'c', NULL, NULL),
(21, 11, 'All arteries carry blood away from heart, except', 'Pulmonary artery', 'Pulmonary vein', 'Aorta', 'capillaries', 'a', NULL, NULL),
(22, 11, 'Plant hormone that respond to environmental stress and dormancy is called', 'Gibberellins', 'Auxins', 'Abscisic acid', 'Cytokines', 'c', NULL, NULL),
(23, 11, 'From soil, inorganic ions can be loaded in root hair through', 'Diffusion', 'Active Transport', 'Partial osmosis', 'Differential osmosis', 'b', NULL, NULL),
(24, 11, 'Vancomycin is', 'An infectious disease', 'Is a virus', 'Is an antibiotic', 'Is an antiviral', 'c', NULL, NULL),
(25, 11, ' Alternative name for abscisic acid is', 'Growth hormone', 'Functional hormone', 'Stress hormone', 'Inactive hormone', 'c', NULL, NULL),
(26, 11, 'Cells may be burst if', 'Water potential decreases', 'Water potential increases', 'Excess antibiotics are given', 'Attacked by pathogens', 'b', NULL, NULL),
(27, 11, 'Finger-like projections with gaps are called as', 'Glomerulus', 'Podocytes', 'Pathogens', 'Vancomycin', 'b', NULL, NULL),
(28, 11, 'Cardiovascular system is damaged by', 'CO', 'Nicotine', 'Oxygen', 'Both A and B', 'd', NULL, NULL),
(29, 11, 'Changes in parameter are being regulated and detected through', 'Negative feedback', 'Positive feedback', 'Receptor', 'Effector', 'c', NULL, NULL),
(30, 11, ' Loss of water from leaves', 'Cause transpiration to occur', 'Triggers the water potential gradient from the soil', 'Mediate the photosynthesis', 'Both A and B', 'd', NULL, NULL),
(31, 11, 'Annual worldwide incidence of cholera is', '1 -2 million', '1 -3 million', '1 -5 million', '3 -5 million', 'd', NULL, NULL),
(32, 11, 'Tumor that spread throughout body and damaged invaded tissues is named as', 'Malignant tumors', 'Benign tumors', 'Carcinogenic', 'Fibromas Tumor', 'a', NULL, NULL),
(33, 11, 'Polio is known as humans haunt after eradication of', 'Tuberculosis', 'Measles', 'Chickenpox', 'Smallpox', 'd', NULL, NULL),
(34, 11, 'Structure of enzyme is', '2 dimensional coiled strands', '3 dimensional coiled strands', 'Long unbranched chains', 'Short branched chains', 'b', NULL, NULL),
(35, 11, 'Joining of two monosaccharides take place by process of', 'Glyosidic bond', 'Condensation', 'Oxidation', 'Cellular respiration', 'b', NULL, NULL),
(36, 11, 'Second stage in urine making involves', 'Ultra-absorption', 'Ultra-filtration', 'Egestion', 'Selective reabsorption', 'a', NULL, NULL),
(37, 11, 'Pulmonary circulation does not involve', 'Vena cava', 'Pulmonary arteries', 'Pulmonary veins', 'Aorta', 'a', NULL, NULL),
(38, 11, 'Bulk uptake of liquid is an example of', 'Phagocytosis', 'Pinocytosis', 'Exocytosis', 'Endocytosis', 'b', NULL, NULL),
(39, 11, 'Cancerous cells', 'Do not die early', 'Are not destroyed by the body\'s immune system', 'It is passed to descendant cells', 'All of above', 'd', NULL, NULL),
(40, 11, 'Each DNA molecule in a nucleus makes an identical copy of itself', 'During Synthesis phase of interphase', 'During formation of autosomes', 'During formation of sex chromosomes', 'During mitosis', 'a', NULL, NULL),
(41, 11, 'Oral rehydration therapy largely consists of water and', 'Sodium ions', 'Glucose', 'Potassium magnate solution', 'Salts', 'b', NULL, NULL),
(42, 11, 'Reabsorption of useful molecules or ions in kidneys occur through', 'Diffusion', 'Active Transport', 'Partial osmosis', 'Differential osmosis', 'b', NULL, NULL),
(43, 11, 'Hydrophilic R group is found in the', 'Enzyme', 'Hormones', 'Glands', 'Maltose', 'a', NULL, NULL),
(44, 11, 'Hydrophilic R group is found in the', 'Enzyme', 'Hormones', 'Glands', 'Maltose', 'a', NULL, NULL),
(45, 11, 'Water potential is raised by', 'Presence of solutes', 'High pressures', 'Low pressure', 'None of above', 'b', NULL, NULL),
(46, 11, 'Simplest sugars are also called', 'Disaccharides', 'Monosaccharides', 'Polysaccharides', 'Oligosaccharides', 'b', NULL, NULL),
(47, 11, 'Which statement is incorrect? Effective antibiotics', 'Show selective toxicity', 'kill the host cell', 'Are useless against virus', 'Are useless against virus', 'b', NULL, NULL),
(48, 11, 'In pea plant, synthesis of GA1 is done through', 'Le allele', 'le allele', 'LE allele', 'lE allele', 'a', NULL, NULL),
(49, 11, 'Childhood blindness can be caused due to', 'Acquired Immune Deficiency Syndrome (HIV/AIDS)', 'Malaria', 'Measles', 'Tuberculosis', 'c', NULL, NULL),
(50, 11, 'A pentose, nitrogen and phosphate are combined to form', 'Peptide bond', 'Nucleotide', 'Nucleoside', 'Lipid', 'b', NULL, NULL),
(51, 11, 'An Auxin is produced in', 'Growing root tips', 'Growing shoot tips', 'Old roots', 'Both A and B', 'd', NULL, NULL),
(52, 11, ' Combination of glucose and fructose results in', 'Sucrose', 'Galactose', 'Fructose', 'Maltose', 'a', NULL, NULL),
(53, 11, 'Blood Plasma and glomerular filtrate are different in concentrations of,', 'Uric acid', 'Proteins', 'Creatinine', 'Urea', 'b', NULL, NULL),
(54, 2, 'Bond created by overlapping of one modified orbit on another orbit is known as', 'Sigma bond (σ-bond)', 'Pi bond (π-bond)', 'Covalent bond', 'Dative bond', 'a', NULL, NULL),
(55, 2, 'Only one \'benzene ring\' is present in compounds of', 'aryl', 'acryl', 'carboxylic', 'ketone', 'a', NULL, NULL),
(56, 2, ' Elements which are good catalysts and have ability to change their oxidation number are', 'transition elements', 'Nobel gases', 'alkalis', 'all of them', 'a', NULL, NULL),
(57, 2, 'Salting\' is last stage in manufacturing of', 'plastic', 'soap', 'detergent', 'all of them', 'b', NULL, NULL),
(58, 2, 'When heated, metal that results in change of state to gas is', 'Si(s)', 'Al(s)', 'S(s)', 'P(s)', 'c', NULL, NULL),
(59, 2, 'Metal that reacts quickly with Cl2 is', 'Si(s)', 'P(s)', 'Ar(g)', 'Mg(s)', 'd', NULL, NULL),
(60, 2, ' PH of buffer solution depends upon concentration of', 'acid (H+-)', 'conjugate base (-OH-)', 'salt', 'both A and B', 'd', NULL, NULL),
(61, 2, 'As metallic radii increases in Group II, density', 'increases', 'decreases', 'remains the same', 'depends upon the elements it reacts with', 'a', NULL, NULL),
(62, 2, ' An Oxidation number can be', 'positive', 'negative', 'zero', 'All of Above', 'd', NULL, NULL),
(63, 2, 'Another product of reaction SiO2(s) + NaOH(l) → Na2SiO3aq... would be', 'HO3+', 'OH-', 'H2O(l)', 'H2(g)', 'c', NULL, NULL),
(64, 2, 'In periodic table, element in a second row of transition elements beneath titanium is', 'Zinc (Zn)', 'Zirconium (Zr)', 'Scandium (Sc)', 'Copper (Cu)', 'c', NULL, NULL),
(65, 2, 'Atomic radius of nickel is', '0.115/nm', '0.105/nm', '0.117/nm', '0.132/nm', 'a', NULL, NULL),
(66, 2, 'Carbon monoxide is a gas which is', 'colorless', 'odorless', 'tasteless', 'all of them', 'd', NULL, NULL),
(67, 2, 'Condition of Mg in which it reacts violently with water, is', 'Mg(s) while cold', 'Mg(s) when heated', 'Mg(s) at normal temperature', 'both A and B', 'b', NULL, NULL),
(68, 2, 'Smallest particle of an element which can take part in any chemical change is know as a/an', 'nucleus', 'atom', 'proton', 'neutron', 'b', NULL, NULL),
(69, 2, 'Halogen alkanes are naturally found and are', 'abundant', 'rare', '', 'plenty', 'b', NULL, NULL),
(70, 2, 'Presence of electrons is shown by three dimensional shape of orbit with', 'high probability', 'low probability', 'no probability', 'slow ratio', 'a', NULL, NULL),
(71, 2, ' Number of times a p+ is heavier than an e- is', '18 times', '200 times', '184 times', '1840 times', 'd', NULL, NULL),
(72, 2, 'Carminic acid gives purple color with', 'acids (H+-)', 'alkalis (-OH-)', 'weak acids (H+-)', 'all of them', 'b', NULL, NULL),
(73, 2, 'Nylon is a/an', 'amides', 'peptides', 'polyamides', 'polyesters', 'c', NULL, NULL),
(74, 2, 'Lysine and arginine are left behind in peptides bonds and are known as', 'amylase', 'trypsin', 'urease', 'lactase', 'c', NULL, NULL),
(75, 2, 'Number of dative bonds to central metal ion is its', 'oxidation number', 'compound number', 'co-ordination number', 'dative number', 'c', NULL, NULL),
(76, 2, 'Due to presence of double bonds, alkenes are', 'unsaturated', 'saturated', 'polar', 'non-polar', 'a', NULL, NULL),
(77, 2, 'PH can be kept constant with help of', 'saturated solution', 'unsaturated solution', 'buffer solution', 'super saturated solution', 'c', NULL, NULL),
(78, 2, 'Benefits of using small cells could be', 'lightweight', 'high voltage', 'constant voltage', 'all of them', 'd', NULL, NULL),
(79, 2, 'Natural gas and steam react together in Haber?s process to form', 'oxygen', 'nitrogen', 'carbon dioxide', 'hydrogen', 'd', NULL, NULL),
(80, 2, 'Metals are more reactive with oxygen', 'across the periodic table', 'across the Period 2', 'down the Group-II', 'up the Group-II', 'c', NULL, NULL),
(81, 2, ' Equilibrium reactions are found in large scale in production of', 'ammonia', 'sulfuric acid', 'lactic acid', 'both A and B', 'd', NULL, NULL),
(82, 2, 'Main product of calcium carbonate is', 'lime', 'carbonates', 'calcium', 'limestone', 'd', NULL, NULL),
(83, 2, 'On hydration, [Al(H2O)6]3+ (aq) produces', 'H+ and [Al(H2O)5]2+(aq)', 'H2(g) and [Al(H2O)4]2+(aq)', 'H2(g) and [Al(H2O)3]+(aq)', 'All of Above', 'a', NULL, NULL),
(84, 2, 'During a chemical reaction, atoms can not be', 'created', 'destroyed', 'converted', 'both A and B', 'd', NULL, NULL),
(85, 2, 'In an unsaturated solution, concentration of each ion of sparingly soluble salt at 298k, tells us the', 'solubility product', 'solubility reactant', 'dynamic equilibrium', 'solubility equilibrium', 'a', NULL, NULL),
(86, 2, 'Percentage of sample of HBr decomposes at 430°C. is', '20%', '10%', '22%', '11%', 'b', NULL, NULL),
(87, 2, 'Real gases do not react as expected', 'ideal gas', 'noble gas', 'non-ideal gas', 'inert gas', 'a', NULL, NULL),
(88, 2, 'MgCO3 decomposes when heating with which of following?', 'CO', 'CO2', 'H2CO3', 'CO3-2', 'b', NULL, NULL),
(89, 2, ' Amino acids react to form peptides and proteins, this process is known as', 'addition polymerization', 'substitution polymerization', 'condensation polymerization', 'hydration polymerization', 'c', NULL, NULL),
(90, 2, 'Amines which are bonded in Alkyl group are', 'primary amines', 'secondary amines', 'tertiary amines', 'quaternary amines', 'a', NULL, NULL),
(91, 2, 'Sulfuric acid is manufactured with help of', 'Haber process', 'Contact process', 'Complex reaction', 'Redox reaction', 'b', NULL, NULL),
(92, 2, 'Length of line joining two points (1, 2) and (4, 8) is:', '3', '9', '?45', '45', 'c', NULL, NULL),
(93, 2, 'ystem of reaction in which no reactant leaves reaction mixture, is termed as', 'open system', 'closed system', 'semi-open system', 'partially closed system', 'b', NULL, NULL),
(94, 2, 'Friedrich August Kekule\'s structure of \'benzene\' was inspiration of a', 'chemist', 'nature', 'dream', 'cloud', 'c', NULL, NULL),
(95, 2, 'Distribution of energy with respect to temperature was given in', 'Boltzmann distribution', 'Boltzmann energy', 'Boltzmann temperature distribution', 'Boltzmann pressure', 'a', NULL, NULL),
(96, 2, 'Molecular structure of SF6 is', 'linear', 'tetrahedral', 'hexagonal', 'octahedral', 'd', NULL, NULL),
(97, 2, 'On description of proton, new classification of acid and base was given by', 'J.bronsted', 'T.lowry', 'J.Dalton', 'both A and B', 'd', NULL, NULL),
(98, 2, 'Depleting of CFCs caused a serious environmental hazard i.e.', 'ozone layer', 'UV rays', 'stratosphere', 'exosphere', 'a', NULL, NULL),
(99, 2, 'In Redox reactions, electrons may be', 'gained', 'lost', 'shared', 'both A and B', 'd', NULL, NULL),
(100, 2, 'In Al2Cl6, number of electron pairs donated by each Chloride ion are', '1', '2', '3', '4', 'b', NULL, NULL),
(101, 2, 'In most of organic compounds, group found is', 'benzene ring', 'aldehydes', 'ketone', 'carboxylic', 'a', NULL, NULL),
(102, 2, 'Force of attraction and repulsion in gaseous molecule is', 'present', 'absent', 'slight', 'huge', 'b', NULL, NULL),
(103, 2, ' Scrubbers are composed of', 'calcium hydroxide', 'calcium carbonate', 'both A and B', 'calcium hydroxide', 'c', NULL, NULL),
(104, 2, ' Diamond form of Carbon do not conduct electricity due to absence of', 'spectators electrons', 'delocalized electrons', 'free electrons', 'ions', 'b', NULL, NULL),
(105, 2, 'Chemical elements are represented by Greek or Latin', 'alphabets', 'symbols', 'gods', 'illusions', 'b', NULL, NULL),
(106, 2, 'In process of oxidation, 20% of iron and steel is destroyed because of,', 'rusting', 'molting', 'global warming', 'All of Above', 'a', NULL, NULL),
(107, 4, 'A computer program designed to perform group of coordinated functions, tasks, or activities for benefit of user is termed as', 'computer application', 'control application', 'punching application', 'peripheral application', 'a', NULL, NULL),
(108, 4, 'In flowcharts, capsule shaped symbol is used to represent', 'beginning of program', 'ending of program', 'output data', 'both A and B', 'd', NULL, NULL),
(109, 4, 'To write a program functions such as input four numbers and print their sum, program refinement second level includes', 'print the values', 'print the variables', 'input four numbers', 'calculate sum', 'd', NULL, NULL),
(110, 4, 'Algorithm is made up of', 'sequence to print data', 'selection', 'repetition', 'all of above', 'd', NULL, NULL),
(111, 4, 'Thing to keep in mind while solving a problem is', 'input data', 'output data', 'stored data', 'all of above', 'd', NULL, NULL),
(112, 4, 'Series of steps that are followed to solve a problem is classified as', 'flowchart', 'structure diagram', 'algorithm', 'solving method', 'c', NULL, NULL),
(113, 4, 'Transmission in which all bits are sent at same time for each character is called, is', 'parallel transmission', 'wide transmission', 'local transmission', 'serial transmission', 'a', NULL, NULL),
(114, 4, 'Types of software programs are', 'Application programs', 'Replicate programs', 'Logical programs', 'both A and B', 'd', NULL, NULL),
(115, 4, 'Process to exit from computer by giving correct instructions such as \'EXIT\' is classified as', 'log in', 'process out', 'process in', 'log out', 'd', NULL, NULL),
(116, 4, 'Function of running and loading programs by use of peripherals is function of', 'operating system', 'inquiry system', 'dump programs', 'function system', 'a', NULL, NULL),
(117, 4, 'Program which exactly perform operations that its manual says is classified as', 'unreliable', 'unstable functioning', 'robust', 'reliable', 'd', NULL, NULL),
(118, 4, 'Program provides users with grid of rows and columns is classified as', 'spreadsheet', 'column grid', 'rows grid', 'reliability grid', 'a', NULL, NULL),
(119, 4, 'In microcomputers, operating system is usually stored on', 'random access memory', 'read only memory', 'permanent memory', 'temporary memory.', 'b', NULL, NULL),
(120, 4, 'Slots in spreadsheet that can be copied to other slots are classified as', 'relative slots', 'replicate slots', 'complicate slots', 'column slots', 'b', NULL, NULL),
(121, 4, 'Process of gaining access to a computer by giving correct user identification is classified as', 'process in', 'log out', 'log in', 'process out', 'c', NULL, NULL),
(122, 4, 'Number and name system which uses to identify user is called', 'user identification', 'system identification', 'temporary identification', 'operating identification', 'a', NULL, NULL),
(123, 4, 'Slots in spreadsheet whose formula is not exactly copied are classified as', 'complicate slots', 'column slots', 'relative slots', 'replicate slots', 'c', NULL, NULL),
(124, 4, 'Diagram which is used to show logic elements and their interconnections is said to be', 'circuit diagram', 'system diagram', 'logic diagram', 'gate diagram', 'c', NULL, NULL),
(125, 4, 'lectrical circuit having all voltages at one of two values are called', 'binary circuit', 'binary logic', 'logic circuit', 'none of the above', 'c', NULL, NULL),
(126, 4, 'Operation carried out by a NOT gate are also termed as', 'inverting', 'converting', 'reverting', 'reversing', 'a', NULL, NULL),
(127, 4, 'Number of logic gates and way of their interconnections can be classified as', 'logical network', 'system network', 'circuit network', 'gate network', 'a', NULL, NULL),
(128, 4, 'Logic gate in which output is zero for inputs in which one input is one and other inputs are zero is classified as', 'AND gate', 'NOT gate', 'OR gate', 'OUT gate', 'a', NULL, NULL),
(129, 4, 'Logic gate in which any one of inputs is logic 1 results in output as logic 1 is termed as', 'NOT gate', 'NOR gate', 'AND gate', 'OR gate', 'd', NULL, NULL),
(130, 4, 'Table that shows result of logical operations conducted is called', 'logic table', 'gate table', 'system circuit table', 'truth table', 'd', NULL, NULL),
(131, 4, ' Logic circuit with only one output and one or more inputs is said to be', 'binary gate', 'logic gate', 'circuit gate', 'system gate', 'b', NULL, NULL),
(132, 4, 'A logic gate having two or more inputs and when both inputs are logic 1 then output will be logic 1 is said to be', 'AND gate', 'OUT gate', 'OR gate', 'IN gate', 'a', NULL, NULL),
(133, 4, 'A single unit which is composed of small group of bits is known as', 'bit', 'bug', 'flag', 'byte', 'd', NULL, NULL),
(134, 4, 'BCD stands for', 'Binary Coded Decimal', 'Binary Coded Digitals', 'Binary Characters Decimals', 'Binary Conducting Decimals', 'a', NULL, NULL),
(135, 4, ' \'megabytes\' of computer storage capacity consists of', 'one million bytes', 'two million bytes', 'three million bytes', 'four million bytes', 'a', NULL, NULL),
(136, 4, ' Method of representing numbers such as \'0s\' and \'1s\' is called', 'binary notation', 'primary notation', 'secondary notation', 'variable notation', 'a', NULL, NULL),
(137, 4, 'Number of bits in \'EBCDIC\' code for computing are', 'eight bits', 'eighteen bits', 'twenty eight bits', 'seven bits', 'a', NULL, NULL),
(138, 4, 'Numbers that are written with base 16 are classified as', 'whole numbers', 'hexadecimal', 'exponential integers', 'mantissa', 'b', NULL, NULL),
(139, 4, 'Binary strings which are formed by replacing 0s by 1s and 1s by 0s is referred as', 'ones complement', 'twos complement', 'ones string', 'twos string', 'a', NULL, NULL),
(140, 4, 'In American Standard Code (ASCII), maximum possible characters set size can be', 'character set of 128', 'character set of 138', 'character set of 148', 'character set of 158', 'a', NULL, NULL),
(141, 4, 'Code \'EBCDIC\' which is used in computing stands for', 'extended BCD interchange code', 'extension of BCD information code', 'extension of BCD interchange conduct', 'extended BCD information conduct', 'a', NULL, NULL),
(142, 4, 'Number of bits in American Standard Code (ASCII) used in computing are', 'five bits', 'six bits', 'twenty bits', 'ten bits', 'c', NULL, NULL),
(143, 4, 'Symbols such as letters or any digit are called', 'characters', 'small bits', 'small bytes', 'output characters', 'a', NULL, NULL),
(144, 4, 'Sequence of grouped binary digits is represented', 'bit string', 'byte string', 'binary string', 'input string', 'c', NULL, NULL),
(145, 4, 'System which stores data in states such as \'0\' and \'1\' is called', 'binary digit', 'bit', 'bytes', 'characters', 'a', NULL, NULL),
(146, 4, 'Smallest number that can be stored as positive integers is', '0', '1', '2', '3', 'a', NULL, NULL),
(147, 4, 'Sequence of operations are represented in', 'flowcharts of algorithms', 'flowchart of process', 'flowchart of system', 'flowchart of operations', 'a', NULL, NULL),
(148, 4, 'Binary integers that are formed by finding 1s complement and adding 1 to it are called', 'threes complement', 'ones complement', 'twos complement', 'ones string', 'c', NULL, NULL),
(149, 4, 'Any byte used to store data in a computer system is of', 'four bits', 'five bits', 'seven bits', 'eight bits', 'd', NULL, NULL),
(150, 4, 'Numbers that are written with base 8 are classified as', 'octal numbers', 'hexadecimal', 'two digit positive integers', 'real numbers', 'a', NULL, NULL),
(151, 4, 'In a binary system, numbers with power of 2 are', '1, 2, 4, 8, 16, 32', '1, 2, 3, 4, 5, 6', '1, 2, 16, 32, 64, 81', '1, 3, 5, 7, 9, 11', 'a', NULL, NULL),
(152, 4, 'Number with power 2 such as 32, 16, 4, 2, 1 are represented in form of binary integers as', '110111', '1.11E+14', 'e111101', '21110001', 'a', NULL, NULL),
(153, 4, ' In flowchart, parallelogram is used for representation of', 'general input symbol', 'operation on data', 'ones complement method', 'output data screen', 'a', NULL, NULL),
(154, 4, '1 kilobyte consists of', '768 bytes', '724 bytes', '1024 bytes', '1078 bytes', 'c', NULL, NULL),
(155, 4, 'In flowcharts, symbol of rectangle is used to represent', 'operations on data', 'system process', 'manual operations', 'magnetic disc', 'a', NULL, NULL),
(156, 4, 'In flow chart, diamond shaped symbol is used to represent', 'decision box', 'statement box', 'error box', 'if-statement box', 'a', NULL, NULL),
(157, 4, 'To write a program function i.e. program for sum of four integers, program refinement first level includes', 'input four numbers', 'calculate sum', 'print the values', 'display the values', 'a', NULL, NULL),
(158, 4, 'Part of algorithm which is repeated for fixed number of times is classified as', 'iteration', 'selection', 'sequence', 'reverse action', 'a', NULL, NULL),
(159, 4, 'Diagram that represents steps or operations involved in any kind of process is called,', 'system diagram', 'management hierarchy', 'flowcharts', 'convenience diagrams', 'c', NULL, NULL),
(160, 1, 'Simplify 15ax2 ⁄ 5x', '3ax2', '3ax', '5ax2', '5ax', 'b', NULL, NULL),
(161, 1, 'Simplify 5⁄2 ÷ 1⁄x', '5x ⁄ 2', '5 ⁄ 2x', '2 ⁄ 5x', '2x ⁄ 5', 'a', NULL, NULL),
(162, 1, 'Simplify a(c - b) - b(a - c)', 'ac - 2ab - bc', 'ac - 2ab + bc', 'ac + 2ab + bc', 'ac + bc', 'b', NULL, NULL),
(163, 1, ' Coefficient of x2 in 4x3 + 3x2 - x + 1 is:', '1', '-1', '3', '2', 'c', NULL, NULL),
(164, 1, 'Expand and simplfy (x - 5)(x + 4)', 'x2 + 9x - 20', 'x2 - x - 9', 'x2 - x - 1', 'x2 - x - 20', 'd', NULL, NULL),
(165, 1, 'Expand and simplfy (x - y)(x + y)', 'x2 - 2xy + y2', 'x2 + 2xy + y2', 'x2 - y2', 'x2 + y2', 'c', NULL, NULL),
(166, 1, '(a - b)2 =', 'a2 - 2ab + b2', 'a2 + 2ab + b2', 'a2 - b2', 'a2 + b2', 'a', NULL, NULL),
(167, 1, 'Factorise x2 + x - 72', '(x - ?72)(x + ?72)', '(x - ?72)2', '(x - 8)(x + 9)', '(x + 8)(x - 9)', 'c', NULL, NULL),
(168, 1, 'Factorise -20x2 - 9x + 20', '(5 + 4x)(4 - 5x)', '(5 - 4x)(4 - 5x)', '(5 - 4x)(4 + 5x)', '(5 + 4x)(4 + 5x)', 'a', NULL, NULL),
(169, 1, 'Expand and simplify (x + y)3', 'x3 + 3xy(x - y) + y3', 'x3 + 3xy(x + y) + y3', 'x3 + y3', 'x3 - y3', 'b', NULL, NULL),
(170, 1, ' Simplify (x - 9)(x + 10) ⁄ (x2 - 81)', '(x2 + x - 90) ⁄ (x2 - 81)', '(x + 10) ⁄ (x - 9)', '(x + 10) ⁄ (x + 9)', 'None of the above', 'c', NULL, NULL),
(171, 1, ' Simplify (3x ⁄ 2y)(x ⁄ 3y)', 'x ⁄ 2y', '(3x2) ⁄ (2y2)', 'x2 ⁄ (6y2)', 'x2 ⁄ (2y2)', 'd', NULL, NULL),
(172, 1, 'Simplify (1 ⁄ (x2 - 1)) ÷ (1 ⁄ (x + 1))', '1 ⁄ (x - 1)', '1 ⁄ (x + 1)', '1 ⁄ (x2 - 1)', 'None of the above', 'a', NULL, NULL),
(173, 1, ' Simplify (1 ⁄ s) - (1 ⁄ t)', '(s - t) ⁄ st', '(t - s) ⁄ st', '0', '1 ⁄ (s - t)', 'b', NULL, NULL),
(174, 1, 'Simplify (2 ⁄ tanA) + (4 ⁄ tanB)', '(2tanB + 4tanA) ⁄ tanAtanB', '(2tanA + 4tanB) ⁄ tanAtanB', '6 ⁄ (tanA + tanB)', 'None of the above', 'a', NULL, NULL),
(175, 1, '1 ⁄ (x2 - 1) can be expressed as (A ⁄ (x+1)) + (B ⁄ (x-1)), which of following pairs of values of A and B is correct?', 'A = 1, B = -1', 'A = 1⁄2, B = -1⁄2', 'A = -1⁄2, B = 1⁄2', 'A = 1, B = 0', 'b', NULL, NULL),
(176, 1, 'Express ?20 in terms of simplest possible surd.', '10', '5?2', '4?5', '2?5', 'd', NULL, NULL),
(177, 1, 'Express ?500 in terms of simplest possible surd.', '10?50', '50?10', '10?5', '5?10', 'c', NULL, NULL),
(178, 1, ' Expand and simplify (3 + 2?5)(6 + 4?5)\r\n', '58 + 24?5', '58 + 12?5', '58 + 24?10', '18 + 32?5', 'a', NULL, NULL),
(179, 1, 'Rationalise denominator of 1 ⁄ (3?5 - 3?2), simplify where possible', '(3?5 - 3?2) ⁄ (63 - 18?10)', '(3?5 + 3?2) ⁄ 27', '(3?5 + 3?2) ⁄ (63 - 18?10)', '(3?5 - 3?2) ⁄ 27', 'b', NULL, NULL),
(180, 1, ' Simplify (a^(-1 ⁄ 3) × a^(1 ⁄ 3)) ⁄ a^(-1 ⁄ 2)', 'a^(-7 ⁄ 18)', 'a^(-1 ⁄ 2)', 'a^(1 ⁄ 2)', 'None of the above', 'c', NULL, NULL),
(181, 1, 'Evaluate (1 ⁄ 64)^(-1⁄3)4^-1', 'tuning', '4', '2^-1', '2', 'b', NULL, NULL),
(182, 1, 'Logarithm to base 10 of 1000 is:', '1', '2', '3', '4', 'c', NULL, NULL),
(183, 1, 'Index form of \'logarithm to base x of y is z\' is:', 'x^z = y', 'x^y = z', 'y^z = x', 'z^y = x', 'a', NULL, NULL),
(184, 1, 'In logarithmic form of \'2&sup6; = 64\':', 'base = 6, log = 2, number = 64', 'base = 2, log = 6, number = 64', 'base = 2, log = 64, number = 6', 'base = 64, log = 2, number = 6', 'b', NULL, NULL),
(185, 1, 'Logarithm to base 1⁄2 of 16 is:', '4', '5', '-5', '-4', 'd', NULL, NULL),
(186, 1, 'Logarithm of \'x\' to power \'y\' is equal to:', 'y × (logarithm of x)', 'x × (logarithm of y)', '(logarithm of \'x\') × (logarithm of \'y\')', 'None of the above', 'a', NULL, NULL),
(187, 1, 'Solve equation 4x2 + 36x + 81', 'x = 9⁄2, x = 9⁄2', 'x = -9⁄2, x = 9⁄2', 'x = -9⁄2, x = -9⁄2', 'None of the above', 'c', NULL, NULL),
(188, 1, ' Solve equation x2 + 6x - 7 = 0', 'x = -6, x = -1', 'x = -6, x = 1', 'x = 6, x = -1', 'x = 6, x = 1', 'd', NULL, NULL),
(189, 1, ' Solve equation x2 + 3x', 'x = -3', 'x = 0, x = -3', 'x = 3', 'x = 0, x = 3', 'b', NULL, NULL),
(190, 1, 'Find by using formula roots for following equation: ax2 + bx + c', '(-b±?(b2 - 4ac)) ⁄ 2a', '(b ± ?(b2 - 4ac)) ⁄ 2a', '(-b ± ?(b2 + 4ac)) ⁄ 2a', '(-b ± ?(b2 - 4c)) ⁄ 2a', 'a', NULL, NULL),
(191, 1, 'Solve equations: x + 2y = 13, x + y + z = 12, 2y + z = 11', 'x = 3, y = 4, z = 5', 'x = 5, y = 4, z = 3', 'x = 4, y = 5, z = 3', 'x = 3, y = 5, z = 4', 'b', NULL, NULL),
(192, 1, 'Value of b2 - 4ac determines nature of roots, for real and different roots, b2 - 4ac is:', 'lesser than 0', 'equal to 0', 'greater than 0', 'None of the above', 'c', NULL, NULL),
(193, 1, '  Value of b2 - 4ac determines nature of roots, for real and equal roots, b2 - 4ac is:', 'lesser than 0', 'equal to 0', 'greater than 0', 'None of the above', 'b', NULL, NULL),
(194, 1, 'Sum of roots of a quadratic equation is equal to:', '-b ⁄ 2a', '-2b ⁄ a', '-b ⁄ a', 'b ⁄ a', 'c', NULL, NULL),
(195, 1, 'Length of line joining two points (x1, y1) and (x2, y2) is:', '(x2 - x1) + (y2 - y1)', '?((x2 - x1) + (y2 - y1))', '?((x2 - x1)2 + (y2 - y1)2)', '(y2 - y1) ⁄ (x2 - x1)', 'c', NULL, NULL),
(196, 1, 'Coordinates of midpoint of line joining two points (x1, y1) and (x2, y2) are:', '((x2 - x1) ⁄ 2, (y2 - y1) ⁄ 2)', '((x2 + x1) ⁄ 2, (y2 + y1) ⁄ 2)', '((x2 - x1), (y2 - y1))', '((x2 + x1), (y2 + y1))', 'b', NULL, NULL),
(197, 1, ' Coordinates of midpoint of line joining two points (1, 2) and (4, 8) are:', '(2.5, 10)', '(5, 5)', '(5, 10)', '(2.5, 5)', 'd', NULL, NULL),
(198, 1, 'Length of line joining two points (1, 2) and (4, 8) is:', '3', '9', '?45', '45', 'c', NULL, NULL),
(199, 1, 'Coordinates of midpoint of line joining two points (16, 4) and (36, 6) are:', '(26, 5)', '(5, 26)', '(10, 1)°', '(1, 10)°', 'a', NULL, NULL),
(200, 1, ' Length of line joining two points (16, 4) and (36, 6) is:', '22', '?22', '404', '?404', 'd', NULL, NULL),
(201, 1, 'Consider a line passing through (1, 2) and (4, 8), gradient of this line is equal to:', '1 ⁄ 2', '-1 ⁄ 2', '2', '-2', 'c', NULL, NULL),
(202, 1, 'Consider a line passing through (16, 4) and (36, 6), gradient of this line is equal to:', '-0.1', '0.1', '-10', '10', 'b', NULL, NULL),
(203, 1, 'A father of three daughters bought 6 dolls at $10 each and a few stationary items costing about $5 each. Overall, he spent $200. How many stationary items did he purchase?', '20 items', '25 items', '28 items', '30 items', 'c', NULL, NULL),
(204, 1, 'Sum of numbers from 1 to 100 i.e. (1+2+3+4+5+6', '505', '5050', '550', '5500', 'b', NULL, NULL),
(205, 1, '(0.001)2 ÷ 1000 is equal to:', '1000', '0.001', '0.00000001', '0.000000001', 'd', NULL, NULL),
(206, 1, 'Arrange following fractions in ascending order: (2 ⁄ 7), (4 ⁄ 9), (1 ⁄ 5), (3 ⁄ 8)', '(1 ⁄ 5), (2 ⁄ 7), (3 ⁄ 8), (4 ⁄ 9)', '(1 ⁄ 5), (4 ⁄ 9), (2 ⁄ 7), (3 ⁄ 8)', '(1 ⁄ 5), (4 ⁄ 9), (3 ⁄ 8), (2 ⁄ 7)', '(4 ⁄ 9), (3 ⁄ 8), (2 ⁄ 7), (1 ⁄ 5)', 'a', NULL, NULL),
(207, 1, 'Arrange following fractions in descending order: (2 ⁄ 7), (4 ⁄ 9), (1 ⁄ 5), (3 ⁄ 8)', '(1 ⁄ 5), (2 ⁄ 7), (3 ⁄ 8), (4 ⁄ 9)', '(1 ⁄ 5), (4 ⁄ 9), (2 ⁄ 7), (3 ⁄ 8)', '(1 ⁄ 5), (4 ⁄ 9), (3 ⁄ 8), (2 ⁄ 7)', '(4 ⁄ 9), (3 ⁄ 8), (2 ⁄ 7), (1 ⁄ 5)', 'd', NULL, NULL),
(208, 1, 'Mid-way fraction of (5 ⁄ 6) and (8 ⁄ 15) is:', '41 ⁄ 30', '41 ⁄ 60', '13 ⁄ 21', 'None of the above', 'b', NULL, NULL),
(209, 1, 'A tank of water contains 250 liters of water, if 10 milliliters of water is removed from it every second of an hour, how much water would be left in it after 5 hours. (1 liter = 1000 ml)\r\n', '60 liters', '65 liters', '70 liters', '180 liters', 'c', NULL, NULL),
(210, 1, ' Among 1, 2, 3, 4, 5, 6, 12, 13, 14, 15, 16, 17, prime numbers include:', '1, 2, 3, 5, 12, 13, 15, 17', '1, 2, 3, 5, 13, 15, 17', '1, 2, 3, 5, 13, 17', '2, 3, 5, 13, 17', 'd', NULL, NULL),
(211, 1, 'Among 0.5, 1, √(4), π, and (5 ⁄ 8), irrational numbers are:', '0.5, √(4) and π', '√(4) and π', 'π only', 'None of them is an irrational number', 'c', NULL, NULL),
(212, 1, 'If 0 is first time, nth term of sequence 0, 4, 8, 12, 16,', '4 × n', '4 × (n + 1)', '4 × (n - 1)', 'None of the above', 'c', NULL, NULL),
(213, 3, 'Terminal potential difference of battery depends on', 'current', 'temperature', 'both A and B', 'resistance of external resistor', 'd', NULL, NULL),
(214, 3, 'Density of water in kg m-3 is', '1000', '100', '10000', '4000', 'a', NULL, NULL),
(215, 3, 'As object gains speed, its G.P.E (Gravitational Potential Energy', 'increases', 'remains constant', 'decreases', 'varies depending on altitude', 'd', NULL, NULL),
(216, 3, 'Activity is proportional to number of', 'daughter nuclei', 'decayed nuclei', 'decayed nuclei', 'father nuclei', 'c', NULL, NULL),
(217, 3, 'A filament lamp is', 'Ohmic', 'non-Ohmic', 'low resistive', 'non glowing', 'b', NULL, NULL),
(218, 3, 'Intensity of suns radiation is about', '1.0 kW m-2', '20 kW m-2', '5 kW m-2', '8 kW m-2', 'a', NULL, NULL),
(219, 3, 'Phenomena in which a charged body attract uncharged body is called', 'electrostatic induction', 'electric current', 'charge movement', 'magnetic induction', 'a', NULL, NULL),
(220, 3, 'Semiconductors have electron number density of order', '1024 m-3', '1020 m-3', '1012 m-3', '1023 m-3', 'd', NULL, NULL),
(221, 3, 'An electron is travelling at right angles to a uniform magnetic field of flux density 1.2 mT with a speed of 8 × 106 m s-1, radius of circular path followed by electron is', '3.8 cm', '3.7 cm', '3.6 cm', '3.5 cm', 'a', NULL, NULL),
(222, 3, 'High speed electrons have wavelength of order', '10-15 m', '10-14 m', '10-16 m', '10-17 m', 'a', NULL, NULL),
(223, 3, 'Strength of magnetic field is known as', 'flux', 'density', 'magnetic strength', 'magnetic flux density', 'd', NULL, NULL),
(224, 3, 'Only force acting on a bouncing ball is', 'gravity', 'weight of ball', 'friction', 'a and b both', 'a', NULL, NULL),
(225, 3, 'Gradual decrease in x-ray beam intensity as it passes through material is called', 'attenuation', 'decay', 'radioactivity', 'imaging', 'a', NULL, NULL),
(226, 3, 'A straight line symbol shows the', 'fuse', 'diode', 'connecting lead', 'switch', 'c', NULL, NULL),
(227, 3, 'Visible light has wavelength of', '5 × 10-7 m', '3 × 108 m', '6 × 10³ m', '4 × 104 m', 'a', NULL, NULL),
(228, 3, 'Force acting on two point masses is directly proportional to', 'sum of masses', 'difference of masses', 'distance between masses', 'product of masses', 'd', NULL, NULL),
(229, 3, 'Maximum displacement from equilibrium position is', 'frequency', 'amplitude', 'wavelength', 'period', 'b', NULL, NULL),
(230, 3, 'Attenuation coefficient of bone is 600 m-1 for x-rays of energy 20 keV and intensity of beam of x-rays is 20 Wm-2, then intensity of beam after passing through a bone of 4mm is', '3 Wm-2', '2.5 Wm-2', '2.0 Wm-2', '1.8 Wm-2', 'd', NULL, NULL),
(231, 3, 'Contact force always acts at parallel to the surface producing it', 'acute angles to the surface producing it', 'right angles to the surface producing it', 'obtuse angle to the surface producing it', 'obtuse angle to the surface producing it', 'b', NULL, NULL),
(232, 3, 'Unit of luminous intensity is', 'm', 'kg', 'cd', 'mol', 'c', NULL, NULL),
(233, 3, ' As compared to sound waves frequency of radio waves is', 'lower', 'higher', 'equal', 'may be higher or lower', 'b', NULL, NULL),
(234, 3, 'Decrease in strength of signal is known as', 'tuning', 'modulation', 'attenuation', 'amplification', 'c', NULL, NULL),
(235, 3, 'E.M.F can be induced in a circuit by', 'changing magnetic flux density', 'changing area of circuit', 'changing the angle', 'all of above', 'd', NULL, NULL),
(236, 3, 'Resistivity of lead is', '22.5 × 10-8 Ω m', '20.8 × 10-8 Ω m', '10 Ω m', '5 Ω m', 'b', NULL, NULL),
(237, 3, 'If a secondary coil has 40 turns, and, a primary coil with 20 turns is charged with 50 V of potential difference, then potential difference in secondary coil would be', '50 V in secondary coil', '100 V in secondary coil', '60 V in secondary coil', '25 V in secondary coil', 'd', NULL, NULL),
(238, 3, 'Effect of diffraction is greatest if waves pass through a gap with width equal to', 'frequency', 'wavelength', 'amplitude', 'wavefront', 'b', NULL, NULL),
(239, 3, 'In order to find internal structure of nucleus, electrons should be accelerated by voltages up to', '105 V', '107 V', '109 V', '1011 V', 'c', NULL, NULL),
(240, 3, 'Particles involved in movement within material are', 'protons', 'electrons', 'neutrons', 'positrons', 'c', NULL, NULL),
(241, 3, ' As compared to sound waves frequency of radio waves is', 'lower', 'higher', 'equal', 'may be higher or lower', 'b', NULL, NULL),
(242, 3, 'Decrease in strength of signal is known as', 'tuning', 'modulation', 'attenuation', 'amplification', 'c', NULL, NULL),
(243, 3, 'E.M.F can be induced in a circuit by', 'changing magnetic flux density', 'changing area of circuit', 'changing the angle', 'all of above', 'd', NULL, NULL),
(244, 3, 'Systematic errors occur due to', 'overuse of instruments', 'careless usage of instruments', 'both A and B', 'human sight', 'c', NULL, NULL),
(245, 3, 'Speed of Earth when a rock of mass 60 kg falling towards Earth with speed of 20 m s-1 is', '2.4 × 10-22 m s-1', '3.5 × 10-33 m s-1', '−2.0 × 10-22 m s-1', '−3 × 1034 m s-1', 'c', NULL, NULL),
(246, 3, ' Normal force acting per unit cross sectional area is called', 'weight', 'pressure', 'volume', 'friction', 'b', NULL, NULL),
(247, 3, ' Accelerometer detects the', 'small acceleration', 'large acceleration', 'small deceleration', 'large acceleration and deceleration', 'd', NULL, NULL),
(248, 3, 'Combinations of base units are', 'simple units', 'derived units', 'scalars', 'vectors', 'b', NULL, NULL),
(249, 3, 'If plates of capacitor are oppositely charged then total charge is equal to', 'negative', 'positive', 'zero', 'infinite', 'c', NULL, NULL),
(250, 3, 'LED starts to conduct when voltage is about', '1 V', '4 V', '3 V', '2 V', 'c', NULL, NULL),
(251, 3, 'LED starts to conduct when voltage is about', '1 V', '4 V', '3 V', '2 V', 'd', NULL, NULL),
(252, 3, ' For non-inverting amplifier input and output is', 'out of phase', 'in phase', 'have phase difference of 180°', 'have phase difference of 90°', 'b', NULL, NULL),
(253, 3, ' If gradient of a graph is negative, then acceleration is', 'positive', 'negative', 'zero°', '1°', 'b', NULL, NULL),
(254, 3, 'Ratio of tensile to strain is', 'Young\'s modulus', 'stress', 'stiffness', 'tensile force', 'a', NULL, NULL),
(255, 3, ' Energy given to nucleus to dismantle it increases the', 'kinetic energy of individual nucleons', 'mechanical energy of individual nucleons', 'potential energy of individual nucleons', 'chemical energy of individual nucleons', 'c', NULL, NULL),
(256, 3, 'Tensile strain is equal to', 'Force per unit area', 'Force per unit volume', 'Extension per unit length', 'Force per unit length', 'c', NULL, NULL),
(257, 3, 'If energy loss is zero then decrease in G.P.E is equal to', 'decreases in kinetic energy', 'gain in kinetic energy', 'constant kinetic energy', 'zero kinetic energy', 'b', NULL, NULL),
(258, 3, 'In case of filament lamp at higher voltages, resistance of lamp', 'decreases', 'increases', 'remains constant', 'varies depending on the filament', 'b', NULL, NULL),
(259, 3, 'Supply of energy depends upon', 'mass of material', 'the change in temperature', 'the material itself', 'all of above', 'd', NULL, NULL),
(260, 3, ' If frequency of modulated wave is less than frequency of carrier wave, then input signal is', 'negative', 'positive', 'zero', 'all of above', 'a', NULL, NULL),
(261, 3, 'Average power of all activities of our body is', '111 W', '113 W', '116 W', '120 W', 'c', NULL, NULL),
(262, 3, 'Kinetic friction is always', 'lesser than static friction', 'greater than static friction', 'equal to static friction', 'equal to contact force', 'a', NULL, NULL),
(263, 3, 'Gravitational potential is always', 'positive', 'negative', 'zero', 'infinity', 'b', NULL, NULL),
(264, 3, 'Displacement-time graph depicting an oscillatory motion is', 'cos curve', 'sine curve', 'sine curve', 'straight line', 'c', NULL, NULL),
(265, 3, 'Rate of flow of electric charge is', 'electric current', 'conventional current only', 'electronic current only', 'potential difference', 'a', NULL, NULL),
(270, 8, 'When did  US Steel was organized?', '1905', '1901', '1904', '1903', 'b', '2019-12-08 11:08:17', '2019-12-08 11:08:17'),
(271, 8, 'When did Black Tuesday happened in UK?', '1960', '1930', '1929', '1928', 'c', '2019-12-08 11:11:38', '2019-12-08 11:11:38'),
(272, 8, '2.  When did Great depression start in UK?', '40th decade', '30th decade', '20th decade', '50th decade', 'b', '2019-12-08 11:15:56', '2019-12-08 11:15:56'),
(273, 8, '3.When did SEC act passed?', '1933', '1930', '1929', '1932', 'a', '2019-12-08 11:17:22', '2019-12-08 11:17:22'),
(274, 8, '4.When did second World War started?', '1933', '1936', '1939', '1940', 'c', '2019-12-08 11:18:42', '2019-12-08 11:18:42'),
(275, 8, 'When did World War-2 end?', '1945', '1944', '1942', '1940', 'a', '2019-12-08 11:23:35', '2019-12-08 11:23:35'),
(276, 8, 'Who gives concept of valuation?', 'J B William', 'Miller', 'Modigliani', 'Mayron', 'a', '2019-12-08 11:25:57', '2019-12-08 11:25:57'),
(277, 8, 'When did  J B William gave the concept of valuation?', '1933', '1936', '1937', '1938', NULL, '2019-12-08 11:27:20', '2019-12-08 11:27:20'),
(279, 8, 'Who  invented Capital Asset Pricing Model?', 'Miller', 'Merton', 'William Sharp', 'Gordon', 'c', '2019-12-08 11:34:27', '2019-12-08 11:34:27'),
(280, 8, 'When did William Sharp invented Capital Asset Pricing Model?', '1963', '1964', '1966', '1962', 'b', '2019-12-08 11:35:54', '2019-12-08 11:35:54'),
(281, 8, 'Who invented Option Pricing Model?', 'Black &  Scholes', 'Miller', 'Mayron', 'Sharp', NULL, '2019-12-08 11:37:57', '2019-12-08 11:37:57'),
(282, 8, 'When did Fisher Black & Robert Merton got noble prize?', '1997', '1996', '1994', '1998', 'a', '2019-12-08 11:39:46', '2019-12-08 11:39:46'),
(283, 8, 'Who invented Arbitrage Pricing Theory?', 'Ross', 'Miller', 'Mayron', 'Merton', 'a', '2019-12-08 11:41:45', '2019-12-08 11:41:45'),
(284, 8, 'When did Ross invented Arbitrage Pricing Theory?', '1976', '1977', '1975', '1980', 'a', '2019-12-08 11:43:26', '2019-12-08 11:43:26'),
(285, 8, 'When did WTO organized?', '1996', '1995', '1993', '1994', 'b', '2019-12-08 11:44:53', '2019-12-08 11:44:53'),
(286, 8, 'How many members were there in partnership business?', '2-12', '2-20', '2-15', '2-9', 'b', '2019-12-08 11:48:04', '2019-12-08 11:48:04'),
(287, 8, 'What is the main source of capital in joint stock company?', 'Share', 'Bond', 'Debenture', 'Profit', 'a', '2019-12-08 11:54:09', '2019-12-08 11:54:09'),
(288, 8, 'When did Securities Exchange  Commission  Act passed?', '1992', '1993', '1992', '1991', 'b', '2019-12-08 12:02:20', '2019-12-08 12:02:20'),
(289, 8, 'When did Bank Company Act passed?', '1990', '1992', '1991', '1990', 'c', '2019-12-08 12:03:26', '2019-12-08 12:03:26'),
(290, 8, 'Which Bond issued by Government?', 'Corporate Bond', 'Treasury Bond', 'Zero coupon Bond', 'Perpetual Bond', 'b', '2019-12-08 12:07:44', '2019-12-08 12:07:44'),
(291, 8, 'How many share market in Bangladesh?', '2', '3', '5', '4', 'a', '2019-12-08 12:09:16', '2019-12-08 12:09:16'),
(292, 8, 'When did partnership Act passed?', '1890', '1891', '1889', '1892', 'a', '2019-12-08 12:13:12', '2019-12-08 12:13:12'),
(293, 8, 'When did Company Act passed ?', '1995', '1994', '1992', '1993', 'b', '2019-12-08 12:16:35', '2019-12-08 12:16:35'),
(294, 8, 'What is the currency of USA?', 'Taka', 'Dollar', 'Rupees', 'Penny', 'b', '2019-12-08 12:21:09', '2019-12-08 12:21:09'),
(295, 8, 'Which is the instrument of Money Market?', 'Share', 'Bond', 'Debenture', 'Commercial paper', 'd', '2019-12-08 12:25:56', '2019-12-08 12:25:56'),
(296, 8, 'When did The Dhaka Stock Exchange given a name?', '1913', '1954', '1964', '1971', 'c', '2019-12-08 12:28:01', '2019-12-08 12:28:01'),
(297, 8, 'When did IDRA organized?', '1995', '1996', '2010', '2012', 'c', '2019-12-08 12:29:36', '2019-12-08 12:29:36'),
(298, 8, 'When did MRA organized?', '2006', '1995', '2010', '2012', 'a', '2019-12-08 12:30:52', '2019-12-08 12:30:52'),
(299, 8, 'How many approach are for Break even point?', '2', '3', '4', '5', 'a', '2019-12-09 05:50:07', '2019-12-09 05:50:07'),
(300, 8, 'What is the period of short term finance?', '2 year', '1 year', '3 year', '4 year', 'b', '2019-12-09 06:03:09', '2019-12-09 06:03:09'),
(301, 8, 'What is the source of short term finance?', 'Share', 'Bond', 'Debenture', 'Business Debt', 'd', '2019-12-09 06:05:50', '2019-12-09 06:05:50'),
(302, 8, 'What is the period of commercial letter?', '40 days', '60 days', '90 days', '270 days', 'd', '2019-12-09 06:07:38', '2019-12-09 06:07:38'),
(303, 8, 'What is the period of Mid term finance?', '1 year', '1-5 year', '5-6 year', '4-5 years', 'b', '2019-12-09 06:09:51', '2019-12-09 06:09:51'),
(304, 8, 'What is the instrument of long  term debenture?', 'Bond', 'share', 'Debenture', 'preffered stock', 'a', '2019-12-09 06:11:57', '2019-12-09 06:11:57'),
(305, 8, 'What does IPO stand for?', 'Initial public offering', 'Initial  public offering', 'Internal public offering', 'International public oferring', 'a', '2019-12-09 06:15:59', '2019-12-09 06:15:59'),
(306, 8, 'What does DSE stands for?', 'Dhaka stock exchange', 'Dhaka Share exchange', 'Dhaka stock export', 'Dhaka store exchanging', 'a', '2019-12-09 06:17:50', '2019-12-09 06:17:50'),
(307, 8, 'What does CSE stand for?', 'Chittagong  Store exchange', 'Chittagong stock exchange', 'Chittagong share exchange', 'Chittagong share exchanging', 'b', '2019-12-09 06:20:51', '2019-12-09 06:20:51'),
(308, 8, 'When did CSE organized?', '1990', '1980', '1955', '1963', 'c', '2019-12-09 06:21:57', '2019-12-09 06:21:57'),
(309, 8, 'Which is called Deep discount?', 'Zero coupon Bond', 'Long term Bond', 'Junk Bond', 'Revenue Bond', 'a', '2019-12-09 06:23:53', '2019-12-09 06:23:53'),
(310, 8, 'What does ICB stand  for?', 'Investment Corporation of Bangladesh', 'Investment company of Bangladesh', 'International commerce bank', 'International committee of Bangladesh', 'a', '2019-12-09 06:27:24', '2019-12-09 06:27:24'),
(311, 8, 'How many risk discussed in CAPM model?', '2', '1', '4', '3', 'b', '2019-12-09 06:30:56', '2019-12-09 06:30:56'),
(312, 8, 'What does CAPM stands for?', 'Capital Asset Pricing Model', 'Current Asset Pricing Model', 'Current Asset Money Model', 'Current Asset Policy Model', 'a', '2019-12-09 06:33:28', '2019-12-09 06:33:28'),
(313, 8, 'How many steps are for Capital Budgeting?', '4', '5', '3', '1', 'b', '2019-12-09 06:35:37', '2019-12-09 06:35:37'),
(314, 8, 'How many financial statement have to be prepared in  Business organization?', '4', '3', '2', '1', 'a', '2019-12-09 06:43:28', '2019-12-09 06:43:28'),
(315, 8, 'How many method used for preparing Cash flow?', '1', '2', '3', '4', 'b', '2019-12-09 06:45:58', '2019-12-09 06:45:58'),
(316, 8, 'Which financial Act going on in Bangladesh?', '1992', '1993', '1991', '1990', 'b', '2019-12-09 06:48:47', '2019-12-09 06:48:47'),
(317, 8, 'Which partnership Business Act going on in Bangladesh?', '1932', '1933', '1931', '1930', 'a', '2019-12-09 06:51:22', '2019-12-09 06:51:22'),
(318, 8, 'Which Insurance Act going on in Bangladesh?', '2006', '2005', '2010', '2007', 'c', '2019-12-09 06:54:01', '2019-12-09 06:54:01'),
(319, 8, 'Which Micro Credit Regulatory Act going on in Bangladesh?', '2005', '2006', '2004', '2007', 'b', '2019-12-09 06:55:17', '2019-12-09 06:55:17'),
(320, 8, 'When did Finance got internationalized?', '1960 decade', '1970 decade', '1980 decade', '1990 decade', 'd', '2019-12-09 07:00:42', '2019-12-09 07:00:42'),
(321, 10, 'Who first invented Double Entry system?', 'Luca Pacioli', 'Aristotle', 'Plato', 'Samuel', 'a', '2019-12-09 07:07:46', '2019-12-09 07:07:46'),
(322, 10, 'When did Luca Pacioli invented Double  Entry system?', '1494', '1500', '1498', '1594', 'a', '2019-12-09 07:09:25', '2019-12-09 07:09:25'),
(323, 10, 'Where did Accounting origin?', 'India', 'Italy', 'England', 'America', 'b', '2019-12-09 07:15:44', '2019-12-09 07:15:44'),
(324, 10, 'What is the language of Business?', 'Accounting', 'Finance', 'Management', 'None of them', 'a', '2019-12-09 07:17:27', '2019-12-09 07:17:27'),
(325, 10, 'When did Modern Accounting started ?', '12th century', '14th century', '15th century', '17th century', 'c', '2019-12-09 07:19:32', '2019-12-09 07:19:32'),
(326, 10, 'Who is the father of Accounting?', 'Luca Pacioli', 'R N Carter', 'Miller', 'L C Cooper', 'a', '2019-12-09 07:21:32', '2019-12-09 07:21:32'),
(327, 10, 'How many kinds of  incident?', '2', '3', '4', '5', 'a', '2019-12-09 07:23:49', '2019-12-09 07:23:49'),
(328, 10, 'Who prepared voucher?', 'Accountant', 'Cashier', 'Manager', 'Seller', 'b', '2019-12-09 07:26:47', '2019-12-09 07:26:47'),
(329, 10, 'How many copies are prepared of cash memo?', '2', '3', '4', '5', 'b', '2019-12-09 07:28:13', '2019-12-09 07:28:13'),
(330, 10, 'How many peoples signature needed in credit voucher?', '2', '3', '4', '5', 'c', '2019-12-09 07:29:39', '2019-12-09 07:29:39'),
(331, 10, 'How many columns are there in cash memo?', '3', '4', '5', '6', 'c', '2019-12-09 07:31:11', '2019-12-09 07:31:11'),
(332, 10, 'How many kinds of voucher?', '2', '3', '4', '5', 'a', '2019-12-09 07:31:50', '2019-12-09 07:31:50'),
(333, 10, 'What does A stands for in account equation?', 'Asset', 'liability', 'Revenue', 'proprietorship', 'a', '2019-12-09 07:35:01', '2019-12-09 07:35:01'),
(334, 10, 'Where did Luca Pacioli belong to?', 'Russia', 'Italy', 'France', 'America', 'b', '2019-12-09 07:38:17', '2019-12-09 07:38:17'),
(335, 10, 'When did industrial revolution happened in England?', '16th century', '17th century', '18th century', '19th  century', NULL, '2019-12-09 07:40:12', '2019-12-09 07:40:12'),
(336, 10, 'How many part are there in Double entry system?', '2', '3', '4', '1', 'a', '2019-12-09 07:42:55', '2019-12-09 07:42:55'),
(337, 10, 'What is the primary book of accounting?', 'Journal', 'ledger', 'Voucher', 'Cash memo', 'a', '2019-12-09 07:46:08', '2019-12-09 07:46:08'),
(338, 10, 'From which word Journal came from?', 'Journal', 'Jour', 'Journ', 'Journey', 'b', '2019-12-09 07:47:44', '2019-12-09 07:47:44');
INSERT INTO `questions` (`id`, `subject_id`, `question`, `option1`, `option2`, `option3`, `option4`, `correct_ans`, `created_at`, `updated_at`) VALUES
(339, 10, 'Which word is \"Jour\"?', 'French', 'Italiac', 'Russian', 'American', 'a', '2019-12-09 07:49:21', '2019-12-09 07:49:21'),
(340, 10, 'What is the 2nd step of  Accountant?', 'Journal', 'Cash memo', 'Cash book', 'Cash flow', 'a', '2019-12-09 07:51:48', '2019-12-09 07:51:48'),
(341, 10, 'How many columns are  there in Journal?', '2', '3', '4', '5', 'd', '2019-12-09 07:53:24', '2019-12-09 07:53:24'),
(342, 10, 'How many columns are in Double column  Cash Book?', '10', '12', '6', '8', 'b', '2019-12-09 07:59:25', '2019-12-09 07:59:25'),
(343, 10, 'How many types of petty cash book?', '2', '3', '4', '5', 'b', '2019-12-09 08:01:02', '2019-12-09 08:01:02'),
(344, 10, 'What is the 3rd step of account cycle?', 'Journal', 'Ledger', 'Cash book', 'Voucher', 'b', '2019-12-09 08:02:49', '2019-12-09 08:02:49'),
(345, 10, 'Which book is the king of   all account Book?', 'Ledger', 'Journal', 'Financial statement', 'Cash flow', 'a', '2019-12-09 08:05:14', '2019-12-09 08:05:14'),
(346, 10, 'What  is the 4th step of account cycle?', 'Journal', 'Ledger', 'Trial Balance', 'Cash Flow', 'c', '2019-12-09 08:12:01', '2019-12-09 08:12:01'),
(347, 10, 'Which account book is not neccessary to prepared?', 'Journal', 'Ledger', 'Trial Balance', 'Cash flow', 'c', '2019-12-09 08:13:54', '2019-12-09 08:13:54'),
(348, 10, 'How many columns are therein trial Balance?', '4', '5', '6', '7', 'b', '2019-12-09 08:21:42', '2019-12-09 08:21:42'),
(349, 10, 'What does AAA stands for?', 'American Accounting Association', 'American Accountants Association', 'Asian Accounting Association', 'American Athletic Association', 'a', '2019-12-09 08:25:11', '2019-12-09 08:25:11'),
(350, 10, 'What is meant by 3c\'s of Accounting?', 'Cost, consistency, Conservation', 'Cost, Capital, Conservation', 'Concepts, Capital, Contra', 'Cost, Consumtion, Credit', 'a', '2019-12-09 08:28:49', '2019-12-09 08:28:49'),
(351, 10, 'W hat does FASB stands for?', 'Financial Accounting Standard Board', 'Federation of Accounting Standard Board', 'Financial Association of Standard Business', 'Financial Accounting Service Board', 'a', '2019-12-09 08:32:40', '2019-12-09 08:32:40'),
(352, 10, 'When did ICMAB organized?', '1972', '1974', '1977', '1978', 'c', '2019-12-09 08:34:15', '2019-12-09 08:34:15'),
(353, 10, 'Where is the Headquarter of ICAB located?', 'Gulsan', 'Motijheel', 'Uttara', 'Karwan Bazar', 'd', '2019-12-09 08:36:27', '2019-12-09 08:36:27'),
(354, 10, 'When did ICAB organized?', '1971', '1972', '1973', '1974', 'c', '2019-12-09 08:38:33', '2019-12-09 08:38:33'),
(355, 10, 'Where is the headquarter of ICMAB located?', 'Motijheel', 'Gulshan', 'Nilkhet', 'Kawran Bazar', 'c', '2019-12-09 08:40:16', '2019-12-09 08:40:16'),
(356, 10, 'Where is the headquarter of AICPA?', 'Washington', 'London', 'New York', 'Venice', 'c', '2019-12-09 08:43:02', '2019-12-09 08:43:02'),
(357, 10, 'Which organization Started GAAP?', 'FASB', 'IAS', 'IASC', 'IFA', 'a', '2019-12-09 08:45:40', '2019-12-09 08:45:40'),
(358, 10, 'When did FASB organized?', '1793', '1873', '1937', '1973', 'd', '2019-12-09 08:47:20', '2019-12-09 08:47:20'),
(359, 10, 'When did SEC organized in America?', '1349', '1493', '1934', '1943', 'c', '2019-12-09 08:49:04', '2019-12-09 08:49:04'),
(360, 10, 'How many types of receivable?', '2', '3', '4', '5', 'b', '2019-12-09 08:53:05', '2019-12-09 08:53:05'),
(361, 10, 'What is the important step of account cycle?', 'Financial statement', 'journal', 'Ledger', 'Cash flow', 'a', '2019-12-09 09:13:47', '2019-12-09 09:13:47'),
(362, 10, 'How many steps are there for financial statement?', '2', '3', '4', '5', 'd', '2019-12-09 09:17:07', '2019-12-09 09:17:07'),
(363, 10, 'How many kinds of account according to account equation?', '2', '3', '4', '5', 'd', '2019-12-09 09:22:19', '2019-12-09 09:22:19'),
(364, 10, 'Who prepared  Invoice?', 'Seller', 'Buyer', 'Government', 'Manager', 'b', '2019-12-09 09:25:33', '2019-12-09 09:25:33'),
(365, 10, 'When did VAT started in Bangladesh?', '1990', '1991', '1989', '1988', 'b', '2019-12-09 09:29:30', '2019-12-09 09:29:30'),
(366, 10, 'How many kinds of cash book?', '2', '3', '4', '5', 'b', '2019-12-09 09:31:39', '2019-12-09 09:31:39'),
(367, 10, 'How many kinds of petty cash book?', '3', '2', '4', '5', 'a', '2019-12-09 09:32:32', '2019-12-09 09:32:32'),
(368, 10, 'From which word Ledger originated?', 'Ledge', 'Ledger', 'Ledg', 'Leger', 'a', '2019-12-09 09:45:41', '2019-12-09 09:45:41'),
(369, 10, 'How many columns are there in treble column cash book?', '14', '12', '14', '16', 'a', '2019-12-09 09:49:19', '2019-12-09 09:49:19'),
(370, 10, 'What does APB stands for?', 'Accounting Principles Board', 'American Principle Board', 'American   public Burreau', 'Asia Pacific Burreau', 'a', '2019-12-09 09:54:33', '2019-12-09 09:54:33'),
(371, 14, 'How many basic economic problem in human life?', '2', '3', '4', '5', 'b', '2019-12-09 10:10:18', '2019-12-09 10:10:18'),
(372, 14, 'Economics is selection\'s science _who said this?', 'Benham', 'Samuelson', 'Karl Marx', 'L Robins', 'b', '2019-12-09 10:15:48', '2019-12-09 10:15:48'),
(373, 14, 'How many kinds of opportunity expense?', '2', '3', '4', '5', 'b', '2019-12-09 10:17:55', '2019-12-09 10:17:55'),
(374, 14, 'How many kinds of opportunity expense?', '2', '3', '4', '5', 'b', '2019-12-09 10:17:56', '2019-12-09 10:17:56'),
(375, 14, 'When did socialism started in Russia?', '1916', '1917', '1918', '1920', 'b', '2019-12-09 10:20:20', '2019-12-09 10:20:20'),
(376, 14, 'When did socialism end in Russia?', '1930', '1943', '1955', '1985', 'd', '2019-12-09 10:21:52', '2019-12-09 10:21:52'),
(377, 14, 'Economics is Asset\'s science _ who said This?', 'J M  Keynes', 'Samuelson', 'Adam Smith', 'Fisher', 'a', '2019-12-09 10:24:46', '2019-12-09 10:24:46'),
(378, 14, 'According to whom econoics is inadequacy \'s science?', 'Samuelson', 'Marshell', 'Bentham', 'Robins', 'd', '2019-12-09 10:27:07', '2019-12-09 10:27:07'),
(379, 14, 'How many  elements are needed for production?', '2', '4', '5', '3', 'b', '2019-12-09 10:37:40', '2019-12-09 10:37:40'),
(380, 14, 'What is the basic equipment of production?', 'Land', 'capital', 'organization', 'Labour', 'a', '2019-12-09 10:40:53', '2019-12-09 10:40:53'),
(381, 14, 'What is the produced equipment of production?', 'Labor', 'Capital', 'organization', 'Land', 'b', '2019-12-09 10:45:30', '2019-12-09 10:45:30'),
(382, 14, 'Which the ref of  TC?', 'TC =TFC + AC', 'TC = TFC +AFC', 'TC = TFC +TVC', 'TC =FTC +AVC', 'c', '2019-12-09 10:48:41', '2019-12-09 10:48:41'),
(383, 14, 'What is the ref of Average cost?', 'AC =TC + Q', 'AC = TC*Q', 'AC= TC\\Q', 'AC = TC -Q', 'c', '2019-12-09 10:50:34', '2019-12-09 10:50:34'),
(384, 14, 'What is the ref of total revenue?', 'TR =P+Q', 'TR =P*Q', 'TR =P-Q', 'TR=P\\Q', 'b', '2019-12-09 10:53:18', '2019-12-09 10:53:18'),
(385, 14, 'How many kinds of  production\'s period?', '2', '3', '4', '5', 'a', '2019-12-09 10:54:49', '2019-12-09 10:54:49'),
(386, 14, 'What is called the expense of raw material?', 'Initial expense', 'Basic expense', 'major expense', 'compound expense', 'a', '2019-12-09 10:57:44', '2019-12-09 10:57:44'),
(387, 14, 'How many kinds of law of production?', '2', '5', '4', '3', 'b', '2019-12-09 10:58:38', '2019-12-09 10:58:38'),
(388, 14, 'Which is FC?', 'Fixed guard\'s Salary', 'Wage', 'Transport', 'All of them', 'a', '2019-12-09 11:01:49', '2019-12-09 11:01:49'),
(389, 14, 'What is called the ability of fulfill the scarcity?', 'utility', 'production', 'demand', 'supply', 'a', '2019-12-09 12:04:17', '2019-12-09 12:04:17'),
(390, 14, 'What is called the ability of fulfill the scarcity?', 'utility', 'production', 'demand', 'supply', 'a', '2019-12-09 12:26:39', '2019-12-09 12:26:39'),
(391, 14, 'What is the basic equipment  of production?', 'saving', 'investment', 'Labor', 'demand', 'c', '2019-12-10 03:02:18', '2019-12-10 03:02:18'),
(392, 14, 'Which is the most vibrant equipment   of production?', 'labour', 'capital', 'organization', 'land', 'a', '2019-12-10 03:04:22', '2019-12-10 03:04:22'),
(393, 14, 'Which is the most vibrant equipment   of production?', 'labour', 'capital', 'organization', 'land', 'a', '2019-12-10 03:04:23', '2019-12-10 03:04:23'),
(394, 14, 'What does LFS stand for?', 'Laborer Force Survey', 'Labor Force Survey', 'Labor Foreign Survey', 'Laborer Foreign Survey', 'b', '2019-12-10 03:06:39', '2019-12-10 03:06:39'),
(395, 14, 'How many kinds of wage?', '1', '2', '3', '4', 'b', '2019-12-10 03:07:32', '2019-12-10 03:07:32'),
(396, 14, 'What is the monetary value of labor\'s wage?', 'Revenue', 'Wage', 'Labor price', 'Tax', NULL, '2019-12-10 03:10:46', '2019-12-10 03:10:46'),
(397, 14, 'What does W\\P indicates?', 'Monetare wage', 'supply of labor', 'Demand of labor', 'Real wage', 'd', '2019-12-10 03:13:34', '2019-12-10 03:13:34'),
(398, 14, 'Which is price line?', 'AR', 'MR', 'MC', 'AC', 'a', '2019-12-10 03:17:44', '2019-12-10 03:17:44'),
(399, 14, 'What does seller receive in exchange of goods?', 'Cheque', 'respect', 'money', 'Metalic', 'c', '2019-12-10 03:20:13', '2019-12-10 03:20:13'),
(400, 14, 'Which is the most liquid asset?', 'land', 'house', 'tools', 'money', 'd', '2019-12-10 03:21:11', '2019-12-10 03:21:11'),
(401, 14, 'How many kinds of formal coin?', '2', '3', '4', '5', 'a', '2019-12-10 03:23:14', '2019-12-10 03:23:14'),
(402, 14, 'Which is formal coin?', 'cheque', 'cash', 'prize bond', 'Bank draft', 'b', '2019-12-10 03:24:26', '2019-12-10 03:24:26'),
(403, 14, 'Which is the commercial Bank?', 'The Midland', 'Reserve Bank of India', 'Federal Reserve system', 'Bank of England', 'a', '2019-12-10 03:26:38', '2019-12-10 03:26:38'),
(404, 14, 'Which Bank is called \"Clearing House\"', 'Commercial Bank', 'Agricultural Bank', 'Industrial Bank', 'Central Bank', 'd', '2019-12-10 03:35:25', '2019-12-10 03:35:25'),
(405, 14, 'Money is what, what money does_ who said this?', 'Walker', 'Samuelson', 'Caynes', 'Marshell', 'a', '2019-12-10 03:37:00', '2019-12-10 03:37:00'),
(406, 14, 'How many kinds of credit control system of Bangladesh Bank?', '2', '3', '4', '5', 'b', '2019-12-10 03:38:44', '2019-12-10 03:38:44'),
(407, 14, 'Which is the central Bank of Bangladesh?', 'The Bank of Bangladesh', 'State Bank of Bangladesh', 'Bangladesh Bank', 'Federal Reserve system', 'c', '2019-12-10 03:42:28', '2019-12-10 03:42:28'),
(408, 14, 'Which is the central Bank of UK?', 'Bangladesh Bank', 'The Midland Bank', 'The Westminster Bank', 'Federal Reserve system', 'd', '2019-12-10 03:44:52', '2019-12-10 03:44:52'),
(409, 14, 'M =2000 ,V =2, P= ?', '300', '350', '400', '450', 'c', '2019-12-10 03:46:31', '2019-12-10 03:46:31'),
(410, 14, 'Which is the exchange equation of Fisher?', 'MV =PT', 'M =P', 'MV =PTY', 'Y = C', 'a', '2019-12-10 03:48:26', '2019-12-10 03:48:26'),
(411, 14, 'Who gives the Quantum theory   of Money?', 'king Fisher', 'Arving Fisher', 'Marshell', 'Samuelson', 'b', '2019-12-10 03:51:39', '2019-12-10 03:51:39'),
(412, 14, 'Who called \"Entrepreneur\" the \"Captain of the Industry\"?', 'L Robins', 'Samuelson', 'Smith', 'Marshell', 'd', '2019-12-10 03:54:18', '2019-12-10 03:54:18'),
(413, 14, 'From which word \"Entrepreneur\" came from?', 'Greek', 'French', 'Latin', 'Greece', 'b', '2019-12-10 03:55:41', '2019-12-10 03:55:41'),
(414, 14, 'Who leads the business or industrial organization?', 'owner', 'manager', 'entrpreneur', 'administration', 'c', '2019-12-10 03:57:59', '2019-12-10 03:57:59'),
(415, 14, 'Which is the oldest of all organization?', 'Sole proprietorship', 'partnership business', 'joint stock company', 'insurance company', 'a', '2019-12-10 03:59:31', '2019-12-10 03:59:31'),
(416, 14, 'What is called the collecting system of equipment of production?', 'organization', 'organizer', 'Capital', 'labor', 'a', '2019-12-10 04:01:17', '2019-12-10 04:01:17'),
(417, 14, 'Who is the owner  of  government state?', 'Gpovernment', 'Minister', 'secretary', 'Public', 'a', '2019-12-10 04:03:50', '2019-12-10 04:03:50'),
(418, 14, 'What does NGO stands for?', 'Non Government Organization', 'Not govt. organization', 'None govt. organization', 'All of them', 'a', '2019-12-10 04:06:43', '2019-12-10 04:06:43'),
(419, 14, 'Which is the 1st NGO of Bangladesh?', 'BRAC', 'Care', 'Karitas', 'Midas', 'a', '2019-12-10 04:09:24', '2019-12-10 04:09:24'),
(420, 14, 'How many kinds of joint stock company?', '2', '3', '4', '5', 'a', '2019-12-10 04:10:52', '2019-12-10 04:10:52'),
(421, 9, 'What is the medium of production?', 'Industry', 'capital', 'land', 'organization', 'a', '2019-12-10 04:30:27', '2019-12-10 04:30:27'),
(422, 9, 'How many kinds os Trade?', '2', '3', '4', '5', 'a', '2019-12-10 04:31:31', '2019-12-10 04:31:31'),
(423, 9, 'Which word is \" Business\"?', 'English', 'French', 'Italic', 'Russian', 'a', '2019-12-10 04:34:50', '2019-12-10 04:34:50'),
(424, 9, 'Which is the initial work of Business?', 'Production', 'Sevices', 'Supply', 'Distribute', 'a', '2019-12-10 04:37:38', '2019-12-10 04:37:38'),
(425, 9, 'How many kinds of business environment?', '1', '2', '3', '4', 'b', '2019-12-10 04:39:36', '2019-12-10 04:39:36'),
(426, 9, 'How many kinds of Business according to ownership?', '4', '6', '7', '5', 'c', '2019-12-10 04:42:31', '2019-12-10 04:42:31'),
(427, 9, 'Where did 1st company Act passed?', 'England', 'America', 'Britten', 'Thailand', 'a', '2019-12-10 04:44:39', '2019-12-10 04:44:39'),
(428, 9, 'When did company Act passed in England?', '1844', '1845', '1842', '1846', 'a', '2019-12-10 04:45:24', '2019-12-10 04:45:24'),
(429, 9, 'Which is the most popular oldest business ?', 'sole proprietorship', 'partnership business', 'joint stock company', 'governtment state', 'a', '2019-12-10 04:48:56', '2019-12-10 04:48:56'),
(430, 9, 'Who supply capital in sole proprietorship  business?', 'Bank', 'owner', 'partner', 'money lander', 'b', '2019-12-10 04:57:19', '2019-12-10 04:57:19'),
(431, 9, 'Which Partnership business Act going on in Bangladesh?', '1930', '1935', '1932', '1934', 'c', '2019-12-10 05:01:24', '2019-12-10 05:01:24'),
(432, 9, 'How many members were there in partnership business?', '21', '20', '15', '16', 'b', '2019-12-10 05:02:27', '2019-12-10 05:02:27'),
(433, 9, 'How many members were there in Banking partnership business?', '15', '10', '12', '14', 'b', '2019-12-10 05:03:33', '2019-12-10 05:03:33'),
(434, 9, 'How many kinds of contractual relation?', '2', '3', '4', '5', 'b', '2019-12-10 05:06:45', '2019-12-10 05:06:45'),
(435, 9, 'What is  the base of partnership business?', 'Share', 'contractual relation', 'money', 'Belief', 'b', '2019-12-10 05:10:12', '2019-12-10 05:10:12'),
(436, 9, 'When did Industrial revolution occured in Europe?', '1750 -1850', '1780 -1850', '1850 -1950', '1650 -1750', 'a', '2019-12-10 05:12:30', '2019-12-10 05:12:30'),
(437, 9, 'How many members were there in private limited company?', '2 -50', '2 - 30', '2 - 40', '2 - 45', 'a', '2019-12-10 05:14:18', '2019-12-10 05:14:18'),
(438, 9, 'When did company act passed in India under British?', '1650', '1750', '1850', '1855', 'c', '2019-12-10 05:16:00', '2019-12-10 05:16:00'),
(439, 9, 'When did new company act passed in India', '1915', '1916', '1914', '1913', 'd', '2019-12-10 05:17:16', '2019-12-10 05:17:16'),
(440, 9, 'When did company   Act passed in Bangladesh?', '1994', '1993', '1992', '1996', 'a', '2019-12-10 05:19:04', '2019-12-10 05:19:04'),
(441, 9, 'When did The Joint Stock Company Act passed in Britten?', '1944', '1844', '1945', '1845', 'b', '2019-12-10 05:20:38', '2019-12-10 05:20:38'),
(442, 9, 'When did Dhaka Stock Exchange organized?', '1966', '1967', '165', '1964', 'd', '2019-12-10 05:30:23', '2019-12-10 05:30:23'),
(443, 9, 'When did Chittagong stock exchange organized?', '1990', '1995', '1965', '1960', 'b', '2019-12-10 05:31:29', '2019-12-10 05:31:29'),
(444, 9, 'When did Bengal co - operative federation organized in Calcutta?', '1915', '1916', '1917', '1918', 'd', '2019-12-10 05:34:45', '2019-12-10 05:34:45'),
(445, 9, 'When did International Co - operative Society started?', '1795', '1895', '1995', '1990', 'b', '2019-12-10 05:36:16', '2019-12-10 05:36:16'),
(446, 9, 'When did Co -operative Act passed in Subcontinent?', '1902', '1903', '1904', '1905', 'c', '2019-12-10 05:38:32', '2019-12-10 05:38:32'),
(447, 9, 'When did PARD organized?', '1956', '1957', '1958', '1959', 'd', '2019-12-10 05:39:24', '2019-12-10 05:39:24'),
(448, 9, 'Whose leadership did PARD organized?', 'Dr. Hamid Khan', 'King', 'Buchez', 'Plockboy', 'a', '2019-12-10 05:44:58', '2019-12-10 05:44:58'),
(449, 9, 'How many certified Co - operative society are in Bangladesh?', '1,76,442', '1,76,440', '1,75,440', '1,75,446', 'a', '2019-12-10 05:46:42', '2019-12-10 05:46:42'),
(450, 9, 'Which Co - operative Act going on in Bangladesh?', '2000', '2001', '2002', '2003', 'a', '2019-12-10 05:48:40', '2019-12-10 05:48:40'),
(451, 9, 'How many members were  there initial Co -operative society?', '10', '15', '20', '25', 'c', '2019-12-10 05:50:48', '2019-12-10 05:50:48'),
(452, 9, 'How many members were there in national co - operative society?', '20', '10', '15', '14', 'b', '2019-12-10 05:52:04', '2019-12-10 05:52:04'),
(453, 9, 'Which organization is called  \"The Citadel of the exploited\"?', 'Partnership Business', 'Joint stock company', 'Sole proprietorship', 'Co - operative society', 'd', '2019-12-10 05:54:43', '2019-12-10 05:54:43'),
(454, 9, '\"Unity is strength\"_ which organization\"s motto?', 'Co -operative society', 'partnership business', 'private limited company', 'public limited company', NULL, '2019-12-10 06:00:55', '2019-12-10 06:00:55'),
(455, 9, 'When did Bangladesh Chemical  Industries corporation organized in Bangladesh?', '1975', '1976', '1974', '1977', 'b', '2019-12-10 06:07:27', '2019-12-10 06:07:27'),
(456, 9, 'When did Bangladesh Parjatan Corporation organized?', '1971', '1972', '1973', '1974', 'c', '2019-12-10 06:08:52', '2019-12-10 06:08:52'),
(457, 9, 'How many  share of Government state were in hold of Government?', '50%', '51%', '52%', '53%', 'b', '2019-12-10 06:12:26', '2019-12-10 06:12:26'),
(458, 9, 'When did WASA organized?', '1963', '1964', '1965', '1966', 'a', '2019-12-10 06:13:40', '2019-12-10 06:13:40'),
(459, 9, 'When did PPP principles effective in Bangladesh?', '2006', '2007', '2009', '2010', 'd', '2019-12-10 06:16:35', '2019-12-10 06:16:35'),
(460, 9, 'When did Chemical Industrial organization organized  in Bangladesh?', '1975', '1976', '1977', '1974', 'b', '2019-12-10 06:18:24', '2019-12-10 06:18:24'),
(461, 9, 'What is the changing name of BTTB?', 'BTLC', 'BTCL', 'BCLT', 'BLTC', 'b', '2019-12-10 06:21:12', '2019-12-10 06:21:12'),
(462, 9, 'How many railway line going in Bangladesh?', '1', '2', '3', '4', 'b', '2019-12-10 06:55:17', '2019-12-10 06:55:17'),
(463, 9, 'Which Patent & Design Act on going in Bangladesh?', '1910', '1911', '1912', '1913', 'b', '2019-12-10 06:57:33', '2019-12-10 06:57:33'),
(464, 9, 'What is the period of Patent?', '10 years', '12 years', '14 years', '16 years', 'd', '2019-12-10 06:58:32', '2019-12-10 06:58:32'),
(465, 9, 'What is the period of patent in USA?', '15 years', '16 years', '17 years', '18 years', 'b', '2019-12-10 07:00:19', '2019-12-10 07:00:19'),
(466, 9, 'What is the period of Trademark?', '6 years', '7 years', '5 years', '4 years', 'b', '2019-12-10 07:03:04', '2019-12-10 07:03:04'),
(467, 9, 'When did Trademark Act passed in French?', '1854', '1856', '1857', '1858', 'c', '2019-12-10 07:05:05', '2019-12-10 07:05:05'),
(468, 9, 'When did Trademark Act passed in UK?', '1860', '1861', '1862', '1863', 'c', '2019-12-10 07:06:10', '2019-12-10 07:06:10'),
(469, 9, 'When did The Press Act passed in Britten?', '1660', '1661', '1662', '1663', 'c', '2019-12-10 07:07:35', '2019-12-10 07:07:35'),
(470, 9, 'Which copy right Act on going in Bangladesh?', '2000', '2005', '2006', '2009', 'a', '2019-12-10 07:09:29', '2019-12-10 07:09:29'),
(473, 13, 'What is the main source of sustentation of Bangladesh?', 'Agriculture', 'Industry', '1 & 2', 'None of them', 'a', '2019-12-10 07:32:55', '2019-12-10 07:32:55'),
(474, 13, 'What is the contribution of agriculture in GDP?', '16.00', '16.05', '16.07', '16.04', 'c', '2019-12-10 07:35:32', '2019-12-10 07:35:32'),
(475, 13, 'What is the contribution of crops in GDP?', '7.46%', '8.45%', '7.55%', '8.55%', 'a', '2019-12-10 07:37:11', '2019-12-10 07:37:11'),
(476, 13, 'How many main rivers in Bangladesh?', '2', '3', '4', '5', 'b', '2019-12-10 07:38:07', '2019-12-10 07:38:07'),
(478, 13, 'What is the total bulk of Bangladesh?', '14 million Hector', '14.86 million hector', '15 million hector', '15.81 million hector', NULL, '2019-12-10 07:44:16', '2019-12-10 07:44:16'),
(479, 13, 'What is the quantity of forest land in Bangladesh?', '2.50 million hector', '2.55 million hector', '2.59 million hector', '3 million hector', 'c', '2019-12-10 07:47:34', '2019-12-10 07:47:34'),
(480, 13, 'How many part of population lived in village?', '75%', '76%', '77%', '78%', 'a', '2019-12-10 07:54:10', '2019-12-10 07:54:10'),
(481, 13, 'How many dollar did Bangladesh earn by exportation of agricultural goods in 2015?', '938   dollar', '936 dollar', '934 dollar', '937 dollar', 'a', '2019-12-10 07:57:46', '2019-12-10 07:57:46'),
(482, 13, 'What is the present contribution of agriculture in GDP?', '14.77', '14.78', '14.79', '14.80', 'c', '2019-12-10 07:59:27', '2019-12-10 07:59:27'),
(483, 13, 'How many kinds of agricultural crops?', '2', '3', '4', '5', 'a', '2019-12-10 08:01:20', '2019-12-10 08:01:20'),
(484, 13, 'What is the contribution of animal resource in GDP ?', '1.65%', '1.66%', '1.67%', '1.68%', 'b', '2019-12-10 08:03:39', '2019-12-10 08:03:39'),
(485, 13, 'How many hen were in  Bangladesh?', '275.2 million', '245 million', '250.2 million', '542.5 million', 'a', '2019-12-10 08:07:03', '2019-12-10 08:07:03'),
(486, 13, 'How many Marine water resource in Bangladesh?', '164 lac hector', '166 lac hector', '167 lac hector', '168 lac hector', 'b', '2019-12-10 08:18:47', '2019-12-10 08:18:47'),
(487, 13, 'When did BARC organized in Bangladesh?', '1971', '1972', '1973', '1974', 'c', '2019-12-10 08:34:11', '2019-12-10 08:34:11'),
(488, 13, 'Where is the headquarter of Agricultural information service?', 'Mohakhali', 'Dhanmondi', 'Khamarbari', 'Joydevpur', 'c', '2019-12-10 08:37:14', '2019-12-10 08:37:14'),
(489, 13, 'When did Agricultural university organized?', '1957', '1961', '1965', '1969', 'b', '2019-12-10 08:38:38', '2019-12-10 08:38:38'),
(490, 13, 'Where is the main office of BARI?', 'Gazipur', 'Faridpur', 'Jamalpur', 'Pirojpur', 'a', '2019-12-10 08:39:53', '2019-12-10 08:39:53'),
(491, 13, 'How many forest land needed in a country ?', '17%', '20%', '25%', '26%', 'c', '2019-12-10 08:41:33', '2019-12-10 08:41:33'),
(492, 13, 'How many causes are for soil acidity?', '2', '3', '4', '5', 'b', '2019-12-10 08:52:39', '2019-12-10 08:52:39'),
(493, 13, 'How many types erosion occured?', '1', '2', '3', '4', 'b', '2019-12-10 08:54:42', '2019-12-10 08:54:42'),
(494, 13, 'What is the bearer of plant?', 'seed', 'root', 'leaf', 'flower', 'a', '2019-12-10 09:18:06', '2019-12-10 09:18:06'),
(495, 13, 'What temperature is needed to grow onion?', '20 - 25 degree celcius', '20 - 23 degree celcius', '20 - 24 degree celcius', '25 - 30 degree celcius', 'a', '2019-12-10 09:23:20', '2019-12-10 09:23:20'),
(496, 13, 'What is the amount of oil in mustard oil?', '40%', '44%', '45%', '46%', 'b', '2019-12-10 09:25:58', '2019-12-10 09:25:58'),
(497, 13, 'Which is the golden fibre of Bangladesh?', 'Rice', 'jute', 'tea', 'Wheat', 'b', '2019-12-10 09:31:07', '2019-12-10 09:31:07'),
(498, 13, 'Which is cash crop?', 'rice', 'jute', 'wheat', 'onion', 'b', '2019-12-10 09:32:39', '2019-12-10 09:32:39'),
(499, 13, 'When did Sericulture Board organized in Bangladesh?', '1976', '1977', '1978', '1975', 'b', '2019-12-10 09:34:10', '2019-12-10 09:34:10'),
(500, 13, 'Where did first sericulture started?', 'China', 'Europe', 'England', 'Japan', 'a', '2019-12-10 09:36:05', '2019-12-10 09:36:05'),
(501, 13, 'Where did the word \"sericulture\" origin?', 'Serio', 'Seria', 'seri', 'Serii', 'a', '2019-12-10 09:39:07', '2019-12-10 09:39:07'),
(502, 13, 'Which word is \"Serio\" ?', 'Latin', 'greece', 'greek', 'Italic', 'a', '2019-12-10 09:40:57', '2019-12-10 09:40:57'),
(503, 13, 'What does Serio mean?', 'Silk', 'linen', 'cotton', 'poliester', 'a', '2019-12-10 09:41:51', '2019-12-10 09:41:51'),
(504, 13, 'In how many days did Mushroom got ready to eat?', '10 - 12', '10 -15', '15-20', '15 - 16', 'b', '2019-12-10 09:44:25', '2019-12-10 09:44:25'),
(505, 13, 'Which Mushroom grows in summer & rainy season?', 'Straw Mushroom', 'Oyster  Mushroom', 'both 1 & 2', 'Year Mushroom', 'a', '2019-12-10 09:47:48', '2019-12-10 09:47:48'),
(506, 13, 'Which Mushroom grows in winter?', 'Straw Mushroom', 'Oyster  Mushroom', 'Year Mushroom', '2 & 3', 'b', '2019-12-10 09:49:18', '2019-12-10 09:49:18'),
(507, 13, 'Which Mushroom is mostly grows in Bangladesh?', 'Straw Mushroom', 'Oyster  Mushroom', 'Year Mushroom', 'None of them', 'b', '2019-12-10 09:51:23', '2019-12-10 09:51:23'),
(508, 13, 'What  temperature is needed  to produce Mushroom?', '10 - 12  degree celcius', '28 -36 degree celcius', '30 -40 degree celcius', '35 -45 degree celcius', 'b', '2019-12-10 09:56:07', '2019-12-10 09:56:07'),
(509, 13, 'Which is the ideal meal foe diabetics patients?', 'Sweet', 'Mushroom', 'Potato', 'Carrot', 'b', '2019-12-10 09:58:01', '2019-12-10 09:58:01'),
(510, 13, 'How many eggs Bee queen give daily?', '1500 -1700', '1500 -2000', '1800 -2000', '1600 -2000', 'c', '2019-12-10 10:00:37', '2019-12-10 10:00:37'),
(511, 13, 'How many chemical ingredients are found in Honey?', '180', '181', '182', '183', 'b', '2019-12-10 10:04:35', '2019-12-10 10:04:35'),
(512, 13, 'What is called the cultivation of silk?', 'Epiculture', 'Sericulture', 'Horticulture', 'Pisiculture', 'b', '2019-12-10 10:11:48', '2019-12-10 10:11:48'),
(513, 13, 'Which tree\"s leaf is the ideal meal of silk worm?', 'Mango', 'Morus Alba', 'Tarmarind', 'Azadirachta', 'b', '2019-12-10 10:16:01', '2019-12-10 10:16:01'),
(514, 13, 'What we get by cultivating Bean crops?', 'Oxygen', 'Hydrogen', 'Nitrogen', 'Potasium', 'b', '2019-12-10 10:17:51', '2019-12-10 10:17:51'),
(515, 13, 'How many types of Rice grows in Bangladesh/', '2', '3', '4', '5', 'a', '2019-12-10 10:21:16', '2019-12-10 10:21:16'),
(516, 13, 'What is main food of Bangladesh?', 'Rice', 'jute', 'wheat', 'fruit', 'a', '2019-12-10 10:23:04', '2019-12-10 10:23:04'),
(517, 13, 'From which word Cereal crop origins?', 'CIRIS', 'CISI', 'CIRI', 'CIRT', 'a', '2019-12-10 10:24:23', '2019-12-10 10:24:23'),
(518, 13, 'What is the scientific name of rice?', 'Orzya sativa', 'Zea mays', 'Setaria italica', 'Secale cereale', 'a', '2019-12-10 10:26:27', '2019-12-10 10:26:27'),
(519, 13, 'What is the scientific name of Rye?', 'Orzya sativa', 'Zea mays', 'Secale cereale', 'Setaria italica', 'c', '2019-12-10 10:28:58', '2019-12-10 10:28:58'),
(520, 13, 'What is the scientific name of Maize?', 'Orzya sativa', 'Zea mays', 'Secale cereale', 'Setaria italica', 'b', '2019-12-10 10:31:00', '2019-12-10 10:31:00'),
(521, 13, 'Which is the origin place of rice?', 'Bngladesh', 'India', 'Thailand', 'Pakistan', 'b', '2019-12-10 10:33:08', '2019-12-10 10:33:08'),
(522, 13, 'How many types of rice invented  in Bangladesh?', '91', '90', '92', '93', 'a', '2019-12-10 10:36:37', '2019-12-10 10:36:37'),
(523, 13, 'What temperature is needed to grow rice?', '20 -30 degree celcius', '25 -35 degree celcius', '24 -34 degree celcius', '21 - 34 degree celcius', 'b', '2019-12-10 10:39:57', '2019-12-10 10:39:57'),
(524, 7, 'What is meant by utility?', 'ability of production', 'ability to fulfill scarcity', 'ability to taking risk', 'ability  of supply', 'b', '2019-12-10 10:49:22', '2019-12-10 10:49:22'),
(525, 7, 'Which is the similar of production?', 'Creating', 'creator', 'quantity', 'quality', 'a', '2019-12-10 10:51:56', '2019-12-10 10:51:56'),
(527, 7, 'What is the life blood of  commercial industrialism?', 'Capital', 'organization', 'Land', 'labor', 'a', '2019-12-10 11:03:10', '2019-12-10 11:03:10'),
(528, 7, 'Which type of equipment is Machine tools?', 'Land', 'Capital', 'Labor', 'organization', 'b', '2019-12-10 11:05:56', '2019-12-10 11:05:56'),
(529, 7, 'What is the last process of organize capital?', 'Revenue', 'savings', 'Investment', 'Expenditure', 'c', '2019-12-10 11:07:26', '2019-12-10 11:07:26'),
(530, 7, 'How many ingredients are there for production according to management?', '5', '6', '7', '8', 'b', '2019-12-10 11:09:22', '2019-12-10 11:09:22'),
(531, 7, 'Which is the life blood of production?', 'Land', 'organization', 'labor', 'capital', 'd', '2019-12-10 11:10:59', '2019-12-10 11:10:59'),
(532, 7, 'Which is the principle index of economic & livelihood style?', 'National income', 'Personal income', 'Macro income', 'Gross income', 'd', '2019-12-10 11:18:11', '2019-12-10 11:18:11'),
(533, 7, 'What does CCA stands for?', 'Consumption Capital Allowance', 'Capital Consumption Allowance', 'Capital Consumer Allowance', 'Consumer Capital Allowance', 'b', '2019-12-10 11:22:46', '2019-12-10 11:22:46'),
(534, 7, 'In which value GDP counted?', 'consumption value', 'Market value', 'Production value', 'Fixed value', 'c', '2019-12-10 11:26:04', '2019-12-10 11:26:04'),
(535, 7, 'How many steps are there for designing goods?', '4', '5', '6', '7', 'b', '2019-12-10 11:27:54', '2019-12-10 11:27:54'),
(536, 7, 'how many techniques are there for controlling statistic\'s value?', '4', '3', '2', '5', 'c', '2019-12-10 11:33:34', '2019-12-10 11:33:34'),
(537, 7, 'Which Act made the BSTI seal compulsory?', 'Special Regular  Order', 'Special Regulatory Order', 'Special Regulatory Act', 'Special Business Act', 'c', '2019-12-10 11:37:45', '2019-12-10 11:37:45'),
(538, 7, 'Which design is important for Noodles, Chips ,Perfume?', 'practical', 'production', 'packing', 'aesthetic', 'c', '2019-12-10 11:41:01', '2019-12-10 11:41:01'),
(539, 7, 'Which will not be included in 7M?', 'Market', 'Man', 'Management', 'Marketing', 'd', '2019-12-10 11:50:38', '2019-12-10 11:50:38'),
(540, 7, 'Which is the important concept of production management?', 'production', 'ability of production', 'system of production', 'increase the production', 'b', '2019-12-11 02:43:43', '2019-12-11 02:43:43'),
(541, 7, 'How will be the decision of production\'s ability?', 'Short term', 'Long term', 'Fixed', 'Unfixed', 'b', '2019-12-11 02:47:30', '2019-12-11 02:47:30'),
(542, 7, 'Which environment\'s example is education?', 'Natural', 'International', 'Social', 'Legal', 'c', '2019-12-11 02:56:40', '2019-12-11 02:56:40'),
(543, 7, 'Which  policy  followed  in process lay out?', 'Goods', 'Selling', 'Distribution', 'Specialism', 'd', '2019-12-11 03:06:00', '2019-12-11 03:06:00'),
(544, 7, 'Which lay out needed in constructing Padma over bridge?', 'Product', 'Process', 'Fixed position', 'Office', 'c', '2019-12-11 03:14:31', '2019-12-11 03:14:31'),
(545, 7, 'Which lay out needed in hotel business?', 'Service', 'Product', 'Process', 'Fixed Position', 'a', '2019-12-11 03:16:01', '2019-12-11 03:16:01'),
(546, 7, 'Which accessory needed to beautify or attract things?', 'Lay out', 'output', 'Input', 'science', 'a', '2019-12-11 03:18:35', '2019-12-11 03:18:35'),
(547, 7, 'Which lay out is effected for constructing Ship?', 'Fixed position Lay out', 'Office lay out', 'Ware house lay out', '1 & 2', 'a', '2019-12-11 03:20:58', '2019-12-11 03:20:58'),
(548, 7, 'What is called product lay out?', 'Production line', 'Assembly line', 'Product line', '1 &2', 'd', '2019-12-11 03:22:18', '2019-12-11 03:22:18'),
(549, 7, 'What is called the ability of fulfill scarcity?', 'Utility', 'demand', 'asupply', 'scarcity', 'a', '2019-12-11 03:24:39', '2019-12-11 03:24:39'),
(550, 7, 'How is the process is production?', 'in progress', 'finished', 'effective', 'uneffective', 'a', '2019-12-11 03:29:17', '2019-12-11 03:29:17'),
(551, 7, 'Which utility is created by exchanging goods?', 'Ownership utility', 'transport utility', 'reshaped utility', 'None of them', 'a', '2019-12-11 03:32:43', '2019-12-11 03:32:43'),
(552, 7, 'What is the main purpose of organization?', 'To gain profit', 'loss', 'Production', 'selling', 'a', '2019-12-11 03:35:26', '2019-12-11 03:35:26'),
(553, 7, 'What is the main purpose of production?', 'Fulfill Demand', 'fulfill scarcity', 'Supply', 'All of them', 'd', '2019-12-11 03:36:51', '2019-12-11 03:36:51'),
(554, 7, 'What is needed for inventing new goods?', 'Information', 'Experiment', '1 & 2', 'none of them', 'c', '2019-12-11 03:38:45', '2019-12-11 03:38:45'),
(555, 7, 'Which is the 1st & oldest sector of production?', 'Agricultural sector', 'fisheries sector', 'animal resource', 'Industrial sector', 'a', '2019-12-11 03:45:40', '2019-12-11 03:45:40'),
(556, 7, 'What is the equipment of production?', 'Land', 'organization', 'labor', 'All of them', 'd', '2019-12-11 05:24:30', '2019-12-11 05:24:30'),
(557, 7, 'Who at first used the word \'productiveness\'?', 'Smith', 'Samuelson', 'Marshell', 'Quincy', 'd', '2019-12-11 05:30:03', '2019-12-11 05:30:03'),
(558, 7, 'What is called the asset used in production work?', 'Capital', 'organization', 'Labor', 'land', 'a', '2019-12-11 05:33:27', '2019-12-11 05:33:27'),
(559, 7, 'What is the producing equipment of production?', 'Capital', 'organization', 'land', 'labor', 'a', '2019-12-11 05:34:54', '2019-12-11 05:34:54'),
(560, 7, 'Who said ,capital is the producing equipment of production?', 'Bom Boyark', 'Marshell', 'Smith', 'Quincy', 'a', '2019-12-11 05:41:28', '2019-12-11 05:41:28'),
(561, 7, 'What is called all the equipments used in production?', 'organization', 'land', 'labor', 'capital', 'a', '2019-12-11 05:43:16', '2019-12-11 05:43:16'),
(562, 7, 'What is the supplier of raw material?', 'Land', 'capital', 'labor', 'organization', 'a', '2019-12-11 05:45:32', '2019-12-11 05:45:32'),
(563, 7, 'What is the source of labor?', 'Man', 'Market', 'Marketing', 'Land', 'a', '2019-12-11 05:46:26', '2019-12-11 05:46:26'),
(564, 7, 'What is the source of future  income?', 'Capital', 'income', 'profit', 'Expensee', 'a', '2019-12-11 05:48:55', '2019-12-11 05:48:55'),
(565, 7, 'Which is the least member of private limited company?', '2', '3', '4', '5', NULL, '2019-12-11 05:51:05', '2019-12-11 05:51:05'),
(566, 7, 'What is the contribution of Small & Medium Enterprise?', '70%', '75%', '60%', '65%', 'b', '2019-12-11 05:57:37', '2019-12-11 05:57:37'),
(568, 7, 'What is the least capital of large enterprise?', '1 billion', '2 billion', '3 billion', '4 billion', 'c', '2019-12-11 06:03:55', '2019-12-11 06:03:55'),
(569, 7, 'How many labors needed in Medium enterprise?', '100 - 200', '150 -250', '100 - 250', '200 -300', 'c', '2019-12-11 06:05:43', '2019-12-11 06:05:43'),
(570, 7, 'How many labors needed in small enterprise?', '25 -99', '20 -80', '20 -50', '30 -55', 'a', '2019-12-11 06:06:54', '2019-12-11 06:06:54'),
(571, 7, 'From where did the word \"Macro\" origin?', 'Makros', 'Makro', 'Micro', 'Macro', 'a', '2019-12-11 06:08:58', '2019-12-11 06:08:58'),
(572, 7, 'What is the ref of GDP?', 'C + I+ G', 'C + G', 'C + I', 'C - G', 'a', '2019-12-11 06:12:24', '2019-12-11 06:12:24'),
(573, 7, 'Who is the author of \"Principles of Scientific Management\" ?', 'F W Taylor', 'Marshell', 'Aristotle', 'plato', 'a', '2019-12-11 06:15:30', '2019-12-11 06:15:30'),
(574, 7, 'Who is the father of Scientific Management?', 'F W Taylor', 'Marshell', 'Miller', 'Smith', 'a', '2019-12-11 06:16:56', '2019-12-11 06:16:56'),
(575, 7, 'Which districts considered as industrial region?', 'Tongi & Narayonganj', 'Dhaka', 'Comilla', 'Jessore', 'a', '2019-12-11 06:21:13', '2019-12-11 06:21:13'),
(576, 5, 'When the assembly has been called into session?', '27th March', '27th Feb', '15th March', '25th March', 'd', '2019-12-11 08:59:54', '2019-12-11 08:59:54'),
(577, 5, 'How many decades did Mandela has imprisoned for his fight against minority rule?', '2', '3', '4', '5', 'b', '2019-12-11 09:01:50', '2019-12-11 09:01:50'),
(578, 5, 'When was Mandela awarded the Noble prize?', '1993', '1990', '1992', '1994', 'a', '2019-12-11 09:03:08', '2019-12-11 09:03:08'),
(579, 5, 'When Mandela left his public life?', '2004', '2003', '2002', '2001', 'a', '2019-12-11 09:04:48', '2019-12-11 09:04:48'),
(580, 5, 'To whom did Mandela dedicate his lifetime?', 'African people', 'American people', 'American white', '1 & 2', NULL, '2019-12-11 09:08:12', '2019-12-11 09:08:12'),
(581, 5, 'Where did Tereshkova born?', 'Russia', 'Italy', 'France', 'Indonesia', NULL, '2019-12-11 09:09:53', '2019-12-11 09:09:53'),
(582, 5, 'What was Tereshkova\'s father?', 'Teacher', 'Farmer', 'Tractor driver', 'Clerk', 'c', '2019-12-11 09:11:15', '2019-12-11 09:11:15'),
(583, 5, 'When did Tereshkova began her school?', '1945', '1950', '1955', '1956', 'a', '2019-12-11 09:12:30', '2019-12-11 09:12:30'),
(584, 5, 'What is Mandela called by his friend adorely?', 'Madiba', 'Nelson', 'Nadine', 'Mandela', 'a', '2019-12-11 09:23:47', '2019-12-11 09:23:47'),
(585, 5, 'When did Chawla moved into United States?', '1983', '1985', '1988', '1982', 'c', '2019-12-11 09:25:11', '2019-12-11 09:25:11'),
(586, 5, 'When did Chawla joined NASA?', '1987', '1988', '1985', '1986', 'b', '2019-12-11 09:26:03', '2019-12-11 09:26:03'),
(587, 5, 'Which is the deadliest disease of the modern era?', 'cancer', 'tumour', 'maleria', 'pneumonia', 'a', '2019-12-11 09:27:39', '2019-12-11 09:27:39'),
(588, 5, 'Who is the leader of Harlem Renaissance?', 'Hughes', 'Wordsworth', 'Shakespeare', 'Keats', 'a', '2019-12-11 09:29:02', '2019-12-11 09:29:02'),
(589, 5, 'Who wrote \"The Luncheon\" ?', 'Somerset Maugham', 'Shakespeare', 'Keats', 'Wordsworth', 'a', '2019-12-11 09:30:52', '2019-12-11 09:30:52'),
(590, 5, 'How many stages are there for growth of children?', '4 - 5', '3 - 5', '2 -5', '3 - 5', 'a', '2019-12-11 09:32:19', '2019-12-11 09:32:19'),
(591, 5, 'what is the legal age of marriage for girls in Bangladesh?', '18', '20', '21', '22', 'a', '2019-12-11 09:33:37', '2019-12-11 09:33:37'),
(592, 5, 'What is the legal age of marriage for boys in Bangladesh?', '20', '21', '22', '23', 'b', '2019-12-11 09:34:26', '2019-12-11 09:34:26'),
(593, 5, 'When did Shilpi married?', '15', '16', '18', '19', 'a', '2019-12-11 09:35:33', '2019-12-11 09:35:33'),
(594, 5, 'Whom did Shilpi married?', 'Rahim', 'Karim', 'Rashid', 'Shamim', 'c', '2019-12-11 09:37:06', '2019-12-11 09:37:06'),
(595, 5, 'Who is the well known victim of World War-2?', 'Anne Frank', 'Ryan Hreljac', 'Dylan Mahalingam', 'Alex', 'a', '2019-12-11 09:41:54', '2019-12-11 09:41:54'),
(596, 5, 'How many project was completed by Ryan\'s well foundation?', '668', '666', '667', '663', 'c', '2019-12-11 09:43:18', '2019-12-11 09:43:18'),
(597, 5, 'When Anne Frank was given a Diary?', '13', '14', '14', '11', 'a', '2019-12-11 09:44:01', '2019-12-11 09:44:01'),
(598, 5, 'How many years did Anne Frank spent In hiding with her family?', '2', '3', '4', '5', 'a', '2019-12-11 09:50:58', '2019-12-11 09:50:58'),
(599, 5, 'When did Migration started from Bangladesh to Britten?', '1930', '1931', '1932', '1933', 'a', '2019-12-11 09:52:48', '2019-12-11 09:52:48'),
(600, 5, 'Who wrote  \"The Lake Isle of Innisfree\"?', 'Keats', 'Yeats', 'Wordsworth', 'Tennyson', 'b', '2019-12-11 09:54:02', '2019-12-11 09:54:02'),
(601, 5, 'When did The First Peace Movement appeared?', '1814 -1815', '1815 -1816', '1813 -1814', '1812 -1814', 'b', '2019-12-11 09:55:47', '2019-12-11 09:55:47'),
(602, 5, 'How many pounds did Elizabeth spent on summer frock & Set sail?', '10 pounds', '20 pounds', '30 pounds', '40 pounds', 'c', '2019-12-11 09:57:38', '2019-12-11 09:57:38'),
(603, 5, 'Who wrote the \"Gulliver\'s Travel?', 'Shakespeare', 'Wordsworth', 'Swift', 'Keats', 'c', '2019-12-11 09:58:57', '2019-12-11 09:58:57'),
(604, 5, 'Which is the most beloved  species on earth?', 'Panda', 'Monkey', 'Bird', 'Tiger', 'a', '2019-12-11 10:00:28', '2019-12-11 10:00:28'),
(605, 5, 'Which place is locally known as \"Sagor Kannya\"?', 'Kuakata', 'Cox\"s Bazar', 'Saint Martin', 'Meghna river', 'a', '2019-12-11 10:03:03', '2019-12-11 10:03:03'),
(606, 5, 'For whom Kuakata is a holy land?', 'Hindu', 'buddhist', 'Christian', 'a & b', 'd', '2019-12-11 10:05:00', '2019-12-11 10:05:00'),
(607, 5, 'What was Gazi Pir?', 'Muslim Saint', 'Hindu Priest', 'Christian  Deacon', 'Buddhist', 'a', '2019-12-11 10:07:50', '2019-12-11 10:07:50'),
(608, 5, 'Who is the son of Jupiter & Alcmena?', 'Hercules', 'Phaedra', 'Medea', 'Victoria', 'a', '2019-12-11 10:09:47', '2019-12-11 10:09:47'),
(609, 5, 'How many heads did Hydra had?', '9', '8', '7', '10', 'a', '2019-12-11 10:10:46', '2019-12-11 10:10:46'),
(610, 5, 'What was Hydra?', 'Monster', 'Saint', 'Giant', 'None of them', 'a', '2019-12-11 10:11:47', '2019-12-11 10:11:47'),
(611, 5, 'How many categories did Teritary education comprise?', '2', '3', '4', '5', 'a', '2019-12-11 10:15:20', '2019-12-11 10:15:20'),
(612, 5, 'How many universities were made in Bangladesh before independence?', '2', '3', '4', '5', 'c', '2019-12-11 10:16:44', '2019-12-11 10:16:44'),
(613, 5, 'When was Chawla got selected for her 2nd space mission?', '2000', '2001', '1998', '1997', 'a', '2019-12-11 10:30:58', '2019-12-11 10:30:58'),
(614, 5, 'For which space mission Chawla got selected?', 'STS 107', 'STS 106', 'STP 106', 'STP 107', 'a', '2019-12-11 10:33:11', '2019-12-11 10:33:11'),
(615, 5, 'When did Chawla started her new mission with six space crew?', '16 january, 2003', '17 january, 2002', '16 january ,2001', '17 february, 2000', 'a', '2019-12-11 10:36:25', '2019-12-11 10:36:25'),
(616, 5, 'How many people have mobile phone in the world?', '4.6 billion', '4 billion', '4.5 billion', '5.2 billion', 'a', '2019-12-11 10:40:21', '2019-12-11 10:40:21'),
(617, 5, 'When did personal computer became available to consumers?', '1973', '1974', '1975', '1976', 'b', '2019-12-11 10:42:45', '2019-12-11 10:42:45'),
(618, 5, 'What does UN stands for?', 'United Nations', 'United National', 'Unit Nation', 'United National', 'a', '2019-12-11 10:50:19', '2019-12-11 10:50:19'),
(619, 5, 'What does FAO stands for?', 'Food & Agriculture Organization', 'Farmer & Agriculture Organization', 'Food & Agricultural Organization', 'Farmer & Agricultural Organization', 'a', '2019-12-11 10:54:00', '2019-12-11 10:54:00'),
(620, 5, 'What percentage of the milk samples contained pesticide?', '60', '50', '40', '55', 'c', '2019-12-11 11:06:03', '2019-12-11 11:06:03'),
(621, 5, 'how many ministries are concerned with the food safety issue?', '10', '15', '14', '13', 'c', '2019-12-11 11:08:15', '2019-12-11 11:08:15'),
(622, 5, 'How many adolescents are in Bangladesh ?', '28 million', '30 million', '20 million', '19 million', 'a', '2019-12-11 11:11:24', '2019-12-11 11:11:24'),
(623, 5, 'how many girls adolescent in Bangladesh?', '13 million', '13.5 million', '13.6 million', '13.7 million', 'd', '2019-12-11 11:12:27', '2019-12-11 11:12:27'),
(624, 5, 'How many boys   adolescents in Bangladesh/', '14 million', '14.2 million', '14. 3 million', '14.4 million', 'c', '2019-12-11 11:14:18', '2019-12-11 11:14:18'),
(625, 5, 'What does NGO stands for?', 'Non Government Organization', 'Nation government organization', 'National Government Organization', 'None government Organization', 'a', '2019-12-11 11:18:13', '2019-12-11 11:18:13'),
(779, 23, 'Question', 'option1', 'option2', 'option3', 'option4', 'Correct Answer', '2019-12-12 03:20:22', '2019-12-12 03:20:22'),
(780, 23, 'What is the medium of production?', 'Industry', 'capital', 'land', 'organization', 'a', '2019-12-12 03:20:22', '2019-12-12 03:20:22'),
(781, 23, 'How many kinds os Trade?', '2', '3', '4', '5', 'a', '2019-12-12 03:20:22', '2019-12-12 03:20:22'),
(782, 23, 'Which word is \" Business\"?', 'English', 'French', 'Italic', 'Russian', 'a', '2019-12-12 03:20:22', '2019-12-12 03:20:22'),
(783, 23, 'Which is the initial work of Business?', 'Production', 'Sevices', 'Supply', 'Distribute', 'a', '2019-12-12 03:20:22', '2019-12-12 03:20:22'),
(784, 23, 'How many kinds of business environment?', '1', '2', '3', '4', 'b', '2019-12-12 03:20:22', '2019-12-12 03:20:22'),
(785, 23, 'How many kinds of Business according to ownership?', '4', '6', '7', '5', 'c', '2019-12-12 03:20:22', '2019-12-12 03:20:22'),
(786, 23, 'Where did 1st company Act passed?', 'England', 'America', 'Britten', 'Thailand', 'a', '2019-12-12 03:20:22', '2019-12-12 03:20:22'),
(787, 23, 'When did company Act passed in England?', '1844', '1845', '1842', '1846', 'a', '2019-12-12 03:20:22', '2019-12-12 03:20:22'),
(788, 23, 'Which is the most popular oldest business ?', 'sole proprietorship', 'partnership business', 'joint stock company', 'governtment state', 'a', '2019-12-12 03:20:22', '2019-12-12 03:20:22'),
(789, 23, 'Who supply capital in sole proprietorship  business?', 'Bank', 'owner', 'partner', 'money lander', 'b', '2019-12-12 03:20:22', '2019-12-12 03:20:22'),
(790, 23, 'Which Partnership business Act going on in Bangladesh?', '1930', '1935', '1932', '1934', 'c', '2019-12-12 03:20:22', '2019-12-12 03:20:22'),
(791, 23, 'How many members were there in partnership business?', '21', '20', '15', '16', 'b', '2019-12-12 03:20:22', '2019-12-12 03:20:22'),
(792, 23, 'How many members were there in Banking partnership business?', '15', '10', '12', '14', 'b', '2019-12-12 03:20:22', '2019-12-12 03:20:22'),
(793, 23, 'How many kinds of contractual relation?', '2', '3', '4', '5', 'b', '2019-12-12 03:20:22', '2019-12-12 03:20:22'),
(794, 23, 'What is  the base of partnership business?', 'Share', 'contractual relation', 'money', 'Belief', 'b', '2019-12-12 03:20:22', '2019-12-12 03:20:22'),
(795, 23, 'When did Industrial revolution occured in Europe?', '1750 -1850', '1780 -1850', '1850 -1950', '1650 -1750', 'a', '2019-12-12 03:20:22', '2019-12-12 03:20:22'),
(796, 23, 'How many members were there in private limited company?', '2 -50', '2 - 30', '2 - 40', '2 - 45', 'a', '2019-12-12 03:20:22', '2019-12-12 03:20:22'),
(797, 23, 'When did company act passed in India under British?', '1650', '1750', '1850', '1855', 'c', '2019-12-12 03:20:22', '2019-12-12 03:20:22'),
(798, 23, 'When did new company act passed in India', '1915', '1916', '1914', '1913', 'd', '2019-12-12 03:20:22', '2019-12-12 03:20:22'),
(799, 23, 'When did company   Act passed in Bangladesh?', '1994', '1993', '1992', '1996', 'a', '2019-12-12 03:20:22', '2019-12-12 03:20:22'),
(800, 23, 'When did The Joint Stock Company Act passed in Britten?', '1944', '1844', '1945', '1845', 'b', '2019-12-12 03:20:22', '2019-12-12 03:20:22'),
(801, 23, 'When did Dhaka Stock Exchange organized?', '1966', '1967', '165', '1964', 'd', '2019-12-12 03:20:22', '2019-12-12 03:20:22'),
(802, 23, 'When did Chittagong stock exchange organized?', '1990', '1995', '1965', '1960', 'b', '2019-12-12 03:20:22', '2019-12-12 03:20:22'),
(803, 23, 'When did Bengal co - operative federation organized in Calcutta?', '1915', '1916', '1917', '1918', 'd', '2019-12-12 03:20:22', '2019-12-12 03:20:22'),
(804, 23, 'When did International Co - operative Society started?', '1795', '1895', '1995', '1990', 'b', '2019-12-12 03:20:22', '2019-12-12 03:20:22'),
(805, 23, 'When did Co -operative Act passed in Subcontinent?', '1902', '1903', '1904', '1905', 'c', '2019-12-12 03:20:22', '2019-12-12 03:20:22'),
(806, 23, 'When did PARD organized?', '1956', '1957', '1958', '1959', 'd', '2019-12-12 03:20:22', '2019-12-12 03:20:22'),
(807, 23, 'Whose leadership did PARD organized?', 'Dr. Hamid Khan', 'King', 'Buchez', 'Plockboy', 'a', '2019-12-12 03:20:22', '2019-12-12 03:20:22'),
(808, 23, 'How many certified Co - operative society are in Bangladesh?', '1,76,442', '1,76,440', '1,75,440', '1,75,446', 'a', '2019-12-12 03:20:22', '2019-12-12 03:20:22'),
(809, 23, 'Which Co - operative Act going on in Bangladesh?', '2000', '2001', '2002', '2003', 'a', '2019-12-12 03:20:22', '2019-12-12 03:20:22'),
(810, 23, 'How many members were  there initial Co -operative society?', '10', '15', '20', '25', 'c', '2019-12-12 03:20:22', '2019-12-12 03:20:22'),
(811, 23, 'How many members were there in national co - operative society?', '20', '10', '15', '14', 'b', '2019-12-12 03:20:22', '2019-12-12 03:20:22'),
(812, 23, 'Which organization is called  \"The Citadel of the exploited\"?', 'Partnership Business', 'Joint stock company', 'Sole proprietorship', 'Co - operative society', 'd', '2019-12-12 03:20:22', '2019-12-12 03:20:22'),
(813, 23, '\"Unity is strength\"_ which organization\"s motto?', 'Co -operative society', 'partnership business', 'private limited company', 'public limited company', NULL, '2019-12-12 03:20:22', '2019-12-12 03:20:22'),
(814, 23, 'When did Bangladesh Chemical  Industries corporation organized in Bangladesh?', '1975', '1976', '1974', '1977', 'b', '2019-12-12 03:20:22', '2019-12-12 03:20:22'),
(815, 23, 'When did Bangladesh Parjatan Corporation organized?', '1971', '1972', '1973', '1974', 'c', '2019-12-12 03:20:22', '2019-12-12 03:20:22'),
(816, 23, 'How many  share of Government state were in hold of Government?', '50%', '51%', '52%', '53%', 'b', '2019-12-12 03:20:22', '2019-12-12 03:20:22'),
(817, 23, 'When did WASA organized?', '1963', '1964', '1965', '1966', 'a', '2019-12-12 03:20:22', '2019-12-12 03:20:22'),
(818, 23, 'When did PPP principles effective in Bangladesh?', '2006', '2007', '2009', '2010', 'd', '2019-12-12 03:20:22', '2019-12-12 03:20:22'),
(819, 23, 'When did Chemical Industrial organization organized  in Bangladesh?', '1975', '1976', '1977', '1974', 'b', '2019-12-12 03:20:22', '2019-12-12 03:20:22'),
(820, 23, 'What is the changing name of BTTB?', 'BTLC', 'BTCL', 'BCLT', 'BLTC', 'b', '2019-12-12 03:20:22', '2019-12-12 03:20:22'),
(821, 23, 'How many railway line going in Bangladesh?', '1', '2', '3', '4', 'b', '2019-12-12 03:20:22', '2019-12-12 03:20:22'),
(822, 23, 'Which Patent & Design Act on going in Bangladesh?', '1910', '1911', '1912', '1913', 'b', '2019-12-12 03:20:22', '2019-12-12 03:20:22'),
(823, 23, 'What is the period of Patent?', '10 years', '12 years', '14 years', '16 years', 'd', '2019-12-12 03:20:22', '2019-12-12 03:20:22'),
(824, 23, 'What is the period of patent in USA?', '15 years', '16 years', '17 years', '18 years', 'b', '2019-12-12 03:20:22', '2019-12-12 03:20:22'),
(825, 23, 'What is the period of Trademark?', '6 years', '7 years', '5 years', '4 years', 'b', '2019-12-12 03:20:22', '2019-12-12 03:20:22'),
(826, 23, 'When did Trademark Act passed in French?', '1854', '1856', '1857', '1858', 'c', '2019-12-12 03:20:22', '2019-12-12 03:20:22');
INSERT INTO `questions` (`id`, `subject_id`, `question`, `option1`, `option2`, `option3`, `option4`, `correct_ans`, `created_at`, `updated_at`) VALUES
(827, 23, 'When did Trademark Act passed in UK?', '1860', '1861', '1862', '1863', 'c', '2019-12-12 03:20:22', '2019-12-12 03:20:22'),
(828, 23, 'When did The Press Act passed in Britten?', '1660', '1661', '1662', '1663', 'c', '2019-12-12 03:20:22', '2019-12-12 03:20:22'),
(829, 23, 'Which copy right Act on going in Bangladesh?', '2000', '2005', '2006', '2009', 'a', '2019-12-12 03:20:22', '2019-12-12 03:20:22');

-- --------------------------------------------------------

--
-- Table structure for table `ranks`
--

CREATE TABLE `ranks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `subject_id` bigint(20) UNSIGNED NOT NULL,
  `test_id` bigint(20) UNSIGNED NOT NULL,
  `marks` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ranks`
--

INSERT INTO `ranks` (`id`, `subject_id`, `test_id`, `marks`, `created_at`, `updated_at`) VALUES
(1, 4, 2, 0, '2019-12-12 06:30:15', '2019-12-12 06:30:15'),
(2, 1, 2, 0, '2019-12-12 06:30:15', '2019-12-12 06:30:15'),
(3, 11, 2, 0, '2019-12-12 06:30:15', '2019-12-12 06:30:15'),
(4, 5, 2, 0, '2019-12-12 06:30:15', '2019-12-12 06:30:15'),
(5, 13, 2, 0, '2019-12-12 06:30:15', '2019-12-12 06:30:15'),
(6, 4, 3, 0, '2019-12-12 06:31:05', '2019-12-12 06:31:05'),
(7, 1, 3, 0, '2019-12-12 06:31:05', '2019-12-12 06:31:05'),
(8, 11, 3, 0, '2019-12-12 06:31:05', '2019-12-12 06:31:05'),
(9, 5, 3, 0, '2019-12-12 06:31:05', '2019-12-12 06:31:05'),
(10, 13, 3, 0, '2019-12-12 06:31:05', '2019-12-12 06:31:05'),
(11, 1, 3, 0, '2019-12-12 06:31:05', '2019-12-12 06:31:05'),
(12, 5, 3, 0, '2019-12-12 06:31:05', '2019-12-12 06:31:05');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dob` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `verified` tinyint(1) NOT NULL DEFAULT 0,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `name`, `email`, `username`, `password`, `phone`, `dob`, `gender`, `address`, `image`, `verified`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'John Little', 'tanvir59@outlook.com', 'tah', '$2y$10$9tBrHDtZ8vm9A4DtG8eJ9OufqLAJibOoKmAbLn2KdrFLoaU5LMDZe', '01631102838', '2000-03-28', 'male', 'Mirpur-11', 'tah.jpeg', 0, NULL, '2019-12-12 03:22:56', '2019-12-12 03:22:56');

-- --------------------------------------------------------

--
-- Table structure for table `subjects`
--

CREATE TABLE `subjects` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `logo` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `subjects`
--

INSERT INTO `subjects` (`id`, `name`, `slug`, `logo`, `created_at`, `updated_at`) VALUES
(1, 'Mathematics', 'Math', 'Math.jpeg', NULL, '2019-12-12 00:00:11'),
(2, 'Chemistry', 'Chemistry', 'Chemistry.jpeg', NULL, '2019-12-12 00:04:59'),
(3, 'Physics', 'Physics', 'Physics.jpeg', NULL, '2019-12-12 00:05:53'),
(4, 'Information Communication & Technology', 'ICT', 'ICT.jpeg', NULL, '2019-12-12 00:06:31'),
(5, 'English', 'English', 'English.jpeg', NULL, '2019-12-12 00:07:29'),
(7, 'Marketing', 'Marketing', 'Marketing.jpeg', NULL, '2019-12-12 00:08:31'),
(8, 'Finance', 'Finance', 'Finance.jpeg', NULL, '2019-12-12 00:09:13'),
(9, 'Management', 'Management', 'Management.jpeg', NULL, '2019-12-12 00:10:51'),
(10, 'Accounting', 'Accounting', 'Accounting.jpeg', NULL, '2019-12-12 00:12:12'),
(11, 'Biology', 'Biology', 'Biology.jpeg', NULL, '2019-12-12 00:13:02'),
(13, 'Agriculture', 'Agriculture', 'Agriculture.png', NULL, '2019-12-12 00:14:09'),
(14, 'Economics', 'Economics', 'Economics.jpeg', '2019-12-08 10:13:13', '2019-12-12 00:18:37'),
(23, 'Homo-Science', 'Homoscience', 'Homoscience.png', '2019-12-12 03:10:46', '2019-12-12 03:10:46');

-- --------------------------------------------------------

--
-- Table structure for table `tests`
--

CREATE TABLE `tests` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `student_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ans` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
  `marks` int(11) NOT NULL,
  `common` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
  `common_marks` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
  `time` time DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tests`
--

INSERT INTO `tests` (`id`, `student_id`, `ans`, `marks`, `common`, `common_marks`, `time`, `created_at`, `updated_at`) VALUES
(1, 1, NULL, 0, NULL, '0', NULL, '2019-12-12 06:28:29', '2019-12-12 06:28:29'),
(2, 1, NULL, 0, NULL, '0', NULL, '2019-12-12 06:30:15', '2019-12-12 06:30:15'),
(3, 1, NULL, 0, NULL, '0', NULL, '2019-12-12 06:31:05', '2019-12-12 06:31:05');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `activities`
--
ALTER TABLE `activities`
  ADD PRIMARY KEY (`id`),
  ADD KEY `activities_student_id_foreign` (`student_id`);

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_email_unique` (`email`),
  ADD UNIQUE KEY `admins_username_unique` (`username`);

--
-- Indexes for table `commons`
--
ALTER TABLE `commons`
  ADD PRIMARY KEY (`id`),
  ADD KEY `commons_subject_id_foreign` (`subject_id`);

--
-- Indexes for table `departments`
--
ALTER TABLE `departments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `departments_subject_id_foreign` (`subject_id`);

--
-- Indexes for table `department_student`
--
ALTER TABLE `department_student`
  ADD PRIMARY KEY (`id`),
  ADD KEY `department_student_student_id_foreign` (`student_id`),
  ADD KEY `department_student_department_id_foreign` (`department_id`);

--
-- Indexes for table `exams`
--
ALTER TABLE `exams`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `questions_subject_id_foreign` (`subject_id`);

--
-- Indexes for table `ranks`
--
ALTER TABLE `ranks`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ranks_subject_id_foreign` (`subject_id`),
  ADD KEY `ranks_test_id_foreign` (`test_id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `students_email_unique` (`email`),
  ADD UNIQUE KEY `students_username_unique` (`username`);

--
-- Indexes for table `subjects`
--
ALTER TABLE `subjects`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `subjects_name_unique` (`name`);

--
-- Indexes for table `tests`
--
ALTER TABLE `tests`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tests_student_id_foreign` (`student_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `activities`
--
ALTER TABLE `activities`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `commons`
--
ALTER TABLE `commons`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `departments`
--
ALTER TABLE `departments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `department_student`
--
ALTER TABLE `department_student`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `exams`
--
ALTER TABLE `exams`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=830;

--
-- AUTO_INCREMENT for table `ranks`
--
ALTER TABLE `ranks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `subjects`
--
ALTER TABLE `subjects`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `tests`
--
ALTER TABLE `tests`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `activities`
--
ALTER TABLE `activities`
  ADD CONSTRAINT `activities_student_id_foreign` FOREIGN KEY (`student_id`) REFERENCES `students` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `commons`
--
ALTER TABLE `commons`
  ADD CONSTRAINT `commons_subject_id_foreign` FOREIGN KEY (`subject_id`) REFERENCES `subjects` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `departments`
--
ALTER TABLE `departments`
  ADD CONSTRAINT `departments_subject_id_foreign` FOREIGN KEY (`subject_id`) REFERENCES `subjects` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `department_student`
--
ALTER TABLE `department_student`
  ADD CONSTRAINT `department_student_department_id_foreign` FOREIGN KEY (`department_id`) REFERENCES `departments` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `department_student_student_id_foreign` FOREIGN KEY (`student_id`) REFERENCES `students` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `questions`
--
ALTER TABLE `questions`
  ADD CONSTRAINT `questions_subject_id_foreign` FOREIGN KEY (`subject_id`) REFERENCES `subjects` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `ranks`
--
ALTER TABLE `ranks`
  ADD CONSTRAINT `ranks_subject_id_foreign` FOREIGN KEY (`subject_id`) REFERENCES `subjects` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `ranks_test_id_foreign` FOREIGN KEY (`test_id`) REFERENCES `tests` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tests`
--
ALTER TABLE `tests`
  ADD CONSTRAINT `tests_student_id_foreign` FOREIGN KEY (`student_id`) REFERENCES `students` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
