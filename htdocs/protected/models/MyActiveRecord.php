<?php

/**
 * This is an extension of the CActiveRecord class to allow custom getters.
 */
class MyActiveRecord extends CActiveRecord
{
     /**
     * PHP getter magic method.
     * This method is overridden here so that ActiveRecord will look first
     * for a custom getter() method in the model, THEN look for an attribute
     * (table column) if it doesn't find a custom getter().
     * @param string property name
     * @return mixed property value
     * @see getAttribute
     */
    public function __get($name)
    {
            $getter='get'.$name;
            if(method_exists($this,$getter))
                    return $this->$getter();

            return parent::__get($name);
    }
}
