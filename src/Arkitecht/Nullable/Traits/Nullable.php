<?php
/**
 * User: sutter
 * Date: 12/29/15
 * Time: 10:24 PM
 */

namespace Arkitecht\Nullable\Traits;


trait Nullable
{
    /**
     * Boot the nullable trait for a model.
     * Sets the saving method to check for nullables, and if so, NULL them
     *
     * @return void
     */
    public static function bootNullable()
    {
        static::saving(function ($model) {
            if (property_exists($model, 'nullable')) {
                self::setNullables($model);
            }
        });
    }

    protected static function setNullables($model)
    {
        foreach ($model->nullable as $field) {
            if (empty($model->{$field})) {
                $model->{$field} = null;
            }
        }
    }
}