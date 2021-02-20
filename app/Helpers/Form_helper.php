<?php
function display_error($validation, $field)
{

    if (isset($validation)) {
        if ($validation->hasError($field)) {
            return $validation->getError($field);
        }
    } else {
        return false;
    }
}

function input_error($validation, $field)
{
    if (isset($validation)) {
        if ($validation->hasError($field)) {
            return 'is-invalid';
        } else {
            return false;
        }
    }
}
