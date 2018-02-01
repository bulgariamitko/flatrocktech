<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Entity\Setting;

class SettingController extends Controller
{
    /**
     * @Route("/settings", name="settings")
     * @Method("GET")
     */
    public function settingAction()
    {
    	$loadSettings = $this->getDoctrine()->getRepository('AppBundle:Setting')->find(1);
    	if (empty($loadSettings)) {
    		return $this->redirectToRoute('setdefault');
    	}
        return $this->render('AppBundle:Setting:setting.html.twig', ['setting' => $loadSettings->getMultichoice()]);
    }

    /**
     * @Route("/settings/change", name="changesettings")
     * @Method("POST")
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function answerAction(Request $request)
    {
        $req = $request->request->all();

        if (!empty($req) && isset($req['newsetting'])) {
            $em = $this->getDoctrine()->getManager();
            $setting = $em->getRepository('AppBundle:Setting')->find(1);
            if (!$setting) {
                throw $this->createNotFoundException('No setting found with an id of 1');
            }
            $setting->setMultichoice($req['setting']);
            $em->flush();

            return $this->redirectToRoute('restart');
        }
        return new Response("Required Params Missing!");
    }

    /**
     * @Route("/settings/setdefault", name="setdefault")
     * @Method("GET")
     */
    public function setDefaultAction()
    {
		$setting = new Setting();
        $setting->setMultichoice(1);
        $em = $this->getDoctrine()->getManager();
        $em->persist($setting);
        $em->flush();
    	return $this->redirectToRoute('home');
    }
}