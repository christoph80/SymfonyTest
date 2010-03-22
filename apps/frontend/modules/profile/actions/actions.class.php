<?php

/**
 * profile actions.
 *
 * @package    OpenBRD
 * @subpackage profile
 * @author     Ralph B. Magnus
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class profileActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
    $this->sf_guard_user_profiles = Doctrine::getTable('sfGuardUserProfile')
      ->createQuery('a')
      ->execute();
  }

  public function executeShow(sfWebRequest $request)
  {
    $this->sf_guard_user_profile = Doctrine::getTable('sfGuardUserProfile')->find(array($request->getParameter('id')));
    $this->forward404Unless($this->sf_guard_user_profile);
  }

  public function executeNew(sfWebRequest $request)
  {
    $this->form = new sfGuardUserProfileForm();
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST));

    $this->form = new sfGuardUserProfileForm();

    $this->processForm($request, $this->form);

    $this->setTemplate('new');
  }

  public function executeEdit(sfWebRequest $request)
  {
    $this->forward404Unless($sf_guard_user_profile = Doctrine::getTable('sfGuardUserProfile')->find(array($request->getParameter('id'))), sprintf('Object sf_guard_user_profile does not exist (%s).', $request->getParameter('id')));
    $this->form = new sfGuardUserProfileForm($sf_guard_user_profile);
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
    $this->forward404Unless($sf_guard_user_profile = Doctrine::getTable('sfGuardUserProfile')->find(array($request->getParameter('id'))), sprintf('Object sf_guard_user_profile does not exist (%s).', $request->getParameter('id')));
    $this->form = new sfGuardUserProfileForm($sf_guard_user_profile);

    $this->processForm($request, $this->form);

    $this->setTemplate('edit');
  }

  public function executeDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    $this->forward404Unless($sf_guard_user_profile = Doctrine::getTable('sfGuardUserProfile')->find(array($request->getParameter('id'))), sprintf('Object sf_guard_user_profile does not exist (%s).', $request->getParameter('id')));
    $sf_guard_user_profile->delete();

    $this->redirect('profile/index');
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $sf_guard_user_profile = $form->save();

      $this->redirect('profile/edit?id='.$sf_guard_user_profile->getId());
    }
  }
}
