<?php

    function getTokel()
    {
       return bin2hex(random_bytes(20));
    }