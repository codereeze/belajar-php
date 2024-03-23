<?php

// using try catch
try {
    // write code potential error
    throw new ErrorException("this is potential code error 1");
    echo "not executed code";
} catch (Exception $error) {
    // show the error
    echo $error->getMessage() . PHP_EOL;
}


// using try catch finally
try {
    // write code potential error
    throw new ErrorException("this is potential code error 2");

    // this code will not execute
    echo "not executed code";
} catch (Exception $error) {
    // show the error
    echo $error->getMessage() . PHP_EOL;
}finally{
    // finally block is alaways executed, even if it is an error or not
    echo "i'am alaways executed";
}