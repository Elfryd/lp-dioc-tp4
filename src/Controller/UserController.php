<?php

namespace App\Controller;

use App\Entity\User;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class UserController extends Controller
{
    /**
<<<<<<< 286f74449066e184e21d9734e85ebb218d3275eb
     * // FIXME: la route doit être /my_profile.
=======
     * // FIXME: la route doit être /my_profile
     * @Route(
     *     path="/my_profile",
     *     name="my_profile"
     * )
>>>>>>> draft
     */
    public function myProfileAction()
    {
        return $this->render('User/my_profile.html.twig');
    }

    /**
<<<<<<< 286f74449066e184e21d9734e85ebb218d3275eb
     * // FIXME: la route doit être /profile/3 par exemple.
=======
     * // FIXME: la route doit être /profile/3 par exemple
     * @Route(
     *     path="/profile/{id}",
     *     name="profile"
     * )
>>>>>>> draft
     */
    public function profileAction(User $user)
    {
        // FIXME: un utilisateur connecté qui se rend sur sa propre page est redirigé vers /my_profile

        return $this->render('User/profile.html.twig', ['user' => $user]);
    }
}
