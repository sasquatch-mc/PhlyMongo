<?php

namespace PhlyMongo;

interface RangedPaginatorAdapterInterface
{

    /**
     * Used to get the current page's first item ID
     *
     * @return mixed|\MongoId
     */
    public function getCurrentId();

    /**
     * Step determines the direction (prev or next) of the moving
     * and the absolute value of step is the number of pages to skip
     *
     * @return integer
     */
    public function getStep();

    /**
     * Step limit
     *
     * Since the step is implemented using skip() we need to have some limitation on this
     *
     * @return integer
     */
    public function getStepLimit();

}