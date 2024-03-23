<?php

/**
 * This is logical operators (||, &&, !, xor)
 *
 */

//  OR
var_dump(true || false); // true
var_dump(false || false); // false
var_dump(true || true); // true


// AND
var_dump(true && false); // false
var_dump(false && false); // false
var_dump(true && true); // true


// NOT
var_dump(!true); // false
var_dump(!false); // true


// XOR
var_dump(true xor true); // false
var_dump(false xor false); // false
var_dump(true xor false); // true
