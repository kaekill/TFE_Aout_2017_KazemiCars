<?php

namespace KZC\UsersBundle\Form\Handler;

use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\RouterInterface;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\Security\Core\Authentication\Token\TokenInterface;
use Symfony\Component\Security\Core\Exception\AuthenticationException;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Http\Authentication\AuthenticationSuccessHandlerInterface;
use Symfony\Component\Security\Http\Authentication\AuthenticationFailureHandlerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class AuthenticationHandler extends Controller implements AuthenticationSuccessHandlerInterface, AuthenticationFailureHandlerInterface{
    private $router;
    private $session;
    public $container;
    private static $key;

    /**
     * Constructor
     *
     * @author 	Joe Sexton <joe@webtipblog.com>
     * @param 	RouterInterface $router
     * @param 	Session $session
     */
    public function __construct( RouterInterface $router, Session $session, $container ){
        self::$key = '_security.main.target_path';
        $this->router  = $router;
        $this->session = $session;
        $this->container = $container;
    }

    /**
     * onAuthenticationSuccess
     *
     * @author 	Joe Sexton <joe@webtipblog.com>
     * @param 	Request $request
     * @param 	TokenInterface $token
     * @return 	Response
     */
    public function onAuthenticationSuccess( Request $request, TokenInterface $token )
    {
        // if AJAX login
        if ( $request->isXmlHttpRequest() ) {
            $redirect = '';
            if ($this->session->has( self::$key )) {
                $redirect = $this->session->get( self::$key );  //set the url based on the link they were trying to access before being authenticated
                $this->session->remove( self::$key );   //remove the session key
            }else{
                $redirect = $this->router->generate( 'homepage' ); //if the referrer key was never set, redirect to a default route
            }

            $response = array(    // data to return via JSON
                'success' => true,
                'redirect' => $redirect,
                'action' => 'login'
            );

            return new JsonResponse($response);
        } else {

            if ($this->session->has( self::$key )) {
                $redirect = $this->session->get( self::$key );  //set the url based on the link they were trying to access before being authenticated
                $this->session->remove( self::$key );   //remove the session key
            } else {
                $redirect = $this->router->generate( 'homepage' ); //if the referrer key was never set, redirect to a default route
            }

            return $this->redirect( $redirect );
        }
    }

    /**
     * onAuthenticationFailure
     *
     * @author 	Joe Sexton <joe@webtipblog.com>
     * @param 	Request $request
     * @param 	AuthenticationException $exception
     * @return 	Response
     */
    public function onAuthenticationFailure( Request $request, AuthenticationException $exception )
    {
        // if AJAX login
        if ( $request->isXmlHttpRequest() ) {

            $response = new Response( json_encode( array(   // data to return via JSON
                'success' => false,
                'error' => $exception->getMessage(),
                'action' => 'login'
            )));

            $response->headers->set( 'Content-Type', 'application/json' );

            return $response;

        }
    }
}
