<?php

class ControllerScores_spian extends ControllerTwig {
    public static function allScores() {
        $loader = new Twig\Loader\FilesystemLoader('./views');
        $twig = ControllerTwig::twigControl();
        $manager = new ModelScores_spian();
        $score = $manager->humain_scores($manager);
         echo $twig->render('templates\homepage.twig'); 
    }
    // public static function allScore() {
    //     $loader = new Twig\Loader\FilesystemLoader('./views');
    //     $twig = ControllerTwig::twigControl();
    //     $manager = new ModelScores();
    //     $scores = $manager->humain_scores($id);
    //     echo $twig->render('templates\allScores.twig', ['humain_score' => $score]); 
    // }
}