<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;

class QuestionController extends Controller
{
	/**
     * @Route("/", name="home")
     * @Method("GET")
     */
    public function showIndex()
    {
        $question = $this->getDoctrine()->getRepository("AppBundle:Question")->findBy(['answered' => 0]);
        $allAnswered = $this->getDoctrine()->getRepository("AppBundle:Question")->findByNot('answered', 0);
        if (count($allAnswered) >= 10) {
        	$allCorrectAnswers = 0;
        	foreach ($allAnswered as $answer) {
        		if ($answer->getRightanswer() == $answer->getAnswered()) {
        			$allCorrectAnswers++;
        		}
        	}
	        return $this->render('question/endgame.html.twig', ['correctAnswers' => $allCorrectAnswers]);
        }
        shuffle($question);
        if (!empty($question[0])) {
        	$question = $question[0];
        } else {
        	$question = null;
        }

        return $this->render('question/index.html.twig', ['question' => $question]);
    }

    /**
     * @Route("/questions/answer/{id_question}", name="answer_to_the_question")
     * @Method("POST")
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\JsonResponse|Response
     */
    public function manageAnswer(Request $request, $id_question)
    {
        $req = $request->request->all();
        if (!empty($req) && isset($req['submitanswer'])) {
            $em = $this->getDoctrine()->getManager();
            $question = $em->getRepository('AppBundle:Question')->find($id_question);
            if (!$question) {
                throw $this->createNotFoundException('No answer found for id ' . $id_question);
            }
            $question->setAnswered($req['answer']);
            $em->flush();
            if ($question->getRightanswer() == $question->getAnswered()) {
            	$correctly = true;
            } else {
            	$correctly = false;
            }
            $answerID = $question->getRightanswer();
            switch ($answerID) {
            	case 1:
            		$rightAnswer = $question->getAnswer1();
            		break;
            	case 2:
            		$rightAnswer = $question->getAnswer2();
            		break;
            	case 3:
            		$rightAnswer = $question->getAnswer3();
            		break;
            	default:
	                throw $this->createNotFoundException('No such answer');
            		break;
            }
            return $this->render('question/answer.html.twig', ['correct' => $correctly, 'rightAnswer' => $rightAnswer]);
        }
        return new Response("Required Params Missing!");
    }

    /**
     * @Route("/restart", name="restart")
     * @Method("GET")
     */
    public function showRestart()
    {
    	$em = $this->getDoctrine()->getManager();
        $allAnswered = $this->getDoctrine()->getRepository("AppBundle:Question")->findByNot('answered', 0);
        if (count($allAnswered) >= 10) {
        	$allCorrectAnswers = 0;
        	foreach ($allAnswered as $answer) {
        		$question = $em->getRepository('AppBundle:Question')->find($answer->getId());
        		if (!$question) {
	                throw $this->createNotFoundException('No question found for id ' . $answer->getId());
	            }
	            $question->setAnswered(0);
        	}
        	$em->flush();
        }
        return $this->redirectToRoute('home');
    }

    /**
     * @Route("/cc", name="settings")
     */
    public function showIndex2()
    {
        $question = $this->getDoctrine()->getRepository("AppBundle:Question")->findBy(['answered' => 0]);
        // $allAnswered = $this->getDoctrine()->getRepository("AppBundle:Question")->findByNot('answered', 0);
        // if (count($allAnswered) >= 10) {
	       //  return $this->render('question/endgame.html.twig');
        // }
        shuffle($question);
        if (!empty($question[0])) {
        	$question = $question[0];
        } else {
        	$question = null;
        }

        return $this->render('question/index.html.twig', ["question" => $question]);
    }
}
