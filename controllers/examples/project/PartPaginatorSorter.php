<?php
/**
 * Class PartPaginator
 *
 * {ControllerResponsability}
 *
 * @package controllers\examples\db
 * @category Application Controller
 * @author  {AuthorName} - {AuthorEmail}
*/
namespace controllers\examples\project;

use framework\Controller;
use framework\Model;
use framework\View;
use models\examples\project\PartPaginator as PartPaginatorModel;
use views\examples\project\PartList as PartListView;
use controllers\examples\cms\NavigationBar;
use framework\components\DataRepeater;
use framework\components\bootstrap\PaginatorBootstrap;
use framework\components\bootstrap\SorterBootstrap;

class PartPaginatorSorter extends Controller
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
        $this->bindController($navigation);
    }


    protected function autorun($parameters = null)
    {
        // Note:
        // By using multiple db components play attention to instantiate
        // them in the following order: Sorters,Paginators, DataRepeater
        // (same order of db query processor)

        // Sort
        $sorterID = $this->makeSoterPartCode();
        $sorterGiorno = $this->makeSoterDescription();
        $sorterIDOperaio = $this->makeSoterSource();

        // Paginate
        $paginator = $this->makePaginator();
        $this->model->sql = $paginator->query;

        // List
        $parts = $this->makeDataRepeater();

        // Finally binding
        // Sortes components
        $this->bindComponent($sorterID);
        $this->bindComponent($sorterGiorno);
        $this->bindComponent($sorterIDOperaio);

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
    protected function makeSoterPartCode()
    {
        $sorterID = new SorterBootstrap();
        $sorterID->setName("ID");
        $sorterID->field = "ID";
        $sorterID->caption = "{RES:part_code}";
        $sorterID->init($this->model);
        return $sorterID;
    }

    /**
     * Make sorter for description field
     * @return SorterBootstrap
     */
    protected function makeSoterDescription()
    {
        $sorterIDODL = new SorterBootstrap();
        $sorterIDODL->setName("Giorno");
        $sorterIDODL->field = "Giorno";
        $sorterIDODL->caption = "{RES:description}";
        $sorterIDODL->init($this->model);
        return $sorterIDODL;
    }

    /**
     * Make sorter for source field
     * @return SorterBootstrap
     */
    protected function makeSoterSource()
    {
        $sorterOperazione = new SorterBootstrap();
        $sorterOperazione->setName("IDOperaio");
        $sorterOperazione->field = "IDOperaio";
        $sorterOperazione->caption = "{RES:source}";
        $sorterOperazione->init($this->model);
        return $sorterOperazione;
    }

    /**
    * Inizialize the View by loading static design of /examples/db/part_paginator.html.tpl
    * managed by views\examples\db\PartPaginator class
    *
    */
    public function getView()
    {
        $view = new PartListView("/examples/project/part_paginator_sorter");
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
