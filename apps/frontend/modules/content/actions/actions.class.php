<?php

/**
 * content actions.
 *
 * @package    HELLO_WORLD
 * @subpackage content
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class contentActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
    $this->contents = Doctrine::getTable('Content')
      ->createQuery('a')
      ->execute();
  }

  public function executeShow(sfWebRequest $request)
  {
    $this->content = Doctrine::getTable('Content')->find(array($request->getParameter('id')));
    $this->forward404Unless($this->content);
  }

  public function executeNew(sfWebRequest $request)
  {
    $this->form = new ContentForm();
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST));

    $this->form = new ContentForm();

    $this->processForm($request, $this->form);

    $this->setTemplate('new');
  }

  public function executeEdit(sfWebRequest $request)
  {
    $this->forward404Unless($content = Doctrine::getTable('Content')->find(array($request->getParameter('id'))), sprintf('Object content does not exist (%s).', $request->getParameter('id')));
    $this->form = new ContentForm($content);
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
    $this->forward404Unless($content = Doctrine::getTable('Content')->find(array($request->getParameter('id'))), sprintf('Object content does not exist (%s).', $request->getParameter('id')));
    $this->form = new ContentForm($content);

    $this->processForm($request, $this->form);

    $this->setTemplate('edit');
  }

  public function executeDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    $this->forward404Unless($content = Doctrine::getTable('Content')->find(array($request->getParameter('id'))), sprintf('Object content does not exist (%s).', $request->getParameter('id')));
    $content->delete();

    $this->redirect('content/index');
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $content = $form->save();

      $this->redirect('content/edit?id='.$content->getId());
    }
  }
}
