<?php

function is_popular_slang($string)
{
    if (in_array($string, array('潮語', '屈機', 'O嘴'))) {
        return true;
    }
    return false;
}
