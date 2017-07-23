<?php

namespace AppBundle\Controller;

use AppBundle\Document\Movement;
use AppBundle\Document\Sound;
use AppBundle\Entity\ArduinoDevice;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Document\Temperature;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('default/index.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.root_dir').'/..').DIRECTORY_SEPARATOR,
        ]);
    }

    /**
     * @Route("/temp", name="temperature")
     */
    public function temperatureAction(Request $request)
    {
        $temperature = new Temperature();
        $name = $request->query->get('name');
        $accessKey = $request->query->get('key');
        $celsius = $request->query->get('temp');
        $humidity = $request->query->get('humidity');
        $realFeel = $request->query->get('real');

        $arduinoRepo = $this->getDoctrine()->getRepository(ArduinoDevice::class);
        $device = $arduinoRepo->findOneBy([
            'name'  => $name,
        ]);
        if (empty($device)) {
            return new Response("No device registered with this name!");
        }
        if (!$device->isAccessKey($accessKey)) {
            return new Response("Wrong access keys!");
        }
        $temperature->setArduinoName($name)
            ->setTime(time())
            ->setTemperature($celsius)
            ->setHumidity($humidity)
            ->setFeeledTemperature($realFeel);

        $dm = $this->get('doctrine_mongodb')->getManager();
        $dm->persist($temperature);
        $dm->flush();

        return new Response("OK");
    }

    /**
     * @Route("/moving", name="moving")
     */
    public function movementAction(Request $request)
    {
        $movement = new Movement();
        $name = $request->query->get('name');
        $accessKey = $request->query->get('key');
        $move = $request->query->get('movement');

        $arduinoRepo = $this->getDoctrine()->getRepository(ArduinoDevice::class);
        $device = $arduinoRepo->findOneBy([
            'name'  => $name,
        ]);
        if (empty($device)) {
            return new Response("No device registered with this name!");
        }
        if (!$device->isAccessKey($accessKey)) {
            return new Response("Wrong access keys!");
        }
        $movement->setArduinoName($name)
            ->setTime(time())
            ->setMovement($move);

        $dm = $this->get('doctrine_mongodb')->getManager();
        $dm->persist($movement);
        $dm->flush();

        return new Response("OK");
    }

    /**
     * @Route("/sound", name="movement")
     */
    public function soundAction(Request $request)
    {
        $sound = new Sound();
        $name = $request->query->get('name');
        $accessKey = $request->query->get('key');
        $s = $request->query->get('sound');

        $arduinoRepo = $this->getDoctrine()->getRepository(ArduinoDevice::class);
        $device = $arduinoRepo->findOneBy([
            'name'  => $name,
        ]);
        if (empty($device)) {
            return new Response("No device registered with this name!");
        }
        if (!$device->isAccessKey($accessKey)) {
            return new Response("Wrong access keys!");
        }
        $sound->setArduinoName($name)
            ->setTime(time())
            ->setSound($sound);

        $dm = $this->get('doctrine_mongodb')->getManager();
        $dm->persist($sound);
        $dm->flush();

        return new Response("OK");
    }

    /**
     * @Route("/data/{id}", name="arduino_data")
     */
    public function dataAction($id)
    {
        $arduinoDeviceRepo = $this->getDoctrine()->getRepository(ArduinoDevice::class);
        $device = $arduinoDeviceRepo->find($id);
        $name = $device->getName();
        $mongo = $this->get('doctrine_mongodb')->getManager();
        $temperatures = $mongo->createQueryBuilder('AppBundle:Temperature')
            ->field('arduinoName')->equals($name)
            ->sort('time', 'DESC')
            ->limit(200)
            ->getQuery()
            ->execute();

        $movements = $mongo->createQueryBuilder('AppBundle:Movement')
            ->field('arduinoName')->equals($name)
            ->sort('time', 'DESC')
            ->limit(100)
            ->getQuery()
            ->execute();

        $sounds = $mongo->createQueryBuilder('AppBundle:Sound')
            ->field('arduinoName')->equals($name)
            ->sort('time', 'DESC')
            ->limit(100)
            ->getQuery()
            ->execute();

        $sounds = iterator_to_array($sounds);
        $temperatures = iterator_to_array($temperatures);
        $movements = iterator_to_array($movements);

        $sound = reset($sounds);
        $movement = reset($movements);

        return $this->render('data/data.html.twig',
            [
                'name'          => $name,
                'temperatures'  => $temperatures,
                'sounds'        => $sounds,
                'sound'         => $sound,
                'movement'      => $movement,
                'movements'     => $movements,
            ]);
    }
}
