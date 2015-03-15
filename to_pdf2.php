<?php



require('fpdf.php');

$pdf = new FPDF();
$pdf->AddPage("P", "A4");
$pdf->AddFont('Le-patin-helvete','','Le-patin-helvete.php');
$pdf->AddFont('Le-patin-helvete-italic','','Le-patin-helvete-italic.php');


$pdf->SetFont('Le-patin-helvete','',16);
//Titre
$pdf->MultiCell(0,10,"Curriculum vitae");

$pdf->SetFont('Le-patin-helvete','',16);
$pdf->MultiCell(0,5,"");
//Nom - Prénom
$pdf->MultiCell(0,10,$_POST['name']." ".utf8_decode($_POST['prenom']));
$pdf->MultiCell(0,3,"");


$pdf->SetFont('Le-patin-helvete-italic','',11);
//Date de naissance
$pdf->MultiCell(60,2, utf8_decode('née le').' '.$_POST['jour']." ".utf8_decode($_POST['mois'])." ".$_POST['annee']);
//Lieu de naissance
$pdf->MultiCell(40,10,'en '.utf8_decode($_POST['lieu']));
//âge
if($_POST['age']){
$pdf->MultiCell(40,2,$_POST['age'].' '.'ans');
}
//adresse
if($_POST['adresse']){
$pdf->MultiCell(100,10,utf8_decode($_POST['adresse']));
}
if($_POST['code_postal']){
$pdf->MultiCell(40,2,$_POST['code_postal']." ".utf8_decode($_POST['ville']));
}
if($_POST['telephone']){
$pdf->MultiCell(40,10,$_POST['telephone']);
}
$pdf->MultiCell(100,10,"Vit en France depuis"." ".$_POST['vit']);
if($_POST['permis']){
$pdf->MultiCell(40,10,$_POST['permis']);
}
if($_POST['permisc']){
$pdf->MultiCell(40,10,$_POST['permisc']);
}

$pdf->SetFont('Le-patin-helvete-italic','U',11);

$pdf->MultiCell(40,3,"");

//OBJECTIFS
$pdf->MultiCell(40,10,"Objectifs");

$pdf->SetFont('Le-patin-helvete','',11);
if($_POST['apprendre'] && $_POST['parler']){
$pdf->MultiCell(0,5,utf8_decode($_POST['apprendre'])." ".utf8_decode($_POST['parler']));
}
if($_POST['apprendre'] && $_POST['ecrire']){
$pdf->MultiCell(0,5,utf8_decode($_POST['apprendre'])." ".utf8_decode($_POST['ecrire']));
}
if($_POST['formation'] && utf8_decode($_POST['verts'])){
$pdf->MultiCell(150,5,utf8_decode($_POST['formation'])." ".utf8_decode($_POST['verts']));
}
if($_POST['formation'] && utf8_decode($_POST['chauffeur'])){
$pdf->MultiCell(150,5,utf8_decode($_POST['formation'])." ".utf8_decode($_POST['chauffeur']));
}
if($_POST['formation'] && utf8_decode($_POST['gardien'])){
$pdf->MultiCell(150,5,utf8_decode($_POST['formation'])." ".utf8_decode($_POST['gardien']));
}
if($_POST['formation'] && utf8_decode($_POST['mecanique'])){
$pdf->MultiCell(150,5,utf8_decode($_POST['formation'])." ".utf8_decode($_POST['mecanique']));
}
if($_POST['formation'] && utf8_decode($_POST['batiment'])){
$pdf->MultiCell(150,5,utf8_decode($_POST['formation'])." ".utf8_decode($_POST['batiment']));
}
if($_POST['formation'] && utf8_decode($_POST['restauration'])){
$pdf->MultiCell(150,5,utf8_decode($_POST['formation'])." ".utf8_decode($_POST['restauration']));
}
if($_POST['formation'] && utf8_decode($_POST['vente'])){
$pdf->MultiCell(150,5,utf8_decode($_POST['formation'])." ".utf8_decode($_POST['vente']));
}
if($_POST['formation'] && utf8_decode($_POST['aide'])){
$pdf->MultiCell(150,5,utf8_decode($_POST['formation'])." ".utf8_decode($_POST['aide']));
}
if($_POST['formation'] && utf8_decode($_POST['enfant'])){
$pdf->MultiCell(150,5,utf8_decode($_POST['formation'])." ".utf8_decode($_POST['enfant']));
}
if($_POST['formation'] && utf8_decode($_POST['hotellerie'])){
$pdf->MultiCell(150,5,utf8_decode($_POST['formation'])." ".utf8_decode($_POST['hotellerie']));
}
if($_POST['formation'] && utf8_decode($_POST['restauration'])){
$pdf->MultiCell(150,5,utf8_decode($_POST['formation'])." ".utf8_decode($_POST['restauration']));
}
if($_POST['formation'] && utf8_decode($_POST['menage'])){
$pdf->MultiCell(150,5,utf8_decode($_POST['formation'])." ".utf8_decode($_POST['menage']));
}
if($_POST['formation'] && utf8_decode($_POST['objectif_autre1'])){
$pdf->MultiCell(150,5,utf8_decode($_POST['formation'])." ".utf8_decode($_POST['objectif_autre1']));
}

