<?php

namespace PeliculasBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="home")
     */
    public function indexAction()
    {
        return $this->render('PeliculasBundle:Default:index.html.twig');
    }
    /**
     * @Route("/alquilerp")
     */
    public function alquilerPAction()
    {
        return $this->render('PeliculasBundle:Default:alquilerp.html.twig');
    }
    /**
     * @Route("/alquilerl")
     */
    public function alquilerLAction()
    {
        return $this->render('PeliculasBundle:Default:alquilerl.html.twig');
    }
    /**
     * @Route("/insertarp")
     */
    public function insertarPAction()
    {
        return $this->render('PeliculasBundle:Default:insertarp.html.twig');
    }
    /**
     * @Route("/insertarl")
     */
    public function insertarLAction()
    {
        return $this->render('PeliculasBundle:Default:insertarl.html.twig');
    }
    /**
     * @Route("/peliculas", name="peliculas")
     */
    public function peliculasAction()
    {
        return $this->render('PeliculasBundle:Default:peliculas.html.twig');
    }
    /**
     * @Route("/libros", name="libros")
     */
    public function librosAction()
    {
        return $this->render('PeliculasBundle:Default:libros.html.twig');
    }
    /**
     * @Route("/registro", name="registro")
     */
    public function registroAction()
    {
        return $this->render('PeliculasBundle:Default:registro.html.twig');
    }
    /**
     * @Route("/login", name="login")
     */
    public function loginAction()
    {
        return $this->render('PeliculasBundle:Default:login.html.twig');
    }
    /**
     * @Route("/contacto", name="contacto")
     */
    public function contactoAction()
    {
        return $this->render('PeliculasBundle:Default:contacto.html.twig');
    }
}
