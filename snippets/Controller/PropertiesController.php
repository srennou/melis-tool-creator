<?php

/**
 * Melis Technology (http://www.melistechnology.com)
 *
 * @copyright Copyright (c) 2017 Melis Technology (http://www.melistechnology.com)
 *
 */

namespace ModuleTpl\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;
use Zend\View\Model\JsonModel;
use Zend\Session\Container;

class PropertiesController extends AbstractActionController
{

#TCPROPACTIONS

    public function saveAction()
    {
        $translator = $this->getServiceLocator()->get('translator');

        $success = 0;
        $textTitle = $translator->translate('tr_moduletpl_title');
        $textMessage = $translator->translate('tr_moduletpl_unable_to_save');
        $errors = [];

        $request = $this->getRequest();
        $id = null;
        $entryTitle = null;

        if ($request->isPost()){

            $this->getEventManager()->trigger('moduletpl_properties_save_start', $this, $request);

            // Result stored on session
            $container = new Container('moduletpl');
            $saveResult = $container['moduletpl-save-action'];

            if (!empty($saveResult['errors']))
                $errors = $saveResult['errors'];
            if (!empty($saveResult['data']))
                $data = $saveResult['data'];

            if (empty($errors)){
                $id = $data['id'];
                $success = 1;

                $entryTitle = $translator->translate('tr_moduletpl_common_entry_id').': '.$id;
                $textMessage = $translator->translate('tr_moduletpl_save_success');
            }

            // Unset temporary data on session
            unset($container['moduletpl-save-action']);
        }

        $response = [
            'success' => $success,
            'textTitle' => $textTitle,
            'textMessage' => $textMessage,
            'errors' => $errors
        ];

        if (!is_null($id)){
            $response['entryId'] = $id;
            $response['entryTitle'] = $entryTitle;
        }

        return new JsonModel($response);
    }

    public function savePropertiesAction()
    {
        $id = null;
        $entryTitle = null;
        $success = 0;
        $errors = [];

        $translator = $this->getServiceLocator()->get('translator');

        $request = $this->getRequest();
        $postData = $request->getPost()->toArray();

        if (!empty($postData['#TCKEY']))
            $id = $postData['#TCKEY'];

        $moduleTplForm = $this->getForm();
        $moduleTplForm->setData($postData);

        if ($moduleTplForm->isValid()){

            $formData = $moduleTplForm->getData();

            $moduleTplLangTable = $this->getServiceLocator()->get('ModuleTplTable');
            $res = $moduleTplLangTable->save($formData, $id);

            if (!is_null($res)){
                $id = $res;
                $success = 1;
            }
        }else{
            $errors = $moduleTplForm->getMessages();
            foreach ($errors as $keyError => $valueError){
                $errors[$keyError]['label'] = $translator->translate("tr_moduletpl_".$keyError);
            }
        }

        $result = [
            'success' => $success,
            'errors' => $errors,
            'data' => ['id' => $id],
        ];

        return new JsonModel($result);
    }

    public function deleteAction()
    {
        $request = $this->getRequest();
        $queryData = $request->getQuery()->toArray();

        if (!empty($queryData['id'])){
            $moduleTplTable = $this->getServiceLocator()->get('ModuleTplTable');
            $moduleTplTable->deleteById($queryData['id']);
        }
    }

    private function getForm()
    {
        $melisCoreConfig = $this->serviceLocator->get('MelisCoreConfig');
        $appConfigForm = $melisCoreConfig->getFormMergedAndOrdered('moduletpl/tools/moduletpl_tools/forms/moduletpl_property_form', 'moduletpl_property_form');

        // Factoring ModuleTpl event and pass to view
        $factory = new \Zend\Form\Factory();
        $formElements = $this->serviceLocator->get('FormElementManager');
        $factory->setFormElementManager($formElements);
        $form = $factory->createForm($appConfigForm);

        return $form;
    }
}