<?php

/**
 * reply actions.
 *
 * @package    OpenBRD
 * @subpackage reply
 * @author     Ralph B. Magnus
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class replyActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
    $this->replys = Doctrine::getTable('Reply')
      ->createQuery('a')
      ->execute();
  }

  public function executeShow(sfWebRequest $request)
  {
    $this->reply = Doctrine::getTable('Reply')->find(array($request->getParameter('id')));
    $this->forward404Unless($this->reply);
  }

  public function executeNew(sfWebRequest $request)
  {
    $this->form = new ReplyForm();
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST));

    $this->form = new ReplyForm();

    $this->processForm($request, $this->form);

    $this->setTemplate('new');
  }

  public function executeEdit(sfWebRequest $request)
  {
    $this->forward404Unless($reply = Doctrine::getTable('Reply')->find(array($request->getParameter('id'))), sprintf('Object reply does not exist (%s).', $request->getParameter('id')));
    $this->form = new ReplyForm($reply);
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
    $this->forward404Unless($reply = Doctrine::getTable('Reply')->find(array($request->getParameter('id'))), sprintf('Object reply does not exist (%s).', $request->getParameter('id')));
    $this->form = new ReplyForm($reply);

    $this->processForm($request, $this->form);

    $this->setTemplate('edit');
  }

  public function executeDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    $this->forward404Unless($reply = Doctrine::getTable('Reply')->find(array($request->getParameter('id'))), sprintf('Object reply does not exist (%s).', $request->getParameter('id')));
    $reply->delete();

    $this->redirect('reply/index');
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $reply = $form->save();

      $this->redirect('reply/edit?id='.$reply->getId());
    }
  }
}
