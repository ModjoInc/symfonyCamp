<?php

namespace Habib\PlatformBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

/**
 *
 */
class AdvertController extends Controller
{

  public function indexAction($page)
  {
    if ($page < 1) {
      throw new NotFoundHttpException('"' . $page . '"s dead, Baby. "' . $page . '"s dead.');
    }
    return $this->render('HabibPlatformBundle:Advert:index.html.twig');
  }

  public function viewAction($id)
  {
    return $this->render(
      'HabibPlatformBundle:Advert:view.html.twig',
      array(
        'id' => $id
    ));

  }

  public function addAction(Request $request)
  {
    if ($request->isMethod('POST')) {
      $request->getSession()->getFlashBag()->add('notice', 'annonce bien enregistrée');

      return $this->redirectToRoute('habib_platform_view', array(
      'id' => 5
    ));
    return $this->render('HabibPlatformBundle:Advert:add.html.twig');
    }
  }

  public function editAction($id, Request $request)
  {
    if ($request->isMethod('POST')) {
      $request->getSession()->getFlashBag()->add('notice', 'annonce bien modifiée');
      return $this->redirectToRoute(
        'habib_platform_view',
        array(
          'id' => 5
        ));
    }
    return $this->render('HabibPlatformBundle:Advert:edit.html.twig');
  }

  public function deleteAction()
  {
    return $this->render('HabibPlatformBundle:Advert:delete.html.twig');
  }
}
