<?php

/**
 * thread actions.
 *
 * @package    HELLO_WORLD
 * @subpackage thread
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class threadActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
    $this->threads = Doctrine::getTable('Thread')
      ->createQuery('a')
      ->execute();
  }

  public function executeShow(sfWebRequest $request)
  {
    $this->thread = Doctrine::getTable('Thread')->find(array($request->getParameter('id')));
    $this->forward404Unless($this->thread);
  }

  public function executeNew(sfWebRequest $request)
  {
    $this->form = new ThreadForm();
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST));

    $this->form = new ThreadForm();

    $this->processForm($request, $this->form);

    $this->setTemplate('new');
  }

  public function executeEdit(sfWebRequest $request)
  {
    $this->forward404Unless($thread = Doctrine::getTable('Thread')->find(array($request->getParameter('id'))), sprintf('Object thread does not exist (%s).', $request->getParameter('id')));
    $this->form = new ThreadForm($thread);
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
    $this->forward404Unless($thread = Doctrine::getTable('Thread')->find(array($request->getParameter('id'))), sprintf('Object thread does not exist (%s).', $request->getParameter('id')));
    $this->form = new ThreadForm($thread);

    $this->processForm($request, $this->form);

    $this->setTemplate('edit');
  }

  public function executeDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    $this->forward404Unless($thread = Doctrine::getTable('Thread')->find(array($request->getParameter('id'))), sprintf('Object thread does not exist (%s).', $request->getParameter('id')));
    $thread->delete();

    $this->redirect('thread/index');
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $thread = $form->save();

      $this->redirect('thread/edit?id='.$thread->getId());
    }
  }
}
