<?php

/**
 * ranking actions.
 *
 * @package    HELLO_WORLD
 * @subpackage ranking
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class rankingActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
    $this->rankings = Doctrine::getTable('Ranking')
      ->createQuery('a')
      ->execute();
  }

  public function executeShow(sfWebRequest $request)
  {
    $this->ranking = Doctrine::getTable('Ranking')->find(array($request->getParameter('id')));
    $this->forward404Unless($this->ranking);
  }

  public function executeNew(sfWebRequest $request)
  {
    $this->form = new RankingForm();
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST));

    $this->form = new RankingForm();

    $this->processForm($request, $this->form);

    $this->setTemplate('new');
  }

  public function executeEdit(sfWebRequest $request)
  {
    $this->forward404Unless($ranking = Doctrine::getTable('Ranking')->find(array($request->getParameter('id'))), sprintf('Object ranking does not exist (%s).', $request->getParameter('id')));
    $this->form = new RankingForm($ranking);
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
    $this->forward404Unless($ranking = Doctrine::getTable('Ranking')->find(array($request->getParameter('id'))), sprintf('Object ranking does not exist (%s).', $request->getParameter('id')));
    $this->form = new RankingForm($ranking);

    $this->processForm($request, $this->form);

    $this->setTemplate('edit');
  }

  public function executeDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    $this->forward404Unless($ranking = Doctrine::getTable('Ranking')->find(array($request->getParameter('id'))), sprintf('Object ranking does not exist (%s).', $request->getParameter('id')));
    $ranking->delete();

    $this->redirect('ranking/index');
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $ranking = $form->save();

      $this->redirect('ranking/edit?id='.$ranking->getId());
    }
  }
}
