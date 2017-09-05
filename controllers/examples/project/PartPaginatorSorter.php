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
        $sorterIDODL = $this->makeSoterDescription();
        $sorterOperazione = $this->makeSoterSource();
        $sorterOraInizio = $this->makeSoterSourceLeadTime();
        $sorterOraFine =$this->makeSoterPartTypeCode();
        $soterQuantitaProgrammata = $this->makeSoterMeasurementUnitCode();
        $sorterQuantitaRealizzata = $this->makeSoterPartCategoryCode();


        // Paginate
        $paginator = $this->makePaginator();
        $this->model->sql = $paginator->query;

        // List
        $parts = $this->makeDataRepeater();

        // Finally binding
        // Sortes components
        $this->bindComponent($sorterID);
        $this->bindComponent($sorterIDODL);
        $this->bindComponent($sorterOperazione);
        $this->bindComponent($sorterOraInizio);
        $this->bindComponent($sorterOraFine);
        $this->bindComponent($soterQuantitaProgrammata);
        $this->bindComponent($sorterQuantitaRealizzata);

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
        $sorterIDODL->setName("IDODL");
        $sorterIDODL->field = "IDODL";
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
        $sorterOperazione->setName("Operazione");
        $sorterOperazione->field = "Operazione";
        $sorterOperazione->caption = "{RES:source}";
        $sorterOperazione->init($this->model);
        return $sorterOperazione;
    }

    /**
     * Make sorte for source_lead_time field
     * @return SorterBootstrap
     */
    protected function makeSoterSourceLeadTime()
    {
        $sorterOraInizio = new SorterBootstrap();
        $sorterOraInizio->setName("OraInizio");
        $sorterOraInizio->field = "OraInizio";
        $sorterOraInizio->caption = "{RES:source_lead_time}";
        $sorterOraInizio->init($this->model);
        return $sorterOraInizio;
    }

    /**
     * Make sorte for measurement_unit_code field
     * @return SorterBootstrap
     */
    protected function makeSoterMeasurementUnitCode()
    {
        $sorterOraFine = new SorterBootstrap();
        $sorterOraFine->setName("OraFine");
        $sorterOraFine->field = "OraFine";
        $sorterOraFine->caption = "{RES:measurement_unit_code}";
        $sorterOraFine->init($this->model);
        return $sorterOraFine;
    }

    /**
     * Make sorte for part_type_code field
     * @return SorterBootstrap
     */
    protected function makeSoterPartTypeCode()
    {
        $soterQuantitaProgrammata = new SorterBootstrap();
        $soterQuantitaProgrammata->setName("QuantitaProgrammata");
        $soterQuantitaProgrammata->field = "QuantitaProgrammata";
        $soterQuantitaProgrammata->caption = "{RES:part_type_code}";
        $soterQuantitaProgrammata->init($this->model);
        return $soterQuantitaProgrammata;
    }

    /**
     * Make sorte for part_category_code field
     * @return SorterBootstrap
     */
    protected function makeSoterPartCategoryCode()
    {
        $sorterQuantitaRealizzata = new SorterBootstrap();
        $sorterQuantitaRealizzata->setName("QuantitaRealizzata");
        $sorterQuantitaRealizzata->field = "QuantitaRealizzata";
        $sorterQuantitaRealizzata->caption = "{RES:part_category_code}";
        $sorterQuantitaRealizzata->init($this->model);
        return $sorterQuantitaRealizzata;
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
