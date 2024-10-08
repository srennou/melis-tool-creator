<?php

/**
 * Melis Technology (http://www.melistechnology.com)
 *
 * @copyright Copyright (c) 2017 Melis Technology (http://www.melistechnology.com)
 *
 */

namespace ModuleTpl\Controller;


use Laminas\Session\Container;
use Laminas\View\Model\JsonModel;
use Laminas\View\Model\ViewModel;
use MelisCore\Controller\MelisAbstractActionController;

class ListController extends MelisAbstractActionController
{
    public function renderToolAction()
    {
        $view = new ViewModel();
        return $view;
    }

    public function renderToolHeaderAction()
    {
        $view = new ViewModel();
        return $view;
    }

    public function renderToolContentAction()
    {
        $view = new ViewModel();

        $melisTool = $this->getServiceManager()->get('ModuleTplToolService');
        $melisTool->setMelisToolKey('moduletpl', 'moduletpl_tools');

        $columns = $melisTool->getColumns();
        $translator = $this->getServiceManager()->get('translator');
        $columns['actions'] = ['text' => $translator->translate('tr_moduletpl_common_table_column_action')];

        $view->tableColumns = $columns;
#RENDERTOOLTABLE

        return $view;
    }

    public function getListAction()
    {
        $melisTool = $this->getServiceManager()->get('ModuleTplToolService');
        $melisTool->setMelisToolKey('moduletpl', 'moduletpl_tools');

        $moduleTplService = $this->getServiceManager()->get('ModuleTplService');

        $draw = 0;
        $dataCount = 0;
        $tableData = [];
        /**@var HttpRequest $request */
        $request = $this->getRequest();
        if($request->isPost()){

            // Get the locale used from meliscore session
            $container = new Container('meliscore');
            $langId = $container['melis-lang-id'];

            $draw = $request->getPost('draw');

            $start = $request->getPost('start');
            $length =  $request->getPost('length');

            $search = $request->getPost('search');
            $search = $search['value'];

            $selCol = $request->getPost('order');
            $colId = array_keys($melisTool->getColumns());
            $selCol = $colId[$selCol[0]['column']];

            $sortOrder = $request->getPost('order');
            $sortOrder = $sortOrder[0]['dir'];

#TCCOFILTERDATA
            $tableData = $moduleTplService->getList($start, $length, $melisTool->getSearchableColumns(), $search, $selCol, $sortOrder, $langId, false#TCCOFILTERPARAMES)->toArray();
            $dataCount = $moduleTplService->getList(null, null, $melisTool->getSearchableColumns(), $search, null, 'ASC', $langId, true#TCCOFILTERPARAMES)->current();

            #TCCOREEVENTSERVICE

#TCDATAEMPTYFILTER

#TCBLOBDATAFILTER

#TCTABLECOLDISPLAYFILTER

        }

        return new JsonModel([
            'draw' => (int) $draw,
            'recordsTotal' => count($tableData),
            'recordsFiltered' =>  $dataCount->totalRecords,
            'data' => $tableData,
        ]);
    }

    public function renderTableFilterLimitAction()
    {
        return new ViewModel();
    }
#TCSHOWHIDEFILTERFUNCTION
#TCCOFILTERRENDERFUNCTIONS

    public function renderTableFilterSearchAction()
    {
        return new ViewModel();
    }

    public function renderTableFilterRefreshAction()
    {
        return new ViewModel();
    }

    public function renderTableActionEditAction()
    {
        return new ViewModel();
    }

    public function renderTableActionDeleteAction()
    {
        return new ViewModel();
    }

#TCMODALVIEWMODEL
#TCREORDERACTION

    public function deleteItemAction()
    {
        $this->getEventManager()->trigger('moduletpl_delete_end', $this, $this->getRequest());

        return new JsonModel([
            'success' => true,
            'textTitle' => 'tr_moduletpl_delete_item',
            'textMessage' => 'tr_moduletpl_delete_success',
        ]);
    }
}