<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;

class QuestionController extends Controller
{
	/**
     * @Route("/", name="home")
     * @Method("GET")
     */
    public function showAction()
    {
    	$loadSettings = $this->getDoctrine()->getRepository('AppBundle:Setting')->find(1);
    	if (empty($loadSettings)) {
    		return $this->redirectToRoute('setdefault');
    	}

        $question = $this->getDoctrine()->getRepository('AppBundle:Question')->findBy(['answered' => 0]);
        $allAnswered = $this->getDoctrine()->getRepository('AppBundle:Question')->findByNot('answered', 0);
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

        $multichoice = $loadSettings->getMultichoice();
        if (empty($multichoice)) {
        	$randomAnswer = rand(1,3);
        	$loadRanAnswer = $this->loadAnswer($question, $randomAnswer);
        	while(in_array(($fakeAnswer = rand(1,3)), array($question->getRightanswer())));
        	if ($randomAnswer == $question->getRightanswer()) {
        		$yes = true;
        	} else {
        		$yes = false;
        	}
        } else {
        	$randomAnswer = 0;
        	$loadRanAnswer = '';
        	$fakeAnswer = 0;
        	$yes = false;
        }
        return $this->render('question/index.html.twig',
        	['question' => $question,
        	'multichoice' => $multichoice,
        	'ranAnswer' => $loadRanAnswer,
        	'ranAnswerNum' => $randomAnswer,
        	'fake' => $fakeAnswer,
        	'yes' => $yes]);
    }

    /**
     * @Route("/questions/answer/{id_question}", name="answer_to_the_question")
     * @Method("POST")
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function answerAction(Request $request, $id_question)
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
            $rightAnswer = $this->loadAnswer($question, $answerID);
            return $this->render('question/answer.html.twig', ['correct' => $correctly, 'rightAnswer' => $rightAnswer]);
        }
        return new Response("Required Params Missing!");
    }

    /**
     * @Route("/restart", name="restart")
     * @Method("GET")
     */
    public function restartAction()
    {
    	$loadSettings = $this->getDoctrine()->getRepository('AppBundle:Setting')->find(1);
    	if (empty($loadSettings)) {
    		return $this->redirectToRoute('setdefault');
    	}
    	$em = $this->getDoctrine()->getManager();
        $allAnswered = $this->getDoctrine()->getRepository("AppBundle:Question")->findByNot('answered', 0);
    	$allCorrectAnswers = 0;
    	foreach ($allAnswered as $answer) {
    		$question = $em->getRepository('AppBundle:Question')->find($answer->getId());
    		if (!$question) {
                throw $this->createNotFoundException('No question found for id ' . $answer->getId());
            }
            $question->setAnswered(0);
    	}
    	$em->flush();
        return $this->redirectToRoute('home');
    }

    protected function loadAnswer($question, $number)
    {
    	switch ($number) {
        	case 1:
        		return $question->getAnswer1();
        	case 2:
        		return $question->getAnswer2();
        	case 3:
        		return $question->getAnswer3();
        	default:
                throw $this->createNotFoundException('No such answer');
        }
    }
}