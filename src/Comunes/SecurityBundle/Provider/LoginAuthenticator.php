<?php

namespace Comunes\SecurityBundle\Provider;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\Security\Core\Authentication\SimpleFormAuthenticatorInterface;
use Symfony\Component\Security\Core\Authentication\Token\TokenInterface;
use Symfony\Component\Security\Core\Authentication\Token\UsernamePasswordToken;
use Symfony\Component\Security\Core\Encoder\EncoderFactoryInterface;
use Symfony\Component\Security\Core\Exception\AuthenticationException;
use Symfony\Component\Security\Core\Exception\UsernameNotFoundException;
use Symfony\Component\Security\Core\User\UserProviderInterface;
use Gregwar\CaptchaBundle\Validator\CaptchaValidator;


class LoginAuthenticator extends CaptchaValidator implements SimpleFormAuthenticatorInterface
{
    private $encoderFactory;
    private $session;

    public function __construct(EncoderFactoryInterface $encoderFactory, Session $session)
    {
        $this->encoderFactory = $encoderFactory;
        $this->session        = $session;
    }

    public function authenticateToken(TokenInterface $token, UserProviderInterface $userProvider, $providerKey)
    {

        $request = Request::createFromGlobals()->request->get('login');

        $session = $this->session->get('gcb_captcha');        

        try {

            $user = $userProvider->loadUserByUsername($token->getUsername());

        } catch (UsernameNotFoundException $e) {

            throw new AuthenticationException('Usuario y/o clave no corresponde. Intente nuevamente o diríjase al administrador');
        }

        $encoder = $this->encoderFactory->getEncoder($user);

        $clave2 = base64_decode(base64_decode($request['_psinsajo']));
        
        //$clave2 = $request['_psinsajo'];
        
        //die('uclave: '.$user->getPassword().' clave2:'.$clave2.' token:'.$token->getCredentials().' salt:'.$user->getSalt());
        
        $passwordValid = $encoder->isPasswordValid(
            $user->getPassword(),
            $clave2,
            $user->getSalt()
        );

        if ($passwordValid) {

            // Check for valid captcha
            if (isset($request['captcha']) && isset($session['phrase']) &&
                !$this->compare($request['captcha'], $session['phrase'])) {
                throw new AuthenticationException('El codigo ingresado no es válido. Intente nuevamente');
            }            

            return new UsernamePasswordToken(
                $user,
                $user->getPassword(),
                $providerKey,
                $user->getRoles()
            );
        }

        throw new AuthenticationException('Usuario y/o clave no corresponde. Intente nuevamente o diríjase al administrador '.$clave2);
    }

    public function supportsToken(TokenInterface $token, $providerKey)
    {
        return $token instanceof UsernamePasswordToken
            && $token->getProviderKey() === $providerKey;
    }

    public function createToken(Request $request, $username, $password, $providerKey)
    {
        return new UsernamePasswordToken($username, $password, $providerKey);
    }
}

?>