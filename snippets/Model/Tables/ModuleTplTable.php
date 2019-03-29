<?php

/**
 * Melis Technology (http://www.melistechnology.com)
 *
 * @copyright Copyright (c) 2016 Melis Technology (http://www.melistechnology.com)
 *
 */

namespace ModuleTpl\Model\Tables;

use MelisCore\Model\Tables\MelisGenericTable;
use Zend\Db\Sql\Expression;
use Zend\Db\Sql\Predicate\Like;
use Zend\Db\Sql\Predicate\PredicateSet;
use Zend\Db\TableGateway\TableGateway;

class ModuleTplTable extends MelisGenericTable
{
    protected $tableGateway;
    protected $idField;
    
    public function __construct(TableGateway $tableGateway)
    {
        parent::__construct($tableGateway);
        #TCPRIMARYKEYCOLUMN
    }

    public function getList($start = null, $limit = null, $searchKeys = [], $searchValue = null, $orderKey = null, $order = 'ASC', $langId = 1)
    {
        $select = $this->tableGateway->getSql()->select();

        $select->columns(['*', new Expression('#TCPPRIMARYTABLE.'.$this->idField.' As DT_RowId')]);

#TCPJOINSYNTX

        if (!empty($searchValue)){

            $search = [];
            foreach ($searchKeys As $col)
                $search[$col] = new Like($col, '%'.$searchValue.'%');

            $filters = [new PredicateSet($search, PredicateSet::COMBINED_BY_OR)];

            $select->where($filters);
        }

        if ($orderKey == $this->idField)
            $orderKey = 'DT_RowId';

        if (!is_null($orderKey))
            $select->order($orderKey.' '.$order);

        if (!is_null($start))
            $select->offset((int) $start);

        if (!is_null($limit))
            $select->limit((int) $limit);

        $select->group('DT_RowId');

        $resultSet = $this->tableGateway->selectWith($select);

        return $resultSet;
    }
}