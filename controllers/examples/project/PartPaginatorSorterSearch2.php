<?php
/**
 * Created by PhpStorm.
 * User: Saro
 * Date: 11/04/2017
 * Time: 17:17
 */

namespace controllers\examples\project;

use views\examples\project\P2 as PartListView;
use framework\components\Searcher;

class PartPaginatorSorterSearch2 extends PartPaginatorSorter2
{

    public function autorun($parameters = null)
    {
        // First of all apply where by using a saercher
        // Order is: Search, Sort, Paginate then Fetch.
        $this->makeSearcher();
        parent::autorun($parameters);

    }

    /**
     * Builds searcher
     */
    protected function makeSearcher()
    {
        // Creates a searcher by sharing model and view
        $searcher = new Searcher($this->view, $this->model);

        // Set component name
        $searcher->setName("ricerca");

        // Creates filters: table field, form input, operators into query, type
        $searcher->addFilter("ID","s_id","=","string");

        // Sets form name (tpl variable)
        $searcher->setFormName("search_form", $searcher->getName());

        // Sets component submit and reset inputs name (tpl variables)
        $searcher->setResetButton("search_reset", "Reset");
        $searcher->setSubmitButton("search_submit","Cerca");

        // Init component
        $searcher->init($this->model,$this->view);
    }

    public function getView()
    {
        $view = new PartListView("/examples/project/part_paginator_sorter_search2");
        return $view;
    }

}