if(($_POST['velo'])){
$pdf->MultiCell(150,5,utf8_decode($_POST['velo']));
}
if(($_POST['permisb'])){
$pdf->MultiCell(150,5,utf8_decode($_POST['permisb']));
}
if(($_POST['permisc_ob'])){
$pdf->MultiCell(150,5,utf8_decode($_POST['permisc_ob']));
}
if($_POST['objectif_autre2']){
$pdf->MultiCell(150,5,utf8_decode($_POST['objectif_autre2']));
}

//saut de ligne
$pdf->MultiCell(40,7, "");
//EXP PRO
$pdf->SetFont('Le-patin-helvete-italic','U',11);
$pdf->MultiCell(100,10,utf8_decode("Expériences Professionnelles"));

$pdf->SetFont('Le-patin-helvete','',11);
if($_POST['chauffeur_exp']){
$pdf->MultiCell(0,5,$_POST['chauffeur_exp']." ".utf8_decode("à")." ".utf8_decode($_POST['nom_entreprise']));
}
if($_POST['batiment_exp']){
$pdf->MultiCell(70,7,utf8_decode($_POST['batiment_exp']));
}
$pdf->SetFont('Le-patin-helvete','',10);
$pdf->SetX(20);
if($_POST['peinture_exp']){
$pdf->MultiCell(70,5,$_POST['peinture_exp']);
}
$pdf->SetX(20);
if($_POST['carrelage_exp']){
$pdf->MultiCell(70,5,$_POST['carrelage_exp']);
}
$pdf->SetX(20);
if($_POST['menuiserie_exp']){
$pdf->MultiCell(70,5,$_POST['menuiserie_exp']);
}
$pdf->SetX(20);
if($_POST['beton_exp']){
$pdf->MultiCell(70,5,utf8_decode($_POST['beton_exp']));
}

if($_POST['elect_exp']){
$pdf->MultiCell(70,5,utf8_decode($_POST['elect_exp']));
}
$pdf->SetX(10);
$pdf->SetFont('Le-patin-helvete','',11);
if($_POST['menage_exp']){
$pdf->MultiCell(70,5,utf8_decode($_POST['menage_exp']));
}
if($_POST['agri_exp']){
$pdf->MultiCell(70,5,$_POST['agri_exp']);
}
if($_POST['bucheron_exp']){
$pdf->MultiCell(70,5,utf8_decode($_POST['bucheron_exp']));
}
if($_POST['chaine_exp']){
$pdf->MultiCell(70,5,utf8_decode($_POST['chaine_exp']));
}
if($_POST['exp_pro']){
$pdf->MultiCell(100,5,utf8_decode($_POST['exp_pro']));
}
$pdf->MultiCell(40,7, "");
//FORMATION
$pdf->SetFont('Le-patin-helvete-italic','U',11);
$pdf->MultiCell(100,10,"Formation");

$pdf->SetFont('Le-patin-helvete','',11);

