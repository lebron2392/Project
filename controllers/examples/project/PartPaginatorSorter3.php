<?php

namespace controllers\examples\project;

use framework\Controller;
use framework\Model;
use framework\View;

use models\examples\project\PartPaginator3 as PartPaginatorModel;
use views\examples\project\P3 as PartListView;

use controllers\examples\cms\NavigationBar;
use framework\components\DataRepeater;
use framework\components\bootstrap\PaginatorBootstrap;
use framework\components\bootstrap\SorterBootstrap;

class PartPaginatorSorter3 extends Controller
{
    /**
    * Object constructor.
    *
    * @param View $view
    * @param Model $mode
    */

    // We optionally can remove constructor (and also getModel method)
    // simply by using inheritance and declaring :
    // -> class PartPaginatorSorter extends PartPaginator
    public function __construct()
    {
        $this->model = $this->getModel();
        $this->view = $this->getView();
        parent::__construct($this->view,$this->model);

        $navigation = new NavigationBar();
        $navigation->view->loadCustomTemplate("templates/examples/cms/navigation_bar_progetto");
        $this->bindController($navigation);
    }


    protected function autorun($parameters = null)
    {
        // Note:
        // By using multiple db components play attention to instantiate
        // them in the following order: Sorters,Paginators, DataRepeater
        // (same order of db query processor)

        // Sort
        $sorterID = $this->makeSoterID();
        $sorterCognome = $this->makeSoterCognome();
        $sorterNome = $this->makeSoterNome();
        $sorterRuolo = $this->makeSoterRuolo();
        $sorterDataAssunzione = $this->makeSoterDataAssunzione();

        // Paginate
        $paginator = $this->makePaginator();
        $this->model->sql = $paginator->query;

        // List
        $parts = $this->makeDataRepeater();

        // Finally binding
        // Sortes components
        $this->bindComponent($sorterID);
        $this->bindComponent($sorterCognome);
        $this->bindComponent($sorterNome);
        $this->bindComponent($sorterRuolo);
        $this->bindComponent($sorterDataAssunzione);

        // Paginator component
        $this->bindComponent($paginator);

        // Paginator components
        $this->bindComponent($parts);
    }

    /**
     * Makes the paginator.
     * @return PaginatorBootstrap
     */
    protected function makePaginator()
    {
        $paginator = new PaginatorBootstrap();
        $paginator->setName("Bottom");
        $paginator->resultPerPage = 10;
        $paginator->setModel($this->model);
        $paginator->buildPagination();
        return $paginator;
    }

    /**
     * Makes the data list
     * @return DataRepeater
     */
    protected function makeDataRepeater()
    {
        $parts = new  DataRepeater($this->view,$this->model,"Parts",null);
        return $parts;
    }

    /**
     * Makes sorter for part_code field
     * @return SorterBootstrap
     */
    protected function makeSoterID()
    {
        $sorterID = new SorterBootstrap();
        $sorterID->setName("IDOperaio");
        $sorterID->field = "IDOperaio";
        $sorterID->caption = "{RES:IDOperaio}";
        $sorterID->init($this->model);
        return $sorterID;
    }

    protected function makeSoterCognome()
    {
        $sorterCognome = new SorterBootstrap();
        $sorterCognome->setName("Cognome");
        $sorterCognome->field = "Cognome";
        $sorterCognome->caption = "{RES:Cognome}";
        $sorterCognome->init($this->model);
        return $sorterCognome;
    }

    protected function makeSoterNome()
    {
        $sorterNome = new SorterBootstrap();
        $sorterNome->setName("Nome");
        $sorterNome->field = "Nome";
        $sorterNome->caption = "{RES:Nome}";
        $sorterNome->init($this->model);
        return $sorterNome;
    }

    protected function makeSoterRuolo()
    {
        $sorterRuolo = new SorterBootstrap();
        $sorterRuolo->setName("Ruolo");
        $sorterRuolo->field = "Ruolo";
        $sorterRuolo->caption = "{RES:Ruolo}";
        $sorterRuolo->init($this->model);
        return $sorterRuolo;
    }

    protected function makeSoterDataAssunzione()
    {
        $sorterDataAssunzione = new SorterBootstrap();
        $sorterDataAssunzione->setName("DataAssunzione");
        $sorterDataAssunzione->field = "DataAssunzione";
        $sorterDataAssunzione->caption = "{RES:DataAssunzione}";
        $sorterDataAssunzione->init($this->model);
        return $sorterDataAssunzione;
    }

    public function open($pk)
    {
        $_GET["IDOperaio"] = $pk;
        $this->autorun();
        $this->render();
    }


    /**
    * Inizialize the View by loading static design of /examples/db/part_paginator.html.tpl
    * managed by views\examples\db\PartPaginator class
    *
    */
    public function getView()
    {
        $view = new PartListView("/examples/project/part_paginator_sorter3");
        return $view;
    }

    /**
    * Inizialize the Model by loading models\examples\db\PartPaginator class
    *
    */
    public function getModel()
    {
        $model = new PartPaginatorModel();
        return $model;
    }
}
