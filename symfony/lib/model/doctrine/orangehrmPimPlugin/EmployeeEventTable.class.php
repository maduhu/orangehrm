<?php

/**
 * EmployeeEventTable
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class EmployeeEventTable extends PluginEmployeeEventTable
{
    /**
     * Returns an instance of this class.
     *
     * @return object EmployeeEventTable
     */
    public static function getInstance()
    {
        return Doctrine_Core::getTable('EmployeeEvent');
    }
}