$pdf->MultiCell(100,5,utf8_decode("École en Roumanie pendant")." ".$_POST['ecole_rom']);
if($_POST['ecole_fr']){
$pdf->MultiCell(70,5,utf8_decode($_POST['ecole_fr'])." ".$_POST['ecole_fr_op']);
}

$pdf->MultiCell(40,5, "");
//COMPETENCES
$pdf->SetFont('Le-patin-helvete-italic','U',11);
$pdf->MultiCell(100,10,utf8_decode("Compétences"));

$pdf->SetFont('Le-patin-helvete','',11);
if($_POST['langue_rom']){
$pdf->MultiCell(100,5,"Langue Roumaine"." ".utf8_decode($_POST['langue_rom']));
}
if($_POST['france']){
$pdf->MultiCell(100,5,utf8_decode($_POST['france'])." ".utf8_decode($_POST['langue_fr']));
}
if($_POST['langue_en']){
$pdf->MultiCell(100,5,$_POST['langue_en']);
}
if($_POST['langue_es']){
$pdf->MultiCell(100,5,$_POST['langue_es']);
}
if($_POST['langue_it']){
$pdf->MultiCell(100,5,$_POST['langue_it']);
}

if($_POST['informatique']){
$pdf->MultiCell(70,5,utf8_decode($_POST['informatique']));
}
$pdf->SetFont('Le-patin-helvete','',10);
$pdf->SetX(20);
if($_POST['mails']){
$pdf->MultiCell(70,5,$_POST['mails']);
}
$pdf->SetX(20);
if($_POST['office']){
$pdf->MultiCell(70,5,$_POST['office']);
}
if($_POST['info_autre']){
$pdf->MultiCell(70,5,$_POST['info_autre']);
}

$pdf->MultiCell(40,7, "");
//CENTRES INTERETS
$pdf->SetFont('Le-patin-helvete-italic','U',11);
$pdf->MultiCell(100,10,utf8_decode("Centres d'intérêts"));

$pdf->SetFont('Le-patin-helvete','',11);

if($_POST['musique']){
$pdf->MultiCell(70,5,$_POST['musique']);
}
if($_POST['sport']){
$pdf->MultiCell(70,5,$_POST['sport']);
}
if($_POST['voiture']){
$pdf->MultiCell(70,5,$_POST['voiture']);
}
if($_POST['balade']){
$pdf->MultiCell(70,5,$_POST['balade']);
}
if($_POST['couture']){
$pdf->MultiCell(70,5,$_POST['couture']);
}
if($_POST['tricot']){
$pdf->MultiCell(70,5,$_POST['tricot']);
}
if($_POST['garde']){
$pdf->MultiCell(70,5,$_POST['garde']);
}
if($_POST['cuisine']){
$pdf->MultiCell(70,5,$_POST['cuisine']);
}
if($_POST['lecture']){
$pdf->MultiCell(70,5,$_POST['lecture']);
}
if($_POST['voyage']){
$pdf->MultiCell(70,5,$_POST['voyage']);
}
$pdf->MultiCell(40,7, "");
//ATOUTS
$pdf->SetFont('Le-patin-helvete-italic','U',11);
$pdf->MultiCell(100,10,"Atouts");

$pdf->SetFont('Le-patin-helvete','',11);
if($_POST['courageux']){
$pdf->MultiCell(0,5,$_POST['courageux']);
}
if($_POST['dynamique']){
$pdf->MultiCell(0,5,utf8_decode($_POST['dynamique']));
}
if($_POST['jeune']){
$pdf->MultiCell(0,5,utf8_decode($_POST['jeune']));
}
if($_POST['serieux']){
$pdf->MultiCell(0,5,utf8_decode($_POST['serieux']));
}
if($_POST['equipe']){
$pdf->MultiCell(0,5,utf8_decode($_POST['equipe']));
}
if($_POST['patient']){
$pdf->MultiCell(0,5,$_POST['patient']);
}
if($_POST['ponctuel']){
$pdf->MultiCell(0,5,$_POST['ponctuel']);
}
if($_POST['investir']){
$pdf->MultiCell(0,5,utf8_decode($_POST['investir']));
}


$pdf->Output(); 

?>