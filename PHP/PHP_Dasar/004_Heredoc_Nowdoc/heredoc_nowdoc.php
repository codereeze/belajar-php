<?php
// multiline string

// heredoc
$name = 'John Doe';

echo <<<HeredocString
    This is multiline string with heredoc
    you can call a variable without concatination
    hello $name, you're awesome!
HeredocString;


// nowdoc
echo <<<'NowdocString'
    Welcome to PHP Basic
    you are learning multiline string with nowdoc in PHP
    have a nice day!
NowdocString;

